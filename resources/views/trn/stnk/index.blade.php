@extends('layouts.app')

@section('title', 'STNK')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Daftar STNK</div>
        <div class="card-body">
            <a href="{{route('stnk.create')}}" class="btn btn-primary mb-2">Tambah</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <th>No Polisi</th>
                    <th>Nama Pemilik</th>
                    <th>Alamat</th>
                    <th>Merk</th>
                    <th>Tipe</th>
                    <th>Model</th>
                    <th>Warna</th>
                    <th>No Rangka</th>
                    <th>No Mesin</th>
                    <th>Active</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->no_polisi }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->nama_pemilik }}</td>
                        <td>{{ $row->merk->nama }}</td>
                        <td>{{ $row->tipe->nama }}</td>
                        <td>{{ $row->model }}</td>
                        <td>{{ $row->warna }}</td>
                        <td>{{ $row->no_rangka }}</td>
                        <td>{{ $row->no_mesin }}</td>
                        <td>
                            @if($row->active == 1)
                            <span><i class="fa fa-check btn-success"></i></span>
                            @else
                            <span><i class="fa fa-close btn-danger"></i></span>
                            @endif
                        </td>
                        <td><a href="{{ route('stnk.edit', $row->no_polisi) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
                        <td><a href="{{ route('stnk-biaya.index', $row->no_polisi)}}" class="btn btn-success"><i class="fa fa-money"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection