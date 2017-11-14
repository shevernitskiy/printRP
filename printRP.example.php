<?php

include('printRP.class.php');

$goods = array();
$goods[] = array(
        'name' => 'Fur Jacket',
        'quantity' => '2',
        'weight' => '560',
        'cost' => '7800'
        );
$goods[] = array(
        'name' => 'Fur Coat',
        'quantity' => '1',
        'weight' => '900',
        'cost' => '15000'
        );
       
try {
        $rp = new printRP();
        $rp
                ->setFromName("Shevernitskiy Kirill")
                ->setFromCompany("Super Shop")
                ->setFromAddress("Kashirskoe s., 55 korp. 1, 177")
                ->setFromIndex("115211")
                ->setFromCity("Moscow")
                ->setFromCountry("Russia")
                ->setToName("Kosachev Mike")
                ->setToCompany("Bonjorno Copr.")
                ->setToAddress("Via Candia, 62, apt. 3")
                ->setToIndex("00192")
                ->setToCity("Rome")
                ->setToCountry("Italy")
                ->setToContact("+14 76576574")
                ->setIsGift(true)
                ->setIsDocument(true)
                ->setIsCommercialGood(true)
                ->setIsReturn(true)
                ->setIsEtc(true)
                ->setComment("Some comment...")
                ->setIsLicense(true)
                ->setLicense("123456")
                ->setIsCertificate(true)
                ->setCertificate("789456")
                ->setIsInvoice(true)
                ->setInvoice("456321")
                ->setGoods($goods)
                ->setNumPakages("1")
                ->setIsPriority(true)
                ->setIsEconom(true)
                ->setIsReturnToSender(true)
                ->setDeclareValue(true); // true или конкретное сумма
        $rp->F107();
} catch (Exception $e) {
        echo 'ERROR: '.$e->getMessage().'</br>';
}

//$res = array();
//$res = $rp->get('goods');
//echo "<pre>";
//print_r($goods);
//echo "</pre>";
//echo "</br>END OF SCRIPT";
