<?php
    class Aluno{
        
        private $nome;
        private $matricula;
        private $nota1;
        private $nota2;
        private $notaTrab;

        //Getters
        public function getNome(){
            return $this->nome;
        }
        public function getMatricula(){
            return $this->matricula;
        }
        public function getNota1(){
            return $this->nota1;
        }
        public function getNota2(){
            return $this->nota2;
        }
        public function getNotaTrab(){
            return $this->notaTrab;
        }

        //Setters
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setMatricula($numero){
            $this->matricula = $numero;
        }

        public function setNota1($pontuacao){
            $this->nota1 = $pontuacao;
        }

        public function setNota2($pontuacao){
            $this->nota2 = $pontuacao;
        }

        public function setNotaTrab($pontuacao){
            $this->notaTrab = $pontuacao;
        }

        
        //Métodos
        public function notaFinal($n1,$n2,$trab){
            $notaFinal = ($n1 * 3.5) + ($n2 * 3.5) + ($trab * 3);
            if($notaFinal >= 70){
                echo "Você foi". "<b> aprovado </b>".", pois sua nota final foi <b> maior que 70 </b>, sua nota foi: <b> ". $notaFinal ."</b>"; 
            }else if($notaFinal < 70){
                echo"Você foi". "<b> reprovado </b> ".", pois sua nota final foi <b> menor que 70 </b>, sua nota foi: <b>". $notaFinal ."</b>"; 
            }else{
                echo"Numeros digitados são inválidos";
            }
        }

    }

?>