<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto INCATEP</title>
    <!--CSS BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--MI CSS-->
    <link rel="stylesheet" href="../CSS/estilos.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <form class="FrmRespuesta" action="../index.html" method="post" target="_blank">
        <fieldset class="FrmRespuesta-fieldset">

            <div class="FrmRespuesta-Saludo">
                <h2>Hola <?php echo $nom?></h2>
            </div>
            
            <div class="FrmRespuesta-Mensaje">
                <p>Gracias por escribirnos, el equipo de INCATEP se pondrá en contacto contigo los antes posible.</p>
                <img src="../images/Teleoperador.jpg" alt="Imagen Teleoperador">
            </div>

            <div class="FrmRespuesta-btn">
                <input type="submit" value="Inicio" name="btnInicio">
            </div>

        </fieldset>
    </form>
</body>
</html>
