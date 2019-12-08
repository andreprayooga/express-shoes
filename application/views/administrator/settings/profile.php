<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-3 text-gray-800"><?= $title; ?></h1>

    <div class="card mb-3" style="max-width: 450px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/administrator/dist/img/profile/') . $tb_admin['foto']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $tb_admin['nama_admin']; ?></h5>
                    <hr>
                    <p class="card-text mb-0"><small>Email : <?= $tb_admin['email']; ?></small></p>
                    <p class="card-text"><small class="text-muted">Admin Since : <?= date("d F Y",strtotime ($tb_admin['date_created'])); ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>

</div>