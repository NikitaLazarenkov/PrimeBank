$(function() {
    $(".step2-blocks").each(function(indx, el) {
        var del = $(".delbutton", el);  
        console.log($(".add", el).length);
        function show() {
            del.toggle($(".add", el).length > 1)
        }
        show();
        $(".addbutton", el).on("click", show);
        del.on("click", show)
    })
});

$(function() {
    $(".step2-blocks-2").each(function(indx, el) {
        var del = $(".delbutton", el);  
        console.log($(".add", el).length);
        function show() {
            del.toggle($(".add", el).length > 1)
        }
        show();
        $(".addbutton", el).on("click", show);
        del.on("click", show)
    })
});

$(function() {
    $(".step2-blocks-3").each(function(indx, el) {
        var del = $(".delbutton", el);  
        console.log($(".add", el).length);
        function show() {
            del.toggle($(".add", el).length > 1)
        }
        show();
        $(".addbutton", el).on("click", show);
        del.on("click", show)
    })
});

$(function() {
    $(".step2-blocks-4").each(function(indx, el) {
        var del = $(".delbutton", el);  
        console.log($(".add", el).length);
        function show() {
            del.toggle($(".add", el).length > 1)
        }
        show();
        $(".addbutton", el).on("click", show);
        del.on("click", show)
    })
});

$('.input_file_hold').each(function () {
    var hold = $(this);
    var file = hold.find('.inputfile');
    var text = hold.find('.input_file_add');

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

        }
        else {
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

});