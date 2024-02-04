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

                    <form method="POST" action="{{ route('careerer.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="carrier_name">Carrier Name</label>
                            <input type="text" class="form-control" id="carrier_name" name="carrier_name" required>
                        </div>

                        <div class="form-group">
                            <label for="career_description">Career Description</label>
                            <textarea class="form-control" id="career_description" name="career_description" required></textarea>
                        </div>


                        <div class="form-group">
                            <label for="program_id">Program</label>
                            <select name="program_id" id="program_id" class="form-control" required>
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