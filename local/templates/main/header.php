<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>
        <?php $APPLICATION->ShowTitle(); ?>
    </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <link rel="icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/favicon.png">

    <?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/plugins/bootstrap/bootstrap.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/plugins/Ionicons/css/ionicons.min.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/plugins/animate-css/animate.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/plugins/magnific-popup/magnific-popup.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/plugins/slick/slick.css');
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/scss/style.css');

        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/plugins/jquery/jquery.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/plugins/bootstrap/bootstrap.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/plugins/slick/slick.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/plugins/magnific-popup/jquery.magnific-popup.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/plugins/shuffle/shuffle.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/plugins/SyoTimer/jquery.syotimer.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/script.js');
    ?>

    <?php
        $APPLICATION->ShowCSS();
        $APPLICATION->ShowHeadScripts();
        $APPLICATION->ShowHead();
    ?>

</head>

<body id="body">
    <?php $APPLICATION->ShowPanel(); ?>

    <!-- Header Start -->
    <header class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg p-0">
                        <a class="navbar-brand" href="/">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo.png" alt="Logo">
                        </a>


                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "top_menu",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "N",
                                "ROOT_MENU_TYPE" => "top",
                                "USE_EXT" => "N"
                            )
                        );?>
                    </nav>
                </div>
            </div>
        </div>
    </header><!-- header close -->
