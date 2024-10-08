<?php

use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public $name;
    public $email;
    public $title;
    public $role;
    public $notif = false;

    public function submit()
    {
        $validated = $this->validate([
            'name' => ['required','max:255'],
            'email' => ['required', 'email','max:255'],
            'title' => ['required','min:5'],
            'role' => ['required'],
        ]);

        $validated['status'] = 'active';
        
        Auth::user()->employees()->create($validated);

        $this->notif = true;
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
                <input wire:model="name" class="form-control form-control-lg" type="text" name="nick"  placeholder="Username" autocomplete="off">
                <x-input-error name="name" />

            </div>
            <div class="form-group">
                <input wire:model="email" class="form-control form-control-lg" type="email" name="email"  placeholder="E-mail" autocomplete="off">
                <x-input-error name="email" />

            </div>
            <div class="form-group">
                <input wire:model="title" class="form-control form-control-lg" id="pass1"  placeholder="Title">
                <x-input-error name="title" />
                
            </div>
            <div class="form-group">
                <input wire:model="role" class="form-control form-control-lg"  placeholder="Role">
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
