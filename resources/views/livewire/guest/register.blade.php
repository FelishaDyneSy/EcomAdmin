<?php

use App\Models\User;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component {
        public $name;
        public $email;
        public $password;
        public $password_confirmation;

        public function submit(){

            $validated = $this->validate([
                'name' => ['required','min:5','max:20', 'unique:users,name'],
                'email' => ['required','email'],
                'password' => ['required','min:8','max:100','confirmed']
        ]);

            $user = User::create($validated);
            
            $this->redirect('/logins' , navigate: true);
        }
}; ?>


    <form class="splash-container" wire:submit="submit">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input wire:model="name" class="form-control form-control-lg" type="text" name="nick"  placeholder="Username" autocomplete="off">
                    <x-input-error name="name"/>
                </div>
                <div class="form-group">
                    <input wire:model="email" class="form-control form-control-lg" type="email" name="email"  placeholder="E-mail" autocomplete="off">
                    <x-input-error name="email"/>
                </div>
                <div class="form-group">
                    <input wire:model="password" class="form-control form-control-lg" id="pass1" type="password"  placeholder="Password">
                    <x-input-error name="password"/>
                </div>
                <div class="form-group">
                    <input wire:model="password_confirmation" name="password_confirmation" class="form-control form-control-lg"  placeholder="Confirm">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                    <div class="card-footer bg-white">
                        <div class="row" >
                        <p>Already member? <a href="/logins" class="text-secondary">Login Here.</a></p>
                            <div id="icons">
                                <a href="#" class="item" ><i class="fab fa-facebook-f mr-4" style="font-size: 150%" ></i></a>
                                <a href="#" class="item" ><i class="fab fa-twitter mr-4" style="font-size: 150%" ></i></a>
                                <a href="#" class="item" ><i class="fab fa-instagram " style="font-size: 150%" ></i></a>
                            </div>
                        </div>
                </div>
                
            </div>

