<?php require APPROOT . '/views/inc/header.php'; ?>

    <header>

    <a href="<?php echo URLROOT; ?>/hands"><h1><?= $data['title']; ?></h1></a>   
        
    </header> 

    <div class="box-row">

        <a href="<?php echo URLROOT; ?>/hands/index">View Hands</a>

        <a href="<?= URLROOT; ?>">Home</a>
        
    </div>

    <form action="">

        <div class="notes">

            <label for="title">title</label>
            <input name="title" type="text">

            <textarea id="notes" rows="7" cols="50">FLOP INFO</textarea>
            <textarea id="notes" rows="7" cols="50">TURN INFO</textarea>
            <textarea id="notes" rows="7" cols="50">RIVER INFO</textarea>

            <button>Save</button>

        </div>

    </form>

<?php require APPROOT . '/views/inc/footer.php'; ?>
