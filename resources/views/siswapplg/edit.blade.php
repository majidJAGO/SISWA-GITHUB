@extends('layouts.template')

@section('content')
<div class="container">
<h1>Ubah Data Siswa</h1>

<form action="/siswapplg/{{$jurusanpplg->id}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NIS</label>
        <input type="text" name="nis" class="form-control" id="TabelInput1" value="{{ $jurusanpplg->nis }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" id="TabelInput1" value="{{ $jurusanpplg->nama }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">KELAS JURUSAN</label>
        <input type="text" name="kelas_jurusan" class="form-control" id="TabelInput1" value="{{ $jurusanpplg->kelas_jurusan }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA ORTU</label>
        <input type="text" name="nama_ibu" placeholder="IBU" class="form-control" id="TabelInput1" value="{{ $jurusanpplg->nama_ibu }}" aria-describedby="emailHelp">
        <input type="text" name="nama_ayah" placeholder="AYAH" class="form-control" id="TabelInput1" value="{{ $jurusanpplg->nama_ayah }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA WALI</label>
        <input type="text" name="nama_wali" placeholder="WALI" class="form-control" id="TabelInput1" value="{{ $jurusanpplg->nama_wali }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NO TELP ORTU</label>
        <input type="text" name="no_telp_ibu" placeholder="IBU" class="form-control" id="TabelInput1" value="{{ $jurusanpplg->no_telp_ibu }}" aria-describedby="emailHelp">
        <input type="text" name="no_telp_ayah" placeholder="AYAH" class="form-control" id="TabelInput1" value="{{ $jurusanpplg->no_telp_ayah }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NO TELP WALI</label>
        <input type="text" name="no_telp_wali" class="form-control" id="TabelInput1" value="{{ $jurusanpplg->no_telp_wali }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">FOTO SISWA</label>
        <input type="text" name="foto_siswa" class="form-control" id="TabelInput1" aria-describedby="emailHelp">

         {{-- <input type="file" name="foto_siswa" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
        <img src="/images/{{ $jurusanpplg->foto_siswa }}" alt=""> 
     <img src="{{asset('storage/photo'.$jurusanpplg->foto_siswa)}}" alt="">  --}}
    </div>
    <input class="btn btn-success" type="submit" name="submit" value="Update">
    <a href="/jurusanpplg" class="btn btn-danger">Batal</a>
</form>
</div>