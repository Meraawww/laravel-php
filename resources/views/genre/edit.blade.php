@extends('template.master')
@section('content')

  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
    <div class="card-header">
                <h3 class="card-title">Edit Data Genre</h3>
              </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('genre.update', $genres->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="card-body">
    <div class="form-group">
      <label for="name">Name Genre</label>
      <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name Genre" value="{{ $genres->name }}">
    </div>
    @error('name')
      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
    @enderror
  </div>
  <div class="px-3 d-flex justify-content-between align-items-center">
    <button type="reset" class="btn btn-warning">Reset</button>
    <a href="{{ route('genre.index') }}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

    </div>
    <!-- /.card -->
  </div>
@endsection