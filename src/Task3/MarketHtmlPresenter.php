<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinAbstract;
use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $html_body = '<ol>';
               foreach($market->getCurrencies() as $currency){
                    /**
                     * @var CoinAbstract $currency
                     */
                   $html_body .=   "<li> 
                                    {$currency->getName()}: {$currency->getDailyPrice()} 
                                    : {$this->getCoinPrice($currency->getShortName())}
                                    <img src=\"{$currency->getLogoUrl()}\"> 
                                    </li>";
                }
        $html_body .= '</ol>';



        return $html_body;
    }

    function getCoinPrice(string $coinShortName): float
    {

        $coinPrice = 0;

        $data=file_get_contents("https://apiv2.bitcoinaverage.com/indices/global/ticker/short?crypto={$coinShortName}&fiat=USD");
        if ($data) {
            $currencyPair = $coinShortName.'USD';
            $coinPrice = json_decode($data)->$currencyPair->averages->day;
        };

        return $coinPrice;
    }
}