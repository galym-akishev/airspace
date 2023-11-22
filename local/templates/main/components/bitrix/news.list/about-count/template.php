<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="row counter-box text-center mt-50">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="col-lg-2 col-md-4 col-6 mt-4">
                <div class="counter-item">
                    <?= $arItem['PREVIEW_TEXT'] ?>
                    <h4 class="count" data-count="<?= $arItem['PROPERTIES']['count']['VALUE'] ?>">0</h4>
                    <span><?= $arItem['DETAIL_TEXT'] ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
