<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <li class="nav-item" role="presentation">
                <a
                        class="nav-link <?= $arItem['PROPERTIES']['class']['VALUE'] ?>"
                        id="<?= $arItem['PROPERTIES']['id']['VALUE'] ?>"
                        data-toggle="tab"
                        href="<?= $arItem['PROPERTIES']['href']['VALUE'] ?>"
                        role="tab"
                        aria-controls="<?= $arItem['PROPERTIES']['aria_controls']['VALUE'] ?>"
                        aria-selected="<?= $arItem['PROPERTIES']['aria_selected']['VALUE'] ?>">
                    <?= $arItem['PREVIEW_TEXT'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
