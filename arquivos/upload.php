<div class="titulo">Upload</div>

<?php

print_r( $_FILES );

if( isset($_FILES) && isset($_FILES['arquivo']) ){
    $pastaUpload = '/home/wanderson/Documentos/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivoPath = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if( move_uploaded_file($tmp, $arquivoPath) ){
        echo "Arquivo enviado com sucesso";
    }else {
        echo "Falha no upload do arquivo";
    }
}   

?>

<form action="#" enctype="multipart/form-data" method="POST">
    <input type="file" name="arquivo">
    <button type="submit">Enviar</button>
</form>