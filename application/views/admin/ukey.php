<!doctype html>
<html lang="en">
<head>

<!-- CSS Start Here -->
    <?php
    $this->load->view("admin/mustincluded/css");
    ?>
<!-- CSS Stop Here -->

</head>
<body>

<div class="wrapper">

<!-- Slide Bar Start Here -->
    <?php
    $this->load->view("admin/mustIncluded/slidebar");
    ?>
<!-- Slide Bar Stop Here -->

    <div class="main-panel">

<!-- Header Start Here-->
    <?php
    $this->load->view('admin/mustIncluded/header');
    ?>
<!-- Header Stop Here-->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cek Ukey</h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo base_url('katelapo/hasil'); ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Masukkan NRP</label>
                                                <input type="text" class="form-control" name="keyword">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Cek</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Footer Start Here-->
    <?php
    $this->load->view("admin/mustIncluded/footer");
    ?>
<!-- Footer Stop Here-->


    </div>
</div>

<!-- Javascript Start Here-->
    <?php
    $this->load->view("admin/mustIncluded/javascript");
    ?>
<!-- Javascript Stop Here-->

</body>



</html>
