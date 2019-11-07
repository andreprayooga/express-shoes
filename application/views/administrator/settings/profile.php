<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h-3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/administrator/img/profile/') . $tb_admin['foto']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $tb_admin['nama_admin']; ?></h5>
                    <p class="card-text"><?= $tb_admin['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Member Since : <?= date("d F Y",strtotime ($tb_admin['date_created'])); ?></small></p>
                    <button href="#" class="btn btn-primary btn-sm">Details</button>
                    <button href="#" class="btn btn-warning btn-sm">Edit</button>
                </div>
            </div>
        </div>
    </div>
</div>