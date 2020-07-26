@extends('layout.main')
@section('content')
<router-view data-crsf="{{ csrf_token() }}"></router-view>
@endsection