<?php

class Conta
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function Conta(){
      $this->saldo = 0;
      $this->status = false;
    }

    public function abrirConta($tipo)
    {
      $this->setTipo($tipo);
      $this->setStatus(true);

      if($tipo == "CC"){
        $this->setSaldo(50);
      }else{
        $this->setSaldo(150);
      }

    }

    public function fecharConta()
    {
      if($this->saldo > 0){
        echo "<p>Conta com dinheiro</p>";
      }else if($this->saldo < 0){
        echo "<p>Conta em débito</p>";
      }else{
        echo "<p>A conta foi fechada.</p>";
        $this->status = false;
      }
    }

    public function depositar($valor)
    {
      if ($this->status) {
        $this->saldo += $valor;

      }else{
        echo "<p>Essa conta se encontra fechada!</p>";
      }
    }

    public function sacar($valor)
    {
      if($this->status){

        if($this->saldo > $valor){
          $this->saldo -= $valor;
        }else{
          echo "<p> Saldo insuficiente.</p>";
        }

      }else{
        echo "<p>Essa conta se encontra fechada.</p>";
      }
    }

    public function pagarMensalidade()
    {
       $mensalidade;

      if($this->tipo == "CC"){
        $mensalidade = 12;
      }else {
        $mensalidade = 20;
      }

      if($this->status){
        if ($this->saldo > $mensalidade) {
            $this->saldo -= $mensalidade;
        } else {
          echo "<p>Saldo insuficiente para a cobrança da mensalidade.</p>";
        }
      }else{
        echo "<p>Essa conta se encontra fechada.</p>";
      }
    }

    public function setNumConta($numConta){
      $this->numConta = $numConta;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}
