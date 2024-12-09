<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class paginacontroller extends Controller
{


 public function bebidas()
 {
    return view ('bebidas');
 }

 public function cervezas()
 {
    return view ('cervezas');
 }

 public function refrescos()
 {
    return view ('refrescos');
 }
 public function contacto()
 {
    return view ('contacto');
 }

 public function inicio()
 {
    return view ('inicio');
 }

 public function compra()
 {
    return view ('compra');
 }
 public function procesar(Request $request)
 {
     // Validar los datos del formulario
     $validatedData = $request->validate([
         'nombre' => 'required|string|max:255',
         'email' => 'required|email|max:255',
         'direccion' => 'required|string|max:500',
         'ciudad' => 'required|string|max:100',
         'codigo_postal' => 'required|string|max:20',
         'metodo_pago' => 'required|string|in:tarjeta,paypal,efectivo',
         'numero_tarjeta' => 'nullable|string|max:16|required_if:metodo_pago,tarjeta',
     ]);

     // Crear una nueva compra en la base de datos
     $compra = new Compra();
     $compra->nombre = $validatedData['nombre'];
     $compra->email = $validatedData['email'];
     $compra->direccion = $validatedData['direccion'];
     $compra->ciudad = $validatedData['ciudad'];
     $compra->codigo_postal = $validatedData['codigo_postal'];
     $compra->metodo_pago = $validatedData['metodo_pago'];

     // Solo guardar el número de tarjeta si el método de pago es "tarjeta"
     if ($validatedData['metodo_pago'] === 'tarjeta') {
         $compra->numero_tarjeta = $validatedData['numero_tarjeta'];
     }

     $compra->save();

     // Redirigir al usuario con un mensaje de éxito
     return redirect()->route('inicio')->with('success', 'Tu compra ha sido procesada exitosamente.');
 }
 
}
