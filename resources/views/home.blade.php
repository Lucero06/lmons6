<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido {{$dato1}}</title>
</head>
<body>

<x-nav/>
The current UNIX timestamp is {{ time() }}.<br><br>

@include('article', ['nombre' => 'Primer articulo'])

@php
$nombres=['Articulo 2', 'Articulo3', 'articulo4..'];
#$nombres=[];
@endphp

@each('article', $nombres, 'nombre', 'noarticle')


<x-footer/>

</body>

</html>