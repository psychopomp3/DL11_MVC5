
<section>
    <h3>Modifier votre profil</h3>
    <form method="POST">
        <?= $formEdit->label('nom') ?>
        <?= $formEdit->input('nom', 'text', $userEdit['nom']) ?>
        <?= $formEdit->error('nom') ?>       
        <?= $formEdit->label('email') ?>
        <?= $formEdit->input('email', 'email', $userEdit['email']) ?>
        <?= $formEdit->error('email') ?> 
        <?= $formEdit->submit('submitted', 'ouais, change toi') ?>
    </form>
</section>