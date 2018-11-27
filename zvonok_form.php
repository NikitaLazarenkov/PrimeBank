
<style> 
    .visible { 
        display:block!important; 
    }
    .hidden {
        display: none!important;
    }
</style>
<div>
    <div id="popup-zvonok" class="mfp-hide">
        <form enctype="multipart/form-data" method="post" id="formcall">
            <!-- СООБЩЕНИЕ ПОСЛЕ ОТПРАВКИ ФОРМЫ ЗВОНКА -->
            <div class="successform3 hidden">
                <div class="step-name clearfix">Спасибо!</div>
                <div class="zvonok-wrap">
                   <img src="./images/zvonok-checked.jpg" alt="">
                    <div class="zvonok-back">
                        Мы перезвоним Вам в ближайшее время, обычно 
                        в течение одного дня.
                    </div>
                    <div class="step-blocks">
                        <button type="button" onclick="callclosebtn();" class="grey-btn after-call-btn">Вернуться на сайт</button>
                    </div>
                </div>
            </div>

            <!-- ФОРМА ЗВОНКА -->
            <div class="formvisible3">
                <div class="step-name clearfix">Заказать звонок</div>
                <div class="zvonok-wrap">
                    <div class="step-blocks">
                        <div><label for="phone-id">Ваш телефон:</label></div>
                        <div><input type="text" class="phone" name="phone" id="phone-id"></div>
                    </div>
                    <div class="step-blocks">
                        <div><label for="name-id">Название компании</label></div>
                        <div><input type="text" name="name" id="name-id"></div>
                    </div>
                    <button class="orange-btn zvonok-btn" type="submit">Заказать звонок</button>
                </div>
            </div>
        </form>
    </div>
</div>


