<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places">
</script>
<script type="text/javascript" src='https://maps.google.com/maps/api/js?key=<?= google_maps_api ?>&sensor=false&libraries=places'></script>
<script src="<?= base_url(); ?>asset/js/locationpicker.jquery.js"></script>


<div class="content-wrapper">
    <div class="card">
        <div class="card-body">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('tambah') or $this->session->flashdata('ubah')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('tambah'); ?>
                    <?php echo $this->session->flashdata('ubah'); ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('demo') or $this->session->flashdata('hapus') or $this->session->flashdata('gagal')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('demo'); ?>
                    <?php echo $this->session->flashdata('hapus'); ?>
                    <!-- <?php echo $this->session->flashdata('gagal'); ?> -->
                </div>
            <?php endif; ?>

            <div>
                <button onclick="gantian();" class="btn btn-info"><i class="mdi mdi-plus-circle-outline"></i>Tambah Merchant</button>
            </div>
            <br>
            <div id="isitable" style="display:block;">
                <h4 class="card-title">Registrasi Merchant Baru</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing3" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Owner</th>
                                        <th>No hp</th>
                                        <th>Nama Merchant</th>
                                        <th>Gambar Toko</th>
                                        <th>Layanan</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($mitra as $mtr) {
                                        if ($mtr['status_mitra'] == 0) { ?>
                                            <tr>
                                                <td>
                                                    <?= $i ?>
                                                </td>
                                                <td><?= $mtr['nama_mitra'] ?></td>
                                                <td><?= $mtr['telepon_mitra'] ?></td>
                                                <td><?= $mtr['nama_merchant'] ?></td>
                                                <td>
                                                    <img src="<?= base_url('images/merchant/') . $mtr['foto_merchant']; ?>">
                                                </td>
                                                <td><?= $mtr['fitur'] ?></td>
                                                <td><?= $mtr['nama_kategori'] ?></td>
                                                <td>
                                                    <?php if ($mtr['status_mitra'] == 0) { ?>
                                                        <label class="badge badge-secondary text-dark">Daftar Baru</label>
                                                    <?php } else { ?>
                                                        <label class="badge badge-primary">Aktif</label>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url(); ?>mitra/detail/<?= $mtr['id_mitra'] ?>">
                                                        <button class="btn btn-outline-primary mr-2">Lihat</button>
                                                    </a>
                                                    <?php
                                                    if ($mtr['status_mitra'] == 0) { ?>
                                                        <a href="<?= base_url(); ?>mitra/confirmmitra/<?= $mtr['id_mitra'] ?>"><button class="btn btn-outline-success mr-2">Konfirmasi</button></a>
                                                    <?php }  ?>
                                                    <a href="<?= base_url(); ?>mitra/hapus/<?= $mtr['id_mitra'] ?>">
                                                        <button onclick="return confirm ('Are you sure want to delete this Partner?')" class="btn btn-outline-danger text-red mr-2">Hapus</button>
                                                    </a>

                                                </td>
                                            </tr>
                                    <?php $i++;
                                        }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="isiform" style="display:none;">
                <h4 class="card-title">Tambah Merchant</h4>
                <?= form_open_multipart('mitra/tambahmitra'); ?>
                <h4 class="card-title">Info Owner</h4>
                <br>
                <div class="form-group">
                    <label for="name">Nama Owner</label>
                    <input type="text" class="form-control" id="name" name="nama_mitra" required>
                </div>
                <div class="form-group">
                    <label for="ads">Alamat</label>
                    <input type="text" class="form-control" id="ads" name="alamat_mitra" required>
                </div>
                <div class="form-group">
                    <label for="ads">Email</label>
                    <input type="email" class="form-control" id="ads" name="email_mitra" required>
                </div>
                <label class="text-small">No hp</label>
                <div class="row">
                    <div class="form-group col-2">
                        <input type="tel" id="txtPhone" class="form-control" name="country_code_mitra" required>
                    </div>
                    <div class=" form-group col-10">
                        <input type="text" class="form-control" name="phone_mitra" required>
                    </div>
                </div>
                <br>
                <h4 class="card-title">Owner File</h4>
                <br>
                <div class="form-group">
                    <label for="ic">Tipe Identitas</label>
                    <input type="text" class="form-control" id="ic" name="jenis_identitas_mitra" required>
                </div>
                <div class="form-group">
                    <label for="nc">Nomor Identitas</label>
                    <input type="text" class="form-control" id="nc" name="nomor_identitas_mitra" required>
                </div>
                <div class="form-group">
                    <label class=mt-2 for="name">Photo Identitas</label>
                    <input type="file" class="dropify" name="katepe" data-max-file-size="3mb" required />
                </div>
                <br>
                <h4 class="card-title">Data Merchant</h4>
                <br>
                <div class="form-group">
                    <label class=mt-2 for="name">Gambar Toko</label>
                    <input type="file" class="dropify" name="foto_merchant" data-max-file-size="3mb" required />
                </div>


                <div class="form-group">
                    <label class=mt-2 for="name">Nama Merchant</label>
                    <input type="text" class="form-control" id="name" name="nama_merchant" required>
                </div>
                <div class="form-group">
                    <label class=mt-2 for="ftr">Layanan</label>
                    <select class=" js-example-basic-single fiturService" style="width:100%" name="id_fitur">
                        <?php foreach ($fitur as $ftr) { ?>
                            <option id="<?= $ftr['fitur'] ?>" value="<?= $ftr['id_fitur'] ?>"><?= $ftr['fitur'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <divclass="form-group">
                    <label class=mt-2 for=" ftr">Kategori Layanan</label>
                    <select class="js-example-basic-single" name="category_merchant" style="width:100%">
                        <?php foreach ($merchantk as $mck) { ?>
                            <option value="<?= $mck['id_kategori_merchant'] ?>"><?= $mck['nama_kategori'] ?></option>
                        <?php
                        } ?>
                    </select>
                    </divclass=>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat_merchant" id="us3-address" />
                    </div>
                    <div class="form-group">
                        <div id="us3" style="width: 100%; height: 400px;"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label>Latitude</label>
                            <input type="text" name="latitude_merchant" id="us3-lat" class="form-control">
                        </div>
                        <div class="col">
                            <label>Longitude</label>
                            <input type="text" name="longitude_merchant" id="us3-lon" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class=mt-2 for="op">Buka</label>
                        <input type="time" class="form-control" id="op" name="jam_buka" required>
                    </div>
                    <div class="form-group">
                        <label class=mt-2 for="cl">Tutup</label>
                        <input type="time" class="form-control" id="cl" name="jam_tutup" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success mr-2">Kirim</button>
                        <?= form_close(); ?>
                        <button onclick="balikan();" class="btn btn-light">Batal</button>
                    </div>





























            </div>
        </div>
    </div>
</div>

<script>
    $('#us3').locationpicker({
        location: {
            latitude: -6.222320699570134,
            longitude: 106.83289668750001
        },
        radius: 300,
        inputBinding: {
            latitudeInput: $('#us3-lat'),
            longitudeInput: $('#us3-lon'),
            radiusInput: $('#us3-radius'),
            locationNameInput: $('#us3-address')
        },
        enableAutocomplete: true,
        onchanged: function(currentLocation, radius, isMarkerDropped) {}
    });
</script>

<script type="text/javascript">
    $(function() {
        var code = "+62"; // Assigning value from model.
        $('#txtPhone').val(code);
        $('#txtPhone').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['US'],
            separateDialCode: false
        });
        console.log(code)
    });
</script>

<script>
    function gantian() {
        document.getElementById("isitable").style = "display:none;";
        document.getElementById("isiform").style = "display:block;";

    }

    function balikan() {
        document.getElementById("isiform").style = "display:none;";
        document.getElementById("isitable").style = "display:block;";
    }
</script>