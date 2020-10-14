<?php
include_once('layout.php');
cabeza(); ?>


<h1 class="text-center pt-4"><?= $titulo ?></h1>
<br/>
<div class="container">
    <div class="row">
        <div class="col-5">
                <fieldset>

                    <div class="form-group">
                        <label for="txtUrl">Escribe aquí la url de la canción</label>
                        <input type="text" class="form-control" id="txtUrl"
                               placeholder="direccion url">
                        <small id="emailHelp" class="form-text text-muted">
                            Solo se aceptan letras de los sitios: (letradecancion.net, o dicelacancion.com)
                        </small>
                    </div>
                    <button id="btnExtraerDatos" class="btn btn-primary">Extraer datos</button>
                </fieldset>
        </div>
        <div class="col-7">
            <pre id="resultado"></pre>
        </div>
    </div>
</div>


<?php pie(); ?>
