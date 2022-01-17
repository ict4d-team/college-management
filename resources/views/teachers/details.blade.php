@extends("partials.layout")

@section("content")
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Teachers</h3>
        <ul>
            <li><a href="{{route('index')}}">Home</a></li>
            <li>Teacher Details</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Teacher Details Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>About Me</h3>
                </div>
            </div>
            <div class="single-info-details">
                <div class="item-img">
                    <img src="{{asset('assets/img/figure/teacher.jpg')}}" alt="teacher">
                </div>
                <div class="item-content">
                    <div class="header-inline item-header">
                        <h3 class="text-dark-medium font-medium">{{ucwords($teacher->name)}}</h3>
                        <div class="header-elements">
                            <ul>
                                <li><a href="#"><i class="far fa-edit"></i></a></li>
                                <li><a href="#"><i class="fas fa-print"></i></a></li>
                                <li><a href="#"><i class="fas fa-download"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <p>Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale word moun taiery.Aliquam erat volutpaturabiene natis massa sedde sodale word moun taiery.</p>
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                            <tr>
                                <td>Name:</td>
                                <td class="font-medium text-dark-medium">{{ucwords($teacher->name)}}</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td class="font-medium text-dark-medium">{{ucwords($teacher->gender)}}</td>
                            </tr>
                            <tr>
                                <td>Date Of Birth:</td>
                                <td class="font-medium text-dark-medium">{{$teacher->date_of_birth}}</td>
                            </tr>
                            <tr>
                                <td>ID Number:</td>
                                <td class="font-medium text-dark-medium">{{$teacher->id_number}}</td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td class="font-medium text-dark-medium">{{$teacher->email}}</td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td class="font-medium text-dark-medium">{{$teacher->phone}}</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td class="font-medium text-dark-medium">{{$teacher->address}}</td>
                            </tr>
                            <tr>
                                <td>Subject:</td>
                                <td class="font-medium text-dark-medium">{{$teacher->subject}}</td>
                            </tr>
                            <tr>
                                <td>Class:</td>
                                <td class="font-medium text-dark-medium">{{ucwords($teacher->classe->name)}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Teacher Details Area End Here -->
@endsection
