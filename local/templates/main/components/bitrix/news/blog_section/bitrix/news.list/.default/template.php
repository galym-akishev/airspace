<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();

}
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

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php if (empty($arResult["ITEMS"])): ?>
                    В этом разделе статей нет
                <?php endif?>
                <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                    <div class="post">
                        <div class="post-media post-thumb">
                            <a href="<?= $arItem['~DETAIL_PAGE_URL'] ?>">
                                <img src="<?= $arItem['PREVIEW_PICTURE']['SAFE_SRC'] ?>" alt="">
                            </a>
                        </div>
                        <h3 class="post-title">
                            <a href="<?= $arItem['~DETAIL_PAGE_URL'] ?>">
                                <?= $arItem['PROPERTIES']['title']['VALUE'] ?>
                            </a>
                        </h3>
                        <div class="post-meta">
                            <ul>
                                <li>
                                    <i class="ion-calendar"></i> <?= $arItem['TIMESTAMP_X'] ?>
                                </li>
                                <li>
                                    <i class="ion-android-people"></i> Опубликовано: <?= $arItem['PROPERTIES']['author']['VALUE'] ?>
                                </li>
                                <li>
                                    <a href="/blog">
                                        <i class="ion-pricetags"></i>
                                        <?php foreach (explode(",", $arItem['TAGS']) as $tag): ?>
                                            <?= $tag ?>
                                        <?php endforeach ?>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="post-content">
                            <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                            <a href="<?= $arItem['~DETAIL_PAGE_URL'] ?>" class="btn btn-main">Читать далее</a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-lg-4">
                <div class="pl-0 pl-xl-4">
                    <aside class="sidebar pt-5 pt-lg-0 mt-5 mt-lg-0">
                        <!-- Latest blog articles : show only latest articles as specified in array_slice -->
                        <div class="widget widget-latest-post">
                            <h4 class="widget-title">Свежие статьи раздела</h4>
                            <?php foreach (array_slice($arResult["ITEMS"], 0, 2) as $arItem): ?>
                                <div class="media">
                                    <a class="pull-left" href="<?= $arItem['~DETAIL_PAGE_URL'] ?>">
                                        <img class="media-object" src="<?= $arItem['PREVIEW_PICTURE']['SAFE_SRC'] ?>" alt="image">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="<?= $arItem['~DETAIL_PAGE_URL'] ?>">
                                                <?= $arItem['PROPERTIES']['title']['VALUE'] ?>
                                            </a>
                                        </h4>
                                        <p>
                                            <i class="ion-pricetags"></i>
                                            <?php foreach (explode(",", $arItem['TAGS']) as $tag): ?>
                                                <?= $tag ?>
                                            <?php endforeach ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- End latest blog articles -->

                        <!-- Blog sections -->
                        <div class="widget widget-category">
                            <h4 class="widget-title">Разделы</h4>
                            <ul class="widget-category-list">
                                <?php foreach ($arResult['BLOG_SECTIONS'] as $value): ?>
                                    <li>
                                        <a href="<?= $value['LINK'] ?>"><?= $value['NAME'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div> <!-- End blog sections  -->
                    </aside>
                </div>
            </div>
        </div>

        <?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <?php endif; ?>
    </div>
</div>
