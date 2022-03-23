<?php include_once('../header2.php'); ?>




<div class='container-fluid my-5'>
   <div class='row'>
       <div class='col-md-2'></div>
       <div class='col-md-8  my-5 text-center'>
          <h5 class="text-center p-2"> Escreve sua Redação abaixo.</h5>

           <?php

                if(isset($_GET['sucesso'])){
            ?>

            <div class="alert alert-success">
                Publicação Feito com sucesso!
            </div>


            <?php

                }

            ?>

           <form action='../db/insertion.php' method="post">
               <textarea name="conteudo">

               </textarea>
               <div class="my-3">
               <input type='text' name="autor" class="form-control" placeholder="Nome do Autor de Post" required>
                </div>

                <div class="my-3">

                    <input type='submit' class="btn btn-outline-primary p-3" value="Clique aqui para publicar">
                </div>
           </form>

           <hr>
           <?php echo @$_POST['conteudo']; ?>

       </div>
       <div class='col-md-2'></div>
   </div>
</div>


<script src="../ckeditor/ckeditor.js">



</script>

<script>
    CKEDITOR.replace('conteudo')
</script>