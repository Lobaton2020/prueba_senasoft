<main>
    <div class="container">
        <h2 class="text-center mt-2">Crear empleados</h2>
        <form method="POST" action="<?php echo route("main/store") ?>">
            <div class=" form-group">
                <label for="exampleInputEmail1">Id empleado</label>
                <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <select name="demparment" class="form-control" id="">
                <?php foreach ($deparments as $deparment) : ?>
                    <option value="<?php echo $deparment->idproductiondeparment ?>"><?php echo $deparment->name ?></option>
                <?php endforeach; ?>
            </select>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1">
            </div>
            <div class=" form-group">
                <label for="exampleInputEmail1">Nombre </label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class=" form-group">
                <label for="exampleInputEmail1">Apellido</label>
                <input type="text" class="form-control" name="lastname" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


            <button type="submit" class="btn btn-primary">Registrar empleado</button>
        </form>
    </div>
</main>