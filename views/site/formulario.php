<?php

/** @var yii\web\View $this */

$this->title = 'Formulario';
$this->params['breadcrumbs'][] = $this->title;
?>
<body>
    <h2 id="content">Solicitar Justificativo</h2>
        <!-- Form -->
        <form method="post" action="#">
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="name" id="name" value="" placeholder="Nombres" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="apellidos" id="apellidos" value="" placeholder="Apellidos" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="text" name="rut" id="rut" value="" placeholder="Rut" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
            </div>
            <div class="col-6 col-12-xsmall">
                <input type="email" name="carrera" id="carrera" value="" placeholder="Carrera" />
            </div>
            <!-- Break -->
            <div class="col-12">
                <select name="asignatura" id="asignatura">
                    <option value="">- Asignatura -</option>
                    <option value="1">Asignatura 1</option>
                    <option value="1">Asignatura 2</option>
                    <option value="1">Asignatura 3</option>
                </select>
            </div>
            <div class="col-12">
                <select name="academico" id="academico">
                    <option value="">- Nombre Academico -</option>
                    <option value="1">Luis Gajardo</option>
                    <option value="1">Gilberto Gutierrez</option>
                    <option value="1">Maria Antonieta Soto</option>
                </select>
            </div>
            <div class="col-12">
                <select name="actividad" id="actividad">
                    <option value="">- Actividad a justificar -</option>
                    <option value="1">Certamen</option>
                    <option value="1">Test</option>
                    <option value="1">Laboratorio</option>
                    <option value="1">Clases</option>
                    <option value="1">Otra</option>
                </select>
            </div>
            <!-- Break -->
            <div class="container">
                <div class="row">
                    <label for="fecha">Fecha de Inasistencia</label>
                    <div class="col-2 col-12-small">
                        <input type="date" id="fecha" name="fecha">
                    </div> 
                </div>
            </div> 
            <!-- Break -->
            <div class="col-12">
                <textarea name="motivo" id="motivo" placeholder="Ingrese el motivo de su inasistencia" rows="6"></textarea>
            </div>
            <!-- Break -->
            <div class="col-6 col-12-small">
                <input type="checkbox" id="demo-copy" name="demo-copy">
                <label for="demo-copy">Enviarme una copia</label>
            </div>
            <div class="col-6 col-12-small">
                <input type="checkbox" id="demo-human" name="demo-human" checked>
                <label for="demo-human">Soy humano</label>
            </div>
            <!-- Break -->
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Enviar" class="primary" /></li>
                    <li><input type="reset" value="Reset" /></li>
                </ul>
            </div>
        </div>
        </form>           
    <div class="row"> 
</body>