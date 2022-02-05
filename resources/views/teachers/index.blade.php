@extends("partials.layout")

@section("content")
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Teachers Data</h3>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table display" id="teachers_list">
                <thead>
                    <tr>
                        <th>Name</th>
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
                        <td>{{ucwords($teacher->name)}}</td>
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

@section("js")
    <script>
        $(document).ready( function () {
            $("#teachers_list").DataTable();
        } );
    </script>
@endsection
