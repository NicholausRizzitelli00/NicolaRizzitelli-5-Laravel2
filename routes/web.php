<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// PAGINA INIZIALE
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
// PAGINA DEI 3 CORSI
Route::get('/courses', function () {

    $courses = [
        [
            'id' => 1, 
            'name' => 'HACKADEMY FULL-TIME', 
            'age' => 3, 
            'description' => 'Impara a programmare con il corso online Hackademy, fai il primo passo per diventare web developer ed avviare la tua nuova carriera!',
        ],
        [
            'id' => 2, 
            'name' => 'HACKADEMY PART-TIME', 
            'age' => 6, 
            'description' => 'Impara a programmare con il corso online Hackademy, fai il primo passo per diventare web developer ed avviare la tua nuova carriera!',
        ],
        [
            'id' => 3, 
            'name' => 'HACKADEMY WEEKEND', 
            'age' => 12, 
            'description' => 'Impara a programmare con il corso online Hackademy, fai il primo passo per diventare web developer ed avviare la tua nuova carriera!',
        ],
    ];

    return view('courses', ['courses' => $courses]);
})->name('courses');
// PAGINA DETTAGLIO CORSO
Route::get('/courses/hackademy_details/{id}', function($id) {
    $courses = [
        [
            'id' => 1, 
            'name' => 'HACKADEMY FULL-TIME', 
            'age' => 3, 
            'description' => 'Impara a programmare con il corso online Hackademy, fai il primo passo per diventare web developer ed avviare la tua nuova carriera!',
        ],
        [
            'id' => 2, 
            'name' => 'HACKADEMY PART-TIME', 
            'age' => 6, 
            'description' => 'Impara a programmare con il corso online Hackademy, fai il primo passo per diventare web developer ed avviare la tua nuova carriera!',
        ],
        [
            'id' => 3, 
            'name' => 'HACKADEMY WEEKEND', 
            'age' => 12, 
            'description' => 'Impara a programmare con il corso online Hackademy, fai il primo passo per diventare web developer ed avviare la tua nuova carriera!',
        ],
    ];
    foreach($courses as $course){
        if($course['id'] == $id){
           
            return view('hackademy_details', ['course' => $course]);
        }
    }
})->name('courses-hackademy_details');
// PAGINA BLOG
Route::get('/blog', function () {
    $blog = [
        [
            'id' => 1,
            'title' => 'How to learn programming with a PHP course', 
            'description' => 'A good programmer, as we know, needs a wide range of knowledge to be able to extricate himself from the difficulties that this profession entails.',
        ],
        [
            'id' => 2, 
            'title' => 'Javascript course online: what you need to know',  
            'description' => 'Being a web developer means learning multiple programming languages to be able to create different types of applications.',
        ],
        [
            'id' => 3, 
            'title' => 'What is HTML language and how to learn it', 
            'description' => 'The HTML language (Hypertext Markup Language) is one of the best known and most widespread: in fact, it is found in practically all existing web pages.',
        ],
    ];
    return view('blog', ['blog' => $blog]);
})->name('blog');
