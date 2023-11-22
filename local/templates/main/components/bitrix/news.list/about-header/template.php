<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="about-img">
                <img class="img-fluid" src="<?= end($arResult["ITEMS"])['DETAIL_PICTURE']['SAFE_SRC'] ?>">
            </div>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0">
            <div class="pl-0 pl-lg-4">
                <h2><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></h2>
                <p><?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?></p>
                <a
                        href="<?= end($arResult["ITEMS"])["PROPERTIES"]["file_to_download"]["SRC"] ?>"
                        class="btn btn-small"
                        download="brochure.pdf"
                >
                    <?= end($arResult["ITEMS"])["PROPERTIES"]["button_text"]["VALUE"] ?>
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>