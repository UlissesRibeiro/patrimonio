<?php

include_once 'includes/navbar.php';

?>

    <main>
        <section class="contact-page-area section-gap">
            <div class="container" style="padding-top: 100px;">
                <div class="row"></div>
                    <div class="col-lg-12">
                    <?php
                    require_once("cfg" . DIRECTORY_SEPARATOR . "verifica_login.php");
                    ?>
                    
                    <!--<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
                    <h2><a href="logout.php">Sair</a></h2>-->
                        
                    </div>
                </div>
        </section>
      </main>
</body>
</html>