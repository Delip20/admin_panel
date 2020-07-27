<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 offset-md-2 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pengaturan App</h4>
                    <?php if ($this->session->flashdata('send') or $this->session->flashdata('ubah')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('send'); ?>
                            <?php echo $this->session->flashdata('ubah'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('demo')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata('demo'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="tab-minimal tab-minimal-success">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-2-1" data-toggle="tab" href="#app-2-1" role="tab" aria-controls="app-2-1" aria-selected="true">
                                    <i class="mdi mdi-cellphone-android"></i>App</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-2" data-toggle="tab" href="#email-2-2" role="tab" aria-controls="email-2-2" aria-selected="false">
                                    <i class="mdi mdi-email-outline"></i>Email</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-3" data-toggle="tab" href="#smtp-2-3" role="tab" aria-controls="smtp-2-3" aria-selected="false">
                                    <i class="mdi mdi-message-text-outline"></i>SMTP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-4" data-toggle="tab" href="#stripe-2-4" role="tab" aria-controls="stripe-2-4" aria-selected="false">
                                    <i class="mdi mdi-credit-card"></i>Midtrans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-5" data-toggle="tab" href="#paypal-2-5" role="tab" aria-controls="paypal-2-5" aria-selected="false">
                                    <i class="icon-paypal menu-icon"></i>PayPal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-7" data-toggle="tab" href="#banktransfer-2-7" role="tab" aria-controls="banktransfer-2-7" aria-selected="false">
                                    <i class="icon-credit-card menu-icon"></i>Transfer Bank</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content col-12 justify-content-center">
                            <div class="tab-pane fade show active" id="app-2-1" role="tabpanel" aria-labelledby="tab-2-1">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Pengaturan</h4>
                                            <br>
                                            <?= form_open_multipart('appsettings/ubahapp'); ?>
                                            <div class="form-group">
                                                <label for="appemail">Email</label>
                                                <input type="email" class="form-control" id="appemail" name="app_email" value="<?= $appsettings['app_email']; ?>" required></div>
                                            <div class="form-group">
                                                <label for="appname">Nama Aplikasi</label>
                                                <input type="text" class="form-control" id="appname" name="app_name" value="<?= $appsettings['app_name']; ?>" required></div>
                                            <div class="form-group">
                                                <label for="appcontact">Kontak</label>
                                                <input type="text" class="form-control" id="appcontact" name="app_contact" value="<?= $appsettings['app_contact']; ?>" required></div>
                                            <div class="form-group">
                                                <label for="appwebsite">Website</label>
                                                <input type="text" class="form-control" id="appwebsite" name="app_website" value="<?= $appsettings['app_website']; ?>" required></div>
                                            <div class="form-group">
                                                <label for="privacypolicy">Kebijakan Privasi</label>
                                                <textarea type="text" class="form-control" id="summernoteExample1" name="app_privacy_policy" required><?= $appsettings['app_privacy_policy']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="aboutus">Tentang</label>
                                                <textarea type="text" class="form-control" id="summernoteExample2" name="app_aboutus" required><?= $appsettings['app_aboutus']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="appaddress">Aalamat</label>
                                                <textarea type="text" class="form-control" id="summernoteExample3" name="app_address" required><?= $appsettings['app_address']; ?></textarea></div>
                                            <div class="form-group">
                                                <label for="googlelink">Google Link</label>
                                                <input type="text" class="form-control" id="googlelink" name="app_linkgoogle" value="<?= $appsettings['app_linkgoogle']; ?>" required></div>
                                            <div class="form-group">
                                                <label for="appcurrency">Mata Uang</label>
                                                <input type="text" class="form-control" id="appcurrency" name="app_currency" value="<?= $appsettings['app_currency']; ?>" required></div>
                                            <button type="submit" class="btn btn-success mr-2">Kirim</button>

                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="email-2-2" role="tabpanel" aria-labelledby="tab-2-2">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Email Tampilan ubah Password</h4>
                                            <br>
                                            <?= form_open_multipart('appsettings/ubahemail'); ?>
                                            <div class="form-group">
                                                <label for="emailsubject">Email Subjek</label>
                                                <textarea type="email" class="form-control" id="emailsubject" name="email_subject" required><?= $appsettings['email_subject']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="emailtext1">Email Teks 1</label>
                                                <textarea type="email" class="form-control" id="summernoteExample4" name="email_text1" required><?= $appsettings['email_text1']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="emailtext2">Email Teks 2</label>
                                                <textarea type="email" class="form-control" id="summernoteExample5" name="email_text2" required><?= $appsettings['email_text2']; ?></textarea>
                                            </div>

                                            <h4 class="card-title">Email Tampilan konfirmasi Driver</h4>

                                            <div class="form-group">
                                                <label for="emailsubject">Email Subjek</label>
                                                <textarea type="email" class="form-control" id="emailsubject" name="email_subject_confirm" required><?= $appsettings['email_subject_confirm']; ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="emailtext1">Email Teks 1</label>
                                                <textarea type="email" class="form-control" id="summernoteExample6" name="email_text3" required><?= $appsettings['email_text3']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="emailtext2">Email Teks 2</label>
                                                <textarea type="email" class="form-control" id="summernoteExample7" name="email_text4" required><?= $appsettings['email_text4']; ?></textarea>
                                            </div>


                                            <button type="submit" class="btn btn-success mr-2">Kirim</button>

                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="smtp-2-3" role="tabpanel" aria-labelledby="tab-2-3">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Pengaturan SMTP</h4>
                                            <br>

                                            <?php if (demo == TRUE) { ?>
                                                <?= form_open_multipart('appsettings/ubahsmtp'); ?>
                                                <div class="form-group">
                                                    <label for="smtphost">SMTP Host</label>
                                                    <input type="text" class="form-control" id="smtphost" name="smtp_host" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtpport">SMTP Port</label>
                                                    <input type="text" class="form-control" id="smtpport" name="smtp_port" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtpusername">SMTP Nama User</label>
                                                    <input type="text" class="form-control" id="smtpusername" name="smtp_username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtppassword">SMTP Password</label>
                                                    <input type="password" class="form-control" id="smtppassword" name="smtp_password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtpform">SMTP DARI</label>
                                                    <input type="text" class="form-control" id="smtpfrom" name="smtp_from" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtp_secure">SMTP Security</label>
                                                    <select class="form-control border-primary" name="smtp_secure" id="smtp_secure">
                                                        <option value="tls" <?php if ($appsettings['smtp_secure'] == 'tls') { ?>selected<?php } ?>>TLS</option>
                                                        <option value="ssl" <?php if ($appsettings['smtp_secure'] == 'ssl') { ?>selected<?php } ?>>SSL</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-success mr-2">Kirim</button>

                                                <?= form_close(); ?>
                                            <?php } else { ?>

                                                <?= form_open_multipart('appsettings/ubahsmtp'); ?>
                                                <div class="form-group">
                                                    <label for="smtphost">SMTP Host</label>
                                                    <input type="text" value="<?= $appsettings['smtp_host']; ?>" class="form-control" id="smtphost" name="smtp_host" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtpport">SMTP Port</label>
                                                    <input type="text" class="form-control" id="smtpport" name="smtp_port" value="<?= $appsettings['smtp_port']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtpusername">SMTP User Name</label>
                                                    <input type="text" class="form-control" id="smtpusername" name="smtp_username" value="<?= $appsettings['smtp_username']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtppassword">SMTP Password</label>
                                                    <input type="password" class="form-control" id="smtppassword" name="smtp_password" value="<?= $appsettings['smtp_password']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtpform">SMTP Dari</label>
                                                    <input type="text" class="form-control" id="smtpfrom" name="smtp_from" value="<?= $appsettings['smtp_from']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtp_secure">SMTP Security</label>
                                                    <select class="form-control border-primary" name="smtp_secure" id="smtp_secure">
                                                        <option value="tls" <?php if ($appsettings['smtp_secure'] == 'tls') { ?>selected<?php } ?>>TLS</option>
                                                        <option value="ssl" <?php if ($appsettings['smtp_secure'] == 'ssl') { ?>selected<?php } ?>>SSL</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-success mr-2">Kirim</button>

                                                <?= form_close(); ?>

                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="stripe-2-4" role="tabpanel" aria-labelledby="tab-2-4">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Pengaturan Midtrans</h4>
                                            <br>
                                            <?= form_open_multipart('appsettings/ubahmidtrans'); ?>
                                            <div class="form-group">
                                                <label for="idmerchant">ID Merchant</label>
                                                <input type="text" class="form-control" id="idmerchant" name="id_merchant" value="<?= $appsettings['id_merchant']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="clientkey">Client Key</label>
                                                <input type="text" class="form-control" id="clientkey" name="client_key" value="<?= $appsettings['client_key']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="serverkey">Server Key</label>
                                                <input type="text" class="form-control" id="serverkey" name="server_key" value="<?= $appsettings['server_key']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="midtrans_status">Midtrans Mode</label>
                                                <select name="midtrans_status" id="midtrans_status" class="js-example-basic-single" style="width:100%">
                                                    <option value="1" <?php if ($appsettings['midtrans_status'] == '1') { ?>selected<?php } ?>>Development</option>
                                                    <option value="2" <?php if ($appsettings['midtrans_status'] == '2') { ?>selected<?php } ?>>Production</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="midtrans_active">Midtrans Status</label>
                                                <select name="midtrans_active" id="midtrans_active" class="js-example-basic-single" style="width:100%">
                                                    <option value="1" <?php if ($appsettings['midtrans_active'] == '1') { ?>selected<?php } ?>>Aktif</option>
                                                    <option value="0" <?php if ($appsettings['midtrans_active'] == '0') { ?>selected<?php } ?>>Non Aktif</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-success mr-2">Kirim</button>

                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="paypal-2-5" role="tabpanel" aria-labelledby="tab-2-5">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Pengaturan PayPal</h4>
                                            <br>
                                            <?= form_open_multipart('appsettings/ubahpaypal'); ?>
                                            <div class="form-group">
                                                <label for="paypalkey">PayPal Key</label>
                                                <input type="text" class="form-control" id="paypalkey" name="paypal_key" value="<?= $appsettings['paypal_key'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="paypalcurrency">PayPal Currency</label>
                                                <input type="text" class="form-control" id="paypalcurrency" name="app_currency_text" value="<?= $appsettings['app_currency_text'] ?>" required>
                                                <a Paypal href="https://developer.paypal.com/docs/api/reference/currency-codes/">
                                                    <p>Paypal Currency</p>
                                                </a>
                                            </div>


                                            <div class="form-group">
                                                <label for="paypal_mode">PayPal Mode</label>
                                                <select name="paypal_mode" id="paypal_mode" class="js-example-basic-single" style="width:100%">
                                                    <option value="1" <?php if ($appsettings['paypal_mode'] == '1') { ?>selected<?php } ?>>Development Mode</option>
                                                    <option value="2" <?php if ($appsettings['paypal_mode'] == '2') { ?>selected<?php } ?>>Published</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="paypal_active">PayPal Status</label>
                                                <select name="paypal_active" id="paypal_active" class="js-example-basic-single" style="width:100%">
                                                    <option value="1" <?php if ($appsettings['paypal_active'] == '1') { ?>selected<?php } ?>>Active</option>
                                                    <option value="0" <?php if ($appsettings['paypal_active'] == '0') { ?>selected<?php } ?>>NonActive</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-success mr-2">Kirim</button>

                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="banktransfer-2-7" role="tabpanel" aria-labelledby="tab-2-7">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Pengaturan Transfer Bank</h4>
                                            <div>
                                                <a class="btn btn-info" href="<?= base_url(); ?>appsettings/addbank"><i class="mdi mdi-plus-circle-outline"></i>Tambah Bank</a>
                                            </div>

                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table id="order-listing7" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Logo Bank</th>
                                                                    <th>Nama Bank</th>
                                                                    <th>Nomor Rekening</th>
                                                                    <th>Status</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1;
                                                                foreach ($transfer as $trf) { ?>
                                                                    <tr>

                                                                        <td><?= $i ?></td>
                                                                        <td><img src="<?= base_url('images/bank/') . $trf['image_bank']; ?>"></td>
                                                                        <td><?= $trf['nama_bank'] ?></td>
                                                                        <td><?= $trf['rekening_bank'] ?></td>
                                                                        <td><?php if ($trf['status_bank'] == 1) { ?>
                                                                                <label class="badge badge-primary">Aktif</label>
                                                                            <?php } else if ($trf['status_bank'] == 0) { ?>
                                                                                <label class="badge badge-danger">Non Aktif</label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>appsettings/editbank/<?= $trf['id_bank'] ?>">
                                                                                <button class="btn btn-outline-primary">Ubah</button>
                                                                            </a>
                                                                            <a href="<?= base_url(); ?>appsettings/hapusbank/<?= $trf['id_bank'] ?>" onclick="return confirm ('are you sure?')">
                                                                                <button class="btn btn-outline-danger">Hapus</button>
                                                                            </a>
                                                                        </td>
                                                                    </tr>

                                                                <?php $i++;
                                                                } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>