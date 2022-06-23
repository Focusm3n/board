@extends('layouts.base')

@section('title', 'Правка объявления :: Мои объявления')

@section('main')
    <form action=" {{ route ('bb.update', ['bb' => $bb->id]) }} " method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="txtTitle">Toвap</label>
            <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $bb->title) }}">
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtMain">Oпиcaниe</label>
            <textarea name="main" id="txtMain" class="form-control @error('main') is-invalid @enderror"
                      row="З">{{ old('main' , $bb->main) }}</textarea>
            @error('main')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtPrice">Цeнa</label>
            <input name="price" id="txtPrice" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $bb->price) }}">
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Сохранить изменения">
    </form>
@endsection

