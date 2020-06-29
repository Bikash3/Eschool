@extends('layout.main')
@section('content')
<login data-error="{{ session('errormsg') }}" data-csrf='{{ csrf_token() }}'>@csrf</login>
@endsection