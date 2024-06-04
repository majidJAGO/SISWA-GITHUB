@extends('layouts.template')

@section('content')

<div class="container mt-3">
    <h1>Masukkan Data Siswa</h1>
    <form action="/siswapplg/store" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-2">
            <label for="TabelInput1" class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
        </div>
        <div class="mb-2">
            <label for="TabelInput1" class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
        </div>
        <div class="mb-2">
            <label for="TabelInput1" class="form-label">KELAS JURUSAN</label>
            <input type="text" name="kelas_jurusan" id="kelas_jurusan" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
        </div>
        <div class="mb-2">
            <label for="TabelInput1" class="form-label">NAMA ORTU</label>
            <input type="text" name="nama_ibu" placeholder="IBU" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
            <input type="text" name="nama_ayah" placeholder="AYAH" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
        </div>
        <div class="mb-2">
            <label for="TabelInput1" class="form-label">NAMA WALI</label>
            <input type="text" name="nama_wali" placeholder="WALI" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
        </div>
        <div class="mb-2">
            <label for="TabelInput1" class="form-label">NO TELP ORTU</label>
            <input type="text" name="no_telp_ibu" placeholder="IBU" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
            <input type="text" name="no_telp_ayah" placeholder="AYAH" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
        </div>
        <div class="mb-2">
            <label for="TabelInput1" class="form-label">NO TELP WALI</label>
            <input type="text" name="no_telp_wali" placeholder="WALI" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
        </div>
        <div class="mb-2">
            <label for="TabelInput1" class="form-label">FOTO SISWA</label>
            
            <input type="text" name="foto_siswa" class="form-control" id="TabelInput1" aria-describedby="emailHelp">
            {{-- <input type="file" name="foto_siswa" class="form-control" id="TabelInput1" aria-describedby="emailHelp"> --}}
        </div>
        <input class="btn btn-primary my-3" type="submit" name="submit" value="Save">
        <a href="/jurusanpplg" class="btn btn-danger">Batal</a>
    </form>
</div>

<script>
    document.getElementById('pengembanganPerangkatLunakBtn').addEventListener('click', function() {
        var jurusanText = "Pengembangan Perangkat Lunak & Gim";
        var input = document.getElementById('kelas_jurusan');
        input.value = jurusanText;
    });
</script>

@endsection
