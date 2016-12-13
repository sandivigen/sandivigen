<?php get_header(); ?>
<!-- main and sidebar -->
<?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
        <?php the_content(); ?>
    </article> 
<?php endwhile; ?>
12
<div class="container">
    <div class="row">
        <?php if (!isset($gt3_theme_pagebuilder['settings']['show_title']) || $gt3_theme_pagebuilder['settings']['show_title'] !== "no") { ?>
        <br>
        <div class="well-sm well">UpWork Script<?php //the_title(); ?></div>
        <?php } ?>
        
        <!-- сообщение о привышенной квоте -->
        <div class="row">
            <div class="col-md-6 worry-box"></div>
        </div>


        
        <!-- кнопка парсить -->
        <div class="row">
            <div class="col-md-2"><input type="button" value="Парсить" class="btn btn-primary btn-sm btn-block" onclick="javascript:f()"/></div>
            <div class="col-md-10"></div>
        </div>
        <div class="clear"></div>

        <!-- заголовок заявки -->
        <div class="panel panel-default">
            <div class='panel-body work-title'></div>
            <div class='panel-body work-title-translate'></div>
            <div class='panel-body'><input class="form-control" type="text"></div>
            <div class="clear"></div>
        </div>
              
        <!-- текст заявки -->        
        <div class="panel panel-default"> 
            <div class='panel-body work-text-wrapper'><div class="clear"></div></div>
        </div>

        <!-- вопросы заявки --> 
        <div class="panel panel-info question-block">
            <div class="panel-heading">Вопросы</div>
            <div class="panel-body questions-text"></div>
        </div>

        <!-- инфо блок --> 
        <div class="panel panel-default">
            <!-- инфо блок: лейблы --> 
            <div class="panel-body">
                <div class="upw-div">Рейтинг <div class='label work-stars'> </div></div>
                <!-- <div class='upw-div work-reviews'></div> -->
                <div class="upw-div">Страна <div class='label work-country'></div></div>
                <!-- <div class='upw-div work-jobs'>Выставил работ: </div> -->
                <div class="upw-div">Найм <div class='label work-hr'></div></div>
                <div class="upw-div">Всего <div class='label label-info work-total'></div></div>
                <!-- <div class='upw-div work-hires'>Нанял: </div> -->
                <!-- <div class='upw-div work-active'>Активно работ: </div> -->
                <!-- <div class='upw-div work-avg'>Средняя ставка: </div>
                <div class='upw-div work-hours'>Всего часов: </div> -->
                <div class="upw-div">Дата <div class='label work-registration'></div></div>
            </div>
            <div class="clear"></div>

            <!-- инфо блок: таблицы --> 
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <table class="table table-striped table-bordered table-custom-1">
                            <caption>Оценки фрилансерам</caption>
                            <thead>
                                <tr>
                                    <th><span class='badge scoreAverage' data-toggle="tooltip" title="Средняя оценка данная фрилансеру"></span></th>
                                    <th><span class='badge scoreSum' data-toggle="tooltip" title="Всего проставленно оценок"></span><div class='badge workInProcess' data-toggle="tooltip" title="Работ в процессе"> </div></th>
                                    <th><span class='badge noFeedback' data-toggle="tooltip" title="Количество людей не получивших обратную связь"></span><span class='badge scoreRatio' data-toggle="tooltip" title="Количество людей в %, не получивших обратную связь"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="qu-1 ">5</td>
                                    <td class="qu-1 scoreQuantity50"></td>
                                    <td class="qu-1 scoreRatio50"></td>
                                </tr>
                                <tr>
                                    <td class="qu-2 ">4,5 - 5</td>
                                    <td class="qu-2 scoreQuantity45to50"></td>
                                    <td class="qu-2 scoreRatio45to50"></td>
                                </tr>
                                <tr>
                                    <td class="qu-3 ">4 - 4,5</td>
                                    <td class="qu-3 scoreQuantity40to45"></td>
                                    <td class="qu-3 scoreRatio40to45"></td>
                                </tr>
                                <tr>
                                    <td class="qu-4 ">3,5 - 4</td>
                                    <td class="qu-4 scoreQuantity35to40"></td>
                                    <td class="qu-4 scoreRatio35to40"></td>
                                </tr>
                                <tr>
                                    <td class="qu-5 ">3 - 3,5</td>
                                    <td class="qu-5 scoreQuantity30to35"></td>
                                    <td class="qu-5 scoreRatio30to35"></td>
                                </tr>
                                <tr>
                                    <td class="qu-6 ">2 - 3</td>
                                    <td class="qu-6 scoreQuantity20to30"></td>
                                    <td class="qu-6 scoreRatio20to30"></td>             
                                </tr>
                                <tr>
                                    <td class="qu-7 ">1 - 2</td>
                                    <td class="qu-7 scoreQuantity10to20"></td>
                                    <td class="qu-7 scoreRatio10to20"></td>             
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-4">
                        <!-- нету средней почасовой, а надо ли? -->
                        <table class="table table-striped table-bordered table-custom-1">
                            <caption>Почасовая оплата</caption>
                            <thead>
                                <tr>
                                    <th><span class='badge ' data-toggle="tooltip" title=""></span></th>
                                    <th><span class='badge hourseRateSum' data-toggle="tooltip" title="Всего нанятых с почасовой ставкой"></span></th>
                                    <th><span class='badge ' data-toggle="tooltip" title=""></span></th>
                                    <th><span class='badge ' data-toggle="tooltip" title=""></span></th>
                                    <th><span class='badge hourseRateRatio' data-toggle="tooltip" title="Коэфицент почасовых от всего нанятых">-</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="hr-1 ">0 до 5</td>
                                    <td class="hr-1 hourseRateQuantity00to05"></td>
                                    <td class="hr-1 hourseRateRatio00to05"></td>
                                    <td class="hr-1 hourseQuantity00to05"></td>
                                    <td class="hr-1 hourseRatio00to05"></td>
                                
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
                                    <td class="hr-7 "> > 20</td>
                                    <td class="hr-7 hourseRateQuantity20to50"></td>
                                    <td class="hr-7 hourseRateRatio20to50"></td>    
                                    <td class="hr-7 hourseQuantity20to50"></td>
                                    <td class="hr-7 hourseRatio20to50"></td>         
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-3">
                        <table class="table table-striped table-bordered table-custom-1">
                            <caption>Фиксированная оплата</caption>
                            <thead>
                                <tr>
                                    <th><span class='badge fixAverage' data-toggle="tooltip" title="Средняя сумма найма"></span></th>
                                    <th><span class='badge fixSum' data-toggle="tooltip" title="Всего нанятых с фиксированной оплатой"></span></th>
                                    <th><span class='badge fixRatio' data-toggle="tooltip" title="Коэфицент нанятых фиксированных от всего нанятых"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fq-1 ">0$ до 50$</td>
                                    <td class="fq-1 fixQuantity0"></td>
                                    <td class="fq-1 fixRatio0"></td>
                                </tr>
                                <tr>
                                    <td class="fq-2 ">50$ до 100$</td>
                                    <td class="fq-2 fixQuantity50"></td>
                                    <td class="fq-2 fixRatio50"></td>
                                </tr>
                                <tr>
                                    <td class="fq-3 ">100$ до 200$</td>
                                    <td class="fq-3 fixQuantity100"></td>
                                    <td class="fq-3 fixRatio100"></td>
                                </tr>
                                <tr>
                                    <td class="fq-4 ">200$ до 300$</td>
                                    <td class="fq-4 fixQuantity200"></td>
                                    <td class="fq-4 fixRatio200"></td>
                                </tr>
                                <tr>
                                    <td class="fq-5 ">300$ до 500$</td>
                                    <td class="fq-5 fixQuantity300"></td>
                                    <td class="fq-5 fixRatio300"></td>
                                </tr>
                                <tr>
                                    <td class="fq-6 ">500$ до 1000$</td>
                                    <td class="fq-6 fixQuantity500"></td>
                                    <td class="fq-6 fixRatio500"></td>             
                                </tr>
                                <tr>
                                    <td class="fq-7 ">Более 1000$</td>
                                    <td class="fq-7 fixQuantity1000"></td>
                                    <td class="fq-7 fixRatio1000"></td>             
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-2">
                        <table class="table table-striped table-bordered table-custom-1">
                            <caption>Активность</caption>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th><span class='badge liveSum' data-toggle="tooltip" title="Всего нанятых"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="lq-1 ">2016г.</td>
                                    <td class="lq-1 liveQuantity2016"></td>
                                </tr>
                                <tr>
                                    <td class="lq-2 ">2015г.</td>
                                    <td class="lq-2 liveQuantity2015"></td>
                                </tr>
                                <tr>
                                    <td class="lq-3 ">2014г.</td>
                                    <td class="lq-3 liveQuantity2014"></td>
                                </tr>
                                <tr>
                                    <td class="lq-4 ">2013г.</td>
                                    <td class="lq-4 liveQuantity2013"></td>
                                </tr>
                                <tr>
                                    <td class="lq-5 ">2012г.</td>
                                    <td class="lq-5 liveQuantity2012"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- мои мысли о работе --> 
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading" data-toggle="collapse" href="#collapse6">
                    <h4 class="panel-title">
                        <a>Заключение</a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">

                    <span>Суть работы</span>
                    <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>





        <?php
           $upwork_letter = $wpdb->get_results("SELECT * FROM `wp_upwork_letter`");
            // print_r($questions);
        ?>

        
        <div class="row">

            <div class="col-md-6">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse2">Первый абзац</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <ul class="list-group">
                                <?php
                                    foreach($upwork_letter as $key=>$value){
                                        if ($value->category == 'paragraph_1') { 
                                            echo '<li class="list-group-item ist-group-item-'.$value->id.' '.$value->accuracy.' " data-toggle="tooltip" title="'.$value->text_rus.'">';
                                            echo        $value->text_eng;
                                            echo '</li>';
                                        };
                                    }
                                ?>
                            </ul>
                            <!-- <div class="panel-footer">Footer</div> -->
                        </div>
                    </div>
                </div>



                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" href="#collapse3">
                            <h4 class="panel-title">
                                <a  data-toggle="tooltip" title="
                                    Кто я.
                                    Если кодинг сказать, что на кодинге. Если дизайн, сказать что я спец на дизайне. С нуля, значит много с нуля сверстал.
                                    Возможно ссылки.
                                    Возможно нравиться этим заниматься.
                                ">Второй абзац</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <ul class="list-group">
                                <?php
                                    foreach($upwork_letter as $key=>$value){
                                        if ($value->category == 'paragraph_2') { 
                                            echo '<li class="list-group-item ist-group-item-'.$value->id.' '.$value->accuracy.' " data-toggle="tooltip" title="'.$value->text_rus.'">';
                                            echo        $value->text_eng;
                                            echo '</li>';
                                        };
                                    }
                                ?>
                            </ul>
                            <!-- <div class="panel-footer">Footer</div> -->
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" href="#collapse4">
                            <h4 class="panel-title">
                                <a data-toggle="tooltip" title="
                                    2-3 зацепки якоря.
                                    Возможно вопросы по теме
                                ">Третий абзац</a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <ul class="list-group">
                                <?php
                                    foreach($upwork_letter as $key=>$value){
                                        if ($value->category == 'paragraph_3') {

                                            if ($value->subcategory != 'none') {
                                                echo '<li class="list-group-item ist-group-item-'.$value->id.' '.$value->accuracy.' i-translated-and-badge" data-toggle="tooltip" title="'.$value->text_rus.'">';
                                                echo        $value->text_eng;
                                                echo '<span class="badge badge-translated">'.$value->subcategory.'</span>';
                                            } else {
                                                echo '<li class="list-group-item ist-group-item-'.$value->id.' '.$value->accuracy.' " data-toggle="tooltip" title="'.$value->text_rus.'">';
                                                echo        $value->text_eng;
                                            }
                                            echo '</li>';
                                        };
                                    }
                                ?>
                            </ul>
                            <!-- <div class="panel-footer">Footer</div> -->
                        </div>
                    </div>
                </div>

                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse5">Четвертый абзац</a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <ul class="list-group">
                                <?php
                                    foreach($upwork_letter as $key=>$value){
                                        if ($value->category == 'paragraph_4') { 
                                            echo '<li class="list-group-item ist-group-item-'.$value->id.' '.$value->accuracy.' " data-toggle="tooltip" title="'.$value->text_rus.'">';
                                            echo        $value->text_eng;
                                            echo '</li>';
                                        };
                                    }
                                ?>
                            </ul>
                            <!-- <div class="panel-footer">Footer</div> -->
                        </div>
                    </div>
                </div>
            </div>


            <!-- <span class="glyphicon glyphicon-ok"></span> -->
            <!-- <span class="glyphicon glyphicon-remove"></span> -->

            <div class="col-md-6">
                <div class="panel-group mail-wrapper">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1" class="cover-letter">Cover Letter</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body"></div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






<!-- 
Мне нужно больше информации, чтобы дать вам ответ. Могу я задать вам вопрос по поводу вашего проекта?
I need more information to give you an answer. Let me ask you a question about your project?

 посмотрел прикрепленный файл и у меня есть вопрос
I looked at your file attachment, and I have a question

I have questions about your project
У меня есть вопросы о вашем проекте

Я посетил Ваш сайт и у меня есть вопрос:
I visited your website and I have a question:

Не могли бы вы дать мне ссылку на ваш сайт? Это поможет мне, чтобы дать вам хорошее решение
Could you give me a link to your site? This will help me to give you a good solution

Я посмотрел * файл и у меня есть несколько вопросов
I looked txt file and I have some questions

У меня есть отличные навыки в Photoshop
I have excellent skills in Photoshop

У меня есть большой опыт в настройки темы и плагины.
I have extensive experience in customization themes and plugins.

Я пишу валидный код, используя стандарты кодирования.
I write valid code using coding standards

У меня есть большой опыт работы с подобными проектами.
I have extensive experience with similar projects.


=== CSS

Я работаю быстро и с высоким уровнем детализации
I work quickly and with a high level of detail

У меня есть отличное знание CSS. Я работаю в Mac Book Pro сетчатки, это помогает мне сделать работу с высоким уровнем детализации. (не очень нравится, может опыт работы в вп. А то ответ не в тему)
i have excellent knowledge of css. I work for a mac book pro retina, it helps me to do works with high level of detail.

Вот некоторые из моих работ Я занимался в создании гибкой конструкции и сделаны различные изменения CSS
Here are some of my work http://www.thirdeyepinecones.com/ http://534.eu/blog/ I was engaged in setting up a responsive design and made various changes css

=== JS
У меня есть опыт создания и настройки всплывающее окно(надо бы пример с сайта шишек)
I have experience creating and customizing popup

=== RESPONSIVE
Я специализируюсь на responsive design.
I specialize in responsive design.
Последнии два года мои проекты были связанны с responsive design.
The last two years of my projects have been associated with responsive design.
Вот мои работы
Here is my works http://www.styleacdmy.com/ http://www.thirdeyepinecones.com/
Так же у меня отличные знания css. Я работаю на mac pro retina, это помогает мне сделать работы быстро и с высоким уровнем детализации. Так же я проверяю сайты на ipad 4 и ipad mini.
I also have excellent knowledge of css. I work for a mac book pro retina, it helps me to do works quickly and with high level of detail. I also check the sites for iPad 4 and iPad mini.
Вот некоторые из моих работ. В них, я создал реагировать дизайн
Here are some of my work. In them, I set up a responsive design

=== WooComerce
У меня есть опыт работы с woocommerce
I have experienceworking with woocommerce

=== multilanguage
У меня есть опыт создания многоязычных сайтов это один из последних
I have experience of creating multilingual sites that's one of the last http://osacosm.com

=== scratch

Есть ли у вас какие-либо идеи, как выглядит ваш сайт? Может быть, подобный сайт вашей отрасли?(индустрии не уверен)
Do you have any idea how to look your website? Maybe a similar site of your industry?
Я изучил ваш сайт, а также текст Вашего письма. Из чего я сделал вывод, что WordPress идеально подходит для решения вашей проблемы
I have studied your website, as well as the text of your letter. From which I concluded that the WordPress is perfect for a solution to your problem..

=== theme avada
У меня есть опыт работы с темой avada
I have experience with theme avada

=== plugins
Вот некоторые видео плагины Мы можем попытаться установить разные. И выбирать лучшее
Here are some video plugins https://wordpress.org/plugins/media-element-html5-video-and-audio-player/ https://wordpress.org/plugins/hana-flv-player/ https://wordpress.org/plugins/videojs-html5-video-player-for-wordpress/ We can try to install different. And choose the best
У меня большой опыт разработки плагинов
I have extensive experience in developing plug-ins

=== theme
Я посмотрел вашу тему и у меня есть несколько вопросов.
I looked up your theme and I have a few questions.

=== gallery
Вот пример работы где я делал галерею На этот проект, я установил модули, а также развитую модуль с интерфейсом пользователя
Here is an example of work where I did the gallery http://www.dekor-omsk.ru/gallery.php On this project, I installed the modules, as well as developed module with the user interface http://www.watjob.com/

This my last job http://mediaaaa.com/, http://www.vettacapsule.com/dev when the deadline of the project? записать, иногда спрашивают, разрабатывал переводчик апи 
 

- Making any changes to content at any time
- Внесения изменений в содержание в любое время

- Adding content at any time
- Добавление Контента в любое время


===== Пока не знаю пригодиться ли еще

Create a calendar is included in the project or will be developed separately?
Создание календаря включен в проект или будут разработаны отдельно?


 -->

<!-- ============================================================================================================================================= -->
        <?php global $wpdb; ?>

        <div class="row">
            <div class="col-md-6">

                <div class="panel panel-default" style="_display:none"> 
                    <div class='panel-body'>

                        <form action="" method="post" class="_form-horizontal">
                            <fieldset>
                                <!-- Form Name -->
                                <!-- <legend>Внесение данных в таблицу</legend> -->

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="text_rus" for="text_rus">Текст на русском</label>
                                    <textarea class="form-control" id="text_rus" name="text_rus"></textarea>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="text_eng" for="text_eng">Текст на английском</label>
                                    <textarea class="form-control" id="text_eng" name="text_eng"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Select Basic -->
                                        <div class="form-group" >
                                            <label class="category" for="category">Категория</label>
                                            <select id="category" name="category" class="form-control">
                                                <option value="paragraph_1" selected="selected">Абзац 1</option>
                                                <option value="paragraph_2">Абзац 2</option>
                                                <option value="paragraph_3">Абзац 3</option>
                                                <option value="paragraph_4">Абзац 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="subcategory" for="subcategory">Подкатегория</label>
                                            <select id="subcategory" name="subcategory" class="form-control">
                                                <option value="none" selected="selected">Без категории</option>
                                                <option value="question_css">CSS</option>
                                                <option value="question_js">JS</option>
                                                <option value="question_responsive">responsive</option>
                                                <option value="question_woocomerce">WooComerce</option>
                                                <option value="question_design">design</option>
                                                <option value="question_multilanguage">multilanguage</option>
                                                <option value="question_scratch">scratch</option>
                                                <option value="question_theme_avada">theme avada</option>
                                                <option value="question_plugins">plugins</option>
                                                <option value="question_theme">theme</option>
                                                <option value="question_gallery">gallery</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="accuracy" for="accuracy">Точность</label>
                                            <select id="accuracy" name="accuracy" class="form-control">
                                                <option value="not_exactly" selected="selected">Не точно</option>
                                                <option value="i_translated">Я перевел</option>
                                                <option value="accurate">Точный</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <!-- Submit -->
                                <input type="submit" name="my_button" value="Отправить" class="btn btn-default"> 
                            </fieldset>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>

<br><br><br><br><br><br><br><br><br><br>



        <?php
            if( isset( $_POST['my_button'] ) ) {
                $text_rus = $_POST['text_rus'];
                $text_eng = $_POST['text_eng'];
                $category = $_POST['category'];
                $subcateg = $_POST['subcategory'];
                $accuracy = $_POST['accuracy'];
                $wpdb->query( $wpdb->prepare( 
                    'INSERT INTO `wp_upwork_letter`(`text_rus`, `text_eng`, `category`, `subcategory`, `accuracy`) VALUES ("'.$text_rus.'","'.$text_eng.'","'.$category.'", "'.$subcateg.'", "'.$accuracy.'")'
                ));
            }
        ?>

        <div style="display:none;"> 
        <select id="writing-letter" name="state" class="inputbox" size="1">
           <option value="question_common">Общие вопросы</option>
            <option value="question_css">CSS</option>
            <option value="question_js">JS</option>
            <option value="question_responsive">responsive</option>
            <option value="question_woocomerce">WooComerce</option>
            <option value="question_design">design</option>
            <option value="question_multilanguage">multilanguage</option>
            <option value="question_scratch">scratch</option>
            <option value="question_theme_avada">theme avada</option>
            <option value="question_plugins">plugins</option>
            <option value="question_theme">theme</option>
            <option value="question_gallery" selected="selected">gallery</option>
        </select>
        <div class="clear"></div>



        <?php
           $questions = $wpdb->get_results("SELECT * FROM `wp_upwork_script`");
        // print_r($questions);
        ?>

        <?php

        // Вставка из базы данных

        echo '<fieldset class="wrapper-checkbox question_common">';
        echo    '<legend>Общие вопросы</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_common') { 
                echo '<label class="checkbox-style">';
                echo    '<input id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';


        echo '<fieldset class="wrapper-checkbox question_css">';
        echo    '<legend>CSS</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_css') { 
                echo '<label class="checkbox-style">';
                echo    '<input id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';


        echo '<fieldset class="wrapper-checkbox question_js">';
        echo    '<legend>JS</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_js') { 
                echo '<label class="checkbox-style">';
                echo    '<input id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';


        echo '<fieldset class="wrapper-checkbox question_responsive">';
        echo    '<legend>responsive</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_responsive') { 
                echo '<label class="checkbox-style">';
                echo    '<input id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';


        echo '<fieldset class="wrapper-checkbox question_woocomerce">';
        echo    '<legend>WooComerce</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_woocomerce') { 
                echo '<label class="checkbox-style">';
                echo    '<input id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';


        echo '<fieldset class="wrapper-checkbox question_multilanguage">';
        echo    '<legend>multilanguage</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_multilanguage') { 
                echo '<label class="checkbox-style">';
                echo    '<input id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';


        echo '<fieldset class="wrapper-checkbox question_scratch">';
        echo    '<legend>scratch</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_scratch') { 
                echo '<label class="checkbox-style">';
                echo    '<input id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';


        echo '<fieldset class="wrapper-checkbox question_theme_avada">';
        echo    '<legend>theme avada</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_theme_avada') { 
                echo '<label class="checkbox-style">';
                echo    '<input id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';


        echo '<fieldset class="wrapper-checkbox question_plugins">';
        echo    '<legend>plugins</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_plugins') { 
                echo '<label class="checkbox-style">';
                echo    '<input id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';


        echo '<fieldset class="wrapper-checkbox question_theme">';
        echo    '<legend>theme</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_theme') { 
                echo '<label class="checkbox-style">';
                echo    '<input class="checkbox-but" id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';


        echo '<fieldset class="wrapper-checkbox question_gallery">';
        echo    '<legend>gallery</legend>';
        foreach($questions as $key=>$value){
            if ($value->category == 'question_gallery') { 
                echo '<label class="checkbox-style">';
                echo    '<input id="checkbox-'.$value->id.'" type="checkbox" name="checkbox" value="value">'. $value->text_rus .'<br>';
                echo    '<span class="checkbox-en-1">';
                echo        $value->text_eng;
                echo    '</span>';
                echo '</label>';
            };
        }
        echo '</fieldset>';
        ?>








        <div class="work"></div>






        <div class="wrapper-mail">
            
        </div>





        <!-- <input type='checkbox' onchange="document.getElementById('old_name').style.display = this.checked ? 'block' : 'none'" />ранее менялась<br />
        <input type='text' class="old" id="old_name" style="display: none; " />
         -->











        <div class="clear"></div>














                                    <label style="display:none">Входящий код</label>
                                    <textarea  style="display:none" class='incoming-code'>
        <?php
            require 'include_upwork.php';

        // $html = file_get_contents('https://www.upwork.com/jobs/WordPress-developer_~01eaa9158b89b060a1');
        // echo $html;
        ?>







                                    </textarea>
                                    


                                    
                                    <!-- <input type="button" value="trans" onclick="yatr.revert('transl')"/> -->
                                    <!-- <input type="button" value="Парсить" onclick="javascript:f()"/> -->















        This my last job http://mediaaaa.com/, http://www.vettacapsule.com/dev
        when the deadline of the project?



        записать, иногда спрашивают, разрабатывал переводчик апи



        <br><br><br>


        На мой взгляд, самая важная часть поиска работы на oDesk — грамотно написать cover letter. Все в нескольких предложениях необходимо убедить заказчика, что:
        — я справлюсь с заданием;<br>
        — я полностью понимаю ТЗ;<br>
        — со мной легко общаться и взаимодействовать;<br>
        — не будет непредвиденных ситуаций;<br>
        — … можно продолжать очень долго.<br>







</div>
<?php get_footer(); ?>







