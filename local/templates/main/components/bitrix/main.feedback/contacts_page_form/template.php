<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

?>

<div class="mfeedback">
    <?php if(!empty($arResult["ERROR_MESSAGE"])): ?>
        <?php foreach($arResult["ERROR_MESSAGE"] as $errorMessage): ?>
            <div class="error-message">- <?= $errorMessage ?></div>
        <?php endforeach ?>
    <?php endif ?>

    <?php if($arResult["OK_MESSAGE"] <> ''): ?>
        <div class="mf-ok-text">
            <?=$arResult["OK_MESSAGE"] ?>
        </div>
    <?php endif ?>
</div>

<form class="row" action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <?=bitrix_sessid_post()?>
    <div class="col-md-6 col-sm-12">
        <div class="block">
            <div class="form-group">
                <div class="mf-text">
                    <?=GetMessage("MFT_NAME")?>
                    <?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>
                        <span class="mf-req">*</span>
                    <?php endif ?>
                </div>
                <input class="form-control" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
            </div>
            <div class="form-group">
                <div class="mf-text">
                    <?=GetMessage("MFT_EMAIL")?>
                    <?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?>
                        <span class="mf-req">*</span>
                    <?php endif?>
                </div>
                <input class="form-control" type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
            </div>
            <?php if($arParams["USE_CAPTCHA"] == "Y"): ?>
                <div class="form-group">
                    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
                    <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
                    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
                    <input class="form-control" type="text" name="captcha_word" value="">
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="block">
            <div class="form-group">
                <div class="mf-text">
                    <?=GetMessage("MFT_PHONE")?>
                    <?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?>
                        <span class="mf-req">*</span>
                    <?php endif ?>
                </div>
                <input class="form-control" type="text" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>">
            </div>
            <div class="form-group-2">
                <div class="mf-text">
                    <?=GetMessage("MFT_MESSAGE")?>
                    <?php if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?>
                        <span class="mf-req">*</span>
                    <?php endif?>
                </div>
                <textarea class="form-control" name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
            </div>
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
            <input class="submit-input btn btn-default" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
        </div>
    </div>
</form>