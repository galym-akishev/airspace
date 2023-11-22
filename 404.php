<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>

<section class="page-404">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="/">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo.png" alt="site logo" />
				</a>
				<h1>404</h1>
				<h2>Страница не найдена</h2>
				<a href="/" class="btn btn-main"><i class="tf-ion-android-arrow-back"></i>На главную страницу</a>
			</div>
		</div>
	</div>
</section>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>