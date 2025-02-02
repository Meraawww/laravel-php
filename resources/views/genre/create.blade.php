@extends('template.master')

@section('content')

<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Form Genre</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('genre.store')}}" method="post">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="movieGenre">Movie Genre</label><br>
                      <input type="text" class="form-control" @error('nama') {{'is invalid'}} @enderror id="genreName" name="name" placeholder="Enter Genre Name..." value="{{old('name')}}">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="px-3 d-flex justify-content-between align-items-center">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="{{ route('genre.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
@endsection