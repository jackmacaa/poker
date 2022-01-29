<?php require APPROOT . '/views/inc/header.php'; ?>

    <header>

    <a href="<?php echo URLROOT; ?>"><h1><?= $data['title']; ?></h1></a>   

    </header> 

    <div class="box-row">

        <a href="<?php echo URLROOT; ?>/players/add">Add Player</a>

        <a href="<?= URLROOT; ?>">Home</a>

    </div>

<hr>

    <div class="box-row">

        <div class="row">
            <a href="#">View Player</a>
            <select>
                <option>Player 1</option>
                <option>Player 2</option>
                <option>Player 3</option>
            </select> 

        </div>
  
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>