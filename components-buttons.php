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
    <link href="css/iconfont.css" rel="stylesheet">
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
<h1>Кнопки</h1>
<div class="text">
  <p>Для совершения действий на сайте используются кнопки определенных классов и стилей.</p>
  <p>Использовать кнопку или ссылку для перехода на новую страницу или совершения какого-либо действия должно происходить из соответствия общего стиля и внешнего вида.</p>

<h2>Типы действия</h2>
<p>В зависимости от типов действий используются разные кнопки. Для редактирования форм, для подтверждения и создания новых документов используются зеленые кнопки "Success", для какого-либо нового действия используются ораньжевые "Warning", для отмен и прочих действий используются "Default".</p>
<div class="row">
<div class="col-sm-4 btns"><span class="commenticon">.btn-success</span><div class="uiexample"><button class="btn btn-success">Кнопка</button></div></div>
<div class="col-sm-4 btns"><span class="commenticon">.btn-default</span><div class="uiexample"><button class="btn btn-default">Кнопка</button></div></div>
<div class="col-sm-4 btns"><span class="commenticon">.btn-warning</span><div class="uiexample"><button class="btn btn-warning">Кнопка</button></div></div>
</div>

<h2>Размеры</h2>
<p>Для большинства кнопок изспользуется стандартные средние размеры и отступы "Middle", но кроме таких кнопок бывают еще Small и Large. Есть еще кнопки тянущиеся на всю ширину блока.</p>
<div id="buttonsimg"><span class="commenticon rose">.btn</span><img src="images/img31.png"></div>
<p>Маленькие кнопки используются в формах быстрого просмотра</p>
<div id="buttonsimg"><span class="commenticon rose">.btn-sm</span><img src="images/img40.png"></div>
<p>Большие при редактировании и создании форм.</p>
<div id="buttonsimg"><span class="commenticon rose">.btn-lg</span><img src="images/img39.png"></div>

<h2>Состояния</h2>
<p>Так же кнопки могут быть в разных состояниях – когда кнопка активна, неактивна или нажата и совершается какой-нибудь процесс на стороне сервера.</p>
<div class="row">
<div class="col-sm-4 btns"><span class="commenticon">Активная</span><div class="uiexample"><button class="btn btn-warning">Кнопка</button></div></div>
<div class="col-sm-4 btns"><span class="commenticon">Неактивная</span><div class="uiexample"><button class="btn btn-warning disabled">Кнопка</button></div></div>
<div class="col-sm-4 btns"><span class="commenticon">Загрузка</span><div class="uiexample"><button class="btn btn-warning disabled"><span>Кнопка</span><i class="icon icon-spinner icon-middle"></i></button></div></div>
</div>


<h2>Типы кнопок</h2>
<div class="textblock">
<h6>1. Просто кнопка</h6>
  <div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
        <li>medium button</li>
        <li>class .btn-success</li>
        <li>background #4ea31e</li>
    </ul>
    </div>
  </div>
  <div class="col-sm-6 buttoncont"><div class="uiexample"><button class="btn btn-md btn-success">Кнопка</button></div></div></span>
  </div>
  </div>



<div class="textblock">
<h6>2. Кнопки с выпадающими списками</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
        <li>medium button</li>
        <li>class .btn-group.open .dropdown-toggle</li>
        <li>background #fafafa</li>
        <li>border #fafafa</li>
    </ul>
    </div>
  </div>
  <div class="col-sm-6 buttoncont">
    <div class="uiexample">
    <div class="open dropdown btn-group" open=""><button class="dropdown-toggle dropdown-new-payment btn btn-default" id="bg-nested-dropdown" role="button" aria-haspopup="true" aria-expanded="true" type="button" open=""><!-- react-text: 1149 -->Новый платёж<!-- /react-text --><span><!-- react-text: 1151 --> <!-- /react-text --><span class="caret"></span></span></button><ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="bg-nested-dropdown"><li role="presentation" class=""><a role="menuitem" href="" tabindex="-1">Контрагенту</a></li><li role="presentation" class=""><a role="menuitem" href="" tabindex="-1">В бюджет</a></li><li role="presentation" class=""><a role="menuitem" href="" tabindex="-1">Платёжное требование</a></li></ul></div></span>
    </div>
  </div></div></div>

<div class="textblock">
<h6>3. Кнопки-ссылки</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
        <li>medium button</li>
        <li>class .btn-link</li>
    </ul>
    </div>
  </div>
  <div class="col-sm-6 buttoncont">
    <div class="uiexample">
        <a class="btn btn-link" href="">Кнопка</a>
    </div>
  </div></div></div>

<div class="textblock">
<h6>4. Кнопки с иконками</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
        <li>icon button</li>
        <li>class .actions .icon</li>
        <li>font-size: 20px</li>
    </ul>
    </div>
  </div>
  <div class="col-sm-6 buttoncont">
    <div class="uiexample">
    <div class="actions"><i title="Скопировать" class="icon icon-copy"></i><i title="Печать" class="icon icon-pdf"></i><i title="Проверить подпись" class="icon icon-document-success"></i></div>    </div>
  </div></div></div>


<div class="textblock">
<h6>5. Кнопки редактированния форм</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
        <li>large button</li>
        <li>class .btn-lg</li>
    </ul>
    </div>
  </div>
  <div class="col-sm-6 buttoncont">
      <div class="uiexample">
<div class="form-actions"><button class="btn btn-default btn-lg" type="button">Отмена</button><button class="btn btn-success btn-lg" type="button"><span>Создать</span></button></div>      </div></span>
  </div>
  </div></div>

<div class="textblock">
  <h6>6. Кнопки быстрого просмотра в таблицах</h6>
  <div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
        <li>small button</li>
        <li>class .btn-sm</li>
    </ul>
    </div>
  </div>
  <div class="col-sm-6 buttoncont">
    <div class="uiexample">
        <div class="btn-list" data-reactid=".0.0.0.6.4.0.0.0.1.$0_fastView.0.0.$=10.2">
            <span data-reactid=".0.0.0.6.4.0.0.0.1.$0_fastView.0.0.$=10.2.0" data-test-id="CounterpartySign"><button class="btn btn-sm btn-success">Подписать</button></span>
            <span class="counterparty-create-wrapper"><button class="btn btn-sm btn-default">Изменить</button></span>
            <span><button class="btn btn-sm btn-default">Удалить</button></span>
        </div>
    </div>
</div>
  </div>
  </div>

<div class="textblock">
<h6>7. Кнопки в модалках</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
    <ul class="code">
        <li>large button</li>
        <li>class .btn-lg .btn-block</li>
    </ul>
  </div></div>
  <div class="col-sm-6 buttoncont">
    <div class="largecont">
  <button class="btn btn-lg btn-block btn-danger">Покинуть страницу</button><button class="btn btn-lg btn-block btn-default">Продолжить редактирование</button></div>
  </div></div>

</div></span>
</div>

<h2>Использование кнопок</h2>

<div class="textblock">
<h6>В панели быстрого действия просмотра</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">При переходе Вы потеряете несохраненные данные. Подтвердите переход на другую страницу.</div></div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img33.png">
  </div>

</div></span>
</div>


<div class="textblock">
<h6>В странице создания/редактировании</h6>
<div class="row">
  <div class="col-sm-6">
   <div class="descr">
        <div class="description">При переходе Вы потеряете несохраненные данные. Подтвердите переход на другую страницу.</div>
  </div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img36.png">
  </div>

</div></span>
</div>

<div class="textblock">
<h6>В заголовке</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">При переходе Вы потеряете несохраненные данные. Подтвердите переход на другую страницу.</div>
    </div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img34.png">
  </div>

</div></span>
</div>

<div class="textblock">
<h6>В модалках</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">При переходе Вы потеряете несохраненные данные. Подтвердите переход на другую страницу.</div>
  </div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img37.png">
  </div>

</div></span>
</div>

<div class="textblock">
<h6>В трекере</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">При переходе Вы потеряете несохраненные данные. Подтвердите переход на другую страницу.</div>
  </div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img35.png">
  </div>

</div></span>
</div>

<div class="textblock">
<h6>В окнах подвтерждения</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">При переходе Вы потеряете несохраненные данные. Подтвердите переход на другую страницу.</div>
  </div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img38.png">

  </div>

</div></span>
</div>


<div class="copyright">
  <p>Гайдлайн сделан командой IBM.</p>
  <p>Все UI элементы были использованы для примера.</p>
</div>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/script1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  </body>
</html>
