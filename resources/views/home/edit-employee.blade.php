<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Employee Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styling for the form container */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        
        .form-container {
            background-color: #6d4c41;
            padding: 10px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
        }

        .form-container .card {
            border: none;
        }

        .form-container .card-header {
            font-family:  "Lucida Sans", "Lucida Sans";
            background-color: transparent;
            text-align: start;
            border-bottom: none;
        }

        .form-container .card-header h3 {
            font-weight: bold;
            color: #6d4c41;
        }

        .form-container .card-body {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
        }

        .form-container .form-control {
            font-size: 16px;
            border-radius: 4px;
        }

        .form-container .btn-primary {
            background-color: #6d4c41;
            border: none;
            border-radius: 20em;
            font-size: 18px;
            padding: 10px;
            width: 100%;
        }

        .form-container .btn-primary:hover {
            background-color: #5b3b31;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .form-container {
                padding: 15px;
            }

            .form-container .card-body {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Employee</h3>
                <p>Please enter user information.</p>
            </div>
            <div class="card-body">
                <form action="/employee/{{$employee->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" value="{{ $employee->name }}" name="name" class="form-control" placeholder="Name" >
                        <x-input-error name="name" />
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $employee->username }}" name="username" class="form-control" placeholder="Username" >
                        <x-input-error name="username" />
                    </div>
                    <div class="form-group">
                        <input type="email" value="{{ $employee->email }}" name="email" class="form-control" placeholder="E-mail" required>
                        <x-input-error name="email" />
                    </div>
                    <div class="form-group">
                        <select class="form-control" required name="title">
                            <option value="{{ $employee->title }}"  >{{ $employee->title }}</option>
                            <option value="hr">HR</option>
                            <option value="finance">Finance</option>
                            <option value="logistic">Logistic</option>
                        </select>
                        <x-input-error name="title" />
                    </div>
                    <div class="form-group">
                        <select class="form-control" required name="role">
                            <option value="{{ $employee->role }}"  >{{ $employee->role }}</option>
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                            <option value="employee">Employee</option>
                        </select>
                        <x-input-error name="role" />
                    </div>
                    <div class="form-group">
                        <select class="form-control" required name="department">
                            <option value="{{ $employee->department }}"  >{{ $employee->department }}</option>
                            <option value="Finance">Finance</option>
                            <option value="HR">HR</option>
                            <option value="Logistic">Logistic</option>
                        </select>
                        <x-input-error name="role" />
                    </div>
                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-primary">Register Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>