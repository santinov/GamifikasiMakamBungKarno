@extends('layouts.adminlayout')

@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div>
              <div class="row">
                <div class="col-8">
                </div>
                <div class="col-4 text-end">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<div class="content">
        <div class="card ">
          <div class="card-header">
            <h4 class="card-title">Tambah Galeri </h4>
          </div>
          <div class="card-body">
            @if(session('status'))
            <div class='alert alert-success'>
              {{session('status')}}
            </div>
            @endif
            <form method="POST" action="arsip" enctype="multipart/form-data">
              @csrf

              
              <div class="form-group">
                <label>Gambar</label>
              </div>
              <input type="file" class="form-control" name="gambar" accept="application/jpeg" required="">
              <div class="form-group">
              <label>Judul</label>
                <input type="text" name="judul" class="form-control" required="">
              </div>
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" required="">
              </div>
              <div class="form-group">
                <label>Tanggal Rilis</label>
                <input type="date" name="tanggal_rilis" class="form-control" required="">
              </div>
              <div class="form-group">
                <button class="btn btn-primary">Save</button>
                <a href="arsip" class="btn btn-primary btn-block">Back</a>
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>

</body>
</html>
@endsection