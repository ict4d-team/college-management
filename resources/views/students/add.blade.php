@extends("partials.layout")

@section("content")
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Admin Dashboard</h3>
        <ul>
            <li>
                <a href="{{route('index')}}">Home</a>
            </li>
            <li>Student Admit Form</li>
        </ul>
    </div>

    <!-- Admit Form Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Add New Student</h3>
                </div>
            </div>
            <form class="new-added-form" method="POST" action="{{route('students.create')}}">
                @csrf
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>First Name *</label>
                        <input type="text" placeholder="John" class="form-control" value="{{old('firstname')}}" name="firstname" @error('firstname') is-invalid @enderror required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Last Name *</label>
                        <input type="text" placeholder="Doe" class="form-control" value="{{old('lastname')}}" name="lastname" @error('lastname') is-invalid @enderror required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Gender *</label>
                        <select class="form-control" required name="gender" @error('gender') is-invalid @enderror>
                            <option value>Please Select Gender *</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Date Of Birth *</label>
                        <input type="date" placeholder="dd/mm/yyyy" class="form-control" data-position='bottom right' name="date_of_birth" required @error('date_of_birth') is-invalid @enderror>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>E-Mail</label>
                        <input type="email" placeholder="" class="form-control" value="{{old('email')}}" name="email">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Phone</label>
                        <input type="text" placeholder="" class="form-control" value="{{old('phone')}}" name="phone">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Address</label>
                        <input type="text" placeholder="" class="form-control" value="{{old('address')}}" name="address" required @error('address') is-invalid @enderror>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Class *</label>
                        <select class="form-control" required name="classe" @error('classe') is-invalid @enderror>
                            <option value>Please Select Class *</option>
                            @foreach($classes as $class)
                                <option value="{{$class->id}}">{{ucwords($class->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Admit Form Area End Here -->

@endsection
