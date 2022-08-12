
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


        <div class="card text-center">
            <div class="card-header fw-bold">
                Блок добавления клиента
            </div>
            <div class="card-body">
                <p class="card-text">Здесь вы можете добавить клиента, нажав на кнопку ниже.</p>
                <a href="/add-note" class="btn btn-primary ">Добавить клиента</a>
            </div>

        </div>
        <br>
{{--        @if(count(array($list)) > 0):--}}
        @if(Session::has('note_deleted'))
            <div class="alert alert-success">
                {{Session::get('note_deleted')}}
            </div>
        @endif

        <table class="table  table-striped table-bordered">
            <h5>Список клиентов/<a href="/parking-list" class="active" >Просмотр всех автомобилей на стоянке</a></h5>
            @if(Session::has('note_updated'))
                <div class="alert alert-success">
                    {{Session::get('note_updated')}}
                </div>
            @endif
            <br>
            <thead>
            <tr>
                <th scope="col">ФИО</th>
                <th scope="col">Авто</th>
                <th scope="col">Номер</th>
                <th scope="col">Просмотр</th>
                <th scope="col">редактирование</th>
                <th scope="col">удаление</th>
            </tr>
            </thead>
            <tbody>
           @foreach($clients as $client)
            <tr>
                <td>{{ $client->full_name }}</td>

                <td>{{ $client->car }}</td>

                <td>{{ $client->gos_number }}</td>
                <td><a href="/{{$client->id}}" type="submit" class="btn btn-success text-light">Просмотр</a></td>
                <td><a href="/edit-note/ {{$client->id}}" type="submit" class="btn btn-info text-light">Редактировать</a></td>
                <td><a href="/delete-note/{{$client->id}}" type="submit" class="btn btn-danger text-light">Удалить</a></td>

            </tr>
          @endforeach
            </tbody>
        </table>

        <div class="container">
            {{ $clients->links() }}
        </div>


    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
