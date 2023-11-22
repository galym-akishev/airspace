<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="section-title text-center">
                <h2><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></h2>
            </div>
        </div>
    </div>
<?php endif; ?>
