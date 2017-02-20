<!doctype html>
<html lang="en">
<head>

<!-- CSS Start Here -->
    <?php
    $this->load->view("admin/mustincluded/css");
    ?>
<!-- CSS Stop Here -->
        <script src="<?php echo base_url('assets/chart/canvas.js');?>"></script>
        <script src="<?php echo base_url('assets/chart/chart.js');?>"></script>

        <?php
            $p_sudah = $sudah / $belum * 100;
            $p_belum = ($belum - $sudah) / $belum * 100;

            $A = $p_sudah;
            $B = $p_belum;

            $dataPoints = array(
                array("y" => $A, "name" => "Sudah Memilih", "exploded" => true),
                array("y" => $B, "name" => "Belum"),
            );
        ?> 

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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Persentase Pemilih Saat Ini </h4>
                                <h6 class="title"><?php echo $sudah; ?> Suara dari <?php echo $belum; ?> Total Suara </h6>
                            </div>
                            <div id="chartContainer"></div>
                            <script type="text/javascript">
                                $(function () {
                                    var chart = new CanvasJS.Chart("chartContainer",
                                    {
                                        theme: "theme2",
                                        title:{
                                            text: ""
                                        },
                                        exportFileName: "Persentase Pemilih Saat Ini",
                                        exportEnabled: true,
                                        animationEnabled: true,     
                                        data: [
                                        {       
                                            type: "pie",
                                            showInLegend: true,
                                            toolTipContent: "{name}: <strong>{y}%</strong>",
                                            indexLabel: "{name} {y}%",
                                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                        }]
                                    });
                                    chart.render();
                                });
                            </script>
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
