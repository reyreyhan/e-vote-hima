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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambahkan Calon</h4>
                            </div>
                            <div class="content">
                                
                                <?php echo form_open_multipart('/katelapo/addinput/'); ?>
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Code Calon</label>
                                                <input type="text" class="form-control" name="code">
                                            </div>
                                        </div>
                                    </div>

                                    <label>Upload Fotone Wonge</label>
                                    <input id="file" type="file" name="userfile">
                                    <input  hidden name="foto" id="foto" type="text" />

                                    <script type="text/javascript">
                                    document.getElementById('file').onchange = uploadOnChange;

                                    function uploadOnChange() {
                                        var foto = this.value;
                                        var lastIndex = foto.lastIndexOf("\\");
                                        if (lastIndex >= 0) {
                                            foto = foto.substring(lastIndex + 1);
                                        }
                                        document.getElementById('foto').value = foto;
                                    }
                                    </script>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Visi & Misi</label>
                                                    <textarea name="visimisi" class="post" rows="8" cols="40"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Add</button>
                                    <div class="clearfix"></div>
                                </form>
                                <?php echo form_close();?>
                                
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


<script type="text/javascript" src="<?php echo base_url('assets/js/tinymce/tinymce.min.js'); ?>"></script>
<script type="text/javascript">
tinyMCE.init({
    selector:'textarea',
    plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen autoresize',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools'
    ]
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#translate-btn").click(function(){
        btn = $(this);
        content = tinyMCE.get('content_id').getContent({format: 'text'});
        btn.attr('disabled','disabled');
        btn.html('Translating...');
        title = $('#title_id').val();
        $.post('http://ent.pens.ac.id/translator/',{'content_id':content,'title_id':title},function(data){
            data = $.parseJSON(data);
            tinyMCE.get('content_en').setContent(data['content']);
            $('#title_en').val(data['title']);
            btn.attr('disabled',false);
            btn.html('Translate');
        })
    })
})
</script>

</html>