<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/gyms/index', function () {
    return view('gyms.index', [
        'kelas' => [
            [
                'no' => 1,
                'gambar' => asset('img/gambar1.png'),
                "nama" => "Body Combat",
                'instruktur' => 'Charli',
                'ruang' => 'Keals A',
                'rating' => '4'
            ],
    
            [
                'no' => 2,
                'gambar' => asset('img/gambar2.jpg'),
                "nama" => "Bungee",
                'instruktur' => 'Ayas',
                'ruang' => 'Keals B',
                'rating' => '3'
            ],

            [
                'no' => 3,
                'gambar' => asset('img/gambar3.jpg'),
                "nama" => 'Yoga',
                'instruktur' => 'Bobob',
                'ruang' => 'Keals C',
                'rating' => '4'
            ],

            [
                'no' => 4,
                'gambar' => asset('img/gambar4.jpeg'),
                "nama" => 'Boxing',
                'instruktur' => 'Tio',
                'ruang' => 'Keals D',
                'rating' => '5'
            ]

        ]
    ]);
});