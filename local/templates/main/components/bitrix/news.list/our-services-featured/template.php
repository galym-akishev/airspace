<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <section class="service-arrow">
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($arResult["ITEMS"] as $key => $arItem): ?>
                    <?php if ($key == 0): ?>
                        <div class="col-lg-4 col-sm-6 bg-primary">
                    <?php elseif ($key == 1): ?>
                        <div class="col-lg-4 col-sm-6 bg-primary bg-primary-dark">
                    <?php elseif ($key == 2): ?>
                        <div class="col-lg-4 col-sm-12 bg-primary bg-primary-darker">
                    <?php endif; ?>
                        <div class="block">
                            <?= $arItem["PROPERTIES"]["icon"]["~VALUE"]["TEXT"] ?>
                            <h3 class="text-white mb-3"><?= $arItem['PREVIEW_TEXT'] ?></h3>
                            <p><?= $arItem['DETAIL_TEXT'] ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php endif; ?>
