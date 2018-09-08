<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class CreateAdminAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a user account with admin role. But you have to update "role" field in your user table.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $newuser = [
            'name' => 'Tony Stark',
            'email' => 'tonystark@domain.com',
            'password' => bcrypt('secret'),
            'role' => 'Admin'
        ];
        $user = User::create($newuser);
        if($user) {
            echo 'New User "tonystark@domain.com" and password "secret" is successfully created.';
        }
    }
}
