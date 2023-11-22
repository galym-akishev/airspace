<?php

/** @var array $arParams */

$dbList = CIBlockSection::GetList(
    array("SORT" => "ASC"),
    array("IBLOCK_TYPE" => $arParams['IBLOCK_TYPE']),
    true);

while ($result = $dbList->GetNext()) {
    $arResult['BLOG_SECTIONS'][] = [
        'NAME' => $result['NAME'],
        'LINK' => '/' . $arParams['IBLOCK_TYPE'] . '/' . $result['CODE'] . '/'
    ];
}
