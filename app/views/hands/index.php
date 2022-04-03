<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/models/Deck.php'; ?>

    <header>

    <a href="<?php echo URLROOT; ?>"><h1><?= $data['title']; ?></h1></a>   
        
    </header> 

    <div class="box-row">

        <a href="<?php echo URLROOT; ?>/hands/add">Add Hand</a>

        <a href="<?= URLROOT; ?>">Home</a>
        
    </div>

    <hr>

    <section class="box-column">
        
        <h2 class="text-center">

            <?php $deck1 = new Deck; ?>
           
            <?= var_dump($deck1->getDeck()); ?>
            <br><br>
            <?= var_dump($deck1->deal()); ?>
            <?= var_dump($deck1->deal()); ?>
            <?= var_dump($deck1->shuffle()); ?>
            <br><br>

        </h2>

    </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>
