@extends('layouts.frontend')

@section('content')
<div class="container">
    <h3>Profile Saya</h3>
    <p>Nama: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
</div>
@endsection