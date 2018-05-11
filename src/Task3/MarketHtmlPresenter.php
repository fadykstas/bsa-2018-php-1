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
                                    <img src=\"{$currency->getLogoUrl()}\"> 
                                    </li>";
                }
        $html_body .= '</ol>';
        return $html_body;
    }
}