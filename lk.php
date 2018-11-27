<?php
include "./head.php";
?>

<body>

<?php
include "./header-lk.php";
?>

<div id="content-flex">
    
    <!-- СОДЕРЖИМОЕ СТРАНИЦЫ -->
    
    <div class="wrapper">
        <div class="lk-content-top">
            <h1>Услуги по гарантиям</h1>
            <a class="zayavka-popup-link lk-top-btn" href="#popup-zayavka">
                <div class="orange-btn lk-top-btn">Оформить заявку</div>
            </a>
        </div>
        <div class="lk-block">
            <div class="lk-block-left">
                <div class="price">1 059 900, <span style="font-size: 14px;">00</span></div>
                <div class="curr">Российский рубль</div>
                <div class="lk-process-btn">На рассмотрении</div>
            </div>
            <div class="lk-block-right">
                <div class="lk-block-poluchyatel">
                    <div class="lk-block-poluchyatel-name">Получатель гарантии</div>
                    <div class="lk-block-poluchyatel-text">Общество с ограниченной ответственностью Научно-Исследовательский Институт «Земля и город»</div>
                </div>
                <div class="lk-block-inn-kpp">
                    <div class="lk-block-inn">
                        <div class="lk-block-inn-name">ИНН</div>
                        <div class="lk-block-inn-number">1234567890</div>
                    </div>
                    <div class="lk-block-kpp">
                        <div class="lk-block-kpp-name">КПП</div>
                        <div class="lk-block-kpp-number">526201001</div>
                    </div>
                </div>
                <div class="lk-process-btn2">На рассмотрении</div>
            </div>
        </div>
        
        <div class="lk-block">
            <div class="lk-block-left">
                <div class="price">1 059 900, <span style="font-size: 14px;">00</span></div>
                <div class="curr">Российский рубль</div>
                <div class="lk-accept-btn">Одобрено</div>
            </div>
            <div class="lk-block-right">
                <div class="lk-block-poluchyatel">
                    <div class="lk-block-poluchyatel-name">Получатель гарантии</div>
                    <div class="lk-block-poluchyatel-text">Общество с ограниченной ответственностью Научно-Исследовательский Институт «Земля и город»</div>
                </div>
                <div class="lk-block-inn-kpp">
                    <div class="lk-block-inn">
                        <div class="lk-block-inn-name">ИНН</div>
                        <div class="lk-block-inn-number">1234567890</div>
                    </div>
                    <div class="lk-block-kpp">
                        <div class="lk-block-kpp-name">КПП</div>
                        <div class="lk-block-kpp-number">526201001</div>
                    </div>
                </div>
                <div class="lk-accept-btn2">Одобрено</div>
            </div>
        </div>
        
        <div class="lk-block">
            <div class="lk-block-left">
                <div class="price">1 059 900, <span style="font-size: 14px;">00</span></div>
                <div class="curr">Российский рубль</div>
                <div class="lk-decline-btn">Отказано</div>
            </div>
            <div class="lk-block-right">
                <div class="lk-block-poluchyatel">
                    <div class="lk-block-poluchyatel-name">Получатель гарантии</div>
                    <div class="lk-block-poluchyatel-text">Общество с ограниченной ответственностью Научно-Исследовательский Институт «Земля и город»</div>
                </div>
                <div class="lk-block-inn-kpp">
                    <div class="lk-block-inn">
                        <div class="lk-block-inn-name">ИНН</div>
                        <div class="lk-block-inn-number">1234567890</div>
                    </div>
                    <div class="lk-block-kpp">
                        <div class="lk-block-kpp-name">КПП</div>
                        <div class="lk-block-kpp-number">526201001</div>
                    </div>
                </div>
                <div class="lk-decline-btn2">Отказано</div>
            </div>
        </div>
        
    </div>
    
    
    
    <!-- ФОРМА ВХОДА В ЛИЧНЫЙ КАБИНЕТ -->
    <div id="lk-login" class="lk-login-content">
        <form method="get" action="">
            <div class="lk-login-name clearfix">Вход в личный кабинет</div>
            <div class="lk-login-wrap">
                <div class="blocks">
                    <div><label for="email-id">Ваш email</label></div>
                    <div><input type="email" name="email" id="email-id"></div>
                </div>
                <div class="blocks">
                    <div><label for="pass-id">Ваш пароль</label></div>
                    <div><input type="password" name="pass" id="pass-id"></div>
                </div>
                <div class="lk-login-buttons">
                    <div><input class="orange-btn w243 lk-login-btn" type="submit" value="Войти в кабинет"></div>
                    <div><a href="">Забыли пароль?</a></div>
                </div>

            </div>
        </form>
    </div>
    
    
    <!-- ФОРМА ВОССТАНОВЛЕНИЯ ПАРОЛЯ -->
    <div id="lk-login" class="lk-login-content">
        <form method="get" action="">
            <div class="lk-login-name clearfix">Восстановление пароля</div>
            <div class="lk-login-wrap">
                <div class="blocks">
                    <div><label for="email-id">Ваш email</label></div>
                    <div><input type="email" name="email" id="email-id"></div>
                </div>
                <div class="lk-login-buttons">
                    <div><input class="orange-btn w243 lk-login-btn" type="submit" value="Выслать пароль"></div>
                    <div><a href="./lk.php">Вернуться</a></div>
                </div>

            </div>
        </form>
    </div>
    
    <!-- СОДЕРЖИМОЕ СТРАНИЦЫ -->
    
</div>

<?php
include "./footer-lk.php";
include "./scripts.php";
include "./zayavka_form.php";
include "./zvonok_form.php";
?>

</body>
</html>