<?php
    include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP-Dischi</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../PHP/css/style.css">

</head>
<body>

    <div class="container">

        <!-- HEADER -->
        <header>

            <div class="logo">
                <img src="img/Spotify_icon.png" alt="">
            </div>

        </header>
        <!-- END HEADER -->

        <!-- MAIN -->
        <main>

            <div class="wrapper-cd">

                <?php foreach( $database as $cds ) { ?>

                <!-- single-cd -->
                <div class="single-cd">

                    <!-- Poster -->
                    <img src="<?php echo $cds['poster']; ?>" alt="<?php echo $cds['title']; ?>">
                    
                    <!-- Title -->
                    <h3><?php echo $cds['title']; ?></h3>
                    
                    <!-- Author -->
                    <h4><?php echo $cds['author']; ?></h4>
                    
                    <!-- Years -->
                    <h5><?php echo $cds['year']; ?></h5>

                </div>
                <!-- end single-cd -->

                <?php } ?>

            </div>

        </main>
        <!-- END MAIN -->

    </div>

    
</body>
</html>