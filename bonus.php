<?php 
    $secretIsVisible = false;
    $secretName = "Pickle Rick";
    $secretPowers = ["Pickle power", "Rat power", "Smarter than the rest of the world"];
    $secretImage = 'assets/images/pickleRick.gif';
    $secretMessage = "Wubawubawuba !";

    if ($secretIsVisible === true) {
?>
        <div class="card">
            <img 
                src="<?php echo $secretImage?>" 
                class="card-img-top" 
                alt="pickle rick"
            >
            <div class="card-body text-dark">
                <h5 class="card-title">
                    <?php echo $secretName ?>
                </h5>
                <p class="card-text">
                    Super Powers : <br>
                    <?php 
                        for ($i=0; $i <count($secretPowers) ; $i++) { 
                            echo "- " .$secretPowers[$i] .'<br>';
                        }
                    ?>
                    <br>
                    <?php echo $secretMessage; ?>
                </p>
            </div>
        </div>
<?php
    }
?>