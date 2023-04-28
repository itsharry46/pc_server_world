<?php 
    
	$arr_JS  = array();
	switch ($main_view) 
	{
	    case 'view_signIn' : $arr_JS = array(); break;

	    default:  break;
	}

	foreach ($arr_JS as $key => $jsFileName) {
	    echo '<script src="'.base_url().'assets/js/'.$jsFileName.'.js"></script>';
	}
?>



<?php if(file_exists( FILE_PATH."assets/js/custom/".$main_view."_js.php" )) { require_once( FILE_PATH."assets/js/custom/".$main_view."_js.php" ); } ?>
