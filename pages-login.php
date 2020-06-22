<?php include 'layouts/header.php'; ?>

<?php include 'layouts/headerStyle.php'; ?>

    <body class="fixed-left">

        <?php include 'layouts/loader.php'; ?>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.php" class="logo logo-admin"> Iniciar Sesión <!--<img src="public/assets/images/logo.png" height="30" alt="logo">--></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">¡Bienvenido!</h4>
                        <p class="text-muted text-center">Inicia sesión para continuar</p>

                        <form class="form-horizontal m-t-30" action="index.php">

                            <div class="form-group">
                                <label for="username">Usuario</label>
                                <input type="text" class="form-control" id="username" placeholder="xxx@utez.edu.mx">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Recordarme</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Iniciar Sesión</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw.php" class="text-muted"><i class="mdi mdi-lock"></i> ¿Olvidaste tu password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">¿ No tienes una cuenta ? <a href="pages-register.php" class="font-500 font-14 text-white font-secondary"> Contacta al administrador </a> </p>
                <p class="text-white">©   <?php echo date("Y"); ?>  -- Tools Control --   |   Hecho con  <i class="mdi mdi-heart text-danger"></i> por Magali Miguel</p>
            </div>

        </div>

        <?php include 'layouts/footerScript.php'; ?>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>