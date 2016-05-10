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
                                        <input type="text" class="form-control" id="" placeholder="Url">
                                </div>
                                <div id="form-inputs">
                                    <button type="submit" data-role="add" class="btn btn-primary">Go!</button>
                                    <div class="form-input-groups"></div>
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
                                        <table class="table">
                                            <tr>
                                                <td><pre class="json" id="form-output"><code></code></pre></td>                                          
                                                <td><input type="checkbox" value=""></td>
                                            </tr>

                                        </table>      
                                        <button type="submit" class="btn btn-danger btn-xs navbar-right">Eliminar</button>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="jquery.js"></script>
        <script id="inputs-tmpl" type="text/template">
            <div class="group"> 
            <div class="col-log-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="Imagens" class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-log-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="form-group">                                   
                                <input type="text" name="Titulo" id="titulo" class="form-control"  placeholder="Titular de la Noticia"><br>
                                <input type="text" name="Url" id="url" class="form-control"  placeholder="Titular de la Noticia"><br>
                                  <button type="submit" data-role="add" class="btn btn-primary">Agregar!</button> 
                                            </div>                               
                                </div>    
            </div>
        </script>
        <script type="text/javascript">
var formInputs, tmpl, params, inputParams, input;

formInputs = $('#form-inputs');

formInputs.find('[data-role=add]').on('click', function () {
    tmpl = $('#inputs-tmpl').html();
    params = [];

    formInputs
            .find('.form-input-groups')
            .append(tmpl);

    formInputs
            .find('.form-input-groups > .group')
            .each(function (i, group) {
                inputParams = {};

                $(group).find('#titulo, #url').each(function (i, input) {
                    inputParams[$(input).attr('name')] = $(input).val();
                });

                params.push(inputParams);
            });

    $('#form-output code').html(JSON.stringify(params, undefined, 4));

    return false;
});
        </script>
        <div id="foter">
        </div>
        <!-- Fin Footer -->
    </div>                
</body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

