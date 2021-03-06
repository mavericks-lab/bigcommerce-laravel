<?php
declare(strict_types = 1);
namespace Maverickslab\Integration\BigCommerce\Store\Model;

use DateTime;

/**
 * This class represents an ordered product
 *
 * @author cosman
 *        
 */
class OrderedProduct extends BaseModel
{

    /**
     *
     * @var int
     */
    protected $id;

    /**
     *
     * @var int
     */
    protected $order_id;

    /**
     *
     * @var int
     */
    protected $order_address_id;

    /**
     *
     * @var int
     */
    protected $product_id;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var string
     */
    protected $sku;

    /**
     *
     * @var string
     */
    protected $type;

    /**
     *
     * @var float
     */
    protected $base_price;

    /**
     *
     * @var float
     */
    protected $price_ex_tax;

    /**
     *
     * @var float
     */
    protected $price_inc_tax;

    /**
     *
     * @var float
     */
    protected $price_tax;

    /**
     *
     * @var float
     */
    protected $base_total;

    /**
     *
     * @var float
     */
    protected $total_ex_tax;

    /**
     *
     * @var float
     */
    protected $total_inc_tax;

    /**
     *
     * @var float
     */
    protected $total_tax;

    /**
     *
     * @var float
     */
    protected $weight;

    /**
     *
     * @var int
     */
    protected $quantity;

    /**
     *
     * @var float
     */
    protected $base_cost_price;

    /**
     *
     * @var float
     */
    protected $cost_price_inc_tax;

    /**
     *
     * @var float
     */
    protected $cost_price_ex_tax;

    /**
     *
     * @var float
     */
    protected $cost_price_tax;

    /**
     *
     * @var bool
     */
    protected $is_refunded;

    /**
     *
     * @var int
     */
    protected $quantity_refunded;

    /**
     *
     * @var float
     */
    protected $refund_amount;

    /**
     *
     * @var int
     */
    protected $return_id;

    /**
     *
     * @var string
     */
    protected $wrapping_name;

    /**
     *
     * @var float
     */
    protected $base_wrapping_cost;

    /**
     *
     * @var float
     */
    protected $wrapping_cost_ex_tax;

    /**
     *
     * @var float
     */
    protected $wrapping_cost_inc_tax;

    /**
     *
     * @var float
     */
    protected $wrapping_cost_tax;

    /**
     *
     * @var string
     */
    protected $wrapping_message;

    /**
     *
     * @var int
     */
    protected $quantity_shipped;

    /**
     *
     * @var string
     */
    protected $event_name;

    /**
     *
     * @var DateTime
     */
    protected $event_date;

    /**
     *
     * @var float
     */
    protected $fixed_shipping_cost;

    /**
     *
     * @var string
     */
    protected $ebay_item_id;

    /**
     *
     * @var string
     */
    protected $ebay_transaction_id;

    /**
     *
     * @var int
     */
    protected $option_set_id;

    /**
     *
     * @var int
     */
    protected $parent_order_product_id;

    /**
     *
     * @var bool
     */
    protected $is_bundled_product;

    /**
     *
     * @var string
     */
    protected $bin_picking_number;

    /**
     *
     * @var int
     */
    protected $external_id;

    /**
     *
     * @var AppliedDiscount[]
     */
    protected $applied_discounts = [];

    /**
     *
     * @var OrderedProductOption[]
     */
    protected $product_options = [];

    /**
     *
     * @var array
     */
    protected $configurable_fields = [];

    /**
     *
     * @return int|NULL
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     *
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     *
     * @return int|NULL
     */
    public function getOrderId(): ?int
    {
        return $this->order_id;
    }

    /**
     *
     * @param int $id
     * @return self
     */
    public function setOrderId(?int $id): self
    {
        $this->order_id = $id;
        
        return $this;
    }

    /**
     *
     * @return int|NULL
     */
    public function getOrderAddressId(): ?int
    {
        return $this->order_address_id;
    }

    /**
     *
     * @param int $id
     * @return self
     */
    public function setOrderAddressId(?int $id): self
    {
        $this->order_address_id = $id;
        
        return $this;
    }

    /**
     *
     * @return int|NULL
     */
    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    /**
     *
     * @param int $id
     * @return self
     */
    public function setProductId(?int $id): self
    {
        $this->product_id = $id;
        
        return $this;
    }

    /**
     *
     * @return string|NULL
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     *
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        
        return $this;
    }

    /**
     *
     * @return string|NULL
     */
    public function getSKU(): ?string
    {
        return $this->sku;
    }

    /**
     *
     * @param string $sku
     * @return self
     */
    public function setSKU(?string $sku): self
    {
        $this->sku = $sku;
        
        return $this;
    }

    /**
     *
     * @return string|NULL
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     *
     * @param string $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getBasePrice(): ?float
    {
        return $this->base_price;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setBasePrice(?float $price): self
    {
        $this->base_price = $price;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getPriceExcludingTax(): ?float
    {
        return $this->price_ex_tax;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setPriceExcludingTax(?float $price): self
    {
        $this->price_ex_tax = $price;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getPriceIncludingTax(): ?float
    {
        return $this->price_inc_tax;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setPriceIncludingTax(?float $price): self
    {
        $this->price_inc_tax = $price;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getPriceTax(): ?float
    {
        return $this->price_tax;
    }

    /**
     *
     * @param float $tax
     * @return self
     */
    public function setPriceTax(?float $tax): self
    {
        $this->price_tax = $tax;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getBaseTotal(): ?float
    {
        return $this->base_total;
    }

    /**
     *
     * @param float $total
     * @return self
     */
    public function setBaseTotal(?float $total): self
    {
        $this->base_total = $total;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getTotalExcludingTax(): ?float
    {
        return $this->total_ex_tax;
    }

    /**
     *
     * @param float $total
     * @return self
     */
    public function setTotalExcludingTax(?float $total): self
    {
        $this->total_ex_tax = $total;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getTotalIncludingTax(): ?float
    {
        return $this->total_inc_tax;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setTotalIncludingTax(?float $total): self
    {
        $this->total_inc_tax = $total;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getTotalTax(): ?float
    {
        return $this->total_tax;
    }

    /**
     *
     * @param float $tax
     * @return self
     */
    public function setTotalTax(?float $tax): self
    {
        $this->total_tax = $tax;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        
        return $this;
    }

    /**
     *
     * @return int|NULL
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getBaseCostPrice(): ?float
    {
        return $this->base_cost_price;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setBaseCostPrice(?float $price): self
    {
        $this->base_cost_price = $price;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getCostPriceExcludingTax(): ?float
    {
        return $this->cost_price_ex_tax;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setCostPriceExcludingTax(?float $price): self
    {
        $this->cost_price_ex_tax = $price;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getCostPriceIncludingTax(): ?float
    {
        return $this->cost_price_inc_tax;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setCostPriceIncludingTax(?float $price): self
    {
        $this->cost_price_inc_tax = $price;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getCostPriceTax(): ?float
    {
        return $this->cost_price_tax;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setCostPriceTax(?float $tax): self
    {
        $this->cost_price_tax = $tax;
        
        return $this;
    }

    /**
     *
     * @return bool|NULL
     */
    public function isRefunded(): ?bool
    {
        return $this->is_refunded;
    }

    /**
     *
     * @param bool $state
     * @return self
     */
    public function setIsRefunded(?bool $state): self
    {
        $this->is_refunded = $state;
        
        return $this;
    }

    /**
     *
     * @return int|NULL
     */
    public function getQuantityRefunded(): ?int
    {
        return $this->quantity_refunded;
    }

    /**
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantityRefunded(?int $quantity): self
    {
        $this->quantity_refunded = $quantity;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getAmountRefunded(): ?float
    {
        return $this->refund_amount;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setAmountRefunded(?float $amount): self
    {
        $this->refund_amount = $amount;
        
        return $this;
    }

    /**
     *
     * @return int|NULL
     */
    public function getReturnId(): ?int
    {
        return $this->return_id;
    }

    /**
     *
     * @param int $id
     * @return self
     */
    public function setReturnId(?int $id): self
    {
        $this->return_id = $id;
        
        return $this;
    }

    /**
     *
     * @return string|NULL
     */
    public function getWrappingName(): ?string
    {
        return $this->wrapping_name;
    }

    /**
     *
     * @param string $name
     * @return self
     */
    public function setWrappingName(?string $name): self
    {
        $this->wrapping_name = $name;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getBaseWrappingCost(): ?float
    {
        return $this->base_wrapping_cost;
    }

    /**
     *
     * @param float $cost
     * @return self
     */
    public function setBaseWrappingCost(?float $cost): self
    {
        $this->base_wrapping_cost = $cost;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getWrappingCostExcludingTax(): ?float
    {
        return $this->wrapping_cost_ex_tax;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setWrappingCostExcludingTax(?float $price): self
    {
        $this->wrapping_cost_ex_tax = $price;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getWrappingCostIncludingTax(): ?float
    {
        return $this->wrapping_cost_inc_tax;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setWrappingCostIncludingTax(?float $price): self
    {
        $this->wrapping_cost_inc_tax = $price;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getWrappingCostTax(): ?float
    {
        return $this->wrapping_cost_tax;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setWrappingCostTax(?float $price): self
    {
        $this->wrapping_cost_tax = $price;
        
        return $this;
    }

    /**
     *
     * @return string|NULL
     */
    public function getWrappingMessage(): ?string
    {
        return $this->wrapping_message;
    }

    /**
     *
     * @param string $message
     * @return self
     */
    public function setWrappingMessage(?string $message): self
    {
        $this->wrapping_message = $message;
        
        return $this;
    }

    /**
     *
     * @return int|NULL
     */
    public function getQuantityShipped(): ?float
    {
        return $this->quantity_shipped;
    }

    /**
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantityShipped(?int $quantity): self
    {
        $this->quantity_shipped = $quantity;
        
        return $this;
    }

    /**
     *
     * @return string|NULL
     */
    public function getEventName(): ?string
    {
        return $this->event_name;
    }

    /**
     *
     * @param string $name
     * @return self
     */
    public function setEventName(?string $name): self
    {
        $this->event_name = $name;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getEventDate(): ?DateTime
    {
        return $this->event_date;
    }

    /**
     *
     * @param DateTime $price
     * @return self
     */
    public function setEventDate(?DateTime $date): self
    {
        $this->event_date = $date;
        
        return $this;
    }

    /**
     *
     * @return float|NULL
     */
    public function getFixedShippingCost(): ?float
    {
        return $this->fixed_shipping_cost;
    }

    /**
     *
     * @param float $price
     * @return self
     */
    public function setFixedShippingCost(?float $price): self
    {
        $this->fixed_shipping_cost = $price;
        
        return $this;
    }

    /**
     *
     * @return string|NULL
     */
    public function getEbayItemId(): ?string
    {
        return $this->ebay_item_id;
    }

    /**
     *
     * @param string $id
     * @return self
     */
    public function setEbayItemId(?string $id): self
    {
        $this->ebay_item_id = $id;
        
        return $this;
    }

    /**
     *
     * @return string|NULL
     */
    public function getEbayTransactionId(): ?string
    {
        return $this->ebay_transaction_id;
    }

    /**
     *
     * @param string $id
     * @return self
     */
    public function setEbayTransactionId(?string $id): self
    {
        $this->ebay_transaction_id = $id;
        
        return $this;
    }

    /**
     *
     * @return int|NULL
     */
    public function getOptionSetId(): ?int
    {
        return $this->option_set_id;
    }

    /**
     *
     * @param int $id
     * @return self
     */
    public function setOptionSetId(?int $id): self
    {
        $this->option_set_id = $id;
        
        return $this;
    }

    /**
     *
     * @return int|NULL
     */
    public function getParentOrderProductId(): ?int
    {
        return $this->parent_order_product_id;
    }

    /**
     *
     * @param int $id
     * @return self
     */
    public function setParentOrderProductId(?int $id): self
    {
        $this->parent_order_product_id = $id;
        
        return $this;
    }

    /**
     *
     * @return bool|NULL
     */
    public function isBundledProduct(): ?float
    {
        return $this->is_bundled_product;
    }

    /**
     *
     * @param bool $state
     * @return self
     */
    public function setIsBundledProduct(?bool $state): self
    {
        $this->is_bundled_product = $state;
        
        return $this;
    }

    /**
     *
     * @return string|NULL
     */
    public function getBinKeepingNumber(): ?string
    {
        return $this->bin_picking_number;
    }

    /**
     *
     * @param string $binNumber
     * @return self
     */
    public function setBindKeepingNumber(?string $binNumber): self
    {
        $this->bin_picking_number = $binNumber;
        
        return $this;
    }

    /**
     *
     * @return int|NULL
     */
    public function getExternalId(): ?int
    {
        return $this->external_id;
    }

    /**
     *
     * @param int $id
     * @return self
     */
    public function setExternalId(?int $id): self
    {
        $this->external_id = $id;
        
        return $this;
    }

    /**
     *
     * @return AppliedDiscount[]
     */
    public function getAppliedDiscounts(): array
    {
        return $this->applied_discounts;
    }

    /**
     *
     * @param AppliedDiscount ...$discount
     * @return self
     */
    public function addAppliedDiscounts(AppliedDiscount ...$discounts): self
    {
        foreach ($discounts as $discount) {
            $this->applied_discounts[] = $discount;
        }
        
        return $this;
    }

    /**
     *
     * @return \Maverickslab\Integration\BigCommerce\Store\Model\OrderedProductOption[]
     */
    public function getProductOptions(): array
    {
        return $this->product_options;
    }

    /**
     *
     * @param OrderedProductOption ...$options
     * @return self
     */
    public function addProductOptions(OrderedProductOption ...$options): self
    {
        foreach ($options as $option) {
            $this->product_options[] = $option;
        }
        
        return $this;
    }

    /**
     *
     * @return \stdClass[]
     */
    public function getConfiguration(): array
    {
        return $this->configurable_fields;
    }

    /**
     *
     * @param \stdClass ...$configurations
     * @return self
     */
    public function addConfigurations(\stdClass ...$configs): self
    {
        foreach ($configs as $config) {
            $this->configurable_fields[] = $config;
        }
        
        return $this;
    }

    /**
     * Creates an instance of this class from a BigCommerce entity/model
     *
     * @param mixed $model
     * @return self
     */
    public static function fromBigCommerce($model = null)
    {
        $instance = new static();
        
        if (null !== $model) {
            $instance->setId((int) static::readAttribute($model, 'id'));
            $instance->setOrderId((int) static::readAttribute($model, 'order_id'));
            $instance->setOrderAddressId((int) static::readAttribute($model, 'order_address_id'));
            $instance->setProductId((int) static::readAttribute($model, 'product_id'));
            $instance->setName((string) static::readAttribute($model, 'name'));
            $instance->setSKU((string) static::readAttribute($model, 'sku'));
            $instance->setType((string) static::readAttribute($model, 'type'));
            $instance->setBasePrice((float) static::readAttribute($model, 'base_price'));
            $instance->setPriceExcludingTax((float) static::readAttribute($model, 'price_ex_tax'));
            $instance->setPriceIncludingTax((float) static::readAttribute($model, 'price_inc_tax'));
            $instance->setPriceTax((float) static::readAttribute($model, 'price_tax'));
            $instance->setBaseTotal((float) static::readAttribute($model, 'base_total'));
            $instance->setTotalExcludingTax((float) static::readAttribute($model, 'total_ex_tax'));
            $instance->setTotalIncludingTax((float) static::readAttribute($model, 'total_inc_tax'));
            $instance->setTotalTax((float) static::readAttribute($model, 'total_tax'));
            $instance->setWeight((float) static::readAttribute($model, 'weight'));
            $instance->setQuantity((int) static::readAttribute($model, 'quantity'));
            $instance->setBaseCostPrice((float) static::readAttribute($model, 'base_cost_price'));
            $instance->setCostPriceExcludingTax((float) static::readAttribute($model, 'cost_price_ex_tax'));
            $instance->setCostPriceIncludingTax((float) static::readAttribute($model, 'cost_price_inc_tax'));
            $instance->setCostPriceTax((float) static::readAttribute($model, 'cost_price_tax'));
            $instance->setIsRefunded(true === static::readAttribute($model, 'is_refunded'));
            $instance->setQuantityRefunded((int) static::readAttribute($model, 'quantity_refunded'));
            $instance->setAmountRefunded((float) static::readAttribute($model, 'refund_amount'));
            $instance->setReturnId((int) static::readAttribute($model, 'return_id'));
            $instance->setWrappingName((string) static::readAttribute($model, 'wrapping_name'));
            $instance->setBaseWrappingCost((float) static::readAttribute($model, 'base_wrapping_cost'));
            $instance->setWrappingCostExcludingTax((float) static::readAttribute($model, 'wrapping_cost_ex_tax'));
            $instance->setWrappingCostIncludingTax((float) static::readAttribute($model, 'wrapping_cost_inc_tax'));
            $instance->setWrappingCostTax((float) static::readAttribute($model, 'wrapping_cost_tax'));
            $instance->setWrappingMessage((string) static::readAttribute($model, 'wrapping_message'));
            $instance->setQuantityShipped((int) static::readAttribute($model, 'quantity_shipped'));
            $instance->setEventName((string) static::readAttribute($model, 'event_name'));
            $instance->setEventDate(static::createDateTime((string) static::readAttribute($model, 'event_date')));
            $instance->setFixedShippingCost((float) static::readAttribute($model, 'fixed_Shipping_cost'));
            $instance->setEbayItemId((string) static::readAttribute($model, 'ebay_item_id'));
            $instance->setEbayTransactionId((string) static::readAttribute($model, 'ebay_transaction_id'));
            $instance->setOptionSetId((int) static::readAttribute($model, 'option_set_id'));
            $instance->setParentOrderProductId((int) static::readAttribute($model, 'parent_order_product_id'));
            $instance->setIsBundledProduct(false === static::readAttribute($model, 'is_bundled_product'));
            $instance->setBindKeepingNumber((string) static::readAttribute($model, 'bin_picking_number'));
            $instance->setExternalId((int) static::readAttribute($model, 'external_id'));
            
            $appliedDiscountArray = static::readAttribute($model, 'applied_discounts', []);
            
            if (is_array($appliedDiscountArray)) {
                $appliedDiscounts = array_map(function ($discountModel) {
                    return AppliedDiscount::fromBigCommerce($discountModel);
                }, $appliedDiscountArray);
                
                $instance->addAppliedDiscounts(...$appliedDiscounts);
            }
            
            $productOptionArray = static::readAttribute($model, 'product_options', []);
            
            if (is_array($productOptionArray)) {
                $productOptions = array_map(function ($optionModel) {
                    return OrderedProductOption::fromBigCommerce($optionModel);
                }, $productOptionArray);
                
                $instance->addProductOptions(...$productOptions);
            }
            
            $configurableFields = static::readAttribute($model, 'configurable_fields', []);
            
            if (is_array($configurableFields)) {
                $instance->addConfigurations(...$configurableFields);
            }
        }
        
        return $instance;
    }
}