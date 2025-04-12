<?php
use App\Http\Controllers\AffiliateController;



Route::get('/become-partner', [AffiliateController::class, 'index'])->name("become-partner-index");
Route::post('/become-partner', [AffiliateController::class, 'save'])->name("become-partner-save");