Hai<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>E-RANDIS | Tambah Perangkat Daerah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('opd') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>OPD</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah OPD</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('opd') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Nama Perangkat Daerah</label>
                        <input type="text" name="name_opd" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Kode OPD</label>
                        <input type="text" name="kode_opd" class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection('content') ?>