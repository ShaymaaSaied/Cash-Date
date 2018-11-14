<?php
/**
 * Created By Shaymaa at 04/11/18 13:04.
 */

/**
 * Created by PhpStorm.
 * User: Shaymaa
 * Date: 04/11/2018
 * Time: 13:04
 */

namespace MageArab\CashDate\Block\Info;


class Cashondelivery extends \Magento\Payment\Block\Info
{
    /**
     * @var string
     */
    protected $_cashDate;


    protected $_template = 'MageArab_CashDate::info/cashondelivery.phtml';

    /**
     * Enter description here...
     *
     * @return string
     */
    public function getCashDate()
    {
        if ($this->_cashDate === null) {
            $this->_convertAdditionalData();
           // $this->_cashDate=$this->getInfo()->getCashDate();
        }
        return $this->_cashDate;
    }

    protected function _convertAdditionalData(){

        $this->_cashDate = $this->getInfo()->getAdditionalInformation('cash_date');
        return $this;
    }
    /**
     * @return string
     */
    public function toPdf()
    {
        $this->setTemplate('MageArab_CashDate::info/pdf/cashondelivery.phtml');
        return $this->toHtml();
    }

}