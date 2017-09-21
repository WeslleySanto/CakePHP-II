<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class ProdutosController extends AppController{
    
    public function index(){
        
        $produtosTable = TableRegistry::get('Produtos');
        
        $produtos = $produtosTable->find('all');
        
        $this->set('produtos', $produtos);
    }//FINAL FUNCTION index
    
}//FINAL CLASS ProdutosController


?>