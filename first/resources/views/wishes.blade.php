@extends('layout')
@section('title')Пожелания @endsection

@section('main_content')
<h1>Форма для Ваших  пожеланий</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </ul>
    </div>
@endif
    <form method="post" action="/wishes_" >
                           @csrf
        <input type="email" name="email" id="email" placeholder="введите email" class="form-control"  ><br>
        <input type="text" name="subject" id="subject" placeholder="Тема пожелания" class="form-control"><br>
<textarea name="message" id="message" placeholder="Введите Ваше  сообщение " class="form-control" ></textarea><br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="submit">Button</button>

        </div>

    </form>

@endsection
