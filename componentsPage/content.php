<div id="content">
        <?php
        require_once 'index.php';
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