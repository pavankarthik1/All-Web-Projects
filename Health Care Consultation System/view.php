<?php
require_once './library/config.php';
require_once './library/functions.php';

//$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$mod = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

if($mod == 'customer'){
	switch ($view) {
	
		case 'makeComplain' :
			$content 	= 'makeComplain.php';		
			$pageTitle 	= 'Health Care Consultation System - Register Issues';
		break;
		
		
		case 'compDetails' :
			$content 	= 'compDetails.php';		
			$pageTitle 	= 'Health Care Consultation System - View Issue Detail';
		break;
		
	
		
		
	
	}//switch
}//if
elseif($mod == 'admin'){
	switch ($view) {
	
		case 'compDetails' :
			$content 	= 'adminCompDetails.php';		
			$pageTitle 	= 'Health Care Consultation System - View Issue Detail';
		break;
		
		case 'repo' :
			$content 	= 'repo.php';		
			$pageTitle 	= 'Health Care Consultation System - View Issue Detail';
		break;
		
		case 'repod' :
			$content 	= 'repo-detail.php';		
			$pageTitle 	= 'Health Care Consultation System - Detail Reports';
		break;
		
		case 'reports' :
			$content 	= 'reports.php';		
			$pageTitle 	= 'Health Care Consultation System - Reports';
		break;
		
		case 'compCloseDetails' :
			$content 	= 'adminCompCloseDetails.php';		
			$pageTitle 	= 'Health Care Consultation System - View Close Issue';
		break;
		
		case 'vDetails' :
			$content 	= 'viewEnggDetails.php';		
			$pageTitle 	= 'Health Care Consultation System - View Doctor Details';
		break;
		
		case 'enggDetails' :
			$content 	= 'enggDetails.php';		
			$pageTitle 	= 'Health Care Consultation System - View Doctor Details';
		break;
		
		case 'custDetails' :
			$content 	= 'custDetails.php';		
			$pageTitle 	= 'Health Care Consultation System - View Doctor Details';
		break;
		
		
		case 'viewByCompID' :
			$content 	= 'viewByCompID.php';		
			$pageTitle 	= 'Health Care Consultation System - Give Your Issues';
		break;
		
		case 'doEdit' :
			$content 	= 'editEngg.php';		
			$pageTitle 	= 'Health Care Consultation System - Edit Doctor';
		break;
		
		case 'doEditCust' :
			$content 	= 'editCust.php';		
			$pageTitle 	= 'Health Care Consultation System - Edit Patient';
		break;
		
		case 'addEngg' :
			$content 	= 'addEngg.php';		
			$pageTitle 	= 'Health Care Consultation System - Edit Doctor';
		break;
		
		case 'addCust' :
			$content 	= 'addCust.php';		
			$pageTitle 	= 'Health Care Consultation System - Add Patient';
		break;
	
	}//switch
}//if
elseif($mod == 'employee'){
	switch ($view) {
	
		case 'viewComplain' :
			$content 	= 'employeeCompDetails.php';		
			$pageTitle 	= 'Health Care Consultation System - View Issue Detail';
		break;
		
		case 'viewComplainClose' :
			$content 	= 'employeeCompClose.php';		
			$pageTitle 	= 'Health Care Consultation System - View Issue Detail';
		break;
		
		case 'viewByCompID' :
			$content 	= 'empViewByCompID.php';		
			$pageTitle 	= 'Health Care Consultation System - View Issues / Add Comment';
		break;
		
		case 'closeComplain' :
			$content 	= 'closeComplain.php';		
			$pageTitle 	= 'Health Care Consultation System - Close Issue';
		break;

	}//switch
}//if

require_once './include/template.php';

?>
