<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="tab-content" id="myTabContent">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div
                    class="tab-pane fade <?= $arItem['PROPERTIES']['class']['VALUE'] ?>"
                    id="<?= $arItem['PROPERTIES']['id']['VALUE'] ?>"
                    role="tabpanel"
                    aria-labelledby="<?= $arItem['PROPERTIES']['aria-labelledby']['VALUE'] ?>"
            >
                <p><?= $arItem['PREVIEW_TEXT'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>