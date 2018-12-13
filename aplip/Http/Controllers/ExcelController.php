<?php

namespace App\Http\Controllers;
use App\cie;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function importar()
    {
        Excel::load('cie13.csv', function($reader) {
            foreach ($reader->get() as $book) {
                //echo $book;

                cie::create([
                    'codigo' => $book->codigo,
                    'descripcion' =>$book->descripcion,
                    'campo' =>$book->campo,
                ]);
            }
        });
        return "datos ingresados correctamente";
    }
}
