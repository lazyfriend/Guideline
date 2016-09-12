<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Гайдлайны Сбербанк Бизнес Онлайн</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,900italic,700italic,900,700,500,500italic&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav role="navigation" class="menu">
  <header role="banner">
    <div id="logo">
      <a href="/" title="Swift.org" role="img" aria-label="Swift.org">
        <img src="images/logo.svg">
      </a>
    </div>
  </header>

<?
include('menu.html');
?>

<div class="page">
<h1>Типографика</h1>
<!-- <div class="headimg"><img src="images/img03.png"></div> -->
<div class="text">
    <p>Основной шрифт в проекте Roboto в двух начертаниях Regular и Medium. Все отступы и высоты строк кратны базовой сетке 4px. Позиционирование внутри текстовых блоков строится на базе высоты строки.</p>
    <h2>Базовый стиль и размеры</h2>
      <div class="textblock">
        <h6>Наборный текст в параграфах и всех основных записях.</h6>
        <p>font-size-base</p>
        <img width="670px" src="images/basetext.png">
    </div>
    <div class="textblock">
    <h6>Важная информация и выноски.</h6>
      <div class="row">
        <div class="col-sm-6">
          <div class="descr">
            <p>font-size-large</p>
            <ul class="code">
              <li>Roboto Regular</li>
              <li>font-size: 16px;</li>
              <li>line-height: 24px</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6"><img width="300px" src="images/font-size-large.png"></div>
      </div>
    </div>

    <div class="textblock">
        <h6>Поясняющие надписи в таблице, тексты ошибок под полями ввода и др.</h6>
      <div class="row">
        <div class="col-sm-6">
          <div class="descr">
            <p>font-size-small</p>
            <ul class="code">
              <li>Roboto Regular</li>
              <li>font-size: 12px;</li>
              <li>line-height: 16px</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6"><img width="300px" src="images/font-size-small.png"></div>
      </div>
    </div>

    <div class="textblock">
    <h6>Нестандартное значение суммы (до 16 знаков) в таблице, дата новостей.</h6>
      <div class="row">
        <div class="col-sm-6">
          <div class="descr">
            <p>font-size-smaller</p>
            <ul class="code">
              <li>Roboto Regular</li>
              <li>font-size: 11px;</li>
              <li>line-height: 16px</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6"><img width="300px" src="images/font-size-smaller.png"></div>
      </div>
    </div>

    <div class="textblock">
    <h6>Текстовый блок с пояснением</h6>
      <div class="row">
        <div class="col-sm-6 ">
          <div class="descr">
            <p>Существуют комплексные текстовые блоки из базового и поясняющего текста. Они используются в таблицах или списках.</p>
          </div>
        </div>
        <div class="col-sm-6"><img width="300px" src="images/2text.png"></div>
      </div>
    </div>

  </div>

  <div class="text">
    <h2>Отступы и списки</h2>

    <div class="textblock">
    <p>Самый частоиспользуемый заголовок – заголовок первого уровня. Его можно увидеть почти на всех внтуренних страницах, на страницах создания, редактирования и просмотра форм или на обычных текстовых.</p>
      <div class="row">
        <div class="col-sm-6">
          <div class="descr">
            <ul class="code">
              <li>Roboto Regular</li>
              <li>font-size: 24px;</li>
              <li>text-transform: uppercase;</li>
              <li>line-height: 1.4 <span class="comment">(33,4px)</span></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 h1template"><span class="smcode">&lt;h1&gt;</span>Заголовок<span class="smcode">&lt;/h1&gt;</span></div>
      </div>
    </div>

  <div class="textblock">
  <p>Заголовки виджетов на главной странице, второстепенные заголовки.</p>
  <div class="row">
  <div class="col-sm-6"><div class="descr">
    <ul class="code">
      <li>Roboto Regular</li>
      <li>font-size: 20px;</li>
      <li>text-transform: uppercase;</li>
      <li>line-height: 1.4 <span class="comment">(28px)</span></li>
    </ul>
    </div>
    </div>
  <div class="col-sm-6 h2template">
    <span class="smcode">&lt;h2&gt;</span>Заголовок<span class="smcode">&lt;/h2&gt;</span>
  </div>
  </div>
  </div>

  <div class="textblock">
 <p>Заголовки виджетов на главной странице.</p>
  <div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
      <li>Roboto Regular</li>
      <li>font-size: 16px;</li>
      <li>text-transform: uppercase;</li>
      <li>line-height: 1.4 <span class="comment">(22,4px)</span></li>
    </ul>
    </div>
  </div>
  <div class="col-sm-6 h3template"><span class="smcode">&lt;h3&gt;</span>Заголовок<span class="smcode">&lt;/h3&gt;</span>
  </div>
  </div>
  </div>


<div class="textblock">
<p>Заголовки внутренних модулей. Трекер, связанный блок в детальной странице документа.</p>
  <div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
      <li>Roboto Regular</li>
      <li>font-size: 16px;</li>
      <li>text-transform: uppercase;</li>
      <li>line-height: 1.4 <span class="comment">(24px)</span></li>
    </ul>
    </div>
  </div>
  <div class="col-sm-6 h4template"><span class="smcode">&lt;h4&gt;</span>Заголовок<span class="smcode">&lt;/h4&gt;</span>
  </div>
  </div>
  </div>

<div class="textblock">
<p>Заголовки модальных окон, таблицы.</p>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
      <li>Roboto Regular</li>
      <li>font-size: 14px;</li>
      <li>text-transform: uppercase;</li>
      <li>line-height: 1.4 <span class="comment">(20px)</span></li>
    </ul>
    </div>
  </div>
  <div class="col-sm-6 h5template"><span class="smcode">&lt;h5&gt;</span>Заголовок<span class="smcode">&lt;/h5&gt;</span>
  </div>
  </div>
  </div>

<div class="textblock">
        <p>Заголовки серого цвета в малых блоках. Связанный док. предпросмотр таблицы, страница подписания документов, статус документов, статус документа в нижней части окна.</p>

<div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
      <li>Roboto Regular</li>
      <li>font-size: 12px;</li>
      <li>text-transform: uppercase;</li>
      <li>line-height: 1.4 <span class="comment">(16px)</span></li>
    </ul>
    </div>
  </div>
  <div class="col-sm-6 h6template"><span class="smcode">&lt;h6&gt;</span>Заголовок<span class="smcode">&lt;/h6&gt;</span>
  </div>
  </div>
  </div>

</div>





  <div class="text">
    <h2>Отступы и списки</h2>

    <div class="textblock">
      <div class="row">
        <div class="col-sm-6 ">
          <div class="descr">
            <p>Отступ между параграфами и сложными текстовыми блоками равен 16px.
          </div>
        </div>
        <div class="col-sm-6">
          <img width="406px" src="images/paragraph.png">
        </div>
      </div>
    </div>

    <div class="textblock">
      <div class="row">
        <div class="col-sm-6 ">
          <div class="descr">
            <p>Отступ между элементами в списках равен 8px.
          </div>
        </div>
        <div class="col-sm-6">
          <img width="406px" src="images/list1.png">
        </div>
      </div>
    </div>

    <div class="textblock">
      <div class="row">
        <div class="col-sm-6">
          <div class="descr">
            <p>Текстовые блоки списков в формах, заявлениях и выписках как правило состоят из двух столбцов Базовый отступ в них равен 8px.</p>
            <ul class="code">
              <li>Пример: Реквизиты плательщика и получателя в детальной странице платежа.</li>
            </ul>
            <p>В особых случаях, когда важна высота модуля, допускается использование отступа 4px.</p>
            <ul class="code">
              <li>Пример: Данные в форме быстрого просмотра платежки из списка документов.</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <img width="406px" src="images/list2.png">
        </div>
      </div>
    </div>






</div>
<div class="copyright">
  <p>Гайдлайн сделан командой IBM.</p>
  <p>Все UI элементы были использованы для примера.</p>
</div>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  </body>
</html>
