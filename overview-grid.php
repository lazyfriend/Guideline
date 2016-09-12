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
<h1>Сетка</h1>
<div class="text">
  <p>Базовая сетка реализована квадратными секциями. Минимальный шаг 4px. Для горизонтальной адаптивной верстки применяется 12 колоночная адаптивная сетка</p>
  <img src="images/img01.png">
  <p>Страницы бывают нескольких типов — с версткой в один большой 12-ти колночный блок, с версткой в 2 блока и с версткой в 3 блока</p>
  <div class="gridtriple">
    <div class=""><img src="images/img09.png" alt=""></div>
    <div class=""><img src="images/img10.png" alt=""></div>
    <div class=""><img src="images/img11.png" alt=""></div>
  </div>
  <div class="cl"></div>

  <h2>Верстка страниц с разметкой 3+6+3</h2>
<div class="textblock">
  <div class="row">
  <div class="col-sm-6">
    <img src="images/img19.png">
  </div>
  <div class="col-sm-6">
  <div class="descrright">
  Разметка для страниц создания, редактирования. Первый блок для значения, второй для полей выборки, инпутов, селектов и других элементов.
  </div>
  </div>
  </div>
  </div>

<h2>Верстка страниц с разметкой 8+4</h2>
<div class="textblock">
  <div class="row">
  <div class="col-sm-6">
  <div class="descr">
    Эта верстка используется для страниц некоторых разделов и для внутренних страниц. Основной контент располагается в большом левом восьмиколоночном блоке, а четырехколоночный блок используется для дополнительной информации. В текстовых страницах маленькая колонка используется для статус-трекера.
    </div>
  </div>
  <div class="col-sm-6"><img src="images/img17.png"></div>
  </div>
  </div>

  <h2>Верстка страниц с блоком на всю ширину экрана</h2>
<div class="textblock">
  <div class="row">
  <div class="col-sm-6">
    <img src="images/img18.png">
  </div>
  <div class="col-sm-6 descrright">Эта верстка используется для страниц некоторых разделов. Основной контент располагается в большом левом восьмиколоночном блоке, а левый четырехколоночный блок используется для дополнительной информации. Так же эта разметка есть на текстовых страницах. В этом случае сайдбар используется для статус-трекера.</div>
  </div>
  </div>

<h2>Внутренние модули</h2>
<p>Микромодули. Внешние отступы и внутренние.</p>
<p>Модули второго уровня вложенности</p>

<p>Элементы.</p>
<p>У конечных элементов может присутствовать отступ 8px</p>

<p>Разделитель.</p>
<p>Разделитель имеет внешние отступы, которые учитывают его размер.</p>

  <h2>Отступы</h2>
  <table class="thegridimgtable">
    <tr>
      <td id="thegridimg8"><img width="8px" height="8px" src="images/img02.png"></td>
      <td class="thegridsize">8px</td>
      <td>Минимальный отступ между однородными элементами, связанными между собой внутри одной группы. Доп. отступ параграфа в списках.</td>
    </tr>
    <tr>
      <td id="thegridimg12"><img width="12px" height="12px" src="images/img02.png"></td>
      <td class="thegridsize">12px</td>
      <td>Базовые отступы между элементами или группами, объединенными внтури одного модуля.</td>
    </tr>
    <tr>
      <td id="thegridimg16"><img width="16px" height="16px" src="images/img02.png"></td>
      <td class="thegridsize">16px</td>
      <td>Базовые отступы между элементами или группами, объединенными внтури одного модуля.</td>
    </tr>
    <tr>
      <td id="thegridimg20"><img width="20px" height="20px" src="images/img02.png"></td>
      <td class="thegridsize">20px</td>
      <td>Базовые отступы между элементами или группами, объединенными внтури одного модуля.</td>
    </tr>
    <tr>
      <td id="thegridimg24"><img width="24px" height="24px" src="images/img02.png"></td>
      <td class="thegridsize">24px</td>
      <td>Базовые отступы между элементами или группами, объединенными внтури одного модуля.</td>
    </tr>
  </table>
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
