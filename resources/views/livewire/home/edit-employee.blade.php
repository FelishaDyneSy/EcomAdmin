<?php

use App\Models\Employee;
use Livewire\Volt\Component;

new 
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
