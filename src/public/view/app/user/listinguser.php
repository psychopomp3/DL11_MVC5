<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>

<p>Actuellement il y a <?=$nbUser?> utilisateurs sur le blog</p><br/>


    <table>
    <thead>
        <tr>
            <td>[#]</td>
            <td>[Id]</td>
            <td>[nom]</td>
            <td>[email]</td>
            <td>[actions]</td>
        </tr>
    </thead> 
    <tbody>

<?php 
$i = 1;
foreach($users as $user): ?>

        <tr>
            <td><?=$i?></td>
            <td><?=$user->id;?></td>
            
            <td><?=$user->nom;?></td>

            <td><?=$user->email;?>...</td>
            <td>
                <a href="<?= $view->path('profile', [$user->id]); ?>" class="btn-mod">
                    Voir
                </a><br/>
                <a href="<?= $view->path('change', [$user->id]); ?>" class="btn-mod">
                    Modifier
                </a><br/>
                <a href="<?= $view->path('vire', [$user->id]); ?>" 
                onclick="return confirm('t\'es sûr de vouloir te supprimer là??')">
                    Supprimer
                </a><br/>
            </td>
        </tr>

<?php 
$i++;
endforeach; ?>

    </tbody>
    </table>



