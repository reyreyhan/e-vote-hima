    <div class="sidebar" data-color="purple" data-image="<?php echo base_url('assets/img/sidebar-4.jpg'); ?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url('katelapo/zxsaqw');?>" class="simple-text">
                    Admin Panel
                </a>
            </div>

            <ul class="nav">

                <li>
                    <a href="<?php echo base_url('katelapo/add'); ?>">
                        <i class="pe-7s-add-user"></i>
                        <p>Add Calon</p>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('katelapo/calon'); ?>">
                        <i class="pe-7s-user"></i>
                        <p>List Calon</p>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('katelapo/cekukey'); ?>">
                        <i class="pe-7s-search"></i>
                        <p>Cek Ukey</p>
                    </a>
                </li>

                <?php foreach($admin as $u) { ?>
                
                <?php

                if($u->level == "root") {

                echo'<li>
                    <a href="';
                echo base_url('katelapo/quick'); 
                echo'">
                        <i class="pe-7s-refresh-2"></i>
                        <p>Quick Count</p>
                    </a>
                </li>';

                echo'<li>
                    <a href="';
                echo base_url('katelapo/pemilih'); 
                echo'">
                        <i class="pe-7s-note"></i>
                        <p>Pemilih</p>
                    </a>
                </li>';

                }
                ?>

                <?php } ?>

            </ul>
    	</div>
    </div>