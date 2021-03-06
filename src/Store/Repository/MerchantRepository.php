<?php
declare(strict_types = 1);
namespace Maverickslab\Integration\BigCommerce\Store\Repository;

use Maverickslab\Integration\BigCommerce\Store\Model\Merchant;

/**
 * Merchant repository
 *
 * @author cosman
 *        
 */
class MerchantRepository extends BaseRepository
{

    /**
     * Reads merchant/store details from BigCommerce
     *
     * @return \Maverickslab\Integration\BigCommerce\Store\Model\Merchant|NULL
     */
    public function details(): ?Merchant
    {
        $response = $this->bigCommerce->merchant()
            ->fetchDetails()
            ->wait();
        
        $responseData = $this->decodeResponse($response);
        
        return Merchant::fromBigCommerce($responseData->data);
    }
}