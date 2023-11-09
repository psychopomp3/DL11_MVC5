<?php

namespace App\Controller;

use App\Model\UserModel;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;

/**
 *
 */
class UserController extends Controller
{


    public function profile($id)
    {
        // $this->dd('Test');
        $user = $this->ifUserExists($id);

        $this->render('app.user.profileuser', array(
            'user' => $user
        ));
    }


    public function add()
    {
        $errors = [];

        if (!empty($_POST['submitted'])):
            $submitNuUser = $this->cleanXss($_POST);
            $validateNuUser = new Validation();

            $errors['nom'] = $validateNuUser->textValid($submitNuUser['nom'], 'nom', 5, 100);
            $errors['email'] = $validateNuUser->textValid($submitNuUser['email'], 'email', 5, 100);

            if ($validateNuUser->IsValid($errors)):

                UserModel::insert($submitNuUser);
                $this->redirect('listing');

            endif;

        endif;

        $formAdd = new Form($errors);

        $this->render('app.user.adduser', array(
            'formAdd' => $formAdd
        ));
    }

    
    public function delete($id)
    {
        $user = $this->ifUserExists($id);

        UserModel::delete($id);
        $this->redirect('articles');
    }


    public function edit($id)
    {
        $userEdit = $this->ifUserExists($id);
        $errors = [];

        //validation -------------------------
        if (!empty($_POST['submitted'])):
            $submitUserEdit = $this->cleanXss($_POST);
            $validateUserEdit = new Validation();
            $errors['nom'] = $validateUserEdit->textValid($submitUserEdit['nom'], 'nom', 5, 100);
            $errors['email'] = $validateUserEdit->textValid($submitUserEdit['email'], 'email', 5, 100);

            if ($validateUserEdit->IsValid($errors)):

                UserModel::update($submitUserEdit, $id);
                $this->redirect('listing');

            endif;
        endif;
        //-------------------------------------

        $formEdit = new Form($errors);

        $this->render('app.user.edituser', array(
            'formEdit' => $formEdit,
            'userEdit' => $userEdit
        ));
    }


    public function dashUserMeth()
    {
        $message = '-- Tableau de bord des Utilisateurs --';
        $users = UserModel::all();
        $nbUser = UserModel::count();

        $this->render('app.user.listinguser',
        [
            'message' => $message,
            'users' => $users,
            'nbUser' => $nbUser
        ]);
    }


    public function ifUserExists($id)
    {
        $user = UserModel::findById($id);

        return (empty($user)) ? $this->Abort404() :  $user;
    }



}
