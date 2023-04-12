@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
    <div class="cantainer-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Footer Page</h4>

                        <form method="POST" action="{{route('update.footer')}}" enctype="multipart/form-data">
                            @csrf

                          <input type="hidden" name="id" value="{{$allfooter->id}}"> 

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Number</label>
                            <div class="col-sm-10">
                                <input name="number" class="form-control" type="text" id="example-text-input"
                                value="{{$allfooter->number}}">
                            </div>
                        </div>
                        <!-- end row -->
                      
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> Short Description</label>
                            <div class="col-sm-10">
                                <textarea name="short_description" id="" cols="140" rows="10">
                                    {{$allfooter->short_description}}
                                   </textarea>
                            </div>
                        </div>
                        <!-- end row -->   
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input name="allfooter" class="form-control" type="text" id="example-text-input"
                                value="{{$allfooter->address}}">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" class="form-control" type="email" id="example-text-input"
                                value="{{$allfooter->email}}">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
                            <div class="col-sm-10">
                                <input name="facebook" class="form-control" type="text" id="example-text-input"
                                value="{{$allfooter->facebook}}">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Twitter</label>
                            <div class="col-sm-10">
                                <input name="twitter" class="form-control" type="text" id="example-text-input"
                                value="{{$allfooter->twitter}}">
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Copyright</label>
                            <div class="col-sm-10">
                                <input name="copyright" class="form-control" type="text" id="example-text-input"
                                value="{{$allfooter->copyright}}">
                            </div>
                        </div>
                        <!-- end row -->
               
                     

                       

                        <input type="submit" class="btn btn-info waves-effect waves-light " value="Update Footer Page">
                             </form>
                      
                 
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

@endsection