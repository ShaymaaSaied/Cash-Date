<?php
/**
 * Created By Shaymaa at 07/11/18 15:30.
 */

/**
 * Created by PhpStorm.
 * User: Shaymaa
 * Date: 07/11/2018
 * Time: 15:30
 */

namespace MageArab\CashDate\Plugin;


class QuotePaymentPlugin{

    /**
     * @param \Magento\Quote\Model\Quote\Payment $subject
     * @param array $data
     * @return array
     */
    public function beforeImportData(\Magento\Quote\Model\Quote\Payment $subject, array $data){
        if (array_key_exists('additional_data', $data)) {
            $subject->setAdditionalInformation('cash_date',$data['additional_data']['cash_date'])
            ;
            $subject->setData('cash_date',$data['additional_data']['cash_date']);
            $subject->setAdditionalData(NULL)
            ;
        }

        return [$data];
    }

}