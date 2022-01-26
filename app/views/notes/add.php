<?php require APPROOT . '/views/inc/header.php'; ?>

    <header>

        <h1><?= $data['title']; ?></h1>   
        
    </header> 

    <div class="box-row">

        <a href="<?php echo URLROOT; ?>/notes/index">View Notes</a>

        <a href="<?= URLROOT; ?>">Home</a>
        
    </div>

    <form action="">

        <div class="notes">

            <label for="title">title</label>
            <input name="title" type="text">

            <textarea id="notes" rows="7" cols="50"></textarea>

            <button>Save</button>

        </div>

    </form>

<?php require APPROOT . '/views/inc/footer.php'; ?>
