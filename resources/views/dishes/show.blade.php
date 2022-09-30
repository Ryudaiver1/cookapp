<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dishes</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $dish->title }}
        </h1>
        <p class="edit">[<a href="/dishes/{{ $dish->id }}/edit">edit</a>]</p>
        <form action="/dishes/{{ $dish->id }}" id="form_{{ $dish->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deleteDish({{ $dish->id }})">delete</button> 
        </form>
        <script>
            function deleteDish(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        <a href="">{{ $dish->category->name }}</a>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
