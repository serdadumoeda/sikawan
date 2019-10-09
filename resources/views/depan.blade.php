@extends('layout.slicedpn')
@section('content')

      <!-- Main content -->
      <section class="content">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Data Pegawai/ Responden</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="Nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Ketikkan Nama Anda">
                  </div>
                </div>
                <div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">NIP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nip" placeholder="Ketikkan NIP Anda">
                  </div>
                </div>
                <div class="form-group">
                  <label for="usia" class="col-sm-2 control-label">Usia</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="usia" placeholder="Ketikkan Usia Anda">
                  </div>
                </div>
                <div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <select class="form-control">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">Pendidikan Terakhir</label>

                  <div class="col-sm-10">
                    <select class="form-control">
                            <option>Pilih Pendidikan Terakhir</option>
                        </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">Golongan Ruang/ Kepangkatan</label>

                  <div class="col-sm-10">
                    <select class="form-control">
                            <option>Pilih Golongan Ruang/Kepangkatan</option>
                        </select>
                  </div>
                </div>

            
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Lanjut</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
      </section>
      <!-- /.content -->

@endsection