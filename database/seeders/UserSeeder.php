<?php

namespace Database\Seeders;

use App\Models\backend\UserSetting;
use App\Models\User;

// agregamos
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// Spatie
// use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
// use Spatie\Permission\Models\Permission;
// use Spatie\Permission\PermissionRegistrar;
// use Spatie\Permission\Models\model_has_roles;
// use Spatie\Permission\Models\model_has_permissions;

class UserSeeder extends Seeder
{
    // The User model requires this trait
    use HasRoles;

    public function __construct()
    {
        $users = [
            'super-admin' => [
                'name' => 'Super Admin',
                'email' => 'ramuelcl@gmail.com',
                'profile_photo_path' => 'app/avatars/admin.png',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), //bcrypt('0Admin')
                // 'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                // 'role' => 'Super-admin',
                'is_active' => true,
            ],
            'admin' => [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'profile_photo_path' => 'app/avatars/admin.png',
                'email_verified_at' => now(),
                'password' => Hash::make('password'), //bcrypt('0Admin')
                'remember_token' => Str::random(10),
                // 'role' => 'admin',
                'is_active' => true,
            ],
            'guest' => [
                'name' => 'guest',
                'email' => 'guest@mail.com',
                'profile_photo_path' => 'app/avatars/guest.png',
                'email_verified_at' => now(),
                'password' => Hash::make('guest'), //bcrypt('guest')
                'remember_token' => Str::random(10),
                // 'role' => 'guest',
                'is_active' => true,
            ],
        ];
        //
        // dd($users);
        //
        foreach ($users as $key => $user) {
            $u = User::create($user);
            // dump('creando ' . $user['name']);
            $u->assignRole($key);

            // All current roles will be removed from the user and replaced by the array given
            // $user->syncRoles($user['name']);

            // Define your theme and language options
            $themes = ['light', 'dark'];
            $languages = ['es-ES', 'fr-FR'];

            // Randomly choose a theme and language
            $theme = $themes[array_rand($themes)];
            $language = $languages[array_rand($languages)];
            //guardar un registro de configuracion para el usuario
            UserSetting::create([
                'user_id' => $u['id'],
                'theme' => $theme,
                'language' => $language,
            ]);
            // Perfil::factory()->create([
            //     'user_id' => $user->id,
            // ]);
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::factory()
        //     // ->has(App\Models\backend\UserSetting::factory()->count(1), 'App\Models\backend\UserSetting')
        //     ->count(48)
        //     ->create();

        // factory(App\User::class, 25)->create()->each(function ($user) {
        //     $user->profile()->save(factory(App\UserProfile::class)->make());
        // });

        // $roles = Role::all()->pluck('name')->toArray();
        // User::factory(98)
        //     ->create()
        //     ->each(function ($user) use ($roles) {
        //         $user->assignRole(array_rand($roles, rand(1, 4)));

        //         App\Models\backend\UserSetting::factory()->create([
        //             'user_id' => $user->id,
        //         ]);
        //         // Perfil::factory()->create([
        //         //     'user_id' => $user->id,
        //         // ]);
        //     });

        User::factory(1)
            ->create([
                'name' => 'cliente',
                'email' => 'cliente@mail.com',
            ])
            ->each(function ($user) {
                $user->assignRole('client');

                \App\Models\backend\UserSetting::factory()->create([
                    'user_id' => $user->id,
                ]);
                // Perfil::factory()->create([
                //     'user_id' => $user->id,
                // ]);
            });
        User::factory(1)
            ->create([
                'name' => 'job',
                'email' => 'job@mail.com',
            ])
            ->each(function ($user) {
                $user->assignRole('JobTime');

                \App\Models\backend\UserSetting::factory()->create([
                    'user_id' => $user->id,
                ]);
                // Perfil::factory()->create([
                //     'user_id' => $user->id,
                // ]);
            });
        User::factory(1)
            ->create([
                'name' => 'vendedor',
                'email' => 'vendedor@mail.com',
            ])
            ->each(function ($user) {
                $user->assignRole('seller');

                \App\Models\backend\UserSetting::factory()->create([
                    'user_id' => $user->id,
                ]);
                // Perfil::factory()->create([
                //     'user_id' => $user->id,
                // ]);
            });
    }
}
