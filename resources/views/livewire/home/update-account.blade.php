<?php

use App\Models\Employee;
use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public function with()
    {
        return [
            'employees' => Employee::latest()->paginate(10),
        ];
    }

    public function delete(Employee $employee)
    {
        $employee->delete();
    }
    
}; ?>

<div>
    <title>Employee Profile Update</title>
    

    <h2>Update Employee Profiles</h2>

    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Row for Employee 1 -->
            @foreach ($employees as $employee)
            <tr>
                <td>emp{{ $employee->id }}</td>
                <td><input type="text" value="John Doe"></td>
                <td><input type="email" value="johndoe@example.com"></td>
                <td>
                    <select>
                        <option value="HR">{{ $employee->title }}</option>
                        <option value="Finance">Finance</option>
                        <option value="Logistic">Logistic</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="employee" selected>Employee</option>
                    </select>
                </td>
                <td class="actions">
                    <button class="fa fa-check" aria-hidden="true"></button>
                    <button class="fa fa-trash" ></button>
                </td>
            </tr>
            @endforeach
            <!-- Row for Employee 2 -->
            
        </tbody>
    </table>
</div>
