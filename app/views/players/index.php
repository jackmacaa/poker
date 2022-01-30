<?php require APPROOT . '/views/inc/header.php'; ?>

    <header>

    <a href="<?php echo URLROOT; ?>"><h1><?= $data['title']; ?></h1></a>   

    </header> 

    <div class="box-row">

        <a href="<?php echo URLROOT; ?>/players/add">Add Player</a>

        <a href="<?= URLROOT; ?>">Home</a>

    </div>

<hr>

    <div class="box-column">

        <?php foreach($data['players'] as $player) : ?>

            <div class="box-row2">

                <a href="<?php echo URLROOT; ?>/players/edit/<?= $player->id; ?>"><?= $player->name; ?> : </a>
                <p><?= "colour: " . $player->colour; ?> </p>
                <p><?= "Type: " . $player->type; ?> </p>
                
                <br>

            </div>

        <?php endforeach; ?>

    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>