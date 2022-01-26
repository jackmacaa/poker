<?php require APPROOT . '/views/inc/header.php'; ?>

    <h1 ><?php echo $data['title']; ?></h1>

    <a href="<?php echo URLROOT; ?>/players/add">Add Player</a>

    <div class="row">
        <a href="#">View Player</a>
        <select>
            <option>Player 1</option>
            <option>Player 2</option>
            <option>Player 3</option>
        </select>    
    </div>

    <a href="<?= URLROOT; ?>">Home</a>   

<?php require APPROOT . '/views/inc/footer.php'; ?>