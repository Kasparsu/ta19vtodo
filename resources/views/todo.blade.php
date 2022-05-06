<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="heading-1">Your Code</h1>
        <div class="box">
            {{$code}}
        </div>
        <form class="box" action="/{{$code}}" method="POST">
            @csrf
            <div class="field">
                <div class="control">
                    <input class="input" name="item" type="text" placeholder="Buy milk...">
                </div>
            </div>
            <input type="submit" class="button is-primary" value="Add">
        </form>
        @foreach($items as $item)
            <div class="box">
                {{$item->title}} <a class="button is-danger" href="/item/{{$item->id}}/delete">Its done</a>
            </div>
        @endforeach
    </div>
</section>
</body>
</html>
