<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="row">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <?= $arItem['PREVIEW_TEXT'] ?>
                    <h4><?= $arItem['PROPERTIES']['title']['VALUE'] ?></h4>
                    <p><?= $arItem['DETAIL_TEXT'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>