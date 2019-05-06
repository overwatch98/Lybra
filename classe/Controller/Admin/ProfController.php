<?php 

namespace Lybra\Controller\Admin;

use Lybra\AdminController;
use Lybra\App;


class ProfController extends AdminController{

    public function add(){

        $db = App::getDb();
        $error = '';
        if(!empty($_POST)){

            extract($_POST);

            if(empty($firstName) || empty($lastName) || empty($status) || empty($sexe)){
                $error = "Veuillez remplir tout les champs";
            }else{
                if(is_string($firstName) && is_string($lastName) && is_string($status) && is_string($sexe)){
                    $req = $db->prepare("INSERT INTO profs SET sexe = ?, firstName = ?, lastName = ?, statusprof = ?", [$sexe, $firstName, $lastName, $status]);
                    App::redirect('/professeur');
                }
            }

        }

        // $id = $db->lastInsertId();

        // if (!empty($_FILES['avatar']['name'])) {
        //     $maxSize = 2097152;
        //     if(exif_imagetype($_FILES['avatar']['tmp_name']) === 2 || exif_imagetype($_FILES['avatar']['tmp_name']) === 3){
        //         if ($_FILES['avatar']['size'] > $maxSize) {
        //             $error = 'Votre photo de profil ne doit pas dépasser 2Mo';
        //         }else{
        //             $path = 'avatar/' . $_FILES['avatar']['name'];
        //             $result = move_uploaded_file($_FILES['avatar']['tmp_name'], $path);
        //             if($result){
        //                 $req = $db->prepare("UPDATE profs SET avatar = ? WHERE id = ?", [$_FILES['avatar']['name'], $id]);
        //             }
        //         }
        //     }else{
        //         $error = "Les format acceptés sont : jpg et png";
        //     }
        // }

        $this->render('backend.addprof', compact('error'));
    }

}