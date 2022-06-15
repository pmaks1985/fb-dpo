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

<div class="accordion" id="accordionExample">

    <? foreach ($arResult["ITEMS"] as $arItem) : ?>
    <?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

    <div class="mb-4">
        <div id="heading<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <button class="btn w-100 text-left" type="button" data-toggle="collapse"
                data-target="#collapse<?= $this->GetEditAreaId($arItem['ID']); ?>" aria-expanded="true"
                aria-controls="collapseOne">
                <? echo $arItem["NAME"] ?>
            </button>
        </div>
        <div id="collapse<?= $this->GetEditAreaId($arItem['ID']); ?>" class="collapse"
            aria-labelledby="heading<?= $this->GetEditAreaId($arItem['ID']); ?>" data-parent="#accordionExample">
            <? echo $arItem["PREVIEW_TEXT"]; ?>
        </div>
    </div>

    <? endforeach; ?>
    <? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
    <br /><?= $arResult["NAV_STRING"] ?>
    <? endif; ?>
</div>