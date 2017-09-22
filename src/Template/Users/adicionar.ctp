<h1>Cadastrar Usuário</h1>

<?php
echo( $this->Form->create($user, array('url'   => array( 'action' => 'salvar') ) ) );

echo( $this->Form->input('id') );
echo( $this->Form->input('username') );
echo( $this->Form->input('password') );
echo( $this->Form->button('Cadastrar') );

echo($this->Form->end());

?>