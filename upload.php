<?php
$target_dir = "uploads/"; // Diretório onde os arquivos serão salvos
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

// Verifica se o arquivo já existe
if (file_exists($target_file)) {
    echo "Desculpe, o arquivo já existe.";
    $uploadOk = 0;
}

// Verifica o tamanho do arquivo (neste exemplo, limitado a 2MB)
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Desculpe, o arquivo é muito grande.";
    $uploadOk = 0;
}

// Move o arquivo para o diretório de uploads
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header("Location: sucess.html");
    } else {
        echo "Ocorreu um erro ao enviar o arquivo.";
    }
}
?>
 
