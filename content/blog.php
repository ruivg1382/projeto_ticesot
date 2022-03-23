<?php 
 include_once ('../header2.php'); 
include_once('../db/conexion.php');

$consulta = $pdo->query("SELECT * FROM blog order by id_blog desc;");








 
 ?>

 

<div class='container-fluid my-5'>
    <div class='row my-5'>
        <div class='col-md-1  mx-0'>

           
           

        </div>
        <div class='col-md-10 shadow-md my-5 mx-5'>
            
                <?php

                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='mb-3 card p-5 shadow-lg'>{$linha['noticia']} <br /><small>cod nº 0{$linha['id_blog']}<br>";
                    echo date('d/M/Y')."</small><span class='text-center mx-5'> <strong>Autor:</strong><i>{$linha['autor']}</i></span></div>";

                    }

                ?>
          
        </div>
        <div class='col-md-1'></div>
    </div>
</div>


<?php
include_once('../footer.php');
?>