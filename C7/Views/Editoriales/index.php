
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de editoriales</title>
    
</head>
<body>


<div class="container">
            <div class="row">
                <h3>Lista de editoriales</h3>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <a type="button" class="btn btn-primary btn-md" href="/Editoriales/create"> Nuevo editorial</a>
                <br><br>
                <table class="table table-striped table-bordered table-hover" id="tabla">
                    <thead>
                        <tr>
                            <th>Codigo del editorial</th>
                            <th>Nombre del editorial</th>
                            <th>Contacto</th>
                            <th>Telefono</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once '../../Model/EditorialesModel.php';

                        $modelo=new EditorialesModel();
                        $rows=$modelo->listEditoriales();
                        foreach($rows as $row){
                        ?>
                        <tr>
                            <td><?= $row['codigo_editorial'] ?></td>
                            <td><?= $row['nombre_editorial'] ?></td>
                            <td><?= $row['contacto'] ?></td>
                            <td><?= $row['telefono'] ?></td>
                            <td></td>
                        </tr>  
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
                </div> 
            </div>                    
        </div> 
     
<body>
    </html>