<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog 2 Recettes 2 Cuisine</title>
    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
  </head>
  <body>


    <header>
      <nav>
          <ul>
              <li><a href="<?= $view->path('home'); ?>">Home</a></li>
              <li><a href="<?= $view->path('profile'); ?>">Profil Utilisateur</a></li>
              <li><a href="<?= $view->path('new'); ?>">Ajouter un nouvel Utilisateur</a></li>
              <li><a href="<?= $view->path('listing'); ?>">Tableau de Bord des Utilisateurs</a></li>
              <li><a href="<?= $view->path('articles'); ?>">Liste des Articles</a></li>
              <li><a href="<?= $view->path('add'); ?>">Ajouter un Article</a></li>
              <li><a href="<?= $view->path('dashboard'); ?>">Tableau de Bord des Articles</a></li>
              <li><a href="<?= $view->path('contact'); ?>">Contact</a></li>
          </ul>
      </nav>
    </header>

    
    <div class="container">
        <?= $content; ?>
    </div>

    <footer>

    </footer>

    <script src="<?= $view->asset('js/main.js'); ?>"></script>
  </body>
</html>
