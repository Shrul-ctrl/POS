@extends('layouts.backend')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Tambah Menu</h5>
            <form class="row g-3" method="POST" action="{{ route('menu.store') }}">
                @csrf

                @if ($errors->has('nama_menu'))
                <div class="alert alert-danger">
                    {{ $errors->first('nama_menu') }}
                </div>
                @endif

                <div class="col-md-4x">
                    <label for="input13" class="form-label">Nama Menu</label>
                    <div class="position-relative input-icon">
                        <input class="form-control mb-3" type="text" name="nama_menu" placeholder="Nama menu" required>
                    </div>
                </div>

                <div class="col-md-4x">
                    <label for="input13" class="form-label">Kategori</label>
                    <div class="position-relative input-icon">
                        <select class="form-control mb-3" name="id_kategori" placeholder="Kategori" required>
                            @foreach ($kategori as $data)
                            <option value="{{ $data->id }}">{{ $data->kategori }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-4x">
                    <label for="input13" class="form-label">Harga</label>
                    <div class="position-relative input-icon">
                        <input class="form-control mb-3" type="text" name="harga" placeholder="Harga" required>
                    </div>
                </div>

                <div class="col-md-4x">
                    <label for="input13" class="form-label">Pajak</label>
                    <div class="position-relative input-icon">
                        <input class="form-control mb-3" type="text" name="pajak" placeholder="Pajak" required>
                    </div>
                </div>

                <div class="col-md-4x">
                    <label for="input13" class="form-label">Stok</label>
                    <div class="position-relative input-icon">
                        <input class="form-control mb-3" type="text" name="stok" placeholder="Stok" required>
                    </div>
                </div>

                <div class="col-md-4x">
                    <label for="input13" class="form-label">Foto</label>
                    <div class="position-relative input-icon">
                        <input class="form-control mb-3" type="file" name="foto" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <a href="{{route('menu.index')}}" class="btn btn-danger px-4">Batal</a>
                        <button type="submit" class="btn btn-success px-4">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
