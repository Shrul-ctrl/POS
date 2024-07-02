@extends('layouts.backend')
@section('content')
<h6 class="mb-0 text-uppercase">kasir List</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="col-lg-2 pb-3 ms-auto">
            <a href="{{ route('kasir.create') }}" class="btn btn-primary px-5 d-flex gap-2">
                Daftar Kasir
            </a>
        </div>
        <table class="table mb-0">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kasir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis kelamin</th>
                    <th scope="col">Kontrak</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kasir as $data)

                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{$data->nama_kasir}}</td>
                    <td>{{$data->alamat}}</td>
                    <td>{{$data->jenis_kelamini}}</td>
                    <td>{{$data->kontrak}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                        
                        <a href="{{ route('kasir.edit', $data->id) }}" class="btn btn-grd btn-grd-warning px-5">Edit</a>
                        <a class="btn btn-grd btn-grd-danger px-5" href="#" onclick="event.preventDefault(); document.getElementById('destroy-form').submit();">Hapus</a>

                        <form id="destroy-form" action="{{ route('kasir.destroy', $data->id) }}"
                            method="POST" class="d-none">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>

            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection
