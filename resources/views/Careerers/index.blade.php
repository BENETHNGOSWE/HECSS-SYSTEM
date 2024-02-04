<div class="container">
    <h1>Career Opportunities</h1>
    <form action="{{ route('careerer.program') }}" method="get">
        <div class="form-group">
            <label for="program">Search Program:</label>
            <input type="search" id="program" name="program" class="form-control" value="{{ isset($program) ? $program : ''}}">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Program</th>
                <!-- Add more table headings for other fields if needed -->
            </tr>
        </thead>
        <tbody>
            @foreach($careers as $career)
            <tr>
                <td>{{ $career->carrier_name }}</td>
                <td>{{ $career->career_description }}</td>
                <td>{{ $career->programto_studies->program_name }}</td>
                <!-- Add more table cells for other fields if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
