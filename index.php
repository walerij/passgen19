<?php
  // Параметр $number - сообщает число 
  // символов в пароле

include "src/passgen.php"
$pass= new passgen();
    
echo $pass->generate_password(9);

  
