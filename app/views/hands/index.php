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
            <button onclick="heroCard('<?= $card ; ?>')" id="btn<?= $card ; ?>"> <?= $card ; ?> </button>
        <?php endforeach; ?>
        
        <label>Hero Cards</label>
        <input type="text" name="heroCardOne" id="heroCardOne">
        <input type="text" name="heroCardTwo" id="heroCardTwo">
        <label>Hero Stack</label>
        <input type="text" name="heroStack" id="heroStack">
        <label>Hero Position</label>
        <input type="text" name="heroPos" id="heroPos">

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

    <script src="<?= URLROOT; ?>/js/deck.js"></script>  

<?php require APPROOT . '/views/inc/footer.php'; ?>
