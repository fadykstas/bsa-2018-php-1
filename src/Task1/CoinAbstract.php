<?php
/**
 * Created by PhpStorm.
 * User: parallels
 * Date: 5/11/18
 * Time: 3:46 PM
 */

namespace Cryptocurrency\Task1;


class CoinAbstract implements Currency
{
    /** @var string $name */
    protected $name;

    /** @var string $name */
    protected $logoUrl;

    /** @var float $name */
    protected $dailyPrice;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getDailyPrice(): float
    {
        return $this->dailyPrice;
    }

    /**
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    /**
     * CoinAbstract constructor.
     */
    public function __construct($dailyPrice)
    {
        $this->dailyPrice = $dailyPrice;
    }


}