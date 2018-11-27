function addField (id, fileName) {
    var telnum = parseInt($('#' + id).find('div.add:last').attr('id').slice(3))+1;
    $('div#' + id).append('<div id="add'+telnum+'" class="add"><div class="input_file_hold"><label class="input_file_label btn btn_upload_file"><input type="file" name="'+fileName+telnum+'[]" id="'+fileName+'" class="inputfile outtaHere" onblur="writeFieldsVlues();" multiple="multiple"/><div class="input_file_add"><img src="./images/screpka_red.png" alt="">Выбрать файл</div></label></div></div>');

    var file = $('#' + id).find('#add'+telnum).find('.inputfile');
    var text = $('#' + id).find('#add'+telnum).find('.input_file_add');

    file.on("change", function (inpfil) {
            var files = file[0].files;

            $(this).parent().parent().addClass('file_selected');

            if (files.length > 1) {
                text.text("Файлов добавлено: " + files.length);

                text.prepend('<img src="./images/screpka_green.png" alt="">');
                text.parent().parent().append('<div class="button_close"><img src="./images/del_ico.png" alt=""></div>');
        
                var close = text.parent().parent().find('.button_close');

                close.on("click", function (inpfilclose) {
                    file.val('');
                    text.text('Выбрать файл');
                    text.prepend('<img src="./images/screpka_red.png" alt="">');
                    $(this).parent().removeClass('file_selected');
                    $(this).remove('.button_close');
                });



            } else {
                var filename = inpfil.target.value.split("\\").pop();
                text.text(filename);
                text.prepend('<img src="./images/screpka_green.png" alt="">');
                text.parent().parent().append('<div class="button_close"><img src="./images/del_ico.png" alt=""></div>');
        
                var close = text.parent().parent().find('.button_close');

                close.on("click", function (inpfilclose) {
                    file.val('');
                    text.text('Выбрать файл');
                    text.prepend('<img src="./images/screpka_red.png" alt="">');
                    $(this).parent().removeClass('file_selected');
                    $(this).remove('.button_close');
                });

            }
        });

}

function deleteLastField (inputId) {
    var id = parseInt($('#' + inputId).find('div.add:last').attr('id').slice(3));
    if(id > 1){
        $('#' + inputId).find('#add'+id).remove();
    }
    writeFieldsVlues();
}

function writeFieldsVlues () {
    var str = [];
    var tel = '';

    for(var i = 0; i<$("input#ustav-docs").length; i++) {
        tel = $($("input#ustav-docs")[i]).val();
        if (tel !== '') {
            str.push($($("input#ustav-docs")[i]).val());
        }
    }
    $("input#values").val(str.join("|"));
}
