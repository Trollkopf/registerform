<?php

namespace App\Http\Controllers;

use App\Models\Clientesweb;
use Illuminate\Http\Request;

class ClienteswebController extends Controller
{
    public function store(Request $request)
    {

        // dd($request);

        $this->validate(
            $request,
            [
                "NIFCLI" => "required | max:18",
                "NOMBREFIS" => "required | max:100",
                "NOMBRECOM" => "required | max:100",
                "DOMCLI" => "required | max:100",
                "CPOCLI" => "required | max:10",
                "POBCLI" => "required | max:40",
                "PROCLI" => "max:40",
                "PAIS" => "required | max:30",
                'TELCLI' => "required | max:16",
                'TELF2' => "max:16",
                'MOVIL' => "max:16",
                'FAXCLI' => "max:16",
                'EMACLI' => "required | email | max:100",
                'WEBCLI' => "max:60",
                'FPACLI' => "required",
                'PROPCLI' => "max:500",
                'MENSAJE' => "max:250",
                'OBSCLI' => "max:500",

            ]
        );

        Clientesweb::create([
            'NIFCLI' => $request->NIFCLI,
            'NOMBREFIS' => $request->NOMBREFIS,
            'NOMBRECOM' => $request->NOMBRECOM,
            'DOMCLI' => $request->DOMCLI,
            'CPOCLI' => $request->CPOCLI,
            'POBCLI' => $request->POBCLI,
            'PROCLI' => $request->PROCLI,
            'PAIS' => $request->PAIS,
            'TELCLI' => $request->TELCLI,
            'TELF2' => $request->TELF2,
            'MOVIL' => $request->MOVIL,
            'FAXCLI' => $request->FAXCLI,
            'EMACLI' => $request->EMACLI,
            'WEBCLI' => $request->WEBCLI,
            'FPACLI' => $request->FPACLI,
            'PROPCLI' => $request->PROPCLI,
            'DP1CLI' => $request->DP1CLI,
            'DP2CLI' => $request->DP2CLI,
            'MENSAJE' => $request->MENSAJE,
            'OBSCLI' => $request->OBSCLI,
        ]);

        return back()->with('success', 'Formulario enviado');
    }

    public function obtenerDatos()
    {
        $datos = Clientesweb::all();

        return response()->json($datos);
    }
}
