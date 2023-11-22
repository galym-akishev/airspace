<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6">
                <h2 class="section-subtitle"><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></h2>
                <?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?>
                <a
                        href="<?= end($arResult["ITEMS"])['PROPERTIES']['button_link']['VALUE'] ?>"
                        class="btn btn-view-works"
                >
                    <?= end($arResult["ITEMS"])['PROPERTIES']['button_text']['VALUE'] ?>
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>
