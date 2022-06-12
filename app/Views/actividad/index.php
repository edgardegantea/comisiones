
<div class="container">

    <div class="card">
        <h2 class="card-header">Actividades</h2>
        <div class="card-body">
            <table class="table table-dark table-striped">
                <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Material</th>
                    <th>Evidencia</th>
                    <th>Prioridad</th>
                    <th>Horas de Actividad</th>
                    <th>Descripcion</th>
                    <th>Observaciones</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Lugar</th>
                    <th>Objetivo de Actividad</th>
                    <th>Titulo de Actividad</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php if (! empty($actividades) && is_array($actividades)): ?>
                    <?php foreach ($actividades as $actividad): ?>
                        <tr>
                            <th><?=$actividad['id']?></th>
                            <th><?=$actividad['material']?></th>
                            <th><?=$actividad['evidencia']?></th>
                            <th><?=$actividad['prioridad']?></th>
                            <th><?=$actividad['horasactividad']?></th>
                            <th><?=$actividad['descripcion']?></th>
                            <th><?=$actividad['observaciones']?></th>
                            <th><?=$actividad['fechainicio']?></th>
                            <th><?=$actividad['fechafin']?></th>
                            <th><?=$actividad['lugar']?></th>
                            <th><?=$actividad['objetivoactividad']?></th>
                            <th><?=$actividad['tituloactividad']?></th>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
                </tbody>

            </table>
        </div>
        </div>
    </div>



