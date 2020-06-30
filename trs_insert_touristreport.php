<?php  ob_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/main.css">
	</head>
<?php
    include 'database/db_tools.php';
	include 'connect.php';
	if(!empty($_POST['touristreport_id'])){

// 		$data['touristreport_date'] = $_POST['touristreport_date'];
		$data['touristreport_adult_ch'] = $_POST['touristreport_adult_ch'];
		$data['touristreport_adult_pm'] = $_POST['touristreport_adult_pm'];
		$data['touristreport_adult_free'] = $_POST['touristreport_adult_free'];
		$data['touristreport_child_ch'] = $_POST['touristreport_child_ch'];
		$data['touristreport_child_pm'] = $_POST['touristreport_child_pm'];
		$data['touristreport_child_free'] = $_POST['touristreport_child_free'];
		$data['touristreport_child_pj'] = $_POST['touristreport_child_pj'];
		$data['touristreport_special_ch'] = $_POST['touristreport_special_ch'];
		$data['touristreport_special_free'] = $_POST['touristreport_special_free'];
		$data['touristreport_foreigner_adult_ch'] = $_POST['touristreport_foreigner_adult_ch'];
		$data['touristreport_foreigner_adult_pm'] = $_POST['touristreport_foreigner_adult_pm'];
		$data['touristreport_foreigner_adult_free'] = $_POST['touristreport_foreigner_adult_free'];
		$data['touristreport_foreigner_child_ch'] = $_POST['touristreport_foreigner_child_ch'];
		$data['touristreport_foreigner_child_pm'] = $_POST['touristreport_foreigner_child_pm'];
		$data['touristreport_foreigner_child_free'] = $_POST['touristreport_foreigner_child_free'];
		$data['touristreport_project_ch'] = $_POST['touristreport_project_ch'];
		$data['touristreport_safari_adult_ch'] = $_POST['touristreport_safari_adult_ch'];
		$data['touristreport_safari_child_ch'] = $_POST['touristreport_safari_child_ch'];
		$data['touristreport_vehicle_bus'] = $_POST['touristreport_vehicle_bus'];
		$data['touristreport_vehicle_car'] = $_POST['touristreport_vehicle_car'];
		$data['touristreport_vehicle_mtc'] = $_POST['touristreport_vehicle_mtc'];
// 		$data['touristreport_zoo_zoo_id'] = $_POST['touristreport_zoo_zoo_id'];

		$rs = $db->update('touristreport',$data,'touristreport_id',$_POST['touristreport_id']);
        if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
            }else{
            $ip = $_SERVER['REMOTE_ADDR'];
                }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'Touristreport System',
        	'log_action' => 'Edit',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));
	}else{
	$rs = $db->insert('touristreport',array(
    'touristreport_date' => $_POST['touristreport_date'],
	'touristreport_adult_ch' => $_POST['touristreport_adult_ch'],
	'touristreport_adult_free' => $_POST['touristreport_adult_free'],
	'touristreport_adult_pm' => $_POST['touristreport_adult_pm'],
    'touristreport_child_ch' => $_POST['touristreport_child_ch'],
	'touristreport_child_free' => $_POST['touristreport_child_free'],
	'touristreport_child_pm' => $_POST['touristreport_child_pm'],
	'touristreport_child_pj' => $_POST['touristreport_child_pj'],
	'touristreport_special_ch' => $_POST['touristreport_special_ch'],
	'touristreport_special_free' => $_POST['touristreport_special_free'],
	'touristreport_foreigner_adult_ch' => $_POST['touristreport_foreigner_adult_ch'],
	'touristreport_foreigner_adult_pm' => $_POST['touristreport_foreigner_adult_pm'],
	'touristreport_foreigner_adult_free' => $_POST['touristreport_foreigner_adult_free'],
	'touristreport_foreigner_child_ch' => $_POST['touristreport_foreigner_child_ch'],
	'touristreport_foreigner_child_pm' => $_POST['touristreport_foreigner_child_pm'],
	'touristreport_foreigner_child_free' => $_POST['touristreport_foreigner_child_free'],
	'touristreport_project_ch' => $_POST['touristreport_project_ch'],
	'touristreport_safari_adult_ch' => $_POST['touristreport_safari_adult_ch'],
	'touristreport_safari_child_ch' => $_POST['touristreport_safari_child_ch'],
    'touristreport_vehicle_bus' => $_POST['touristreport_vehicle_bus'],
	'touristreport_vehicle_car' => $_POST['touristreport_vehicle_car'],
	'touristreport_vehicle_mtc' => $_POST['touristreport_vehicle_mtc'],
	'touristreport_zoo_zoo_id' => $_POST['touristreport_zoo_zoo_id']
	));
	 if(getenv(HTTP_X_FORWARDED_FOR)){
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // IP proxy
            }else{
            $ip = $_SERVER['REMOTE_ADDR'];
                }
            $ipshow = gethostbyaddr($ip);
            $log = $db->insert('log',array(
        	'log_system' => 'Touristreport System',
        	'log_action' => 'Add',
        	'log_action_date' => date("Y-m-d H:i"),
        	'log_action_by' => $_POST['log_user'],
        	'log_ip' => $ipshow
        	));
	}
	if($rs || $rsfix){
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	}else if($rsfix){
            echo "<div class='statusok'>แก้ไขสำเร็จ</div>";
        }
            $link = "url=admin_index.php";
            header( "Refresh: 2; $link" );
}
?>
</html>
<?php
ob_end_flush();
?>