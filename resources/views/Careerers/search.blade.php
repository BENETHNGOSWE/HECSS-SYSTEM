<div class="container">
    <h1>Search Careers by Program</h1>
    <form action="{{ route('careerer.program')}}" method="get">
        <div class="form-group">
            <label for="program">Program:</label>
            <input type="text" id="program" name="program" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>


   
</div>