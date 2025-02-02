@extends('template.master')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Cast</h3>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Bio</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($casts as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->umur }}</td>
                        <td>{{ $value->bio }}</td>
                        <td>
                            <form action="{{ route('cast.delete', $value->id) }}" method="post">
                                <a href="{{ route('cast.edit', $value->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">Data Masih Kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <br>
            <a href="{{ route('cast.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
</div>
@endsection
