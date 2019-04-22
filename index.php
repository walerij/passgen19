<?php
  // Параметр $number - сообщает число 
  // символов в пароле

namespase info;
$pass= new passgen();
    
echo $pass->generate_password(9);

  
