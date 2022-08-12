<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Страница создания</title>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
<div id="wrapper">
    <div class="container">
        <h3 class="text-center">Страница изменения информации</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Блок изменения данных о клиенте</h5>
                        <hr>
                        @if(Session::has('note_updated'))
                            <div class="alert alert-success">
                                {{Session::get('note_updated')}}
                            </div>
                        @endif
                        <form class="form-margin" action="/update-client" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Введите порядковый номер клиента в общем списке</label>
                                <input name="id" type="number" value="{{$client->id}}" class="form-control" placeholder="1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Введите новое ФИО</label>
                                <input name="id" type="text" class="form-control" value="{{$client->full_name}}" placeholder="Иванов Иван Иванович">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Выберите пол</label>
                                <select class="form-select"  aria-label="Default select example">
                                    <option selected>Не выбрано</option>
                                    <option value="1">Мужской</option>
                                    <option value="2">Женский</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Введите новый номер телефона</label>
                                <input name="salary" type="text" value="{{$client->phone}}" class="form-control" placeholder="8 937 989 07 86">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Введите новый адрес</label>
                                <input name="salary" type="text" value="{{$client->address}}" class="form-control" placeholder="г. Волгоград, Университетский проспект 0">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Введите марку и модель нового авто</label>
                                <input name="salary" type="text" value="{{$client->car}}" class="form-control" placeholder="Renault megan">
                            </div>

                            <div class="text-center">
                                <button name="addClient" class="btn btn-primary" type="submit">Изменить данные</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Блок изменения данных об авто</h5>
                        <hr>
                        <form class="form-margin" action="/update-car" method="post">
                            <div class="mb-3">
                                <label class="form-label">Введите марку нового авто</label>
                                <input name="id" type="text" value="{{$car->brand}}" class="form-control" placeholder="Renault">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Введите модель нового авто</label>
                                <input name="age" type="text" value="{{$car->model}}" class="form-control" placeholder="megan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Введите цвет кузова нового авто</label>
                                <input name="age" type="text" value="{{$car->color}}" class="form-control" placeholder="Зелёный">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Введите другой Гос Номер РФ</label>
                                <input name="salary" type="text" value="{{$car->gos_number}}" class="form-control" placeholder="А 777 АА 31RUS">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Статус авто</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Не выбрано</option>
                                    <option value="1">Находится на стоянке</option>
                                    <option value="2">Отсутствует на стоянке</option>
                                </select>
                            </div>

                            <div class="text-center">
                                <button name="addCar" class="btn btn-primary" type="submit">Изменить данные</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
