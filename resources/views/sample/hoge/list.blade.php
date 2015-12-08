@extends('layout')
@section('content')
リスト
<li>
    @foreach ($list as $hoge)
        <ul>{{$hoge->body}}</ul>
    @endforeach
</li>
@endsection
