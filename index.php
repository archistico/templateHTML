<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Titolo</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include 'template/link.php'; ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="index.php" class="logo">
                <span class="logo-mini"><b>A</b>BC</span>
                <span class="logo-lg"><b>Abc</b>Test</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <?php include 'template/navbar.php'; ?>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <?php include 'template/sidebarmenu.php'; ?>
            </section>
        </aside>

        <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Sezione
                        <small>Sottosezione</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Titolo box</h3>
                                </div>
                                <div class="box-body">
                                    <div class="col-md-6 col-xs-12">
                                        <h1>
                                            Testo box body
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">MENU RAPIDO</h3>
                                </div>
                                <div class="box-body">
                                    <a class="btn btn-app" href="">
                                        <i class="fa fa-user"></i> + Link1
                                    </a>
                                    <a class="btn btn-app" href="">
                                        <i class="fa fa-barcode"></i> + Link2
                                    </a>
                                    <a class="btn btn-app" href="">
                                        <i class="fa fa-truck"></i> + Link3
                                    </a>
                                    <a class="btn btn-app" href="">
                                        <i class="fa fa-table"></i> + Link4
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        
        <?php include 'template/footer.php'; ?>

    </div>
    <!-- ./wrapper -->

    <?php include 'template/script.php'; ?>
</body>

<!-- page script -->
<script>
</script>

</html>