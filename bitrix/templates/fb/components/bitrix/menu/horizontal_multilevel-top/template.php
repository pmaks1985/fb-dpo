<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) : ?>
<nav class="navbar navbar-expand-lg p-0 col-1 col-lg-10 d-none d-lg-block">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-between col">

            <?
                $previousLevel = 0;
                $i = 1;
                foreach ($arResult as $arItem) : ?>

            <? if ($arItem["IS_PARENT"]) : ?>

            <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
            <li class="nav-item dropdown d-flex align-items-center">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown<?= $i ?>" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <?= $arItem["TEXT"] ?>
                </a>
                <i class="fa fa-chevron-down text-light-green pr-1" aria-hidden="true"></i>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown<?= $i ?>">
                    <? else : ?>
                    <li<? if ($arItem["SELECTED"]) : ?> class="item-selected"
                        <? endif ?>><a href="<?= $arItem["LINK"] ?>" class="parent"><?= $arItem["TEXT"] ?></a>
                        <ul>
                            <? endif ?>

                            <? else : ?>

                            <? if ($arItem["PERMISSION"] > "D") : ?>

                            <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
                            <li class="<? if ($arItem[" SELECTED"]) : ?>nav-item active
                                <? else : ?>nav-item
                                <? endif ?>"><a href="<?= $arItem["LINK"] ?>"
                                    class="nav-link"><?= $arItem["TEXT"] ?></a>
                            </li>
                            <? else : ?>
                            <a class="dropdown-item" href="<?= $arItem["LINK"] ?>">• <?= $arItem["TEXT"] ?></a>
                            <? endif ?>

                            <? else : ?>

                            <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
                            <li><a href="" class="<? if ($arItem[" SELECTED"]) : ?>root-item-selected
                                    <? else : ?>root-item
                                    <? endif ?>"
                                    title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?>
                                </a></li>
                            <? else : ?>
                            <li><a href="" class="denied"
                                    title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
                            <? endif ?>

                            <? endif ?>

                            <? endif ?>

                            <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                            <? $i++; ?>

                            <? endforeach ?>

                            <? if ($previousLevel > 1) : //close last item tags
                                ?>
                            <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                            <? endif ?>

                        </ul>

                </div>
</nav>
<? endif ?>