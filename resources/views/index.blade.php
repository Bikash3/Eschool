@extends('layout.main')
@section('content')
<router-view data-crsf="{{ csrf_token() }}" data-error="{{ session('errormsg') }}">@csrf</router-view>
@endsection