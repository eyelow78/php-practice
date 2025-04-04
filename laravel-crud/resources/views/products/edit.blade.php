<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href={{ asset('styles/normalize.css')}}>
    <link rel="stylesheet" href={{ asset('styles/style.css')}}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD app</title>
</head>
<body>
    <h1>CRUD app</h1>
    <div class="container">
        <div class="main-header">
            <h2>Изменить товар</h2>
            <a href="/"><button class="header-button">Назад</button></a>
        </div>
        <form class="create-form" action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            <div class="create-form-cont">
                <span>Название товара:</span>
                <input value="{{ $product->name }}" name="name" placeholder="Название" type="text" required>
            </div>
            <div class="create-form-cont">
                <span>Описание товара:</span>
                <textarea placeholder="Описание" name="description" cols="30" rows="10" required>{{ $product->description }}</textarea>
            </div>
            <input style="height: 40px" class="header-button" type="submit" value="Отправить">
        </form>
    </div>
</body>
</html>