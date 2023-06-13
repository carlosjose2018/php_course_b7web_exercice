<?php

session_start();

$search_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$search_age = filter_input(INPUT_POST, 'age',FILTER_SANITIZE_NUMBER_INT);
$search_profission = filter_input(INPUT_POST, 'profession',FILTER_SANITIZE_SPECIAL_CHARS);
$search_email = filter_input(INPUT_POST, 'email',   FILTER_VALIDATE_EMAIL);
$search_textarea = filter_input(INPUT_POST,'textarea');


if($search_name && $search_age && $search_email){
   echo "You have searched for $search_name.</br>"; 
   echo "You have searched for $search_age.</br>";
   echo "You have searched for $search_profission.</br>";
   echo "You have searched for $search_email.</br>";
   echo "$search_textarea.</br>";
}else{
  
    $_SESSION['alert'] = '<div class="alert alert-danger mt-4" role="alert">
                               Preencha os items corretamente!
                          </div>';
    //when you are sure that all fields are empty.
    header("Location:index.php");
    exit;

}



