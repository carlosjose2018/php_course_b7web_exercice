<?php

session_start();

$array_inputs = [
    'name' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS),
    'age' => filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT),
    'profession' => filter_input(INPUT_POST, 'profession', FILTER_SANITIZE_SPECIAL_CHARS),
    'email' => filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL),
    'textarea' => filter_input(INPUT_POST, 'textarea')
];



if($array_inputs['name']){

  $table_output = file_get_contents('table.txt');

  $table_output .= '
 
     <div class="row pt-2 pb-2 border-bottom bg-secondary">
       <div class="col-4">'. $array_inputs['name'] .'</div>
       <div class="col-1">'. $array_inputs['age'] .'</div>
       <div class="col-3">'. $array_inputs['profession'] .'</div>
       <div class="col-4">'. $array_inputs['email'] .'</div>
     </div>

     <div class="d-flex flex-column container-fluid border-bottom pt-2 pb-2 border-bottom">
       <div class="d-flex justify-content-center">Descrição:</div>
       <div>'. $array_inputs['textarea'] .'</div>
     </div>

';

 file_put_contents('table.txt',$table_output);

 header("Location:index.php");

}else{
  
    $_SESSION['alert'] = '<div class="alert alert-danger mt-4" role="alert">
                               Preencha os items corretamente!
                          </div>';
    //when you are sure that all fields are empty.
    header("Location:index.php");
    exit;

}



//Implemeteion function anonyma
