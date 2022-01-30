<?php require APPROOT . '/views/inc/header.php'; ?>

<header>
<a href="<?= URLROOT; ?>/players"><h2 class="text-center"><?php echo $data['title']; ?></h2></a>
</header>

<form action="<?php echo URLROOT; ?>/players/edit/<?php echo $data['id']; ?>" method="post">
    <div class="box-row">

        <div class="left-box">

            <div class="item">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?= $data['name']; ?>"> 
            </div>

            <div class="item">
                <label for="colour">Colour:</label>
                <input type="color" name="colour" id="colour" value="<?= $data['colour']; ?>">
            </div>
           
            <div class="item">
                <label for="type">Type:</label>
                <select name="type" id="type">
                    <option <?php if($data['type'] == "UNKNOWN") echo 'selected="selected"'; ?>>UNKNOWN</option>
                    <option <?php if($data['type'] == "TAG") echo 'selected="selected"'; ?>>TAG</option>
                    <option <?php if($data['type'] == "LAG") echo 'selected="selected"'; ?>>LAG</option>
                    <option <?php if($data['type'] == "NIT") echo 'selected="selected"'; ?>>NIT</option>
                </select>
            </div>

            <div class="item">
                <label for="image">Image:</label>
                <input type="text" name="image" id="image" value="<?= $data['image']; ?>"> 
            </div>



        </div>

        <div class="right-box">
            <img name="image" src="<?= $data['image']; ?>" alt="Profile Image">
        </div>

    </div>
    <hr>

    <!-- Pre-flop section -->
    <section class="box-column">

        <h3 class="heading">PRE-FLOP</h3>
        <!-- Pre-flop Raise -->
        <div class="stats-box">

            <div class="slider-box">

                <div class="label-box">
                    <label for="pre-flop-raise">PRE-FLOP RAISE</label>
                </div>
                <div class="slider">
                    <input type="range" id="pre-flop-raise" value="<?= $data['preflop_raise']; ?>" name="pre-flop-raise" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
                    <output><?= $data['preflop_raise']; ?></output>
                </div>

                <div class="box-row2">
                    <p>Tight</p> 
                    <p>Loose</p> 
                </div>  

            </div>

            <div class="slider-box">

                <div class="label-box">
                    <label for="pre-flop-raise-occurrences">Occurrences</label>
                </div>
                <div class="number">
                    <button type="button" onclick="occurrences('decreasePreFlopRaise')">-</button>
                    <input type="number" value="<?= $data['preflop_raise_occur']; ?>" name="pre-flop-raise-occurrences" id="pre-flop-raise-occurrences" min="1" max="1000">
                    <button type="button" onclick="occurrences('increasePreFlopRaise')">+</button>
                </div> 

            </div>

        </div>

        <!-- Pre-flop aggression -->
        <div class="stats-box">

            <div class="slider-box">

                <div class="label-box">
                    <label for="pre-flop-aggression">PRE-FLOP AGGRESSION</label>
                </div>
                <div class="slider">
                    <input type="range" value="<?= $data['preflop_aggro']; ?>" id="pre-flop-aggression" name="pre-flop-aggression" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
                    <output><?= $data['preflop_aggro']; ?></output>
                </div>

                <div class="box-row2">
                    <p>Passive</p> 
                    <p>Aggressive</p> 
                </div>

            </div>

            <div class="slider-box">

                <div class="label-box">
                    <label for="pre-flop-aggression-occurrences">Occurrences</label>
                </div>
                <div class="number">
                    <button type="button" onclick="occurrences('decreasePreFlopAggression')">-</button>
                    <input type="number" value="<?= $data['preflop_aggro_occur']; ?>" id="pre-flop-aggression-occurrences" name="pre-flop-aggression-occurrences" min="1" max="1000">
                    <button type="button" onclick="occurrences('increasePreFlopAggression')">+</button>
                </div> 

            </div>
        </div>
        
        <div class="notes">
            <label for="preflop-notes">PRE-FLOP NOTES</label>
            <textarea id="preflop-notes" name="pre-flop-notes" rows="7" cols="50"><?= $data['preflop_notes']; ?></textarea> 
        </div>

        <input type="submit" value="save">

    </section>

</form>

<div class="notes">

    <form action="<?php echo URLROOT; ?>/players/delete/<?= $data['id']; ?>" method="post" onSubmit="return confirm('Are you sure?');" >

        <input type="submit" value="Delete">

    </form>

</div>


<footer>

    <a href="<?= URLROOT; ?>">Home</a>

</footer>

<script src="<?= URLROOT; ?>/js/main.js"></script>

<?php require APPROOT . '/views/inc/footer.php'; ?>