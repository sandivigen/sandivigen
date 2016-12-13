<?php get_header(); ?>
<!-- main and sidebar -->
<?php get_sidebar(); ?>
  <main class="col-md-10 bg-content">

    <h1>Конспект Laravel</h1>

    <h2>Установка с нуля</h2>
    Открываем терминал, подключаюсь к ссш
    Выбираю папку сайта в которой лежит public_html
    Устанавливаем composter
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '92102166af5abdb03f49ce52a40591073a7b859a86e8ff13338cf7db58a19f7844fbc0bb79b2773bf30791e935dbd938') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"

    Устанавливаем laravel
    /opt/php5.6/bin/php composer.phar create-project laravel/laravel --prefer-dist


    Вторым путем
    Захожу в пхпшторм, создаю проект ларавел

    Заполняю новый сервер ssh: 
    1) sftp host: ellen.timeweb.ru
    2) username: resume
    3) Mappings->Deployment path on server: /testvp/laravel

    Ставим атозагрузку
    Preferences->Build,Execution,Deployment -> Deployment -> Option
    Upload changed filed... -> Always -> Upload external changes

    Заливаем файлы проекта на сервер

    (уже стоит глобальный) Настройка phpstorm:
    1) artisan: Preferences->Command Line Tools Support
    жмем +, добавляем composer(Chose tool -> composer)(путь к локальнопу php, путь к локальному composer.phar) 
    жмем +, добавляем artisan(Chose tool -> Tool based of symfony console)(alias -> artisan, путь к локальнопу php, путь к локальному arti)
    вводим в консоль 'artisan list' - если все норм получим список(у меня не сработал 'php artisan list') 

    Порядок на сервере
    rm -rf public_html - удоляем папку
    ln -s laravel/public public_html - деалем ссылку на главную страницу

    Включаем версию php 5.6 на сервере

    Главная страница выдает ошибку(дебагер). Генерируем новый ключ
    На сервере сделал
    /opt/php5.6/bin/php artisan key:generate
    и все заработало

    Ставим доктрины
    doctrine/dbal - дописывает классы в файлах
    barryvdh/laravel-ide-helper - пояснения к файлам

    // php artisan key:generate(в моем случае без php)
    // Новый ключ вносим в config/app.php,  'key' => env('APP_KEY', 'insert get 32 char key')
    // И в конфиг .env file


    // были запарки, вот как получилось, это запись генерации по умолчанию, я выполнил ее на сервере
    // APP_KEY=base64:eopuOKk2VZsbmNcc/7JqNcLkww7AoENTqwXONKrx+w0=
    // config/app.php - сдесь нет записи

    

    



    <h2>Урок гостевая книга</h2>

    <h3>Контролеры</h3>
      Команда создаст контролер с заданным именем, в нужной дерекории
      php artisan make:controller MyController
      в нем так же создались дефолтные методы, которые нам пока не нужны

      Создадим пустой конроллер
      php artisan make:controller --help
      эта команды выведет справку по мейк контролеру, из справки увидим, что можно передовать не только имя контролера но и опции
      php artisan make:controller --plain  MyController
      теперь мы видим файл контроллера без методов

    <h3>Роутинг</h3>
      Это своего рода правила, которые мы указываем системе, что ей делать для запрошеного адресса
      Эти правила прописываються в файле /app/Http/routes.php
      По умолчанию внем создано правило для главной страници, состоящие из пути и функции замыкания,
      возвращающий обработанный шаблон представления

      Методы объекта роут соответствуют методам запроса
      Route::get();
      Route::post();
      Route::delete();

      Если нужно прописать одно рпавило для всех запросов то нужно использовать правило эни
      Route::any();

      При создании правила воторым параметром можно так же передовать строку с именем контроллера и метода разделеные @
      Route::get('\', 'HomeController@Index');
      либо массив с параметрами
      Route::get('\', ['uses' => 'HomeController@Index']);
      Ключ uses принимает параметр метода контроллера, следующее правило говорит, что должен отрабатывать метод Index контреллера HomeController
      При передачи массива можно формировать наши правила для дальнейшего удобного доступа к нему.
      Например назавем роутер для главной  - Хоум
      Route::get('\', ['uses' => 'HomeController@Index', 'as' => 'home']);
      После чего выполним команду в консоле: 'php artisan route:list'
      Эта команда выведет все данные позаданным правилам роутенга: методы запросы, пути, названия, экшены... Метод эни учитывает все методы запроса
      Если изменить на get, то это отразиться на метадах запроса(остаються гет и хеад)

      Имя роута можно использовать для получения его url

      class HomeController extends Controller
      {
          public function index()
          {
              return route('home');
          }
      }

      В реальных случаях не кто не возвращает строки, а возвращают результат обработки шаблона
      <h3>Представления</h3>
      Из коробки ларавел потдерживает два типа файлов: обычные пхп файлы, файлы встроеного шаблонезатора  blade

      Route::get('massage/{id}/edit', ['uses' => 'HomeController@edit', 'as' => 'massage.edit']);
      ид в скопках говорит, что это часть пути будет доступна в виде переменной айди, в наем методе.
      В будующем суда будет передаватьс id сообщений


      {!! $pagetitle !!} - отключаем экранирование, выводи html теги
      {-- $pagetitle --} - закоментировать строку
      @{{  скобки не сработают }}


      <h3>Миграции</h3>
      Это система контроля версий, только для баз данных. С развитием проета меняется не только сам код, но
      и за частую структура баз данных, очень важно отслеживать эти изменения и дежать базу в надлежащем состоянии

      artisan make:migration --help
      список доступных команд

      artisan make:migration --create=massages create_massages_table
      создаем базу переданым параметром названия таблицы

      artisan migrate
      запустятся все миграции

      php artisan migrate:reset
      откатывает все миграции

      /opt/php5.6/bin/php artisan make:migration --create=messages --path=database/migrations/messages create_messages_table
      создаем миграцию в вложенной папке

      /opt/php5.6/bin/php artisan migrate --path=database/migrations/messages
      мигрируем только таблицу из папки

      /opt/php5.6/bin/php artisan migrate --path=database/migrations/messages
      добавляем новые поля в таблицу,(для этого создаем миграцию)
      $table->string('email')->after('username');

      /opt/php5.6/bin/php artisan migrate:rollback
      откатить последнюю имиграцию

      для того чтобы переименовывать поля нужен пакет
      composer require doctrine/dbal


      <h3>Модели</h3>
      Отвечает за взаимодействие с дб

      artisan make:model Mymodel
      создание модели

      artisan make:model Mymodel -m
      создание модели и миграции

      artisan make:model Models/Message
      создаст в папке моделс

      /opt/php5.6/bin/php artisan tinker 
      специальная команда. Она позволит выполнять php код в консоле

      use App\Models\Message
      $msg = new Message;
      $msg->name = 'Vasya';
      $msg->email = 'Vasya@mail.ru';
      $msg->message = 'first message';
      $msg->save();
      Message::all()->toArray();

      $m = Message::find(1);
      Получение записи по id
      $m->message = 'Message update';
      $msg->save();
      Изменяем сообщение

      $m->delete();
      для удаления записи


      Еще один способ создовать и обновлять записи, для этого
      в методы криейт и апдейт передается массив
      Message::create(['name' => 'John',  'message' => 'Hi']);
      о умолчанию эта возможность отключена
      добавляем в модель Message: 
      protected $fillable = ['name', 'email', 'message'];

      exit или exit()
      чтобы выйти из данной команды 


      use App\Models\Message;
      в файлк контройлеоа

      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>


  </main>
</div>
<?php get_footer(); ?>






