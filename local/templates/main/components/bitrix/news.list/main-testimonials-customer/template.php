<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="col-md-5 col-md-offset-1">
        <div class="text-center">
            <div>
                <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                    <div class="testimonial-item">
                        <i class="ion-quote"></i>
                        <p><?= $arItem['DETAIL_TEXT'] ?></p>
                        <div class="user">
                            <img src="<?= $arItem['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arItem['PREVIEW_TEXT'] ?>">
                            <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?php endif; ?>
