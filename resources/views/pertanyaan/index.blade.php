@extends('adminlte.master')
@section('content')
<div class="mt-3 ml-3">
<div class="card">
        
        <div class="card-header">
        <h3 class="card-title">Table - Pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <a class="btn btn-primary" href="{{ route('pertanyaan.create') }}" style="margin-bottom: 1.25rem;">Membuat Pertanyaan Baru</a>
            <thead>
            <tr align="center">
                <th style="width: 30px;">Id</th>
                <th>Judul</th>
                <th>Isi</th>
                <th style="width: 250px">Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($pertanyaan as $key => $question)
                    <tr align="center">
                        <td>{{$key + 1}}</td>
                        <td>{{$question->judul}}</td>
                        <td>{{$question->isi}}</td>
                        <td style="display: flex;">
                            <a href="{{ route('pertanyaan.show',['pertanyaan' => $question->id]) }}" class="btn btn-primary btn-sm" style="width: 33.33%; margin-right: 10px">Show</a>
                            <a href="{{ route('pertanyaan.edit',['pertanyaan' => $question->id]) }}" class="btn btn-info btn-sm" style="width: 33.33%; margin-right: 10px">Edit</a>
                            <form action="{{ route('pertanyaan.destroy',['pertanyaan' =>$question->id])}}" method="POST" style="width: 33.33%;">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm" style="width: 100%; margin-right: 10px" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" align="center">No Questions</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection('content')