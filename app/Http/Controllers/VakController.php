<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VakController extends Controller 
{
    public function mostrarTest()
    {
        return view('mostrar_test_vak');
    }

public function procesarTest(Request $request)
    {
        $totalPreguntas = 40;
        $conteoV = 0;
        $conteoA = 0;
        $conteoK = 0;
        for ($i = 1; $i <= $totalPreguntas; $i++) {
            $voto = strtoupper($request->input('pregunta' . $i, 'A'));

            if ($voto === 'A') {
                $conteoV++; // Opción A -> Visual
            } elseif ($voto === 'B') {
                $conteoA++; // Opción B -> Auditivo
            } elseif ($voto === 'C') {
                $conteoK++; // Opción C -> Kinestésico
            }
        }

        $p_visual = round(($conteoV / $totalPreguntas) * 100, 2);
        $p_auditivo = round(($conteoA / $totalPreguntas) * 100, 2);
        $p_cinestesico = round(($conteoK / $totalPreguntas) * 100, 2);
 
        $scriptPython = base_path('vakotravez.py');
        
        $comando = "python3 " . escapeshellarg($scriptPython) . " $p_visual $p_auditivo $p_cinestesico 2>&1";
        
        $resultadoPython = shell_exec($comando);
        
        $ganador_final = trim($resultadoPython);

        if (empty($ganador_final)) {
            $ganador_final = 'Visual';
            $maximo = $p_visual;

            if ($p_auditivo > $maximo) {
                $ganador_final = 'Auditivo';
                $maximo = $p_auditivo;
            }
            if ($p_cinestesico > $maximo) {
                $ganador_final = 'Kinestésico';
            }
        }
        $datos_vak = [
            "ganador"      => $ganador_final,
            "porcentaje_v" => $p_visual,
            "porcentaje_a" => $p_auditivo,
            "porcentaje_k" => $p_cinestesico
        ];

        return redirect()->route('testvak.resultados')->with('datos_test', $datos_vak); 
    }

    public function mostrarResultados()
    {
        $datos = session('datos_test');

        if (!$datos) {
            return redirect()->route('testvak.mostrar');
        }
        return view('resultados_test_vak', compact('datos'));
    }
}