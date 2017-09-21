<?php
echo( $this->Form->create($produto, array('url'   => array( 'action' => 'salva') ) ) );

echo( $this->Form->input('Nome') );
echo( $this->Form->input('Preço') );
echo( $this->Form->input('Descrição') );
echo( $this->Form->button('Salvar') );

echo($this->Form->end());

?>