
<?php include_once("../header2.php");?>



<div class='container-fluid my-5'>




    
    <br>


    <div class='row'>
        <div class='col-md-4'>

        </div>

        <div class='col-md-4 col-sm-12'>

       

        <form class="row g-3 card my-5 p-3 shadow-lg " method="post" action="acesso.php">
  <div class="col-md-6 ">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="senha">
  </div>
 
  
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">login</button>
  </div>
</form>

<?php if(isset($_GET['error'])){?>


<div class='alert alert-danger'>Erro na autenticação, verifique o seu email ou password.</div>


<?php }?>

        </div>
    </div>

    

        </div>
        <div class="col-md-4"></div>
    </div>
</div>