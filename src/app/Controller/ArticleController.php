<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;

/**
 *
 */
class ArticleController extends Controller
{

    public function listArticle()
    {
        $message = '-- Liste des Articles --';
        $articles = ArticleModel::all();
        $nbArticle = ArticleModel::count();

        $this->render('app.article.listarticle',
        [
            'message' => $message,
            'articles' => $articles,
            'nbArticle' => $nbArticle
        ]);
    }


    public function show($id)
    {
        $article = $this->ifArticleExists($id);
        // var_dump($article);

        $this->render('app.article.showarticle', array(
        
            'article' => $article
        ));
    }


    public function add()
    {
        $errors = [];
        // var_dump($_POST);

        if (!empty($_POST['submitted'])):
            // var_dump($_POST);
            $postArticle = $this->cleanXss($_POST);
            $validerArticle = new Validation();

            $errors['titre'] = $validerArticle->textValid($postArticle['titre'], 'titre', 5, 100);
            $errors['contenu'] = $validerArticle->textValid($postArticle['contenu'], 'contenu', 50, 2000);

            // $errors = $this->IfValidArticle($errors, $validerArticle, $postArticle);

            if ($validerArticle->IsValid($errors)):
                //méthode d'insertion
                echo "insertion";
            endif;

        endif;

        $formAdd = new Form($errors);

        $this->render('app.article.addarticle', array(
            'formAdd' => $formAdd
        ));
    }

    public function delete($id)
    {
        $article = $this->ifArticleExists($id);

        ArticleModel::delete($id);
        $this->redirect('articles');
    }


    public function ifArticleExists($id)
    {
        $article = ArticleModel::findById($id);

        return (empty($article)) ? $this->Abort404() : $article;
    }



}
