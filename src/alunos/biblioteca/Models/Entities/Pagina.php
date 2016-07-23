<?php
    namespace alunos\biblioteca\Models\Entities;

    /**
    * @Entity
    * @Table(name="Pagina")
    */
    class Pagina{
        /**
        * @Id 
        * @GeneratedValue(strategy="AUTO")
        * @Column(type="integer", name="Id")
        */        
        public $Id;
        
        /**
        * @Column(type="string", nullable=false, name="Titulo")
        */
        public $Titulo;
        
        /**
        * @Column(type="string", nullable=false, name="Corpo")
        */
        public $Corpo;
        
        /**
        * @Column(type="integer", nullable=false, name="Posicao")
        */
        public $Posicao;
        
        public function getId(){
            return $this->Id;
        }
        
        public function getTitulo(){
            return $this->Titulo;
        }
        
        public function getCorpo(){
            return $this->Corpo;
        }
        
        public function getPagina(){
            return $this->Pagina;
        }
    }
?>