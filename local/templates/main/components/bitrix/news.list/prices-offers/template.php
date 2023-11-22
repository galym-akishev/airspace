<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<section class="pricing-table section bg-gray">
	<div class="container">
		<div class="row">
			<!-- single pricing table -->
            <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="pricing-item text-center">

                        <!-- plan name & value -->
                        <div class="price-title">
                            <h3><?= $arItem['PREVIEW_TEXT'] ?></h3>
                            <strong class="value">
                                <?= $arItem['PROPERTIES']['price']['VALUE'] ?>
                            </strong>
                            <p><?= $arItem['DETAIL_TEXT'] ?></p>
                        </div>
                        <!-- /plan name & value -->

                        <!-- plan description -->
                        <ul>
                            <?php foreach ($arItem['PROPERTIES']['actions']['VALUE'] as $key=>$value) : ?>
                                <li>
                                    <i class="ion-ios-circle-outline"></i> <?= $value ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <!-- /plan description -->

                        <!-- Contact Us button -->
                        <a class="btn btn-small" href="/contact">Заявка</a>
                        <!-- /Contact Us button -->

                    </div>
                </div>
            <?php endforeach ?>
			<!-- end single pricing table -->

		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->