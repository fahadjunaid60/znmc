<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'CCTV','description' => 'Closed-circuit television, also known as video surveillance, is the use of video cameras to transmit a signal to a specific place, on a limited set of monitors.','img'   =>  'front-page/img/product_types/cctv.png','created_at' => now(),'updated_at' => now()]);
        DB::table('categories')->insert(['name' => 'Fire Alarm System','description' => 'A fire alarm system has a number of devices working together to detect and warn people through visual and audio appliances when smoke, fire, carbon monoxide or other emergencies are present.','img'   =>  'front-page/img/product_types/fire-alarm.png','created_at' => now(),'updated_at' => now()]);
        DB::table('categories')->insert(['name' => 'PABGM','description' => 'A fire alarm system has a number of devices working together to detect and warn people through visual and audio appliances when smoke, fire, carbon monoxide or other emergencies are present.','img'   =>  'front-page/img/product_types/pabgm.png','created_at' => now(),'updated_at' => now()]);
        DB::table('categories')->insert(['name' => 'Structured Cabling','description' => 'In telecommunications, structured cabling is building or campus cabling infrastructure that consists of a number of standardized smaller elements called subsystems. Structured cabling components include twisted pair and optical cabling, patch panels and patch cables.','img'   =>  'front-page/img/product_types/structured_cabling.png','created_at' => now(),'updated_at' => now()]);
        DB::table('categories')->insert(['name' => 'PABX','description' => 'The term “private automatic branch exchange (PABX)” is often used as a synonym for “telephone system”. Private automatic branch exchanges are switchboards which connect several devices, e.g. telephones or faxes and answering machines with each other and with the public telephone network.','img'   =>  'front-page/img/product_types/pabx.png','created_at' => now(),'updated_at' => now()]);
        DB::table('categories')->insert(['name' => 'Nurse Call','description' => 'A nurse call button is a button or cord found in hospitals and nursing homes, at places where patients are at their most vulnerable, such as beside their bed and in the bathroom.. It allows patients in health care settings to alert a nurse or other health care staff member remotely of their need for help.','img'   =>  'front-page/img/product_types/nurse-call.png','created_at' => now(),'updated_at' => now()]);
        DB::table('categories')->insert(['name' => 'Door Lock System','description' => 'An electronic lock (or electric lock) is a locking device which operates by means of electric current. Electric locks are sometimes stand-alone with an electronic control assembly mounted directly to the lock. ... Electronic locks can also be remotely monitored and controlled, both to lock and to unlock.','img'   =>  'front-page/img/product_types/door-lock.png','created_at' => now(),'updated_at' => now()]);
        DB::table('categories')->insert(['name' => 'Parking System','description' => 'An automated (car) parking system (APS) is a mechanical system designed to minimize the area and/or volume required for parking cars. Like a multi-story parking garage, an APS provides parking for cars on multiple levels stacked vertically to maximize the number of parking spaces while minimizing land usage.','img'   =>  'front-page/img/product_types/parking-system.png','created_at' => now(),'updated_at' => now()]);
        DB::table('categories')->insert(['name' => 'Cable Tray','description' => 'According to the National Electrical Code standard of the United States, a cable tray is a unit or assembly of units or sections and associated fittings forming a rigid structural system used to securely fasten or support cables and raceways.','img'   =>  'front-page/img/product_types/cable-tray.png','created_at' => now(),'updated_at' => now()]);
    }
}
