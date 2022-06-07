<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="d-flex contacts position-relative">
    <div class="contacts_name d-flex">
        <img class="position-absolute" src="/bitrix/templates/fb/img/geo.png" alt="geo" />
        Адреc
    </div>
    <div>
        <? $APPLICATION->IncludeFile('/include/fb/contacts/adres.php'); ?>
    </div>
</div>
<div class="contacts-map">
    <? $APPLICATION->IncludeComponent(
        "bitrix:map.yandex.view",
        "",
        array(
            "CONTROLS" => array(
                0 => "ZOOM",
                1 => "MINIMAP",
                2 => "TYPECONTROL",
                3 => "SCALELINE",
            ),
            "INIT_MAP_TYPE" => "MAP",
            "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:56.96415694379902;s:10:\"yandex_lon\";d:40.94556244446957;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:40.945637546322;s:3:\"LAT\";d:56.964112988641;s:4:\"TEXT\";s:41:\"Академия Безопасности\";}}}",
            "MAP_HEIGHT" => "480",
            "MAP_ID" => "",
            "MAP_WIDTH" => "100%",
            "OPTIONS" => array(
                0 => "ENABLE_DBLCLICK_ZOOM",
            ),
            "COMPONENT_TEMPLATE" => "map",
            "API_KEY" => "",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO"
        ),
        false
    ); ?>
</div>
<div class="d-flex contacts">
    <div class="contacts_name position-relative contacts-phone">
        <img class="position-absolute" src="/bitrix/templates/fb/img/phone.png" alt="phone" />Телефон
    </div>

    <? $APPLICATION->IncludeFile('/include/fb/telefon.php'); ?>

    <div class="d-flex pl-5">
        <div class="contacts_name">Режим работы</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/rezhim-raboty.php'); ?>
        </div>
    </div>
</div>
<div class="d-flex contacts">
    <div class="contacts_name position-relative contacts-phone">
        <img class="position-absolute" src="/bitrix/templates/fb/img/mail.png" alt="mail" />
        <div class="pl-5 pr-2">Email</div>
    </div>
    <? $APPLICATION->IncludeFile('/include/fb/email.php'); ?>
</div>
<h3>
    <? $APPLICATION->IncludeFile('/include/fb/contacts/nazvanie-organizatsii.php'); ?>
</h3>
<div class="d-flex flex-column requisites">
    <div>
        <div class="contacts_name">ИНН</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/inn.php'); ?>
        </div>
    </div>
    <div>
        <div class="contacts_name">КПП</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/kpp.php'); ?>
        </div>
    </div>
    <div>
        <div class="contacts_name">ОКАТО</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/okato.php'); ?>
        </div>
    </div>
    <div>
        <div class="contacts_name">ОКТМО</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/oktmo.php'); ?>
        </div>
    </div>
    <div>
        <div class="contacts_name">ОГРН</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/ogrn.php'); ?>
        </div>
    </div>
    <div>
        <div class="contacts_name">Р/СЧ.</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/r-sch.php'); ?>
        </div>
    </div>
    <div>
        <div class="contacts_name">Банк</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/bank.php'); ?>
        </div>
    </div>
    <div>
        <div class="contacts_name">КОР/СЧ.</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/kor-sch.php'); ?>
        </div>
    </div>
    <div>
        <div class="contacts_name">БИК</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/bik.php'); ?>
        </div>
    </div>
    <div>
        <div class="contacts_name">ОКВЭД (основной)</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/okved-osnovnoy.php'); ?>
        </div>
    </div>
    <div>
        <div class="contacts_name">Генеральный директор</div>
        <div>
            <? $APPLICATION->IncludeFile('/include/fb/contacts/generalnyy-direktor.php'); ?>
        </div>
    </div>
</div>
<div class="d-flex flex-column any-questions text-center mx-auto">
    <div class="any-questions_title">Остались вопросы?</div>
    <div class="any-questions_desc">
        Получите консультацию от экспертов УЦ Фактор безопасности
    </div>
    <div class="font-weight-bold">
        <? $APPLICATION->IncludeFile('/include/fb/telefon.php'); ?>
    </div>
    <div>
        <a href="" class="d-flex justify-content-center text-center text-white">
            <div class="application-for-training mb-0">Задать вопрос</div>
        </a>
    </div>
    <div class="font-weight-medium">
        Заполните форму и мы вам перезвоним
    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>