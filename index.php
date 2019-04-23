<?php
  // Параметр $number - сообщает число 
  // символов в пароле

include "src/passgen.php"
$new_pass= new passgen();


    
echo $new_pass->generate_password(9);

  
