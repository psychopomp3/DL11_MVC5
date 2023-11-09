<section>
    <h3>Ajouter un nouvel utlisateur</h3>
    <form method="POST">
        <?= $formAdd->label('nom') ?>
        <?= $formAdd->input('nom', 'text') ?>
        <?= $formAdd->error('nom') ?>       
        <?= $formAdd->label('email') ?>
        <?= $formAdd->input('email', 'email') ?>
        <?= $formAdd->error('email') ?> 
        <?= $formAdd->submit('submitted', 'ajoute toi, vas!') ?>
    </form>
</section>