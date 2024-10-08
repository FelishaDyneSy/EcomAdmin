<?php

use Livewire\Volt\Component;
use Illuminate\Validation\ValidationException;

new class extends Component {
    
    public $name;
    public $password;
    
    public function submit()
    {
        $this->validate([
            'name' =>['required','min:3'],
            'password' => ['required','min:3'],
        ]);
        
        if(! Auth::attempt(['name' => $this->name, 'password' => $this->password]))
        {
           throw ValidationException::withMessages([
            'name' => 'Email or password is incorrect',
           ]);

        }
        
        session()->regenerate();

        $this->redirect('/' );

    }

}; ?>

<div>
    <form wire:submit="submit">
        <div class="form-group" >
            <input wire:model="name" class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off" />
            <x-input-error name="name" />
        </div>
        <div class="form-group">
            <input wire:model="password" class="form-control form-control-lg" id="password" type="password" placeholder="Password">
            <x-input-error name="password" />
        </div>
        <div class="form-group">
            <label class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
            </label>
        </div>
        <button type="submit" class="btn btn-lg btn-block ">Sign in</button>
    </form>
</div>
