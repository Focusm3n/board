@extends('layouts.base')

@section('title', 'Удаление объявления')

@section('main')
    <h2>{{ $bb->title }}</h2>
    <p>{{ $bb->main }}</p>
    <p>{{ $bb->price }} руб.</p>
    <p>Автор: {{ $bb->user->name }}</p>
    <form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>
    <p><a href="{{ route('home') }}">На перечень объявлений</a> </p>
@endsection
