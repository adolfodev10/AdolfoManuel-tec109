<?php
    include "db.php";
    $id = $_GET['id'];
    echo $id;

    $sql = "DELETE FROM mensagens WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: mensagens.php");
    } else {
        echo "Erro ao Apagar: " . $conn->error;
    }
    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: mensagens.php");
    } else {
        echo "Erro ao Apagar: " . $conn->error;
    }
    $conn->close();
?>
