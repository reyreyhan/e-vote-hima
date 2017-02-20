<!DOCTYPE html>
<html>  
  <head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <?php
    echo'<meta http-equiv="refresh" content="30; url=';
    echo base_url('user/hayo');
    echo'">';
    ?>
    
    <title>...</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <link rel="stylesheet" href="<?php echo base_url('/dist/semantic.min.css'); ?>" type="text/css">
    <script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/style.css'); ?>">
    <script src="<?php echo base_url('dist/semantic.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/masonry.pkgd.js'); ?>"></script>
  </head> 
  
  <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
          <div class="container-fluid">
              <div class="navbar-header">
                  <a class="navbar-brand">
                    <?php foreach($user as $u) { ?>
                      <?php 
                          echo 'Hai ' . $u->nama . ', silahkan pilih sesuai selera!';
                      ?>
                    <?php } ?>
                  </a>
              </div>
<!--               <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li>
                          <a href="<?php //echo base_url('/Welcome/logout'); ?>">
                              Log out
                          </a>
                      </li>
                  </ul>
              </div> -->
          </div>
      </nav>
  </div>

  <body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>
  <div class="ui centered four column doubling stackable  grid">
    <?php foreach($calon as $u) { ?>
        <div class="column">
          <div class="ui fluid woww card">
            <div class="blurring dimmable image">
              <div class="ui dimmer">
                <div class="content">
                  <div class="center">

                  <a data-toggle="modal" data-target="<?php echo '#' . $u->code ?>" >
                    <div class="ui inverted button">
                       Pilih 
                    </div>
                  </a>

                  </div>
                </div>
              </div>
              <img width="400" height="400" src="<?php if($u->foto == NULL){ echo base_url('/assets/PENS.png'); } else { echo base_url('/assets/poto/' . $u->foto); } ?>">
                  </div>
                  <div class="content">
                    <?php echo $u->nama; ?>
                  <div class="meta">
                    <span class="date">
                    <?php echo $u->code; ?>
                </span>
              </div>
            </div>
          </div>
        </div>
    <?php } ?>
      </div>

    <script src="<?php echo base_url('dist/costum.js'); ?>"></script>
    <script src="<?php echo base_url('dist/addition.js'); ?>"></script>
    <script type="text/javascript">
      $('.woww.card .image').dimmer({
        on: 'hover'
      });
    </script>
  </body>

<?php foreach ($calon as $u) { ?>
<!-- Modal -->
  <div class="modal fade" id="<?php echo $u->code; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
<form action="<?php echo base_url('user/sukses'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center>Yakin Ingin Memilih ?</center></h4>
        </div>

          <input  hidden type="text" name="codecalon" value="<?php echo $u->code; ?>">      

          <?php 
          foreach($user as $u) { 
          ?>

            <input  hidden type="text" name="nrp" value="<?php echo $u->nrp; ?>">
            <input  hidden type="text" name="nama" value="<?php echo $u->nama; ?>">
            <input  hidden type="text" name="kelas" value="<?php echo $u->kelas; ?>">
            <input  hidden type="text" name="ukey" value="<?php echo $u->ukey; ?>">

          <?php } ?>                              

        
        <div class="modal-footer">
        <tr>
          <td>
            <button class="btn btn-danger btn-fill btn-sm" data-dismiss="modal">Close</button>
          </td>
            <td>
              <button type="submit" class="btn btn-success btn-fill btn-sm" name="upload" value="upload">Yakin</button>
          </td>
        </tr>
        </div>
    </div>
</form>

  </div>
  </div>
<?php } ?>
</html>