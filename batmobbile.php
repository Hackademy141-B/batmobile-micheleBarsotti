<?php

abstract class ParteAnteriore{
    public abstract function attack();
}

abstract class PartePosteriore{
    public abstract function defense();
}

class Lanciarazzi extends ParteAnteriore{
    public function attack(){
        echo "Esplodi \n";
    }
}

class Mitragliatore extends ParteAnteriore{
    public function attack(){
echo "Muori \n";
    }
}

class Scudo extends PartePosteriore{
    public function defense(){
        echo "No";
    }
}

class ControAerea extends PartePosteriore{
    public function defense(){
        echo "ColCa";
    }
}

class MacchinaBatman{
    public $parteDavanti;
    public $parteDietro;
    public function __construct(ParteAnteriore $parteDavanti, PartePosteriore $parteDietro){
        $this->parteDavanti=$parteDavanti;
        $this->parteDietro=$parteDietro;
    }
    public function attackButton(){
        $this->parteDavanti->attack();
    }
    public function defenseButton(){
        $this->parteDietro->defense();
    }
}

// $batman1= new MacchinaBatman(new Lanciarazzi(),new Scudo());
// $batman1->attackButton();
// $batman1->defenseButton();
$batman2= new MacchinaBatman(new Mitragliatore(),new ControAerea());
$batman2->attackButton();
$batman2->defenseButton();