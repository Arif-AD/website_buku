<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Jumlah<br>Buku</span>
                    <span class="info-box-number"><?= $jml_buku ?></span>
                    <a href="<?= base_url('buku') ?>">lihat selengkapnya ></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div> 
    </div>								
</section>
<!-- /.content -->

<script type="text/javascript">
	$(document).ready(function(){

		$( "#judul_buku" ).autocomplete({
			source: "<?php echo site_url('admin/get_buku/?');?>",
			select: function (event, ui) {
				$('#kd_buku').val(ui.item.kd_buku);
			}
		});
	});
</script>