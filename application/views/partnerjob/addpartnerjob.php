<!-- partial -->
<div class="content-wrapper">
  <div class="row ">
    <div class="col-md-8 offset-md-2 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <?php if ($this->session->flashdata()) : ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $this->session->flashdata('demo'); ?>
            </div>
          <?php endif; ?>
          <h4 class="card-title">Tambah Tipe Kendaraan</h4>
          <?= form_open_multipart('partnerjob/addpartnerjob'); ?>
          <div class="form-group">
            <label for="status_berita">Icon Maps</label>
            <select class="js-example-basic-single" style="width:100%" name="icon" id="statusjob">
              <option value="1">Motor Icon</option>
              <option value="2">Mobil Icon</option>
              <option value="3">Truck Icon</option>
              <option value="4">Delivery Bike Icon</option>
              <option value="5">HatchBack Car Icon</option>
              <option value="6">SUV Car Icon</option>
              <option value="7">Mobil Box Icon</option>
              <option value="8">Sepeda Icon</option>
              <option value="9">Cator Icon</option>
            </select>
          </div>
          <div class="form-group">
            <label for="title">Tipe Kendaraan</label>
            <input type="text" class="form-control" name="driver_job" id="job" placeholder="enter job title" required>
          </div>
          <div class="form-group">
            <label for="status_berita">Status Tipe Kendaraan</label>
            <select class="js-example-basic-single" style="width:100%" name="status_job" id="statusjob">
              <option value="1">Aktif</option>
              <option value="0">Non Aktif</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success mr-2">Kirim</button>
          <button class="btn btn-light">Batal</button>
          <?= form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end of content wrapper -->