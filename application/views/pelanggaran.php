<!DOCTYPE html>
<html>
    <?php
    echo'<meta http-equiv="refresh" content="30; url=';
    echo base_url('/user');
    echo'">';
    ?>
<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>

<audio hidden controls loop autoplay>
  <source src="<?php echo base_url('assets/suara/kuda.ogg');?>" type="audio/ogg">
</audio>

<audio hidden controls loop autoplay>
  <source src="<?php echo base_url('assets/suara/polisi.ogg');?>" type="audio/ogg">
</audio>

<audio hidden controls loop autoplay>
  <source src="<?php echo base_url('assets/suara/tembak.ogg');?>" type="audio/ogg">
</audio>

</body>
</html>

