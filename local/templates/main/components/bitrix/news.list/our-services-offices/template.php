<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <section class="service-about section">
        <div class="container">
            <div class="row align-items-center text-center text-lg-left">
                <div class="col-lg-6">
                    <h2><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></h2>
                    <p class="mt-30"><?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?></p>
                </div>
                <div class="col-lg-6">
                    <img
                            class="img-fluid"
                            src="<?= end($arResult["ITEMS"])['DETAIL_PICTURE']['SRC'] ?>"
                            alt="<?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?>"
                    >
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>