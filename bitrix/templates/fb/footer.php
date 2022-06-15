<?php
$today = date("Y"); ?>
</div>
</div>

<footer>
    <div class="container-xl">
        <div class="row pb-2 pt-lg-5 pt-4">
            <div class="col-12 col-lg-3 p-0">
                <a href="/">
                    <div class="logo d-flex justify-content-center justify-content-lg-start">
                        <div class="logo_img"></div>
                        <div class="logo_text">
                            <div class="pt-3 pb-2">Фактор Безопасности</div>
                            <div>Учебный центр</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-4 mt-3 p-0">
                <div class="d-flex justify-content-lg-between align-items-center justify-content-around">
                    <div class="header-phone">
                        <? $APPLICATION->IncludeFile('/include/fb/telefon.php'); ?>
                    </div>
                    <div class="header-time">
                        <? $APPLICATION->IncludeFile('/include/fb/rezhim-raboty.php'); ?>
                    </div>
                </div>
            </div>
        </div>



        <div class="nav-footer">
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
        </div>

        <div class="list-in-footer pt-4">
            <ul class="pl-3 pl-lg-1">
                <li>
                    <? $APPLICATION->IncludeFile('/include/fb/footer/litsenziya.php'); ?>
                </li>
                <li>
                    <? $APPLICATION->IncludeFile('/include/fb/footer/akkreditatsiya.php'); ?>
                </li>
                <li>
                    <? $APPLICATION->IncludeFile('/include/fb/footer/politika.php'); ?>
                </li>
            </ul>
        </div>
        <div class="nord-soft d-flex flex-column align-items-lg-end pb-3 align-items-center">
            <div>
                <div>©Все права защищены, <?= $today; ?></div>
                <div class="nord-soft_logo">
                    <a class="text-decoration-none" href="https://nordsoftware.ru/">
                        <span class="pr-2">Создание сайта</span>
                        <img src="/layout/img/nord-soft.png" loading="lazy" alt="nord-soft" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script>
$(document).ready(function() {
    $(".magic-link").click(function() {
        $(".nav-search").toggleClass("d-flex").toggleClass("d-none");
        $(".magic-input").focus();
        $(".search").toggleClass("d-flex").toggleClass("d-none");
    });
    $(document).mouseup(function(e) {
        var container = $(".nav-search");
        if (container.has(e.target).length === 0) {
            container.addClass("d-none").removeClass("d-flex");
            $(".search").addClass("d-flex").removeClass("d-none");
        }
    });
});
</script>
</body>

</html>