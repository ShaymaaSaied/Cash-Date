<?php
/**
 * Created By Shaymaa at 04/11/18 13:00.
 */

/**
 * Created by PhpStorm.
 * User: Shaymaa
 * Date: 04/11/2018
 * Time: 13:00
 */

namespace MageArab\CashDate\Block\Form;


class Cash extends \Magento\OfflinePayments\Block\Form\Cashondelivery {
    /**
     * Cash on delivery template
     *
     * @var string
     */
    protected $_cashDate;
    protected $_template = 'form/cashondelivery.phtml';


    public function getCashDate()
    {
        if ($this->_cashDate === null) {
            $this->_convertAdditionalData();
            // $this->_cashDate=$this->getInfo()->getCashDate();
        }
        return $this->_cashDate;
    }

    protected function _convertAdditionalData(){

        $data = $this->getInfoData('additional_information');
        return $this;
    }
}