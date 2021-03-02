                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Buku Tamu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Bertemu Dengan</th>
                                            <th>Keperluan</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Bertemu Dengan</th>
                                            <th>Keperluan</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!-- Load data  -->
                                        <?php
                                            $x = 0; 
                                            foreach ($bukutamu as $row): $x++;?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td>
                                                    <?php echo $row->tanggal; ?><br/>
                                                    <?php echo $row->waktu; ?>
                                                </td>
                                                <td>
                                                    <b><?php echo $row->nama; ?></b><br/>
                                                    <?php echo $row->alamat; ?><br/>
                                                    <?php echo $row->no_hp; ?>
                                                </td>     
                                                <td><?php echo $row->bertemu_dengan; ?></td>
                                                <td><?php echo $row->keperluan; ?></td>
                                                <td><img src="<?php echo base_url(); ?>uploads/<?php echo $row->foto; ?>" alt="Foto <?php echo $row->nama; ?>" class="img-thumbnail" width=200 height=200></td>
                                                <td>
                                                    <span class="align-middle">
                                                        <a href="<?php echo base_url(); ?>dashboard_bukutamu/update/<?php echo $row->id; ?>" class="btn btn-primary">Ubah</a>
                                                        <a href="<?php echo base_url(); ?>dashboard_bukutamu/delete/<?php echo $row->id; ?>" onclick="return confirm('Eh... Betul komiu mau hapus? AN: <?php echo $row->nama; ?>')" class="btn btn-danger">Hapus</a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                        <!-- end loaddata -->  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
