<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Контакты компании Airspace');
$APPLICATION->SetPageProperty('TITLE', 'Контакты компании Airspace');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Airspace, услуги, юристы, запросы, контакты");
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "contact-title",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("PREVIEW_TEXT", "DETAIL_TEXT", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => getIblockIdByCode('contact_title'),
        "IBLOCK_TYPE" => "news",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "1",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>

<!-- contact form start -->
<section class="contact-form">
    <div class="container">
        <?php $APPLICATION->IncludeComponent(
            "bitrix:main.feedback",
            "contacts_page_form",
            Array(
                "EMAIL_TO" => "galymakishevkz@gmail.com",
                "EVENT_MESSAGE_ID" => array("7"),
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                "REQUIRED_FIELDS" => array("NAME", "EMAIL", "PHONE", "MESSAGE"),
                "USE_CAPTCHA" => "Y",
                "AJAX_MODE" => "Y"
            )
        );?>
        <?php $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "contact-social",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("PREVIEW_TEXT", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => getIblockIdByCode('contact_social'),
                "IBLOCK_TYPE" => "news",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "N",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "1",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("address", "email", "telephone", "social_links", ""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>
        <?php $APPLICATION->IncludeComponent(
            "bitrix:map.yandex.view",
            "",
            Array(
                "API_KEY" => "",
                "CONTROLS" => array("ZOOM", "SMALLZOOM", "MINIMAP", "TYPECONTROL", "SCALELINE"),
                "INIT_MAP_TYPE" => "MAP",
                "MAP_DATA" => "a:3:{s:10:\"yandex_lat\";d:55.75707189578339;s:10:\"yandex_lon\";d:37.61193336486816;s:12:\"yandex_scale\";i:14;}",
                "MAP_HEIGHT" => "300",
                "MAP_ID" => "",
                "MAP_WIDTH" => "300",
                "OPTIONS" => array("ENABLE_SCROLL_ZOOM", "ENABLE_DBLCLICK_ZOOM", "ENABLE_RIGHT_MAGNIFIER", "ENABLE_DRAGGING")
            )
        );?>
    </div>
</section>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
