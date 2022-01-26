<?php require APPROOT . '/views/inc/header.php'; ?>

    <header>

        <h1><?= $data['title']; ?></h1>   
        
    </header> 

    <div class="box-row">

        <a href="<?php echo URLROOT; ?>/players/add">Add new player</a>

        <a href="players/index">View player</a> 
        
    </div>

    <hr>

    <div class="notes mb-5">

        <label for="notes">GENERAL NOTES</label>
        <textarea id="notes" rows="7" cols="50"></textarea>
        <button>Save</button>

    </div>

    <section class="box-column text-center">
        
        <h2>Notes Title</h2>
        <h3>Created on: 26/01/22</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus delectus consectetur et corrupti, excepturi necessitatibus consequatur molestiae sed laboriosam quas unde eius incidunt maiores hic officia voluptatum repudiandae ipsa in?</p>

    </section>

<?php require APPROOT . '/views/inc/footer.php'; ?>
