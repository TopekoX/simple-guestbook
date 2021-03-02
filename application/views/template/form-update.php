                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Input Buku Tamu</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url() ?>dashboard_bukutamu/update/<?php echo $bukutamu->id; ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label for="nama">Nama:</label>
                                  <input type="text" class="form-control" placeholder="Input Nama" name="nama" required="" value="<?php echo $bukutamu->nama; ?>" maxlength="255">
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-3">
                                  <label for="tanggal">Tanggal:</label>
                                  <input type="date" class="form-control"  name="tanggal" required="" value="<?php echo $bukutamu->tanggal; ?>">
                              </div>
                                </div>
                                <div class="form-group">
                                  <label for="waktu">Waktu:</label>
                                  <input type="time" class="form-control"  name="waktu" required="" value="<?php echo $bukutamu->waktu; ?>">
                                </div>
                                <div class="form-group">
                                  <label for="alamat">Alamat:</label>
                                  <input type="text" class="form-control" placeholder="Input Alamat" name="alamat" required="" value="<?php echo $bukutamu->alamat; ?>" maxlength="255">
                                </div>
                                <div class="form-group">
                                  <label for="no_hp">No HP:</label>
                                  <input type="text" class="form-control" placeholder="00:00:00" name="no_hp" required="" value="<?php echo $bukutamu->no_hp; ?>" maxlength="20">
                                </div>
                                <div class="form-group">
                                  <label for="bertemu_dengan">Bertemu dengan:</label>
                                  <input type="text" class="form-control" placeholder="Bertemu dengan" name="bertemu_dengan" required="" value="<?php echo $bukutamu->bertemu_dengan; ?>" maxlength="255">
                                </div>
                                <div class="form-group">
                                  <label for="bertemu_dengan">Keperluan:</label>
                                  <input type="text" class="form-control"  placeholder="Keperluan" name="keperluan" required="" value="<?php echo $bukutamu->keperluan; ?>" maxlength="255">
                                </div>
                                <div class="form-group">
                                  <label for="foto">Foto:</label>
                                  <input type="file" class="form-control" placeholder="Foto" name="foto">
                                  <input type="hidden" name="old_foto" value="<?php echo $bukutamu->foto; ?>" />
                                </div>
                                <br>
                                <input type="hidden" id="id" name="id" value="<?php echo $bukutamu->id; ?>">
                                <button type="submit" class="btn btn-primary" name="btn_submit" value="tambah">Simpan</button> &nbsp;&nbsp;&nbsp;
                                <input type="button" class="btn btn-warning" value="Batal" onclick="javascript:history.go(-1);" />

                          </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
