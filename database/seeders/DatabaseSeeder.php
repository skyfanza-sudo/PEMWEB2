<?php
<<<<<<< HEAD

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            DivisiSeeder::class,
            JabatanSeeder::class,
            JenisTrainingSeeder::class,
            PegawaiSeeder::class,
            TrainingSeeder::class,
            PegawaiTrainingSeeder::class,
        ]);
    }
=======
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
/**
* Run the database seeds.
*/
public function run(): void
{
//
User::create([
'name' => 'Admin Satu',
'email' => 'admin1@mail.com',
'password' => Hash::make('password'),
]);
User::create([
'name' => 'Admin Dua',
'email' => 'admin2@mail.com',
'password' => Hash::make('password'),
]);
User::create([
'name' => 'Admin Tiga',
'email' => 'admin3@mail.com',
'password' => Hash::make('password'),
]);
}
>>>>>>> a24a7b72be52e7b391d93f2cd8d7e1b4ce5d12b7
}