<?php

    namespace alunos\biblioteca\Files\Csv;
    
    /**
    * Class resposavel por realizar um parser no arquivo CSV e importar os dados para o Database
    * @author Anderson Souza
    * @license GNU
    * @copyright 12HD
    * @category Class import files csv to database
    * @version 0.1
    */
    
    class Csv{
        public function somar($val1, $val2){
            if (is_numeric($val1) && is_numeric($val2)){
                return $val1+$val2;
            }
            
            return false;
        }
    }

?>