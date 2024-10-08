<?php

use App\Models\Employee;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[layout('components.edit-layout')]
 class extends Component {
    
    public $id;
    public $name;
    public $email;
    public $title;
    public $status;
    public $role;
    public $notif = false;
    public Employee $employee;

    public function mount(Employee $employee)
    {
        $this->fill($employee);
        
        $this->id = $employee->id;
        $this->name = $employee->name;
        $this->email = $employee->email;
        $this->title = $employee->title;
        $this->status = $employee->status;
        $this->role = $employee->role;
    }

    public function update()
    {
        $validated = $this->validate([
            'name' => ['required'],
            'email' => ['required'],
            'title' => ['required'],
            'status' => ['required'],
        ]);

        $validated['role'] = 'hr';

        $employee = Employee::findOrFail($this->id);
        
        $employee->update($validated);

        $this->notif = true;
    }
    
}; ?>

<form class="splash-container" wire:submit="update">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-1">Edit Employee</h3>
            <p>Please enter your user information.</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <input style="width:93%" wire:model="name" class="form-control form-control-lg" type="text" name="nick"  placeholder="Username" autocomplete="off">
                <x-input-error name="name" />

            </div>
            <div class="form-group">
                <input style="width:93%" wire:model="email" class="form-control form-control-lg" type="email" name="email"  placeholder="E-mail" autocomplete="off">
                <x-input-error name="email" />

            </div>
            <div class="form-group">
                <input style="width:93%" wire:model="title" class="form-control form-control-lg" id="pass1" type="password"  placeholder="Password">
                <x-input-error name="title" />
                
            </div>
            <div class="form-group">
                <input style="width:93%" wire:model="role" class="form-control form-control-lg"  placeholder="Confirm">
                <x-input-error name="role" />

            </div>
            @if ($notif)
                <div style="color:green;">Updated</div>
            @endif
            <div class="form-group pt-2">
                <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
            </div>
            <div class="form-group">
                
                <div class="card-footer bg-white">
                    <div class="row" >
                    
           
    </div>
</form>
