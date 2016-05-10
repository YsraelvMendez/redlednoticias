<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>Redled</title>
        <!--jQuery-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
        <!--CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!--Optional theme-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!--JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->

    </head>
    <body>
        <br>

        <div class="container-fluid">
            <div class="row">
                <div class="col-log-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">Busqueda</div>

                            <div class="panel-body">                                                                 
                                <div class="form-group">
                                    <div class="col-log-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="" placeholder="Url">
                                    </div>
                                    <div class="col-log-4 col-md-4 col-sm-4 col-xs-12">
                                        <button type="submit" data-role="add" class="btn btn-primary">Go!</button>
                                    </div>
                                </div>
                                <br>
                                <div class="col-log-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="form-group">
                                        <br>
                                        <textarea name="Imagens" class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-log-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="form-group">  
                                        <br>
                                        <div id="form-inputs">  
                                            <div class="form-input-groups">
                                                <input type="text" name="titulo" id="titulo" class="form-control"  placeholder="Titular de la Noticia"><br>
                                                <input type="text" name="Url" id="url" class="form-control"  placeholder="Titular de la Noticia"><br>
                                                <button type="submit" id="agregarCampo" class="btn btn-primary">Agregar!</button> 

                                            </div>
                                        </div> 
                                    </div>                               
                                </div>    
                            </div>                         
                        </div>
                        <button type="button" class="btn btn-primary btn-sm btn-block">Guardar</button>
                    </div>

                </div>
                <div class="col-log-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading">.Swf</div>
                        <div class="panel-body">
                            <div class="col-log-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">

                                </div>
                            </div>                             
                        </div>
                    </div>

                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">Noticias Agregadas</div>
                            <div class="panel-body">
                                <div class="col-log-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">                  
                                        <div id="contenedor">
                                            <div class="added">


                                            </div>
                                        </div>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="foter">
            </div>
            <!-- Fin Footer -->

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script>
            $(document).ready(function () {

                var MaxInputs = 10; //Número Maximo de Campos
                var contenedor = $("#contenedor"); //ID del contenedor
                var AddButton = $("#agregarCampo"); //ID del Botón Agregar
                var titulo = $("#titulo");//ID  noticia

                //var x = número de campos existentes en el contenedor
                var x = $("#contenedor div").length + 1;
                var FieldCount = x - 1; //para el seguimiento de los campos

                $(AddButton).click(function (e) {
                    if (x <= MaxInputs) //max input box allowed
                    {
                        FieldCount++;
                        //agregar campo
                        $(contenedor).append('<div><input type="text" name="mitexto[]" id="campo_' + FieldCount + '" class="form-control input-sm" placeholder=" ' + titulo.val() + '"/><a href="#" class="eliminar">&times;</a></div>');
                        x++; //text box increment
                    }
                    return false;
                });

                $("body").on("click", ".eliminar", function (e) { //click en eliminar campo
                    if (x > 1) {
                        $(this).parent('div').remove(); //eliminar el campo
                        x--;
                    }
                    return false;
                });
            });
        </script>

    </body>
</html>
