<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <!-- Button trigger modal -->
        <!-- =============================modal================== -->
        <button type="button" class="btn btn-primary btn-lg margin-bottom" data-toggle="modal" data-target="#myModal">
            Tambah Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Data Pelanggan</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo site_url() . '/Pelanggan/tambah_aksi'; ?>" method="post" role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="kode_pelanggan">Kode Pelanggan</label>
                                    <input name="kode_pelanggan" type="text" class="form-control" id="kode_pelanggan" placeholder="Masukan Kode Pelanggan">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pelanggan">Nama Pelanggan</label>
                                    <input name="nama_pelanggan" type="text" class="form-control" id="nama_pelanggan" placeholder="Masukan Nama Pelanggan">
                                </div>
                                <label>Jenis Kelamin Pelanggan</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk_pelanggan" id="laki-laki" value="Laki-Laki" checked>
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk_pelanggan" id="perempuan" value="Perempuan">
                                        Perempuan
                                    </label>
                                </div>
                                <label>Keterangan Pelanggan</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ket_pelanggan" id="member" value="Member" checked>
                                        Member
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ket_pelanggan" id="bukan_member" value="Bukan Member">
                                        Bukan Member
                                    </label>
                                </div>
                                <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" value="Tambah" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- =============================modal================== -->

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Kode Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Jenis Kelamin Pelanggan</th>
                    <th>Keterangan Pelanggan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($pelanggan as $p) { ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $p->kode_pelanggan ?></td>
                        <td><?= $p->nama_pelanggan ?></td>
                        <td><?= $p->jk_pelanggan ?></td>
                        <td><?= $p->ket_member ?></td>
                        <td>
                            <?php echo anchor('Pelanggan/edit/' . $p->kode_pelanggan, "<i class='fa fa-pencil-square'></i>", "class='btn btn-primary'"); ?>
                            <?php echo anchor('Pelanggan/hapus/' . $p->kode_pelanggan, "<i class='fa fa-trash'></i>", "class='btn btn-danger'"); ?>
                        </td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>