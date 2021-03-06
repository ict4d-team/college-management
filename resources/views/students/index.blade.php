@extends("partials.layout")

@section("content")
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Students</h3>
        <ul>
            <li>
                <a href="{{route('index')}}">Home</a>
            </li>
            <li>All Students</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>All Students Data</h3>
                </div>
            </div>
{{--            <form class="mg-b-20">--}}
{{--                <div class="row gutters-8">--}}
{{--                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">--}}
{{--                        <input type="text" placeholder="Search by Roll ..." class="form-control">--}}
{{--                    </div>--}}
{{--                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">--}}
{{--                        <input type="text" placeholder="Search by Name ..." class="form-control">--}}
{{--                    </div>--}}
{{--                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">--}}
{{--                        <input type="text" placeholder="Search by Class ..." class="form-control">--}}
{{--                    </div>--}}
{{--                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">--}}
{{--                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
            <div class="table-responsive">
                <table class="table display" id="students_list">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Birth</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Class</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @if($students->count() == 0)
                        <tr>
                            <td class="text-center" colspan="10">No data to show ...</td>
                        </tr>
                    @else
                        @foreach($students as $student)
                            <tr>
                                <td>{{ucwords($student->name)}}</td>
                                <td>{{ucwords($student->gender)}}</td>
                                <td>{{ucwords($student->date_of_birth)}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->address}}</td>
                                <td>{{ucwords($student->classe->name)}}</td>
                                <td>
                                    <a class="" href="{{route('students.details', ['student_id' => $student->id])}}">voir</a>
                                    <a class="text-danger" href="{{route('students.delete', ['student_id' => $student->id])}}">del</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section("js")
    <script>
        $(document).ready( function () {
            $("#students_list").DataTable();
        } );
    </script>
@endsection
