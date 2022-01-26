<?php require APPROOT . '/views/inc/header.php'; ?>

<header>
<h2 class="text-center"><?php echo $data['title']; ?></h2>

    <div class="box-row">

        <div class="left-box">

            <div class="item">
                <label for="name">Name:</label>
                <input type="text" id="name"> 
            </div>

            <div class="item">
                <label for="colour">Colour:</label>
                <input type="color" id="colour" value="#FFFFFF">
            </div>

            <div class="item">
                <label for="type">Type:</label>
                <select id="type">
                    <option>TAG</option>
                    <option>LAG</option>
                    <option>NIT</option>
                </select>
            </div>

        </div>

        <div class="right-box">
            <img src="../img/photo.png">
        </div>

    </div>
    <hr>
</header>
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
                    <input type="range" id="pre-flop-raise" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
                    <output>50</output>
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
                    <button onclick="occurrences('decreasePreFlopRaise')">-</button>
                    <input type="number" value="0" id="pre-flop-raise-occurrences" min="1" max="1000">
                    <button onclick="occurrences('increasePreFlopRaise')">+</button>
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
                    <input type="range" id="pre-flop-aggression" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
                    <output>50</output>
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
                    <button onclick="occurrences('decreasePreFlopAggression')">-</button>
                    <input type="number" value="0" id="pre-flop-aggression-occurrences" min="1" max="1000">
                    <button onclick="occurrences('increasePreFlopAggression')">+</button>
                </div> 

            </div>
        </div>
        
        <div class="notes">
            <label for="preflop-notes">PRE-FLOP NOTES</label>
            <textarea id="preflop-notes" rows="7" cols="50"></textarea> 
        </div>
          
    </section>
    
<footer>

    <a href="<?= URLROOT; ?>">Home</a>

</footer>

<?php require APPROOT . '/views/inc/footer.php'; ?>