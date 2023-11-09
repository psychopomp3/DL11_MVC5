<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>

<p>Actuellement il y a <?=$nbArticle?> articles sur le blog</p><br/>


    <table>
    <thead>
        <tr>
            <td>[#]</td>
            <td>[Id]</td>
            <td>[Titre]</td>
            <td>[Contenu]</td>
            <td>[Actions]</td>
        </tr>
    </thead> 
    <tbody>

<?php 
$i = 1;
foreach($articles as $article): ?>

        <tr>
            <td><?=$i?></td>
            <td><?=$article->id;?></td>
            
            <td><?=$article->titre?></td>

            <td><?=substr($article->contenu, 0, 100);?>...</td>
            <td>
                <a href="<?= $view->path('article', [$article->id]); ?>" class="btn-mod">
                    Voir
                </a><br/>
                <a href="<?= $view->path('edit', [$article->id]); ?>" class="btn-mod">
                    Modifier
                </a><br/>
                <a href="<?= $view->path('delete', [$article->id]); ?>" 
                onclick="return confirm('t\'es sûr de virer ça frère?')">
                    Supprimer
                </a><br/>
            </td>
        </tr>

<?php 
$i++;
endforeach; ?>

    </tbody>
    </table>



