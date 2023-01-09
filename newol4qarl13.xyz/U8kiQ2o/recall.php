<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="./global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
<link href="./global_assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
<!-- /global stylesheets -->

<!-- Core JS files -->
<script src="./global_assets/js/main/jquery.min.js"></script>
<script src="./global_assets/js/main/bootstrap.bundle.min.js"></script>
<script src="./global_assets/js/plugins/loaders/blockui.min.js"></script>
<script src="./global_assets/js/plugins/ui/slinky.min.js"></script>
<script src="./global_assets/js/plugins/ui/fab.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="./global_assets/js/plugins/notifications/pnotify.min.js"></script>
<script src="./global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script src="./global_assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="./global_assets/js/plugins/forms/validation/validate.min.js"></script>
<script src="./global_assets/js/plugins/visualization/d3/d3.min.js"></script>
<script src="./global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
<script src="./global_assets/js/plugins/forms/styling/switchery.min.js"></script>
<script src="./global_assets/js/plugins/ui/moment/moment.min.js"></script>
<script src="./global_assets/js/plugins/pickers/daterangepicker.js"></script>

<script src="assets/js/app.js"></script>
<script src="./global_assets/js/demo_pages/datatables_sorting.js"></script>
<script src="./global_assets/js/demo_pages/components_modals.js"></script>
<script src="./global_assets/js/demo_pages/extra_pnotify.js"></script>
<script src="./global_assets/js/demo_pages/form_select2.js"></script>
<script src="./global_assets/js/demo_pages/datatables_basic.js"></script>
<script src="./global_assets/js/demo_pages/form_validation.js"></script>
<script src="./global_assets/js/demo_pages/dashboard.js"></script>
<script src="./global_assets/js/demo_charts/pages/dashboard/dark/streamgraph.js"></script>
<script src="./global_assets/js/demo_charts/pages/dashboard/dark/sparklines.js"></script>
<script src="./global_assets/js/demo_charts/pages/dashboard/dark/lines.js"></script>
<script src="./global_assets/js/demo_charts/pages/dashboard/dark/areas.js"></script>
<script src="./global_assets/js/demo_charts/pages/dashboard/dark/donuts.js"></script>
<script src="./global_assets/js/demo_charts/pages/dashboard/dark/bars.js"></script>
<script src="./global_assets/js/demo_charts/pages/dashboard/dark/progress.js"></script>
<script src="./global_assets/js/demo_charts/pages/dashboard/dark/heatmaps.js"></script>
<script src="./global_assets/js/demo_charts/pages/dashboard/dark/pies.js"></script>
<script src="./global_assets/js/demo_charts/pages/dashboard/dark/bullets.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>CRM - Перезвон</title>

    <!-- Global stylesheets -->
    
    <!-- /theme JS files -->

</head>

<body>

<!-- Page header -->
<!-- Page header -->
<div class="page-header page-header-light shadow">

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-light">
        <div class="navbar-brand wmin-0 mr-5">
            <a href="user.php" class="d-inline-block">
                <img src="./global_assets/images/logo_light2.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">



            <ul class="navbar-nav ml-md-auto">

                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                        <img src="./global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" style="width:34px;height:34px;" alt="">
                        <span>Боря (Мамба) </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="./userhistory.php" class="dropdown-item"><i class="icon-user"></i>История</a>
                        <a href="./usertests.php" class="dropdown-item"><i class="fas fa-tasks"></i>Тесты</a>
                        <a href="userscripts.php" class="dropdown-item"><i class="icon-book-play"></i>Мои скрипты</a>
                        <div class="dropdown-divider"></div>
                          <form action="index.php" name="quit" id="quit" method="post">
                        <button type="submit" name="quit" id="quit" value="NULL" class="dropdown-item"><i class="icon-switch2"></i> Выход</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


</div>
<!-- /page header -->
<!-- /Page header -->



<!-- Page content -->
<div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content area -->
        <div class="content">

            <div class="row">
                <!--Карточка клиента-->
                <div class="col-xl-12">
                    <!--Ряд с кнопками статусов-->
                                        <form  method="post" name = "applystatus" id = "applystatus">
                    <div class="row" style="justify-content: flex-end">
                    <div class="list-icons" name="statuses" style="margin: 1%">
                        <div>
                            <button type="submit" name="Status" value = "2" class="btn bg-danger-300"><i class="icon-phone-slash"></i> Не дозвон</button>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "5" class="btn bg-grey-300"><i class="icon-air"></i> Бомж</button>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "7" class="btn bg-warning-300"><i class="icon-glasses-3d2"></i> Дракон</button>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "6" class="btn bg-grey-300"><i class="icon-anchor"></i> Срез</button>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "3" class="btn bg-grey-300"><i class="icon-trash"></i> Удалить</button>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "4" class="btn bg-grey-300"><i class="icon-trash"></i> Не существует</button>
                        </div>
                        <div>
                            <a href="#" class="btn bg-info-300" data-toggle="modal" data-target="#perezvon"><i class="icon-sort-time-asc"></i> Перезвон</a>
                                    <div class="modal fade" id="perezvon" tabindex="-1" role="basic" aria-hidden="true">
                                            <div class="modal-dialog modal-wide" style="width:80% !important">
                                                <div class="modal-content">
                                                    <div class="modal-body" style="padding:5%;font-size: 18px;text-align:left;">
                                                        <div class="input-group date mt-4" id="kt_datetimepicker_10" data-target-input="nearest">
                                                            <input name="recall_datetime" type="datetime-local" class="form-control datetimepicker-input" value="2022-11-09T09:50" required>
                                                        </div>
                                        
                                                        <p style="text-align: center">
                                                            <button type="submit" name="Status" value = "8" class="btn btn-success mt-4 "><i class="fa fa-save"></i> Установить перезвон</button>
                                                        </p>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        <div>
                            <a href="#" class="btn bg-info-300" data-toggle="modal" data-target="#peredal"><i class="icon-point-right"></i> Передать</a>
                                    <div class="modal fade" id="peredal" tabindex="-1" role="basic" aria-hidden="true">
                                            <div class="modal-dialog modal-wide" style="width:80% !important">
                                                <div class="modal-content">
                                                    <div class="modal-body" style="padding:5%;font-size: 18px;text-align:left;">
                                                        <span>Выберите менеджера для передачи контакта</span>
                                                        <div class="input-group date mt-4" id="kt_datetimepicker_10" data-target-input="nearest">
                                                                <select class="form-control" id = "selectUsers" name="selectUsers" required>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="3">Настя Новик</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="4">Вероничка</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="5">Саня Новик</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="6">Максюша</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="9">Пшеничка</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="12">Богдан</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="16">САМЫЙ БЛАТНОЙ СПЕЦИАЛИСТ</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="34">ДаниилOFF</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="36">Мариновка</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="37">Богдан</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="40">Дима Марик</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="41">Даня</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="43">Спасибочки</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="44">Топ на офисе</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="45">ДАниссимо</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="47">Тот кто передал трубку</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="49">Лёха Ваня</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="50">Тигр</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="51">Игорь Б</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="52">Саня Миш</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="53">Ростик Малой</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="54">Серёга Малой</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="55">Радик Миш</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="56">Даша Миш</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="57">Дядя Лёха</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="58">Макс Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="59">Димон Ваня</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="60">Алина Никополь</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="61">Даша Марик</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="62">111</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="64">Игорь Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="65">Стас Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="66">Макс Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="67">Дима Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="68">Саня Македон</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="69">Новый Тигр</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="70">Влад Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="71">Андрей Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="72">Инна</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="73">Коля Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="74">Дым</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="75">Настя Новая</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="76">Ваня Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="77">Влад Новенький</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="78">Альберт</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="79">СТРИПТИЗЁР</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="80">Марк</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="81">Вова Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="82">Алина Миша</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="83">Максим Раут</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="84">Славик Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="85">Серёга Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="86">Влад Ваня</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="87">Марина Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="88">Юра Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="89">Денис Серёга</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="90">Виталик Харьков</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="93">Денис Серёга</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="94">Вика Север</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="95">Моргенштерн</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="96">Купидон </option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="97">Гроза Айтишников</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="98">Валя Карнавал</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="99">Айти</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="100">Никита (С)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="101">Давид </option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="102">Лиза</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="103">Павлоград 1</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="104">Павлоград 2</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="105">Павлоград 3</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="106">Аня</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="107">Артём Ваня</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="108">Ростиииииииик (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="109">Аня (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="110">Вика Павлоград</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="111">Маша </option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="112">Жека (В)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="113">Володя (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="114">Паша (В)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="115">Никита (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="116">Лёха Новый</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="117">Саша Черкасс (В)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="118">Влад Винница</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="119">Ярослава Винница</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="120">Серёга Кривбасс</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="121">Полино4ка</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="122">Саша Киев</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="123">Вова Арт</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="124">Никита Запорожье</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="125">Серёга Донецк</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="126">Лёха Днепр</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="127">Саня Лиса</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="128"> Тёма (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="129">Арс</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="130">Олег </option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="131">Дима (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="132">Жека Запорожье</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="133">Катя(АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="134">Артём (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="135">Денис Харьков</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="136">Мутный (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="137">Тёма (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="138">Илюха</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="139">Сабина (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="140">Ангелина</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="141">Саня (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="142">Влад Павлоград (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="143">Валера Винница</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="144">Кирилл Донецк</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="145">Влада Север</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="146">Керя Запорожье</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="147">Диана Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="148">Ююра Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="149">Игорь Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="150">Лера Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="151">Марийка</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="152">Людмила (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="153">Саня Запорожье</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="154">Жека Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="155">Люда (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="156">Диана (С)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="157">Соломийка</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="158">Алина (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="159">Дима Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="160">Керя Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="161">Катя Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="162">Гость из будущего</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="163">Александра Запорожье</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="164">Русик Казах</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="165">Маша Влад</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="166">Юрец Львовец</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="167">Назар Львов</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="168">Ярослав Кривой Рог</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="169">Олег Львов</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="170">Саня Запорожье</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="171">Максим Павлоград (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="172">Никита Бодя</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="173">Дима Павлоград (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="174">Паша Запорожье</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="175">Иро4ка</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="176">Вася Павлоград</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="177">Дима Соледар</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="178">Андрей Синельниково</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="179">Денис Горловка</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="180">Адриан (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="181">Егор Запорожье (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="182">Никита Запорожье (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="183">Ростик ДНР</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="184">Влад ЗП</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="185">Рома Чернигов</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="186">Коля Ник</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="187">Вова Днепр (АРТ)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="188">Даня Павлоград</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="189">Максим Топ</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="190">Рома Павлоград</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="191">Тоха(Д)</option>
                                                                                                                                    </select>
                                                            </div>
                                        
                                                        <p style="text-align: center">
                                                            <button type="submit" name="Status" value = "9" class="btn btn-success mt-4 "><i class="fa fa-save"></i> Передать контакт</button>
                                                            </input>
                                                        </p>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "1" class="btn bg-success-300"><i class="fab fa-btc"></i> Списали</button>
                        </div>
                    </div>
                    
                    </div>
                                        <!--/Ряд с кнопками статусов-->
                    <div class="row mt-2">
                                                <div class="col-md-6 col-xs-12">
                            <a href="#" class="btn bg-info-300"><i class="icon-sort-time-asc"></i> Перезвон запланирован на 2022-10-08 10:00</a>
                            <h2 class="form-section" id="name">Никишина Вера Прокопьевна </h2>
                            <small class="text-muted" style="margin-top: -5px;display: block;"></small>

                            <div class="form-group row ">
                                <label class="col-2 col-form-label text-muted">Телефон</label>
                                <label class="col-10">
                                    <h6 id="phoneclient">79160563579</h6>
                                </label>
                            </div>

                            <div class="form-group row" style="margin-top: -15px;">
                                <label class="col-2 col-form-label text-muted">Город</label>
                                <label class="col-10">
                                    <h6 id="phoneclient">Москва </h6>
                                </label>
                            </div>
                            <div class="form-group row" style="margin-top: -15px;">
                                <label class="col-2 col-form-label text-muted">Адрес</label>
                                <label class="col-10">
                                    <h6 class="form-control-static"> ул Барышиха 38 кв30  </h6>
                                </label>
                            </div>

                            <div class="form-group row" style="margin-top: -15px;">
                                <label class="col-2 col-form-label text-muted">Часовой пояс</label>
                                <label class="col-10">
                                    <small class="form-control-static">  </small>
                                </label>
                            </div>

                            <div class="form-group row" style="margin-top: -15px;">
                                <label class="col-2 col-form-label text-muted">Возраст</label>
                                <label class="col-10">
                                    <h6 class="form-control-static">  </h6>
                                </label>
                            </div>

                            <div class="form-group row" style="margin-top: -15px;">
                                <label class="col-2 col-form-label text-muted">
                                    <h6>Доп. поля</h6>
                                </label>
                                <label class="col-10">
                                    <h6 class="form-control-static">  </h6>
                                    <h6 class="form-control-static">  </h6>
                                    <h6 class="form-control-static">  </h6>
                                </label>
                            </div>

                            <p style="font-size:14px;margin-top:15px">
                                <a href="https://www.tinkoff.ru/cardtocard/" target="_blank">Проверить карту</a> / <a href="https://www.tinkoff.ru/maps/payment/?partner=TINKOFF%2CMTS%2CPOCHTA_BANK" target="_blank">Тиньков</a> /
                                <a href="https://www.sberbank.ru/ru/about/today/oib?itt&amp;CASHIN" target="_blank">СберБанк</a> / <a href="https://bankohelp.ru/atms/" target="_blank">BankoHelp</a> / <a href="http://card2.ru/bank_po_karte/" target="_blank">BinCard</a>
                            </p>


                        </div>
                        <div class="col-md-6 col-xs-12">
                            
                            <div class="form-group">
                        <textarea class="form-control" rows="20"  name = "dopinfo" id = "dopinfo">Имя в СДЭК: Никишина Вера Прокопьевна
79160563579

бабулька

Говорит, практические не слышу Вас</textarea>
                            </div>
                            <div style="text-align: center;margin-top: 20px">
                                <button type="submit" id="dopinfosave" name="dopinfosave" class="btn btn-success "><i class="fa fa-save"></i> Сохранить</button>
                                <a href="./userselectdocument.php?client=%D0%9D%D0%B8%D0%BA%D0%B8%D1%88%D0%B8%D0%BD%D0%B0%20%D0%92%D0%B5%D1%80%D0%B0%20%D0%9F%D1%80%D0%BE%D0%BA%D0%BE%D0%BF%D1%8C%D0%B5%D0%B2%D0%BD%D0%B0%20" target="_blank"  class="btn bg-info-300"><i class="icon-profile mr-2"></i> Сгенерировать документ</a>
                            </div>

            </form>


                        </div>
                    </div>
                                           <!--/Ряд с инфой о клиенте-->
                </div>
                <!--/Карточка клиента-->

            </div>
        </div>
        <!-- /content area -->
    </div>
    <!-- /main content -->
</div>
<!-- /page content -->

</body>
</html>
