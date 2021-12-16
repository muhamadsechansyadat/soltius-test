@extends('layouts.app')

@section('title', 'Tipe')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-header">Edit Tipe - {{ $data->nama }}</div>
        <div class="card-body">
            <form action="{{ route('tipe.update', $data->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <p>Merk</p>
                    <select name="merk_id" class="form-control" required id="">
                        <option value=""></option>
                        @foreach($dataOption as $row)
                        <option value="{{ $row->id }}" @if($row->id == $data->merk_id) selected @endif>{{ $row->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <p>Nama</p>
                    <input type="text" name="nama" id="" required class="form-control" value="{{ $data->nama }}">
                </div>
                <div class="form-group">
                    <p>Active</p>
                    <select name="active" class="form-control" required id="">
                        @if ($data->active == 1)
                        <option value="0">N</option>
                        <option value="1" selected>Y</option>
                        @else
                        <option value="0" selected>N</option>
                        <option value="1">Y</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection