<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class UsersController extends AppController{
        
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        
        $this->Auth->allow(['adicionar', 'salvar']);
    }    
    
    public function adicionar(){
        
        $userTable = TableRegistry::get('Users');
        
        $user = $userTable->newEntity();
        
        $this->set('user', $user);
        
    }//FINAL FUNCTION adicionar
    
    public function salvar(){
        $userTable = TableRegistry::get('Users');
        
        $user = $userTable->newEntity($this->request->data());
        
        if($userTable->save($user)){
        
            $this->Flash->set('Usuário cadastrado com sucesso!', ['element' => 'success']);
        }else{
            $this->Flash->set('Erro ao cadastrar usuário!', ['element' => 'error']);
        }
        
        $this->redirect('Users/adicionar');
    }//FINAL FUNCTION salvar
    
    public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->set('Usuario e/ou senha inválidos' , ['element' => 'error']);
            }
        }
    }// FINAL FUNCTION login
    
    public function logout(){
        $this->redirect($this->Auth->logout());
    }
    
}// FINAL CLASS UsersController
?>