<main>
    <h2 class="text-center mt-2">Listado de empleados</h2>
    <div class="container">
        <b class="d-flex">
            <div><a href="<?php echo route("main/create") ?>" class="btn btn-info">Añadir empleado</a></div>
            <div></div>
        </b>
        <table class="table table-bordered m-2">
            <thead>
                <tr>
                    <th scope="col">Id empleado</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Ultimo Acceso</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <?php foreach ($registers  as $register) : ?>
                <tr>
                    <td><?php echo $register->idnumber ?></td>
                    <td><?php echo $register->deparment ?></td>
                    <td><?php echo $register->name ?></td>
                    <td><?php echo $register->lastname ?></td>
                    <td><?php echo $register->email ?></td>
                    <td></td>
                    <td>
                        <div>
                            <a href="<?php echo route("main/edit/{$register->iduser}") ?>" class="btn btn-info">Actualizar</a>
                            <a href="<?php echo route("main/disable/{$register->iduser}") ?>" class="btn btn-warning">Inhabilitar</a>
                            <a href="<?php echo route("main/delete/{$register->iduser}") ?>" class="btn btn-danger">Eliminar</a>
                            <a href="<?php echo route("main/history/{$register->iduser}") ?>" class="btn btn-secodnary">Historial</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>