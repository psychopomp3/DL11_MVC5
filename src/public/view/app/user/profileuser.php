

<h1  style="text-align: center;font-size:33px;margin-top: 100px;">
    -- <?=$user['nom']?> --
</h1>

<p><?=$user['email']?></p>

<p>
    <a href="<?= $view->path('vire', [$user['id']]); ?>" 
    onclick="return confirm('t\'es sûr de vouloir te supprimer??')">
        supprimer le profil
    </a>
</p>

<p>
    <a href="<?= $view->path('change', [$user['id']]); ?>">
        modifier le profil
    </a>
</p>