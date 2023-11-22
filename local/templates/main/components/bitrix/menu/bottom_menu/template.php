<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult)) : ?>
    <div class="footer-manu">
        <ul>
            <?php foreach ($arResult as $arItem): ?>
                <li><a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif ?>

