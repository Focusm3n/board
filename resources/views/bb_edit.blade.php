@extends('layouts.base')

@section('title', 'Правка объявления :: Мои объявления')

@section('main')
    <form action=" {{ route ('bb.update', ['bb' => $bb->id]) }} " method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="txtTitle">Toвap</label>
            <input name="title" id="txtTitle" class="form-control" value="{{ $bb->title }}">
        </div>
        <div class="form-group">
            <label for="txtMain">Oпиcaниe</label>
            <textarea name="main" id="txtMain" class="form-control"
                      row="З">{{ $bb->main }}</textarea>
        </div>
        <div class="form-group">
            <label for="txtPrice">Цeнa</label>
            <input name="price" id="txtPrice" class="form-control" value="{{ $bb->price }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Сохранить изменения">
    </form>
@endsection

