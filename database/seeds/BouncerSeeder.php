<?php

use App\Models\User;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'root',
            'lastname' => 'Administrador del sistema',
            'username' => 'root',
            'email' => 'root@email.co',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'usuario',
            'lastname' => 'Administrador',
            'username' => 'admin',
            'email' => 'admin@email.co',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'usuario',
            'lastname' => 'vendedor',
            'username' => 'vendedor',
            'email' => 'ventas@email.co',
            'password' => bcrypt('12345678')
        ]);

        // Creamos los roles
        Bouncer :: role ()-> firstOrCreate ([
            'name' => 'root' ,
            'title' => 'Administrador del sistema' ,
        ]);
        Bouncer :: role ()-> firstOrCreate ([
            'name' => 'admin' ,
            'title' => 'Administrador' ,
        ]);
        Bouncer :: role ()-> firstOrCreate ([
            'name' => 'collaborator' ,
            'title' => 'Vendedor' ,
        ]);
        Bouncer::allow('root')->everything();
        Bouncer::allow('admin')->everything();

        // Asignamos el rol de administrador a $user
        $useroot = User::find(1);
        $useroot->assign('root');

        $userAdmin = User::find(2);
        $userAdmin->assign('admin');

    }
}
