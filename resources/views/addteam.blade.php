@extends('layout')

@section('title', 'Add Team')

@section('content')
    <div class="container">
        <h1>Add Team</h1>
    </div>
    <div class="container mt-5">
        <h2 class="mb-4">Add Team</h2>

        <!-- Show validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('addteam') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Team Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter team name" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Service</label>
                <select name="service" class="form-select" required>
                    <option value="">Select Service</option>
                    <option value="plumbing">Plumbing</option>
                    <option value="renovation">Renovation</option>
                    <option value="electrical">Electrical</option>
                    <option value="painting">Painting</option>
                    <option value="carpentry">Carpentry</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Team Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Team Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Write details about your team" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Team</button>
        </form>
    </div>

@endsection
