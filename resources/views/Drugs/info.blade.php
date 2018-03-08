<form action="/add" method="post">
    @csrf
    <div class="col-sm-4">
        <div class="form-group">
            <input type="text" value="" name="drug_name[]" placeholder="Drug Name" class="form-control">
        </div>
        <button type="submit" class="form-control"></button>
    </div>



</form>



