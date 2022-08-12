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
        <h3 class="text-center">Страница добавления информации</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4 center m-auto" style="width: 700px; ">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Блок добавления клиента</h5>
                        <hr>
                        @if(Session::has('client_created'))
                            <div class="alert alert-success">
                                {{Session::get('client_created')}}
                            </div>
                        @endif
                        <form class="form-margin" action="client-submit" method="post">
                            @csrf
{{--                            <div class="mb-3">--}}
{{--                                <label class="form-label">Введите порядковый номер клиента</label>--}}
{{--                                <input name="id" type="text" class="form-control" placeholder="1">--}}
{{--                            </div>--}}
                            <div class="mb-3">
                                <label class="form-label">Введите порядковый номер клиента в общем списке</label>
                                <input name="id" type="number" class="form-control" placeholder="1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Введите ваше ФИО</label>
                                <input name="full_name" type="text" class="form-control" placeholder="Иванов Иван Иванович">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Выберите пол</label>
                                <select name="gender" class="form-select" aria-label="Default select example">
                                    <option selected>Не выбрано</option>
                                    <option value="1">Мужской</option>
                                    <option value="2">Женский</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Введите ваш номер телефона</label>
                                <input name="phone" type="number" class="form-control" placeholder="8 937 989 07 86">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Введите ваш адрес</label>
                                <input name="address" type="text" class="form-control" placeholder="г. Волгоград, Университетский проспект 0">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Введите марку и модель вашего авто</label>
                                <input name="car" type="text" class="form-control" placeholder="Renault megan">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Введите количество машин, которые будете записывать</label>
                                <input name="cars_count" type="number" class="form-control" placeholder="Renault megan">
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn btn-primary " value="Добавить клиента">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div style="margin-top: 20px;" class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Блок добавления авто</h5>
                        <hr>
                        @if(Session::has('car_created'))
                            <div class="alert alert-success">
                                {{Session::get('car_created')}}
                            </div>
                        @endif

                        <form class="form-margin" action="car-submit"  method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Введите порядковый номер машины</label>
                                <input name="client_id" type="text" class="form-control" placeholder="1">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Введите марку авто</label>
                                <input name="brand" type="text" class="form-control" placeholder="Renault">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Введите модель авто</label>
                                <input name="model" type="text" class="form-control" placeholder="megan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Введите цвет кузова авто</label>
                                <input name="color" type="text" class="form-control" placeholder="Зелёный">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Введите Гос Номер РФ</label>
                                <input name="gos_number" type="text" class="form-control" placeholder="А 777 АА 31">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Статус авто</label>
                                <select name="status" class="form-select" aria-label="Default select example">
                                    <option selected>Не выбрано</option>
                                    <option value="1">Находится на стоянке</option>
                                    <option value="2">Отсутствует на стоянке</option>
                                </select>
                            </div>

{{--                            <div class="mb-3">--}}
{{--                                <label class="form-label">Введите порядковый номер машины</label>--}}
{{--                                <input name="client_id" type="text" class="form-control" placeholder="1">--}}
{{--                            </div>--}}
                                <input type="submit" class="btn btn-primary" value="Добавить авто">

                        </form>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="raw justify-center">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Добавить ещё автомобиль</h5>
                            <hr>
                            <div class="text-center">
                                <button name="addNextCar" class="btn btn-primary" type="submit">Добавить авто</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
