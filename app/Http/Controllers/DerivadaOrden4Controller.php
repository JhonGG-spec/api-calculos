<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DerivadaModel;

class DerivadaOrden4Controller extends Controller
{
    public function store(Request $request)
    {
        $a = $request->value_a;
        $b = $request->value_b;
        $c = $request->value_c;
        $d = $request->value_d;
        $e = $request->value_e;

        function resolver_derivada($a, $b, $c, $d, $e) {
            $valores = array($a, $b, $c, $d, $e);

            for($i=3; $i>=1; $i--) {
                $numero_valores = sizeof($valores);
                for($j=0; $j<$numero_valores; $j++) {
                    $valores[$j] = $valores[$j] * ($numero_valores - ($j+1));
                }
                array_pop($valores);
            }
            $results = $valores[0]."x + (".$valores[1].")";

            $derivada = new DerivadaModel();
            $derivada->value_a = $a;
            $derivada->value_b = $b;
            $derivada->value_c = $c;
            $derivada->value_d = $d;
            $derivada->value_e = $e;
            $derivada->results = $results;
                
            $derivada->save();
            echo json_encode($valores);
        }

        if ($a == '0') {
            $error_message = "Error: Esta no es una ecuacion de cuarto grado.";
            echo json_encode($error_message);
        } elseif(empty($a) || empty($b) || empty($c) || empty($d) || empty($e)) {
            $error_message = "Error: Llene todos los campos";
            echo json_encode($error_message);
        } else {
            resolver_derivada($a, $b, $c, $d, $e);
        }
    }
}
