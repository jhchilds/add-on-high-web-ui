<?php
include("top.php");
include("nav.php");

$directory = "/Users/joshuachilds/Desktop/undergrad_uvm/web-dev/add-on-high/images";



$files = scandir($directory);

$chunky_files = array_chunk($files, count($files) / 4);
?>
<main class='row content'>

    <?php
    print "<section class='column index-image'>\n";
    for ($i = 2; $i <= 8; $i++) {
        print "<img src= 'images/" . $files[$i] . "' > \n";
    }
    print "</section>\n";

    print "<section class='column index-image'>\n";
    for ($i = 9; $i <= 15; $i++) {
        print "<img src= 'images/" . $files[$i] . "' > \n";
    }
    print "</section>\n";

    print "<section class='column index-image'>\n";
    for ($i = 16; $i <= 22; $i++) {
        print "<img src= 'images/" . $files[$i] . "' > \n";
    }
    print "</section>\n";

    print "<section class='column index-image'>\n";
    for ($i = 23; $i <= 29; $i++) {
        print "<img src= 'images/" . $files[$i] . "' > \n";
    }
    print "</section>\n";
    ?>



</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="../javascript/smooth_scrolling.js"></script>
<script src="../javascript/jquery-3.3.1.min.js"></script>

<script>
    window.sr = ScrollReveal({duration: 1500});
    sr.reveal('.site-content .d-flex');
    sr.reveal('.site-content');
    sr.reveal('.navbar .navbar-brand');
    sr.reveal('.section-1 .card');
    sr.reveal('.section-2 .d-flex');
    sr.reveal('.section-2 .container-fluid');
    sr.reveal('.section-2 img');
    sr.reveal('.section-2a img');
    sr.reveal('.section-2b img');
    sr.reveal('.section-2c img');
    sr.reveal('.section-3 .col-md-4');
    sr.reveal('.section-4 .col-md-7, .col-md-5');
</script>


</body>
</html>
<!--****************************START SECTION 1******************************-->
