<?php require APPROOT . '/views/inc/header.php'; ?>

    <header>

    <a href="<?php echo URLROOT; ?>"><h1><?= $data['title']; ?></h1></a>   
        
    </header> 

    <div class="box-row">

        <a href="<?php echo URLROOT; ?>/notes/add">Add Note</a>

        <a href="<?= URLROOT; ?>">Home</a>
        
    </div>

    <hr>

    <section class="box-column">
        
        <h2 class="text-center">Notes Title</h2>
        <h3>Created on: 26/01/22</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus delectus consectetur et corrupti, excepturi necessitatibus consequatur molestiae sed laboriosam quas unde eius incidunt maiores hic officia voluptatum repudiandae ipsa in?</p>

    </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>
