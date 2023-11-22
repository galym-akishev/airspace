<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult)) : ?>
    <button
            class="navbar-toggler collapsed"
            type="button"
            data-toggle="collapse"
            data-target="#navbarsExample09"
            aria-controls="navbarsExample09"
            aria-expanded="false"
            aria-label="Toggle navigation"
    >
        <span class="ion-android-menu"></span>
    </button>
<!--    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navLinks"-->
<!--            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
    <div class="collapse navbar-collapse ml-auto" id="navbarsExample09">
        <ul class="navbar-nav ml-auto">
            <?php foreach ($arResult as $arItem): ?>
                <li class="nav-item <?= $arItem["SELECTED"] ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif ?>
