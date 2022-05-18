<?php

namespace App\Http\Controllers;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class HomeController extends Controller
{
    public static $neas = array(
        ["id" => 1, "name" => "Lady Tabares", "height" => "1,45m", "ability" => "Vender rosas", "image" => "https://storage.googleapis.com/pokeneasimages/LadyTabares.jpg", "philosophicalPhrase" => "Hágale que yo soy la mera elegancia"],
        ["id" => 2, "name" => "Giovanni Quiroz", "height" => "1,80m", "ability" => "Obtener relojes gratis", "image" => "https://storage.googleapis.com/pokeneasimages/GiovanniQuiroz.jpeg", "philosophicalPhrase" => "Abrite ome piroba"],
        ["id" => 3, "name" => "Juan David Restrepo", "height" => "1,77m", "ability" => "Manejar moto", "image" => "https://storage.googleapis.com/pokeneasimages/JuanDavidRestrepo.jpg", "philosophicalPhrase" => "Los muertos son sagrados y con los muertos uno no se mete"],
        ["id" => 4, "name" => "Anderson Ballesteros", "height" => "1,75m", "ability" => "Dar pepasos", "image" => "https://storage.googleapis.com/pokeneasimages/AndersonBallesteros.jpg", "philosophicalPhrase" => "A mi me tienen que matar de bala y no de miedo, de 30 balazos en el semaforo, como tiene que morir un mafioso"],
        ["id" => 5, "name" => "Ryan Castro", "height" => "1,70m", "ability" => "Ser un mujeriego", "image" => "https://storage.googleapis.com/pokeneasimages/RyanCastro.jpg", "philosophicalPhrase" => "Que chimba sog. El cantante del ghetto"],
        ["id" => 6, "name" => "Feid", "height" => "1,68m", "ability" => "Ser chimbita", "image" => "https://storage.googleapis.com/pokeneasimages/Feid.jpg", "philosophicalPhrase" => "Moor usted esta muy chimbita"],
        ["id" => 7, "name" => "Reykon", "height" => "1,75m", "ability" => "Fumar mucho", "image" => "https://storage.googleapis.com/pokeneasimages/Reykon.jpg", "philosophicalPhrase" => "No molesten mas"],
        ["id" => 8, "name" => "Alcolirykoz", "height" => "1,78m", "ability" => "Rapear", "image" => "https://storage.googleapis.com/pokeneasimages/Alcolirykoz.jpg", "philosophicalPhrase" => "Las neas son santa claus"],
        ["id" => 9, "name" => "Teo LB", "height" => "1,65m", "ability" => "Stunt", "image" => "https://storage.googleapis.com/pokeneasimages/TeoLB.jpg", "philosophicalPhrase" => "Me salio mera gusana zangana tienes ganas"],
        ["id" => 10, "name" => "Cojo Crazy", "height" => "1,78m", "ability" => "Cojear", "image" => "https://storage.googleapis.com/pokeneasimages/CojoCrazy.jpg", "philosophicalPhrase" => "Tengo panas que se tragan la roche"],
    );

    public function information()
    {
        $totalNeas = (count(HomeController::$neas));
        $randomNumber = (rand(0,($totalNeas-1)));
        $randomNea = HomeController::$neas[$randomNumber];
        return response()->json([
            "id" => $randomNea['id'],
            "name" => $randomNea['name'],
            "height" => $randomNea['height'],
            "ability" => $randomNea['ability'],
        ]);
    }

    public function image()
    {
        $totalNeas = (count(HomeController::$neas));
        $randomNumber = (rand(0,($totalNeas-1)));
        $randomNea = HomeController::$neas[$randomNumber];
        return view('Image', ['image' => $randomNea['image'], 'philosophicalPhrase' => $randomNea['philosophicalPhrase']]);
    }
}