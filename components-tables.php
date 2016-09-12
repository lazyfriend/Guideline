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
<h1>Таблицы</h1>
<div class="text">
<p>Для представления данных в большинстве случаев на сайте используются таблицы, так как они очень удобны в структурировании больших массивов информации.</p>
<div class="supertable">

<div data-test-id="Payments.PaymentTable.PaymentsTable"><div class="table-wrapper"><table class="table table-hover table table-hover payments-list "><thead><tr><th class="col-checkbox col-checkbox"><div class="checkbox" data-test-id="CheckboxCustom"><input type="checkbox" data-test-id="payments_CheckboxCustom_input" id="id-2-1"><label for="id-2-1" class=""></label></div></th><th class="col-number visible-lg"><span class="table-sorting"><div class="caret-"></div></span><span class="label">№</span></th><th class="col-date"><span class="table-sorting"><div class="caret-"></div></span><span class="label">Дата</span></th><th class="col-payee"><span class="table-sorting"><div class="caret-"></div></span><span class="label">Контрагент</span></th><th class="col-purpose visible-md visible-lg"><span class="table-sorting"><div class="caret-"></div></span><span class="label">Назначение</span></th><th class="col-amount text-right"><span class="table-sorting"><div class="caret-"></div></span><span class="label">Сумма</span></th><th class="col-status"><span class="table-sorting"><div class="caret-"></div></span><span class="label">Статус</span></th></tr></thead><tbody><tr class="payment-item  "><td class="col-checkbox"><div class="checkbox" data-test-id="CheckboxCustom"><input type="checkbox" data-test-id="payments_CheckboxCustom_input" id="id-2-2"><label for="id-2-2" class=""></label></div></td><td class="col-number visible-lg">45</td><td class="col-date"><span>18.02.2016</span></td><td title="222 контрагент
В том числе НДС 18 % - 3.36 рублей."><div class="text-ellipsis">222 контрагент</div><span class="text-muted small"><div class="text-ellipsis"><span title="55555.810.7.33333333333">55555.810.7.33333333333</span></div></span></td><td class="col-purpose visible-md visible-lg"><div data-test-id="Ellipsis">В том числе НДС 18 % - 3.36 рублей.</div></td><td class="col-amount nowrap"><span class="amount">22.00&nbsp;₽</span></td><td class="col-status col-context"><div><div><!-- react-text: 743 -->Частично подписан<!-- /react-text --></div><div class="context-action on-hover-show"><button class="btn btn-square " title="Печать"><i class="icon icon-pdf"></i></button></div></div></td></tr><tr class="payment-item  "><td class="col-checkbox"><div class="checkbox" data-test-id="CheckboxCustom"><input type="checkbox" data-test-id="payments_CheckboxCustom_input" id="id-2-7"><label for="id-2-7" class=""></label></div></td><td class="col-number visible-lg">23</td><td class="col-date"><span>09.02.2016</span></td><td title="222 контрагент
В том числе НДС 18 % - 1.98 рублей. (тест шаблона с налогом сверху)"><div class="text-ellipsis">222 контрагент</div><span class="text-muted small"><div class="text-ellipsis"><span title="55555.810.7.33333333333">55555.810.7.33333333333</span></div></span></td><td class="col-purpose visible-md visible-lg"><div data-test-id="Ellipsis">В том числе НДС 18 % - 1.98 рублей. (тест шаблона с налого...</div></td><td class="col-amount nowrap"><span class="amount">12.98&nbsp;₽</span></td><td class="col-status col-context"><div><div><!-- react-text: 767 -->Частично подписан<!-- /react-text --></div><div class="context-action on-hover-show"><button class="btn btn-square " title="Печать"><i class="icon icon-pdf"></i></button></div></div></td></tr><tr class="payment-item  "><td class="col-checkbox"><div class="checkbox" data-test-id="CheckboxCustom"><input type="checkbox" data-test-id="payments_CheckboxCustom_input" id="id-2-8"><label for="id-2-8" class=""></label></div></td><td class="col-number visible-lg">22</td><td class="col-date"><span>08.02.2016</span></td><td title="ФИРМА Web15
НДС не облагается."><div class="text-ellipsis">ФИРМА Web15</div><span class="text-muted small"><div class="text-ellipsis"><span title="40802.810.4.00004100021">40802.810.4.00004100021</span></div></span></td><td class="col-purpose visible-md visible-lg"><div data-test-id="Ellipsis">НДС не облагается.</div></td><td class="col-amount nowrap"><span class="amount">222.00&nbsp;₽</span></td><td class="col-status col-context"><div><div><!-- react-text: 791 -->Частично подписан<!-- /react-text --></div><div class="context-action on-hover-show"><button class="btn btn-square " title="Печать"><i class="icon icon-pdf"></i></button></div></div></td></tr><tr class="payment-item  "><td class="col-checkbox"><div class="checkbox" data-test-id="CheckboxCustom"><input type="checkbox" data-test-id="payments_CheckboxCustom_input" id="id-2-9"><label for="id-2-9" class=""></label></div></td><td class="col-number visible-lg">21</td><td class="col-date"><span>08.02.2016</span></td><td title="222 контрагент
В том числе НДС 18 % - 32.34 рублей."><div class="text-ellipsis">222 контрагент</div><span class="text-muted small"><div class="text-ellipsis"><span title="55555.810.7.33333333333">55555.810.7.33333333333</span></div></span></td><td class="col-purpose visible-md visible-lg"><div data-test-id="Ellipsis">В том числе НДС 18 % - 32.34 рублей.</div></td><td class="col-amount nowrap"><span class="amount">212.00&nbsp;₽</span></td><td class="col-status col-context"><div><div><!-- react-text: 863 -->Создан<!-- /react-text --></div><div class="context-action on-hover-show"><button class="btn btn-square " title="Удалить"><i class="icon icon-trash"></i></button></div></div></td></tr></tbody></table><div class="table-float-panel hidden table-float-checkbox"><div class="wrap-outer"><div class="col-checkbox pull-left"><div class="checkbox" data-test-id="CheckboxCustom"><input type="checkbox" data-test-id="payments_CheckboxCustom_input" id="id-2-12"><label for="id-2-12" class=""></label></div></div><div class="col-data"><div><strong class="total-count">Выбрано: 0</strong></div></div></div></div></div><div class="pagination-block" data-test-id="Table.Pagination"><div class="items-per-page"><label class="text-muted">Показать на странице:</label><div class="select-custom-wrapper over" data-test-id="SelectCustom"><div data-test-id="payments_selectCustom_divButton" class="button default" tabindex="0"><span><span><!-- react-text: 883 -->10<!-- /react-text --></span></span></div><div data-test-id="payments_SelectCustom_dropDownDiv" class="custom-dropdown hidden"><div><div data-test-id="payments_customselect" title="10" class="item"><!-- react-text: 887 -->10<!-- /react-text --></div><div data-test-id="payments_customselect_1" title="20" class="item"><!-- react-text: 889 -->20<!-- /react-text --></div><div data-test-id="payments_customselect_2" title="30" class="item"><!-- react-text: 891 -->30<!-- /react-text --></div></div></div></div></div><nav class="text-center"><ul class="pagination"><li><a aria-label="Назад" data-test-id="payments_Pagination_link_goToBack" title="Назад" class="icon-box disabled"><span class="arrow-left"></span></a></li><li>1</li><li><a aria-label="Вперёд" data-test-id="payments_Pagination_link_goToForward" title="Вперёд" class="icon-box"><span class="arrow-right"></span></a></li></ul></nav></div></div>


</div>
<p><img src="images/img48.png"></p>
<p><img src="images/img49.png"></p>
<h2>Состояния ячеек</h2>

<div class="textblock">
<h6>Текст. Одна строка.</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">Для контента в строке используется центральное выравнивание по вертикали. Горизонтальное выравнивание по левому краю.</div></div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img41.png">
  </div>

</div></span>
</div>
<div class="textblock">
<h6>Текст. Одна строка.</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">Для контента в строке используется центральное выравнивание по вертикали. Горизонтальное выравнивание по левому краю.</div></div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img41.png">
  </div>

</div></span>
</div>
<div class="textblock">
<h6>Текст. Одна строка.</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">Для контента в строке используется центральное выравнивание по вертикали. Горизонтальное выравнивание по левому краю.</div></div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img41.png">
  </div>

</div></span>
</div>

<h2>Формирование данных в ячейке</h2>
<div class="textblock">
<h6>Текст. Одна строка.</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">Для контента в строке используется центральное выравнивание по вертикали. Горизонтальное выравнивание по левому краю.</div></div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img41.png">
  </div>

</div></span>
</div>

<div class="textblock">
<h6>Текст с доп данными.</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">Для контента в строке используется центральное выравнивание по вертикали. Горизонтальное выравнивание по левому краю.</div></div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img42.png">
  </div>

</div></span>
</div>

<div class="textblock">
<h6>Дата</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">Формат даты всегда цифровой. ДД.ММ.ГГ</div></div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img44.png">
  </div>

</div></span>
</div>

<div class="textblock">
<h6>Денежные значения</h6>
<div class="row">
  <div class="col-sm-6">
    <div class="descr">
        <div class="description">Целые значения сгруппированы по 3 десятка и разделяются пробелом. Дробные отделяются точкой и отображается только 2 цифры.</div></div>
  </div>
  <div class="col-sm-6 buttoncontimg">
  <img src="images/img43.png">
  </div>

</div></span>
</div>

<h2>Заголовки</h2>
<p>Почти все таблицы сделаны в стандартных стилях, с фильтрацией, сортировкой и поиском внутри данных таблицы.</p>

<h2>Адаптивность</h2>
<p><img src="images/img46.png"></p>
<p><img src="images/img47.png"></p>
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
