<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <section class="call-to-action bg-1 section-sm overly">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2 class="mb-3"><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></h2>
                        <p><?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?></p>
                        <a
                                class="btn btn-main btn-solid-border"
                                href="<?= end($arResult["ITEMS"])["PROPERTIES"]["button_link"]["VALUE"] ?>"
                        >
                            <?= end($arResult["ITEMS"])["PROPERTIES"]["button_text"]["VALUE"] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
