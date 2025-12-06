<?php

use App\Models\Contacto;
use Illuminate\Http\Request;

//Route::get('/', function () {
   // return view('formulario_contacto');
//});
Route::get('/prueba', function() {
    return 'Laravel funciona en Azure!';
});


Route::post('/save', function (Request $request) {
    Contacto::create([
        'nombre' => $request->nombre,
        'correo' => $request->correo,
    ]);
    return redirect('/')->with('success', 'Contacto guardado');
});

