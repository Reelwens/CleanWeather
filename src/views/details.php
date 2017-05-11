<?php
// Include php handler details
include 'includes/handler_details.php';
?>

     <body class="animsition"
      data-animsition-in-class="fade-in-right"
      data-animsition-in-duration="1000"
      data-animsition-out-class="fade-out-right"
      data-animsition-out-duration="800">
    
    <div class="container details">
       
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Météo sur 4 jours</h1>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-info btn-lg animsition-link" href="index.php">< Accueil</button>
                </div>
            </div>
            <div class="row fourDays">
                <?php for($i=8; $i<=32; $i=$i+8 ) { ?>
                <div class="col-md-3 text-center dayBox">
                    <p class="day"><?= (substr($forecast->list[$i]->dt_txt, 5, 5)) ?></p>
                    <img src="img/weather_icon/<?= $forecast->list[$i]->weather[0]->icon ?>.svg" alt="Image">
                    <p class="temp"><?= $forecast->list[$i]->main->temp ?>°</p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>


<!-- Scripts -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" charset="utf-8"></script>
<script src="js/script.js" charset="utf-8"></script>