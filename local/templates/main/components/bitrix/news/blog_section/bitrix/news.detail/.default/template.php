<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Статья</h1>
                    <p><?= $arResult['PROPERTIES']['title']['~VALUE'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post post-single">
                    <h2 class="post-title"><?= $arResult['PROPERTIES']['title']['~VALUE'] ?></h2>
                    <div class="post-meta">
                        <ul>
                            <li>
                                <i class="ion-calendar"></i> <?= $arResult['PROPERTIES']['title']['TIMESTAMP_X'] ?>
                            </li>
                            <li>
                                <i class="ion-android-people"></i> Опубликовано: <?= $arResult['PROPERTIES']['author']['~VALUE'] ?>
                            </li>
                            <li>
                                <i class="ion-pricetags"></i>
                                <?php foreach (explode(",", $arResult['~TAGS']) as $arItem): ?>
                                    <a href="">
                                        <?= $arItem ?>
                                    </a>
                                <?php endforeach ?>
                            </li>

                        </ul>
                    </div>
                    <div class="post-thumb">
                        <img class="img-fluid" style="width: 100%" src="<?= $arResult['DETAIL_PICTURE']['SAFE_SRC'] ?>" alt="">
                    </div>
                    <div class="post-content post-excerpt">
                        <?= $arResult['DETAIL_TEXT'] ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
