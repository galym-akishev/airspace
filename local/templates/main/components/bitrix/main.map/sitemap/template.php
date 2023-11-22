<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();

if (!is_array($arResult["arMap"]) || count($arResult["arMap"]) < 1)
	return;

?>

<section class="about section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img class="img-fluid" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/about.jpg">
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="pl-0 pl-lg-4">
                    <h2>Карта сайта</h2>
                    <?php foreach ($arResult['arMap'] as $item): ?>
                        <div>
                            <a href="<?= $item['FULL_PATH'] ?>">
                                <?= $item['NAME'] ?>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>