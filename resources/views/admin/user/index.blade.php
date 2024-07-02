@extends('layouts.backend')
@section('content')
<h3 class="mb-0 text-uppercase pb-3">DAFTAR KASIR</h3>
<hr>
<div class="card">
    <div class="card-body">
        <div class="col-lg-2 pb-3 ms-auto">
            <a href="{{ route('user.create') }}" class="btn btn-primary px-5 d-flex gap-2">
                Daftar Kasir
            </a>
        </div>
        <table class="table mb-0">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Is Admin ?</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $data)

                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data ->is_admin ? 'Admin' : 'User'}}</td>
                    <td>
                        
                        <a href="{{ route('user.edit', $data->id) }}" class="btn btn-grd btn-warning px-5">Edit</a>
                        <a class="btn btn-grd btn-danger px-5" href="#" onclick="event.preventDefault(); document.getElementById('destroy-form').submit();">Hapus</a>

                        <form id="destroy-form" action="{{ route('user.destroy', $data->id) }}"
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
