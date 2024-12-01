@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">SEO Settings</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">SEO Settings</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> SEO Settings</h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body col-lg-12">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">SEO Settingd</h4>
                       
                      </div>

                      <div class="modal-body">
                         <form action="{{ route('update.seo',$seo->id) }}" method="Post">
                         	@csrf
                           <div class="form-group">
                             <label for="exampleInputEmail1">Author</label>
                             <input type="text" class="form-control " value="{{ $seo->meta_author }}" aria-describedby="emailHelp" name="meta_author" required="">
                           </div>
                           <div class="form-group">
                             <label for="exampleInputEmail1">Meta Title</label>
                             <input type="text" class="form-control " value="{{ $seo->meta_title }}" aria-describedby="emailHelp" name="meta_title" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">Meta Keyword</label>
                             <input type="text" class="form-control " value="{{ $seo->meta_keyword }}" aria-describedby="emailHelp" name="meta_keyword" required="">
                           </div>
                           <div class="form-group">
                             <label for="exampleInputEmail1">Meta Description</label>
                             <input type="text" class="form-control " value="{{ $seo->meta_description }}" aria-describedby="emailHelp" name="meta_description" required="">
                           </div>
						                              <div class="form-group">
                             <label for="exampleInputEmail1">Upodokher Name</label>
                             <input type="text" class="form-control " value="{{ $seo->upodkahhoname }}" aria-describedby="emailHelp" name="upodkahhoname" required="">
                           </div>
						                              <div class="form-group">
                             <label for="exampleInputEmail1">Upodokher Short Details</label>
                             <input type="text" class="form-control " value="{{ $seo->upodkahhoshortdetails }}" aria-describedby="emailHelp" name="upodkahhoshortdetails" required="">
                           </div>
                            <div class="form-group">
                             <label for="exampleInputEmail1">Upodokkher Long Details</label>
                              <textarea class="textarea" placeholder="Place some text here" name="upodkahhoshorlong" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          	{{ $seo->upodkahhoshorlong }}
                          </textarea>
                           </div>
						                              <div class="form-group">
                             <label for="exampleInputEmail1">Oddakher Name</label>
                             <input type="text" class="form-control " value="{{ $seo->oddhakhorname }}" aria-describedby="emailHelp" name="oddhakhorname" required="">
                           </div>
						                              <div class="form-group">
                             <label for="exampleInputEmail1">Oddakher Short Details</label>
                             <input type="text" class="form-control " value="{{ $seo->oddhakhorshortdetail }}" aria-describedby="emailHelp" name="oddhakhorshortdetail" required="">
                           </div>
                            <div class="form-group">
                             <label for="exampleInputEmail1">Oddhoker Long Details</label>
                              <textarea class="textarea" placeholder="Place some text here" name="oddhakhorlong" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          	{{ $seo->oddhakhorlong }}
                          </textarea>
                           </div>
						   
						   
                            <div class="form-group">
                             <label for="exampleInputEmail1">Google Analytics</label>
                             <input type="text" class="form-control " value="{{ $seo->google_analytics }}" aria-describedby="emailHelp" name="google_analytics" required="">
                           </div>
                            <div class="form-group">
                             <label for="exampleInputEmail1">Alexa Analytics</label>
                             <input type="text" class="form-control " value="{{ $seo->alexa_analytics }}" aria-describedby="emailHelp" name="alexa_analytics" required="">
                           </div>
                           <div class="form-group">
                             <label for="exampleInputEmail1">Admit Card Download Link</label>
                             <input type="text" class="form-control " value="{{ $seo->admitcard }}" aria-describedby="emailHelp" name="admitcard" required="">
                           </div>
						                              <div class="form-group">
                             <label for="exampleInputEmail1">Marksheet Download Link</label>
                             <input type="text" class="form-control " value="{{ $seo->marksheet }}" aria-describedby="emailHelp" name="marksheet" required="">
                           </div>
						                              <div class="form-group">
                             <label for="exampleInputEmail1">Certificate Download Link</label>
                             <input type="text" class="form-control " value="{{ $seo->certificate }}" aria-describedby="emailHelp" name="certificate" required="">
                           </div>
						                              <div class="form-group">
                             <label for="exampleInputEmail1">Exam Routine</label>
                             <input type="text" class="form-control " value="{{ $seo->examroutine }}" aria-describedby="emailHelp" name="examroutine" required="">
                           </div>
						                              <div class="form-group">
                             <label for="exampleInputEmail1">Admission Form Download Link</label>
                             <input type="text" class="form-control " value="{{ $seo->admissionform }}" aria-describedby="emailHelp" name="admissionform" required="">
                           </div>
						                              <div class="form-group">
                             <label for="exampleInputEmail1">Gurdian Login</label>
                             <input type="text" class="form-control " value="{{ $seo->gurdinelogin }}" aria-describedby="emailHelp" name="gurdinelogin" required="">
                           </div>
						   						                              <div class="form-group">
                             <label for="exampleInputEmail1">Contact US Link</label>
                             <input type="text" class="form-control " value="{{ $seo->contactus }}" aria-describedby="emailHelp" name="contactus" required="">
                           </div>
                          
                    
                           <button type="submit" class="btn btn-success btn-block">Update</button>
                         </form>
                      </div>
                    </div>
            </div>
            <!-- /.card-body -->
          </div>


@endsection