<!DOCTYPE html>
<?php
    require_once 'Config/Config.php';
    $getURL;
    if(isset($_GET["page"]))
    {
        $getURL = htmlspecialchars($_GET["page"]);
    }
    else
    {
        header("Location: strona-domowa");
        exit();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <?php
        echo '<title>'.$siteTitle.'</title>';
        echo '<link rel="icon" type="image/png" href="'.$siteIcon.'">';
        ?>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Fjalla+One|Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    
    <body>
        <div id="wrapper">
            <?php
                    include 'componentsPage/logo.php';
                    include 'componentsPage/sideLinks.php';
                    include 'componentsPage/content.php';
                    include 'componentsPage/Clear.php';
                    include 'componentsPage/footer.php';
            ?>
        </div> 
    </body>
</html>
