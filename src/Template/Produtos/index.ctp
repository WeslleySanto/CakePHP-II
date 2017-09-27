<?= $this->Html->Link(__('+ Novo Produto'), ['controller' => 'produtos', 'action' => 'novo']) ?>
<?= $this->Html->Link(__('Sair'), ['controller' => 'users', 'action' => 'logout']) ?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th><?=__('Nome')?></th>
            <th><?=__('Preço')?></th>
            <th><?=__('Preço com Desconto')?></th>
            <th><?=__('Descrição')?></th>
            <th><?=__('Ações')?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?=$produto['id']?></td>
            <td><?=$produto['nome']?></td>
            <td><?=$this->Money->format($produto['preco'])?></td>
            <td><?=$this->Money->format($produto->calculaDesconto())?></td>
            <td><?=$produto['descricao']?></td>
            <td>
                <?= $this->Html->Link('Editar', array('controller' => 'produtos', 'action' => 'editar', $produto['id'])) ?>
                <?= $this->Form->postLink('Deletar', array('controller' => 'produtos', 'action' => 'deletar', $produto['id']), 
                    ['confirm' => __('Deseja realmente deletar o produto') . $produto['nome'] . '?']
                    ) ?>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        
    <?php
        echo $this->Paginator->prev(__('Voltar'));
        echo $this->Paginator->numbers();
        echo $this->Paginator->next(__('Avançar'));
    ?>
    </ul>
</div>