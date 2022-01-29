<?php require APPROOT . '/views/inc/header.php'; ?>

    <header>

        <h1><?= $data['title']; ?></h1>   
        
    </header> 

    <div class="box-row">

        <a href="<?php echo URLROOT; ?>/players/index">Players</a> 

        <a href="<?php echo URLROOT; ?>/notes/index">Notes</a>

        <a href="<?php echo URLROOT; ?>/hands/index">Hands</a>

        <a href="<?php echo URLROOT; ?>/rng/index">RNG</a>
        
    </div>

    <div class="box">
        <p>This poker app is aimed to assist live play, the ability to save hands, notes and detailed profiles on other players.</p>
        <p>Eventually once the basic CRUD functionality is done, there will be functions for randomising and alternate views to assist in taking notes in the moment.</p> 
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
