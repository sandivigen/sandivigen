<?php get_header(); ?>
<!-- main and sidebar -->
<?php get_sidebar(); ?>
  <main class="col-md-10 bg-content">

   
<span class="visible-spelling">Учить правописание</span><br>
<span class="visible-doneword">Указать изученные</span><br><br>
<iframe src="http://translate.google.com/" width="300" height="80" name="lerneng">
    Ваш браузер не поддерживает плавающие фреймы!
</iframe>

<?php 
    $path_theme = get_template_directory_uri();
    // https://toster.ru/q/39011 - вопрос по произношению гугл
    // в базе должен быть ячейка для раздела(вопросы, глаголы)
    // сделать для куков мста, вдруг историю удалю и все сотреться
?>


<?php
    global $wpdb;
    $results = $wpdb->get_results("SELECT * FROM wp_learneng");
?>

<?php
    $counter_lern = 0;

    echo '<h3 class="title-eng">Вопросы</h3>'; 

    foreach($results as $string) {
        $lern_id        = $string->id;
        $lern_word      = $string->word;
        $lern_tran      = $string->tran;
        $lern_tran_done = $string->tran_done;
        $lern_pron      = $string->pron;
        $lern_pron_done = $string->pron_done;
        $lern_writ_done = $string->writ_done;
        $lern_learned   = $string->learned;
        $lern_group     = $string->group;

        
        
        if ($lern_group == 'questions') {
            echo '<div class="string">';
            echo      '<div class="column-1 column">'.$lern_word.'</div>';
            echo      '<div class="column-2 column">';
            echo          '<span>'.$lern_tran.'</span>';
            echo          '<img src="'.$path_theme.'/img/eye.png" class="invisible-word">';
            echo      '</div>';
            echo      '<div class="column-3 column">';
            echo          '<span>'.$lern_pron.'</span>';
            echo          '<a href="http://translate.google.com/translate_tts?ie=utf-8&tl=en&q='.$lern_word.'" target="lerneng">';
            echo              '<img src="'.$path_theme.'/img/quaver.png">';
            echo          '</a>';
            echo      '</div>';
            echo      '<div class="column-6 column tran-done-'.$lern_id.'">';
            echo          '<span>' . $lern_tran_done . '</span>';
            echo          '<img src="'.$path_theme.'/img/add.png" id="'.$lern_id.'">';
            echo      '</div>';

            
            echo      '<div class="column-7 column pron-done-'.$lern_id.'">';
            echo          '<span>' . $lern_pron_done . '</span>';
            echo          '<img src="'.$path_theme.'/img/add.png" id="'.$lern_id.'">';
            echo      '</div>';


            echo      '<div class="column-8 column writ-done-'.$lern_id.'">';
            echo          '<input type="text">';
            echo          '<span>' . $lern_writ_done . '</span>';
            echo          '<img src="'.$path_theme.'/img/add.png" id="'.$lern_id.'">';
            echo      '</div>';

            echo      '<div class="column-9 column">';
            echo          '<img src="'.$path_theme.'/img/done.png">';
            echo      '</div>';
            echo '</div>';  
        }

        $counter_lern++;
    }
?>

<br><br>
<form method=post> 
    <input type=submit name=knopka value=ok> 
</form> 
<a href=""></a>
<?php 
    if(isset($_POST[knopka])) {                                                             // если нажали кнопку
        for ($x=0; $x<=$counter_lern; $x++) {                     

            $id_cookie_tran    = 'id-tran-done-' . $x;                                      // получаем ид cookie
            $cookie_tran       = $_COOKIE[$id_cookie_tran];                                 // получаем значение этой куки
            $id_cookie_pron    = 'id-pron-done-' . $x;                                      // получаем ид cookie
            $cookie_pron       = $_COOKIE[$id_cookie_pron];                                 // получаем значение этой куки
            $id_cookie_writ   = 'id-writ-done-' . $x;                                       // получаем ид cookie
            $cookie_writ      = $_COOKIE[$id_cookie_writ];                                  // получаем значение этой куки

            $data_tran         = array("tran_done" => $cookie_tran);                        // вносим значение в колонку tran-done
            $where_tran        = array("id" => $x);                                         // в строку соответствующию этому ид
            $data_pron         = array("pron_done" => $cookie_pron);                        // вносим значение в колонку tran-done
            $where_pron        = array("id" => $x);                                         // в строку соответствующию этому ид
            $data_writ         = array("writ_done" => $cookie_writ);                        // вносим значение в колонку tran-done
            $where_writ        = array("id" => $x);                                         // в строку соответствующию этому ид
            


            $format       = "%d";                                                           // %s для строк, %d для десятичных чисел и %f для чисел с плавающей точкой.
            $where_format = "%d";

            $wpdb->update( 'wp_learneng', $data_tran, $where_tran, $format, $where_format); // отправляем обновление записи - tran
            $wpdb->update( 'wp_learneng', $data_pron, $where_pron, $format, $where_format); // отправляем обновление записи - pron
            $wpdb->update( 'wp_learneng', $data_writ, $where_writ, $format, $where_format); // отправляем обновление записи - writ
        }
    } 

?>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           
                
          <table class="table table-striped table-bordered">
            <!-- <caption>Почасовая оплата</caption> -->
            <thead>
              <tr>
                  <th>Глагол to by</th>
                  <th>рус</th>
                  <th>звуч</th>
                  <th>пояснение</th>
                  <th></span>
                </th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>engish</td>
                    <td>russia</td>
                    <td>zvuk</td>
                    <td>description</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="hr-2 ">5 до 7</td>
                    <td class="hr-2 hourseRateQuantity05to07"></td>
                    <td class="hr-2 hourseRateRatio05to07"></td>
                    <td class="hr-2 hourseQuantity05to07"></td>
                    <td class="hr-2 hourseRatio05to07"></td>
                </tr>
                <tr>
                    <td class="hr-3 ">7 до 9</td>
                    <td class="hr-3 hourseRateQuantity07to09"></td>
                    <td class="hr-3 hourseRateRatio07to09"></td>
                    <td class="hr-3 hourseQuantity07to09"></td>
                    <td class="hr-3 hourseRatio07to09"></td>
                </tr>
                <tr>
                    <td class="hr-4 ">9 до 11</td>
                    <td class="hr-4 hourseRateQuantity09to11"></td>
                    <td class="hr-4 hourseRateRatio09to11"></td>
                    <td class="hr-4 hourseQuantity09to11"></td>
                    <td class="hr-4 hourseRatio09to11"></td>
                </tr>
                <tr>
                    <td class="hr-5 ">11 до 15</td>
                    <td class="hr-5 hourseRateQuantity11to15"></td>
                    <td class="hr-5 hourseRateRatio11to15"></td>
                    <td class="hr-5 hourseQuantity11to15"></td>
                    <td class="hr-5 hourseRatio11to15"></td>
                </tr>
                <tr>
                    <td class="hr-6 ">15 до 20</td>
                    <td class="hr-6 hourseRateQuantity15to20"></td>
                    <td class="hr-6 hourseRateRatio15to20"></td>  
                    <td class="hr-6 hourseQuantity15to20"></td>
                    <td class="hr-6 hourseRatio15to20"></td>           
                </tr>
                <tr>
                    <td class="hr-7 "> &gt; 20</td>
                    <td class="hr-7 hourseRateQuantity20to50"></td>
                    <td class="hr-7 hourseRateRatio20to50"></td>    
                    <td class="hr-7 hourseQuantity20to50"></td>
                    <td class="hr-7 hourseRatio20to50"></td>         
                </tr>
            </tbody>
        </table>

            
                
            
        <h3>Записи</h3>

        <div class="string">
            <div class="column-1 column">never</div>
            <div class="column-2 column">не когда</div>
            <div class="column-3 column">нева</div>
        </div>
        <div class="string">
            <div class="column-1 column">seen</div>
            <div class="column-2 column">увиденный</div>
            <div class="column-3 column">сиин</div>не точно, но ароде как это третья форма глагола обозначает завершенное дело
        </div>
        <div class="string">
            <div class="column-1 column">before</div>
            <div class="column-2 column">до</div>
            <div class="column-3 column">бефо</div>
        </div>
        <div class="string">
            <div class="column-1 column">better</div>
            <div class="column-2 column">лучше, больше</div>
            <div class="column-3 column">бэта</div>
        </div>
        <div class="string">
            <div class="column-1 column">been</div>
            <div class="column-2 column">было</div>
            <div class="column-3 column">биин</div>
        </div>
        <div class="string">
            <div class="column-1 column">thought</div>
            <div class="column-2 column">думал</div>
            <div class="column-3 column">тфоут</div>
        </div>
        <div class="string">
            <div class="column-1 column">gonna</div>
            <div class="column-2 column">собираешся</div>
            <div class="column-3 column">гона</div>
        </div>
        <div class="string">
            <div class="column-1 column">that</div>
            <div class="column-2 column">чтобы ~который</div>
            <div class="column-3 column">зат</div>
        </div>
        <div class="string">
            <div class="column-1 column">until</div>
            <div class="column-2 column">до, не раньше</div>
            <div class="column-3 column">антил</div>
        </div>
        <div class="string">
            <div class="column-1 column">these</div>
            <div class="column-2 column">эти</div>
            <div class="column-3 column">зис</div>
        </div>
        <div class="string">
            <div class="column-1 column">enough</div>
            <div class="column-2 column">достаточно</div>
            <div class="column-3 column">энаф</div>
        </div>

        


        <br>
        <h3>Глаголы</h3>

        <div class="string">
            <div class="column-1 column">travel</div>
            <div class="column-2 column">путешествовать</div>
            <div class="column-3 column">чравел</div>
        </div>
        <div class="string">
            <div class="column-1 column">take</div>
            <div class="column-2 column">брать</div>
            <div class="column-3 column">тейк</div>
            <div class="column-4 column">took</div>
            <div class="column-5 column">тук</div>
        </div>
        <div class="string">
            <div class="column-1 column">read</div>
            <div class="column-2 column">читать</div>
            <div class="column-3 column">риид</div>
        </div>
        <div class="string">
            <div class="column-1 column">reading</div>
            <div class="column-2 column">чтение</div>
            <div class="column-3 column">ридэн</div>
        </div>ing в конце означает процесс
        <div class="string">
            <div class="column-1 column">write</div>
            <div class="column-2 column">запись</div>
            <div class="column-3 column">врайт</div>
        </div>
        <div class="string">
            <div class="column-1 column">writing</div>
            <div class="column-2 column">писать</div>
            <div class="column-3 column">врайтин</div>
        </div>ing в конце означает процесс
        <div class="string">
            <div class="column-1 column">writer</div>
            <div class="column-2 column">писатель</div>
            <div class="column-3 column">врайтэ</div>
        </div>
        <div class="string">
            <div class="column-1 column">want</div>
            <div class="column-2 column">хочу</div>
            <div class="column-3 column">вонт</div>
        </div>
        <div class="string">
            <div class="column-1 column">sing</div>
            <div class="column-2 column">петь</div>
            <div class="column-3 column">сень</div>
        </div>
        <div class="string">
            <div class="column-1 column">know</div>
            <div class="column-2 column">знать</div>
            <div class="column-3 column">кной</div>
        </div>
        <div class="string">
            <div class="column-1 column">think</div>
            <div class="column-2 column">думать</div>
            <div class="column-3 column">тфинк</div>
        </div>
        <div class="string">
            <div class="column-1 column">come</div>
            <div class="column-2 column">приходить</div>
            <div class="column-3 column">кам</div>
            <div class="column-4 column">came</div>
            <div class="column-5 column">кейм</div>
        </div>
        <div class="string">
            <div class="column-1 column">go</div>
            <div class="column-2 column">ходить</div>
            <div class="column-3 column">гоу</div>
            <div class="column-4 column">went</div>
            <div class="column-5 column">вэнт</div>
        </div>
        <div class="string">
            <div class="column-1 column">see</div>
            <div class="column-2 column">си</div>
            <div class="column-3 column">видить</div>
            <div class="column-4 column">saw</div>
            <div class="column-5 column">со</div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>


        <div class="clear-both"></div><br>
        <h3>Разное</h3>
        <div class="string">
            <div class="column-1 column">they</div>
            <div class="column-2 column">они</div>
            <div class="column-3 column">зей</div>
        </div>
        <div class="string">
            <div class="column-1 column">spleep</div>
            <div class="column-2 column">спать</div>
            <div class="column-3 column">слип</div>
        </div>
        <div class="string">
            <div class="column-1 column">answer</div>
            <div class="column-2 column">ответ</div>
            <div class="column-3 column">ансэ</div>
        </div>
        <div class="string">
            <div class="column-1 column">ask</div>
            <div class="column-2 column">спросить</div>
            <div class="column-3 column">аск</div>
        </div>
        <div class="string">
            <div class="column-1 column">flat</div>
            <div class="column-2 column">квартира(сущ.)</div>
            <div class="column-3 column">флат</div>
        </div>
        <div class="string">
            <div class="column-1 column">mean</div>
            <div class="column-2 column">означать</div>
            <div class="column-3 column">мин</div>
        </div>
        <div class="string">
            <div class="column-1 column">went</div>
            <div class="column-2 column">пошел</div>
            <div class="column-3 column">вэнт</div>
        </div>
        <div class="string">
            <div class="column-1 column">sort of</div>
            <div class="column-2 column">типо того</div>
            <div class="column-3 column">соут</div>
        </div>
        <div class="string">
            <div class="column-1 column">job</div>
            <div class="column-2 column">работа, место работы</div>
            <div class="column-3 column">джёб</div>
        </div>
        <div class="string">
            <div class="column-1 column">school</div>
            <div class="column-2 column">школа</div>
            <div class="column-3 column">скул</div>
        </div>
        <div class="string">
            <div class="column-1 column">journalist</div>
            <div class="column-2 column">журналист</div>
            <div class="column-3 column">джанолист</div>
        </div>
        <div class="string">
            <div class="column-1 column">web designer</div>
            <div class="column-2 column">веб дизайнер</div>
            <div class="column-3 column">веаб дизайнэ</div>
        </div>
        <div class="string">
            <div class="column-1 column">shop assistant</div>
            <div class="column-2 column">продовец консультант</div>
            <div class="column-3 column">шоп эсистент</div>
        </div>
        <div class="string">
            <div class="column-1 column">teacher</div>
            <div class="column-2 column">учитель</div>
            <div class="column-3 column">тича(е)</div>
        </div>
        <div class="string">
            <div class="column-1 column">programmer</div>
            <div class="column-2 column">программист</div>
            <div class="column-3 column">программа</div>
        </div>
        <div class="string">
            <div class="column-1 column">unemployed</div>
            <div class="column-2 column">безработный</div>
            <div class="column-3 column">ананплоит</div>
        </div>
        <div class="string">
            <div class="column-1 column">freelancer</div>
            <div class="column-2 column">работающий вне штата</div>
            <div class="column-3 column">фрилансе</div>
        </div>
        <div class="string">
            <div class="column-1 column">film director</div>
            <div class="column-2 column">кинорежисер</div>
            <div class="column-3 column">фылм дарэкто</div>
        </div>
        <div class="string">
            <div class="column-1 column">office worker</div>
            <div class="column-2 column">офисный работник</div>
            <div class="column-3 column">офис вокэ</div>
        </div>
        <div class="string">
            <div class="column-1 column">babysitter</div>
            <div class="column-2 column">няня</div>
            <div class="column-3 column">бэйбиста</div>
        </div>
        <div class="string">
            <div class="column-1 column">television</div>
            <div class="column-2 column">телевидение</div>
            <div class="column-3 column">талевижен</div>
        </div>
        <div class="string">
            <div class="column-1 column">publishing</div>
            <div class="column-2 column">издательство</div>
            <div class="column-3 column">паблишин</div>
        </div>
        <div class="string">
            <div class="column-1 column">publishers</div>
            <div class="column-2 column">издатели</div>
            <div class="column-3 column">паблишэс</div>
        </div>
        <div class="string">
            <div class="column-1 column">PR</div>
            <div class="column-2 column">связи с общественностью</div>
            <div class="column-3 column">пиа</div>
        </div>
        <div class="string">
            <div class="column-1 column">sales</div>
            <div class="column-2 column">торговля</div>
            <div class="column-3 column">сэйлс</div>
        </div>
        <div class="string">
            <div class="column-1 column">IT</div>
            <div class="column-2 column">информационные технологии</div>
            <div class="column-3 column">айти</div>
        </div>
        <div class="string">
            <div class="column-1 column">computers</div>
            <div class="column-2 column">компьютеры</div>
            <div class="column-3 column">компьютес</div>
        </div>
        <div class="string">
            <div class="column-1 column">children</div>
            <div class="column-2 column">дети</div>
            <div class="column-3 column">чилдрен</div>
        </div>
        <div class="string">
            <div class="column-1 column">looking for</div>
            <div class="column-2 column">искать</div>
            <div class="column-3 column">люкин фо</div>
        </div>
        <div class="string">
            <div class="column-1 column">investment bank</div>
            <div class="column-2 column">инвестиционный банк</div>
            <div class="column-3 column">инвестмент банк</div>
        </div>
        <div class="string">
            <div class="column-1 column">own business</div>
            <div class="column-2 column">собственное дело</div>
            <div class="column-3 column">эйн бизнас</div>
        </div>
        <div class="string">
            <div class="column-1 column">from home</div>
            <div class="column-2 column">на дому</div>
            <div class="column-3 column">фром хом</div>
        </div>
        <div class="string">
            <div class="column-1 column">training</div>
            <div class="column-2 column">тренинг, обучение</div>
            <div class="column-3 column">чрейнин</div>
        </div>
        <div class="string">
            <div class="column-1 column">engineer</div>
            <div class="column-2 column">инженер</div>
            <div class="column-3 column">энженеа</div>
        </div>
        <div class="string">
            <div class="column-1 column">nurse</div>
            <div class="column-2 column">медсестра</div>
            <div class="column-3 column">нас</div>
        </div>
        <div class="string">
            <div class="column-1 column">regret</div>
            <div class="column-2 column">сожалеть</div>
            <div class="column-3 column">рукрать</div>
        </div>
        <div class="string">
            <div class="column-1 column">farewell</div>
            <div class="column-2 column">прощание</div>
            <div class="column-3 column">фавал</div>
        </div>
        <div class="string">
            <div class="column-1 column">morning</div>
            <div class="column-2 column">утро</div>
            <div class="column-3 column">монин</div>
        </div>
        <div class="string">
            <div class="column-1 column">afternoon</div>
            <div class="column-2 column">после полудня</div>
            <div class="column-3 column">автенюйнь</div>
        </div>
        <div class="string">
            <div class="column-1 column">evening</div>
            <div class="column-2 column">вечер</div>
            <div class="column-3 column">ивнин</div>
        </div>
        <div class="string">
            <div class="column-1 column">noon</div>
            <div class="column-2 column">полдень</div>
            <div class="column-3 column">нюйн</div>
        </div>
        <div class="string">
            <div class="column-1 column">allow</div>
            <div class="column-2 column">разрешать</div>
            <div class="column-3 column">алау</div>
        </div>
        <div class="string">
            <div class="column-1 column">student</div>
            <div class="column-2 column">студент</div>
            <div class="column-3 column">стюдент</div>
        </div>
        <div class="string">
            <div class="column-1 column">novels</div>
            <div class="column-2 column">роман</div>
            <div class="column-3 column">новелс</div>
        </div>
        <div class="string">
            <div class="column-1 column">plays</div>
            <div class="column-2 column">пьесы</div>
            <div class="column-3 column">плейс</div>
        </div>
        <div class="string">
            <div class="column-1 column">art</div>
            <div class="column-2 column">искусство</div>
            <div class="column-3 column">аат</div>
        </div>
        <div class="string">
            <div class="column-1 column">work</div>
            <div class="column-2 column">работать</div>
            <div class="column-3 column">воок</div>
        </div>
        <div class="string">
            <div class="column-1 column">myself</div>
            <div class="column-2 column">себя</div>
            <div class="column-3 column">майсэлф</div>
        </div>
        <div class="string">
            <div class="column-1 column">retired</div>
            <div class="column-2 column">в отставке (на пенсии)</div>
            <div class="column-3 column">ретраэт</div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column">do</div>
            <div class="column-2 column">делать</div>
            <div class="column-3 column">дю</div>
        </div>
        <div class="string">
            <div class="column-1 column">be</div>
            <div class="column-2 column">быть, находиться</div>
            <div class="column-3 column">бий</div>
        </div>
        <div class="string">
            <div class="column-1 column">for</div>
            <div class="column-2 column">для, на, за</div>
            <div class="column-3 column">фо</div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column">the</div>
            <div class="column-2 column">этот, конкретный</div>
            <div class="column-3 column">вэ</div>
        </div>
        <div class="string">
            <div class="column-1 column">a</div>
            <div class="column-2 column">один, один из многих</div>
            <div class="column-3 column">эй</div>
        </div>
        <div class="string">
            <div class="column-1 column">as</div>
            <div class="column-2 column">как</div>
            <div class="column-3 column">ас</div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column">to</div>
            <div class="column-2 column">к, для</div>
            <div class="column-3 column">тэ</div>
        </div>
        <div class="string">
            <div class="column-1 column">have</div>
            <div class="column-2 column">иметь</div>
            <div class="column-3 column">хав</div>
        </div>
        <div class="string">
            <div class="column-1 column">with</div>
            <div class="column-2 column">с, вместе с</div>
            <div class="column-3 column">вэйт</div>
        </div>
        <div class="string">
            <div class="column-1 column">also</div>
            <div class="column-2 column">так же</div>
            <div class="column-3 column">улсай</div>
        </div>
        <div class="string">
            <div class="column-1 column">study</div>
            <div class="column-2 column">(глагол) изучать, учиться</div>
            <div class="column-3 column">стадий</div>
        </div>

        <div class="clear-both"></div><br>
        <h3>Глаголы to be</h3>

        <div class="string">
            <div class="column-1 column">here</div>
            <div class="column-2 column">здесь, суда</div>
            <div class="column-3 column">хиа</div>
        </div>
        <div class="string">
            <div class="column-1 column">there</div>
            <div class="column-2 column">там, туда</div>
            <div class="column-3 column">зэа</div>
        </div>
        <div class="string">
            <div class="column-1 column">are</div>
            <div class="column-2 column">(насто, множ)</div>
            <div class="column-3 column">а</div>
        </div>
        <div class="string">
            <div class="column-1 column">were</div>
            <div class="column-2 column">(прошлое, множ)</div>
            <div class="column-3 column">вэа</div>
        </div>
        <div class="string">
            <div class="column-1 column">was</div>
            <div class="column-2 column">(прошлое, ед)</div>
            <div class="column-3 column">воз</div>
        </div>

        <div class="clear-both"></div><br>
        <h3>Притяжательные местоимения</h3>
отвечают на вопрос Whose? ( Чей? => хюйс)
        <div class="string">
            <div class="column-1 column">my</div>
            <div class="column-2 column">мой</div>
            <div class="column-3 column">май</div>
        </div>
        <div class="string">
            <div class="column-1 column">your</div>
            <div class="column-2 column">твой,ваш</div>
            <div class="column-3 column">йо(ё)</div>
        </div>
        <div class="string">
            <div class="column-1 column">his</div>
            <div class="column-2 column">его</div>
            <div class="column-3 column">хес(хис)</div>
        </div>
        <div class="string">
            <div class="column-1 column">her</div>
            <div class="column-2 column">ее</div>
            <div class="column-3 column">хё</div>
        </div>
        <div class="string">
            <div class="column-1 column">our</div>
            <div class="column-2 column">наш</div>
            <div class="column-3 column">ава</div>
        </div>
        <div class="string">
            <div class="column-1 column">their</div>
            <div class="column-2 column">их</div>
            <div class="column-3 column">за</div>
        </div>


<br><br><br><br>


        <div class="string">
            <div class="column-1 column">responsive</div>
            <div class="column-2 column">отзывчивый</div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column">bag</div>
            <div class="column-2 column">сумка, мешек, чемодан</div>
            <div class="column-3 column">баг</div>
        </div>
        <div class="string">
            <div class="column-1 column">this</div>
            <div class="column-2 column">это</div>
            <div class="column-3 column">зис(зэс)</div>
        </div>(it's - это)
        <div class="string">
            <div class="column-1 column">simple</div>
            <div class="column-2 column">простой</div>
            <div class="column-3 column">сымпол</div>
        </div>
        <div class="string">
            <div class="column-1 column">example</div>
            <div class="column-2 column">пример</div>
            <div class="column-3 column">экзампыл</div>
        </div>
        <div class="string">
            <div class="column-1 column">use</div>
            <div class="column-2 column">(гл.)использовать, пользоваться</div>
            <div class="column-3 column">юс</div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
        <div class="string">
            <div class="column-1 column"></div>
            <div class="column-2 column"></div>
            <div class="column-3 column"></div>
        </div>
 


На кого ты работаеш?   =>   Who do you work for (Кто делает тебя работа на)
Who do you    =>   Кем вы 
work for      =>   работать на
i work as     =>   я работаю в качестве
i work as a    =>   я работаю
what is your  => какова ваша



  </main>
</div>
<?php get_footer(); ?>






