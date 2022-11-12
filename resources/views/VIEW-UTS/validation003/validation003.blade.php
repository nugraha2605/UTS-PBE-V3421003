@extends('layouts.uts')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Complete Your Pesonal Data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="/validation003" method="post">
            @csrf
              <div class="card-body">

                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" required>
                  </div>

                  <div class="form-group">
                    <label for="nik">Kota Kelahiran</label>
                    <input type="text" class="form-control" id="kota_lahir" name='kota_lahir' placeholder="Kota Kelahiran" required>
                  </div>

                  <div class="form-group">
                    <label for="tanggal">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name='tanggal_lahir' required>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Umur</label>
                    <input type="number" class="form-control" id="umur" name='umur' placeholder="Umur" required>
                  </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
  <!-- /.content -->
@endsection
