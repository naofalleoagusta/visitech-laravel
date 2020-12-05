<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="icon" href="https://ik.imagekit.io/vp9bgybmpm/Logo_Visi_TqigWP9bn6aE.png" type="image/x-icon"/>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>
    @if(isset($title))
        {{ $title }} | VisiTech
    @else
        VisiTech
    @endif
</title>
