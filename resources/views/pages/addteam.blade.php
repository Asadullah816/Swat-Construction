<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Team</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white text-center rounded-top-4">
                        <h4 class="mb-0">Add New Team Member</h4>
                    </div>
                    <div class="card-body p-4">

                        <!-- Success Message -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Form -->
                        <form action="{{ route('addteam') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="Enter team member name" required>
                            </div>

                            <!-- Service -->
                            <!-- Service -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Service</label>
                                <select name="service" class="form-select" required>
                                    <option value="" disabled selected>Select a service</option>
                                    <option value="Renovation">Renovation</option>
                                    <option value="Painting">Painting</option>
                                    <option value="Plumbing">Plumbing</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Carpentry">Carpentry</option>
                                    <option value="Flooring">Flooring</option>
                                    <option value="Interior Design">Interior Design</option>
                                </select>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Email</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Enter email address" required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <textarea name="description" rows="4" class="form-control" placeholder="Write a short description..." required></textarea>
                            </div>

                            <!-- Image -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Profile Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Add Team</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
