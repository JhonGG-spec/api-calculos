<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TbValoresController extends Controller
{
    public function store(Request $request) 
    {
        $a = $request->value_a;
        $b = $request->value_b;
        $c = $request->value_c;

        function obtener_valores($a, $b, $c) {
            $vertice = ((-$b)/(2 * $a));
            $x[0] = $vertice - 5;
            $y[0] = $a * (pow($x[0],2)) + $b * ($x[0]) + $c;
            for ($i=1; $i<=10; $i++) {
                $x[$i] = $x[$i-1] + 1;
                $y[$i] = $a * (pow($x[$i],2)) + $b * ($x[$i]) + $c;
            }
            $tbvalores = array($x, $y);
            echo json_encode($tbvalores);
        }

        if ($a == '0') {
            $error_message = "Error: Esta no es una ecuación cuadrática.";
            echo json_encode($error_message);
        } elseif(empty($a) || empty($b) || empty($c)) {
            $error_message = "Error: Llene todos los campos";
            echo json_encode($error_message);
        } else {
            obtener_valores($a, $b, $c);
        }
    }
}
