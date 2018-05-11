<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    /** @var array CoinAbstract[] */
    protected $currencies = [];

    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }

    public function maxPrice(): float
    {
        return max(array_map(
            function($row){
                /** @var CoinAbstract $row */
                return $row->getDailyPrice();
            },
            $this->currencies
        ));
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}