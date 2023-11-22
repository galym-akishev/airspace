<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="contact-box row">
        <div class="col-md-6 col-sm-12">
            <div class="block">
                <h2><?= end($arResult["ITEMS"])['PREVIEW_TEXT'] ?></h2>
                <ul class="address-block">
                    <li>
                        <i class="ion-ios-location-outline"></i>
                        <?= end($arResult["ITEMS"])['PROPERTIES']['address']['VALUE'] ?>
                    </li>
                    <li>
                        <i class="ion-ios-email-outline"></i>
                        <?= end($arResult["ITEMS"])['PROPERTIES']['email']['VALUE'] ?>
                    </li>
                    <li>
                        <i class="ion-ios-telephone-outline"></i>
                        <?= end($arResult["ITEMS"])['PROPERTIES']['telephone']['VALUE'] ?>
                    </li>
                </ul>
                <ul class="social-icons">
                    <?php foreach (end($arResult["ITEMS"])["PROPERTIES"]["social_links"]["~VALUE"] as $item) : ?>
                        <li>
                            <?= $item["TEXT"] ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>