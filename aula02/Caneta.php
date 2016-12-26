<?php

class Caneta
{
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo '<p>A caneta está tampada, então não é possível rabiscar.</p>';
        } else {
            echo '<p>Rabiscando...</p>';
        }
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public function destampar()
    {
        $this->tampada = false;
    }
}
