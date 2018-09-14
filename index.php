<?php
include_once("c_iklanq.php");
$controller = new c_iklanq();
@$id_user = $_SESSION['id_user'];
if(isset($_GET['halaman'])){ 
		$index = $_GET['halaman'];
		$controller->view($index, $id_user);
}
else if (isset($_SESSION['id_user'])) {
	$id_user = $_SESSION['id_user'];
	
	if(isset($_GET['keyword'])){
		$key = $_GET['keyword'];
		$controller->searchIklan($key);
	}

	else if(isset($_GET['halaman'])){ 
		$index = $_GET['halaman'];
		$controller->view($index, $id_user);
	}

	else if(isset($_GET['edit'])){ 
	    $id = $_GET['edit'];
	    $controller->viewEdit($id);
	}

	else if(isset($_GET['add'])){
		$id = $_GET['add'];
	    $controller->viewAddIklan($id);
	}

	else if(isset($_GET['delete'])){ 
		$id = $_GET['delete'];
	 	$controller->deleteIklan($id);
	}

	else if(isset($_GET['iklan'])){ 
		$id_i = $_GET['iklan'];
	 	$controller->lihatIklan($id_i);
	}

	else{
		$controller->invoke();
	}
} else {
	header('location:index.php?halaman=login');	
}

