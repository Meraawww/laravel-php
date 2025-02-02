@extends('template.master'  )
@section('content')


@section('content-title', 'Add Your cast Here!')


<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Cast</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('cast.store') }}" method="post">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="cast">Nama</label><br>
                      <input type="text" class="form-control" @error('nama') {{'is invalid'}} @enderror id="castnama" name="nama" placeholder="Masukan cast Nama..." value="{{ old('nama') }}">
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="movieGenre">Umur</label><br>
                      <input type="text" class="form-control" @error('umur') {{'is invalid'}} @enderror id="castumur" name="umur" placeholder="Masukan Umur Kamu..." value="{{ old("umur") }}">
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="movieGenre">Bio</label><br>
                      <input type="text" class="form-control" @error('bio') {{'is invalid'}} @enderror id="castbio" name="bio" placeholder="Tambahkan Bio..." value="{{ old('bio') }}">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="row">
                  <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                  </div>
                  
                  <div class="card-footer">
                    <a href="{{ route ('cast.index') }}" button type="submit" class="btn btn-secondary">kembali</a>
                  </div>
                 </div>
                </form>
            </div>
        </div>

        
        <!-- /.container-fluid -->
      </section>
    <!-- /.content -->
@endsection