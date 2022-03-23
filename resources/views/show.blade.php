@extends('layout')

@section('content')
<h1>{{ $shop->name }}</h1>

<div>
  {{ $shop->category->name }},
  {{ $shop->address }}
</div>

<div>
  <a href="{{ route('shop.list') }}">一覧に戻る</a>
  | <a href="{{ route('shop.edit', ['id' => $shop->id]) }}">編集する</a>
  <p></p>
  {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy', $shop->id]]) }}
  {{ Form::submit('削除', ['class' => 'btn btn-outline-danger'])}}
  {{ Form::close() }}
</div>

@endsection
