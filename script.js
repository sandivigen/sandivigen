// =============================== 
// Scrip_Upwork ==================
// ===============================

// Вызываем функцию при клике на конопку "Парсить"
function f(){
    var incoming = jQuery(".incoming-code").html();                          // тут будет входящий код с апворка

    // ============================
    // ===== Yandex Translate =====
    // ============================
    var yandexTranslate = {

        key: 'trnsl.1.1.20160108T131932Z.e41ce3d9b1ca4b80.8dd0ff790e81e6b028ecdc9f6340cb6690a86f63',
        api: 'https://translate.yandex.net/api/v1.5/tr.json/translate',
        
        translate: function(text, part, idstring, link, callback) {
            var that = this;
            if (part == 'a link') {
                var url = this.api+'?'+'key=' + this.key + '&text=' + text + '&lang=en-en'; // Костыль, чтобы ссылка стояла в центре текста
            } else {
                var url = this.api+'?'+'key=' + this.key + '&text=' + text + '&lang=en-ru';
            };
             
            var ajax = new XMLHttpRequest();
            ajax.open('GET', url, true);
            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4) {
                    if (ajax.status == 200) {
                        text = ajax.responseText;
                        text = JSON.parse(text);
                        text = text.text[0];
                        
                        // console.log(text);

                        if (part == 'title')              $(".work-title-translate").append(text);
                        if (part == 'text not have link') $(".work-text-translate-"+idstring).append(text);
                        if (part == 'question')           $(".question-text-translate-"+idstring).append(text);

                        // if (part == 'text with a link')   $(".work-text-translate-"+idstring).append(text+link);
                    }
                }
            };
            ajax.send(null);
        },
    };

    // ===================================================
    // ===== 1 часть (заголовок, параграфы, вопросы) =====
    // ===================================================

    // ===== Заголовок ==========================================
    var workTitleSearch = '&lt;h1 class="m-0-top" data-ng-non-bindable&gt;'; // кусок текста с тегом н1, его будем искать
    var workTitlePos    = incoming.indexOf(workTitleSearch);                 // Ищим номер симмвола тега заголовка н1
    var workTitleStart  = workTitlePos + 47;                                 // 47 длинна кода н1, вырезаем ее это будет первый символ залоговка
    var workTitleEnd    = incoming.indexOf('&lt;', workTitleStart);          // Ищим открытие закрывающегося тэга, это будет конец заголовка
    var workTitle = incoming.slice(workTitleStart, workTitleEnd);            // Поучаем заголовок
    var workTitle = workTitle.replace(/&amp;/, 'and');                       // убираю знак &, иначе после них перевод не проходит
    
    jQuery(".work-title").text(workTitle);
    yandexTranslate.translate(workTitle, 'title'); // второй параметр это указывает формуле куда закинуть этот тескт

    // ===== Текст заявки =======================================
    // Получаем текст статьи неотформатированный
    var workTextSearch = '&lt;p class="break" data-ng-non-bindable&gt;';                                // ищим начала блока с описанием работы
    var workTextPos    = incoming.indexOf(workTextSearch);                                              // Определяем номер
    var workTextStart  = workTextPos + 44;                                                              // Вычитаем длину хтмл кода
    // var workTextEnd    = incoming.indexOf('&lt;ul class="list-unstyled"&gt;' || '&lt;/p&gt;', workTextStart);     
    var workTextEnd    = incoming.indexOf('&lt;/p&gt;', workTextStart);                                 // Ищим открытие закрывающегося тэга, это будет конец заголовка
    var workText       = incoming.slice(workTextStart, workTextEnd);                                    // Кусок не отформатированного текста

    // console.log('workTitle = ' + workTitle);

    // Вставляем абзацы текста на страницу
    var i = 0;
    var end = 0; 
    while (end != -1) { 

        // ============ Парсинг текста ==============
        if (i==0) {                                                                         // Если первая итерация, то вырезка будет идти с первого символа
            var paragraphStart = 0;                                                         // 0 - это первый символ
        } else {                                                                            // Иначе первым символом будет конец предыдущей итерации
            var paragraphStart = workText.indexOf('&lt;br /&gt;', end);                     // Ищим тег переноса строки, начиная с конца прелылущей итерации
        };
        var paragraphEnd     = workText.indexOf('&lt;br /&gt;', end+'&lt;br /&gt;'.length); // ищим текст переноса строки с конца предыдущей итерации + отступаем перенос строки(нужно ли его отступать если его нет?) 
        var paragraph        = workText.slice(paragraphStart, paragraphEnd);                // Обрезаем обзац
        
        var paragraph = paragraph.replace(/&nbsp;&nbsp;/ig, ' ');                           // убираю двойные пробелы из текста, иначе после них перевод не проходит
        var paragraph = paragraph.replace(/&amp;/, 'and');                                  // убираю знак &, иначе после них перевод не проходит

        if (/&lt;br \/&gt;/.test(paragraph)) {                                                          // если параграф начинается с переноса строки
                paragraph = paragraph.slice('&lt;br /&gt;'.length);                                     // то удаляем этот перенос троки
        };

        if (paragraph != 0) {                                       // если переменная(строка для текста) не пуста, то будем с ней работать

            if (/&lt;a/.test(paragraph)) {                          // Если в параграфе есть ссылка
                var nextLinkStart = 0; // номер символа следующий ссылки. Динамически, изначально 0 - ищим с начала документа
                var resault = '';
                var startText = 0; // Начало текста, чтобы начать вырезать первый куска
                while(nextLinkStart >= 0) { // будет совершать итерации пока не закончатся ссылки

                    // Ищим номер началла ссылки
                    if (nextLinkStart == 0) { // для первой итерации будим искать ссылку с начала документа
                        linkStart = paragraph.indexOf('&lt;a href');
                    } else { // для последующих будем искать с конца пердыдущей
                        linkStart = paragraph.indexOf('&lt;a href', nextLinkStart);         // ищем начало ссылки, начиная либо с начала документа, либо с конца предыдущей итерации
                    };

                    // Ищим номер конца ссылки
                    linkEnd = paragraph.indexOf('/a&gt;', linkStart);                 // конец ссылки, начиная от начала этой ссылки(ссылок может быть много)

                    // Получаем url ссылки, для английской версии
                    var paragraphStartLink   = paragraph.indexOf('_blank"&gt;');   // находим начало href
                    var paragraphEndLink     = paragraph.indexOf('&lt;/a&gt;');    // находим конец href
                    var paragraphLink        = paragraph.slice(paragraphStartLink+'_blank"&gt;'.length, paragraphEndLink);

                    // Ищим номер начала второй ссылки, если она есть если нет то вернет -1
                    nextLinkStart = paragraph.indexOf('&lt;a', linkEnd); // перезаписываем значение 0 на число обнаруженной ссылки,(чтобы от него потом искать следующую) если ее нет, то -1

                    // Получаем текст слева от ссылки
                    leftText = paragraph.slice(startText, linkStart);

                    // Получаем текст с права
                    rigthText = paragraph.slice(linkEnd+'/a&gt;'.length, nextLinkStart); // попробуем для начала конец строки
                    
                    // Формируем результат
                    if (startText == 0) { // если первая этерация, то прибавляем текст и слева и справа
                        resaultEng = leftText + '<a href="http://'+paragraphLink+'" target="_blank">'+paragraphLink+'</a> ' + rigthText; // для английской версии переписывем ссылку,  а то она не коректно отображается(вставляется код в место хтмл элемента)
                        resault = leftText + '(link) ' + rigthText;
                    } else { // если последующие, то только с лева
                        resaultEng = resaultEng + '<a href="http://'+paragraphLink+'" target="_blank">'+paragraphLink+'</a> ' + rigthText; // для английской версии переписывем ссылку
                        resault = resault + '(link) ' + rigthText;
                    };
                
                    startText = linkEnd + '/a&gt;'.length; // переписываем значение для следующей итерации
                }
                
                // console.log('resault ' + i + 'p = ' + resault);

                var paragraphHtmlDiv = "<div class='work-text'>"+resaultEng+"</div><div class='work-text-translate work-text-translate-"+i+"'></div><input type='text' class='form-control'></div>" ; // иначе обварачиваем в див, но в нутрь кладем текст без ссылки, так же создадим див для перевода
                yandexTranslate.translate(resault, 'text not have link', i);
                $(".work-text-wrapper").append(paragraphHtmlDiv); // Выводим  текст в документ

            } else { // если ссылки в тексте нет
                var paragraphHtmlDiv = "<div class='work-text'>"+paragraph+"</div><div class='work-text-translate work-text-translate-"+i+"'></div><input type='text' class='form-control'></div>" ; // иначе обварачиваем в див, но в нутрь кладем текст без ссылки, так же создадим див для перевода
                yandexTranslate.translate(paragraph, 'text not have link', i);
                $(".work-text-wrapper").append(paragraphHtmlDiv); // Выводим текст в документ
            };
        };

        end = paragraphEnd; // делаем поиск текста следующей этерации с конца этой(для закрытия цыкла)
        i++;
    }

    // ===== Вопросы =======================================
    if (/submitting a proposal:/.test(incoming))  { // Если текст содержит вопросы, иначе цикл подвисает
        var workQuestionsStart = incoming.indexOf('submitting a proposal:');                 // Ищим начало блока с вопросами
        var workQuestionsEnd   = incoming.indexOf('&lt;/ol', workQuestionsStart);            // Ищим занец блока с вопросами
        var workQuestions      = incoming.slice(workQuestionsStart+126, workQuestionsEnd);   // Вырезаем блок с вопросами

        var workQuestions = workQuestions.replace(/&amp;/, 'and');                                  // убираю знак &, иначе после них перевод не проходит

        var workQuestionsCount = 0;     // номер символа следующий ссылки. Динамически, изначально 0 - ищим с начала документа
        var startTextQuestion = 0;      // Начало текста, чтобы начать вырезать первый куска
        var i = 0;                      // Счетчик для css классов, чтобы скрипт знал куда ложить перевод

        while(workQuestionsCount >= 0) { // будет совершать итерации пока не закончатся ссылки
            questionStart = workQuestions.indexOf('&lt;li data-ng-non-bindable&gt;', startTextQuestion);                // Ищим начало вопроса, первый раз начиная с 0 символа
            questionEnd   = workQuestions.indexOf('&lt;/li&gt;', questionStart);                                        // Ищим закрытие тега, это конец текста вопроса
            questionText  = workQuestions.slice(questionStart+'&lt;li data-ng-non-bindable&gt;'.length, questionEnd);   // Вырезаем вопрос

            // Перезаписывает начало поиска для следующей итерации
            startTextQuestion = questionEnd;

            // Проверяем есть ли еще вопросы в блоке, если нет вернет -1 и выйдет из цикла
            workQuestionsCount = workQuestions.indexOf('&lt;li', questionEnd); 

            var questionHtmlDiv = "<div class='question-text'>"+questionText+"</div><div class='question-text-translate question-text-translate-"+i+"'></div><input type='text' class='form-control'></div>" ; // иначе обварачиваем в див, но в нутрь кладем текст без ссылки, так же создадим див для перевода
            yandexTranslate.translate(questionText, 'question', i);
            $(".questions-text").append(questionHtmlDiv); // Выводим  текст в документ

            i++;
            // console.log('questionText = ' + questionText);
            // console.log('questionEnd = ' + questionEnd);
            // console.log('workQuestionsCount = ' + workQuestionsCount);
        }
    } else {
        $(".question-block").attr('style', 'display:none'); // Скрываем блок с вопросами, тк вопросов не найдено
    }
    

    

    // ===================================================
    // ===== 2 часть (лейблы) ============================
    // ===================================================
    var workBar       = incoming.slice(incoming.indexOf('About the Client'), incoming.indexOf('id="layout-footer"')); // Выбираю блок с сайтбара апворка
    
    // Stars and Reviews (Рейтинг) =======================================================================================================
    var workStarsStart  = workBar.indexOf('ng-model="buyerScore"&gt;');         // ищим номер символа, атрибут предыдущего от нужного нам элемента  
    var workStarsEnd    = workBar.indexOf('review', workStarsStart);           // ищим номер первого символа, конца фразы нужного нам элемента
    var workStars       = workBar.slice(workStarsStart+64, workStarsEnd);       // обрезаем начало(64), чтобы убрать лишние символы(закрытие тега, пробелы...)

    // Для закраски поля с рейтингом
    var workStarsNumberStart  = workStars.indexOf('(');                                 
    var workStarsNumberEnd    = workStars.indexOf(')', workStarsNumberStart);           
    var workStarsNumber       = workStars.slice(workStarsNumberStart+1, workStarsNumberEnd); // +1 это сумма символа "("
    
    workStarsNumber = workStarsNumber * 1;
    if (workStarsNumber <= 5 & workStarsNumber >= 4.95) {
        $(".work-stars").addClass('label-success');
    } else if (workStarsNumber < 4.95 & workStarsNumber >= 4.8 ) {
        $(".work-stars").addClass('label-primary');
    } else if (workStarsNumber < 4.8 & workStarsNumber >= 4.7 ) {
        $(".work-stars").addClass('label-default');
    } else if (workStarsNumber < 4.7 & workStarsNumber >= 4.5 ) {
        $(".work-stars").addClass('label-warning');
    } else if (workStarsNumber < 4.5 & workStarsNumber > 0 ) {
        $(".work-stars").addClass('label-danger');
    } else if (workStarsNumber == 0 ) {
        $(".work-stars").addClass('label-info');
    };

    if (workStarsStart != -1) { // если рейтингов нет, то прочерк, функция возвращает -1, если значение не приходит
        $(".work-stars").append(workStars); // выводим рейтинг в на страницу
    } else {
        $(".work-stars").append('-');
        
    };
    
    // console.log('workStarsNumber = '+workStarsNumber);
    // console.log('workStarsStart = '+workStarsStart);

    // // Сountry =======================================================================================================

    var workСountryStart   = workBar.indexOf('&lt;strong&gt;', workStarsEnd);
    var workСountryEnd     = workBar.indexOf('&lt;/strong&gt;', workСountryStart);
    var workСountry        = workBar.slice(workСountryStart+'&lt;strong&gt;'.length, workСountryEnd);
    $(".work-country").append(workСountry);

    // Для закраски поля со страной
    if (workСountry == 'United Kingdom' || workСountry == 'United States' || workСountry == 'Australia' || workСountry == 'Canada' ) {
        $(".work-country").addClass('label-success');
    } else if (workСountry == 'Germany' || 'Singapore') {
        $(".work-country").addClass('label-primary');
    } else if (workСountry == 'Thailand') {
        $(".work-country").addClass('label-default');
    } else if (workСountry == 'United Kingdom1') {
        $(".work-country").addClass('label-warning');
    } else if (workСountry == 'India') {
        $(".work-country").addClass('label-danger');
    };

    // // Jobs Posted, Hire Rate ===========================================================================

    // сколько выставил работ, пока не использую, у меня вообщето они в таблицах есть, там вроде даже точнее
    // блин но workJobsEnd нужен, не охото сейчас переделывать
    var workJobsStart   = workBar.indexOf('&lt;strong&gt;', workСountryEnd);
    var workJobsEnd     = workBar.indexOf('Jobs Posted', workJobsStart);
    var workJobs        = workBar.slice(workJobsStart+'&lt;strong&gt;'.length, workJobsEnd);
    // $(".work-jobs").append(workJobs);

    var workHrStart   = workBar.indexOf('class="text-muted"&gt;', workJobsEnd);
    var workHrEnd     = workBar.indexOf('Hire Rate,', workHrStart);
    var workHr        = workBar.slice(workHrStart+'class="text-muted"&gt;'.length, workHrEnd-2); // -2 обрезаем %, раньше я их вставлял, но теперь нужно закрашивать лейбл и нужна цифра в значении
    $(".work-hr").append(workHr+'%');

    // Для закраски поля с рейтингом найма
    workHr = workHr * 1;
    if (workHr <= 100 & workHr >= 80 ) {
        $(".work-hr").addClass('label-success');
    } else if (workHr < 80 & workHr >= 60 ) {
        $(".work-hr").addClass('label-primary');
    } else if (workHr < 60 & workHr >= 40 ) {
        $(".work-hr").addClass('label-default');
    } else if (workHr < 40 & workHr >= 30 ) {
        $(".work-hr").addClass('label-warning');
    } else if (workHr < 30 & workHr > 0 ) {
        $(".work-hr").addClass('label-danger');
    } else if (workHr == 0) {
        $(".work-hr").addClass('label-info');
    };

    // console.log('workHr = '+workHr);

    // Total Spent ===========================================================================

    var workSpentStart   = workBar.indexOf('&lt;strong&gt;', workHrEnd);
    var workSpentEnd     = workBar.indexOf('Total Spent', workSpentStart);
    var workSpent        = workBar.slice(workSpentStart+'class="text-muted"&gt;'.length, workSpentEnd);
    if (workSpent.length > 35) {
        $(".work-total").append('-'); // если нет значения, то там кусок хтмл кода большой. его выводить не нцжно ставим прочерк
    } else {
        $(".work-total").append(workSpent);
    };
        // console.log('workSpent = '+workSpent);

    var workHiresStart   = workBar.indexOf('class="text-muted"&gt;', workSpentEnd);
    var workHiresEnd     = workBar.indexOf('Hir', workHiresStart);
    var workHires        = workBar.slice(workHiresStart+'class="text-muted"&gt;'.length, workHiresEnd);
    $(".work-hires").append(workHires);

    var workActiveStart   = workBar.indexOf('es,', workHiresEnd);
    var workActiveEnd     = workBar.indexOf('Active', workActiveStart);
    var workActive        = workBar.slice(workActiveStart+'es,'.length, workActiveEnd);
    $(".work-active").append(workActive);

    // Registration ===========================================================================

    var workRegistrationStart   = workBar.indexOf('Member Since ', workActiveEnd);
    var workRegistrationEnd     = workBar.indexOf('&lt;/small&gt;', workRegistrationStart);
    var workRegistration        = workBar.slice(workRegistrationStart+'Member Since '.length, workRegistrationEnd);
    $(".work-registration").append(workRegistration);

    // Для закраски поля с датой регистрации
    var workRegistrationFormated = Date.parse(workRegistration);
    var now = new Date();
    now = Date.parse(now);
    if (workRegistrationFormated < now - 1000*60*60*24*30*12*2 ) { // больше двух лет
        $(".work-registration").addClass('label-success');
    } else if (workRegistrationFormated < now - 1000*60*60*24*30*12 ) { // больше года
        $(".work-registration").addClass('label-primary');
    } else if (workRegistrationFormated < now - 1000*60*60*24*30*6 ) { // больше полгода
        $(".work-registration").addClass('label-default');
    } else if (workRegistrationFormated < now - 1000*60*60*24*30*1 ) { // от месяца до полугода
        $(".work-registration").addClass('label-warning');
    } else if (workRegistrationFormated < now - 1000*60*60*24*7 ) { // меньше недели
        $(".work-registration").addClass('label-danger');
    };

    // ===================================================
    // ===== 3 часть (оповещения) ========================
    // ===================================================

    // Note: Job Success Score ======================================================================
    var workSuccessStart   = incoming.indexOf('Job Success Score:');
    var workSuccessEnd     = incoming.indexOf('%', workSuccessStart);
    var workSuccess        = incoming.slice(workSuccessStart+'Job Success Score:&lt;/span&gt;'.length, workSuccessEnd);
    if (workSuccessStart != -1) { // если клиент требует рейтинг, то я выведу сообщение об этом
        $(".worry-box").append('<div class="alert alert-danger alert-danger-text">Требует высокий рейтинг: '+workSuccess+'</div>');        
    };

    // Note: Upwork Hours ===========================================================================
    var workUpworkHoursStart   = incoming.indexOf('Upwork Hours:');
    var workUpworkHoursEnd     = incoming.indexOf('hour', workUpworkHoursStart);
    var workUpworkHours        = incoming.slice(workUpworkHoursStart+253, workUpworkHoursEnd);
    if (workUpworkHoursStart != -1) { // если клиент требует часы, то я выведу сообщение об этом
        $(".worry-box").append('<div class="alert alert-danger alert-danger-text">Требует часы: '+workUpworkHours+'</div>');  
    };

    // Note: English Level ===========================================================================
    var workEnglishLevelStart   = incoming.indexOf('English Level:');
    var workEnglishLevelEnd     = incoming.indexOf('&lt;span class=', workEnglishLevelStart);
    var workEnglishLevel        = incoming.slice(workEnglishLevelStart+27, workEnglishLevelEnd);
    if (workEnglishLevelStart != -1) { // если клиент требует английский, то я выведу сообщение об этом
        $(".worry-box").append('<div class="alert alert-danger alert-danger-text">Знание английского: '+workEnglishLevel+'</div>');  
    };

    // Note: Connects(квота) =========================================================================
    var workConnectsSearch = 'Required Connects to submit a proposal:';
    var workConnectsPos    = incoming.indexOf(workConnectsSearch);
    var workConnectsStart  = workConnectsPos + workConnectsSearch.length; 
    var workConnectsEnd    = workConnectsStart + 3;
    var workConnects       = incoming.slice(workConnectsStart, workConnectsEnd);
    if (workConnects > 2) { // Если квота более 2, то выводить предупреждение
        $(".worry-box").append('<div class="alert alert-danger alert-danger-text">Большая квота '+workConnects+'</div>');
    };


    // ===================================================
    // ===== 4 часть (история работ) =====================
    // ===================================================
    // Заметка: если все это выреать и создать собственный объект и вставить кусок текста, тогда и парсить не надо

    // ===== Формируем объект, элементами будут работы ===========================================================================
    // Вырезаем код только истории
    var workHistoryStart  = incoming.indexOf("app.value('workHistory'," , "app.value('workHistory',".length);
    var workHistoryEnd    = incoming.indexOf("})(angular)", workHistoryStart );
    var workHistory       = incoming.slice(workHistoryStart, workHistoryEnd);

    // Счетчик цыкла
    function countWord(source, word) {
        if(!word)
            return 0;
        var res = 0, index = 0;
        while((index = source.indexOf(word)) >= 0) {
            source = source.substring(index + word.length);  
            res++;
        }
        return res;
    }

    var workInfo    = workHistory.indexOf('jobInfo');                    // 60182 находим первое вхождение jobInfo   

    var a = []; // массив для каждого фрилансера
    var i = 0; // Счетчик
    var countword = countWord(workHistory, 'jobInfo');

    while (i < countword) { 

        var workInfoStartDateTxt    = 'startDate":"';
        var workInfoStartDatePos    = workHistory.indexOf(workInfoStartDateTxt, workInfo);
        var workInfoStartDateStart  = workInfoStartDatePos + workInfoStartDateTxt.length; 
        var workInfoStartDateEnd    = workHistory.indexOf('-', workInfoStartDatePos );
        var workInfoStartDate       = workHistory.slice(workInfoStartDateStart, workInfoStartDateEnd);

        var workInfoEndDateTxt    = '"endDate":'; // ищем начало 
        var workInfoEndDatePos    = workHistory.indexOf(workInfoEndDateTxt, workInfo); // определяем номер позиции файла, в выбраном куске текста
        var workInfoEndDateStart  = workInfoEndDatePos + workInfoEndDateTxt.length; // прибовляем к нему длину слова которое мы искали
        var workInfoEndDateEnd    = workHistory.indexOf(',', workInfoEndDatePos ); // ищим номер позицию которым заканчивается дата, начиная с номера конца текста перед датой
        var workInfoEndDate       = workHistory.slice(workInfoEndDateStart, workInfoEndDateEnd); // обрезаем нужный нам кусок

        var workInfoTotalHoursTxt    = 'totalHours":';
        var workInfoTotalHoursPos    = workHistory.indexOf(workInfoTotalHoursTxt, workInfo);
        var workInfoTotalHoursStart  = workInfoTotalHoursPos + workInfoTotalHoursTxt.length; 
        var workInfoTotalHoursEnd    = workHistory.indexOf(',', workInfoTotalHoursPos );
        var workInfoTotalHours       = workHistory.slice(workInfoTotalHoursStart, workInfoTotalHoursEnd);

        var workInfoTotalFeedbackTxt    = 'feedback":';
        var workInfoTotalFeedbackPos    = workHistory.indexOf(workInfoTotalFeedbackTxt, workInfo);
        var workInfoTotalFeedbackStart  = workInfoTotalFeedbackPos + workInfoTotalFeedbackTxt.length; 
        var workInfoTotalFeedbackEnd    = workHistory.indexOf(',', workInfoTotalFeedbackPos );
        var workInfoTotalFeedback       = workHistory.slice(workInfoTotalFeedbackStart, workInfoTotalFeedbackEnd);


        var workInfoScoreTxt    = 'score":';
        var workInfoScorePos    = workHistory.indexOf(workInfoScoreTxt, workInfo);
        var workInfoScoreStart  = workInfoScorePos + workInfoScoreTxt.length; 
        var workInfoScoreEnd    = workHistory.indexOf(',"commentAccess":1},"fee', workInfoScorePos );
        var workInfoScore       = workHistory.slice(workInfoScoreStart, workInfoScoreEnd);

        if (workInfoScore.length > 5) {workInfoScore = ''}; // котыль.  если там строка, то присваеваем число

        // var workInfoScoreClientTxt    = 'score":';
        // var workInfoScoreClientPos    = workHistory.indexOf(workInfoScoreClientTxt, workInfoScoreEnd); // скоре повторяется, суда поставил с предыдущего
        // var workInfoScoreClientStart  = workInfoScoreClientPos + workInfoScoreClientTxt.length; 
        // var workInfoScoreClientEnd    = workHistory.indexOf(',', workInfoScoreClientPos );
        // var workInfoScoreClient       = workHistory.slice(workInfoScoreClientStart, workInfoScoreClientEnd);

        var workInfoTotalChargeTxt    = 'totalCharge":'; // Всего + фиксированная сумма
        var workInfoTotalChargePos    = workHistory.indexOf(workInfoTotalChargeTxt, workInfo);
        var workInfoTotalChargeStart  = workInfoTotalChargePos + workInfoTotalChargeTxt.length; 
        var workInfoTotalChargeEnd    = workHistory.indexOf(',', workInfoTotalChargePos );
        var workInfoTotalCharge       = workHistory.slice(workInfoTotalChargeStart, workInfoTotalChargeEnd);

        var workInfoAmountTxt    = 'amount":';
        var workInfoAmountPos    = workHistory.indexOf(workInfoAmountTxt, workInfo);
        var workInfoAmountStart  = workInfoAmountPos + workInfoAmountTxt.length; 
        var workInfoAmountEnd    = workHistory.indexOf('},', workInfoAmountPos );
        var workInfoAmount       = workHistory.slice(workInfoAmountStart, workInfoAmountEnd);

        var obj = {
            startDate: workInfoStartDate,
            endDate: workInfoEndDate,
            score: workInfoScore,
            // scoreClient: workInfoScoreClient,
            totalHours: workInfoTotalHours, 
            feedback: workInfoTotalFeedback, 
            amount: workInfoAmount,
            totalCharge: workInfoTotalCharge
        };

        a[i] = obj;

        workInfo = workInfoAmountEnd; // На новый цикл увеличиваем начальное значение до конечного этой итерации
        
        // console.log(workInfoEndDate);

        i++; // Счетчик для массива фрилансеров 
    }
    console.log(a);

    // ===== Оценки фрилансерам ===========================================================================
    var sumFreelancer = a.length; // Всего фрилансеров, считает и количество работ в процессе
    var sumFreelancerScore = 0; // мне не нужно всех считать в оценка, потому что активным еще оценки не поставленны
    
    var scoreSum = 0; // Всего оценок проставленно
    var scoreTotal = 0; // сумма всех оцена, после ее разделим на количество оценок

    var scoreQuantity50     = 0; // Количество оценок, шт
    var scoreQuantity45to50 = 0;
    var scoreQuantity40to45 = 0;
    var scoreQuantity35to40 = 0;
    var scoreQuantity30to35 = 0;
    var scoreQuantity20to30 = 0;
    var scoreQuantity10to20 = 0;

    var scoreRatio50     = 0; // Количество оценок, %
    var scoreRatio45to50 = 0;
    var scoreRatio40to45 = 0;
    var scoreRatio35to40 = 0;
    var scoreRatio30to35 = 0;
    var scoreRatio20to30 = 0;
    var scoreRatio10to20 = 0;

    var coutFeedback = 0; // Сумма людей получивших оценку
    // var workEnded = 0; // Работ закончено

    // Пробегаемся по всем работам
    for (var i = 0; i < sumFreelancer; i++) { // количество циклов = количество фрилансеров
        
        // console.log('out' + i);

        // Проверяем статус работы, если не завершена то по пропускаем
        if (a[i].endDate != 'null') {

            // console.log('in' + i);

            // Проверяем статус проставленной оценки, если не проставлена то пропускаем
            if (a[i].feedback != 'null') {

                scoreTotal = scoreTotal + a[i].score*1; // Сумма баллов всех оценок, чтобы вывести среднюю оценку

                if (a[i].score == 5                       ) scoreQuantity50++;
                if (a[i].score >= 4.5 && a[i].score < 5   ) scoreQuantity45to50++;
                if (a[i].score >= 4   && a[i].score < 4.5 ) scoreQuantity40to45++;
                if (a[i].score >= 3.5 && a[i].score < 4   ) scoreQuantity35to40++;
                if (a[i].score >= 3   && a[i].score < 3.5 ) scoreQuantity30to35++;
                if (a[i].score >= 2   && a[i].score < 3   ) scoreQuantity20to30++;
                if (a[i].score >= 1   && a[i].score < 2   ) scoreQuantity10to20++;

                if (a[i].score != "0") { // если оценку не проставили то не считаем
                    scoreSum = scoreSum + 1; // Всего оценок проставленно
                };

                coutFeedback = coutFeedback + 1; // Сумма людей получивших оценку

            };

           
            sumFreelancerScore++; // считает сумму фрилансеров которые сдали работу. ( и от их числа нужно смотреть отношение проставленных оценок к непроставленным)
        };
    };

    // console.log('sumFreelancerScore 1= ' + sumFreelancerScore);

    var scoreAverage  = scoreTotal / scoreSum;                              // Средний показатель рейтинга 
    var workInProcess = sumFreelancer - sumFreelancerScore;                 // число работы в прогрессе, всего - законченные
    var noFeedback    = sumFreelancer - scoreSum - workInProcess;           // Сумма людей не получивших обратную связь(оценку) 

    $(".scoreSum").html(scoreSum); 
    $(".noFeedback").html(noFeedback);

    $(".scoreAverage").html(scoreAverage.toFixed(2)); 
       
    $(".workInProcess").html(workInProcess);       
    $(".scoreQuantity50").html(scoreQuantity50);
    $(".scoreQuantity45to50").html(scoreQuantity45to50);
    $(".scoreQuantity40to45").html(scoreQuantity40to45);
    $(".scoreQuantity35to40").html(scoreQuantity35to40);
    $(".scoreQuantity30to35").html(scoreQuantity30to35);
    $(".scoreQuantity20to30").html(scoreQuantity20to30);
    $(".scoreQuantity10to20").html(scoreQuantity10to20);

    $(".scoreRatio").html(((scoreSum / sumFreelancerScore * 100).toFixed(0) - 100) * -1 +'%'); // выводим % получивших фидбэк в докмент. (-100*-1 получаем обратное значение, то есть получим процент не получивших, а -1 чтобы минус убрать)

    scoreRatio50     = (scoreQuantity50     / scoreSum * 100).toFixed(0);
    scoreRatio45to50 = (scoreQuantity45to50 / scoreSum * 100).toFixed(0);
    scoreRatio40to45 = (scoreQuantity40to45 / scoreSum * 100).toFixed(0);
    scoreRatio35to40 = (scoreQuantity35to40 / scoreSum * 100).toFixed(0);
    scoreRatio30to35 = (scoreQuantity30to35 / scoreSum * 100).toFixed(0);
    scoreRatio20to30 = (scoreQuantity20to30 / scoreSum * 100).toFixed(0);
    scoreRatio10to20 = (scoreQuantity10to20 / scoreSum * 100).toFixed(0);


    function colorTable(string, id) { 
        if (string == 0) {
            $(id).attr('style', 'color: transparent');
        };
        if (string <= 10 && string > 0) {
            $(id).attr('style', 'background:#F66A6E');
        };
        if (string <= 20 && string > 10) {
            $(id).attr('style', 'background:#F78573');
        };
        if (string <= 30 && string > 20) {
            $(id).attr('style', 'background:#F9A27A');
        };
        if (string <= 40 && string > 30) {
            $(id).attr('style', 'background:#FBBE80');
        };
        if (string <= 50 && string > 40) {
            $(id).attr('style', 'background:#FDDB87');
        };
        if (string <= 60 && string > 50) {
            $(id).attr('style', 'background:#EEE589');
        };
        if (string <= 70 && string > 60) {
            $(id).attr('style', 'background:#CCDC87');
        };
        if (string <= 80 && string > 70) {
            $(id).attr('style', 'background:#AAD183');
        };
        if (string <= 90 && string > 80) {
            $(id).attr('style', 'background:#88C881');
        };
        if (string <= 100 && string > 90) {
            $(id).attr('style', 'background:#66BD7D');
        };
    }

    colorTable(scoreRatio50, '.qu-1');
    colorTable(scoreRatio45to50, '.qu-2');
    colorTable(scoreRatio40to45, '.qu-3');
    colorTable(scoreRatio35to40, '.qu-4');
    colorTable(scoreRatio30to35, '.qu-5');
    colorTable(scoreRatio20to30, '.qu-6');
    colorTable(scoreRatio10to20, '.qu-7');

    $(".scoreRatio50"    ).html(scoreRatio50    +'%');
    $(".scoreRatio45to50").html(scoreRatio45to50+'%');
    $(".scoreRatio40to45").html(scoreRatio40to45+'%');
    $(".scoreRatio35to40").html(scoreRatio35to40+'%');
    $(".scoreRatio30to35").html(scoreRatio30to35+'%');
    $(".scoreRatio20to30").html(scoreRatio20to30+'%');
    $(".scoreRatio10to20").html(scoreRatio10to20+'%');

    // ===== Фиксированные выплаты ===========================================================================    
    var fixSum = 0; // Всего оценок проставленно
    var fixTotal = 0; // сумма всех оцена, после ее разделим на количество оценок
    var fixAverage = 0; // Средняя оценка

    var fixQuantity1000  = 0; // Количество оценок, шт
    var fixQuantity500   = 0;
    var fixQuantity300   = 0;
    var fixQuantity200   = 0;
    var fixQuantity100   = 0;
    var fixQuantity50    = 0;
    var fixQuantity0     = 0;

    var fixRatio1000 = 0; // Количество оценок, %
    var fixRatio500  = 0;
    var fixRatio300  = 0;
    var fixRatio200  = 0;
    var fixRatio100  = 0;
    var fixRatio50   = 0;
    var fixRatio0    = 0;

    for (var i = 0; i < sumFreelancer; i++) {
        if (a[i].totalHours == 0) {  // Если ноль часов. значит фикс цена
            fixTotal = fixTotal + a[i].totalCharge*1; // сумма всего оплаченно фиксов
            fixSum++; // Всего оплат фиксов, шт

            if (a[i].totalCharge > 1000                          ) fixQuantity1000++;
            if (a[i].totalCharge >= 500 && a[i].totalCharge < 1000) fixQuantity500++;
            if (a[i].totalCharge >= 300 && a[i].totalCharge < 500 ) fixQuantity300++;
            if (a[i].totalCharge >= 200 && a[i].totalCharge < 300 ) fixQuantity200++;
            if (a[i].totalCharge >= 100 && a[i].totalCharge < 200 ) fixQuantity100++;
            if (a[i].totalCharge >= 50  && a[i].totalCharge < 100 ) fixQuantity50++;
            if (a[i].totalCharge >= 0   && a[i].totalCharge < 50  ) fixQuantity0++;
        };
        // console.log(a[i].fixTotal);
    };

    fixAverage = fixTotal / fixSum; // Средняя сумма выплаты

    $(".fixSum").html(fixSum);
    $(".fixAverage").html('$ '+fixAverage.toFixed(0));

    $(".fixQuantity1000").html(fixQuantity1000);
    $(".fixQuantity500").html(fixQuantity500);
    $(".fixQuantity300").html(fixQuantity300);
    $(".fixQuantity200").html(fixQuantity200);
    $(".fixQuantity100").html(fixQuantity100);
    $(".fixQuantity50").html(fixQuantity50);
    $(".fixQuantity0").html(fixQuantity0);

    $(".fixRatio").html((fixSum / sumFreelancer * 100).toFixed(0)+'%');

    fixRatio1000 = (fixQuantity1000 / fixSum * 100).toFixed(0); // Количество оценок, %
    fixRatio500  = (fixQuantity500  / fixSum * 100).toFixed(0);
    fixRatio300  = (fixQuantity300  / fixSum * 100).toFixed(0);
    fixRatio200  = (fixQuantity200  / fixSum * 100).toFixed(0);
    fixRatio100  = (fixQuantity100  / fixSum * 100).toFixed(0);
    fixRatio50   = (fixQuantity50   / fixSum * 100).toFixed(0);
    fixRatio0    = (fixQuantity0    / fixSum * 100).toFixed(0);

    colorTable(fixRatio1000, '.fq-7');
    colorTable(fixRatio500 , '.fq-6');
    colorTable(fixRatio300 , '.fq-5');
    colorTable(fixRatio200 , '.fq-4');
    colorTable(fixRatio100 , '.fq-3');
    colorTable(fixRatio50  , '.fq-2');
    colorTable(fixRatio0   , '.fq-1');

    $(".fixRatio1000").html(fixRatio1000 +'%');
    $(".fixRatio500" ).html(fixRatio500  +'%');
    $(".fixRatio300" ).html(fixRatio300  +'%');
    $(".fixRatio200" ).html(fixRatio200  +'%');
    $(".fixRatio100" ).html(fixRatio100  +'%');
    $(".fixRatio50"  ).html(fixRatio50   +'%');
    $(".fixRatio0"   ).html(fixRatio0    +'%');


    // ===== Почасовые выплаты - суммы ===========================================================================        
    var hourseRateSum = 0; // Всего оценок проставленно
    var hourseRateTotal = 0; // сумма всех оцена, после ее разделим на количество оценок
    var hourseRateAverage = 0; // Средняя оценка

    var hourseRateQuantity00to05= 0; // Количество оценок, шт
    var hourseRateQuantity05to07= 0;
    var hourseRateQuantity07to09= 0;
    var hourseRateQuantity09to11= 0;
    var hourseRateQuantity11to15= 0;
    var hourseRateQuantity15to20= 0;
    var hourseRateQuantity20to50= 0;

    var hourseRateRatio00to05= 0; // Количество оценок, %
    var hourseRateRatio05to07= 0;
    var hourseRateRatio07to09= 0;
    var hourseRateRatio09to11= 0;
    var hourseRateRatio11to15= 0;
    var hourseRateRatio15to20= 0;
    var hourseRateRatio20to50= 0;

    for (var i = 0; i < sumFreelancer; i++) {
        if (a[i].totalHours != 0) {  // Если ноль часов. значит фикс цена
            hourseRateTotal = hourseRateTotal + a[i].totalHours*1; // сумма всего часов
            hourseRateSum++; // Всего оплат фиксов, шт

            if (a[i].amount >= 0  && a[i].amount < 5  ) hourseRateQuantity00to05++;
            if (a[i].amount >= 5  && a[i].amount < 7  ) hourseRateQuantity05to07++;
            if (a[i].amount >= 7  && a[i].amount < 9  ) hourseRateQuantity07to09++;
            if (a[i].amount >= 9  && a[i].amount < 11 ) hourseRateQuantity09to11++;
            if (a[i].amount >= 11 && a[i].amount < 15 ) hourseRateQuantity11to15++;
            if (a[i].amount >= 15 && a[i].amount < 20 ) hourseRateQuantity15to20++;
            if (a[i].amount >= 20                     ) hourseRateQuantity20to50++;
        };
        // console.log(a[i].amount);
    };

    hourseRateAverage = hourseRateTotal / hourseRateSum; // Средняя сумма выплаты

    $(".hourseRateSum").html(hourseRateSum);
    $(".hourseRateAverage").html(hourseRateAverage.toFixed(2));

    $(".hourseRateQuantity00to05").html(hourseRateQuantity00to05);
    $(".hourseRateQuantity05to07").html(hourseRateQuantity05to07);
    $(".hourseRateQuantity07to09").html(hourseRateQuantity07to09);
    $(".hourseRateQuantity09to11").html(hourseRateQuantity09to11);
    $(".hourseRateQuantity11to15").html(hourseRateQuantity11to15);
    $(".hourseRateQuantity15to20").html(hourseRateQuantity15to20);
    $(".hourseRateQuantity20to50").html(hourseRateQuantity20to50);

    var hourseRateRatio00to05 = (hourseRateQuantity00to05 / hourseRateSum * 100).toFixed(0); // Количество оценок, %
    var hourseRateRatio05to07 = (hourseRateQuantity05to07 / hourseRateSum * 100).toFixed(0);
    var hourseRateRatio07to09 = (hourseRateQuantity07to09 / hourseRateSum * 100).toFixed(0);
    var hourseRateRatio09to11 = (hourseRateQuantity09to11 / hourseRateSum * 100).toFixed(0);
    var hourseRateRatio11to15 = (hourseRateQuantity11to15 / hourseRateSum * 100).toFixed(0);
    var hourseRateRatio15to20 = (hourseRateQuantity15to20 / hourseRateSum * 100).toFixed(0);
    var hourseRateRatio20to50 = (hourseRateQuantity20to50 / hourseRateSum * 100).toFixed(0);

    $(".hourseRateRatio").html((hourseRateSum / sumFreelancer * 100).toFixed(0)+'%');

    $(".hourseRateRatio00to05").html(hourseRateRatio00to05+'%');
    $(".hourseRateRatio05to07").html(hourseRateRatio05to07+'%');
    $(".hourseRateRatio07to09").html(hourseRateRatio07to09+'%');
    $(".hourseRateRatio09to11").html(hourseRateRatio09to11+'%');
    $(".hourseRateRatio11to15").html(hourseRateRatio11to15+'%');
    $(".hourseRateRatio15to20").html(hourseRateRatio15to20+'%');
    $(".hourseRateRatio20to50").html(hourseRateRatio20to50+'%');
 

    // ===== Почасовые выплаты - часы ===========================================================================            
    var hourseSum = 0; // Всего оценок проставленно
    var hourseTotal = 0; // сумма всех оцена, после ее разделим на количество оценок
    var hourseAverage = 0; // Средняя оценка

    var hourseQuantity00to05= 0; // Количество оценок, шт
    var hourseQuantity05to07= 0;
    var hourseQuantity07to09= 0;
    var hourseQuantity09to11= 0;
    var hourseQuantity11to15= 0;
    var hourseQuantity15to20= 0;
    var hourseQuantity20to50= 0;

    for (var i = 0; i < sumFreelancer; i++) {
        if (a[i].totalHours != 0) {  // Если ноль часов. значит фикс цена
            hourseTotal = hourseTotal + a[i].totalHours*1; // сумма всего часов
            hourseSum++; // Всего оплат фиксов, шт

            // if (a[i].amount >= 0     && a[i].amount < 5.56  ) hourseQuantity00to05 = hourseQuantity00to05 + a[i].totalHours*1;
            // if (a[i].amount >= 5.56  && a[i].amount < 7.78  ) hourseQuantity05to07 = hourseQuantity05to07 + a[i].totalHours*1;
            // if (a[i].amount >= 7.78  && a[i].amount < 10    ) hourseQuantity07to09 = hourseQuantity07to09 + a[i].totalHours*1;
            // if (a[i].amount >= 10    && a[i].amount < 12.22 ) hourseQuantity09to11 = hourseQuantity09to11 + a[i].totalHours*1;
            // if (a[i].amount >= 12.22 && a[i].amount < 16.67 ) hourseQuantity11to15 = hourseQuantity11to15 + a[i].totalHours*1;
            // if (a[i].amount >= 16.67 && a[i].amount < 22.22 ) hourseQuantity15to20 = hourseQuantity15to20 + a[i].totalHours*1;
            // if (a[i].amount >= 22.22                        ) hourseQuantity20to50 = hourseQuantity20to50 + a[i].totalHours*1;

            if (a[i].amount >= 0  && a[i].amount < 5  ) hourseQuantity00to05 = hourseQuantity00to05 + a[i].totalHours*1;
            if (a[i].amount >= 5  && a[i].amount < 7  ) hourseQuantity05to07 = hourseQuantity05to07 + a[i].totalHours*1;
            if (a[i].amount >= 7  && a[i].amount < 9  ) hourseQuantity07to09 = hourseQuantity07to09 + a[i].totalHours*1;
            if (a[i].amount >= 9  && a[i].amount < 11 ) hourseQuantity09to11 = hourseQuantity09to11 + a[i].totalHours*1;
            if (a[i].amount >= 11 && a[i].amount < 15 ) hourseQuantity11to15 = hourseQuantity11to15 + a[i].totalHours*1;
            if (a[i].amount >= 15 && a[i].amount < 20 ) hourseQuantity15to20 = hourseQuantity15to20 + a[i].totalHours*1;
            if (a[i].amount >= 20                     ) hourseQuantity20to50 = hourseQuantity20to50 + a[i].totalHours*1;
        };
        // console.log(a[i].amount);
    };

    hourseAverage = hourseTotal / hourseSum; // Средняя сумма выплаты

    $(".hourseSum").html(hourseSum);
    $(".hourseAverage").html(hourseAverage.toFixed(2));
       
    $(".hourseQuantity00to05").html(hourseQuantity00to05.toFixed(0)+'ч.');
    $(".hourseQuantity05to07").html(hourseQuantity05to07.toFixed(0)+'ч.');
    $(".hourseQuantity07to09").html(hourseQuantity07to09.toFixed(0)+'ч.');
    $(".hourseQuantity09to11").html(hourseQuantity09to11.toFixed(0)+'ч.');
    $(".hourseQuantity11to15").html(hourseQuantity11to15.toFixed(0)+'ч.');
    $(".hourseQuantity15to20").html(hourseQuantity15to20.toFixed(0)+'ч.');
    $(".hourseQuantity20to50").html(hourseQuantity20to50.toFixed(0)+'ч.');

    var hourseRatio00to05 = (hourseQuantity00to05 / hourseTotal * 100).toFixed(0); // Количество оценок, %
    var hourseRatio05to07 = (hourseQuantity05to07 / hourseTotal * 100).toFixed(0);
    var hourseRatio07to09 = (hourseQuantity07to09 / hourseTotal * 100).toFixed(0);
    var hourseRatio09to11 = (hourseQuantity09to11 / hourseTotal * 100).toFixed(0);
    var hourseRatio11to15 = (hourseQuantity11to15 / hourseTotal * 100).toFixed(0);
    var hourseRatio15to20 = (hourseQuantity15to20 / hourseTotal * 100).toFixed(0);
    var hourseRatio20to50 = (hourseQuantity20to50 / hourseTotal * 100).toFixed(0);

    colorTable(hourseRatio00to05, '.hr-1');
    colorTable(hourseRatio05to07, '.hr-2');
    colorTable(hourseRatio07to09, '.hr-3');
    colorTable(hourseRatio09to11, '.hr-4');
    colorTable(hourseRatio11to15, '.hr-5');
    colorTable(hourseRatio15to20, '.hr-6');
    colorTable(hourseRatio20to50, '.hr-7');

    $(".hourseRatio").html((hourseSum / sumFreelancer * 100).toFixed(0)+'%');

    $(".hourseRatio00to05").html(hourseRatio00to05+'%');
    $(".hourseRatio05to07").html(hourseRatio05to07+'%');
    $(".hourseRatio07to09").html(hourseRatio07to09+'%');
    $(".hourseRatio09to11").html(hourseRatio09to11+'%');
    $(".hourseRatio11to15").html(hourseRatio11to15+'%');
    $(".hourseRatio15to20").html(hourseRatio15to20+'%');
    $(".hourseRatio20to50").html(hourseRatio20to50+'%');

    // ===== Активность ===========================================================================                
    var liveSum = 0; // Всего оценок проставленно
    var liveTotal = 0; // сумма всех оцена, после ее разделим на количество оценок
    var liveAverage = 0; // Средняя оценка

    var liveQuantity2016= 0; // Количество оценок, шт
    var liveQuantity2015= 0;
    var liveQuantity2014= 0;
    var liveQuantity2013= 0;
    var liveQuantity2012= 0;

    for (var i = 0; i < sumFreelancer; i++) {
        if (true) {  //
            liveTotal = liveTotal + a[i].totalHours*1; // 
            liveSum++; // В

            if (a[i].startDate >= 2016                          ) liveQuantity2016++;
            if (a[i].startDate >= 2015 && a[i].startDate < 2016 ) liveQuantity2015++;
            if (a[i].startDate >= 2014 && a[i].startDate < 2015 ) liveQuantity2014++;
            if (a[i].startDate >= 2013 && a[i].startDate < 2014 ) liveQuantity2013++;
            if (a[i].startDate <= 2012                          ) liveQuantity2012++;
        };
    };

    liveAverage = liveTotal / liveSum; // Средняя сумма выплаты

    $(".liveSum").html(liveSum);
    $(".liveAverage").html(liveAverage.toFixed(2));

    $(".liveQuantity2016").html(liveQuantity2016.toFixed(0));
    $(".liveQuantity2015").html(liveQuantity2015.toFixed(0));
    $(".liveQuantity2014").html(liveQuantity2014.toFixed(0));
    $(".liveQuantity2013").html(liveQuantity2013.toFixed(0));
    $(".liveQuantity2012").html(liveQuantity2012.toFixed(0));

    var liveRatio2016 = (liveQuantity2016 / liveSum * 100).toFixed(0); // Количество оценок, %
    var liveRatio2015 = (liveQuantity2015 / liveSum * 100).toFixed(0);
    var liveRatio2014 = (liveQuantity2014 / liveSum * 100).toFixed(0);
    var liveRatio2013 = (liveQuantity2013 / liveSum * 100).toFixed(0);
    var liveRatio2012 = (liveQuantity2012 / liveSum * 100).toFixed(0);

    colorTable(liveRatio2016, '.lq-1');
    colorTable(liveRatio2015, '.lq-2');
    colorTable(liveRatio2014, '.lq-3');
    colorTable(liveRatio2013, '.lq-4');
    colorTable(liveRatio2012, '.lq-5');

    $(".hliveRatio").html((liveSum / sumFreelancer * 100).toFixed(0)+'%');

    $(".liveRatio2016").html(liveRatio2016+'%');
    $(".liveRatio2015").html(liveRatio2015+'%');
    $(".liveRatio2014").html(liveRatio2014+'%');
    $(".liveRatio2013").html(liveRatio2013+'%');
    $(".liveRatio2012").html(liveRatio2012+'%');
}




// ========================================== ============== ============== ============== ==============
// ======= Scrip заполнения coverlater ====== ============== ============== ============== ==============
// ========================================== ============== ============== ============== ==============
// ===== Скрипт аналог эвернода(нижняя часть скриата) ===================================================





$(document).ready(function(){

    // Клонируем при клике
    $(".list-group-item").click(function () {
        var text = $(this).text();
        $('.mail-wrapper .panel-body').append('<span class="cl-text">' + text + '<span class="glyphicon glyphicon-remove" onclick="javascript:deleteLine()"></span></span>');
    }); 

    // Убираю прозрачность плавающего блока
    $(".cover-letter").click(function () {
        $('.mail-wrapper').attr('style', 'opacity: 1;');
    });

});


// Удаляем при клике
function deleteLine(){
    $(".glyphicon-remove").click(function () {
        var text = $(this).parent().remove();
    });
}
















jQuery("#writing-letter").on('change', function(){
    //var selected = $(this).val(); - так получим значение выбранного option
    switch(jQuery(this).val()){
        case 'question_common':
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_common').show();
            break;
        case 'question_css': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_css').show();
            break;
        case 'question_js': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_js').show();
            break;
        case 'question_responsive': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_responsive').show();
            break;
        case 'question_woocomerce': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_woocomerce').show();
            break;
        case 'question_design': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_design').show();
            break;
        case 'question_multilanguage': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_multilanguage').show();
            break;
        case 'question_scratch': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_scratch').show();
            break;
        case 'question_theme_avada': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_theme_avada').show();
            break;
        case 'question_plugins': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_plugins').show();
            break;
        case 'question_theme': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_theme').show();
            break;
        case 'question_gallery': 
            jQuery('.wrapper-checkbox').hide()
            jQuery('.question_gallery').show();
            break;
    }
});

// $('#id').hide();
// $('#id').show();

// добавление текста в письмо
// $('#checkbox-1').click(function() {
//     $(".wrapper-mail").append($('.checkbox-en-1').clone(), '<br>');
// });
// $('#checkbox-2').click(function() {
//     $(".wrapper-mail").append($('.checkbox-en-2').clone(), '<br>');
// });
// $('#checkbox-3').click(function() {
//     $(".wrapper-mail").append($('.checkbox-en-3').clone(), '<br>');
// });

jQuery('.checkbox-but').click(function() {
    // var text = $(this).next().next()
    jQuery(".wrapper-mail").append($(this).next().next().clone(), '<br>');
    // $(".wrapper-mail").append('<br>');

    // var text = $(this).children();
    // console.log(text);
    // $(".wrapper-mail").append($(this).children('.checkbox-en-1'), '<br>');
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



// ===================================================================================================
// =================================Скрипты не кастомные==============================================
// ===================================================================================================

// bootstrap tooltip
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

// ===================================================================================================
// ==============================Для разработки элеметов работ клиента================================
// ===================================================================================================

    // Search элементов jobInfo
    // {
    //     "jobInfo":
    //     {
    //         "type":2,
    //         "title":"Customize Existing Wordpress Theme",
    //         "ciphertext":"~01a78d66ae08f1da0a",
    //         "access":4,"recno":202858744
    //     },
    //     "startDate":"2013-08-01T00:00:00.000Z",
    //     "endDate":"2013-08-01T00:00:00.000Z",
    //     "status":3,
    //     "contractorInfo":
    //     {
    //         "contractorName":"George L.",
    //         "ciphertext":"~0160aa41b98b9914bc",
    //         "accessType":2
    //     },
    //     "totalHours":45,
    //     "feedback":
    //     {
    //         "comment":"George was great to work with. He accomplished everything I was looking for and was always very responsive. I would recommend him.",
    //         "score":5,
    //         "commentAccess":1
    //     },
    //     "feedbackToClient":
    //     {
    //         "comment":"Thanks. Please contact me if you have any work.",
    //         "score":5,
    //         "commentAccess":1
    //     },
    //     "totalCharge":1300.05,
    //     "rate":
    //     {
    //         "currencyCode":"USD",
    //         "amount":28.89},
    //         "isEDCReplicated":false,
    //         "isPtcJob":false,
    //         "isPtcPrivate":false
    //     }


