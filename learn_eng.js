// ===============================
// Learn_eng =====================
// ===============================
jQuery(document).ready(function() {

    // Открываем слова v.2
    jQuery('.js-learn-eng').click(function() {
        jQuery('.table-bordered').addClass('table-hidden-text');
    });
    jQuery('.js-learn-writ').click(function() {
        jQuery('.table-bordered').addClass('table-hidden-eng-text');
    });


    // показать правельные
    jQuery('.btn-accuracy-on').click(function() {
        jQuery('.table-bordered').addClass('accuracy-on');
    });

    // инкремент счетчика изученых v.2
    $('.glyphicon-plus-sign').on('click', function(){
        // var idPron = jQuery(this).attr('word-id');
        var countWord = $(this).siblings("input").val();
        var countWord = countWord*1 + 1;
        // $('.id-tran_done-'+idPron).val(countWord);
        $(this).siblings("input").val(countWord);
        // console.log(countWord);
    });



    $('.glyphicon-music').on('click', function(){
        var textSong =  $(this).parent().text();
        responsiveVoice.speak("" + textSong +"");
    });


    // Открываем слова
    jQuery( ".invisible-word" ).click(function() {
        jQuery(this).parent().parent().addClass('englearn-vision-on');
        // jQuery('.column-1').attr('style', 'color:#000;');
        // jQuery('.column-2').attr('style', 'color:#000;');
    });

// Счетчик правельных (куки)
    jQuery( ".column-6 img" ).click(function() {
        var id_tran          = jQuery(this).attr('id');          // Получаем ид слова (по картинке в данном случае)
        var id_tran_div      = 'id-tran-done-' + id_tran;        // Формируеи ид div'a - счетчика (создаем уникальное имя кука)
        var id_tran_div_span = '.tran-done-'+ id_tran + ' span'; // Формируем путь, куда положить новое значение счетчика

        var done = Number( $(id_tran_div_span).html() );         // получаем значение кука, приводим в числовой вид

        // if (isNaN(done)) { done = 0; };                       // если не назначим делаем нулем

        var done = done + 1;                                     // инкримент
        $.cookie(id_tran_div, done);                             // записываем новое значение значение в кук
        $(id_tran_div_span).html(done);                          // заменяем значение в ячейке, увеличенное на 1
        // console.log( id_tran_div);
    });

// Счетчик правельных (куки) pron
    jQuery( ".column-7 img" ).click(function() {
        var id_pron          = jQuery(this).attr('id');               // Получаем ид слова (по картинке в данном случае)
        var id_pron_div      = 'id-pron-done-'+ id_pron;              // Формируеи ид div'a - счетчика (создаем уникальное имя кука)
        var id_pron_div_span = '.pron-done-'+ id_pron + ' span';      // Формируем путь, куда положить новое значение счетчика
        var done             = Number( $(id_pron_div_span).html() );  // получаем значение кука, приводим в числовой вид
        var done             = done + 1;                              // инкримент
        $.cookie(id_pron_div, done);                                  // записываем новое значение значение в кук
        $(id_pron_div_span).html(done);                               // заменяем значение в ячейке, увеличенное на 1
    });
// Счетчик правельных (куки) writ
    jQuery( ".column-8 img" ).click(function() {
        var id_writ          = jQuery(this).attr('id');               // Получаем ид слова (по картинке в данном случае)
        var id_writ_div      = 'id-writ-done-'+ id_writ;              // Формируеи ид div'a - счетчика (создаем уникальное имя кука)
        var id_writ_div_span = '.writ-done-'+ id_writ + ' span';      // Формируем путь, куда положить новое значение счетчика
        var done             = Number( $(id_writ_div_span).html() );  // получаем значение кука, приводим в числовой вид
        var done             = done + 1;                              // инкримент
        $.cookie(id_writ_div, done);                                  // записываем новое значение значение в кук
        $(id_writ_div_span).html(done);                               // заменяем значение в ячейке, увеличенное на 1
    });
// Показываем блок, чтобы отметить выученные слова
    jQuery( ".visible-doneword" ).click(function() {
        jQuery('.column-9').attr('style', 'display:block');
    });
// Показываем блок с вводом текста, убираем на английском, показываем на русском
    jQuery( ".visible-spelling" ).click(function() {
        jQuery('.column-8').attr('style', 'display:block');
        jQuery('.column-3').attr('style', 'display:none');
        jQuery('.column-6').attr('style', 'display:none');
        jQuery('.column-7').attr('style', 'display:none');
        jQuery('.column-1').attr('style', 'color:#abdddd;');
        jQuery('.column-2 span').attr('style', 'color:#000;');

        jQuery( ".invisible-word" ).click(function() {
            jQuery(this).parent().parent().addClass('englearn-spelling-visible');
        });
    });





});










