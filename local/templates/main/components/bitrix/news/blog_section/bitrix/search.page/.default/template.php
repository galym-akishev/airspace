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

?>

<section class="page-title bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1>Блог Airspace</h1>
                    <p>Статьи от наших юристов-экспертов</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="search-page">
                    <form action="" method="get">
                        <?php
                        if ($arParams["USE_SUGGEST"] === "Y"):
                            if (mb_strlen($arResult["REQUEST"]["~QUERY"]) && is_object($arResult["NAV_RESULT"])) {
                                $arResult["FILTER_MD5"] = $arResult["NAV_RESULT"]->GetFilterMD5();
                                $obSearchSuggest = new CSearchSuggest($arResult["FILTER_MD5"], $arResult["REQUEST"]["~QUERY"]);
                                $obSearchSuggest->SetResultCount($arResult["NAV_RESULT"]->NavRecordCount);
                            }
                            ?>
                        <?php else: ?>
                            <input class="search-field" type="text" name="q" value="<?= $arResult["REQUEST"]["QUERY"] ?>" size="40"/>
                        <?php endif; ?>

                        <input class="search-button" type="submit" value="<?= GetMessage("SEARCH_GO") ?>"/>
                        <input type="hidden" name="how" value="<?= $arResult["REQUEST"]["HOW"] == "d" ? "d" : "r" ?>"/>
                    </form>
                    <br/>

                    <?php if (isset($arResult["REQUEST"]["ORIGINAL_QUERY"])): ?>
                        <div class="search-language-guess">
                            <?= GetMessage(
                                "CT_BSP_KEYBOARD_WARNING",
                                array(
                                        "#query#" => '<a href="' . $arResult["ORIGINAL_QUERY_URL"] . '">' . $arResult["REQUEST"]["ORIGINAL_QUERY"] . '</a>')
                                )
                            ?>
                        </div>
                        <br/>
                    <?php endif; ?>

                    <?php if ($arResult["ERROR_CODE"] != 0): ?>
                        <p>
                            <?= GetMessage("SEARCH_ERROR") ?>
                        </p>
                        <p>
                            <?= GetMessage("SEARCH_CORRECT_AND_CONTINUE") ?>
                        </p>
                        <br/>
                    <?php elseif (count($arResult["SEARCH"]) > 0): ?>
                        <?php foreach ($arResult["SEARCH"] as $arItem): ?>
                            <a href="<?= $arItem["URL"] ?>">
                                <?= $arItem["TITLE_FORMATED"] ?>
                            </a>
                            <p>
                                <?= $arItem["BODY_FORMATED"] ?>
                            </p>
                            <hr/>
                        <?php endforeach; ?>
                        <?php
                            if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") {
                                echo $arResult["NAV_STRING"];
                            }
                        ?>
                        <br/>
                    <?php else: ?>
                        <?php ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND")); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
