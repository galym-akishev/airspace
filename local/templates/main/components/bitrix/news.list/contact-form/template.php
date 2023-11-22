<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
AAAAAAAA
<form class="row" id="contact-form">
    <div class="col-md-6 col-sm-12">
        <div class="block">
            <div class="form-group">
                <input name="user_name" type="text" class="form-control" placeholder="Имя">
            </div>
            <div class="form-group">
                <input name="user_email" type="text" class="form-control" placeholder="Электронный адрес">
            </div>
            <div class="form-group">
                <input name="user_subject" type="text" class="form-control" placeholder="Тема">
            </div>
            <div class="form-group">
                <input name="user_phone" type="text" class="form-control" placeholder="Телефон">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="block">
            <div class="form-group-2">
                <textarea name="user_message" class="form-control" rows="8" placeholder="Ваш текст"></textarea>
            </div>
            <button class="btn btn-default" type="submit">Отправить</button>
        </div>
    </div>
    <div class="error" id="error">Sorry Msg dose not sent</div>
    <div class="success" id="success">Message Sent</div>
</form>
