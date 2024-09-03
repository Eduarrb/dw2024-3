<?php require_once("../../resources/config.php"); ?>

<?php include(VIEW_BACK . DS . "head.php"); ?>

<?php include(VIEW_BACK . DS . "nav.php"); ?>

        <div id="layoutSidenav">

            <?php include(VIEW_BACK . DS . "sidenav.php"); ?>
            
            <div id="layoutSidenav_content">
                <main>
                    <?php
                        if(isset($_GET['productos'])){
                            include(VIEW_BACK . DS . "productos.php");
                        }
                        if(isset($_GET['producto-add'])){
                            include(VIEW_BACK . DS . "producto-add.php");
                        }
                        if(isset($_GET['producto-edit'])){
                            include(VIEW_BACK . DS . "producto-edit.php");
                        }
                    ?>
                </main>
                
<?php include(VIEW_BACK . DS . "footer.php"); ?>
