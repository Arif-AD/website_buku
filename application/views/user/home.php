<!-- Content Header (Page header) -->
<br>
<section class="content-header">
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
        <div class="row g-3" style="margin-top:3">
            <div class="col-md-6 order-sm-2">
                <div class="rounded-3 overflow-hidden">
                    <div class="ratio ratio-16x9">
                        <img width="560" height="315" src="<?php echo base_url() ?>assets\images\hero.png" allowfullscreen></img>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                    <a href="#" class="badge mb-2" style="background-color: #792ECD;">baca in</a>
                    <h3>Buku Jendela Ilmu - Banyak Buku, Banyak Ilmu</h3>
                    <p>Makna dari slogan ‘buku adalah jendela ilmu pengetahuan’ adalah kita bisa mendapatkan wawasan dan pengetahuan yang luas dengan membaca berbagai buku sebab dengan membaca buku, wawasanmu akan bertambah. Lalu menstimulasi otak dan meningkatkan rasa ingin tahu dan rasa ingin belajar. Fungsi buku untuk memperluas wawasan ini tidak hanya berlaku secara teori. Ada beberapa manfaat membaca buku yang berdampak langsung pada kehidupan yang bisa kamu perhatikan. </p>
            </div>
        </div>
        <br>
        <div class="row pb-5 pt-5">  
        <br> 
    </div>
    <h3 style="margin-top:3">Buku Terbaru</h3>
    <br>
    <div class="row">
        <?php foreach ($buku as $bk) : ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="box box-widget widget-user">
                    <div class="widget-user-header bg-black" style="background-image: url(<?= base_url('assets/img/buku/'.$bk['sampul']) ?>); background-size:cover; height:350px;">
                    </div>
                    <div class="box-footer" style="padding-top: 10px;">
                        <h4 style="margin-top:0"><?= $bk['judul_buku'] ?></h4>
                        <p>Tahun Terbit: <?= $bk['tahun_terbit'] ?> -  <?= $bk['jumlah'] ?> Lembar</p>
                        <button data-id="<?= $bk['id'] ?>" class="btn btn-sm btn-primary detail" data-toggle="modal" data-target="#modal-default" style="margin-top: 10px;">lihat detail</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php if (count($buku) <= 0) : ?>
            <div class="col-sm-12 text-center">
                <img src="<?= base_url('assets/dist/img/post.svg'); ?>" class="img-fluid" height="250px">
                <h3><b>Belum ada buku!</b></h3>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- /.content -->