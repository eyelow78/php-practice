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
            <h2>Список товаров:</h2>
            <a href="/create"><button class="header-button add-button">Добавить</button></a>
        </div>
        <table>
            <tr class="header-tr">
                <th>ID</th>
                <th>Наименование товара</th>
                <th>Описание товара</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td class="td">{{ $product->id }}</td>
                <td class="td">{{ $product->name }}</td>
                <td class="td td-descr"><p class="descr">{{ $product->description }}</p></td>
                <td class="buttons-container">
                    <a href="{{ route('products.edit', $product->id) }}"><button class="header-button edit-button">Изменить</button></a>
                    <form action=" {{ route("products.delete", $product->id) }} " method="POST">
                        @csrf
                        <button type="submit" class="header-button delete-button">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tr>
        </table>
    </div>
</body>
</html>

