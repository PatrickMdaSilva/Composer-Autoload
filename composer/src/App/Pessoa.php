<?php

namespace App;

class Pessoa {
    public $idade;
    public $nome;
    public $soBrenome;
    public $email;
    public $password;
    

    public function dados(){
        return "Meu nome é {$this->nome} {$this->sobreNome}, minha idade é {$this->idade} e meu email é {$this->email} <br> Password {$this->password}";
        
    }

}