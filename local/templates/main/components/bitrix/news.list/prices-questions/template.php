<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <section class="faq section-sm ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <h2>Частые вопросы</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach($arResult["ITEMS"] as $arItem): ?>
                    <div class="col-md-6 mt-4">
                        <h4><?= $arItem['PREVIEW_TEXT'] ?></h4>
                        <p><?= $arItem['DETAIL_TEXT'] ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php endif; ?>
