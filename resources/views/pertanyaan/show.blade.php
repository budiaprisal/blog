@extends('adminlte.master')
@section('content')

    <div class="card-body">
        <table class="table table-bordered ">
        <thead>
            <tr align="center">
                <th>Judul</th>
                <th>isi </th>
            </tr>
            <tr align="center">
                <th>{{$pertanyaan->judul}}</th>
                <th>{{$pertanyaan->isi}}</th>
            </tr>
        </thead>
    </div>
@endsection('content')