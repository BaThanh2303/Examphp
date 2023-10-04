@extends("layouts.app")
@section("main")
    <div class="container">
    <form action="{{url("/update")}}" method="get">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter Name Student" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="number" class="form-control" name="age" placeholder="Enter Age Student" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Telephone</label>
            <input type="number" class="form-control" name="telephone"  placeholder="Enter Telephone" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
