<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Cookapp</title>
     </head>
    <body>
        <h1>Cookapp</h1>
        <a href='/dishes/create'>create</a>
        <div class='dishes'>
            @foreach ($dishes as $dish)
                <div class='dish'>
                    <h2 class='title'>
                        <a href="/dishes/{{ $dish->id}}">{{ $dish->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $dishes->links() }}
        </div>
        <a href="">{{ $dish->category->name }}</a>
    </body>
</html>