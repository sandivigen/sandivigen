<?php get_header(); ?>
<script src='<?php echo get_template_directory_uri(); ?>/learn_eng.js'></script>
<script src='https://code.responsivevoice.org/responsivevoice.js'></script> <!-- for sound translate -->
<!-- main and sidebar -->
<?php get_sidebar(); ?>
<?php global $wpdb; ?>
<br>
<br>
<main class="col-md-12 bg-content">
    <div class="panel panel-default" style="_display:none">
          <div class="panel-body">
              <form action="" method="post" class="_form-horizontal">
                  <fieldset>
                       <legend>Внесение данных в таблицу</legend>
                      <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="word" for="word">На английском</label>
                                  <input type="text" class="form-control" id="word" name="word">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="tran" for="tran">На русском</label>
                                  <input type="text" class="form-control" id="tran" name="tran">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="pron" for="pron">Произношение</label>
                                  <input type="text" class="form-control" id="pron" name="pron">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="pron_tran" for="pron_tran">Транскрипция</label>
                                  <input type="text" class="form-control" id="pron_tran" name="pron_tran">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="word_2" for="word_2">На английском</label>
                                  <input type="text" class="form-control" id="word_2" name="word_2">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="tran_2" for="tran_2">На русском</label>
                                  <input type="text" class="form-control" id="tran_2" name="tran_2">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="pron_2" for="pron_2">Произношение</label>
                                  <input type="text" class="form-control" id="pron_2" name="pron_2">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="pron_tran_2" for="pron_tran_2">Транскрипция</label>
                                  <input type="text" class="form-control" id="pron_tran_2" name="pron_tran_2">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="word_3" for="word_3">На английском</label>
                                  <input type="text" class="form-control" id="word_3" name="word_3">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="tran_3" for="tran_3">На русском</label>
                                  <input type="text" class="form-control" id="tran_3" name="tran_3">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="pron_3" for="pron_3">Произношение</label>
                                  <input type="text" class="form-control" id="pron_3" name="pron_3">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label class="pron_tran_3" for="pron_tran_3">Транскрипция</label>
                                  <input type="text" class="form-control" id="pron_tran_3" name="pron_tran_3">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="category" for="category">Категория</label>
                                  <select id="category" name="category" class="form-control">
                                      <option value="verb" selected="selected">Глаголы</option>
                                      <option value="paragraph_2">Абзац 2</option>
                                      <option value="paragraph_3">Абзац 3</option>
                                      <option value="paragraph_4">Абзац 4</option>
                                  </select>
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="accuracy" for="accuracy">Точность</label>
                                  <br>
                                  <input type="checkbox" value="1" name="accuracy" id="accuracy">
                              </div>
                          </div>

                          <div class="col-md-4">
                          </div>
                      </div>
                      <input type="submit" name="my_button" value="Отправить" class="btn btn-default">
                  </fieldset>
              </form>
              <div class="clear"></div>
          </div>
      <?php
    // обработка внесения в базу новых слов
    if( isset( $_POST['my_button'] ) ) {

    // Если есть неправильная форма глагола
    if($_POST['word_3']) {
        $word      = implode(",", array($_POST['word'], $_POST['word_2'], $_POST['word_3']));
        $tran      = implode(",", array($_POST['tran'], $_POST['tran_2'], $_POST['tran_3']));
        $pron      = implode(",", array($_POST['pron'], $_POST['pron_2'], $_POST['pron_3']));
        $pron_tran = implode(",", array($_POST['pron_tran'], $_POST['pron_tran_2'], $_POST['pron_tran_3']));
    } elseif ($_POST['word_2']) {
        $word      = implode(",", array($_POST['word'], $_POST['word_2']));
        $tran      = implode(",", array($_POST['tran'], $_POST['tran_2']));
        $pron      = implode(",", array($_POST['pron'], $_POST['pron_2']));
        $pron_tran = implode(",", array($_POST['pron_tran'], $_POST['pron_tran_2']));
    } else {
        $word      = $_POST['word'];
        $tran      = $_POST['tran'];
        $pron_tran = $_POST['pron_tran'];
        $pron      = $_POST['pron'];
    }
    $category  = $_POST['category'];
    $accuracy  = $_POST['accuracy'];
    $wpdb->query( $wpdb->prepare(
        'INSERT INTO `wp_learneng`(`word`, `tran`, `pron_tran`, `pron`, `category`, `accuracy`) VALUES ("'.$word.'","'.$tran.'","'.$pron_tran.'", "'.$pron.'", "'.$category.'", "'.$accuracy.'")'
    ));
}
    ?>
</div>


    <div class="btn-group">
        <button type="button" class="btn btn-primary js-learn-eng">Учить англ</button>
        <button type="button" class="btn btn-primary js-learn-writ">Правописание</button>
        <button type="button" class="btn btn-default btn-accuracy-on">Проверенные</button>
    </div>



        <?php

        function createTableVerb($category) {

            echo '<form action="" method="post">';
            // Глаголы
            global $wpdb;
            if ($category == 'Verb')
                $results_verb = $wpdb->get_results("SELECT * FROM wp_learneng WHERE Category='Verb'");

            echo '<table class="table table-striped table-bordered"><caption>Глаголы</caption><thead><tr>';
            echo    '<th class="lern-table-th-0"><span class="learn-eng-title">Пер/Звук/Фор</span><span class="learn-writ-title">Обр.пер/Фор</span></th>';
            echo    '<th class="lern-table-th-1">Первая форма</th>';
            echo    '<th class="lern-table-th-3">рус</th>';
            echo    '<th class="lern-table-th-2">произн</th>';
            echo    '<th class="lern-table-th-1">Вторая форма</th>';
            echo    '<th class="lern-table-th-2">произн</th>';
            echo    '<th class="lern-table-th-1">Третья форма</th>';
            echo    '<th class="lern-table-th-2">произн</th>';
            echo    '<th class="lern-table-th-4"></th>';
            echo '</tr></thead><tbody>';

            foreach($results_verb as $r) {

                $lern_id        = $r->id;
                $lern_word      = explode(",", $r->word);
                $lern_tran      = explode(";", $r->tran);
                $lern_tran_done = $r->tran_done;
                $lern_pron_tran = explode(",", $r->pron_tran);
                $lern_pron      = explode(",", $r->pron);
                $lern_pron_done = $r->pron_done;
                $lern_writ_done = $r->writ_done;
                $lern_verb_done = $r->verb_done;
                $lern_learned   = $r->learned;
                $lern_group     = $r->group;
                $lern_accuracy  = $r->accuracy;
                $check_accuracy = ($lern_accuracy ? 'accuracy-background' : '');
                $verb_des = ($r->des ? '<span class="glyphicon glyphicon-info-sign color-grey" data-toggle="tooltip" data-original-title="'.$r->des.'"></span>' : '');

                // добавляю другие варианты (не основные) перевода
                $lern_tran_tooltip = '';
                $lern_tran_first = $lern_tran[0];
                if (count($lern_tran) > 1) { // если более чем одно слово перевода
                    $lern_tran_tooltip = ' <span class="glyphicon glyphicon-circle-arrow-right color-grey" data-toggle="tooltip" data-original-title="';
                    array_shift($lern_tran); // удаляем первое слово массива, тк оно и так отображается
                    foreach ($lern_tran as $word) {
                        $lern_tran_tooltip .= $word.', '; // добовляем слова в тултип
                    }
                    $lern_tran_tooltip = substr($lern_tran_tooltip, 0, -2); // удаляю лишнюю запятую
                    $lern_tran_tooltip .= '"></span>';
                }

                echo '<tr class="'.$check_accuracy.'">';
                echo     '<th>';
                echo     '<div class="wrap-count-tran"><span class="glyphicon glyphicon-plus-sign color-grey" word-id="'.$lern_id.'"></span><input type="text" class="input-done id-tran_done-'.$lern_id.'" name="tran_done['.$lern_id.']" value ="'.$lern_tran_done.'"></div>';
                echo     '<div class="wrap-count-pron"><span class="glyphicon glyphicon-plus-sign color-grey" word-id="'.$lern_id.'"></span><input type="text" class="input-done id-tran_done-'.$lern_id.'" name="pron_done['.$lern_id.']" value ="'.$lern_pron_done.'"></div>';
                echo     '<div class="wrap-count-writ"><span class="glyphicon glyphicon-plus-sign color-grey" word-id="'.$lern_id.'"></span><input type="text" class="input-done id-tran_done-'.$lern_id.'" name="writ_done['.$lern_id.']" value ="'.$lern_writ_done.'"></div>';
                echo     '<div class="wrap-count-verb"><span class="glyphicon glyphicon-plus-sign color-grey" word-id="'.$lern_id.'"></span><input type="text" class="input-done id-tran_done-'.$lern_id.'" name="verb_done['.$lern_id.']" value ="'.$lern_verb_done.'"></div>';
                echo     '<span class="glyphicon glyphicon-eye-open pull-right color-grey invisible-word"></span>';
                echo     '<input class="form-control input-write-text">';
                echo     '</th>';
                echo     '<th>'.$lern_word[0].'<span class="glyphicon glyphicon-music pull-right color-grey"></span></th>';
                echo     '<th>'.$lern_tran_first.$lern_tran_tooltip.'</th>';
                echo     '<th><span data-toggle="tooltip" data-original-title="'.$lern_pron_tran[0].'" >'.$lern_pron[0].'</span></th>';
                echo     '<th>'.$lern_word[1].($lern_word[1] ? '<span class="glyphicon glyphicon-music pull-right color-grey"></span>' : '' ).'</th>';
                echo     '<th><span data-toggle="tooltip" data-original-title="'.$lern_pron_tran[1].'" >'.$lern_pron[1].'</span></th>';
                echo     '<th>'.$lern_word[2].($lern_word[2] ? '<span class="glyphicon glyphicon-music pull-right color-grey"></span>' : '' ).'</th>';
                echo     '<th><span data-toggle="tooltip" data-original-title="'.$lern_pron_tran[2].'" >'.$lern_pron[2].'</span></th>';
                echo     '<th>'.$verb_des.'</th>';
                echo '</tr>';
            }
            echo    '</tbody>';
            echo '</table>';
            echo '<input type="submit" name="send_verb" value="Отправить" class="btn btn-default">';
            echo '</form>';
        }

        function createTable($category) {

            echo '<form action="" method="post">';
            // Глаголы
            global $wpdb;
            if ($category == 'Questions')
                $results_verb = $wpdb->get_results("SELECT * FROM wp_learneng WHERE Category='questions'");

            echo '<table class="table table-striped table-bordered"><caption>'.$category.'</caption><thead><tr>';
            echo    '<th class="lern-table-th-0"><span class="learn-eng-title">Пер/Звук/Фор</span><span class="learn-writ-title">Обр.пер/Фор</span></th>';
            echo    '<th class="lern-table-th-1">Первая форма</th>';
            echo    '<th class="lern-table-th-3">рус</th>';
            echo    '<th class="lern-table-th-2">произн</th>';
            echo    '<th class="lern-table-th-4"></th>';
            echo '</tr></thead><tbody>';

            foreach($results_verb as $r) {

                $lern_id        = $r->id;
                $lern_word      = explode(",", $r->word);
                $lern_tran      = explode(";", $r->tran);
                $lern_tran_done = $r->tran_done;
                $lern_pron_tran = explode(",", $r->pron_tran);
                $lern_pron      = explode(",", $r->pron);
                $lern_pron_done = $r->pron_done;
                $lern_writ_done = $r->writ_done;
                $lern_verb_done = $r->verb_done;
                $lern_learned   = $r->learned;
                $lern_group     = $r->group;
                $lern_accuracy  = $r->accuracy;
                $check_accuracy = ($lern_accuracy ? 'accuracy-background' : '');
                $verb_des = ($r->des ? '<span class="glyphicon glyphicon-info-sign color-grey" data-toggle="tooltip" data-original-title="'.$r->des.'"></span>' : '');

                // добавляю другие варианты (не основные) перевода
                $lern_tran_tooltip = '';
                $lern_tran_first = $lern_tran[0];
                if (count($lern_tran) > 1) { // если более чем одно слово перевода
                    $lern_tran_tooltip = ' <span class="glyphicon glyphicon-circle-arrow-right color-grey" data-toggle="tooltip" data-original-title="';
                    array_shift($lern_tran); // удаляем первое слово массива, тк оно и так отображается
                    foreach ($lern_tran as $word) {
                        $lern_tran_tooltip .= $word.', '; // добовляем слова в тултип
                    }
                    $lern_tran_tooltip = substr($lern_tran_tooltip, 0, -2); // удаляю лишнюю запятую
                    $lern_tran_tooltip .= '"></span>';
                }

                echo '<tr class="'.$check_accuracy.'">';
                echo     '<th>';
                echo     '<div class="wrap-count-tran"><span class="glyphicon glyphicon-plus-sign color-grey" word-id="'.$lern_id.'"></span><input type="text" class="input-done id-tran_done-'.$lern_id.'" name="tran_done['.$lern_id.']" value ="'.$lern_tran_done.'"></div>';
                echo     '<div class="wrap-count-pron"><span class="glyphicon glyphicon-plus-sign color-grey" word-id="'.$lern_id.'"></span><input type="text" class="input-done id-tran_done-'.$lern_id.'" name="pron_done['.$lern_id.']" value ="'.$lern_pron_done.'"></div>';
                echo     '<div class="wrap-count-writ"><span class="glyphicon glyphicon-plus-sign color-grey" word-id="'.$lern_id.'"></span><input type="text" class="input-done id-tran_done-'.$lern_id.'" name="writ_done['.$lern_id.']" value ="'.$lern_writ_done.'"></div>';
                echo     '<div class="wrap-count-verb"><span class="glyphicon glyphicon-plus-sign color-grey" word-id="'.$lern_id.'"></span><input type="text" class="input-done id-tran_done-'.$lern_id.'" name="verb_done['.$lern_id.']" value ="'.$lern_verb_done.'"></div>';
                echo     '<span class="glyphicon glyphicon-eye-open pull-right color-grey invisible-word"></span>';
                echo     '<input class="form-control input-write-text">';
                echo     '</th>';
                echo     '<th>'.$lern_word[0].'<span class="glyphicon glyphicon-music pull-right color-grey"></span></th>';
                echo     '<th>'.$lern_tran_first.$lern_tran_tooltip.'</th>';
                echo     '<th><span data-toggle="tooltip" data-original-title="'.$lern_pron_tran[0].'" >'.$lern_pron[0].'</span></th>';
                echo     '<th>'.$verb_des.'</th>';
                echo '</tr>';
            }
            echo    '</tbody>';
            echo '</table>';
            echo '<input type="submit" name="send_verb" value="Отправить" class="btn btn-default">';
            echo '</form>';
        }

        ?>

    <?php
        createTableVerb('Verb');
        createTable('Questions');
    ?>

    <?php
    // обновление выученых слов
    if( isset( $_POST['send_verb'] ) ) {

        foreach ($_POST['tran_done'] as $word_id => $val) {
            $data_tran    = array("tran_done" => $val);                         // вносим значение в колонку tran-done
            $where_tran   = array("id" => $word_id);                            // в строку соответствующию этому ид
            $wpdb->update( 'wp_learneng', $data_tran, $where_tran, "%d", "%d"); // отправляем обновление записи - tran
        }
        foreach ($_POST['pron_done'] as $word_id => $val) {
            $data_tran    = array("pron_done" => $val);                         // вносим значение в колонку tran-done
            $where_tran   = array("id" => $word_id);                            // в строку соответствующию этому ид
            $wpdb->update( 'wp_learneng', $data_tran, $where_tran, "%d", "%d"); // отправляем обновление записи - tran
        }
        foreach ($_POST['writ_done'] as $word_id => $val) {
            $data_tran    = array("writ_done" => $val);                         // вносим значение в колонку tran-done
            $where_tran   = array("id" => $word_id);                            // в строку соответствующию этому ид
            $wpdb->update( 'wp_learneng', $data_tran, $where_tran, "%d", "%d"); // отправляем обновление записи - tran
        }
        foreach ($_POST['verb_done'] as $word_id => $val) {
            $data_tran    = array("verb_done" => $val);                         // вносим значение в колонку tran-done
            $where_tran   = array("id" => $word_id);                            // в строку соответствующию этому ид
            $wpdb->update( 'wp_learneng', $data_tran, $where_tran, "%d", "%d"); // отправляем обновление записи - tran
        }
    }
    ?>









    


<?php

$results_ques = $wpdb->get_results("SELECT * FROM wp_learneng WHERE Category='paragraph_2'");

echo '<table class="table table-striped table-bordered"><caption>Вопросы</caption><thead><tr>';
echo            '<th>Первая форма</th>';
echo            '<th>рус</th>';
echo            '<th>произн</th>';
echo            '<th>пояснение</th>';
echo        '</tr></thead><tbody>';

foreach($results_ques as $r) {
    echo        '<tr>';
    echo            '<th>'.$r->word.'</th>';
    echo            '<th>'.$r->tran.'</th>';
    echo            '<th>'.$r->pron.'</th>';
    echo            '<th></th>';
    echo        '</tr>';
}

echo    '</tbody>';
echo '</table>';
?>

<?php
$results = $wpdb->get_results("SELECT * FROM wp_learneng");

$counter_lern = 0;

foreach($results as $string) {
    $lern_id        = $string->id;
    $lern_word      = $string->word;
    $lern_tran      = $string->tran;
    $lern_tran_done = $string->tran_done;
    $lern_pron      = $string->pron;
    $lern_pron_done = $string->pron_done;
    $lern_writ_done = $string->writ_done;
    $lern_learned   = $string->learned;
    $lern_group     = $string->category;

    if ($lern_group == 'questions') {
        echo '<div class="string">';
        echo      '<div class="column-1 column">'.$lern_word.'</div>';
        echo      '<div class="column-2 column">';
        echo          '<span>'.$lern_tran.'</span>';
        echo          '<span class="glyphicon glyphicon-eye-open invisible-word"></span>';
//            echo          '<img src="'.$path_theme.'/img/eye.png" class="invisible-word">';
        echo      '</div>';



        echo      '<div class="column-3 column">';
        echo          '<span>'.$lern_pron.'</span>';
        echo          '<a href="http://translate.google.com/translate_tts?ie=utf-8&tl=en&q='.$lern_word.'" target="lerneng">';
        echo          '<span class="glyphicon glyphicon-music"></span>';
//            echo              '<img src="'.$path_theme.'/img/quaver.png">';
        echo          '</a>';
        echo      '</div>';
        echo      '<div class="column-6 column tran-done-'.$lern_id.'">';
        echo          '<span>' . $lern_tran_done . '</span>';
        echo          '<span class="glyphicon glyphicon-plus-sign pull-right"></span>';
//            echo          '<img src="'.$path_theme.'/img/add.png" id="'.$lern_id.'">';
        echo      '</div>';



        echo      '<div class="column-7 column pron-done-'.$lern_id.'">';
        echo          '<span>' . $lern_pron_done . '</span>';
        echo          '<span class="glyphicon glyphicon-plus-sign"></span>';
//            echo          '<img src="'.$path_theme.'/img/add.png" id="'.$lern_id.'">';
        echo      '</div>';


        echo      '<div class="column-8 column writ-done-'.$lern_id.'">';
        echo          '<input type="text">';
        echo          '<span>' . $lern_writ_done . '</span>';
//            echo          '<img src="'.$path_theme.'/img/add.png" id="'.$lern_id.'">';
        echo      '</div>';

        echo      '<div class="column-9 column">';
//            echo          '<img src="'.$path_theme.'/img/done.png">';
        echo      '</div>';
        echo '</div>';
    }

    $counter_lern++;
}
?>

<br><br>
<form method=post>
<!--    <input type=submit name=knopka value=ok> -->
</form> 
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

<!--Как лучше сделать?-->
<!--      - во первых нужна транскрипция-->
<!--      - во вторых нужно сделать место для трех форм глаголов-->
<!--      - неправильные глаголы есть только в глаголах, для других не нужно расширять таблицу-->
<!--      - если есть пояснение, то-->
<!--      - будут категории: цвета-->
<!---->
<!--Структура-->
<!--      - массив(1-->
<!--или-->
<!--      - сделтаь для глаголов отдельную таблицу? или кидать в массив глаголы, и при выводе-->
<!--      - сложно сказать, но в любой момент можно переделать-->
<!--      - чтобы оставить оду таблицу можно оставить в ней глаголы-->
<!--      - будет проблемы, нужно будет вносить в ручную архивы, хотя создать простой инструмент для добавления и все тут-->
<!--Что я могу учить?-->
<!--      - перевод-->
<!--      - произношение-->
<!--      - правописание-->
<!--      - есть ли у этого глагола неправильная форма-->
<!--      * необхоимо сделать завершенность слова(т.е. заполнены ли все формы глаголов и указанны ли все транскрипции,-->
<!--Я должен как-то комбинировать или проводить 3 независимых теста-->
<!--      - изучать можно перевод и произношение, так как я могу прочитать на англ-->
<!--      - изучать обратный перевод: дается на русском, я говорю на английском и пишу на английском-->
<!---->



<br><br>

      <table class="table table-striped table-bordered">
          <!-- <caption>Почасовая оплата</caption> -->
          <thead>
          <tr>
              <th>Глагол to by</th>
              <th>рус</th>
              <th>звуч</th>
              <th>пояснение</th>
              </th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <td>by</td>
              <td>быть</td>
              <td>бии</td>
              <td></td>
          </tr>
          <tr>
              <td>been</td>
              <td>было</td>
              <td>биин</td>
              <td></td>
          </tr>
          <tr>
              <td>are</td>
              <td>(насто, множ)</td>
              <td>а</td>
              <td><span class="label label-default" data-toggle="tooltip" title="" data-original-title="are - последнее спряжение, которое используется в настоящем времени. Мы его используем если говорим о множестве предметов или со словом you">des</span></td>
          </tr>
          <tr>
              <td>were</td>
              <td>(прошлое, множ)</td>
              <td>вэа</td>
              <td><span class="label label-default" data-toggle="tooltip" title="" data-original-title="were - когда о нескольких вещах или используем вежливое you">des</span></td>
          </tr>
          <tr>
              <td>was</td>
              <td>(прошлое, ед)</td>
              <td>воз</td>
              <td><span class="label label-default" data-toggle="tooltip" title="" data-original-title="was - когда мы говорим о себе или о любом другом предмете в ед.числе">des</span></td>
          </tr>
          <tr>
              <td>is</td>
              <td>есть, быть</td>
              <td>ис</td>
              <td><span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="" data-original-title="если мы говорим о единственном человеке или предмете, то глагол принимает форму is"></span></td>
          </tr>
          </tbody>
      </table>

      <table class="table table-striped table-bordered">
           <caption>Глаголы</caption>
          <thead>
          <tr>
              <th>Первая форма</th>
              <th>рус</th>
              <th>Вторая форма</th>
              <th>рус</th>
              <th>Третья форма</th>
              <th>рус</th>
              <th>звуч</th>
              <th>пояснение</th>
              </th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <td>here</td>
              <td>здесь, суда</td>
              <td>хиа</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <td>there</td>
              <td>там, туда</td>
              <td>зэа</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <td>engish</td>
              <td>russia</td>
              <td>zvuk</td>
              <td>description</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
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
            <div class="column-1 column">sleep</div>
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
 


<!--На кого ты работаеш?   =>   Who do you work for (Кто делает тебя работа на)-->
<!--Who do you    =>   Кем вы -->
<!--work for      =>   работать на-->
<!--i work as     =>   я работаю в качестве-->
<!--i work as a    =>   я работаю-->
<!--what is your  => какова ваша-->

    <!--<iframe src="http://translate.google.com&output=embed" width="300" height="80" name="lerneng">-->
    <!--    Ваш браузер не поддерживает плавающие фреймы!-->
    <!--</iframe>-->

  </main>
</div>
<?php get_footer(); ?>






