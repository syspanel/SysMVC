@extends('layout')

@section('title', 'Crud Example Edit')

@section('content')
<div class="container mt-5">
    <h1 class="text-warning">Blade - Crud Example Edit</h1>
    <form action="/crudexample/update/{{ $crudexample['id'] }}" method="POST">
        <?= csrf() ?>
        <input type="hidden" name="_method" value="POST"> <!-- Changed to POST -->
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $crudexample['name'] }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control">
            <input type="checkbox" id="showPassword" onclick="togglePassword()"> Show Password
            <script>
                function togglePassword() {
                    var passwordInput = document.getElementById('password');
                    var showPasswordCheckbox = document.getElementById('showPassword');
                    passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
                }
            </script>
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company:</label>
            <input type="text" id="company" name="company" class="form-control" value="{{ $crudexample['company'] }}">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ $crudexample['address'] }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{ $crudexample['phone'] }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $crudexample['email'] }}" required>
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Notes:</label>
            <textarea id="notes" name="notes" class="form-control">{{ $crudexample['notes'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
