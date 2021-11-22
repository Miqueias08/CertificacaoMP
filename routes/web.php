<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;

Route::get('/',[SiteController::class,'index']);
Route::post('/detalhes',[SiteController::class,'detalhes']);
Route::post('/webhook',[SiteController::class,'webhook'])->middleware('webhook');
Route::get('/sucesso',function(Request $request){
    $payment_method_id = $request->preference_id;
    $external_reference = $request->external_reference;
    $payment_id =$request->collection_id;
    return "Pagamento Efetuado com Sucesso! <br> payment_method_id:".$payment_method_id."<br> external_reference:".$external_reference."<br> payment_id:".$payment_id;
});
Route::get('/falha',function(){
    return "Pagamento Falhou!";
});
Route::get('/pendente',function(){
    return "Pagamento Pendente!";
});