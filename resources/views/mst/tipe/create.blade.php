@extends('layouts.app')

@section('title', 'Tipe')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-header">Input Tipe</div>
        <div class="card-body">
            <form action="{{ route('tipe.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <p>Merk</p>
                    <select name="merk_id" class="form-control" required id="">
                        <option value=""></option>
                        @foreach($data as $row)
                        <option value="{{ $row->id }}">{{ $row->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <p>Nama</p>
                    <input type="text" name="nama" id="" required class="form-control">
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