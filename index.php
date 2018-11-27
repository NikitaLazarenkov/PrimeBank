<?php
include "./head.php";
?>

<body>

<?php
include "./header-land.php";
?>

<div id="content-flex">
	<div class="landing-raschet">
		<div class="top-slice"></div>
		<div class="landing-raschet-wrap">
			<div class="landing-raschet-left-block">
				<h2>Рассчитайте стоимость прямо сейчас</h2>
				<div class="landing-raschet-summa">
					<div class="landing-raschet-summa-text">Сумма гарантии</div>
					<div class="landing-raschet-summa-number">
						<div id="contentSlider" class="landing-raschet-summa-number-summ"></div>
						<div class="landing-raschet-summa-number-curr">&#8381;</div>
					</div>
				</div>
				<div class="grade1">
					<div id="slider"></div>
				</div>
				<div class="landing-raschet-srok">
					<div class="landing-raschet-srok-text">Срок гарантии</div>
					<div class="landing-raschet-srok-number">
						<div id="contentSlider2" class="landing-raschet-srok-number-summ"></div>
						<div class="landing-raschet-srok-number-curr">месяцев</div>
					</div>
				</div>
				<div class="grade2">
					<div id="slider2"></div>
				</div>
			</div>
			<div class="landing-raschet-right-block">
				<div class="landing-raschet-price-market">
					<div class="landing-raschet-price-market-h">Стоимость "на рынке"</div>
					<div class="landing-raschet-price-market-block">
						<div class="landing-raschet-price-market-block-summ"><span id="calc-market"></span> &#8381;&nbsp;</div>
						<div class="landing-raschet-price-market-block-year">в год</div>
					</div>
				</div>
				<div class="landing-raschet-price-our">
					<div class="landing-raschet-price-our-h">Стоимость у нас</div>
					<div class="landing-raschet-price-our-block">
						<div class="landing-raschet-price-our-block-summ"><span id="calc-summ"></span> 
						 &#8381;&nbsp;</div>
						<div class="landing-raschet-price-our-block-year">в год</div>
					</div>
					<div class="landing-raschet-price-buttons">
						<a class="zayavka-popup-link landing-raschet-price-button-1" href="#popup-zayavka">
							<div class="orange-btn landing-raschet-zakaz-btn">Оформить заявку</div>
						</a>
						<a class="zvonok-popup-link landing-raschet-price-button-2" href="#popup-zvonok">
							<div class="grey-btn landing-raschet-call-btn">Заказать звонок</div>
						</a>
					</div>
				</div>
			</div>
			<div class="landing-raschet-price-buttons-hide">
					<a class="zayavka-popup-link landing-raschet-price-button-1-hide" href="#popup-zayavka">
						<div class="orange-btn landing-raschet-zakaz-btn-hide">Оформить заявку</div>
					</a>
					<a class="zvonok-popup-link landing-raschet-price-button-2-hide" href="#popup-zvonok">
						<div class="grey-btn landing-raschet-call-btn-hide">Заказать звонок</div>
					</a>
				</div>
		</div>
		<div class="bottom-slice"></div>
	</div>

 
<?php
include "./zayavka_form.php";
include "./zvonok_form.php";
include "./scripts.php";
?>

</body>
</html>