<?php

namespace App\Http\Controllers;

use App\Models\kalkulator;
use Illuminate\Http\Request;

class Operasi{
    public function Tambah($input_a, $input_b) {
        return $input_a + $input_b;
    }
    public function Kurang($input_a, $input_b) {
        return $input_a - $input_b;
    }
    public function Kali($input_a, $input_b) {
        return $input_a * $input_b;
    }
    public function Bagi($input_a, $input_b) {
        if($input_b == 0){
            return "tidak bisa dibagi 0";
        }
        return $input_a / $input_b;
    }
}
class CalculatorController extends Controller
{
    public function index() {
        $hasil = "";
        return view('welcome',[
            'hasil' => $hasil,
        ]);
    }
    public function operasi (Request $request){
        $hasil = "";
        $operasi = new Operasi();
        $input_a = $request->input('input_a');
        $input_b = $request->input('input_b');  
        
        switch ($request->input('operasi')) {
            case '+':
                $hasil = $operasi->Tambah($input_a,$input_b);
                break;
            case '-':
                $hasil = $operasi->Kurang($input_a,$input_b);
                break;
            case '*':
                $hasil = $operasi->Kali($input_a,$input_b);
                break;
            case '/':
                $hasil = $operasi->Bagi($input_a,$input_b);
                break;
            default:
                $hasil = "Operasi tidak valid";
        }
        
        kalkulator::create([
            'input_a' => $input_a,
            'operasi' => $request->input('operasi'),
            'input_b'=> $input_b,
            'hasil' => $hasil,
        ]);    

        return view('welcome',[
            'hasil' => $hasil,
        ]);
    }
}