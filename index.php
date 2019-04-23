<?php
  // Параметр $number - сообщает число 
  // символов в пароле

include "src/passgen.php"
$new_pass= new info\passgen();

$a=9;
    
echo $new_pass->generate_password($a);

  
