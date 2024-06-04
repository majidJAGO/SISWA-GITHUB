<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite('resources/css/app.css')
  <title>Button</title>

  <style>
    body {
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}


.pembungkus {
    background-color: rgb(100, 99, 99);
    display: flex;
    justify-content: center;
    align-items: center;
    width: 23%;
    height: 300px;
    margin-left: 500px;
    margin-top: 160px;
}

.isi p {
    text-align: center;
    font-size: 25px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    margin: 0;
}

.isi input {
    background-color: #f2f2f2;
    border: 1px solid;
    justify-content: center;
    display: flex;
    margin: 20px;
    width: 200px;
    padding: 8px;
    border-radius: 8px;
    align-items: center;
}

a.regis-link {
    padding: 8px;
    text-decoration: none;
    color: black;
    background-color: #ccc;
    display: flex;
    width: 200px;
    margin-left: 20px;
    border-radius: 8px;
    justify-content: center;
    align-items: center;
}
  </style>

<title>Document</title>
    
</head>
<body>
    <div class="pembungkus">
        <div class="isi">
            <form method="POST" action="{{ route('login-proses')}}">
                @csrf
            <p>SISWA DISIPLIN </p>
            <hr>
            <label for="email"></label>
            <input type="text" id="email" name="email" placeholder="username" required> 

            <label for="password"></label>
                <input type="password" id="password" name="password" placeholder="password" required>

            
                <input type="submit"class="submit" name="submit" value="login">

          </form>
            
    </div>
    
</body>
</html>