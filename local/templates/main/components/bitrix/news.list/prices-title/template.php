<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <section class="page-title bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></h1>
                        <p><?= end($arResult["ITEMS"])['DETAIL_TEXT'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>