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
                        <h4 class="modal-title" id="myModalLabel">Tambah Data USer</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo site_url() . '/User/tambah_aksi'; ?>" method="post" role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="kode_user">Kode User</label>
                                    <input name="kode_user" type="text" class="form-control" id="kode_user" placeholder="Masukan Kode User">
                                </div>
                                <div class="form-group">
                                    <label for="nama_user">Nama User</label>
                                    <input name="nama_user" type="text" class="form-control" id="nama_user" placeholder="Masukan Nama User">
                                </div>
                                <label>Jenis Kelamin User</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk_user" id="laki-laki" value="Laki-Laki" checked>
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk_user" id="perempuan" value="Perempuan">
                                        Perempuan
                                    </label>
                                </div>
                                <label>Status User</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status_user" id="admin" value="admin" checked>
                                        Admin
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status_user" id="kasir" value="kasir">
                                        Kasir
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
                    <th>Kode User</th>
                    <th>Nama User</th>
                    <th>Jenis Kelamin User</th>
                    <th>Status User</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($User as $u) { ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $u->kode_user ?></td>
                        <td><?= $u->nama_user ?></td>
                        <td><?= $u->jk_user ?></td>
                        <td><?= $u->status_user ?></td>
                        <td>
                            <?php echo anchor('User/edit/' . $u->kode_user, "<i class='fa fa-pencil-square'></i>", "class='btn btn-primary MainNavText' data-target='#myModal' data-toggle='modal' id='MainNavHelp'"); ?>
                            <?php echo anchor('User/hapus/' . $u->kode_user, "<i class='fa fa-trash'></i>", "class='btn btn-danger'"); ?>
                        </td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>