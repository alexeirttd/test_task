
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
    <div class="container ">

        <div class="card">

            <div class="offset-md-2 col-md-8 text-center">
                <h2>Сведения о клиенте №{{$client->id}} </h2>
            </div>
            <hr>

                <div class="card-body">
                    <h5 class="card-title">ФИО: {{ $client->full_name }}</h5>
                    <hr>
                    <p class="card-text">Авто: {{ $client->car }}</p>
                    <hr>
                    <p class="card-text">Гос Номер РФ: {{ $car->gos_number }}</p>



                </div>
            </div>

        <div id="wrapper">
            <div class="container">
                <h3 class="text-center">Подробная информация</h3>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Полная информация о клиенте</h5>
                                <hr>
                                @if(Session::has('client_created'))
                                    <div class="alert alert-success">
                                        {{Session::get('client_created')}}
                                    </div>
                                @endif
                                <form class="form-margin" >
                                    @csrf
                                    <div class="mb-3">
                                        <p>Порядковый номер клиента: {{ $client->id }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <p>ФИО: {{ $client->full_name }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <p>Пол: {{ $client->gender }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <p>Номер телефона: {{ $client->phone }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <p>Адрес проживания: {{ $client->address }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <p>Марка и модель авто: {{ $client->car }}</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Полная информация об авто</h5>
                                <hr>

                                <form class="form-margin" >
                                    @csrf
                                    <div class="mb-3">
                                        <p>Порядковый номер машины: {{ $car->client_id }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <p>Марка авто: {{ $car->brand }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <p>Модель авто: {{ $car->model }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <p>Цвет кузова авто: {{ $car->color }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <p>Гос Номер РФ: {{ $car->gos_number }}</p>
                                    </div>

                                    <div class="mb-3">
                                        <p>Статус авто: {{ $car->status }}</p>
                                    </div>
                                </form>
                            </div>
                        </div>
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
