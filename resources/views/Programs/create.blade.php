<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Program</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Your existing HTML code goes here with Bootstrap classes -->

    <div class="container" style="margin-top: 1em">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Program</div>

                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="POST" action="{{ route('programs.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="program_name" class="form-label">Program Name</label>
                                <input type="text" name="program_name" id="program_name" class="form-control" value="{{ old('program_name') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="program_description" class="form-label">Program Description</label>
                                <input type="text" name="program_description" id="program_description" class="form-control" value="{{ old('program_description') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="program_division" class="form-label">Program Division</label>
                                <input type="text" name="program_division" id="program_division" class="form-control" value="{{ old('program_division') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="program_yearof_study" class="form-label">Program Year of Study</label>
                                <input type="number" name="program_yearof_study" id="program_yearof_study" class="form-control" value="{{ old('program_yearof_study') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="universityID" class="form-label">University</label>
                                <select name="universityID" id="universityID" class="form-select" required>
                                    <option value="">Select University</option>
                                    @foreach ($universities as $id => $universityName)
                                    <option value="{{ $id }}">{{ $universityName }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Add other form fields for additional attributes -->

                            <button type="submit" class="btn btn-primary">Create Program</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
