
<section>
    <h3>Modifier cet article</h3>
    <form method="POST">
        <?= $formEdit->label('titre') ?>
        <?= $formEdit->input('titre') ?>
        <?= $formEdit->error('titre') ?>       
        <?= $formEdit->label('contenu') ?>
        <?= $formEdit->textarea('contenu') ?>
        <?= $formEdit->error('contenu') ?> 
        <?= $formEdit->submit('submitted', 'vas y modifie l\'article') ?>
    </form>
</section>