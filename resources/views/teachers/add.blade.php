@extends("partials.layout")

@section("content")
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Admin Dashboard</h3>
        <ul>
            <li>
                <a href="{{route('index')}}">Home</a>
            </li>
            <li>Add New Teacher</li>
        </ul>
    </div>

    <!-- Add New Teacher Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Add New Teacher</h3>
                </div>
            </div>
            <form class="new-added-form" method="POST" action="{{route('teachers.create')}}">
                @csrf
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>First Name *</label>
                        <input type="text" placeholder="" class="form-control" value="{{old('firstname')}}" name="firstname" required @error('firstname') is-invalid @enderror>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Last Name *</label>
                        <input type="text" placeholder="" class="form-control" value="{{old('lastname')}}" name="lastname" required @error('lastname') is-invalid @enderror>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Gender *</label>
                        <select class="form-control" required name="gender" required @error('gender') is-invalid @enderror>
                            <option value>Please Select Gender *</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Date Of Birth *</label>
                        <input type="date" class="form-control" name="date_of_birth" required @error('date_of_birth') is-invalid @enderror>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>ID No</label>
                        <input type="text" placeholder="" class="form-control" required value="{{old('id_number')}}" name="id_number" required @error('id_number') is-invalid @enderror>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>E-Mail</label>
                        <input type="email" placeholder="" class="form-control" required value="{{old('email')}}" name="email" required @error('email') is-invalid @enderror>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Phone</label>
                        <input type="text" placeholder="699 508 197" class="form-control" value="{{old('phone')}}" required name="phone">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Address</label>
                        <input type="text" placeholder="" class="form-control" name="address" value="{{old('address')}}" required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Subject</label>
                        <input type="text" placeholder="" class="form-control" name="subject" value="{{old('subject')}}" required>
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
    <!-- Add New Teacher Area End Here -->

@endsection
