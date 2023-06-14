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
 
     <tr>
       <th scope="row">1</th>
       <td>'. $array_inputs['name'] .'</td>
     </tr>
     <tr>
       <th scope="row">2</th>
       <td>'. $array_inputs['age'] .'</td>
     </tr>
     <tr>
       <th scope="row">3</th>
       <td colspan="2">'. $array_inputs['profession'] .'</td>
     </tr>
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
