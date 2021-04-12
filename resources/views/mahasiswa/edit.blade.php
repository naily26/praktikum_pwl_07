@extends('mahasiswa.Layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                Edit Mahasiswa
                </div>
                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('mahasiswa.update', $Mahasiswa->nim) }}" id="myForm">
                @csrf
                @method('PUT') 
                <div class="form-group">
                    <label for="Nim">Nim</label>
                    <input type="text" name="Nim" class="form-control" id="Nim" value="{{ $Mahasiswa->nim }}" ariadescribedby="Nim" >
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $Mahasiswa->nama }}" ariadescribedby="Nama" >
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $Mahasiswa->email }}" ariadescribedby="email" >
                </div>
                <div class="form-group"> 
                    <label for="Kelas_Id">Kelas</label>
                    <select class="form-control" name="Kelas_Id">
                        @foreach($kelas as $kls)
                        <option  value="{{$kls->id }}" {{$Mahasiswa->Kelas_Id== $kls->id? 'selected' : ''}} name="Kelas_Id"  id="Kelas_Id">{{$kls->nama_kelas}}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" value="{{ $Mahasiswa->jurusan }}" ariadescribedby="Jurusan" >
                </div>
                <div class="form-group">
                    <label for="No_Handphone">No_Handphone</label>
                    <input type="No_Handphone" name="No_Handphone" class="form-control" id="No_Handphone" value="{{ $Mahasiswa->no_handphone }}" ariadescribedby="No_Handphone" >
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal_lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $Mahasiswa->tanggal_lahir }}" ariadescribedby="tanggal_lahir" >
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    @endsection