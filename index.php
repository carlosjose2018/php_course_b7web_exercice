
<?php require_once('header.php');?>

<?php session_start(); ?>

<div class="container-fluid height bg-primary-subtle">

<div class="container-sm pt-4 ">
<img src="https://img.freepik.com/vetores-gratis/mulher-verificar-gigante-lista-de-verificacao-fundo_23-2148090965.jpg?w=740&t=st=1686597211~exp=1686597811~hmac=6514d5ec15b3999bb723b12ea8c09514662657cee71ff4fb77879781e39334ea" class="img-thumbnail img-container" alt="imagem contador">
<form method="POST" action="receiver.php">
  
  <?php

  if($_SESSION['alert']){
    echo $_SESSION['alert'];
     $_SESSION['alert'] = '';
  }
  
  ?>

  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nome completo">
    <div id="emailHelp" class="form-text">Entre com nome valido.</div>
  </div>
  <div class="mb-3 d-flex">

    <div class="w-25">
     <label for="exampleInputEmail1" class="form-label">Idade:</label>
     <input type="number" class="form-control" id="exampleInputEmail1" name="age" placeholder="Idade">
     <div id="emailHelp" class="form-text">Entre com uma idade valida.</div>
    </div>
    <div class="w-25 ms-4">
     <label for="exampleInputEmail1" class="form-label">Profissão:</label>
     <input type="text" class="form-control" id="exampleInputEmail1" name="profession" placeholder="Profissão">
     <div id="emailHelp" class="form-text">Profissão.</div>
    </div>
    <div class="w-50 ms-4">
     <label for="exampleInputEmail1" class="form-label">E-mail:</label>
     <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="E-mail">
     <div id="emailHelp" class="form-text">E-mail.</div>
    </div>
  </div>


  <div class="form-floating mt-4 mb-3">
   <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="textarea"></textarea>
   <label for="floatingTextarea2">Descrição</label>
  </div>
  
  <div class="d-flex">
     <button type="submit" class="btn btn-primary w-50">Enviar</button>
     <button type="button" class="btn btn-danger ms-4">Limpar</button>
  </div>
</form>

<table class="table mt-4">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">NOME</th>
       <th scope="col">IDADE</th>
       <th scope="col">PROFISSÃO</th>
     </tr>
   </thead>
   <tbody>
<?php 
 echo  file_get_contents('table.txt');
?>
   </tbody>
 </table>
 </div>
</div>




<?php require_once('footer.php'); ?>