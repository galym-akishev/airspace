<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="block">
                    <div class="section-title">
                        <h2><?= end($arResult["ITEMS"])['PROPERTIES']['title']['VALUE'] ?></h2>
                        <p><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></p>
                    </div>
                    <p><?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?></p>
                </div>
            </div><!-- .col-md-7 close -->
            <div class="col-md-5">
                <div class="block">
                    <img
                            src="<?= end($arResult["ITEMS"])['DETAIL_PICTURE']['SAFE_SRC'] ?>"
                            alt="<?= end($arResult["ITEMS"])['DETAIL_PICTURE']['ALT'] ?>"
                    >
                </div>
            </div><!-- .col-md-5 close -->
        </div>
    </div>
<?php endif; ?>
