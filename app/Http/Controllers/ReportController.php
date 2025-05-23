<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\Snappy\Facades\SnappyPdf;

class ReportController extends Controller
{
    public function report()
    {
        $users = User::all();

        $pdf = SnappyPdf::loadView('pdf.report', compact('users'));

        return $pdf->inline('report.pdf');
    }
}

 /*
 - notas: se utiliza el comando inline solo para mostrar el pdf en el navegador pero
 -  no se descarga, si se quiere descargar el pdf se utiliza el comando download
 -  y se le pasa el nombre del archivo como parametro 
 - $pdf->download('report.pdf');
 */
