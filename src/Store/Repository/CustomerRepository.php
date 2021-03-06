<?php
declare(strict_types = 1);
namespace Maverickslab\Integration\BigCommerce\Store\Repository;

use Maverickslab\Integration\BigCommerce\Store\Model\Customer;
use Maverickslab\Integration\BigCommerce\Store\Model\CustomerAddress;

/**
 * Customer repository
 *
 * @author cosman
 *        
 */
class CustomerRepository extends BaseRepository
{

    /**
     * Returns number of customer available
     * @return int
     */
    public function count(): int
    {
        $response = $this->bigCommerce->customer()
        ->count()
        ->wait();
        
        $responseData = $this->decodeResponse($response);
        
        return (int) $responseData->data->count ?? 0;
    }
    
    /**
     * Imports all customer from a store on BigCommerce
     *
     * @param array $filters
     * @return \Maverickslab\Integration\BigCommerce\Store\Model\Customer[]
     */
    public function import(array $filters = []): array
    {
        $page = 1;
        $limit = 250;
        $customers = [];
        $itemsReturnedForCurrentRequest = 0;
        
        do {
            $currentCustomers = $this->importByPage($page ++, $limit, $filters);
            
            $itemsReturnedForCurrentRequest = count($currentCustomers);
            
            foreach ($currentCustomers as $customer) {
                $customers[] = $customer;
            }
        } while ($limit === $itemsReturnedForCurrentRequest);
        
        return $customers;
    }

    /**
     * Imports a single customer by Id
     *
     * @param int $id
     * @return \Maverickslab\Integration\BigCommerce\Store\Model\Customer|NULL
     */
    public function importById(int $id): ?Customer
    {
        $filters = [
            'min_id' => $id,
            'max_id' => $id
        ];
        
        $matches = $this->import($filters);
        
        return array_shift($matches);
    }

    /**
     * Imports customers at a given page
     *
     * @param int $page
     * @param int $limit
     * @param array $filters
     * @return \Maverickslab\Integration\BigCommerce\Store\Model\Customer[]
     */
    public function importByPage(int $page = 1, int $limit = 250, array $filters = []): array
    {
        $customers = [];
        
        $response = $this->bigCommerce->customer()
            ->fetch($page, $limit, $filters)
            ->wait();
        
        $responseData = $this->decodeResponse($response);
        
        $addressPromises = [];
        
        if (is_array($responseData->data)) {
            foreach ($responseData->data as $customerModel) {
                $customer = Customer::fromBigCommerce($customerModel);
                $customers[$customer->getId()] = $customer;
                $addressPromises[$customer->getId()] = $this->bigCommerce->customer()->fetchAddresses($customer->getId());
            }
            
            $addressResponses = $this->bigCommerce->customer()
                ->resolvePromises($addressPromises)
                ->wait();
            
            foreach ($addressResponses as $customerId => $addressResponse) {
                $addressResponseData = $this->decodeResponse($addressResponse);
                
                if (is_array($addressResponseData->data)) {
                    $addreses = array_map(function ($addressModel) {
                        return CustomerAddress::fromBigCommerce($addressModel);
                    }, $addressResponseData->data);
                    
                    $customers[$customerId]->addAddresses(...$addreses);
                }
            }
        }
        
        return array_values($customers);
    }

    /**
     * Exports a collection of customers to BigCommerce
     *
     * @param \Maverickslab\Integration\BigCommerce\Store\Model\Customer ...$customers
     * @return \Maverickslab\Integration\BigCommerce\Store\Model\Customer[]
     */
    public function export(Customer ...$customers): array
    {
        $promises = array_map(function (Customer $customer) {
            return $this->bigCommerce->customer()->create($customer->toBigCommerceEntity());
        }, $customers);
        
        $responses = $this->bigCommerce->customer()
            ->resolvePromises($promises)
            ->wait();
        
        $exportedCustomers = [];
        
        foreach ($responses as $response) {
            $responseData = $this->decodeResponse($response);
            $exportedCustomers[] = Customer::fromBigCommerce($responseData->data);
        }
        
        return $exportedCustomers;
    }

    /**
     * Updates a collection of customer on BigCommerce
     *
     * @param \Maverickslab\Integration\BigCommerce\Store\Model\Customer ...$customers
     * @return \Maverickslab\Integration\BigCommerce\Store\Model\Customer[]
     */
    public function exportUpdate(Customer ...$customers): array
    {
        $promises = [];
        
        foreach ($customers as $customer) {
            if ($customers->getId()) {
                $promises[] = $this->bigCommerce->customer()->update($customer->getId(), $customer->toBigCommerceEntity());
            }
        }
        
        $responses = $this->bigCommerce->customer()
            ->resolvePromises($promises)
            ->wait();
        
        $customers = [];
        
        foreach ($responses as $response) {
            $responseData = $this->decodeResponse($response);
            $customers[] = Customer::fromBigCommerce($responseData->data);
        }
        
        return $customers;
    }

    /**
     * Deletes a collection of customer on BigCommerce
     *
     * @param \Maverickslab\Integration\BigCommerce\Store\Model\Customer ...$customers
     * @return void
     */
    public function delete(Customer ...$customers): void
    {
        $this->deleteByIds(...array_map(function (Customer $customer) {
            return $customer->getId();
        }, $customers));
    }

    /**
     * Deletes customers on BigCommerce whose Ids are found in the given collection of Ids
     *
     * @param int ...$customerIds
     * @return void
     */
    public function deleteByIds(int ...$customerIds): void
    {
        $promises = array_map(function (int $customerId) {
            return $this->bigCommerce->customer()->deleteById($customerId);
        }, array_filter($customerIds));
        
        $this->bigCommerce->customer()
            ->resolvePromises($promises)
            ->wait();
    }
}