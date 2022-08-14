<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
//функция вывода на страницу
    public function outputInfo() {
        $clients = DB::table('clients')
            ->join('cars', 'clients.id', '=', 'cars.client_id')
            ->select('clients.full_name', 'clients.car', 'cars.gos_number', 'clients.id')
            ->paginate(5);

        return view('clients', compact('clients'));
    }
//функция для добавления записи
    public function addNote() {

        return view('add-note');

    }



//функции для кнопки добавления
    public function clientSubmit(Request  $request){
        $validate = $request->validate([
            'full_name' => 'required|min:3',
            'gender' => 'required',
            'phone' => 'required|min:11|max:11',
            'car' => 'required'
        ]);

        $insert = DB::table('clients')->insert([
            'id' => $request->id,
         'full_name' => $request->full_name,
         'gender' => $request->gender,
         'phone' => $request->phone,
         'address' => $request->address,
         'car' => $request->car,
         'cars_count' => $request->cars_count
     ]);



        return back()->with('client_created', 'Сlient added Successfully');
    }

    public function carSubmit(Request  $request){
        $validate = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required',
            'gos_number' => 'required',
            'status' => 'required'
        ]);

        $insert = DB::table('cars')->insert([
            'brand' => $request->brand,
            'model' => $request->model,
            'color' => $request->color,
            'gos_number' => $request->color,
            'status' => $request->status,
            'client_id' => $request->client_id
        ]);


        return back()->with('car_created', 'Car added Successfully');
    }



//функция для просмотра информации о клиенте и машинах
    public  function getClientById($id) {
            $client = DB::table('clients')->where('id', $id)->first();
            $car = DB::table('cars')->where('client_id', $id)->first();
        return view('clientbyID',  compact('car'), compact('client'));
    }


//функция удаления записи
    public function deleteNote($id) {
        $car = DB::table('cars')->where('client_id', $id)->delete();
        $client = DB::table('clients')->where('id', $id)->delete();
        return back()->with('note_deleted', 'Запись №'. $id.' была удалена');
    }
//функция редактирования
    public function editNote($id) {
        $client = DB::table('clients')->where('id', $id)->first();
        $car = DB::table('cars')->where('client_id', $id)->first();
        return view('edit_data', compact('client'), compact('car'));
    }
//функции кнопки для редактирования клиента и машины
    public function updateClient(Request $request) {

        $validate = $request->validate([
            'full_name' => 'required|min:3',
            'gender' => 'required',
            'phone' => 'required|min:11|max:11',
            'car' => 'required'
        ]);

       $client = DB::table('clients')->where('id', $request->id)->update([
            'full_name'=>$request->full_name,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'car'=>$request->car
        ]);

        return redirect('/')->with('note_updated', 'Запись была успешно обновлена!');

    }
    public function updateCar(Request $request) {
        $validate = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required',
            'gos_number' => 'required',
            'status' => 'required'
        ]);
       $car =  DB::table('cars')->where('client_id', $request->client_id)->update([
            'brand' => $request->brand,
            'model' => $request->model,
            'color' => $request->color,
            'gos_number' => $request->color,
            'status' => $request->status
        ]);
        return redirect('/')->with('note_updated', 'Запись была успешно обновлена!');
    }

    public function parkingListInfo() {

        $clients = DB::table('clients')
            ->join('cars', 'clients.id', '=', 'cars.client_id')
            ->select('clients.full_name', 'cars.brand', 'cars.model')
            ->get();
        return view('parking-list', compact('clients'));
    }



}
