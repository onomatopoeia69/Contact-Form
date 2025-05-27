<?php 


    use Illuminate\Support\Facades\Route;
    use Onoma\Contactform\Http\Controllers\ContactFormController;


    Route::middleware(['web','guest'])->group(function(){

    Route::get('/contact',[ContactFormController::class,'create'])->name('contact.create');
    Route::post('/message/submit',[ContactFormController::class,'store'])->name('submit');

    });

    