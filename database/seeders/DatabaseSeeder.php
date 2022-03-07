<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(FactsTableSeeder::class);
        // $this->call(ZonesTableSeeder::class);
        // $this->call(MotivationsTableSeeder::class);
        // $this->call(MeansTableSeeder::class);
        // $this->call(ParticipationsTableSeeder::class);
        // $this->call(IdentificationTypesTableSeeder::class);
        // $this->call(SexesTableSeeder::class);
        // $this->call(RacesTableSeeder::class);        
        // $this->call(NationalitiesTableSeeder::class);  
        // $this->call(CountriesTableSeeder::class);  
        // $this->call(StatesTableSeeder::class);  
        // $this->call(CitiesTableSeeder::class);
        // $this->call(ProfessionsTableSeeder::class);
        // $this->call(CivilStatusesTableSeeder::class);
        // $this->call(EducationLevelsTableSeeder::class);
        // $this->call(SexualOrientationsTableSeeder::class);
        // $this->call(GendersTableSeeder::class);
        // $this->call(OrcrimsTableSeeder::class);
        // $this->call(PolicePassagesTableSeeder::class);
        // $this->call(PolicePassageTypesTableSeeder::class);
        // $this->call(ApurationTypesTableSeeder::class);        
        //$this->call(ApurationInstitutionsTableSeeder::class);
        // $this->call(AuthorSituationsTableSeeder::class);
        // $this->call(FeminicideRelationshipTypesTableSeeder::class);
        // $this->call(FeminicideHasChildrenTableSeeder::class);
        //$this->call(EnvironmentLocalizationsTableSeeder::class);
        $this->call(EnvironmentClassificationsTableSeeder::class);
        $this->call(EnvironmentTypesTableSeeder::class);
        $this->call(EnvironmentQualificationsTableSeeder::class);
    }
}
