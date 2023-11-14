<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="img/logo-ifsp-removebg.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">

  <title>Serenatto - Editar Produto</title>
</head>
<body>
<?php
      require "conexao.php";
      $id = $_GET['id'];
      $sql = "DELETE FROM produtos WHERE id = '$id'";
      $result = $conn->query($sql);
      
      /*if(isset ($_GET['id'])){
        $id = $_GET['id']
      }
      $sql = "delete from produtos where id=$id";
      if($conn->query($sql)=== TRUE){
        echo "Item exclúido com sucesso.";
      } else{
        echo "Erro ao excluir item: ". $conn->error;
      }*/

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
        exit();
    } else {
        echo'Erro ao excluir o produto';
    
    }
    $conn->close();
      ?>
      
</body>
</html>