<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>

<a href="#my-menu" class="fa fa-bars"></a>

<nav id="my-menu">
    <ul>

        <?
			$previousLevel = 0;
			foreach ($arResult as $arItem) : ?>

        <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) : ?>
        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
        <? endif ?>

        <? if ($arItem["IS_PARENT"]) : ?>

        <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
        <li><span class="text-normal"><?= $arItem["TEXT"] ?></span>
            <ul>
                <? else : ?>
                <li<? if ($arItem["SELECTED"]) : ?> class="item-selected"
                    <? endif ?>><a href="<?= $arItem["LINK"] ?>" class="parent"><?= $arItem["TEXT"] ?></a>
                    <ul>
                        <? endif ?>

                        <? else : ?>

                        <? if ($arItem["PERMISSION"] > "D") : ?>

                        <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
                        <li><a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem[" SELECTED"]) : ?>root-item-selected
                                <? else : ?>root-item 2
                                <? endif ?>"><?= $arItem["TEXT"] ?>
                            </a></li>
                        <? else : ?>
                        <li<? if ($arItem["SELECTED"]) : ?> class="item-selected"
                            <? endif ?>><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
        </li>
        <? endif ?>

        <? else : ?>

        <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
        <li><a href="" class="<? if ($arItem[" SELECTED"]) : ?>root-item-selected
                <? else : ?>root-item
                <? endif ?>" title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?>
            </a></li>
        <? else : ?>
        <li><a href="" class="denied" title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a>
        </li>
        <? endif ?>

        <? endif ?>

        <? endif ?>

        <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

        <? endforeach ?>

        <? if ($previousLevel > 1) : //close last item tags
		?>
        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
        <? endif ?>

    </ul>
    <div class="menu-clear-left"></div>
    <? endif; ?>
</nav>