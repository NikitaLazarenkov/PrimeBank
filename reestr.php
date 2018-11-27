<?php include "./head.php";?>
<body>
<?php include "./header.php";?>

<div id="content-flex">
	
	<div class="reestr">
		<div class="reestr-wrap">
			<h3>Реестр выданных гарантий</h3>
			<div class="poisk">
				<form>
					<div class="poisk-ico"></div>
					<input id="search" class="poisk-wide" type="text" placeholder="Поиск по названию банка-гаранта, заказчика или поставщика">
					<input id="search2" class="poisk-middle" type="text" placeholder="Поиск по названию гаранта, заказчика или поставщика">
					<input id="search3" class="poisk-small" type="text" placeholder="Поиск">
					<button type="submit">Искать</button>
					<input id="reset-button" type="reset" value="Сбросить поиск">
					<input id="reset-button2" type="reset" value="Сбросить поиск">
					<input id="reset-button3" type="reset" value="Сбросить поиск">
				</form>
			</div>
			
			<div class="reestr-open-block">
				<div class="reestr-top-info">
					<div class="reestr-top-info-left">
						<div class="price">1 059 900, <span style="font-size: 14px;">00</span></div>
                		<div class="curr">Российский рубль</div>
					</div>
					<div class="reestr-top-info-right">
						<div class="reestr-top-info-numbers">
							<div class="reestr-top-info-number">№02J28901018311170009</div>
							<div class="reestr-top-info-dateofmake">Дата выдачи: 11.07.2017</div>
						</div>
						<div class="reestr-top-info-dates">
							<div class="reestr-top-info-dateofpublic">Размещено: 11.07.2017</div>
							<div class="reestr-top-info-dateoffresh">Обновлено: 11.07.2017</div>
						</div>
					</div>
				</div>
				<div id="reestr-box1" class="reestr-top-hide-info">
					<div class="reestr-top-hide-info-bank">
	                    <div class="lk-block-poluchyatel-name">Банк-гарант</div>
	                    <div class="lk-block-poluchyatel-text">Публичное акционерное общество «Восточный Экспресс Банк»</div>
	                </div>
	                <div class="reestr-top-hide-info-benefic">
	                    <div class="lk-block-poluchyatel-name">Заказчик-бенефициар</div>
	                    <div class="lk-block-poluchyatel-text">Департамент строительства и жилищнойполитики Ямало-Ненецкого Автономного Округа</div>
	                </div>
					<div class="reestr-top-hide-info-postavshik">
	                    <div class="lk-block-poluchyatel-name">Поставщик</div>
	                    <div class="lk-block-poluchyatel-text">Общество с ограниченной ответственностью Научно-Исследовательский Институт «Земля и город»</div>
	                </div>
	                <div class="reestr-top-hide-info-inn-kpp">
	                    <div class="lk-block-inn">
	                        <div class="lk-block-inn-name">ИНН</div>
	                        <div class="lk-block-inn-number">1234567890</div>
	                    </div>
	                    <div class="lk-block-kpp">
	                        <div class="lk-block-kpp-name">КПП</div>
	                        <div class="lk-block-kpp-number">526201001</div>
	                    </div>
	                </div>
	                <div class="reestr-top-hide-info-izveshenie">
	                    <div class="lk-block-poluchyatel-name">Номер извещения об осуществлении закупки</div>
	                    <div class="lk-block-poluchyatel-text">2452752454254252552</div>
	                </div>
				</div>
				<div class="open-hide-nav">
					<img id="reestr-img1" src="./images/open_ico.png">
					<a id="reestr-open-link1" href="javascript:void(0);" onclick="viewdiv('reestr-box1','reestr-open-link1'); changeImage('reestr-img1');" reestr-text-show="Свернуть" reestr-text-hide="Развернуть">Развернуть</a>
				</div>
			</div>

			<div class="reestr-open-block">
				<div class="reestr-top-info">
					<div class="reestr-top-info-left">
						<div class="price">1 059 900, <span style="font-size: 14px;">00</span></div>
                		<div class="curr">Российский рубль</div>
					</div>
					<div class="reestr-top-info-right">
						<div class="reestr-top-info-numbers">
							<div class="reestr-top-info-number">№02J28901018311170009</div>
							<div class="reestr-top-info-dateofmake">Дата выдачи: 11.07.2017</div>
						</div>
						<div class="reestr-top-info-dates">
							<div class="reestr-top-info-dateofpublic">Размещено: 11.07.2017</div>
							<div class="reestr-top-info-dateoffresh">Обновлено: 11.07.2017</div>
						</div>
					</div>
				</div>
				<div id="reestr-box2" class="reestr-top-hide-info">
					<div class="reestr-top-hide-info-bank">
	                    <div class="lk-block-poluchyatel-name">Банк-гарант</div>
	                    <div class="lk-block-poluchyatel-text">Публичное акционерное общество «Восточный Экспресс Банк»</div>
	                </div>
	                <div class="reestr-top-hide-info-benefic">
	                    <div class="lk-block-poluchyatel-name">Заказчик-бенефициар</div>
	                    <div class="lk-block-poluchyatel-text">Департамент строительства и жилищнойполитики Ямало-Ненецкого Автономного Округа</div>
	                </div>
					<div class="reestr-top-hide-info-postavshik">
	                    <div class="lk-block-poluchyatel-name">Поставщик</div>
	                    <div class="lk-block-poluchyatel-text">Общество с ограниченной ответственностью Научно-Исследовательский Институт «Земля и город»</div>
	                </div>
	                <div class="reestr-top-hide-info-inn-kpp">
	                    <div class="lk-block-inn">
	                        <div class="lk-block-inn-name">ИНН</div>
	                        <div class="lk-block-inn-number">1234567890</div>
	                    </div>
	                    <div class="lk-block-kpp">
	                        <div class="lk-block-kpp-name">КПП</div>
	                        <div class="lk-block-kpp-number">526201001</div>
	                    </div>
	                </div>
	                <div class="reestr-top-hide-info-izveshenie">
	                    <div class="lk-block-poluchyatel-name">Номер извещения об осуществлении закупки</div>
	                    <div class="lk-block-poluchyatel-text">2452752454254252552</div>
	                </div>
				</div>
				<div class="open-hide-nav">
					<img id="reestr-img2" src="./images/open_ico.png">
					<a id="reestr-open-link2" href="javascript:void(0);" onclick="viewdiv('reestr-box2','reestr-open-link2'); changeImage('reestr-img2');" reestr-text-show="Свернуть" reestr-text-hide="Развернуть">Развернуть</a>
				</div>
			</div>			

			<div class="reestr-navigation">
				<div class="reestr-nav active">1</div>
				<div class="reestr-nav">2</div>
				<div class="reestr-nav">3</div>
				<div class="reestr-nav">4</div>
				<div class="reestr-nav">5</div>
				<div class="reestr-nav">6</div>
				<div class="reestr-nav">7</div>
				<div class="reestr-nav">8</div>
				<div class="reestr-nav">9</div>
				<div class="reestr-nav">10</div>
			</div>

		</div>
	</div>

	<div id="bottom-content">
        <div class="wrapper">
            <h3>Самое время стать нашим клиентом!</h3>
            <span>
                Заполните несколько полей, загрузите документы или оставьте номер телефона — мы перезвоним в ближайшее время, обычно в течение одного дня.
            </span>
            <div class="buttons">
                <a href="javascript:PopUpShow()"><div class="orange-btn uslugi-orange-btn">Оформить заявку</div></a>
                <a class="zvonok-popup-link" href="#popup-zvonok"><div class="white-btn uslugi-white-btn">Заказать звонок</div></a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function sec() {
    if (document.getElementById("search").value != "" && document.getElementById("search").value != "0") {
        document.getElementById("reset-button").style.display = "block";
    }
    else {
        document.getElementById("reset-button").style.display = "none";
    }
}
setInterval(sec, 500);
</script>

<script type="text/javascript">
function sec() {
    if (document.getElementById("search2").value != "" && document.getElementById("search2").value != "0") {
        document.getElementById("reset-button2").style.display = "block";
    }
    else {
        document.getElementById("reset-button2").style.display = "none";
    }
}
setInterval(sec, 500);
</script>

<script type="text/javascript">
function sec() {
    if (document.getElementById("search3").value != "" && document.getElementById("search3").value != "0") {
        document.getElementById("reset-button3").style.display = "block";
    }
    else {
        document.getElementById("reset-button3").style.display = "none";
    }
}
setInterval(sec, 500);
</script>

<?php
include "./footer.php";
include "./scripts.php";
include "./zayavka_form.php";
include "./zvonok_form.php";
?>

</body>
</html>