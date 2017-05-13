<body class="<?= $current_weather ?> animsition">
    <?php include $current_weather.'.php'; ?>
    
    <div class="container dayInformation">
        <div class="row">
            <div class="col-sm-offset-6 col-sm-6 text-right">
            
                <p class="city"><?= $forecast->name ?></p>
                <p class="temperature"><?= $forecast->main->temp ?>°</p>
                <p class="resume"><?= ucfirst($forecast->weather[0]->description) ?></p>
                <p class="minMax"><span class="min"><?= $forecast->main->temp_min ?>°C</span><span class="max"><?= $forecast->main->temp_max ?>°C</span></p>
                
               <div class="row">
                    <div class="col-lg-offset-6 col-lg-6">
                        <div id="sb-search" class="sb-search">
                            <form>
                                <input class="sb-search-input" placeholder="Entrer une ville..." type="text" value="" name="city" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"></span>
                            </form>
                        </div>
                    </div>
                </div>
                
                
                <button type="button" class="btn btn-info btn-lg animsition-link" href="details.php<?= !empty($_GET['city']) ? '?city='.$_GET['city'] : '' ?>">4 Jours ></button>
            </div>
        </div>
    </div>
</body>


<!-- Scripts -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" charset="utf-8"></script>
<script src="http://matthew.wagerfield.com/parallax/deploy/jquery.parallax.js" charset="utf-8"></script>
<script src="js/script.js" charset="utf-8"></script>