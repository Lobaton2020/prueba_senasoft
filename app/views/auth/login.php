<main>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card mt-5">
                <h5 class="card-header text-center">Iniciar sesión</h5>
                <div class="card-body ">
                    <?php renderAllMessages() ?>
                    <form method="POST" action="<?php echo route("auth/login") ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo</label>
                            <input type="email" name="correo" class="form-control" placeholder="example@example.com" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" name="password" minlength="5" class="form-control" placeholder="***********" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</main>