<?php require APPROOT . '/views/inc/header.php'; ?>

    <h2 ><?php echo $data['title']; ?></h2>

    <h1> Players Index </h1>

    <div class="row">
        <a href="#">View player</a>
        <select>
            <option>Player 1</option>
            <option>Player 2</option>
            <option>Player 3</option>
        </select>    
    </div>

    <a href="<?= URLROOT; ?>">Home</a>

<?php require APPROOT . '/views/inc/footer.php'; ?>