<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url('assets/font/iconsmind/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/font/simple-line-icons/css/simple-line-icons.css') ?>" />

    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/bootstrap-float-label.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" />
</head>

<body class="background show-spinner">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">

                            <p class=" text-white h2">Fininsys<br>Student Portal</p>

                            <p class="white mb-0">
                                Portal Siswa Fininsys menampilkan terkait informasi akademik siswa.
                                <br>Lakukan konfirmasi kepada Unit Sistem Informasi Sekolah anda
                                untuk mendapatkan informasi login portal
                                <!-- <a href="#" class="white">register</a>. -->
                            </p>
                        </div>
                        <div class="form-side">
                            <h6 class="mb-4">Login</h6>
                            <?php if($this->session->flashdata('sukses')): ?>
                                <div class="alert alert-success"><i class="fa fa-check"></i>
                                    <?= $this->session->flashdata('sukses'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="message"></div>
  							<div id="resultLogin"></div>
                            <?= $page ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?= base_url('assets/js/vendor/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/dore.script.js') ?>"></script>
    <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    <script src="<?= base_url('assets/js/iCheck/icheck.min.js') ?>"></script>
    <script  type="text/javascript" charset="utf-8">
		$(function(){
		  	redirect = '<?php echo $redirect ?>';
		  	base_url = '<?php echo base_url() ?>';
		  	$('form').on('submit',function(event){
		  		event.preventDefault();
		      	//$("#btnLoading").addClass('disabled');
		      	$("#btnLoading").html('<img src="' + base_url + 'assets/svg/loading-spin.svg" alt=""> ');
		    	if($('#username').val()=="" || $('#password').val()=="" ){
		      		alert('Isi Username & Password Terlebih Dahulu!');
		      		$("#btnLoading").fadeOut();
		    	}else{
			      	$.ajax({
			          	url      : $(this).attr('action'),
			          	type     : 'POST',
			          	data     : $(this).serialize(),
			          	dataType : 'json',
			          	success  : function(response) {
			              	if(response.status == 'gagal') {
			                	$('.message').html('<div class=" alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><strong>Login Tidak Benar!</strong> silahkan Ulangi.</div>').hide().slideDown();
			                $('input').val('');
			                $('input[name="username"]').focus();
			                $("#btnLoading").fadeOut();
			              }else{
			              	//alert('login Berhasil');
			                window.location.href = redirect;
			              }
			              //$("#btnLoading").fadeOut();
			          	}
			      	});
		      	}
		    });   
		});

	</script>
</body>

</html>