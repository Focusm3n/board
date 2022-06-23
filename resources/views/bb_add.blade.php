@extends('layouts.base')

@section('title', 'Добавление объявления :: Мои объявления')

@section('main')
    <form action=" {{ route ('bb.store') }} " method="POST">
        @csrf
        <div class="form-group">
            <label for="txtTitle">Toвap</label>
            <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtMain">Oпиcaниe</label>
            <textarea name="main" id="txtMain" class="form-control @error('main') is-invalid @enderror"
                      row="З"> {{ old('title') }}</textarea>
            @error('main')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtPrice">Цeнa</label>
            <input name="price" id="txtPrice" class="form-control @error('price') is-invalid @enderror" value="{{ old('title') }}">
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
@endsection
