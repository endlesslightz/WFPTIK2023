<?php
declare(strict_types=1);

namespace CodeIgniter\Validation\StrictRules;

class PasswordStrength{
  public $length = 10;

  public $lengthCheck = false;

  public $uppercaseCheck = false;

  public $numericCheck = false;

  public $specialCharacterCheck = false;
  
  public function password_strength(string $str,string $length, array $data, string &$error = null){
    $this->lengthCheck = strlen($str) >= $this->length;
    // $this->uppercaseCheck = strtolower($str) !== $str;
    $this->numericCheck = (bool) preg_match('/[0-9]/', $str);
    // $this->specialCharacterCheck = (bool) preg_match('/[^A-Za-z0-9]/', $str);
    if ($this->lengthCheck && $this->numericCheck )
    {
        return true;
    }
    //pesan jika gagal validasi
    $error = "Password minimal {$length}";
    return false;
  }
}