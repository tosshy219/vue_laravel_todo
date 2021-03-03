<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

  {{-- MDBを使用可能にする --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">

  <title>test</title>
</head>

<body>
  <div id="app">

    <nav-component></nav-component>
    
    {{-- ここにurlごとに画面が入る --}}
    <router-view></router-view>
    
  </div>

<script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>