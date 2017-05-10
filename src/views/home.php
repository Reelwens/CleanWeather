<body class="sun animsition">
    <?php include 'cloud.php'; ?>
    
    <div class="container dayInformation">
        <div class="row">
            <div class="col-md-offset-6 col-md-6 text-right">
                <p class="city"><?= $forecast->name ?> :</p>
                <p class="temperature"><?= $forecast->main->temp ?><span>°C</span></p>
                <p class="resume"><?= ucfirst($forecast->weather[0]->description) ?></p>
                <p class="minMax"><span class="min"><?= $forecast->main->temp_min ?>°C</span><span class="max"><?= $forecast->main->temp_max ?>°C</span></p>
                <button type="button" class="btn btn-info btn-lg animsition-link" href="details.php">Détails ></button>
            </div>
        </div>
    </div>
</body>


<!-- Scripts -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" charset="utf-8"></script>
<script src="http://matthew.wagerfield.com/parallax/deploy/jquery.parallax.js" charset="utf-8"></script>
<script src="js/script.js" charset="utf-8"></script>