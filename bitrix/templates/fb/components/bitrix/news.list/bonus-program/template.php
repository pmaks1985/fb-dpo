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
<? $i = 0; ?>
<div class="collapseBonusProgram d-flex flex-column flex-lg-row">

    <? foreach ($arResult["ITEMS"] as $arItem) : ?>
    <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

    <button class="" type="button" data-toggle="collapse" data-target="#collapseBonusProgram<?= $i; ?>"
        aria-expanded="false" aria-controls="collapseBonusProgram<?= $i; ?>">
        <div><?= $arItem["NAME"]; ?></div>
    </button>

    <? $i++; ?>
    <? endforeach; ?>
</div>
<? $j = 0; ?>
<div id="description" data-default="1">

    <? foreach ($arResult["ITEMS"] as $arItem) : ?>

    <div class="collapse show" id="collapseBonusProgram<?= $j; ?>" data-parent="#description">
        <div>
            <h2><?= $arItem["NAME"]; ?></h2>
            <?= $arItem["~PREVIEW_TEXT"] ?>
        </div>
    </div>
    <? $j++; ?>
    <? endforeach; ?>

</div>