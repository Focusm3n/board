@extends('layouts.base')

@section('title', 'Добавление объявления :: Мои объявления')

@section('main')
    <form action=" {{ route ('bb.store') }} " method="POST">
        @csrf
        <div class="form-group">
            <label for="txtTitle">Toвap</label>
            <input name="title" id="txtTitle" class="form-control">
        </div>
        <div class="form-group">
            <label for="txtMain">Oпиcaниe</label>
            <textarea name="main" id="txtMain" class="form-control"
                      row="З"></textarea>
        </div>
        <div class="form-group">
            <label for="txtPrice">Цeнa</label>
            <input name="price" id="txtPrice" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
@endsection
