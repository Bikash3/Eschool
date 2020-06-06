@extends('layout.login')
@section('content')
<login data-csrf='{{ csrf_token() }}'></login>
@endsection