<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?=$produto['id']?></td>
            <td><?=$produto['nome']?></td>
            <td><?=$produto['preco']?></td>
            <td><?=$produto['descricao']?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>