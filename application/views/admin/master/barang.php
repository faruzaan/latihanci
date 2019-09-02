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
            <h4 class="modal-title" id="myModalLabel">Tambah Data Barang</h4>
          </div>
          <div class="modal-body">
            <form action="<?php echo site_url() . '/Barang/tambah_aksi'; ?>" method="post" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="kode_barang">Kode Barang</label>
                  <input name="kode_barang" type="text" class="form-control" id="kode_barang" placeholder="Masukan Kode Barang">
                </div>
                <div class="form-group">
                  <label for="nama_barang">Nama Barang</label>
                  <input name="nama_barang" type="text" class="form-control" id="nama_barang" placeholder="Masukan Nama Barang">
                </div>
                <label>Jenis Barang</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="jenis_barang" id="makanan" value="Makanan" checked>
                    Makanan
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="jenis_barang" id="minuman" value="Minuman">
                    Minuman
                  </label>
                </div>
                <div class="form-group">
                  <label for="harga_barang">Harga Barang</label>
                  <input name="harga_barang" type="text" class="form-control" id="harga_barang" placeholder="Masukan Harga Barang">
                </div>
                <div class="form-group">
                  <label for="stock_barang">Stock Barang</label>
                  <input name="stock_barang" type="text" class="form-control" id="stock_barang" placeholder="Masukan Stock Barang">
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
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Jenis Barang</th>
          <th>Harga Barang</th>
          <th>Stock Barang</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        foreach ($barang as $b) { ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $b->kode_nama ?></td>
            <td><?= $b->nama ?></td>
            <td><?= $b->jenis ?></td>
            <td><?= $b->harga ?></td>
            <td><?= $b->stock ?></td>
            <td>

              <!-- Modal -->
              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Edit Data Barang</h4>
                    </div>
                    <div class="modal-body">
                      <?php foreach ($barang as $b) { ?>
                        <form action="<?php echo base_url() . 'Barang/update'; ?>" method="post" role="form">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="kode_barang">Kode Barang</label>
                              <input value="<?php echo $b->kode_nama ?>" name="kode_barang" type="text" class="form-control" id="kode_barang" placeholder="Masukan Kode Barang">
                            </div>
                            <div class="form-group">
                              <label for="nama_barang">Nama Barang</label>
                              <input value="<?php echo $b->nama ?>" name="nama_barang" type="text" class="form-control" id="nama_barang" placeholder="Masukan Nama Barang">
                            </div>
                            <label>Jenis Barang</label>
                            <div class="radio">
                              <label>
                                <input type="radio" name="jenis_barang" id="makanan" value="Makanan" checked>
                                Makanan
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="jenis_barang" id="minuman" value="Minuman">
                                Minuman
                              </label>
                            </div>
                            <div class="form-group">
                              <label for="harga_barang">Harga Barang</label>
                              <input value="<?php echo $b->harga ?>" name="harga_barang" type="text" class="form-control" id="harga_barang" placeholder="Masukan Harga Barang">
                            </div>
                            <div class="form-group">
                              <label for="stock_barang">Stock Barang</label>
                              <input value="<?php echo $b->stock ?>" name="stock_barang" type="text" class="form-control" id="stock_barang" placeholder="Masukan Stock Barang">
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
                      <?php } ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal2">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-warning" data-toggle="modal" data-target="#myModal2"><i class='fa fa-pencil-square'></i></a>
              <?php echo anchor('Barang/hapus/' . $b->kode_nama, "<i class='fa fa-trash'></i>", "class='btn btn-danger'"); ?>
            </td>
          </tr>
        <?php $i++;
        } ?>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>