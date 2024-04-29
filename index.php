<!DOCTYPE html>
<?php
    include __DIR__."/template/config.inc.php";

    require_once __DIR__."/template/header.inc.php"; 
?>

<body>
    <header>
        <h1>
            <span aria-hidden="true">&#128009;</span>Dragon<span> Ball Z</span>
        </h1>
    </header>


    <?php 
        require_once __DIR__."/template/main.inc.php";

        require_once __DIR__."/template/footer.inc.php";
    ?>


</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>