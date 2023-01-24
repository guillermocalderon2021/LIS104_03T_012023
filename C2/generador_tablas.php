<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 py-5"> 
            
            <?php
            for ($j=1; $j <=12 ; $j++) { 
                echo "<h1>Tabla del multiplicar del $j</h1>";
                echo "<ul>";
                    for ($i=1; $i <=10 ; $i++) { 
                        echo "<li>".$j."*".$i."=".$j*$i."</li>";

                    }
                    echo "</ul>";
            }
                    
                    
                    

     

            ?>
    
            </div>
</div>
            </div>
   
</body>
</html>