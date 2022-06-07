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
?>

<div class="d-flex flex-wrap slider">
    <? foreach ($arResult["ITEMS"] as $arItem) : ?>
    <?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

    <a class="image-link" <? if ($arItem["DISPLAY_PROPERTIES"]["DOCS_FILE"]["FILE_VALUE"]["SRC"]) : ?> href="
        <?= ($arItem["DISPLAY_PROPERTIES"]["DOCS_FILE"]["FILE_VALUE"]["SRC"]) ?>"
        <? else : ?> href="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" data-lightbox="set"
        data-title="<?= $arItem["NAME"] ?>"
        <? endif; ?>>
        <img class="image" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
            title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" />
        <div class="mt-3 mb-4 text-center"><?= $arItem["NAME"] ?></div>
    </a>

    <? endforeach; ?>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
    <br /><?= $arResult["NAV_STRING"] ?>
    <? endif; ?>
</div>