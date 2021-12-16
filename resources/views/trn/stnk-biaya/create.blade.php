@extends('layouts.app')

@section('title', 'STNK Biaya')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-header">Input STNK Biaya</div>
        <div class="card-body">
            <form action="{{ route('stnk-biaya.store', $id) }}" method="post">
                @csrf
                <div class="form-group">
                    <p>Nama</p>
                    <input type="text" name="nama" id="" required class="form-control">
                </div>
                <div class="form-group">
                    <p>Biaya</p>
                    <input type="number" name="biaya" id="" required class="form-control">
                </div>
                <div class="form-group">
                    <p>Denda</p>
                    <input type="number" name="denda" id="" required class="form-control">
                </div>
                <div class="form-group">
                    <p>Active</p>
                    <select name="active" class="form-control" required id="">
                        <option value="0">N</option>
                        <option value="1">Y</option>
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