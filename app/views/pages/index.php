<?php require APPROOT . '/views/inc/header.php'; ?>

    <header>

        <h1><?= $data['title']; ?></h1>   
        
    </header> 

    <div class="box-row">

        <a href="players/index">View players</a> 

        <a href="<?php echo URLROOT; ?>/notes/index">View Notes</a>

        <a href="<?php echo URLROOT; ?>/hands/index">View Hands</a>
        
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
