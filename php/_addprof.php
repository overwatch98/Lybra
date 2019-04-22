<?php
use Lybra\App;
$db = App::getDb();
$error = '';
if(!empty($_POST)){

	extract($_POST);

	if(empty($firstName) || empty($lastName) || empty($status)){
		$error = "Veuillez remplir tout les champs";
	}else{
		if(is_string($firstName) && is_string($lastName) && is_string($status)){
			$req = $db->prepare("INSERT INTO profs SET firstName = ?, lastName = ?, statusprof = ?", [$firstName, $lastName, $status]);
		}
	}

}

$id = $db->lastInsertId();

if (!empty($_FILES['avatar']['name'])) {
	$maxSize = 2097152;
	if(exif_imagetype($_FILES['avatar']['tmp_name']) === 2 || exif_imagetype($_FILES['avatar']['tmp_name']) === 3){
		if ($_FILES['avatar']['size'] > $maxSize) {
			$error = 'Votre photo de profil ne doit pas dépasser 2Mo';
		}else{
			$path = 'public/avatar/' . $_FILES['avatar']['name'];
			$result = move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
			if($result){
				$req = $db->prepare("UPDATE profs SET avatar = ? WHERE id = ?", [$_FILES['avatar']['name'], $id]);
				redirect('admin');
			}
		}
	}else{
		$error = "Les format acceptés sont : jpg et png";
	}
}