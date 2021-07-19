
@extends('layouts.app') 

@section('content') 
<div class="container">

    <h3>Category</h3>
    <h4>
    <a href="{{ url('/category/create') }}"class="btn btn-primary btn-sm float-left">Tambah Data</a><br>
    </h4>
    <table class="table table-bordered" >
        <tr>
            <th>ID</th>
            <th>Nama</th>
          
            <th>DELETE</th>
        </tr>
            @foreach($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama }}</td>
            
    <td><form action="{{ url('/category/' . $row->id) }}" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            @csrf
        <button>Hapus</button>
    </form></td>
        </tr>
            @endforeach
    </table>
 </div> 
@endsection 