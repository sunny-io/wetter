<?php
require 'functions.php'
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Berlin Wetter by Silvia</title>

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="hero is-fullheight is-dark is-bold">

            <div class="hero-body">
                <div class="container has-text-centered">


                    <div class="content is-small">
                        <span> Berlin,
                        </span>
                        <time datetime="1605675993">  <?php echo date('l d.m.Y',  strtotime ($wochenwetter[0]['applicable_date']));?>
                        </time>
                    </div>
                    <div class="rel state">
                        <img src="img/<?php echo $wochenwetter[0]['weather_state_abbr']; ?>.svg" alt="Wetterzustand" width="200" title="Wetterzustand">
                        <p>
                            <span class="min-temp"> 
                            <?php echo round($wochenwetter[0]['min_temp']) ?>° C
                            </span>
                            <span class="max-temp"> <?php echo round($wochenwetter[0]['max_temp']) ?>° C
                            </span>
                        </p>
                    </div>

                    <div class="content is-large state">
                        <p class="is-size-1 is-uppercase has-text-weight-bold"> <?php echo $tagline;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
       

        <!--Slider -->

        <section class="section">
            <div class="container is-max-desktop">
                <div id="wetter-slider" class="keen-slider">

              <?php
                $i = 0;

                for ($i=1; $i < 6 ; $i++): ?>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title"><?php echo date('l',  strtotime ($wochenwetter[$i]['applicable_date']));?></h2>
                        <div class="tile-img">
                            <img src="img/<?php echo $wochenwetter[$i]['weather_state_abbr']; ?>.svg" alt="echo $wochenwetter[$i]['weather_state_name']?>;">
                        </div>

                        <p>
                            <span class="min-temp"> <?php echo round($wochenwetter[$i]['min_temp']); ?> C
                            </span>
                            <span class="max-temp"><?php echo round($wochenwetter[$i]['max_temp']); ?> C
                            </span>
                        </p>
                    </div> 
                <?php endfor ?> 
              
                   <!--  <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/c.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/h.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/lc.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/t.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/hc.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
                    <div class="keen-slider__slide number-slide">
                        <h2 class="title">Wochentag</h2>
                        <div class="tile-img">
                            <img src="img/c.svg" alt="">
                        </div>

                        <p>
                            <span class="min-temp"> 9 C
                            </span>
                            <span class="max-temp"> 9 C
                            </span>
                        </p>
                    </div>
 -->
                </div>
            </div>
        </section>
        </div>
        <!-- JS -->
        <script src="js/keenslider.min.js"></script>
        <script>
        var slider = new KeenSlider("#wetter-slider", {
            spacing: 10,
            slidesPerView: 1.2,
            centered: false,
            loop: false,
            mode: "free-snap",
            dragSpeed: 1,
            breakpoints: {
                "(max-width:400px)":{
                    slidesPerView:1.2,
                    mode: "free-snap",
                },
                "(min-width: 768px)": {
                    slidesPerView: 3.2,
                    mode: "free-snap",
                },
                "(min-width: 1200px)": {
                    slidesPerView: 5,
                    mode: "free-snap",
                },
            },
        })
        </script>

        <!-- Slider Ende-->

    </body>

</html>
