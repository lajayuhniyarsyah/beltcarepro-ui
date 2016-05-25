<!DOCTYPE html>
<html lang="en">
	<?php include "layout/head.php"; ?>
	<body class="page-body" onpageshow="if (event.persisted) noBack();" onunload="">
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
				            case "view_area":
				                $pg =  "content/view_area.php";
				            break;
				            case "data_conveyor":
				                $pg =  "content/data_conveyor.php";
				            break;
				            case "add_conveyor":
				                $pg =  "content/add_conveyor.php";
				            break;
				            case "view_conveyor":
				                $pg =  "content/view_conveyor.php";
				            break;
				        	case "data_conveyor_asset":
				                $pg =  "content/data_conveyor_asset.php";
				            break;
				            case "add_conveyor_asset":
				                $pg =  "content/add_conveyor_asset.php";
				            break;
				            case "view_conveyor_asset":
				                $pg =  "content/view_conveyor_asset.php";
				            break;
				            case "data_part":
				                $pg =  "content/data_part.php";
				            break;
				            case "add_part":
				                $pg =  "content/add_part.php";
				            break;
				            case "view_part":
				                $pg =  "content/view_part.php";
				            break;
				            case "data_part_type":
				                $pg =  "content/data_part_type.php";
				            break;
							case "add_part_type":
				                $pg =  "content/add_part_type.php";
				            break;
				            case "view_data_part_type":
				                $pg =  "content/view_data_part_type.php";
				            break;
				            case "data_brand":
				                $pg =  "content/data_brand.php";
				            break;
				            case "add_brand":
				                $pg =  "content/add_brand.php";
				            break;
				            case "data_action":
				                $pg =  "content/data_action.php";
				            break;
				            case "add_inspection":
				            	$pg =  "content/add_inspection.php";
				            break;
				            case "add_do_inspection":
				            	$pg =  "content/add_do_inspection.php";
				            break;
				            case "data_user":
				            	$pg =  "content/data_user.php";
				            break;
				            case "add_user":
				            	$pg =  "content/add_user.php";
				            break;
				            case "view_user":
				            	$pg =  "content/view_user.php";
				            break;
				            case "data_work":
				            	$pg =  "content/data_work.php";
				            break;
				            case "add_work":
				            	$pg =  "content/add_work.php";
				            break;
				            case "view_work":
				            	$pg =  "content/view_work.php";
				            break;
				            case "data_work_step":
				            	$pg =  "content/data_work_step.php";
				            break;
				            case "add_work_step":
				            	$pg =  "content/add_work_step.php";
				            break;
				            case "view_work_step":
				            	$pg =  "content/view_work_step.php";
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