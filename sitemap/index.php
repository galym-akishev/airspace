<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Карта сайта компании Airspace');
$APPLICATION->SetPageProperty('TITLE', 'Карта сайта компании Airspace');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());

$APPLICATION->SetPageProperty("keywords", "Airspace, услуги, юристы, законы, суды, претензии");
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:main.map",
    "sitemap",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "COL_NUM" => "1",
        "LEVEL" => "1",
        "SET_TITLE" => "Y",
        "SHOW_DESCRIPTION" => "N"
    )
);?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
