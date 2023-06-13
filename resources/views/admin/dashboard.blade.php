@extends('layouts.admin')

@section('title')
    Home
@endsection

@section('contnetheader')
    Home
@endsection

@section('contnetheaderlink')
    <a href="{{route('admin.dashboard')}}">link</a>
@endsection

@section('contnetheaderactive')
    this is dashboard
@endsection

@section('content')
    <div class="row" style="background-image: url({{asset('assets/admin/imgs/dash.jpg')}}); background-size:cover; background-repeate; min-height:600px"> </div>
@endsection
