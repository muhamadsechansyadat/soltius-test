@extends('layouts.app')

@section('title', 'STNK Biaya')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-header">Input STNK Biaya - {{ $data->nama }}</div>
        <div class="card-body">
            <form action="{{ route('stnk-biaya.update', [$id, $data->id]) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <p>Nama</p>
                    <input type="text" name="nama" id="" required class="form-control" value="{{ $data->nama }}"
                </div>
                <div class="form-group">
                    <p>Biaya</p>
                    <input type="number" name="biaya" id="" required class="form-control" value="{{ $data->biaya }}"
                </div>
                <div class="form-group">
                    <p>Denda</p>
                    <input type="number" name="denda" id="" required class="form-control" value="{{ $data->denda }}"
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