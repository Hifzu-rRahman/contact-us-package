<?php

use Hifzu\Contact\Http\Controllers\Contact;
use Illuminate\Http\Request;

Route::group(['namespace'=>'Hifzu\Contact\Http\Controllers'],function(){
    Route::get('contact',[Contact::class,'index'])->name('contact');
    
    Route::post('contact',[Contact::class,'send']);
});

