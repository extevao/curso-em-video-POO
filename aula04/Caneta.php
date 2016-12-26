<?php

class Caneta
{
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function Caneta($modelo, $cor, $ponta){
      $this->modelo = $modelo;
      $this->cor = $cor;
      $this->ponta = $ponta;
    }

    public function tampar(){
      $this->tampada = true;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function getPonta()
    {
        return $this->ponta;
    }
    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }
}
