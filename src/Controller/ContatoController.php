<?php
namespace App\Controller;
use App\Form\ContatoForm;

class ContatoController extends AppController{
    public function index(){
        $contato = new ContatoForm();
        
        if($this->request->is('post')){
            $retorno_envio = $contato->execute($this->request->data());
            
            if($retorno_envio){
                $this->Flash->set('Email enviado com sucesso', ['element' => 'success']);
            }else{
                $this->Flash->set('Problema ao enviar o e-mail', ['element' => 'error']);
            }
        }
        $this->set('contato', $contato);
            
    }//FINAL FUNCTION index
}// FINAL CLASS ContatoController
?>