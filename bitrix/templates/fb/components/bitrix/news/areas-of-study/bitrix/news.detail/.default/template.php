<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$today = date("Y");
?>

<div class="row cost-of-education_block mx-0">
    <div class="d-flex flex-column col-6 justify-content-between px-0">
        <div class="d-flex justify-content-between">
            <div class="cost-of-education font-weight-bold">
                Стоимость обучения
            </div>
            <div class="text-light-green">
                <span class="price font-weight-bold">
                    от
                    <? if ($arResult["DISPLAY_PROPERTIES"]["BASE_PRICE"]["DISPLAY_VALUE"]) : ?>
                    <?= $arResult["DISPLAY_PROPERTIES"]["BASE_PRICE"]["DISPLAY_VALUE"] ?>
                    <? endif ?>
                </span> руб/чел
            </div>
        </div>
        <div class="d-flex">
            <div class="offer-calculator_calc areas-of-study_calc mr-4"></div>
            <div>Калькулятор скидок</div>
        </div>
        <div class="d-flex">
            <div class="offer-calculator_letter areas-of-study_letter mr-4"></div>
            <div>
                Коммерческое предложение <a href="">получить на email</a>
            </div>
        </div>
    </div>
    <div class="col-6 d-flex flex-column justify-content-between">
        <div class="pl-4">
            <? if ($arResult["DISPLAY_PROPERTIES"]["PRICE_5"]["DISPLAY_VALUE"]) : ?>
            <div class="dropdown">
                <a class="dropdown-toggle text-black font-weight-bold" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Цены подробнее
                </a>
                <i class="fa fa-chevron-down text-light-green pr-1" aria-hidden="true"></i>
                <div class="dropdown-menu special-prices_menu" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-item text-decoration-none special-prices">
                        <span class="font-weight-bold text-light-green">Специальные цены при коллективной заявке!</span>
                        <ul class="pl-4">
                            <li>
                                <? if ($arResult["DISPLAY_PROPERTIES"]["PRICE_5"]["DISPLAY_VALUE"]) : ?>
                                <div>
                                    <?= $arResult["DISPLAY_PROPERTIES"]["PRICE_5"]["NAME"]; ?> -
                                    <span class="font-weight-bold text-light-green">
                                        <?= $arResult["DISPLAY_PROPERTIES"]["PRICE_5"]["DISPLAY_VALUE"] ?></span>
                                    руб/чел;
                                </div>
                                <? endif ?>
                            </li>
                            <li>
                                <? if ($arResult["DISPLAY_PROPERTIES"]["PRICE_10"]["DISPLAY_VALUE"]) : ?>
                                <div>
                                    <?= $arResult["DISPLAY_PROPERTIES"]["PRICE_10"]["NAME"]; ?> -
                                    <span class="font-weight-bold text-light-green">
                                        <?= $arResult["DISPLAY_PROPERTIES"]["PRICE_10"]["DISPLAY_VALUE"] ?></span>
                                    руб/чел;
                                </div>
                                <? endif ?>
                            </li>
                            <li>
                                <? if ($arResult["DISPLAY_PROPERTIES"]["PRICE_20"]["DISPLAY_VALUE"]) : ?>
                                <div>
                                    <?= $arResult["DISPLAY_PROPERTIES"]["PRICE_20"]["NAME"]; ?> -
                                    <span class="font-weight-bold text-light-green">
                                        <?= $arResult["DISPLAY_PROPERTIES"]["PRICE_20"]["DISPLAY_VALUE"] ?></span>
                                    руб/чел;
                                </div>
                                <? endif ?>
                            </li>
                            <li>
                                <? if ($arResult["DISPLAY_PROPERTIES"]["PRICE_30"]["DISPLAY_VALUE"]) : ?>
                                <div>
                                    <?= $arResult["DISPLAY_PROPERTIES"]["PRICE_30"]["NAME"]; ?> -
                                    <span class="font-weight-bold text-light-green">
                                        <?= $arResult["DISPLAY_PROPERTIES"]["PRICE_30"]["DISPLAY_VALUE"] ?></span>
                                    руб/чел
                                </div>
                                <? endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <? endif ?>
        </div>
        <div class="areas-of-study_submit pb-3">
            <a href="" class="d-flex justify-content-center text-center text-white">
                <div class="application-for-training">Оставить заявку</div>
            </a>
        </div>
    </div>
</div>
<div class="bg-light-green d-flex delivery-payment justify-content-between">
    <div class="d-flex align-items-center">
        <div class="delivery-payment_img1"></div>
        <a href="/delivery/">ДОСТАВКА ДОКУМЕНТОВ</a>
    </div>
    <div class="d-flex align-items-center">
        <div class="delivery-payment_img2"></div>
        <a href="/payment/">СПОСОБЫ ОПЛАТЫ</a>
    </div>
</div>

<? $APPLICATION->IncludeFile('/include/fb/areas-of-study/preimushchestva-obucheniya-u-nas.php'); ?>

<? $APPLICATION->IncludeFile('/include/fb/areas-of-study/kak-proyti-distantsionnoe-obuchenie.php'); ?>

<? if ($arResult["DISPLAY_PROPERTIES"]["STUDY_PROGRAMS_TITLE"]["DISPLAY_VALUE"]) : ?>
<h2>
    <?= $arResult["DISPLAY_PROPERTIES"]["STUDY_PROGRAMS_TITLE"]["DISPLAY_VALUE"] ?>, доступные на <?= $today; ?> год
</h2>
<? endif; ?>

<? if ($arResult["DISPLAY_PROPERTIES"]["FROM_WHOM_1"]["DISPLAY_VALUE"]) : ?>
<div class="font-weight-bold pb-4">
    <?= $arResult["DISPLAY_PROPERTIES"]["FROM_WHOM_1"]["DISPLAY_VALUE"] ?>
</div>

<table class="table table-sm mb-5">
    <thead>
        <tr>
            <th>Код программы</th>
            <th>Наименование программы</th>
            <th>Часы</th>
            <th>Срок</th>
            <th>Цена</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?
            $arSelect = array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
            $arFilter = array("IBLOCK_ID" => 3, "SECTION_ID" => $arResult["PROPERTIES"]["COURSE_PROGRAMS"]["VALUE"], "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "PROPERTY_PROG_TYPE_VALUE" => "Программа 1");
            $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arProps = $ob->GetProperties();
            ?>

        <tr>
            <td><?= $arProps["PROG_CODE"]["VALUE"] ?></td>
            <td><?= $arProps["PROG_NAME"]["VALUE"] ?></td>
            <td><?= $arProps["PROG_CLOCK"]["VALUE"] ?></td>
            <td><?= $arProps["PROG_TIME"]["VALUE"] ?></td>
            <td><?= $arProps["PROG_PRICE"]["VALUE"] ?>р</td>
            <td><a href="<?= CFile::GetPath($arProps["PROG_LINK"]["VALUE"]); ?>">Смотреть программу</a></td>
        </tr>

        <? } ?>

    </tbody>
</table>
<? endif; ?>
<? if ($arResult["DISPLAY_PROPERTIES"]["FROM_WHOM_2"]["DISPLAY_VALUE"]) : ?>
<div class="font-weight-bold pb-4">
    <?= $arResult["DISPLAY_PROPERTIES"]["FROM_WHOM_2"]["DISPLAY_VALUE"] ?>
</div>
<table class="table table-sm mb-5">
    <thead>
        <tr>
            <th>Код программы</th>
            <th>Наименование программы</th>
            <th>Часы</th>
            <th>Срок</th>
            <th>Цена</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?
            $arSelect = array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");
            $arFilter = array("IBLOCK_ID" => 3, "SECTION_ID" => $arResult["PROPERTIES"]["COURSE_PROGRAMS"]["VALUE"], "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "PROPERTY_PROG_TYPE_VALUE" => "Программа 2");
            $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
            while ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $arProps = $ob->GetProperties();
            ?>

        <tr>
            <td><?= $arProps["PROG_CODE"]["VALUE"] ?></td>
            <td><?= $arProps["PROG_NAME"]["VALUE"] ?></td>
            <td><?= $arProps["PROG_CLOCK"]["VALUE"] ?></td>
            <td><?= $arProps["PROG_TIME"]["VALUE"] ?></td>
            <td><?= $arProps["PROG_PRICE"]["VALUE"] ?>р</td>
            <td><a href="<?= CFile::GetPath($arProps["PROG_LINK"]["VALUE"]); ?>">Смотреть программу</a></td>
        </tr>

        <? } ?>

    </tbody>
</table>
<? endif; ?>

<? if ($arResult["DISPLAY_PROPERTIES"]["CERTIFICATE_TITLE"]["DISPLAY_VALUE"]) : ?>

<h2><?= $arResult["DISPLAY_PROPERTIES"]["CERTIFICATE_TITLE"]["DISPLAY_VALUE"] ?></h2>

<? if ($arResult["DISPLAY_PROPERTIES"]["CERTIFICATE_DESCRIPTION"]["DISPLAY_VALUE"]) : ?>
<div class="mb-5"><?= $arResult["DISPLAY_PROPERTIES"]["CERTIFICATE_DESCRIPTION"]["DISPLAY_VALUE"]; ?></div>
<? endif; ?>

<div class="d-flex justify-content-center pb-4">
    <img src="<?= $arResult["DISPLAY_PROPERTIES"]["CERTIFICATE_FILE"]["FILE_VALUE"]["SRC"]; ?>" width="80%"
        height="auto" alt="certificate" />
</div>

<? if ($arResult["DISPLAY_PROPERTIES"]["CERTIFICATE_PERIODICITY"]["DISPLAY_VALUE"]) : ?>
<div class="w-75 mx-auto text-center mb-6">
    <?= $arResult["DISPLAY_PROPERTIES"]["CERTIFICATE_PERIODICITY"]["DISPLAY_VALUE"]; ?>
</div>
<? endif; ?>

<? endif; ?>

<? if ($arResult["DISPLAY_PROPERTIES"]["DIPLOMA_TITLE"]["DISPLAY_VALUE"]) : ?>

<h2><?= $arResult["DISPLAY_PROPERTIES"]["DIPLOMA_TITLE"]["DISPLAY_VALUE"]; ?></h2>
<? endif; ?>
<? if ($arResult["DISPLAY_PROPERTIES"]["DIPLOMA_DESCRIPTION"]["DISPLAY_VALUE"]) : ?>
<div class="mb-5"><?= $arResult["DISPLAY_PROPERTIES"]["DIPLOMA_DESCRIPTION"]["DISPLAY_VALUE"]; ?></div>
<? endif; ?>

<? if ($arResult["DISPLAY_PROPERTIES"]["DIPLOMA_FILE"]["FILE_VALUE"]) : ?>
<div class="d-flex justify-content-center pb-4">
    <img src="<?= $arResult["DISPLAY_PROPERTIES"]["DIPLOMA_FILE"]["FILE_VALUE"]["SRC"]; ?>" width="80%" height="auto"
        alt="ticket" />
</div>
<? endif; ?>
<? if ($arResult["DISPLAY_PROPERTIES"]["DIPLOMA_PERIODICITY"]["DISPLAY_VALUE"]) : ?>
<div class="w-75 mx-auto text-center mb-6">
    <?= $arResult["DISPLAY_PROPERTIES"]["DIPLOMA_PERIODICITY"]["DISPLAY_VALUE"]; ?>
</div>
<? endif; ?>



<? if ($arResult["PROPERTIES"]["ADDITIONAL_SECTIONS"]["VALUE"]) : ?>
<? foreach ($arResult["PROPERTIES"]["ADDITIONAL_SECTIONS"]["VALUE"] as $idel) : ?>
<? $obj = CIBlockElement::GetByID($idel);
        if ($objres = $obj->GetNext())
            $ar_res = CPrice::GetBasePrice($objres['ID']);
        ?>
<h2><?= $objres["NAME"] ?></h2>
<div class="mb-6"><?= $objres["~PREVIEW_TEXT"] ?></div>
<? endforeach; ?>
<? endif; ?>


<? if ($arResult["PROPERTIES"]["FAQ"]["VALUE"]) : ?>
<h2>Ответы на часто задаваемые вопросы по дистанционному обучению</h2>
<div class="mb-6">
    <div class="accordion" id="accordionExample">
        <? $i = 0; ?>
        <? foreach ($arResult["PROPERTIES"]["FAQ"]["VALUE"] as $idel) : ?>
        <? $obj = CIBlockElement::GetByID($idel);
                if ($objres = $obj->GetNext())
                    $ar_res = CPrice::GetBasePrice($objres['ID']);
                ?>
        <div class="mb-4">
            <div id="heading<?= $i; ?>">
                <button class="btn w-100 text-left" type="button" data-toggle="collapse"
                    data-target="#collapse<?= $i; ?>" aria-expanded="true"
                    aria-controls="collapse<?= $i; ?>"><?= $objres["NAME"] ?></button>
            </div>

            <div id="collapse<?= $i; ?>" class="collapse" aria-labelledby="heading<?= $i; ?>"
                data-parent="#accordionExample">
                <?= $objres["~PREVIEW_TEXT"] ?>
            </div>
        </div>
        <? $i++; ?>
        <? endforeach; ?>
    </div>
    <a href="/about/faq/" class="answers">Ответы на все часто задаваемые вопросы вы можете посмотреть здесь ></a>
</div>
<? endif; ?>