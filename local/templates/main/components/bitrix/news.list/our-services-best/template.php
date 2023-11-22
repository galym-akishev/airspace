<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="row">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="col-lg-4 col-sm-6">
                <div class="block">
                    <h3 class="mb-3"><?= $arItem['PREVIEW_TEXT'] ?></h3>
                    <p><?= $arItem['DETAIL_TEXT'] ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
<?php endif; ?>
