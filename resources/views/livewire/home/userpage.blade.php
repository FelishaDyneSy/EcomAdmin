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
<div class="container">
    <div class="dashboard-stats">
      <div class="stat-card">
        <h3>8,282</h3>
        <p>New Users</p>
      </div>
      <div class="stat-card">
        <h3>200,521</h3>
        <p>Total Orders</p>
      </div>
      <div class="stat-card">
        <h3>215,542</h3>
        <p>Available Products</p>
      </div>
    </div>
  </div>

  <!-- User Table -->
  <div class="container">
    <div class="d-flex justify-content-end my-2">
        <a style="color:white" href="/create-employee"><button  type="button"  class="btn btn-outline-custom">Add</button></a>
    </div>
    <div class="table-container">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="table-light">
            <tr>
              <th>Name</th>
              <th>Title</th>
              <th>Status</th>
              <th>Role</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <!-- Sample data rows -->
            @foreach ($employees as $employee)
                
            <tr>
              <td>
                <img src="https://via.placeholder.com/40" class="rounded-circle me-2" alt="Avatar">
                {{ $employee->name }}
                <br><small class="text-muted">{{ $employee->email }}</small>
              </td>
              <td>{{ $employee->title }}<br><small class="text-muted">{{ $employee->role }}</small></td>
              <td><span class="status-active">{{ $employee->status }}</span></td>
              <td>Owner</td>
              <td><a href="/edit-employee/{{ $employee->id }}" class="edit-link">Edit</a></td>
              <td><a wire:click="delete({{ $employee->id }})" style="color:red; cursor:pointer;" class="edit-link">Delete</a></td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>