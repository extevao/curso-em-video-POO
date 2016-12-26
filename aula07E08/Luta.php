<?php
  require_once 'Lutador.php';
  class Luta{

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;



    public function marcarLuta(){

    }

    public function lutar(){

    }

    public function getDesafiado(){
      return $this->desafiado;
    }
    public function getDesafiante(){
      return $this->desafiante;
    }
    public function getRounds(){
      return $this->rounds;
    }
    public function getAprovada(){
      return $this->aprovada;
    }

    public function setDesafiado($desafiado){
      $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante){
      $this->desafiante = $desafiante;
    }

    public function setRounds($rounds){
      $this->rounds = $rounds;
    }

    public function setAprovada($aprovada){
      $this->aprovada = $aprovada;
    }

  }
