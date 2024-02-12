<?php
interface Veprime{
    public function leviz();
}

class Njeri implements Veprime{

    public function leviz(){
        return "posht nalt";
    }

    public function dora()
    {
        return "dora jem";
    }
}

$njeri = new Njeri();

echo $njeri->leviz();