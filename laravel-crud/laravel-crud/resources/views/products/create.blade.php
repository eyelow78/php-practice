@extends('products.main')

@section('content')

<div class="create-header">
    <h2>Добавить товар</h2>
    <a href="#"><button class="header-button">Назад</button></a>
</div>
<form class="create-form" action="{{ route('products.store') }}" method="POST">
    <div class="create-form-cont">
        <span>Название товара:</span>
        <input name="name" placeholder="Название" type="text">
    </div>
    <div class="create-form-cont">
        <span>Описание товара:</span>
        <textarea placeholder="Описание" name="description" cols="30" rows="10"></textarea>
    </div>
    <input style="height: 40px" class="header-button" type="submit" value="Отправить">
</form>

@endsection