<?php
include('include/config.php');
include('include/func.php');
if(!empty($_POST['sum1'])){

$sql = "INSERT INTO stat VALUES ('', '".addslashes($uid)."',
'".addslashes($_POST['sum1'])."',
'".addslashes($_POST['sum2'])."',
'".addslashes($_POST['sum3'])."',
'".addslashes($_POST['sum4'])."',
'".addslashes($_POST['sum5'])."',
'".addslashes($_POST['sum6'])."',
'".addslashes($_POST['type1'])."',
'".addslashes($_POST['type2'])."',  
'".addslashes($_POST['type3'])."',
'".addslashes(time())."',
'".addslashes($_POST['eid'])."',
'".addslashes($_POST['credit'])."',
'".addslashes(0)."');";
                    mysql_query($sql) or die(mysql_error());

}

if(!empty($_GET['sell'])){
$sql = "UPDATE stat  SET status='".addslashes(1)."' WHERE (id='".$_GET['sell']."')";
mysql_query($sql) or die(mysql_error());



	}

?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Кредиты | Admin </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="assets/admin/layout4/img/logo-light.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->

		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">

					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						Администратор </span>
						<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
						<img alt="" class="img-circle" src="assets/admin/layout4/img/avatar9.jpg"/>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="login.php">
								<i class="icon-key"></i> Выйти </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<?php       $pageid=1;
   include('menu.php');
?>
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Расчет кредита</h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">

				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-12">
							<p>

<div class="post-comment col-md-5">
<?php
if(empty($_POST['sum1'])){
?>
<form method="post">
<div class="form-group">
<label class="control-label">Клиент <span class="required">
* </span>
</label>
<select size="1" name="eid" class="form-control"><option value="0">-</option>

<?php


     $sql = "SELECT * FROM employee";
     $s_u=mysql_query($sql) or die(mysql_error());
     $rows_u = mysql_num_rows($s_u);
     for($i_u=0;$i_u<$rows_u;$i_u++)
     {
            $f_u=mysql_fetch_array($s_u);
echo '<option value="'.$f_u['id'].'"'; if($f_u['id']==$f['eid']){echo ' selected';} echo '>'.$f_u['fio'].'</option>';
     }


?>
</select>
</div>

<div class="form-group">
<label class="control-label">Кредит <span class="required">
* </span>
</label>
<select size="1" name="credit" class="form-control"><option value="0">-</option>

<?php
     $sql = "SELECT * FROM credit";
     $s_u=mysql_query($sql) or die(mysql_error());
     $rows_u = mysql_num_rows($s_u);
     for($i_u=0;$i_u<$rows_u;$i_u++)
     {
            $f_u=mysql_fetch_array($s_u);
echo '<option value="'.$f_u['id'].'"'; if($f_u['id']==$f['eid']){echo ' selected';} echo '>'.$f_u['name'].'</option>';
     }

?>

</select>
</div>


<div class="form-group">
<label class="control-label">Доходы в месяц <span class="required">
* </span>
</label>
<input type="text" class="form-control" name="sum1" value="">
</div>

<div class="form-group">
<label class="control-label">Расходы в месяц <span class="required">
* </span>
</label>
<input type="text" class="form-control" name="sum2" value="">
</div>


<div class="form-group">
<label class="control-label">Ежемесячный платеж <span class="required">
* </span>
</label>
<input type="text" class="form-control" name="sum3" value="">
</div>


<div class="form-group">
<label class="control-label">Другие кредиты? <span class="required">
* </span>
</label>
<select size="1" name="type">
  <option value="0">Нет</option>
  <option value="1">Есть</option>
</select>
</div>

<div class="form-group">
<label class="control-label">Сумма других кредитов <span class="required">
* </span>
</label>
<input type="text" class="form-control" name="sum4" value="">
</div>


<div class="form-group">
<label class="control-label">Есть автомобиль? <span class="required">
* </span>
</label>
<select size="1" name="type2">
  <option value="0">Нет</option>
  <option value="1">Есть</option>
</select>
</div>
<div class="form-group">
<label class="control-label">Оценочная  стоимость автомобиля<span class="required">
* </span>
</label>
<input type="text" class="form-control" name="sum5" value="">
</div>

<div class="form-group">
<label class="control-label">Есть недвижимость? <span class="required">
* </span>
</label>
<select size="1" name="type3">
  <option value="0">Нет</option>
  <option value="1">Есть</option>
</select>
</div>
<div class="form-group">
<label class="control-label">Оценочная  стоимость недвижимости<span class="required">
* </span>
</label>
<input type="text" class="form-control" name="sum6" value="">
</div>
<input type="submit" name="save" class="btn blue btn-block" value="Расчёт" />
</form>
<?php
   }else {

$pSum = $_POST['sum1']-$_POST['sum2'];
$mSum = $_POST['sum3'];

$prC = $mSum*100/$pSum;
echo 'Клиент будет платить: '.round($prC,2).'% от остатка после расходов.<br />' ;
$z = $prC;if(!empty($_POST['type'])){$z = $z+10; }
if(!empty($_POST['type2'])){$z = $z-10; }
if(!empty($_POST['type3'])){$z = $z-10; }
if($z>50){	echo 'Не рекомендуется выдавать кредит.'; }
if($z>70 or $z<0){	echo 'Не выдавать кредит.'; }
if($z<50 and $z>0){echo 'Можно выдавать!';}
   }
?>
</div>
<div class="col-md-12">
				<div class="page-title">
					<h1>История расчетов</h1>
				</div>
<?php
$sql = "SELECT (SELECT name FROM users WHERE(users.id=stat.uid)),
(SELECT fio FROM employee WHERE(employee.id=stat.eid)),(SELECT name FROM credit WHERE(credit.id=stat.credit)),stat.* FROM stat  ORDER BY stat.id DESC";
     $s=mysql_query($sql) or die(mysql_error());
     $rows = mysql_num_rows($s);
echo '
  <table class="table table-bordered">
<thead>
<tr>
<th>Дата</th>
<th>Добавил</th>
<th>Клиент</th>
<th>Тип</th>
<th>Доходы/мес.</th>
<th>Расход/мес.</th>
<th>Платеж</th>
<th>Кредиты (сумма)</th>
<th>Авто (цена)</th>
<th>Недвижимость (цена)</th>

</tr>
</thead>
<tbody>
';
     for($i=0;$i<$rows;$i++)
     {
            $f=mysql_fetch_array($s);

if($f['uid']==0){$f[0]='Администратор';}
if($f['type1']==1){$t1 = 'Да';}else {$t1 = 'Нет';}
if($f['type2']==1){$t2 = 'Да';}else {$t2 = 'Нет';}
if($f['type3']==1){$t3 = 'Да';}else {$t3 = 'Нет';}
$cr='';



if($f['status']==0){
$se = '<a href="?sell='.$f['id'].'" class="btn btn-xs green">Отметить продажу</a>';
}else {	$se = 'Продажа';
	}
          echo '<tbody>
<tr>
<td>'.date("d.m.Y H:i",$f['date']).'</td>
<td>'.$f[0].'<br />
'.$se.'
</td>
<td>'.$f[1].'</td>
<td>'.$f[2].'</td>
<td>'.$f['sum1'].' </td>
<td>'.$f['sum2'].'</td>
<td>'.$f['sum3'].'</td>
<td>'.$t1.' ('.$f['sum4'].')</td>
<td>'.$t2.' ('.$f['sum5'].')</td>
<td>'.$t3.' ('.$f['sum6'].')</td>
</tr>
<tbody>
 ';
     }  if($rows == 0){echo '<tr><td colspan="8">Нет даных</td></tr>';}
echo '</table>';
?> 	</div>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->



<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget
});
</script>
<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->
</html>
