<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $name = "Adi Surya";
//     $fullname = "I Komang Marjaya Adi Surya";
//     $phone = "+6285 156 847 361";
//     $email = "marjaya@undiksha.ac.id";
//     $adress = "Jl. Paleg, Desa Tianyar, Kubu Karangasem, Bali";
//     return view('index', [
//         'name' => $name,
//         'fullname' => $fullname,
//         'phone' => $phone,
//         'email' => $email,
//         'adress' => $adress
//     ]);
// });

Route::get('/home', function () {
    $name = "Adi Surya";
    $fullname = "I Komang Marjaya Adi Surya";
    $phone = "+6285 156 847 361";
    $email = "marjaya@undiksha.ac.id";
    $adress = "Jl. Paleg, Desa Tianyar, Kubu Karangasem, Bali";
    return view('home', [
        'name' => $name,
        'fullname' => $fullname,
        'phone' => $phone,
        'email' => $email,
        'adress' => $adress
    ]);
});
