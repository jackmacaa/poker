<?php require APPROOT . '/views/inc/header.php'; ?>

<header>
    <h1><?= $data['title']; ?></h1>   
</header> 

<main>
    <a href="<?php echo URLROOT; ?>/players/add">Add new player</a>

    <div class="row">
        <a href="view-player.php">View player</a>
        <select>
            <option>Player 1</option>
            <option>Player 2</option>
        </select>    
    </div>

</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>
