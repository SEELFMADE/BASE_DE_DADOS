<?php
class Conexao{
   private $servidor="127.0.0.1";
   private $usuario="root";
   private $senha="";
   private $db="dbProjecto";
   public $conexao;
   //FUNÇÕES
   public function openConnection(){
      $this->conexao=mysqli_connect($this->servidor, $this->usuario,$this->senha,$this->db);
   } 
   public function CloseConnection(){
      mysqli_close($this->conexao);
   } 
}