<?php
  if(empty($admin_aunt)){
  //echo 'Ошибка... <a href="login.php">Попробуйте еще</a>';
  //exit();
  }
?>	<!-- BEGIN SIDEBAR -->. 
	<div class="page-sidebar-wrapper">

		<div class="page-sidebar navbar-collapse collapse">

			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			    <li class="<?php if($pageid==1){echo 'active';} ?>">
					<a href="index.php">
					<i class="icon-list"></i>
					<span class="title">Расчеты кредита</span>
					</a>
				</li>

			    <li class="<?php if($pageid==3){echo 'active';} ?>">
					<a href="credit.php">
					<i class="icon-list"></i>
					<span class="title">Кредиты</span>
					</a>
				</li>

				<li class="<?php if($pageid==5){echo 'active';} ?>">
					<a href="employee.php">
					<i class="icon-users"></i>
					<span class="title">Клиенты</span>
					</a>
				</li>

				<li class="<?php if($pageid==4){echo 'active';} ?>">
					<a href="users.php">
					<i class="icon-user"></i>
					<span class="title">Пользователи</span>
					</a>
				</li>

				<li class="<?php if($pageid==6){echo 'active';} ?>">
					<a href="type.php">
					<i class="icon-list"></i>
					<span class="title">Типы кредитов</span>
					</a>
				</li>

				<li class="<?php if($pageid==7){echo 'active';} ?>">
					<a href="sale.php">
					<i class="icon-list"></i>
					<span class="title">Продажи</span>
					</a>
				</li>

				<li class="<?php if($pageid==8){echo 'active';} ?>">
					<a href="sale_plan.php">
					<i class="icon-list"></i>
					<span class="title">План продаж</span>
					</a>
				</li>
                <hr>
				<li class="<?php if($pageid==9){echo 'active';} ?>">
					<a href="r1.php">
					<i class="icon-list"></i>
					<span class="title">Общий отчет</span>
					</a>
				</li>
				<li class="<?php if($pageid==10){echo 'active';} ?>">
					<a href="r2.php">
					<i class="icon-list"></i>
					<span class="title">Отчет по выполнению плана</span>
					</a>
				</li>

				<li class="<?php if($pageid==11){echo 'active';} ?>">
					<a href="r3.php">
					<i class="icon-list"></i>
					<span class="title">Аналитика продаж</span>
					</a>
				</li>

				<li class="<?php if($pageid==12){echo 'active';} ?>">
					<a href="r4.php">
					<i class="icon-list"></i>
					<span class="title">Общий отчет за выполнение</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
			<hr>
			<div align="center">
	<input class="btn red" type="submit" value="Печать" onclick="window.print();"></input>

			</div>
			<hr>
		</div>
	</div>
	<!-- END SIDEBAR -->