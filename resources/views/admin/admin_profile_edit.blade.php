@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="cantainer-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Profile Page</h4>

                        <form action="">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" class="form-control" type="text" id="example-text-input"
                                value="{{$editData->name}}">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                            <div class="col-sm-10">
                                <input name="email" class="form-control" type="text" id="example-text-input"
                                value="{{$editData->email}}">
                            </div>
                        </div>
                        <!-- end row -->     
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input name="username" class="form-control" type="text" id="example-text-input"
                                value="{{$editData->username}}">
                            </div>
                        </div>
                        <!-- end row -->   
                        
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                            <div class="col-sm-10">
                                <input name="profile_image" class="form-control" type="file" id="example-text-input"
                                value="{{$editData->username}}">
                            </div>
                        </div>
                        <!-- end row -->    

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img src="{{asset('backend/assets/images/small/img-5.jpg')}}" alt="Card image cap" 
                                class="rounded avatar-lg">
                            </div>
                        </div>
                        <!-- end row -->    

                        <input type="submit" class="btn btn-info waves-effect waves-light " value="Update Profile">
                             </form>
                      
                 
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>




@endsection