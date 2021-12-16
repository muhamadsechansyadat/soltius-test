@extends('layouts.app')

@section('title', 'STNK')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-header">Input STNK</div>
        <div class="card-body">
            <form action="{{ route('stnk.update', $data->no_polisi) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <p>No Polisi</p>
                    <input type="text" name="no_polisi" id="" required class="form-control" value="{{ $data->no_polisi }}" readonly>
                </div>
                <div class="form-group">
                    <p>Nama Pemilik</p>
                    <input type="text" name="nama_pemilik" id="" required class="form-control" value="{{ $data->nama_pemilik }}">
                </div>
                <div class="form-group">
                    <p>Alamat</p>
                    <textarea name="alamat" class="form-control" required id="" cols="30" rows="10">{{ $data->nama_pemilik }}</textarea>
                </div>
                <div class="form-group">
                    <p>Merk</p>
                    <select name="merk_id" class="form-control" required id="">
                        <option value=""></option>
                        @foreach($dataOption1 as $row)
                        <option value="{{ $row->id }}" @if($row->id == $data->merk_id) selected @endif>{{ $row->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <p>Tipe</p>
                    <select name="tipe_id" class="form-control" required id="">
                        <option value=""></option>
                        @foreach($dataOption2 as $row)
                        <option value="{{ $row->id }}" @if($row->id == $data->tipe_id) selected @endif>{{ $row->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <p>Model</p>
                    <input type="text" name="model" id="" required class="form-control" value="{{ $data->model }}">
                </div>
                <div class="form-group">
                    <p>Warna</p>
                    <input type="text" name="warna" id="" required class="form-control" value="{{ $data->warna }}">
                </div>
                <div class="form-group">
                    <p>No Rangka</p>
                    <input type="text" name="no_rangka" id="" required class="form-control" value="{{ $data->no_rangka }}">
                </div>
                <div class="form-group">
                    <p>No Mesin</p>
                    <input type="text" name="no_mesin" id="" required class="form-control" value="{{ $data->no_mesin }}">
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