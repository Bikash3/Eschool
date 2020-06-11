@extends('layout.main')
@section('content')
<login data-error="{{session('errormsg')}}" data-csrf='@csrf'>@csrf</login>
@endsection