

<h1  style="text-align: center;font-size:33px;margin-top: 100px;">
    -- <?=$article['titre']?> --
</h1>

<p><?=$article['contenu']?></p>

<p>publié le: <?=$article['created_at']?></p>

<p>
    <a href="<?= $view->path('delete', [$article['id']]); ?>" 
    onclick="return confirm('t\'es sûr de virer ça frère?')">
        supprimer cet article
    </a>
</p>

<p>
    <a href="<?= $view->path('edit', [$article['id']]); ?>">
        modifier cet article
    </a>
</p>