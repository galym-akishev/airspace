<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="col-md-6">
        <div class="block">
            <ul class="counter-box clearfix">
                <?php
                foreach ($arResult["ITEMS"] as $arItem): ?>
                    <li>
                        <div class="counter-item">
                            <?= $arItem['PREVIEW_TEXT'] ?>
                            <h4
                                    class="count"
                                    data-count="<?= $arItem['PROPERTIES']['property_count']['VALUE'] ?>"
                            >
                                0
                            </h4>
                            <span><?= $arItem['DETAIL_TEXT'] ?></span>
                        </div>
                    </li>
                <?php
                endforeach ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
