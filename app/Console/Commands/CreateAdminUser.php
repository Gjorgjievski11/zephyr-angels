<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('admin:create')]
#[Description('Create an admin user')]
class CreateAdminUser extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Name');
        $email = $this->ask('Email');
        $password = $this->secret('Password'); // hidden input

        if (User::where('email', $email)->exists()) {
            $this->error('A user with that email already exists.');
            return;
        }


        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $this->info('Admin user created successfully.');
    }
}
