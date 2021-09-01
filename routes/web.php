<?php

    use App\Http\Controllers\ParticipationController;
    use App\Http\Controllers\ComicController;
    use App\Models\Grade;
    use App\Models\Participant;
    use App\Models\Comic;
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        $participants= Participant::all();
        return view('index',['participants'=>$participants]);
    })->name('home');

    Route::get('/register',function (){
        $grades= Grade::all();
        return view('register')->with([
            'grades'=>$grades,
        ]);
    })->name('register.index');
    Route::post('/register',[ParticipationController::class,'store'])->name('participant.store');
    Route::post('/register/getTopic',[ParticipationController::class,'list_topics'])->name('register.post');

    Route::get('/register/submit',[ComicController::class,'index'])->name('comic.index');
    Route::post('/register/submit',[ComicController::class,'store'])->name('comic.store');

