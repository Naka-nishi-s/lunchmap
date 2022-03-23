@extends('layout')

@section('content')
<h1>{{ $shop->name }}</h1>

<div>
  {{ $shop->category->name }},
  {{ $shop->address }}
</div>

<div>
  <a href="{{ route('shop.list') }}">一覧に戻る</a>
</div>

@endsection
