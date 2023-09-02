<?php

use App\Models\Agriculture;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JftController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\CaregiverController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PastPaperController;
use App\Http\Controllers\AgricultureController;


Route::get('/link',function(){
    Artisan::call('storage:link');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/sign-in', function () {
    return view('backend.sign-in');
});

Route::get('/ssw-jobs', function () {
    return view('SSW.SSW JOBS.index');
});

Route::get('/agriculture', function () {
    return view('SSW.SSW JOBS.Agriculture.index');
});

Route::get('/food', function () {
    return view('SSW.SSW JOBS.Food.index');
});
Route::get('/caregiver1', function () {
    return view('SSW.SSW JOBS.Caregiver.index');
});






Route::middleware('adminAuth')->group(function () {
//Dashboard
    Route::get('admin-dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');

//Lessons
    Route::get('lesson', [LessonController::class, 'index'])->name('lesson');
    Route::get('add-lesson', [LessonController::class, 'addLesson'])->name('add-lesson');
    Route::post('create-lesson', [LessonController::class, 'createLesson'])->name('create-lesson');
    Route::get('edit-lesson/{id}', [LessonController::class, 'editLesson'])->name('edit-lesson');
    Route::post('update-lesson', [LessonController::class, 'updateLesson'])->name('update-lesson');
    Route::get('delete-lesson/{id}', [LessonController::class, 'deleteLesson'])->name('delete-lesson');

    Route::get('add-lessons-N3-N2-N1', [LessonController::class, 'addLessonN1N2N3'])->name('add-lessons-N3-N2-N1');
    Route::post('create-lesson-N3-N2-N1', [LessonController::class, 'createLessonN3N2N1'])->name('create-lesson-N3-N2-N1');
    Route::get('edit-lesson-N3-N2-N1/{id}', [LessonController::class, 'editLessonN3N2N1'])->name('edit-lesson-N3-N2-N1');
    Route::post('update-lesson-n3-n2-n1', [LessonController::class, 'updateLessonN3N2N1'])->name('update-lesson-n3-n2-n1');
    Route::get('delete-lesson-n1-n2-n3/{id}', [LessonController::class, 'deleteLessonN1N2N3'])->name('delete-lesson-n1-n2-n3');
    Route::get('add-lessons-video-N3-N2-N1', [LessonController::class, 'addLessonVideoN1N2N3'])->name('add-lessons-video-N3-N2-N1');
    Route::post('create-lesson-video-N3-N2-N1', [LessonController::class, 'createLessonVideoN3N2N1'])->name('create-lesson-video-N3-N2-N1');
    Route::get('edit-lesson-video-n1-n2-n3/{id}', [LessonController::class, 'editLessonVideoN1N2N3'])->name('edit-lesson-video-n1-n2-n3');
    Route::post('update-lesson-video-n1-n2-n3', [LessonController::class, 'updateLessonVideoN3N2N1'])->name('update-lesson-video-n1-n2-n3');
    Route::get('delete-lesson-video-n1-n2-n3/{id}', [LessonController::class, 'deleteLessonVideoN1N2N3'])->name('delete-lesson-video-n1-n2-n3');



//Past-papers
    Route::get('past-papers', [PastPaperController::class, 'index'])->name('past-papers');
    Route::get('add-papers', [PastPaperController::class, 'addPapers'])->name('add-papers');
    Route::post('create-papers', [PastPaperController::class, 'createPapers'])->name('create-papers');
    Route::get('edit-papers/{id}', [PastPaperController::class, 'editPaper'])->name('edit-papers');
    Route::post('update-paper', [PastPaperController::class, 'updatePaper'])->name('update-paper');
    Route::get('delete-paper/{id}', [PastPaperController::class, 'deletePaper'])->name('delete-paper');

// JFT
    Route::get('jft', [JftController::class, 'index'])->name('jft');
    Route::get('add-jft', [JftController::class, 'addJft'])->name('add-jft');
    Route::post('create-jft', [JftController::class, 'createJft'])->name('create-jft');
    Route::get('edit-jft/{id}',[JftController::class, 'editJft'])->name('edit-jft');
    Route::post('update-jft',[JftController::class, 'updateJft'])->name('update-jft');
    Route::get('delete-jft/{id}', [JftController::class, 'deleteJft'])->name('delete-jft');

    Route::get('add-jft-video', [JftController::class, 'addJftVideo'])->name('add-jft-video');
    Route::post('createJftVideo',[JftController::class, 'createJftVideo'])->name('createJftVideo');
    Route::get('update-jft-video/{id}',[JftController::class, 'updateJftVideo'])->name('update-jft-video');
    Route::post('edit-jft-video',[JftController::class, 'editJftVideo'])->name('edit-jft-video');
    Route::get('delete-jft-video/{id}',[JftController::class, 'deleteJftVideo'])->name('delete-jft-video');

// Foods
    Route::get('foods',[FoodController::class, 'index'])->name('foods');
    Route::get('add-food',[FoodController::class, 'addFood'])->name('add-food');
    Route::get('add-food-video',[FoodController::class, 'addFoodVideo'])->name('add-food-video');
    Route::post('create-food',[FoodController::class, 'createFood'])->name('create-food');
    Route::get('update-food/{id}',[FoodController::class, 'updateFood'])->name('update-food');
    Route::post('edit-food',[FoodController::class, 'editFood'])->name('edit-food');
    Route::get('delete-food/{id}',[FoodController::class, 'deleteFood'])->name('delete-food');

    Route::post('createFoodVideo',[FoodController::class, 'createFoodVideo'])->name('createFoodVideo');
    Route::get('update-food-video/{id}',[FoodController::class, 'updateFoodVideo'])->name('update-food-video');
    Route::post('edit-food-video',[FoodController::class, 'editFoodVideo'])->name('edit-food-video');
    Route::get('delete-food-video/{id}',[FoodController::class, 'deleteFoodVideo'])->name('delete-food-video');




//Agriculture
    Route::get('agri',[AgricultureController::class, 'index'])->name('agri');
    Route::get('add-agri',[AgricultureController::class, 'addAgri'])->name('add-agri');
    Route::get('add-agri-video',[AgricultureController::class, 'addAgriVideo'])->name('add-agri-video');
    Route::post('create-agriculture',[AgricultureController::class, 'createAgriculture'])->name('create-agriculture');
    Route::get('update-agriculture/{id}',[AgricultureController::class, 'updateAgriculture'])->name('update-agriculture');
    Route::post('edit-agriculture',[AgricultureController::class, 'editAgriculture'])->name('edit-agriculture');
    Route::get('delete-agriculture/{id}',[AgricultureController::class, 'deleteAgriculture'])->name('delete-agriculture');

    Route::post('createAgricultureVideo',[AgricultureController::class, 'createAgricultureVideo'])->name('createAgricultureVideo');
    Route::get('update-agriculture-video/{id}',[AgricultureController::class, 'updateAgricultureVideo'])->name('update-agriculture-video');
    Route::post('edit-agriculture-video',[AgricultureController::class, 'editAgricultureVideo'])->name('edit-agriculture-video');
    Route::get('delete-agriculture-video/{id}',[AgricultureController::class, 'deleteAgricultureVideo'])->name('delete-agriculture-video');

//Caregiver
    Route::get('caregiver',[CaregiverController::class, 'index'])->name('caregiver');
    Route::get('add-caregiver',[CaregiverController::class, 'addCaregiver'])->name('add-caregiver');
    Route::get('add-caregiver-video',[CaregiverController::class, 'addCaregiverVideo'])->name('add-caregiver-video');
    Route::post('create-caregiver',[CaregiverController::class, 'createCaregiver'])->name('create-caregiver');
    Route::get('update-caregiver/{id}',[CaregiverController::class, 'updateCaregiver'])->name('update-caregiver');
    Route::post('edit-caregiver',[CaregiverController::class, 'editCaregiver'])->name('edit-caregiver');
    Route::get('delete-caregiver/{id}',[CaregiverController::class, 'deleteCaregiver'])->name('delete-caregiver');


    Route::post('createCaregiverVideo',[CaregiverController::class, 'createCaregiverVideo'])->name('createCaregiverVideo');
    Route::get('update-caregiver-video/{id}',[CaregiverController::class, 'updateCaregiverVideo'])->name('update-caregiver-video');
    Route::post('edit-caregiver-video',[CaregiverController::class, 'editCaregiverVideo'])->name('edit-caregiver-video');
    Route::get('delete-caregiver-video/{id}',[CaregiverController::class, 'deleteCaregiverVideo'])->name('delete-Caregiver-video');





//Contact Us
    Route::get('view-contact', [ContactUsController::class, 'viewContact'])->name('view-contact');
    Route::get('delete-contact/{id}', [ContactUsController::class, 'deleteContact'])->name('delete-contact');
    Route::get('edit-contact/{id}', [ContactUsController::class, 'editContact'])->name('edit-contact');
    Route::get('update-contact/{id}', [ContactUsController::class, 'updateContact'])->name('update-contact');


});

//Contact Us
Route::post('add-contact', [ContactUsController::class, 'addContact'])->name('add-contact');

//Levels
Route::get('view-level-1', [LessonController::class, 'viewLevelOne'])->name('view-level-1');
Route::get('view-level-2', [LessonController::class, 'viewLevelTwo'])->name('view-level-2');
Route::get('view-level-3', [LessonController::class, 'viewLevelThree'])->name('view-level-3');


Route::get('view-level-4', [LessonController::class, 'viewLevelFour'])->name('view-level-4');
Route::get('view-level-4-details/{id}', [LessonController::class, 'viewLevelFourDetails'])->name('view-level-4-details');
Route::get('view-level-5', [LessonController::class, 'viewLevelFive'])->name('view-level-5');
Route::get('view-level-5-details/{id}', [LessonController::class, 'viewLevelFiveDetails'])->name('view-level-5-details');

//papers
Route::get('view-paper-1', [PastPaperController::class, 'viewPaperOne'])->name('view-paper-1');
Route::get('view-paper-1-details/{id}', [PastPaperController::class, 'viewPaperOneDetails'])->name('view-paper-1-details');
Route::get('view-paper-2', [PastPaperController::class, 'viewPaperTwo'])->name('view-paper-2');
Route::get('view-paper-2-details/{id}', [PastPaperController::class, 'viewPaperTwoDetails'])->name('view-paper-2-details');
Route::get('view-paper-3', [PastPaperController::class, 'viewPaperThree'])->name('view-paper-3');
Route::get('view-paper-3-details/{id}', [PastPaperController::class, 'viewPaperThreeDetails'])->name('view-paper-3-details');
Route::get('view-paper-4', [PastPaperController::class, 'viewPaperFour'])->name('view-paper-4');
Route::get('view-paper-4-details/{id}', [PastPaperController::class, 'viewPaperFourDetails'])->name('view-paper-4-details');
Route::get('view-paper-5', [PastPaperController::class, 'viewPaperFive'])->name('view-paper-5');
Route::get('view-paper-5-details/{id}', [PastPaperController::class, 'viewPaperFiveDetails'])->name('view-paper-5-details');

//Download Level PDF
Route::get('level-1-pdf-download/{id}', [LessonController::class, 'pdfDownload'])->name('level-1-pdf-download');
Route::get('level-2-pdf-download/{id}', [LessonController::class, 'pdfDownloadTwo'])->name('level-2-pdf-download');
Route::get('level-3-pdf-download/{id}', [LessonController::class, 'pdfDownloadThree'])->name('level-3-pdf-download');
Route::get('pdf-download/{id}', [LessonController::class, 'pdfDownloadFour'])->name('pdf-download');
Route::get('pdf-download/{id}', [LessonController::class, 'pdfDownloadFive'])->name('pdf-download');

//Download Papers
Route::get('/pdf-download-paper-1/{id}', [PastPaperController::class, 'pdfDownloadPaperOne'])->name('/pdf-download-paper-1');
Route::get('/pdf-download-paper-2/{id}', [PastPaperController::class, 'pdfDownloadPaperTwo'])->name('/pdf-download-paper-2');
Route::get('/pdf-download-paper-3/{id}', [PastPaperController::class, 'pdfDownloadPaperThree'])->name('/pdf-download-paper-3');
Route::get('/pdf-download-paper-4/{id}', [PastPaperController::class, 'pdfDownloadPaperFour'])->name('/pdf-download-paper-4');
Route::get('/pdf-download-paper-5/{id}', [PastPaperController::class, 'pdfDownloadPaperFive'])->name('/pdf-download-paper-5');

//JFT
Route::get('view-jft', [JftController::class, 'viewJft'])->name('view-jft');

//Dounload JFT PDF
Route::get('jft-pdf-download/{id}', [JftController::class, 'jftPdfDownload'])->name('jft-pdf-download');


//Foods
Route::get('view-foods',[FoodController::class, 'viewFoodDetails'])->name('view-foods');
Route::get('/food-pdf-download/{id}', [FoodController::class, 'pdfDownloadFood'])->name('/food-pdf-download');


//Agriculture
Route::get('view-agriculture',[AgricultureController::class, 'viewAgriculture'])->name('view-agriculture');
Route::get('/agri-pdf-download/{id}', [AgricultureController::class, 'pdfDownloadAgri'])->name('/agri-pdf-download');

//Caregiver
Route::get('view-caregiver',[CaregiverController::class, 'viewCaregivers'])->name('view-caregiver');
Route::get('/care-pdf-download/{id}', [CaregiverController::class, 'pdfDownloadCare'])->name('/care-pdf-download');


//Login
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');;
