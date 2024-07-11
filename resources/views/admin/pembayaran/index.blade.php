@extends('layouts.backend')
@section('content')
<h3 class="mb-0 text-uppercase pb-3">Rekapan Pembayaran</h3>
<hr>
<div class="card">
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        {{-- <div class="col-lg-3 pb-3 ms-auto">
                <a href="{{ route('pembayaran.create') }}" class="btn btn-primary px-4 raised d-flex gap-2">
        Tambah Pembayaran
        </a>
    </div> --}}
    <table class="table mb-0 table-striped" id="example2">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Nama Kasir</th>
                {{-- <th scope="col">Jumlah</th> --}}
                <th scope="col">Subtotal</th>
                <th scope="col">Pajak</th>
                <th scope="col">Total</th>
                <th scope="col">Bayar</th>
                <th scope="col">Kembali</th>
                <th scope="col">Tanggal Transakasi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembayaran as $data)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $data->menu }}</td>
                <td>{{ $data->id_user }}</td>
                {{-- <td>{{ $data->jumlah }}</td> --}}
                <td>{{ $data->subtotal }}</td>
                <td>{{ $data->pajak }}</td>
                <td>{{ $data->total }}</td>
                <td>{{ $data->bayar }}</td>
                <td>{{ $data->kembali }}</td>
                <td>{{ $data->created_at }}</td>
                <td>
                    <form action="{{ route('pembayaran.destroy', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('pembayaran.edit', $data->id) }}" class="btn btn-warning px-5">Edit</a>
                        <button type="submit" class="btn btn-danger px-5" onclick="return confirm('Apakah anda yakin??')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
