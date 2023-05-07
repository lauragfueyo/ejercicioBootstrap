<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Costa Verde - Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
    <?php 
        $nombre = $_GET['nombre'];
        $email = $_GET['email'];
        $comentarios = $_GET['comentarios'];
        
        if($nombre=='' || $email=='' || $comentarios==''){
    ?>
        <div class="p-3 text-center text-white bg-danger rounded-3">
            <p class="fs-4">El formulario no se ha enviado correctamente. Revisa tus datos o inténtalo de nuevo más tarde.</p>
            <p><a href="inicio.html" class="text-white">Volver al formulario</a></p>
        </div>
    <?php
        } else {
    ?>
        <table>
            <caption>Datos formulario contacto:</caption>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Comentarios</th>
            </tr>
            <tr>
                <td>
                    <?php echo $nombre; ?>
                </td>
                <td>
                    <?php echo $email; ?>
                </td>
                <td>
                    <?php echo $comentarios; ?>
                </td>
            </tr>
        </table>
    <?php
        }
    ?>
</body>
</html>