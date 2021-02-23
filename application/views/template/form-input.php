                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Input Buku Tamu</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url() ?>dashboard_bukutamu/create" method="post">
                                <div class="form-group">
                                  <label for="nama">Nama:</label>
                                  <input type="text" class="form-control" placeholder="Input Nama" name="nama" required="">
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-3">
                                  <label for="tanggal">Tanggal:</label>
                                  <input type="date" class="form-control"  name="tanggal" required="">
                              </div>
                                </div>
                                <div class="form-group">
                                  <label for="waktu">Waktu:</label>
                                  <input type="time" value="13:45:00" class="form-control"  name="waktu" required="">
                                </div>
                                <div class="form-group">
                                  <label for="alamat">Alamat:</label>
                                  <input type="text" class="form-control" placeholder="Input Alamat" name="alamat" required="">
                                </div>
                                <div class="form-group">
                                  <label for="no_hp">No HP:</label>
                                  <input type="text" class="form-control" placeholder="00:00:00" name="no_hp" required="">
                                </div>
                                <div class="form-group">
                                  <label for="bertemu_dengan">Bertemu dengan:</label>
                                  <input type="text" class="form-control" placeholder="Bertemu dengan" name="bertemu_dengan" required="">
                                </div>
                                <div class="form-group">
                                  <label for="bertemu_dengan">Keperluan:</label>
                                  <input type="text" class="form-control"  placeholder="Bertemu dengan" name="keperluan" required="">
                                </div>
                                <div class="form-group">
                                  <label for="foto">Foto:</label>
                                  <input type="text" class="form-control" placeholder="Foto" name="foto">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary" name="btn_submit" value="tambah">Submit</button>
                          </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
