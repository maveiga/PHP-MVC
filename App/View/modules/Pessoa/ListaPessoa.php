<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoas</title>
</head>
<body>
    <table>
        <tr>
             <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>cpf</th>
            <th>data de nascimento</th>
        </tr>
        <?php foreach($model->rows as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td>
                <a href="/pessoa/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td>
                <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->nome ?>
            </td>

            <td><?= $item->cpf ?></td>
            <td><?= $item->data_nascimento ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>