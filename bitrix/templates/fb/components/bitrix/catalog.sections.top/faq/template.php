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
<?
$i = 1;
$j = 1;
?>
<div class="accordion" id="accordionSections">
    <? foreach ($arResult["SECTIONS"] as $arSection) : ?>
    <button class="btn btn-block text-left rounded-0 btnSections" type="button" data-toggle="collapse"
        data-target="#collapse<?= $arSection["ID"] ?>" aria-expanded="false"
        aria-controls="collapse<?= $arSection["ID"] ?>"><span class="opener"></span> <?= $i; ?>.
        <?= $arSection["NAME"] ?>
    </button>
    <div id="collapse<?= $arSection["ID"] ?>" class="collapse" aria-labelledby="heading<?= $arSection["ID"] ?>"
        data-parent="#accordionSections">
        <div class="accordion" id="accordionExample">

            <? foreach ($arSection["ITEMS"] as $arElement) : ?>
            <?
					$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCST_ELEMENT_DELETE_CONFIRM')));
					?>

            <div class="mb-4">
                <div id="heading<?= $this->GetEditAreaId($arElement['ID']); ?>">
                    <button class="btn w-100 text-left" type="button" data-toggle="collapse"
                        data-target="#collapse<?= $this->GetEditAreaId($arElement['ID']); ?>" aria-expanded="true"
                        aria-controls="collapse<?= $this->GetEditAreaId($arElement['ID']); ?>"><?= $i; ?>.<?= $j; ?>
                        <? echo $arElement["NAME"] ?>
                    </button>
                </div>
                <div id="collapse<?= $this->GetEditAreaId($arElement['ID']); ?>" class="collapse"
                    aria-labelledby="heading<?= $this->GetEditAreaId($arElement['ID']); ?>"
                    data-parent="#accordionExample">
                    <? echo $arElement["PREVIEW_TEXT"]; ?>
                </div>
            </div>
            <? $j++; ?>
            <? endforeach; ?>
        </div>
    </div>
    <? $i++;
		$j = 1; ?>
    <? endforeach; ?>
</div>