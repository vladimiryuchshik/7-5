<?php
include('include/config.php');

if(!empty($_GET['dnid'])){
$sql = "DELETE FROM sale_plan WHERE (id='".$_GET['dnid']."')";  
mysql_query($sql) or die(mysql_error());

                        header("Location: sale_plan.php?");
}

if(!empty($_POST['tid']) and empty($_POST['esid'])){

$date = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
$sql = "INSERT INTO sale_plan VALUES ('', '".addslashes($_POST['period'])."', '".addslashes($_POST['text'])."',
'".addslashes($_POST['tid'])."',
'".addslashes($_POST['cid'])."',
'".addslashes($_POST['uid'])."');";




                        mysql_query($sql) or die(mysql_error());
                        header("Location: sale_plan.php");
        }


if(!empty($_POST['esid'])){
$sql = "UPDATE sale_plan SET uid='".addslashes($_POST['uid'])."',
cid='".addslashes($_POST['cid'])."',
text='".addslashes($_POST['text'])."',
period='".addslashes($_POST['period'])."' WHERE (id='".$_POST['esid']."')";
mysql_query($sql) or die(mysql_error());



        header("Location: sale_plan.php");
}

$titleP = 'Продажи';
?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php  echo $titleP; ?> | Admin </title>
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
<?php $pageid=8; include('menu.php'); ?>

	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1><?php  echo $titleP; ?> <small><a href="?add" class="btn btn-xs green">Добавить<i class="fa fa-plus"></i></a> </small></h1>
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

<?php

if(!isset($_GET['add']) and empty($_GET['eid'])){

$sql = "SELECT (SELECT name FROM users WHERE(sale_plan.uid=users.id)),
(SELECT name FROM type WHERE(sale_plan.tid=type.id)),
(SELECT name FROM credit WHERE(sale_plan.cid=credit.id)),sale_plan.* FROM sale_plan ";
     $s=mysql_query("$sql") or die(mysql_error());
     $rows = mysql_num_rows($s);
echo '
  <table class="table table-bordered">
<thead><tr>
<th>#</th>
<th>Период</th>
<th>Назначение</th>
<th>Тип кредита</th>
<th>Сотрудник</th>
<th>Кредит</th>
<th>Действия</th>
</tr>
</thead>
<tbody>
';
     for($i=0;$i<$rows;$i++)
     {
            $f=mysql_fetch_array($s);
            if(!empty($f['uid'])){ $uu = ''.$f['uid'].' ('.get_login($f['uid']).')'; }else {$uu='Для всех';}
          echo '<tbody>
<tr>
<td>'.$f['id'].' </td>
<td>'.$f['period'].' </td>
<td>'.$f['text'].' </td>
<td>'.$f[1].'</td>
<td>'.$f[0].'</td>
<td>'.$f[2].'</td>
<td>
<a href="?eid='.$f['id'].'" class="btn default btn-xs purple"><i class="fa fa-edit"></i> Редактировать</a>
<a href="?dnid='.$f['id'].'" class="btn default btn-xs black"><i class="fa fa-trash-o"></i>Удалить</a>
</td>
</tr>
<tbody> ';
     }  if($rows == 0){echo '<tr><td colspan="5">Нет даных</td></tr>';}
echo '</table>';
}

if(!empty($_GET['eid'])){


$sql = "SELECT * FROM sale_plan WHERE(id='".$_GET['eid']."')";
     $s=mysql_query("$sql") or die(mysql_error());
     $rows = mysql_num_rows($s);
            $f=mysql_fetch_array($s);
echo '   <div class="post-comment col-md-5">
<form method="post" role="form" enctype="multipart/form-data"><input type="hidden" name="esid" value="'.$_GET['eid'].'">

<div class="form-group">
<label class="control-label">Период <span class="required">
* </span>
</label>
<input type="text" class="form-control" name="period" value="'.$f['period'].'">
</div>

<div class="form-group">
<label class="control-label">Значение плана <span class="required">
* </span>
</label>
<input type="text" class="form-control" name="text" value="'.$f['text'].'">
</div>

<div class="form-group">
<label class="control-label">Тип кредита <span class="required">
* </span>
</label>
<select size="1" name="tid" class="form-control"><option value="0">-</option>';


     $sql = "SELECT * FROM type";
     $s_u=mysql_query($sql) or die(mysql_error());
     $rows_u = mysql_num_rows($s_u);
     for($i_u=0;$i_u<$rows_u;$i_u++)
     {
            $f_u=mysql_fetch_array($s_u);
echo '<option value="'.$f_u['id'].'"'; if($f_u['id']==$f['eid']){echo ' selected';} echo '>'.$f_u['name'].'</option>';
     }

echo '
</select>
</div>

<div class="form-group">
<label class="control-label">Сотрудник <span class="required">
* </span>
</label>
<select size="1" name="uid" class="form-control"><option value="0">-</option>';


     $sql = "SELECT * FROM users";
     $s_u=mysql_query($sql) or die(mysql_error());
     $rows_u = mysql_num_rows($s_u);
     for($i_u=0;$i_u<$rows_u;$i_u++)
     {
            $f_u=mysql_fetch_array($s_u);
echo '<option value="'.$f_u['id'].'"'; if($f_u['id']==$f['eid']){echo ' selected';} echo '>'.$f_u['name'].'</option>';
     }

echo '
</select>
</div>


<div class="form-group">
<label class="control-label">Кредит <span class="required">
* </span>
</label>
<select size="1" name="cid" class="form-control"><option value="0">-</option>';


     $sql = "SELECT * FROM credit";
     $s_u=mysql_query($sql) or die(mysql_error());
     $rows_u = mysql_num_rows($s_u);
     for($i_u=0;$i_u<$rows_u;$i_u++)
     {
            $f_u=mysql_fetch_array($s_u);
echo '<option value="'.$f_u['id'].'"'; if($f_u['id']==$f['eid']){echo ' selected';} echo '>'.$f_u['name'].'</option>';
     }

echo '
</select>
</div>



        <input type="submit" name="save" class="btn blue btn-block" value="Сохранить" />
</form> </div>
';
}

if(isset($_GET['add'])){


?> <div class="post-comment col-md-5">
<form method="post" enctype="multipart/form-data">

<div class="form-group">
<label class="control-label">Период <span class="required">
* </span>
</label>
<input type="text" class="form-control" name="period" value="">
</div>

<div class="form-group">
<label class="control-label">Значение плана (руб) <span class="required">
* </span>
</label>
<input type="text" class="form-control" name="text" value="">
</div>

<div class="form-group">
<label class="control-label">Тип кредита <span class="required">
* </span>
</label>
<select size="1" name="tid" class="form-control"><option value="0">-</option>

<?php

     $sql = "SELECT * FROM type";
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
<label class="control-label">Сотрудник <span class="required">
* </span>
</label>
<select size="1" name="uid" class="form-control"><option value="0">-</option>

<?php

     $sql = "SELECT * FROM users";
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
<label class="control-label">Кредит <span class="required">
* </span>
</label>
<select size="1" name="cid" class="form-control"><option value="0">-</option>

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

        <input type="submit" name="save" class="btn blue btn-block" value="Сохранить" />
</form></div>
<?php
}
?>
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
