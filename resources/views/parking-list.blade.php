

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Страница с сотрудниками</title>

    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>



<div id="wrapper">
    <div class="container text-center mt-3">
        <select name="category" class="form-select" aria-label="Default select example">
            <option value="0" selected>Выберите клиента</option>
{{--            @foreach ($optionList as $optionItem):--}}
{{--            <option value="-->{{$optionItem['id']}}">{{$optionItem['type_name']}}</option>--}}
{{--            @endforeach--}}

        </select>
    </div>
    <div class="container text-center mt-3">
        <select name="category" class="form-select" aria-label="Default select example">
            <option value="0" selected>Выберите машину клиента</option>
{{--            @foreach ($optionList as $optionItem):--}}
{{--            <option value="-->{{$optionItem['id']}}">{{$optionItem['type_name']}}</option>--}}
{{--            @endforeach--}}

        </select>
    </div>
</div>

</body>
</html>
