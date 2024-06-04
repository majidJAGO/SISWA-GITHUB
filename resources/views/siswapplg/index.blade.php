@extends('layouts.template')

@section('content')
<div class="container mt-3">
    <!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite('resources/css/app.css')

</head>
<body class="bg-blue-50">

<div class="font-semibold mx-auto">
    <nav class="flex py-4 w-full px-4 justify-between items-center bg-slate-700 text-neutral-500 shadow-lg">


    <body class="bg-blue-1000">
        <nav class="fixed-top h-16 bg-slate-700 shadow-md shadow-gray-500 ">
          <div class="flex justify-between items-center">
            <div>
              <ul class="flex">
                <li>
                  <button class="ml-5 bg-white rounded  pc:mr-10 mt-1 hp:ml-5 mt-2">
                  
                  </button>
                </li>
                <li>
                  <a href="/aplikasi"><button class="font-semibold bg-blue-400 text-white w-20 h-10 mt-3 rounded hp:hidden">Back</button></a>
                  <a href="/siswapplg/create"><button class="font-semibold bg-blue-400 text-white w-40 h-10 mt-3 rounded hp:hidden">Tambah Data Siswa</button></a> 
                </li>
              </ul>
            </div>
          
             <center> <p class="text-3xl text-white text-right pr-10 hp:mb-1 font-bold">MENAMBAH DATA SISWA</p></center>
            </div>
          </div>
        </nav>


<hr>

 
<table class="table table-striped table-bordered">

    <tr>
        {{-- <td>ID</td> --}}
        <td class="table-dark">NIS</td>
        <td class="table-dark">NAMA</td>
        <td class="table-dark">KELAS</td>
        <td class="table-dark">NAMA IBU</td>
        <td class="table-dark">NAMA AYAH</td>
        <td class="table-dark">NAMA WALI</td>
        <td class="table-dark">NO TELP IBU</td>
        <td class="table-dark">NO TELP AYAH</td>     
        <td class="table-dark">NO TELP WALI</td> 
      {{--  <td class="table-dark">FOTO</td>     --}}
        <td class="table-dark" style="width: 145px">AKSI</td>
    </tr>
    @foreach($jurusanpplg as $siswapplg)
        <tr>
            {{-- <td>{{ $siswapplg->id }}</td> --}}
            <td>{{ $siswapplg->nis }}</td>
            <td>{{ $siswapplg->nama }}</td>
            <td>{{ $siswapplg->kelas_jurusan }}</td>
            <td>{{ $siswapplg->nama_ibu }}</td>
            <td>{{ $siswapplg->nama_ayah }}</td>
            <td>{{ $siswapplg->nama_wali }}</td>
            <td>{{ $siswapplg->no_telp_ibu }}</td>
            <td>{{ $siswapplg->no_telp_ayah }}</td>
            <td>{{ $siswapplg->no_telp_wali }}</td>
         

          {{--   <td><img src="/images/{{ $siswapplg->foto_siswa }}" width="90px"></td> --}}
            <td>
                <form action="/siswapplg/{{$siswapplg->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <a class="btn btn-primary" href="/siswapplg/{{$siswapplg->id}}/edit">Edit</a>
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>

            </td>
             <td>
                {{--}}
                <a class="btn btn-outline-success" href="/siswa/{{$pplg->id}}/edit">Edit</a>
                <form action="/siswa/{{$pplg->id}}" method="POST">
                    @csrf
                    {{
                    @method('delete')
                    <input class="btn btn-outline-danger" type="submit" value="Delete">
                </form>
            </td> --}}
        </tr>
        @endforeach
    </table>
    
</head>
</body>
   
</div>