<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Cookapp</title>
    </head>
    <body>
        <h1>Dish Name</h1>
        <form action="/dishes" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="dish[title]" placeholder="タイトル"/>
                <p class="title__error" style="color:red">{{ $errors->first('dish.title') }}</p>
            </div>
            <duv class="category">
                <h2>Category</h2>
                <select name="dish[category_id]">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </duv>
            <input type="submit" value="store"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
