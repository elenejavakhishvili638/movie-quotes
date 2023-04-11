<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Auth\User;

class CreateAdmin extends Command
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
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    { {
            $email = $this->ask('Please enter Email');
            $password = $this->ask('Please enter a password');

            $admin = new User();
            $admin->name = 'Admin';
            $admin->email = $email;
            $admin->password = bcrypt($password);
            $admin->save();

            $this->info('Admin has been created successfully!');
        }
    }
}
