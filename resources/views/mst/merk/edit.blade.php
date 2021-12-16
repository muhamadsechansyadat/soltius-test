@extends('layouts.app')

@section('title', 'Merk')

@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="card-header">Edit Merk - {{ $data->nama }}</div>
        <div class="card-body">
            <form action="{{ route('merk.update', $data->id) }}" method="post">
                @csrf
                @method('PATCH')
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