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
                                <h4 class="title">List Calon</h4>
                            </div>
                            <div class="content">
                                <form>
                                        <?php foreach($calon as $u) { ?>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" readonly class="form-control" value="<?php echo $u->nama; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Code Calon</label>
                                                <input type="text" readonly class="form-control" value="<?php echo $u->code; ?>">
                                            </div>
                                        </div>
                                    </div>

                                        <?php } ?>
                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php foreach($calon as $u) { ?>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="<?php echo base_url('assets/bg.jpg'); ?>" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                    <img class="avatar border-gray" 
                                    src="<?php echo base_url('assets/poto/'); echo $u->foto; ?>" alt="..."/>

                                      <h4 class="title"><?php echo $u->nama; ?><br>
                                      </h4>
                                </div>
                                <br>
                                <p class="description text-center">
                                <?php echo $u->visimisi; ?> 
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <center>
            <ul class="pagination">
                <?php echo $halaman ?>
            </ul>
        </center>

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
