@extends('layout.slicedpn')
@section('content')

    <!-- Profile Image -->
    <div class="box box-primary">
            <div class="box-body box-profile">
              

              <h3 class="profile-username text-center">Nama User</h3>

              <p class="text-muted text-center">NIP</p>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


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
                <p class="col-sm-10">Pertanyaan Satu Pertanyaan Satu Pertanyaan Satu Pertanyaan Satu Pertanyaan Satu v</p>
                </div>
                <div class="form-group">
                  <label for="Nama" class="col-sm-1 control-label"></label>

                  <div class="col-sm-10">
                    <!-- radio -->
                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Option one is this and that&mdash;be sure to include why it's great
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                      Option three is disabled
                    </label>
                  </div>
                </div>
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