<?php 
    
    function timeFromNow($milestone){
        
        // http://stackoverflow.com/questions/2040560/finding-the-number-of-days-between-two-dates
        $now = time(); // or your date as well
        //$your_date = strtotime("2010-01-01");
        $your_date = strtotime($milestone);
        $datediff = $now - $your_date;
        $daysFromNow = floor($datediff/(60*60*24));
        if ($daysFromNow < 0) {
            if($daysFromNow == -1){
                return ' &mdash; 1 day from now';    
            } else {
                return ' &mdash; ' . abs($daysFromNow) . " days from now";    
            }
        } else {
            return;
        }
        
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>    
    <title>Client Name Project Hub</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="" />

    <!-- http://blog.javierusobiaga.com/stop-using-the-viewport-tag-until-you-know-ho -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="http://fonts.googleapis.com/css?family=Karla:400,700,400italic" rel="stylesheet" type="text/css" />
    <link href="../c/project-hub.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="wrap clearfix">


        <div class="page-header-wrap">

            <header class="page-header" role="banner">
                <h1 class="page-header-title">Client Name</h1>
                <h2 class="page-header-subtitle">Project Hub</h2>
            </header>       

        </div><!-- .page-header-wrap -->



        <section role="main" class="main">


            <article class="entry entry-future">
                <h1 class="entry-title">Design Round 11</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>
                    
            </article><!-- .entry -->



            <article class="entry entry-future">
                <h1 class="entry-title">Design Round 10</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>
                    
            </article><!-- .entry -->



            <article class="entry entry-future">
                <h1 class="entry-title">Design Round 9</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>
                    
            </article><!-- .entry -->



            <article class="entry entry-future">
                <h1 class="entry-title">Design Round 8</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>
                    
            </article><!-- .entry -->



            <article class="entry entry-future">
                <h1 class="entry-title">Design Round 7</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>
                    
            </article><!-- .entry -->



            <article class="entry entry-future">
                <h1 class="entry-title">Design Round 6</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>
                    
            </article><!-- .entry -->



            <article class="entry entry-future">
                <h1 class="entry-title">Design Round 5</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>
                    
            </article><!-- .entry -->



            <article class="entry entry-future">
                <h1 class="entry-title">Design Round 4</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>
                    
            </article><!-- .entry -->



            <article class="entry entry-latest">
                <h1 class="entry-title">Design Round 3</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>

                <p>Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet.</p>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home Variation</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                    
            </article><!-- .entry -->



            <article class="entry">
                <h1 class="entry-title">Design Round 2 a long title of this entry</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>

                <p>Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet.</p>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home Variation</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                    
            </article><!-- .entry -->



            <article class="entry">
                <h1 class="entry-title">Design Round 1</h1>
                <p class="entry-date">June 4, 2014<?php echo timeFromNow('2014-06-04'); ?></p>

                <p>Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet.</p>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home Variation</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                    
            </article><!-- .entry -->


        </section><!-- .main -->

    </div><!-- .wrap -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../j/project-hub.js"></script>
    

</body>
</html>

    