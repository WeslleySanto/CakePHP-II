<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class ProdutosController extends AppController{
    
    public $paginate = [
        'limit' => 2
        ];
    
    public function initialize(){
        parent::initialize();
        
        $this->loadComponent('Paginator');
        $this->loadComponent('Csrf');
    }
    
    public function index(){
        
        $produtosTable = TableRegistry::get('Produtos');
        
        $produtos = $produtosTable->find('all');
        
        $this->set('produtos', $this->paginate($produtos));
    }//FINAL FUNCTION index
    
    public function novo(){
        $produtosTable = TableRegistry::get('Produtos');
        
        $produto = $produtosTable->newEntity();
        
        $this->set('produto', $produto);
    }
    
    public function editar($id){
        
        $produtosTable = TableRegistry::get('Produtos');
        
        $produto = $produtosTable->get($id);
        
        $this->set('produto', $produto);
        
        $this->render('novo');
        
    }// FINAL FUNCTION editar 
    
    public function deletar($id){
        
        $produtosTable = TableRegistry::get('Produtos');
        
        $produto = $produtosTable->get($id);
        
        if($produtosTable->delete($produto)){
            $msg = __('Produto removido com sucesso!');
            $this->Flash->set($msg, ['element' => 'error']);
        }else{
            $msg = __('Erro ao deletar o produto!');
            $this->Flash->set($msg);
        }
        $this->redirect('Produtos/index');
        
    }// FINAL FUNCTION deletar
    
    public function salva(){
        
        $produtosTable = TableRegistry::get('Produtos');
        
        $produto = $produtosTable->newEntity($this->request->data());
        
        if(!$produto->errors() && $produtosTable->save($produto)){
            $msg = __('Produto salvo com sucesso!');
            $this->Flash->set($msg, ['element' => 'success']);
        }else{
            $msg = __('Erro ao salvar o produto!');
            $this->Flash->set($msg, ['element' => 'error']);
        }
        $this->set('produto', $produto);
        $this->render('novo');
        
    }//FINAL FUNCTION salva
    
}//FINAL CLASS ProdutosController


?>