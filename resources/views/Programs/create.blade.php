<div class="container">
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

                        <div class="form-group">
                            <label for="program_name">Program Name</label>
                            <input type="text" name="program_name" id="program_name" class="form-control" value="{{ old('program_name') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="program_description">Program Description</label>
                            <input type="text" name="program_description" id="program_description" class="form-control" value="{{ old('program_description') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="program_grade_min">Program Grade Min</label>
                            <input type="number" name="program_grade_min" id="program_grade_min" class="form-control" value="{{ old('program_description') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="program_grade_max">Program Grade Max</label>
                            <input type="number" name="program_grade_max" id="program_grade_max" class="form-control" value="{{ old('program_description') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="program_yearof_study">Program Year of Study</label>
                            <input type="number" name="program_yearof_study" id="program_yearof_study" class="form-control" value="{{ old('program_yearof_study') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="universityID">University</label>
                            <select name="universityID" id="universityID" class="form-control" required>
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