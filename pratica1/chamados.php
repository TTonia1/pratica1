<?php
  include "db.php";
  $sql = "Select id_chamados, status_chamado, id_colaborador from chamados;";
  $result = $conn($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamados</title>
</head>
<body>
    <table>
        <tr>
            <td>id chamado</td>
            <td>Colaborador</td>
            <td>Status</td>
            <td>Editar</td>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['id_chamado']?></td>
            <td><?php echo $row['id_colaborador']?></td>
            <td><?php echo $row['status_chamado']?></td>
            <td>Editar</td>
        </tr>
        <?php }?>
    </table>
</body>
</html>