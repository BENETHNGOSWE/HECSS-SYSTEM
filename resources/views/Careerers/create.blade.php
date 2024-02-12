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

                        <form method="POST" action="{{ route('careerer.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="carrier_name" class="form-label">Carrier Name</label>
                                <input type="text" class="form-control" id="carrier_name" name="carrier_name" required>
                            </div>

                            <div class="mb-3">
                                <label for="career_description" class="form-label">Career Description</label>
                                <textarea class="form-control" id="career_description" name="career_description" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="program_id" class="form-label">Program</label>
                                <select name="program_id" id="program_id" class="form-select" required>
                                    <option value="">Select Program</option>
                                    @foreach ($programs as $id => $programName)
                                    <option value="{{ $id }}">{{ $programName }}</option>
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
