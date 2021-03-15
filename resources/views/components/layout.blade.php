<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Note | MYNIC</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>

  <!-- Navigation -->
  <x-navbar />

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <x-jumbotron title="Welcome to Notes" description="This website enables you to create, view, edit, and delete note!"/>

    <!-- Page Features -->
    <div class="row text-center">

      

      {{$slot}}

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <x-footer/>