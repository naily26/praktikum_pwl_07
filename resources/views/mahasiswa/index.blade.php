@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input mahasiswa</a>
            </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>E-mail</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th>Tanggal_Lahir</th>
            <th width="280px">Action</th>
            </tr>
            @foreach ($mahasiswa as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->kelas }}</td>
                    <td>{{ $mahasiswa->jurusan }}</td>
                    <td>{{ $mahasiswa->no_handphone }}</td>
                    <td>{{ $mahasiswa->tanggal_lahir }}</td>
                    <td>
                    <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mahasiswa->nim]) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('mahasiswa.show',['mahasiswa'=>$mahasiswa->nim]) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('mahasiswa.edit',['mahasiswa'=>$mahasiswa->nim]) }}">Edit</a>
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection