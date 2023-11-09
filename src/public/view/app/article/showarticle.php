

<h3><?=$article['titre']?></h3>
<p><?=$article['contenu']?></p>
<p>publié le: <?=$article['created_at']?></p>
<p>
    <a href="<?= $view->path('delete', [$article['id']]); ?>" 
    onclick="return confirm('t\'es sûr de virer ça frère?')">
        supprimer cet article
    </a>
</p>