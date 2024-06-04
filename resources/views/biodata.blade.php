<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        screens: {
          'hp' : {'max' : '500px'},
          'pc' : {'min' : '800px', 'max' : '1920px'},
        },
      },
      plugins: [],
    }
  </script>
</head>

<body class="bg-blue-50">
  <nav class="fixed-top h-16 bg-slate-700 shadow-md shadow-gray-500 ">
    <div class="flex justify-between items-center">
      <div>
        <ul class="flex">
          <li>
            <button class="ml-5 bg-white rounded  pc:mr-10 mt-1 hp:ml-5 mt-2">
              <a href="/daftarpelanggaran">  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
              </svg>
            </button>
          </li>
          <li>
            <a href="/aplikasi"><button class="font-semibold bg-blue-400 text-white w-20 h-9 mt-3 rounded hp:hidden">BACK</button></a>
          </li>
        </ul>
      </div>
        <p class="text-3xl text-white text-right pr-10 hp:mb-1 font-bold">E-DISCIPLINE</p>
      </div>
    </div>
  </nav>

  <div class="my-6 rounded pc:px-6 hp:px-4 hp:max mx-2">
    <div class="grid pc:grid-rows-4 hp:grid-rows-1 pc:grid-cols-4 hp:grid-cols-3 gap-4">
      <img src="{{asset('/')}}assets/blank_profile.jpg" class="w-45 pc:h-60 hp: h-48 pc:row-span-2 hp:row-span-1  border-solid border-4 border-slate-700 pc:ml-12 hp:ml-0 mt-4 rounded"></img>
      <div class="mt-4 text-left font-semibold pc:text-xl hp:text-lg pc:col-span-2 hp:col-span-1 hp:hidden">
        <form action="/biodata/{{$jurusanpplg->id}}" method="GET">
        <ul>
          <li>Nama : {{$jurusanpplg->nama}}</li>
          <li>Kelas : {{$jurusanpplg->kelas_jurusan}}</li>
          <li>NIS : {{$jurusanpplg->nis}}</li>
        </ul>
      </div>
      <div class="container col-span-2 pc:row-span-2 hp:row-span-1 p-4 mr-4 mt-4 rounded bg-slate-700 text-white pc:hidden">
        <ul class="list-none">
       
        </ul>
      </div>
            {{-- bagian status poin  --}}
            <div class="text-center pc:row-span-2 hp:row-span-1 container pc:pl-10 hp:pl-0 hp:hidden">
              <div class="border-solid border-4 border-slate-700 text-lg bg-white pc:mt-12 hp:mt-5">STATUS </div>
              
              <div class="text-xl px-3 py-4 text-white bg-slate-700"> <li class="text-lg list-none"></li> ringan</div>
              
       
          </div> 
      
      <div class="mt-4 text-left font-semibold pc:text-xl hp:text-xl pc:col-span-2 hp:col-span-3 pc:hidden">
        <ul>
          <li>Nama : </li>
          <li>Kelas :</li>
          <li>NIS : </li>
        </ul>
        
      </div>
      <div class="hp:col-span-2 text-left font-semibold pc:text-xl hp:text-xl">
        
        <ul>
          <li>Orangtua/Wali :</li>
          <li>Ayah : {{$jurusanpplg->nama_ayah}}</li>
          <li>Ibu : {{$jurusanpplg->nama_ibu}}</li>
          <li>Wali : {{$jurusanpplg->nama_wali}}</li>
        </ul>
      </div>
      <div class="text-left font-semibold pc:text-xl hp:text-md">
        
        <ul>
          <li>No Tlp :</li>
          <li>Ayah : {{$jurusanpplg->no_telp_ayah}}</li>
          <li>Ibu : {{$jurusanpplg->no_telp_ibu}}</li>
          <li>Wali : {{$jurusanpplg->no_telp_wali}}</li>
        </ul>
        
      </div>
      <div class="container col-span-2 pc:row-span-2 hp:row-span-1 p-4 mr-4 mb-8 mt-4 rounded bg-slate-700 text-white hp:hidden">
        <ul class="list-none">
          <li class="text-2xl font-semibold">Riwayat Pelanggaran</li>
          @foreach($points as $i)
          <li class="text-lg">-{{ $i->riwayat }}</li>
          @endforeach
        </ul>
      </div>
      
      
      <div class="container pc:col-span-2 hp:col-span-1 pc:w-216 hp:w-68 h-20 rounded bg-white border-solid border-4 border-stone-500 mt-4 hp:hidden">
        <?php
    $date = date('2023-05-05');
    $time = date('16:00:00');
    $date_today = $date . ' ' . $time;
    ?>
    <script type="text/javascript">
    //set the date we are counting day to
    var count_id = "<?php echo $date_today; ?>";
    var countDownDate = new Date(count_id).getTime();
    //update the count down every 1 second
    var x = setInterval(function(){
    //get today's date and time
    var now = new Date().getTime();
    //find the distance between now and the countdown date
    var distance = countDownDate - now;
    //time calculations for day, hours,minutes and seconds
    var days = Math.floor(distance/(1000 * 60 * 60 * 24));
    var hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
    var minutes = Math.floor((distance%(1000*60*60))/(1000*60));
    var seconds = Math.floor((distance%(1000*60))/1000);
    //output the result in an element with id="demo"
    document.getElementById("demo1").innerHTML = days + "d " + hours + "h " + 
    minutes + "m " + seconds + "s";
    //if the countdown over, write some over text
    if(distance<0){
        clearInterval(x);
        document.getElementById("demo1").innerHTML="ADA PELANGGARAN"
    }
},1000);
    </script>
<style>


  .demo1{

  }
</style>
        <div class="text-xl font-semibold text-center py-3">
          <P id="demo1">ADA PELANGGARAN</P>
        </div>
      </div>

      <div class="container pc:col-span-2 hp:col-span-3 pc:w-216 hp:w-78 h-14 rounded bg-white border-solid border-4 border-stone-500 mt-4 pc:hidden">
        <?php
    $date = date('2023-04-04');
    $time = date('16:15:00');
    $date_today = $date . ' ' . $time;
    ?>
    <script type="text/javascript">
    //set the date we are counting day to
    var count_id = "<?php echo $date_today; ?>";
    var countDownDate = new Date(count_id).getTime();
    //update the count down every 1 second
    var x = setInterval(function(){
    //get today's date and time
    var now = new Date().getTime();
    //find the distance between now and the countdown date
    var distance = countDownDate - now;
    //time calculations for day, hours,minutes and seconds
    var days = Math.floor(distance/(1000 * 60 * 60 * 24));
    var hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
    var minutes = Math.floor((distance%(1000*60*60))/(1000*60));
    var seconds = Math.floor((distance%(1000*60))/1000);
    //output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " + 
    minutes + "m " + seconds + "s";
    //if the countdown over, write some over text
    if(distance<0){
        clearInterval(x);
        document.getElementById("demo").innerHTML="TIDAK ADA PELANGGARAN"
    }
},1000);
    </script>
    <style>

      .demo{

      }
    </style>

        <div class="text-lg font-semibold text-center hp:py-2 pc:py-3">
          <P id="demo">TIDAK ADA PELANGGARAN</P>
        </div>
      </div>

      <div class="container hp:col-span-2 bg-green-500 border-solid border-4 border-stone-500 pc:mb-7 hp:mb-0 rounded text-2xl hp:h-20 text-center font-semibold pc:py-5 hp:py-0">Bicarakan dengan siswa!</div>
        <div class="text-center pc:row-span-2 hp:row-span-1 container pc:pl-10 hp:pl-0 pc:hidden">
          <div class="tes text-lg border-solid border-4 border-slate-700 bg-white pc:mt-12 hp:mt-0">STATUS</div>
          @foreach($points as $i)
          <li class="text-lg">-{{ $i->nomerpoin }}</li>
          @endforeach
          <div class="lol text-xl p-2 text-white bg-slate-700">RINGAN</div>
      </div>
      <a href="/coba/{{$jurusanpplg->id}}" class="hp:col-span-3  bg-blue-400 active:bg-blue-800 mb-7 text-2xl text-center py-7 hp:h-16 font-semibold rounded">MEMBERI POIN</a>
    </form>
  </div>
</body>
</html>