<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EcCuadraticaModel;

class EcCuadraticaController extends Controller
{
    public function store(Request $request)
    {
        $a = (int)$request->value_a;
        $b = (int)$request->value_b;
        $c = (int)$request->value_c;


        function resolver_ecuacion($a, $b, $c)
        {
            $discriminante = (pow($b,2)-(4 * $a * $c));
            if($discriminante >= 0)
            {
                $x1 = ((-$b + sqrt($discriminante))/(2 * $a));
                $x2 = ((-$b - sqrt($discriminante))/(2 * $a));

                $soluciones = array($x1, $x2);
                $results = "x1:".$x1." x2:".$x2;
                $values = array('value_a' => (int)$a, 'value_b' => (int)$b, 'value_c' => (int)$c, 'results' => $results);

                $eccuadratica = new EcCuadraticaModel();
                $eccuadratica->value_a = $a;
                $eccuadratica->value_b = $b;
                $eccuadratica->value_c = $c;
                $eccuadratica->results = $results;
                
                $eccuadratica->save();

                echo json_encode($soluciones);

            } else {
                $error_message = "Error: Ecuaciones con raices imaginarias";
                echo json_encode($error_message);
            }
        }

        if($a == '0')
        {
            $error_message = "Error: Existe una division para cero";
            echo json_encode($error_message);
        } elseif(empty($a) || empty($b) || empty($c)) {
            $error_message = "Error: Llene todos los campos";
            echo json_encode($error_message);
        } else {
            resolver_ecuacion($a, $b, $c);
        }
        
    }
}
