<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('react');
});

Route::view('/ocorrencias', 'react');

Route::prefix('api')->group(function () {
    // Route::apiResource('ocorrencias', OccurrenceController::class)->parameters([
    // 'ocorrencias' => 'occurrence'
    // ]);
    Route::post('/apuration_institutions/restore/{id}', [Api\ApurationInstitutionController::class, 'restore']);
    Route::get('/apuration_institutions/index_trashed', [Api\ApurationInstitutionController::class, 'index_trashed']);
    Route::apiResource('apuration_institutions', Api\ApurationInstitutionController::class);

    Route::post('/apuration_types/restore/{id}', [Api\ApurationTypeController::class, 'restore']);
    Route::get('/apuration_types/index_trashed', [Api\ApurationTypeController::class, 'index_trashed']);
    Route::apiResource('apuration_types', Api\ApurationTypeController::class);

    Route::post('/author_situations/restore/{id}', [Api\AuthorSituationController::class, 'restore']);
    Route::get('/author_situations/index_trashed', [Api\AuthorSituationController::class, 'index_trashed']);
    Route::apiResource('author_situations', Api\AuthorSituationController::class);

    Route::post('/cities/restore/{id}', [Api\CityController::class, 'restore']);
    Route::get('/cities/index_trashed', [Api\CityController::class, 'index_trashed']);
    Route::apiResource('cities', Api\CityController::class);

    Route::post('/civil_statuses/restore/{id}', [Api\CivilStatusController::class, 'restore']);
    Route::get('/civil_statuses/index_trashed', [Api\CivilStatusController::class, 'index_trashed']);
    Route::apiResource('civil_statuses', Api\CivilStatusController::class);

    Route::post('/countries/restore/{id}', [Api\CountryController::class, 'restore']);
    Route::get('/countries/index_trashed', [Api\CountryController::class, 'index_trashed']);
    Route::apiResource('countries', Api\CountryController::class);

    Route::post('/education_levels/restore/{id}', [Api\EducationLevelController::class, 'restore']);
    Route::get('/education_levels/index_trashed', [Api\EducationLevelController::class, 'index_trashed']);
    Route::apiResource('education_levels', Api\EducationLevelController::class);

    Route::post('/environment_classifications/restore/{id}', [Api\EnvironmentClassificationController::class, 'restore']);
    Route::get('/environment_classifications/index_trashed', [Api\EnvironmentClassificationController::class, 'index_trashed']);
    Route::apiResource('environment_classifications', Api\EnvironmentClassificationController::class);

    Route::post('/environment_localizations/restore/{id}', [Api\EnvironmentLocalizationController::class, 'restore']);
    Route::get('/environment_localizations/index_trashed', [Api\EnvironmentLocalizationController::class, 'index_trashed']);
    Route::apiResource('environment_localizations', Api\EnvironmentLocalizationController::class);

    Route::post('/environment_qualifications/restore/{id}', [Api\EnvironmentQualificationController::class, 'restore']);
    Route::get('/environment_qualifications/index_trashed', [Api\EnvironmentQualificationController::class, 'index_trashed']);
    Route::apiResource('environment_qualifications', Api\EnvironmentQualificationController::class);

    Route::post('/environment_types/restore/{id}', [Api\EnvironmentTypeController::class, 'restore']);
    Route::get('/environment_types/index_trashed', [Api\EnvironmentTypeController::class, 'index_trashed']);
    Route::apiResource('environment_types', Api\EnvironmentTypeController::class);

    Route::post('/facts/restore/{id}', [Api\FactController::class, 'restore']);
    Route::get('/facts/index_trashed', [Api\FactController::class, 'index_trashed']);
    Route::apiResource('facts', Api\FactController::class);

    Route::post('/feminicide_has_children/restore/{id}', [Api\FeminicideHasChildrenController::class, 'restore']);
    Route::get('/feminicide_has_children/index_trashed', [Api\FeminicideHasChildrenController::class, 'index_trashed']);
    Route::apiResource('feminicide_has_children', Api\FeminicideHasChildrenController::class);

    Route::post('/feminicide_relationship_types/restore/{id}', [Api\FeminicideRelationshipTypeController::class, 'restore']);
    Route::get('/feminicide_relationship_types/index_trashed', [Api\FeminicideRelationshipTypeController::class, 'index_trashed']);
    Route::apiResource('feminicide_relationship_types', Api\FeminicideRelationshipTypeController::class);

    Route::post('/genders/restore/{id}', [Api\GenderController::class, 'restore']);
    Route::get('/genders/index_trashed', [Api\GenderController::class, 'index_trashed']);
    Route::apiResource('genders', Api\GenderController::class);

    Route::post('/identification_types/restore/{id}', [Api\IdentificationTypeController::class, 'restore']);
    Route::get('/identification_types/index_trashed', [Api\IdentificationTypeController::class, 'index_trashed']);
    Route::apiResource('identification_types', Api\IdentificationTypeController::class);

    Route::post('/involved/restore/{id}', [Api\InvolvedController::class, 'restore']);
    Route::get('/involved/index_trashed', [Api\InvolvedController::class, 'index_trashed']);
    Route::apiResource('involved', Api\InvolvedController::class);

    Route::post('/means/restore/{id}', [Api\MeanController::class, 'restore']);
    Route::get('/means/index_trashed', [Api\MeanController::class, 'index_trashed']);
    Route::apiResource('means', Api\MeanController::class);

    Route::post('/motivations/restore/{id}', [Api\MotivationController::class, 'restore']);
    Route::get('/motivations/index_trashed', [Api\MotivationController::class, 'index_trashed']);
    Route::apiResource('motivations', Api\MotivationController::class);

    Route::post('/nationalities/restore/{id}', [Api\NationalityController::class, 'restore']);
    Route::get('/nationalities/index_trashed', [Api\NationalityController::class, 'index_trashed']);
    Route::apiResource('nationalities', Api\NationalityController::class);

    Route::post('/occurrences/restore/{id}', [Api\OccurrenceController::class, 'restore']);
    Route::get('/occurrences/index_trashed', [Api\OccurrenceController::class, 'index_trashed']);
    Route::apiResource('occurrences', Api\OccurrenceController::class);

    Route::post('/orcrims/restore/{id}', [Api\OrcrimController::class, 'restore']);
    Route::get('/orcrims/index_trashed', [Api\OrcrimController::class, 'index_trashed']);
    Route::apiResource('orcrims', Api\OrcrimController::class);

    Route::post('/participations/restore/{id}', [Api\ParticipationController::class, 'restore']);
    Route::get('/participations/index_trashed', [Api\ParticipationController::class, 'index_trashed']);
    Route::apiResource('participations', Api\ParticipationController::class);

    Route::post('/police_passages/restore/{id}', [Api\PolicePassageController::class, 'restore']);
    Route::get('/police_passages/index_trashed', [Api\PolicePassageController::class, 'index_trashed']);
    Route::apiResource('police_passages', Api\PolicePassageController::class);

    Route::post('/police_passage_types/restore/{id}', [Api\PolicePassageTypeController::class, 'restore']);
    Route::get('/police_passage_types/index_trashed', [Api\PolicePassageTypeController::class, 'index_trashed']);
    Route::apiResource('police_passage_types', Api\PolicePassageTypeController::class);

    Route::post('/professions/restore/{id}', [Api\ProfessionController::class, 'restore']);
    Route::get('/professions/index_trashed', [Api\ProfessionController::class, 'index_trashed']);
    Route::apiResource('professions', Api\ProfessionController::class);

    Route::post('/races/restore/{id}', [Api\RaceController::class, 'restore']);
    Route::get('/races/index_trashed', [Api\RaceController::class, 'index_trashed']);
    Route::apiResource('races', Api\RaceController::class);

    Route::post('/sexes/restore/{id}', [Api\SexController::class, 'restore']);
    Route::get('/sexes/index_trashed', [Api\SexController::class, 'index_trashed']);
    Route::apiResource('sexes', Api\SexController::class);

    Route::post('/sexual_orientations/restore/{id}', [Api\SexualOrientationController::class, 'restore']);
    Route::get('/sexual_orientations/index_trashed', [Api\SexualOrientationController::class, 'index_trashed']);
    Route::apiResource('sexual_orientations', Api\SexualOrientationController::class);

    Route::post('/states/restore/{id}', [Api\StateController::class, 'restore']);
    Route::get('/states/index_trashed', [Api\StateController::class, 'index_trashed']);
    Route::apiResource('states', Api\StateController::class);

    Route::post('/zones/restore/{id}', [Api\ZoneController::class, 'restore']);
    Route::get('/zones/index_trashed', [Api\ZoneController::class, 'index_trashed']);
    Route::apiResource('zones', Api\ZoneController::class);
});