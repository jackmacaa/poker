<?php require APPROOT . '/views/inc/header.php'; ?>

<body>

    <header>

    <a href="<?php echo URLROOT; ?>"><h1><?= $data['title']; ?></h1></a>   

    </header> 

    <div class="box-row">

        <a href="<?= URLROOT; ?>/rng/threeButtons">Three Buttons</a>

        <a href="<?= URLROOT; ?>/rng/timer">Timer</a>

        <a href="<?= URLROOT; ?>">Home</a>

    </div>

<hr>

<?php require APPROOT . '/views/inc/footer.php'; ?>