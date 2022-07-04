<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Оплата обучения");
?>
<h3>Доступные способы оплаты</h3>
<a name="bank-card"></a>
<div class="d-flex justify-content-between payment-methods flex-column flex-lg-row">
    <a href="#bank-card">
        <div class="text-center">
            <div class="payment-methods_card">Банковская карта</div>
            <div>Для физических лиц без комиссии</div>
        </div>
    </a>
    <a href="#payment-on-account">
        <div class="text-center">
            <div class="payment-methods_card">Оплата по счету</div>
            <div>Для физических и юридических лиц</div>
        </div>
    </a>
</div>
<h2>
    <? $APPLICATION->IncludeFile('/include/fb/payment/bankovskoaya-karta/title.php'); ?>
</h2>
<div class="card-payment d-flex flex-column pt-3">
    <div>
        <span class="text-light-green pr-2">1.</span>
        <? $APPLICATION->IncludeFile('/include/fb/payment/bankovskoaya-karta/step1.php'); ?>
    </div>
    <i class="fa fa-chevron-down text-light-green align-self-center py-3" aria-hidden="true"></i>
    <div>
        <span class="text-light-green pr-2">2.</span>
        <? $APPLICATION->IncludeFile('/include/fb/payment/bankovskoaya-karta/step2.php'); ?>
    </div>
    <i class="fa fa-chevron-down text-light-green align-self-center py-3" aria-hidden="true"></i>
    <div>
        <span class="text-light-green pr-2">3.</span>
        <? $APPLICATION->IncludeFile('/include/fb/payment/bankovskoaya-karta/step3.php'); ?>
    </div>
    <i class="fa fa-chevron-down text-light-green align-self-center py-3" aria-hidden="true"></i>
    <div>
        <span class="text-light-green pr-2">4.</span>
        <? $APPLICATION->IncludeFile('/include/fb/payment/bankovskoaya-karta/step4.php'); ?>
    </div>
</div>
<div class="voz d-flex justify-content-center">
    <div class="voz_img"></div>
</div>
<div class="attention bg-light-green p-4 mb-4">
    <span class="text-light-green">Внимание!</span> Оплата договора (счета) производится через сервис
    <span class="text-light-green">Ю-Money</span>. К оплате принимаются банковские карты платежных систем
    <span class="font-weight-bold">Visa, MasterCard, Maestro, МИР.</span>
</div>
<div class="yandex-checkout row">
    <div class="col-12 col-lg-7 pt-3 pr-2 pl-3 pb-3 pb-lg-0">
        <? $APPLICATION->IncludeFile('/include/fb/payment/bankovskoaya-karta/servis-yandeks-kassa.php'); ?>
    </div>
    <div class="col-12 col-lg-5 px-lg-0">
        <img src="/bitrix/templates/fb/img/yandex.png" alt="yandex" width="100%" height="auto" />
    </div>
</div>
<a name="payment-on-account"></a>
<h2>
    <? $APPLICATION->IncludeFile('/include/fb/payment/bankovskiy-perevod/title.php'); ?>
</h2>
<div class="cashless-payment">
    <div class="h3">
        <span class="text-light-green pr-2">1.</span>От физических лиц
    </div>
    <div class="pb-3">
        <? $APPLICATION->IncludeFile('/include/fb/payment/bankovskiy-perevod/fizicheskie-litsa.php'); ?>
    </div>
    <div class="attention bg-light-green p-4">
        <span class="text-light-green">Внимание!</span> При оплате счета безналичным переводом банк взимает
        <span class="text-light-green">комиссию</span> в размере
        <span class="text-light-green">от 1 до 3% от суммы платежа.</span>
    </div>
    <div class="h3">
        <span class="text-light-green pr-2">2.</span>От юридических лиц
    </div>
    <div class="pb-3 cashless-payment_marg">
        <? $APPLICATION->IncludeFile('/include/fb/payment/bankovskiy-perevod/yuridicheskie-litsa.php'); ?>
    </div>
    <div class="h3">
        <span class="text-light-green pr-2">3.</span>Особенности оплаты для бюджетных организаций
    </div>
    <div class="pb-3">
        <? $APPLICATION->IncludeFile('/include/fb/payment/bankovskiy-perevod/byudzhetnye-organizatsii.php'); ?>
    </div>
</div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>