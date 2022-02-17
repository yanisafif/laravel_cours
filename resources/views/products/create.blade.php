<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <p>{{session('success')}}</p>
        <form action="{{ route('products.store') }}" method="post">
            <input type="text" name="label" placeholder="Label">
            <input type="text" name="price_ht" placeholder="Price HT">
            <input type="text" name="buying_price" placeholder="Buying price">
            <input type="text" name="description" placeholder="Description">
            <input type="submit" value="Envoyer !">
        </form>
    </body>
</html>
