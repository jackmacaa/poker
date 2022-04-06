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
            <button onclick="cards('<?= $card ; ?>')" id="btn<?= $card ; ?>"> <?= $card ; ?> </button>
        <?php endforeach; ?>

    </div>

    <div class="players">

        <div class="player">
            <span>Hero</span>
        </div>
        <div class="player">
            <span>Villian</span>
        </div>
     
    </div>    


    <div class="players">

        <div class="player">
    
            <label>Cards</label>
            <input type="text" name="heroCardOne" id="heroCardOne" maxlength="2" size="2" autofocus>
            <input type="text" name="heroCardTwo" id="heroCardTwo" maxlength="2" size="2">

            <label>Stack</label>
            <input type="number" name="heroStack" id="stack">

            <select name="positions" id="positions">
                <option value="">Position</option>
                <option value=sb">SB</option>
                <option value="BB">BB</option>
                <option value="utg">UTG</option>
                <option value="mp">MP</option>
                <option value="hj">HJ</option>
                <option value="co"">CO</option>
                <option value="bn"">BN</option>
            </select>

        </div> 

        <div class="player">
    
            <label>Cards</label>
            <input type="text" name="villianCardOne" id="villianCardOne" maxlength="2" size="2">
            <input type="text" name="villianCardTwo" id="villianCardTwo" maxlength="2" size="2">

            <label>Stack</label>
            <input type="number" name="villianStack" id="stack">

            <select name="positions" id="positions">
                <option value="">Position</option>
                <option value=sb">SB</option>
                <option value="BB">BB</option>
                <option value="utg">UTG</option>
                <option value="mp">MP</option>
                <option value="hj">HJ</option>
                <option value="co"">CO</option>
                <option value="bn"">BN</option>
            </select>

        </div>

    </div>

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

       

    <script src="<?= URLROOT; ?>/js/deck.js"></script>  

<?php require APPROOT . '/views/inc/footer.php'; ?>
