<div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= $title?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
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
                <?php $i=1; foreach($barang as $b) {?>
                <tr>
                  <td><?= $i?></td>
                  <td><?= $b->kode_nama?></td>
                  <td><?= $b->nama?></td>
                  <td><?= $b->jenis?></td>
									<td><?= $b->harga?></td>
									<td><?= $b->stock?></td>
									<td>
										<a href="#" class="btn btn-primary"><i class="fa fa-pencil-square"></i></a>
										<a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<?= $i++; }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
