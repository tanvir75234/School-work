@extends('layouts.master')
@section('content')
        <div class="row">
            <div class="col-md-12 ">
                <form action="{{ url('/dashboard/team/submit') }}" method="post" >
                  @csrf
                    <div class="card mb-3">
                      <div class="card-header">
                        <div class="row">
                            <div class="col-md-8 card_title_part">
                                <i class="fab fa-gg-circle"></i>All Team Member Information
                            </div>  
                            <div class="col-md-4 card_button_part">
                                <a href="all-user.html" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Team Member</a>
                            </div>  
                        </div>
                      </div>
                      <div class="card-body">
                      <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-7">
                                @if(Session::has('success'))
                                    <div class="alert alert-success alertsuccess">
                                        <strong>Success! </strong> {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if(Session::has('error'))    
                                    <div class="alert alert-danger alerterror">
                                        <strong>Opps!</strong> {{ Session::get('error') }}
                                    </div>
                                @endif    
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                          <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Member Name<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control form_control" id="" name="member_name">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Member Designation:</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control form_control" id="" name="member_designation">
                            </div>
                          </div>
                          <div class="form-group row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Social Media:</label>
                            <div class="col-sm-7">
                              <div class="row">
                                <div class="col-md-6 mb-2">
                                  <div class="input-group">
                                      <div class="input-group-text"><i class="fab fa-facebook fa-lg"></i></div>
                                      <input type="text" class="form-control" id="" name="member_facebook" value="{{old('facebook')}}">
                                  </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <div class="input-group">
                                      <div class="input-group-text"><i class="fab fa-twitter fa-lg"></i></div>
                                      <input type="text" class="form-control" id="" name="member_twitter" value="{{old('twitter')}}">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="input-group">
                                      <div class="input-group-text"><i class="fab fa-whatsapp-square fa-lg"></i></div>
                                      <input type="text" class="form-control" id="" name="member_whatsapp" value="{{old('linkedin')}}">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="input-group">
                                      <div class="input-group-text"><i class="fab fa-instagram fa-lg"></i></div>
                                      <input type="text" class="form-control" id="" name="member_instagram" value="{{old('instagram')}}">
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                          <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Order<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control form_control" id="" name="member_order">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Photo<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control form_control" id="" name="member_photo">
                            </div>
                          </div>
                        </div>   
                      <div class="card-footer text-center">
                        <button type="submit" class="btn btn-sm btn-dark">UPLOAD</button>
                      </div>  
                    </div>
                </form>
            </div>
        </div>
@endsection