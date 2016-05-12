<!DOCTYPE html>
<html lang="en">
	<?php include "layout/head.php"; ?>
	<body class="page-body">
		<?php include "layout/header.php"; ?>
			<div class="page-container">
				<?php include "layout/menu.php"; ?>
				<div class="main-content">
				<?php include "layout/navbar.php"; ?>
				
				<?php
					error_reporting(E_ALL);
				   // ini_set('display_errors', 0);
				    if(isset($_GET['page'])){
				        switch ($_GET['page']){
				        	case "detail_conveyor_condition":
				                $pg =  "content/detail_conveyor_condition.php";
				            break;
				            case "add_customer":
				                $pg =  "content/add_customer.php";
				            break;
				            case "data_customer":
				                $pg =  "content/data_customer.php";
				            break;
				            case "view_customer":
				                $pg =  "content/view_customer.php";
				            break;
				            case "data_site":
				                $pg =  "content/data_site.php";
				            break;
				       		case "view_site":
				                $pg =  "content/view_site.php";
				            break;
				            case "add_customer_site":
				                $pg =  "content/add_customer_site.php";
				            break;
							case "data_area":
				                $pg =  "content/data_area.php";
				            break;
				            case "add_area":
				                $pg =  "content/add_area.php";
				            break;
				            case "data_conveyor":
				                $pg =  "content/data_conveyor.php";
				            break;
				            case "add_conveyor":
				                $pg =  "content/add_conveyor.php";
				            break;
				        	case "data_conveyor_asset":
				                $pg =  "content/data_conveyor_asset.php";
				            break;
				            case "add_conveyor_asset":
				                $pg =  "content/add_conveyor_asset.php";
				            break;
				        }
				    }else{
				        $pg="content/dasboard.php";
				    }
				    include("$pg");

				?>
				<div style="clear:both;"></div>
				<?php include "layout/header.php"; ?>
				</div>			
			</div>
		<?php include "layout/bottom.php"; ?>
	</body>
</html>