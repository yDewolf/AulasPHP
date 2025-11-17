    <h2>Lista de Alunos</h2>
    <table class="table table-bordered">
        <thead>
            <tr><th>Nome</th><th>Idade</th><th>Matrícula</th></tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $a): ?>
            <tr>
                <td><?= $a['nome'] ?></td>
                <td><?= $a['idade'] ?></td>
                <td><?= $a['matricula'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>