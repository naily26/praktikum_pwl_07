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
        <form method="get" action="{{route('mahasiswa.search')}}" id="myForm">
            <div class="form-group">
            
            <input type="search"name="keyword"class="form-control"id="keyword"aria-describedby="keyword"  placeholder="Ketikkan yang dicari">
            </div>
            <button type="submit" class="btn btn-success mt-3">search</button>
        </form>
        <table class="table table-bordered">
            <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>E-mail</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th>tanggal_lahir</th>
            <th width="280px">Action</th>
            </tr>
            @foreach ($paginate as $mhs)
                <tr>
                    <td>{{  $mhs->nim }}</td>
                    <td>{{  $mhs->nama }}</td>
                    <td>{{  $mhs->email }}</td>
                    <td>{{  $mhs->kelas->nama_kelas }}</td>
                    <td>{{  $mhs->jurusan }}</td>
                    <td>{{  $mhs->no_handphone }}</td>
                    <td>{{  $mhs->tanggal_lahir }}</td>
                    <td>
                    <form action="{{ route('mahasiswa.destroy',['mahasiswa'=> $mhs->nim]) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('mahasiswa.show',['mahasiswa'=> $mhs->nim]) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('mahasiswa.edit',['mahasiswa'=> $mhs->nim]) }}">Edit</a>
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-warning" href="{{ route('mahasiswa.nilai',$mhs->nim)}}">Nilai</a>
                    </form>
                    </td>
                </tr>              
            @endforeach
        </table>
        {{ $paginate->links("pagination::bootstrap-4") }}
@endsection