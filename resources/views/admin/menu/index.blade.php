
@extends('layouts.backend')
@section('content')
<h3 class="mb-0 text-uppercase pb-3">TABEL MENU</h3>
<hr>
<div class="card">
    <div class="card-body">
        @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
        <div class="col-lg-2 pb-3 ms-auto">
            <a href="{{ route('menu.create') }}" class="btn btn-primary px-4">
                Tambah Menu
            </a>
        </div>
        <table class="table mb-0 table-striped">
            <thead>
                <tr>
                   
                    <th scope="col">No</th>
                    <th scope="col">Nama menu</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menu as $data)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $data->menu }}</td>
                    <td>{{ $data->kategori->nama_kategori }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>
                        <img src="{{ asset('images/menu/' . $data->gambar) }}"  width="200" height="100" style="object-fit: cover;"  alt="">
                    </td>
                    <td>
                        {{-- <a href="{{ route('menu.show', $data->id) }}" class="btn btn-primary gap-2"><i class="material-icons-outlined">search</i></a> --}}
                        <a href="{{ route('menu.edit', $data->id) }}" class="btn btn-warning px-5">Edit</a>
                        <a class="btn ripple btn-danger px-5" href="{{ route('menu.destroy', $data->id) }}" onclick="event.preventDefault();
                            document.getElementById('destroy-form {{ $data->id }}').submit();return confirm('Apakah anda yakin??')">
                            Hapus
                        </a>

                        <form id="destroy-form {{ $data->id }}" action="{{ route('menu.destroy', $data->id) }}"
                            method="POST" class="d-none">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
