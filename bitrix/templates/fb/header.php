<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <? $APPLICATION->ShowHead(); ?>
    <title>
        <? $APPLICATION->ShowTitle() ?>
    </title>

    <?

    use Bitrix\Main\Page\Asset;
    ?>

    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/font-awesome.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mmenu-light.css");
    ?>

    <?
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.5.1.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mmenu-light.js");
    ?>

</head>

<body>
    <? $APPLICATION->ShowPanel(); ?>
    <div class="sticky">
        <header>
            <div class="container-xl">
                <div class="row pt-lg-5 pt-3">
                    <div class="col-lg-3 col-12 p-0">
                        <a href="/">
                            <div class="logo d-flex justify-content-end justify-content-lg-start">
                                <div class="logo_img"></div>
                                <div class="logo_text pr-3 pr-lg-0">
                                    <div class="pt-3 pb-2">Фактор Безопасности</div>
                                    <div>Учебный центр</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-12 p-0 mt-3">
                        <div class="d-flex justify-content-lg-between align-items-center justify-content-around">
                            <div class="select-region d-flex align-items-center">
                                <i class="fa fa-chevron-down text-light-green pr-1 d-none" aria-hidden="true"></i>
                                <span class="d-none">Московская область</span>
                            </div>
                            <div class="header-phone">
                                <? $APPLICATION->IncludeFile('/include/fb/telefon.php'); ?>
                            </div>
                            <div class="header-time">
                                <? $APPLICATION->IncludeFile('/include/fb/rezhim-raboty.php'); ?>
                            </div>
                        </div>
                        <div class="d-flex header-bottom flex-column flex-lg-row align-items-center">
                            <div class="pb-4 pb-lg-0">
                                <? $APPLICATION->IncludeFile('/include/fb/header/kommercheskoe-predlozhenie.php'); ?>
                            </div>
                            <div>
                                <? $APPLICATION->IncludeFile('/include/fb/header/zayavka-na-obuchenie.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-12 p-0 mt-lg-3 text-lg-right d-flex align-items-center d-lg-block flex-column mt-4">

                        <div class="callback">
                            <? $APPLICATION->IncludeFile('/include/fb/header/zakazat-obratnyy-zvonok.php'); ?>
                        </div>
                        <div class="come-in d-flex justify-content-lg-end justify-content-center">
                            <a href="#" class="d-flex align-items-center">
                                <div>Войти</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-xl p-0 pb-5 d-flex justify-content-between align-items-center flex-column flex-lg-row">


            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "horizontal_multilevel-top",
                array(
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "topfirst",    // Тип меню для остальных уровней
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "2",    // Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                    "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                    "MENU_THEME" => "site"
                ),
                false
            ); ?>


            <div class="d-block d-lg-none mobile">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "horizontal_multilevel-mobile",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "topfirst",    // Тип меню для остальных уровней
                        "DELAY" => "N",    // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "2",    // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                        "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                        "MENU_THEME" => "site"
                    ),
                    false
                ); ?>
            </div>

            <div class="d-none">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:search.title",
                    "bootstrap_v4",
                    array(
                        "CATEGORY_0" => array(
                            0 => "iblock_aos",
                        ),
                        "CATEGORY_0_TITLE" => "",
                        "CATEGORY_0_iblock_aos" => array(
                            0 => "1",
                            1 => "2",
                            2 => "3",
                            3 => "4",
                            4 => "5",
                            5 => "6",
                            6 => "7",
                            7 => "all",
                        ),
                        "CHECK_DATES" => "Y",
                        "CONTAINER_ID" => "title-search",
                        "CONVERT_CURRENCY" => "N",
                        "INPUT_ID" => "title-search-input",
                        "NUM_CATEGORIES" => "1",
                        "ORDER" => "date",
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "PREVIEW_HEIGHT" => "75",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PREVIEW_WIDTH" => "75",
                        "PRICE_CODE" => array(),
                        "PRICE_VAT_INCLUDE" => "N",
                        "SHOW_INPUT" => "Y",
                        "SHOW_OTHERS" => "N",
                        "SHOW_PREVIEW" => "N",
                        "TEMPLATE_THEME" => "blue",
                        "TOP_COUNT" => "5",
                        "USE_LANGUAGE_GUESS" => "Y",
                        "COMPONENT_TEMPLATE" => "bootstrap_v4"
                    ),
                    false
                ); ?>

                <div class="position-relative">
                    <form class="nav-search position-absolute mb-0 align-items-center d-none">
                        <i class="fa fa-search pr-1 text-gray position-absolute pl-2" aria-hidden="true"></i>
                        <input class="mr-n2 magic-input" type="search" placeholder="Поиск..." />
                        <button class="text-white border-0">Найти</button>
                    </form>
                    <div class="d-flex text-gray search align-items-center">
                        <i class="fa fa-search pr-1" aria-hidden="true"></i>
                        <a href="#" class="text-gray text-underline magic-link">Поиск по сайту</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="content">
        <? if ($APPLICATION->GetCurDir() == '/') : ?>
        <div class="general-img mx-auto">
            <? else : ?>
            <div class="container-xl px-0 pt-4">
                <? $APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "aos-breadcrumb",
                        array(
                            "PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => "0",
                            "COMPONENT_TEMPLATE" => "aos-breadcrumb"
                        ),
                        false
                    ); ?>
                <h1>
                    <? $APPLICATION->ShowTitle(false); ?>
                </h1>
                <? endif; ?>