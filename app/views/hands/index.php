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

    <div class="buttons-cards">
        
        <?php $deck1 = new Deck; ?>
        
        <?php foreach($deck1->getDeck() as $card): ?>
            <button> <?= $card ; ?> </button>
        <?php endforeach; ?>

        <?php /*
        <?= var_dump($deck1->getDeck()); ?>
        <br><br>

        <?php $deck1->shuffle(); ?>
        <br><br>

        <?= var_dump($deck1->getDeck()); ?>
        <br><br>

        <?php $deck1->deal(); ?>
        <br><br>

        <?= var_dump($deck1->getDeck()); ?>
        <br><br>

        <?php $deck1->dealRand(); ?>
        <br><br>

        <?= var_dump($deck1->getDeck()); ?>
        <br><br>
        */;?>

    </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>
