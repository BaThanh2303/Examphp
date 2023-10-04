@extends("layouts.app")
@section("main")
<div class="card-body">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID Student</th>
                        <th>Name Student</th>
                        <th>Age Student</th>
                        <th>Address</th>
                        <th>Telephone</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->telephone}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <a href="{{url("/new-student")}}" class="btn btn-primary">Add Student</a>
        <!-- /.card -->
    </div>
</div>
<!-- jQuery -->
@endsection

