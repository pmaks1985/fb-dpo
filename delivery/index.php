<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Доставка документов");
?>

<div class="copies">
    <? $APPLICATION->IncludeFile('/include/fb/delivery/opisanie.php'); ?>
</div>
<h3>Доступные варианты доставки</h3>
<div class="d-flex flex-column delivery">
    <div class="d-flex deliveryСard align-items-center">
        <div class="deliveryСard_imgPost"></div>
        <div>
            <div class="deliveryСard_title">Почта России</div>
            <div>
                <? $APPLICATION->IncludeFile('/include/fb/delivery/pochta-rossii.php'); ?>
            </div>
        </div>
    </div>
    <div class="d-flex deliveryСard align-items-center">
        <div class="deliveryСard_imgExpress"></div>
        <div>
            <div class="deliveryСard_title">Сервис Экспресс</div>
            <div>
                <? $APPLICATION->IncludeFile('/include/fb/delivery/servis-ekspress.php'); ?>
            </div>
        </div>
    </div>
</div>
<h3>Тарифы для экспресс-доставки</h3>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"delivery",
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
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "aos",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "",
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
			0 => "DELIVERY_TIME",
			1 => "PRICE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "NAME",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "delivery"
	),
	false
); ?>

<div class="font-weight-bold explanation">
    <? $APPLICATION->IncludeFile('/include/fb/delivery/poyasnenie-k-tablitse.php'); ?>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>