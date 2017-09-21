<?php

namespace App\Controller;

class ProdutosController extends AppController{
    
    public function index(){
        
        $msg = "Ola, Mundo!";
        
        $this->set('msg', $msg);
    }//FINAL FUNCTION index
    
}//FINAL CLASS ProdutosController


?>