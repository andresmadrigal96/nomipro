<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomipro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5" mr-1>
            <div class="col-md-4 formulario">
                <form action="controller/ingreso.php" method="post">

                <div class="form-group text-center">
                    <h1 class="text-light">INICIAR SESIÓIN</h1>
				</div>
				
                <div class="form-group mx-sm-4 pt-3">
                    <?php if (!empty($_GET["error"])): ?>
                        <div class="alert alert-danger"><?php echo $_GET["error"] ?></div>
                    <?php endif ?>
                	<input type="text" class="form-control" name="usuario" placeholder="Usuario">
				</div>
			
				<div class="form-group mx-sm-4 pb-3">
					<input type="password" class="form-control" name="passw" placeholder="Contraseña">
				</div>
			
            	<div class="form-group mx-sm-4 pb-2">
				<input type="submit" class="btn btn-block Ingresar"value="INGRESAR">
				<!--<a class="Ingresar" href="views/inicio.php">INGRESAR</a>-->

            	</div>

            	</form>
            </div>
		</div>
		
    </div>

   
    
</body>
</html>
