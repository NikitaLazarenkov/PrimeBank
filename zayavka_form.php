<style> 
    .visible { 
        display:block!important; 
    }
    .hidden {
        display: none!important;
    }
</style>
<div>
    <div id="popup-zayavka" class="mfp-hide">
        <form enctype="multipart/form-data" method="post" id="form">
            <!-- СООБЩЕНИЕ ПОСЛЕ ОТПРАВКИ ФОРМЫ ЗВОНКА -->
            <div class="successform hidden">
                <div class="step-name clearfix">Спасибо!</div>
                <div class="zvonok-wrap">
                   <img src="./images/zvonok-checked.jpg" alt="">
                    <div class="zvonok-back">
                        Мы приняли Вашу заявку и в ближайшее время с Вами свяжется наш сотрудник. Вы можете отслеживать статус заявки в личном кабинете.
                    </div>
                    <div class="step-buttons-block">
                        <button type="button" onclick="callclosebtn();" class="grey-btn after-send-btn">Вернуться на сайт</button>
                        <a class="close2" onclick="callclosebtn();" href="./lk.php"><div class="orange-btn after-send-go-btn">Перейти в личный кабинет</div></a>
                    </div>
                </div>
            </div>
            <!-- СООБЩЕНИЕ ПОСЛЕ ОТПРАВКИ ФОРМЫ ЗВОНКА -->

            <div class="formvisible">

                <div class="step-name clearfix">Заявка</div>
                
                <div id="step1">
                    <div class="step-breadcrumbs-block">
                        <div class="step-breadcrumbs-active">1. Ваши данные</div>
                        <div class="step-breadcrumbs">2. Документы</div>
                        <div class="step-breadcrumbs">3. Гарантия</div>
                    </div>
                    <div class="mobile-breadcrumbs-block">
                        <div class="mobile-breadcrumbs-name">Ваши данные</div>
                        <div class="mobile-breadcrumbs-number">Шаг 1 из 3</div>
                    </div>
                    <div class="step-blocks">
                        <div><label for="phone-id">Ваш телефон</label></div>
                        <div><input type="text" class="phone" name="phone" id="phone-id"></div>
                    </div>
                    <div class="step-blocks">
                        <div><label for="email-id">Ваш email</label></div>
                        <div><input type="email" name="email" id="email-id"></div>
                    </div>
                    <div class="step-blocks">
                        <div><label for="company-name-id">Название компании</label></div>
                        <div><input type="text" name="company-name" id="company-name-id"></div>
                    </div>
                    <div class="step-blocks">
                        <div><label for="company-inn-id">ИНН компании</label></div>
                        <div><input type="text" name="company-inn" id="company-inn-id"></div>
                    </div>
                        
                    <label class="step-check" for="soglasen-id">
                        <input class="checkbox" type="checkbox" name="soglasen" id="soglasen-id">
                        <div class="checkbox-custom"></div>
                        <div class="label">Я согласен с <a href="#">публичной офертой</a> и <a href="">условиями передачи 
                        персональных данных</a>
                        </div>
                    </label>
                    <div class="step-buttons-block">
                        <button type="button" onclick="step_one_go();" class="next orange-btn step1-next-btn">Продолжить</button>
                    </div>
                </div>
                
                <div id="step2" class="hidden">
                    <div class="step-breadcrumbs-block">
                        <div class="step-breadcrumbs">1. Ваши данные</div>
                        <div class="step-breadcrumbs-active">2. Документы</div>
                        <div class="step-breadcrumbs">3. Гарантия</div>
                    </div>
                    <div class="mobile-breadcrumbs-block">
                        <div class="mobile-breadcrumbs-name">Документы</div>
                        <div class="mobile-breadcrumbs-number">Шаг 2 из 3</div>
                    </div>
                    <div class="step2-blocks">
                        
                        <div class="input-file-name">Уставные документы</div>
                        
                        <div id="add_field_area">
                            <?php  
                            $array = '';
                            $values = explode("|",$array);
                            $n = 0;
                            foreach ($values as $value) {
                            $n++;
                                if ($n == 1) {
                            ?>  <div id="add1" class="add">
                                    <div class="input_file_hold">
                                        <label class="input_file_label btn btn_upload_file">
                                            <input type="file" name="ustav-docs1[]" id="ustav-docs" class="inputfile outtaHere" onblur="writeFieldsVlues();" multiple="multiple"/>
                                            <div class="input_file_add"><img src="./images/screpka_red.png" alt="">Выбрать файл</div>
                                        </label>
                                    </div>
                                </div>
                              
                             
                                            
                                 <?php
                                } else {            
                                ?>



                                <div id="add<?=$n?>" class="add">
                                    <div class="input_file_hold">
                                        <label class="input_file_label btn btn_upload_file">
                                            <input type="file" name="ustav-docs<?=$n?>[]" id="ustav-docs" class="inputfile outtaHere" onblur="writeFieldsVlues();" multiple="multiple"/>
                                            <div class="input_file_add"><img src="./images/screpka_red.png" alt="">Выбрать файл</div>
                                        </label>
                                    </div>
                                </div>
                                
                                <?php 
                                
                                }
                            }
                             
                                ?>
                        
                        </div>
                        
                        <div class="addfield">
                            <div onclick="addField('add_field_area', 'ustav-docs');" class="addbutton"><img src="./images/plus_ico.png" alt="">Добавить еще</div>
                            <input type="hidden" name="values" id="values"  value="<?=$array?>"/>
                            <div onclick="deleteLastField('add_field_area');" class="delbutton"><img src="./images/minus_ico.png" alt="">Убрать</div>
                        </div>
                        

                    </div>
                    <div class="step2-blocks-2">
                        <div class="input-file-name">Налоговые документы</div>
                        
                        <div id="add_field_area2">
                            <?php  
                            $array = '';
                            $values = explode("|",$array);
                            $n = 0;
                            foreach ($values as $value) {
                            $n++;
                                if ($n == 1) {
                            ?>  <div id="add1" class="add">
                                    <div class="input_file_hold">
                                        <label class="input_file_label btn btn_upload_file">
                                            <input type="file" name="nalog-docs1[]" id="nalog-docs" class="inputfile outtaHere" onblur="writeFieldsVlues();" multiple="multiple"/>
                                            <div class="input_file_add"><img src="./images/screpka_red.png" alt="">Выбрать файл</div>
                                        </label>
                                    </div>
                                </div>
                              
                             
                                            
                                 <?php
                                } else {            
                                ?>



                                <div id="add<?=$n?>" class="add">
                                    <div class="input_file_hold">
                                        <label class="input_file_label btn btn_upload_file">
                                            <input type="file" name="nalog-docs<?=$n?>[]" id="nalog-docs" class="inputfile outtaHere" onblur="writeFieldsVlues();" multiple="multiple"/>
                                            <div class="input_file_add"><img src="./images/screpka_red.png" alt="">Выбрать файл</div>
                                        </label>
                                    </div>
                                </div>
                                
                                <?php 
                                
                                }
                            }
                             
                                ?>
                        
                        </div>
                        
                        <div class="addfield2">
                            <div onclick="addField('add_field_area2', 'nalog-docs');" class="addbutton"><img src="./images/plus_ico.png" alt="">Добавить еще</div>
                            <input type="hidden" name="values" id="values"  value="<?=$array?>"/>
                            <div onclick="deleteLastField('add_field_area2');" class="delbutton"><img src="./images/minus_ico.png" alt="">Убрать</div>
                        </div>

                    </div>
                    <div class="step2-blocks-3">
                        <div class="input-file-name">Бухгалтерские документы</div>
                        
                        <div id="add_field_area3">
                            <?php  
                            $array = '';
                            $values = explode("|",$array);
                            $n = 0;
                            foreach ($values as $value) {
                            $n++;
                                if ($n == 1) {
                            ?>  <div id="add1" class="add">
                                    <div class="input_file_hold">
                                        <label class="input_file_label btn btn_upload_file">
                                            <input type="file" name="buh-docs1[]" id="buh-docs" class="inputfile outtaHere" onblur="writeFieldsVlues();" multiple="multiple"/>
                                            <div class="input_file_add"><img src="./images/screpka_red.png" alt="">Выбрать файл</div>
                                        </label>
                                    </div>
                                </div>
                              
                             
                                            
                                 <?php
                                } else {            
                                ?>



                                <div id="add<?=$n?>" class="add">
                                    <div class="input_file_hold">
                                        <label class="input_file_label btn btn_upload_file">
                                            <input type="file" name="buh-docs<?=$n?>[]" id="buh-docs" class="inputfile outtaHere" onblur="writeFieldsVlues();" multiple="multiple"/>
                                            <div class="input_file_add"><img src="./images/screpka_red.png" alt="">Выбрать файл</div>
                                        </label>
                                    </div>
                                </div>
                                
                                <?php 
                                
                                }
                            }
                             
                                ?>
                        
                        </div>
                        
                        <div class="addfield3">
                            <div onclick="addField('add_field_area3', 'buh-docs');" class="addbutton"><img src="./images/plus_ico.png" alt="">Добавить еще</div>
                            <input type="hidden" name="values" id="values"  value="<?=$array?>"/>
                            <div onclick="deleteLastField('add_field_area3');" class="delbutton"><img src="./images/minus_ico.png" alt="">Убрать</div>
                        </div>
                        
                    </div>
                    <div class="step2-blocks-4">
                        <div class="input-file-name">Документы по гарантии</div>
                        <div id="add_field_area4">
                            <?php  
                            $array = '';
                            $values = explode("|",$array);
                            $n = 0;
                            foreach ($values as $value) {
                            $n++;
                                if ($n == 1) {
                            ?>  <div id="add1" class="add">
                                    <div class="input_file_hold">
                                        <label class="input_file_label btn btn_upload_file">
                                            <input type="file" name="garant-docs1[]" id="garant-docs" class="inputfile outtaHere" onblur="writeFieldsVlues();" multiple="multiple"/>
                                            <div class="input_file_add"><img src="./images/screpka_red.png" alt="">Выбрать файл</div>
                                        </label>
                                    </div>
                                </div>
                              
                             
                                            
                                 <?php
                                } else {            
                                ?>



                                <div id="add<?=$n?>" class="add">
                                    <div class="input_file_hold">
                                        <label class="input_file_label btn btn_upload_file">
                                            <input type="file" name="garant-docs<?=$n?>[]" id="garant-docs" class="inputfile outtaHere" onblur="writeFieldsVlues();" multiple="multiple"/>
                                            <div class="input_file_add"><img src="./images/screpka_red.png" alt="">Выбрать файл</div>
                                        </label>
                                    </div>
                                </div>
                                
                                <?php 
                                
                                }
                            }
                             
                                ?>
                        
                        </div>

                        <div class="addfield4">
                            <div onclick="addField('add_field_area4', 'garant-docs');" class="addbutton"><img src="./images/plus_ico.png" alt="">Добавить еще</div>
                            <input type="hidden" name="values" id="values"  value="<?=$array?>"/>
                            <div onclick="deleteLastField('add_field_area4');" class="delbutton"><img src="./images/minus_ico.png" alt="">Убрать</div>
                        </div>

                    </div>
                    <div class="step2-buttons-block">
                        <button type="button" onclick="step_two_back();" class="back grey-btn step2-back-btn">Назад</button>
                        <button type="button" onclick="step_two_go();" class="next orange-btn step2-next-btn">Продолжить</button>
                    </div>
                </div>
                
                <div id="step3" class="hidden">
                    <div class="step-breadcrumbs-block">
                        <div class="step-breadcrumbs">1. Ваши данные</div>
                        <div class="step-breadcrumbs">2. Документы</div>
                        <div class="step-breadcrumbs-active">3. Гарантия</div>
                    </div>
                    <div class="mobile-breadcrumbs-block">
                        <div class="mobile-breadcrumbs-name">Гарантия</div>
                        <div class="mobile-breadcrumbs-number">Шаг 3 из 3</div>
                    </div>
                    <div class="step3-blocs-wrap">
                        <div class="step3-blocks">
                            <div><label for="garant-summ-id">Сумма гарантии</label></div>
                            <div><input type="text" name="garant-summ" id="garant-summ-id"></div>
                        </div>
                        <div class="step3-blocks">
                            <div><label for="garant-srok-id">Срок гарантии</label></div>
                            <div><input type="text" name="garant-srok" id="garant-srok-id"></div>
                        </div>
                    </div>
                    <div class="step3-blocks">
                        <div><label for="garant-type-id">Тип гарантии</label></div>
                        <div>
                            <div class="select">
    	                        <a href="javascript:void(0);" class="slct">Выберите тип гарантии</a>
    	                        <ul class="drop">
    		                        <li><a id="option1" href="#">Гарантия по 223-ФЗ</a></li>
                                    <li><a id="option2" href="#">Гарантия по 44-ФЗ</a></li>
                                    <li><a id="option3" href="#">По госконтракту</a></li>
                                    <li><a id="option4" href="#">На возврат НДС</a></li>
                                    <li><a id="option5" href="#">Для закрытых конкурсов и аукционов</a></li>
                                    <li><a id="option6" href="#">Для страховых компаний</a></li>
                                    <li><a id="option7" href="#">На акциз</a></li>
                                    <li><a id="option8" href="#">Для коммерческих компаний</a></li>
                                    <li><a id="option9" href="#">Таможенные гарантии</a></li>
                                    <li><a id="option10" href="#">Туристические гарантии</a></li>
    	                        </ul>
    	                        <input name="option" type="hidden" id="select" />
                            </div>
                        </div>
                    </div>
                    <div class="step3-buttons-block">
                        <button type="button" onclick="step_three_back();" class="back grey-btn step3-back-btn">Назад</button>
                        <input class="orange-btn step-next-btn" type="submit" value="Отправить заявку">
                    </div>
                </div>
                
                <div class="zayavka-bottom">
                    <div class="zayavka-bottom-text">
                        <div class="zayavka-text-1">Не хотите заполнять все данные?</div>
                        <div class="zayavka-text-2">Оставьте свой телефон, мы вам перезвоним и сами все заполним!</div>
                    </div>
                    
                    <a href="#popup-zvonok" class="zvonok-popup-link">
                        <div class="black-btn zayavka-bottom-btn">Заказать звонок</div>
                    </a>
                    
                </div>
            </div>
	    </form>
    </div>
</div>





<script>
$('.zvonok-popup-link').magnificPopup({
  type: 'inline',

    fixedContentPos: true,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,

    midClick: true,
    removalDelay: 300,
});

$('.zayavka-popup-link, .zvonok-popup-link').magnificPopup({
  type: 'inline',

    fixedContentPos: true,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,

    midClick: true,
    removalDelay: 300,
});
</script>

<script type="text/javascript">
// Select
$('.slct').click(function(){
    /* Заносим выпадающий список в переменную */
    var dropBlock = $(this).parent().find('.drop');

    /* Делаем проверку: Если выпадающий блок скрыт то делаем его видимым*/
    if( dropBlock.is(':hidden') ) {
        dropBlock.slideDown();

        /* Выделяем ссылку открывающую select */
        $(this).addClass('active');

        /* Работаем с событием клика по элементам выпадающего списка */
        $('.drop').find('li').click(function(){

            /* Заносим в переменную HTML код элемента
            списка по которому кликнули */
            var selectResult = $(this).html();

            /* Находим наш скрытый инпут и передаем в него
            значение из переменной selectResult */
            $(this).parent().parent().find('input').val(selectResult);

            /* Передаем значение переменной selectResult в ссылку которая
            открывает наш выпадающий список и удаляем активность */
            $(this).parent().parent().find('.slct').removeClass('active').html(selectResult);

            /* Скрываем выпадающий блок */
            dropBlock.slideUp();
        });

    /* Продолжаем проверку: Если выпадающий блок не скрыт то скрываем его */
    } else {
        $(this).removeClass('active');
        dropBlock.slideUp();
    }

    /* Предотвращаем обычное поведение ссылки при клике */
    return false;
});

function selectField (id) {
    var selectResult = $('.drop').find('a#' + id).parent().html();

    /* Находим наш скрытый инпут и передаем в него
    значение из переменной selectResult */
    $('.drop').parent().parent().find('input').val(selectResult);

    /* Передаем значение переменной selectResult в ссылку которая
    открывает наш выпадающий список и удаляем активность */
    $('.drop').parent().parent().find('.slct').html(selectResult);                      
}

</script>

<script>
function step_one_go() {
    $("#step1").addClass("hidden");
    $("#step2").removeClass("hidden");
}
function step_two_back() {
    $("#step2").addClass("hidden");
    $("#step1").removeClass("hidden");
}
function step_two_go() {
    $("#step2").addClass("hidden");
    $("#step3").removeClass("hidden");
}
function step_three_back() {
    $("#step2").removeClass("hidden");
    $("#step3").addClass("hidden");
}
</script>