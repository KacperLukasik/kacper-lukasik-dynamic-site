<?php
    $getURL;
    if(isset($_GET["page"]))
    {
        $getURL = htmlspecialchars($_GET["page"]);
    }
    else
    {
        header("Location: index.php?page=about");
        exit();
    }
?>

<div id="content">
        <?php
        $pagePatch = 'Pages/'.$getURL.'.php';
        if(file_exists($pagePatch))
        {
            include 'Pages/'.$getURL.'.php';
        }
        else
        {
            include 'Pages/404.php';
        }      
        ?>
</div>