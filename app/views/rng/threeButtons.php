<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?= URLROOT; ?>/css/rngStyles.css">
<body>

    <div class="container">

    <a href="<?php echo URLROOT; ?>/rng"><h1><?php echo $data['title']; ?></h1></a>

        <div id="answer">Intial</div>

        <div class="buttons">
            <button onclick="document.getElementById('answer').innerHTML = getRndInteger25(0,100)"><img src="../img/button2.png"><div class="text1">25%</div></button>
            <button onclick="document.getElementById('answer').innerHTML = getRndInteger50(0,100)"><img src="../img/button2.png"><div class="text1">50%</div></button>
            <button onclick="document.getElementById('answer').innerHTML = getRndInteger75(0,100)"><img src="../img/button2.png"><div class="text1">75%</div></button>
        </div>

        <a href="<?= URLROOT; ?>/rng">RNG</a>

        <a href="<?= URLROOT; ?>">Home</a>
        
    </div>

    

<script src="<?= URLROOT; ?>/js/rng.js"></script>  

<?php require APPROOT . '/views/inc/footer.php'; ?>