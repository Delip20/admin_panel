<!-- partial -->
<div class="content-wrapper">
    <div class="row ">
        <div class="col-md-8 offset-md-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <?php if ($this->session->flashdata()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $this->session->flashdata('demo'); ?>
                            </div>
                        <?php endif; ?>
                        Tambah Layanan</h4>
                    <?= form_open_multipart('services/addservice'); ?>
                    <div class="form-group">
                        <input type="file" class="dropify" name="icon" data-max-file-size="3mb" required />
                    </div>
                    <div class="form-group">
                        <label for="newstitle">Nama</label>
                        <input type="text" class="form-control" id="newstitle" name="fitur" required>
                    </div>
                    <div class="form-group">
                        <label for="newscategory">Tipe Layanan</label>
                        <select class="js-example-basic-single" name="home" style="width:100%">
                            <option value="1" >Penumpang Transportasi</option>
                            <option value="2" >Pengiriman</option>
                            <option value="3" >Rental</option>
                            <option value="4" >Layanan Pembelian</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="newstitle">Harga</label>
                        <input type="text" pattern="^\d+(\.|\,)\d{2}$" data-type="currency" class="form-control" id="newstitle" name="biaya"  required>
                    </div>
                    <div class="form-group">
                        <label for="newstitle">Diskon (%)</label>
                        <input type="text" class="form-control" id="newstitle" name="nilai" placeholder="ex 10%">
                    </div>
                    <div class="form-group">
                        <label for="newscategory">Unit</label>
                        <select class="js-example-basic-single" name="keterangan_biaya" style="width:100%">
                            <!-- <option value="KM">Kilometers</option> -->
                            <option value="KM" >Kilometer</option>
                            <option value="Hr" >Perjam</option>
                            <!-- <option value="Hr">An Hour</option> -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="newstitle">Komisi (%)</label>
                        <input type="text" class="form-control" id="newstitle" name="komisi" placeholder="ex 10%" required>
                    </div>
                    <div class="form-group">
                        <label for="newscategory">Kendaraan</label>
                        <select class="js-example-basic-single" name="driver_job" style="width:100%">
                            <?php foreach ($driverjob as $drj) { ?>
                                <option value="<?= $drj['id'] ?>"><?= $drj['driver_job'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="newstitle">Harga Minimal</label>
                        <input type="text" pattern="^\d+(\.|\,)\d{2}$" data-type="currency" class="form-control" id="newstitle" name="biaya_minimum" required>
                    </div>
                    <div class="form-group">
                        <label for="newstitle">Driver Radius</label>
                        <input type="text" class="form-control" id="newstitle" name="jarak_minimum" required>
                    </div>
                    <div class="form-group">
                        <label for="newstitle">Pesanan Jarak Maks</label>
                        <input type="text" class="form-control" id="newstitle" name="maks_distance" required>
                    </div>
                    <div class="form-group">
                        <label for="newstitle">Minimum Saldo</label>
                        <input type="text" pattern="^\d+(\.|\,)\d{2}$" data-type="currency" class="form-control" id="newstitle" name="wallet_minimum" required>
                    </div>
                    <div class="form-group">
                        <label for="newstitle">Deskripsi</label>
                        <input type="text" class="form-control" id="newstitle" name="keterangan" required>
                    </div>

                    <div class="form-group">
                        <label for="newscategory">Status</label>
                        <select class="js-example-basic-single" name="active" style="width:100%">
                            <option value="0" >Non Aktif</option>
                            <option value="1" >Aktif</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success mr-2">Kirim</button>
                    <a href="<?= base_url() ?>services" class="btn btn-danger">Batal</a>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of content wrapper -->