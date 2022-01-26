<?php require APPROOT . '/views/inc/header.php'; ?>

    <header>

        <h1><?= $data['title']; ?></h1>   
        
    </header> 

    <div class="box-row">

        <a href="<?php echo URLROOT; ?>/hands/add">Add Hand</a>

        <a href="<?= URLROOT; ?>">Home</a>
        
    </div>

    <hr>

    <section class="box-column">
        
        <h2 class="text-center">Hand Title</h2>
        <h3>Created on: 26/01/22</h3>
        <p>Flop info</p>
        <p>turn info</p>
        <p>riverinfo</p>

    </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>
