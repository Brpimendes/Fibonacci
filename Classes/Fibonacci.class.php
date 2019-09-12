<?php
    class Fibonacci{
        public $numAtual; //int
        public $seqArmazenada; //vetor(int)

        public function armazenarSequencia($n){
            $aux = 0;
            $b = 1;
            if (is_int($n)) {
                for($i = 1; $i < $n; $i++){
                    $aux = $this->numAtual + $b;
                    $this->numAtual = $b;
                    $b = $aux;

                    $this->seqArmazenada[] = $aux;
                }
            }

            foreach ($this->seqArmazenada as $seq) {
                echo " - {$seq}";
            }
        }
    }
?>