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
    <title>CRM - ????????????????</title>

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
                        <span>???????? (??????????) </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="./userhistory.php" class="dropdown-item"><i class="icon-user"></i>??????????????</a>
                        <a href="./usertests.php" class="dropdown-item"><i class="fas fa-tasks"></i>??????????</a>
                        <a href="userscripts.php" class="dropdown-item"><i class="icon-book-play"></i>?????? ??????????????</a>
                        <div class="dropdown-divider"></div>
                          <form action="index.php" name="quit" id="quit" method="post">
                        <button type="submit" name="quit" id="quit" value="NULL" class="dropdown-item"><i class="icon-switch2"></i> ??????????</button>
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
                <!--???????????????? ??????????????-->
                <div class="col-xl-12">
                    <!--?????? ?? ???????????????? ????????????????-->
                                        <form  method="post" name = "applystatus" id = "applystatus">
                    <div class="row" style="justify-content: flex-end">
                    <div class="list-icons" name="statuses" style="margin: 1%">
                        <div>
                            <button type="submit" name="Status" value = "2" class="btn bg-danger-300"><i class="icon-phone-slash"></i> ???? ????????????</button>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "5" class="btn bg-grey-300"><i class="icon-air"></i> ????????</button>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "7" class="btn bg-warning-300"><i class="icon-glasses-3d2"></i> ????????????</button>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "6" class="btn bg-grey-300"><i class="icon-anchor"></i> ????????</button>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "3" class="btn bg-grey-300"><i class="icon-trash"></i> ??????????????</button>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "4" class="btn bg-grey-300"><i class="icon-trash"></i> ???? ????????????????????</button>
                        </div>
                        <div>
                            <a href="#" class="btn bg-info-300" data-toggle="modal" data-target="#perezvon"><i class="icon-sort-time-asc"></i> ????????????????</a>
                                    <div class="modal fade" id="perezvon" tabindex="-1" role="basic" aria-hidden="true">
                                            <div class="modal-dialog modal-wide" style="width:80% !important">
                                                <div class="modal-content">
                                                    <div class="modal-body" style="padding:5%;font-size: 18px;text-align:left;">
                                                        <div class="input-group date mt-4" id="kt_datetimepicker_10" data-target-input="nearest">
                                                            <input name="recall_datetime" type="datetime-local" class="form-control datetimepicker-input" value="2022-11-09T09:50" required>
                                                        </div>
                                        
                                                        <p style="text-align: center">
                                                            <button type="submit" name="Status" value = "8" class="btn btn-success mt-4 "><i class="fa fa-save"></i> ???????????????????? ????????????????</button>
                                                        </p>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        <div>
                            <a href="#" class="btn bg-info-300" data-toggle="modal" data-target="#peredal"><i class="icon-point-right"></i> ????????????????</a>
                                    <div class="modal fade" id="peredal" tabindex="-1" role="basic" aria-hidden="true">
                                            <div class="modal-dialog modal-wide" style="width:80% !important">
                                                <div class="modal-content">
                                                    <div class="modal-body" style="padding:5%;font-size: 18px;text-align:left;">
                                                        <span>???????????????? ?????????????????? ?????? ???????????????? ????????????????</span>
                                                        <div class="input-group date mt-4" id="kt_datetimepicker_10" data-target-input="nearest">
                                                                <select class="form-control" id = "selectUsers" name="selectUsers" required>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="3">?????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="4">??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="5">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="6">??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="9">????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="12">????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="16">?????????? ?????????????? ????????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="34">????????????OFF</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="36">??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="37">????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="40">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="41">????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="43">????????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="44">?????? ???? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="45">??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="47">?????? ?????? ?????????????? ????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="49">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="50">????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="51">?????????? ??</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="52">???????? ??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="53">???????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="54">???????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="55">?????????? ??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="56">???????? ??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="57">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="58">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="59">?????????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="60">?????????? ????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="61">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="62">111</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="64">?????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="65">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="66">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="67">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="68">???????? ??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="69">?????????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="70">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="71">???????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="72">????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="73">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="74">??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="75">?????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="76">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="77">???????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="78">??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="79">????????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="80">????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="81">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="82">?????????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="83">???????????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="84">???????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="85">???????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="86">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="87">???????????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="88">?????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="89">?????????? ????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="90">?????????????? ??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="93">?????????? ????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="94">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="95">??????????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="96">?????????????? </option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="97">?????????? ????????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="98">???????? ????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="99">????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="100">???????????? (??)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="101">?????????? </option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="102">????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="103">?????????????????? 1</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="104">?????????????????? 2</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="105">?????????????????? 3</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="106">??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="107">?????????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="108">?????????????????????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="109">?????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="110">???????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="111">???????? </option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="112">???????? (??)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="113">???????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="114">???????? (??)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="115">???????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="116">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="117">???????? ?????????????? (??)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="118">???????? ??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="119">???????????????? ??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="120">???????????? ????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="121">????????????4????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="122">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="123">???????? ??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="124">???????????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="125">???????????? ????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="126">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="127">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="128"> ???????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="129">??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="130">???????? </option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="131">???????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="132">???????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="133">????????(??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="134">?????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="135">?????????? ??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="136">???????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="137">???????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="138">??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="139">???????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="140">????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="141">???????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="142">???????? ?????????????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="143">???????????? ??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="144">???????????? ????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="145">?????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="146">???????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="147">?????????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="148">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="149">?????????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="150">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="151">??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="152">?????????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="153">???????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="154">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="155">???????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="156">?????????? (??)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="157">??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="158">?????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="159">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="160">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="161">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="162">?????????? ???? ????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="163">???????????????????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="164">?????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="165">???????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="166">???????? ??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="167">?????????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="168">?????????????? ???????????? ??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="169">???????? ??????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="170">???????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="171">???????????? ?????????????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="172">???????????? ????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="173">???????? ?????????????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="174">???????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="175">??????4????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="176">???????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="177">???????? ??????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="178">???????????? ????????????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="179">?????????? ????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="180">???????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="181">???????? ?????????????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="182">???????????? ?????????????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="183">???????????? ??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="184">???????? ????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="185">???????? ????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="186">???????? ??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="187">???????? ?????????? (??????)</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="188">???????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="189">???????????? ??????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="190">???????? ??????????????????</option>
                                                                                                                                            <option class="text-black bg-white" class="bg-dark" value="191">????????(??)</option>
                                                                                                                                    </select>
                                                            </div>
                                        
                                                        <p style="text-align: center">
                                                            <button type="submit" name="Status" value = "9" class="btn btn-success mt-4 "><i class="fa fa-save"></i> ???????????????? ??????????????</button>
                                                            </input>
                                                        </p>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        <div>
                            <button type="submit" name="Status" value = "1" class="btn bg-success-300"><i class="fab fa-btc"></i> ??????????????</button>
                        </div>
                    </div>
                    
                    </div>
                                        <!--/?????? ?? ???????????????? ????????????????-->
                    <div class="row mt-2">
                                                <div class="col-md-6 col-xs-12">
                            <a href="#" class="btn bg-info-300"><i class="icon-sort-time-asc"></i> ???????????????? ???????????????????????? ???? 2022-10-08 10:00</a>
                            <h2 class="form-section" id="name">???????????????? ???????? ?????????????????????? </h2>
                            <small class="text-muted" style="margin-top: -5px;display: block;"></small>

                            <div class="form-group row ">
                                <label class="col-2 col-form-label text-muted">??????????????</label>
                                <label class="col-10">
                                    <h6 id="phoneclient">79160563579</h6>
                                </label>
                            </div>

                            <div class="form-group row" style="margin-top: -15px;">
                                <label class="col-2 col-form-label text-muted">??????????</label>
                                <label class="col-10">
                                    <h6 id="phoneclient">???????????? </h6>
                                </label>
                            </div>
                            <div class="form-group row" style="margin-top: -15px;">
                                <label class="col-2 col-form-label text-muted">??????????</label>
                                <label class="col-10">
                                    <h6 class="form-control-static"> ???? ???????????????? 38 ????30  </h6>
                                </label>
                            </div>

                            <div class="form-group row" style="margin-top: -15px;">
                                <label class="col-2 col-form-label text-muted">?????????????? ????????</label>
                                <label class="col-10">
                                    <small class="form-control-static">  </small>
                                </label>
                            </div>

                            <div class="form-group row" style="margin-top: -15px;">
                                <label class="col-2 col-form-label text-muted">??????????????</label>
                                <label class="col-10">
                                    <h6 class="form-control-static">  </h6>
                                </label>
                            </div>

                            <div class="form-group row" style="margin-top: -15px;">
                                <label class="col-2 col-form-label text-muted">
                                    <h6>??????. ????????</h6>
                                </label>
                                <label class="col-10">
                                    <h6 class="form-control-static">  </h6>
                                    <h6 class="form-control-static">  </h6>
                                    <h6 class="form-control-static">  </h6>
                                </label>
                            </div>

                            <p style="font-size:14px;margin-top:15px">
                                <a href="https://www.tinkoff.ru/cardtocard/" target="_blank">?????????????????? ??????????</a> / <a href="https://www.tinkoff.ru/maps/payment/?partner=TINKOFF%2CMTS%2CPOCHTA_BANK" target="_blank">??????????????</a> /
                                <a href="https://www.sberbank.ru/ru/about/today/oib?itt&amp;CASHIN" target="_blank">????????????????</a> / <a href="https://bankohelp.ru/atms/" target="_blank">BankoHelp</a> / <a href="http://card2.ru/bank_po_karte/" target="_blank">BinCard</a>
                            </p>


                        </div>
                        <div class="col-md-6 col-xs-12">
                            
                            <div class="form-group">
                        <textarea class="form-control" rows="20"  name = "dopinfo" id = "dopinfo">?????? ?? ????????: ???????????????? ???????? ??????????????????????
79160563579

????????????????

??????????????, ???????????????????????? ???? ?????????? ??????</textarea>
                            </div>
                            <div style="text-align: center;margin-top: 20px">
                                <button type="submit" id="dopinfosave" name="dopinfosave" class="btn btn-success "><i class="fa fa-save"></i> ??????????????????</button>
                                <a href="./userselectdocument.php?client=%D0%9D%D0%B8%D0%BA%D0%B8%D1%88%D0%B8%D0%BD%D0%B0%20%D0%92%D0%B5%D1%80%D0%B0%20%D0%9F%D1%80%D0%BE%D0%BA%D0%BE%D0%BF%D1%8C%D0%B5%D0%B2%D0%BD%D0%B0%20" target="_blank"  class="btn bg-info-300"><i class="icon-profile mr-2"></i> ?????????????????????????? ????????????????</a>
                            </div>

            </form>


                        </div>
                    </div>
                                           <!--/?????? ?? ?????????? ?? ??????????????-->
                </div>
                <!--/???????????????? ??????????????-->

            </div>
        </div>
        <!-- /content area -->
    </div>
    <!-- /main content -->
</div>
<!-- /page content -->

</body>
</html>
