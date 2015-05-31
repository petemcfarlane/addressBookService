<?php
use App\Contact;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder {

    public function run()
    {
        Contact::create([
            'name' => 'Tom',
            'is_company' => false
        ]);
        Contact::create([
            'name' => 'Dick',
            'is_company' => false
        ]);
        Contact::create([
            'name' => 'Harry',
            'is_company' => true
        ]);
    }
}