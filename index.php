<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "TITLE");
$APPLICATION->SetPageProperty("description", "some else text");
$APPLICATION->SetPageProperty("keywords", "some text");
$APPLICATION->SetTitle("H1");
?>
<div class="container-xl px-0">
    <div class="general d-flex flex-column justify-content-between">
        <div>
            <div class="general-title">
                <? $APPLICATION->IncludeFile('/include/fb/general/zagolovok-na-bannere.php'); ?>
            </div>
            <div class="general-description">
                <? $APPLICATION->IncludeFile('/include/fb/general/opisanie-na-bannere.php'); ?>
            </div>
        </div>
        <div class="general-link">
            <a class="text-white" href="">Заявка на обучение</a>
            <a class="text-white" href="">Задать вопрос</a>
        </div>
    </div>
</div>
</div>
<div class="container-xl px-3 px-lg-0">
    <div class="educational-center pt-5">
        <div class="educational-center_title pb-5">
            <? $APPLICATION->IncludeFile('/include/fb/general/uchebnyy-tsentr-provodit.php'); ?>
        </div>
        <div class="educational-center_link d-flex">
            <a class="text-center" href="">Образовательная лицензия</a>
            <a class="text-center mx-0 mx-lg-4" class="mx-4" href="">Проверка в Реестре МИНТРУДА</a>
            <a class="text-center" href="">Проверка лицензии в РОСОБРНАДЗОРЕ</a>
        </div>
    </div>

    <div class="directions-of-study">
        <h2>Направления обучения</h2>

        <? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"general-list",
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "N",
				"DISPLAY_PREVIEW_TEXT" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "1",
				"IBLOCK_TYPE" => "aos",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "20",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "general-list"
			),
			false
		); ?>


    </div>

    <div class="d-flex flex-column flex-lg-row offer-calculator justify-content-between">
        <div class="d-flex pb-4 pb-lg-0">
            <div class="offer-calculator_calc mr-2 mr-lg-4"></div>
            <div class="d-flex flex-column justify-content-between">
                <div class="offer-calculator_calc__title">
                    <a href="">Калькулятор скидок</a>
                </div>
                <div>Специальные цены при коллективной заявке!</div>
            </div>
        </div>
        <div class="d-flex">
            <div class="offer-calculator_letter mr-2 mr-lg-4"></div>
            <div class="d-flex flex-column justify-content-between">
                <div class="offer-calculator_calc__title">
                    <a href="">Коммерческое предложение</a>
                </div>
                <div>получить на email</div>
            </div>
        </div>
    </div>

    <? $APPLICATION->IncludeFile('/include/fb/areas-of-study/kak-proyti-distantsionnoe-obuchenie.php'); ?>

    <a href="" class="d-flex justify-content-center text-center text-white">
        <div class="application-for-training">Заявка на обучение</div>
    </a>

    <h2>Оплата</h2>
    <div class="d-flex justify-content-between payment flex-column flex-lg-row">
        <a href="/payment/#bank-card" class="pb-3 pb-lg-0">
            <div class="text-center">
                <div class="payment_title">Банковская карта</div>
                <div class="text-black">Для физических лиц без комиссии</div>
            </div>
        </a>
        <a href="/payment/#payment-on-account">
            <div class="text-center">
                <div class="payment_title">Оплата по счету</div>
                <div class="text-black">Для физических и юридических лиц</div>
            </div>
        </a>
    </div>

    <h2>Доставка</h2>
    <? $APPLICATION->IncludeFile('/include/fb/general/dostavka.php'); ?>
    <a href="">
        <div class="d-flex justify-content-center align-items-center calc-delivery">
            <img src="/layout/img/calc.png" alt="calc" />
            <div class="px-4">Калькулятор доставки</div>
            <i class="fa fa-chevron-right text-light-green" aria-hidden="true"></i>
        </div>
    </a>

    <? $APPLICATION->IncludeFile('/include/fb/areas-of-study/preimushchestva-obucheniya-u-nas.php'); ?>


    <h2>Ответы на часто задаваемые вопросы по дистанционному обучению</h2>

    <? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"faq",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "2",
			"IBLOCK_TYPE" => "aos",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "4",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "NAME",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N",
			"COMPONENT_TEMPLATE" => "faq"
		),
		false
	); ?>

    <a href="/about/faq/" class="answers">Ответы на все часто задаваемые вопросы вы можете посмотреть здесь ></a>

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