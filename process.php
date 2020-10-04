<?php 
	if(isset($_POST)){
		$data= Array();
		if((!empty($_POST['name'])) && (!empty($_POST['email'])) && (!empty($_POST['org'])) && (!empty($_POST['event'])) ){
			$data['success'] = '<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Succesfully Submitted Form.
					</div>';
		}
		else{
			if(empty($_POST['name'])){
				$data['errorname']='<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>';
			}
			else if(empty($_POST['email'])){
				$data['errorEmail']='<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>';
			}
			else if(empty($_POST['org'])){
				$data['errororg']='<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>';
			}
			else if(empty($_POST['event'])){
				$data['errorevent']='<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>';
			}
		}
		echo json_encode($data);
	}
?>