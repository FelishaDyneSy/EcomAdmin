<?php

use App\Models\Employee;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public $name;
    public $username;
    public $email;
    public $title;
    public $role;
    public $department;
    public $notif = false;

    public function submit()
    {
        $validated = $this->validate([
            'name' => ['required','max:255'],
            'username' => ['required','max:255'],
            'email' => ['required', 'email'],
            'title' => ['required'],
            'role' => ['required'],
            'department' => ['required'],
        ]);

        // Auth::user()->employees()->create($validated);

        Employee::create($validated);

        $this->notif = true;
        session()->flash('sakses', 'create successfully!');
        $this->redirect('/');
    }

    
}; ?>

<form class="splash-container" wire:submit="submit">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-1">Create Employee</h3>
            <p>Please enter your user information.</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <input wire:model="name" class="form-control form-control-lg" type="text" placeholder="Name" autocomplete="off">
                <x-input-error name="name" />

            </div>
            <div class="form-group">
                <input wire:model="username" class="form-control form-control-lg" type="text" placeholder="Username" autocomplete="off">
                <x-input-error name="name" />

            </div>
            <div class="form-group">
                <input wire:model="email" class="form-control form-control-lg" type="email" placeholder="E-mail" autocomplete="off">
                <x-input-error name="email" />

            </div>
            {{-- <div class="form-group">
                <input wire:model="title" class="form-control form-control-lg" id="pass1"  placeholder="Title">
                <x-input-error name="title" />
                
            </div> --}}

            <div class="form-group">
                <select wire:model="title" class="form-control form-control-lg">
                    <option value=""  selected>Select Title</option>
                    <option value="hr">HR</option>
                    <option value="finance">Finance</option>
                    <option value="logistic">Logistic</option>
                    <!-- Add more roles as needed -->
                </select>
                <x-input-error name="title" />
            </div>
            <div class="form-group">
                <select wire:model="role" class="form-control form-control-lg">
                    <option value=""  selected>Select a Role</option>
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="employee">Employee</option>
                    <!-- Add more roles as needed -->
                </select>
                <x-input-error name="role" />
            </div>
            <div class="form-group">
                <select wire:model="department" class="form-control form-control-lg">
                    <option value=""  selected>Select Department</option>
                    <option value="Finance">Finance</option>
                    <option value="HR">HR</option>
                    <option value="Logistc">Logistc</option>
                    <!-- Add more roles as needed -->
                </select>
                <x-input-error name="role" />
            </div>

            


            @if ($notif)
                <div style="color:green;">Employee Created</div>
               
            @endif
            <div class="form-group pt-2">
                <button class="btn btn-block btn-primary" type="submit">Register Account</button>
            </div>
            <div class="form-group">
                
                <div class="card-footer bg-white">
                    <div class="row" >
                    
           
    </div>
</form>
