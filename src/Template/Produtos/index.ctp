<?= $this->Html->Link('+ Novo Produto', array('controller' => 'produtos', 'action' => 'novo')) ?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Preço com Desconto</th>
            <th>Descrição</th>
            <th>Ações</th>
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
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>