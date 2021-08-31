<?php

    use App\Http\Controllers\ParticipationController;
    use App\Models\Grade;
    use App\Models\Participant;
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

