@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>

<p>ESTE CONTENIDO ES PUBLICO</p>
@role('ADMIN')
<p>ESTE CONTENIDO LO VE SOLO EL ADMINISTRADOR</p>
@endrole

@role('NORMAL')
<p>ESTE SOLO LO VA A VER EL ROL NORMAL</p>
@endrole

@endsection
