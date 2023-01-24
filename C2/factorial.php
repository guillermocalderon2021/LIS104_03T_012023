<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Factorial de un numero</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 py-5"> 
            <div class="card">
                <div class="card-header">
                    Factorial de un numero
             </div>
            <div class="card-body">
            <form method="post">
                <div class="mb-3">
                    <label for="numero" class="form-label">Ingrese el numero:</label>
                    <input type="text" name="numero" id="numero" class="form-control">
                </div>
                <input type="submit" name="calcular" value="Calcular" class="btn btn-success"/>
            </form>
            <?php
            if(isset($_POST['calcular'])){
                if(empty($_POST['numero'])||!is_numeric($_POST['numero'])){
                    echo "<div class='alert alert-danger'>Debes ingresar un numero</div>";

                }
                else{
                    $num=$_POST['numero'];
                    $resultado=1;
                    for ($i=1; $i <=$num ; $i++) { 
                        $resultado*=$i;
                    }
                    echo "<h1>". $num."!=".$resultado."</h1>";

                }

           
        }

            ?>
    
            </div>
</div>
            </div>
        </div>
    </div>
</body>
</html>