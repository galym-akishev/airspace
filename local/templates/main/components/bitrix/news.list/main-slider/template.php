<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="animated fadeInUp">
                        <?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?>
                    </h1>
                    <p class="animated fadeInUp">
                        <?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?>
                    </p>
                    <a
                            href="<?= end($arResult["ITEMS"])['PROPERTIES']['button_link']['VALUE'] ?>"
                            class="btn btn-main animated fadeInUp"
                    >
                        <?= end($arResult["ITEMS"])['PROPERTIES']['button_text']['VALUE'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>