<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
      <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <title>Document</title>
     <style>
        .bg-light {
            background-color: #eae9e9 !important;
        }
    </style>
</head>
<body>

    <div id="app">

    </div>

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
