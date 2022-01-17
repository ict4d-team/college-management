@extends("partials.layout")

@section("content")
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Teachers Data</h3>
            </div>
        </div>
        <form class="mg-b-20">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by ID ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Name ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Phone ..." class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Subject</th>
                        <th>Class</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @if($teachers->count() == 0)
                    <tr>
                        <td colspan="10" class="text-center">No data to show ...</td>
                    </tr>
                @else
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{ucwords($teacher->firstname)}}</td>
                        <td>{{ucwords($teacher->lastname)}}</td>
                        <td>{{ucwords($teacher->gender)}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->phone}}</td>
                        <td>{{ucwords($teacher->address)}}</td>
                        <td>{{ucwords($teacher->subject)}}</td>
                        <td>{{ucwords($teacher->classe->name)}}</td>
                        <td>
                            <a href="{{route('teachers.details', ['teacher_id' => $teacher->id])}}">Details</a>
                            <a href="{{route('teachers.delete', ['teacher_id' => $teacher->id])}}" class="text-danger">del</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
