<?php

	header('Content-Type: application/json');
	
	if(isset($_GET['product'])){
		$data = array();
		
		$productName = str_replace("","+",$_GET['product']);
		
		$productLink = "img/dickpics.jpg".$productName;
		
		for($i=0;$i<3;$i++){
			$data[] = $productLink."+".($i+1);
		}
		echo json_encode($data);
	}
	else{
		echo json_encode("dickpics.jpg");
	}