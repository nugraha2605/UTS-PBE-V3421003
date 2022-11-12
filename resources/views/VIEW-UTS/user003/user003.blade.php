
@extends('layouts.uts')

@section('content')
@if(session()->has('deleted'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('deleted') }}
</div>
@endif

<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kota Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Umur</th>
        <th>Agama</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
    @foreach ($posts as $post )
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->user->name }}</td>
        <td>{{ $post->user->email }}</td>
        <td>{{ $post->alamat }}</td>
        <td>{{ $post->kota_lahir }}</td>
        <td>{{ $post->tanggal_lahir }}</td>
        <td>{{ $post->umur }}</td>
        <td>{{ $post->agama->nama_agama }}</td>
        <td>
            @if ($post->user->is_active === 1)
            <span class="btn-xs btn-success text-center">active<span>
            @endif
        </td>
        <td>
        <button class="btn-lg badge bg-info border-0"><span class="bi bi-eye"> Detail</span></button>
        <form action="/user003/{{ $post->id }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn-lg badge bg-danger border-0" onclick="return confirm('Are you sure??')"><span class="bi bi-trash"> Delete</span></button>
        </form>
        </td>
    </tr>
    <br>
    @endforeach

      </tbody>
      <tfoot>

      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>

@endsection
