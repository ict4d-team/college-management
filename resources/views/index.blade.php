@extends("partials.layout")

@section("content")
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Admin Dashboard</h3>
        <ul>
            <li>
                <a href="{{route('index')}}">Home</a>
            </li>
            <li>Admin</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Dashboard summery Start Here -->
    <div class="row gutters-20">
        <div class="col-xl-6 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green ">
                            <i class="flaticon-classmates text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Students</div>
                            <div class="item-number"><span class="counter" data-num="{{$nbre_students}}">{{ number_format($nbre_students) }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-blue">
                            <i class="flaticon-multiple-users-silhouette text-blue"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Teachers</div>
                            <div class="item-number"><span class="counter" data-num="{{$nbre_teachers}}">{{ number_format($nbre_teachers) }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard summery End Here -->
    <!-- Dashboard Content Start Here -->
    <div class="row gutters-20">
        <div class="col-12 col-xl-6 col-3-xxxl">
            <div class="card dashboard-card-three pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Students</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <div class="doughnut-chart-wrap">
                        <canvas id="student-doughnut-chart" width="100" height="300"></canvas>
                    </div>
                    <div class="student-report">
                        <div class="student-count pseudo-bg-blue">
                            <h4 class="item-title">Female Students</h4>
                            <div class="item-number">{{$nbre_female_students}}</div>
                        </div>
                        <div class="student-count pseudo-bg-yellow">
                            <h4 class="item-title">Male Students</h4>
                            <div class="item-number">{{$nbre_male_students}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-6 col-4-xxxl">
            <div class="card dashboard-card-four pd-b-20">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Event Calender</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <div class="calender-wrap">
                        <div id="fc-calender" class="fc-calender"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Content End Here -->
@endsection
