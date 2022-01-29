<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?= URLROOT; ?>/css/rngStyles.css">
<body>

    <div class="container">

    <a href="<?php echo URLROOT; ?>/rng"><h1><?php echo $data['title']; ?></h1></a>

        <div id="timerResult">Intial</div>

        <div class="buttons">

            <label for="seconds">Amount of Seconds Delay</label>
            <input id="seconds" name="seconds" type="number" value="1">

            <button onclick="runTimer()">
                <img src="../img/button2.png"><div class="text1">Start</div>
            </button>

            <button onclick="stopTimer()">
                <img src="../img/button2.png"><div class="text1">Stop</div>
            </button>  

        </div>

        <a href="<?= URLROOT; ?>/rng">RNG</a>

        <a href="<?= URLROOT; ?>">Home</a>
        
    </div>

<script src="<?= URLROOT; ?>/js/rng.js"></script>  

<?php require APPROOT . '/views/inc/footer.php'; ?>