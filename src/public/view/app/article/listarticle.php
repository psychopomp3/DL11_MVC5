<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>


<p>Actuellement il y a <?=$nbArticle?> articles sur le blog</p><br/>
<section>
    <ul>
        <?php foreach($articles as $article): ?>
            <li>
                <?=$article->id?>
                <a href="<?= $view->path('article', [$article->id]); ?>"> <?=$article->titre?> </a>
            </li>
            <?php endforeach; ?>
    </ul>
    <!-- <p><a href="/article-new">Ajouter une nouvelle recette</a></p> -->
</section>
