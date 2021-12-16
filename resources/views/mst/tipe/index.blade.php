@extends('layouts.app')

@section('title', 'Tipe')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">Master Tipe Kendaraan</div>
        <div class="card-body">
            <a href="{{route('tipe.create')}}" class="btn btn-primary mb-2">Tambah</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <th>NO</th>
                    <th>Nama Merk</th>
                    <th>Tipe</th>
                    <th>Active</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $row->merk->nama }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>
                            @if($row->active == 1)
                            <span><i class="fa fa-check btn-success"></i></span>
                            @else
                            <span><i class="fa fa-close btn-danger"></i></span>
                            @endif
                        </td>
                        <td><a href="{{ route('tipe.edit', $row->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
                        <td><a href="{{ route('tipe.delete', $row->id) }}" class="btn btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection