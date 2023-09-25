<?php

function generatePassword($length)
{
  $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
  $password = '';

  for ($i = 0; $i < $length; $i++) {
    $password .= $chars[random_int(0, strlen($chars) - 1)];
  }

  return $password;
}

// Generate a password of length 12
$length = 12;
$generatedPassword = generatePassword($length);

// Print the generated password
echo "Generated Password: " . $generatedPassword;
?>