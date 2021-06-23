@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session()->has('alert'))
            <div class="alert {{session()->get('alert-type')}}">
                {{session()->get('alert')}}
            </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('New Activity') }}</div>
                <div class="card-body">



                    <div class="row"> 

                                    <!-- edit form column -->
                                    <div class="col-md-12">

                                        <form name="form-update-profile" class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group row">

                                            <label class="col-sm-2 col-form-label">Session :<span style="color: red;">*</span></label>
                                            <div class="col-sm-4">
                                                <select name="session" class="form-control @error('session') is-invalid @enderror" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                                    <option value="">Select Session</option>
                                                    @foreach ($sessions as $session)
                                                    <option value="{{ $session->KodSesi_Sem }}" {{ ( old('session') == $session->KodSesi_Sem) ? 'selected' : '' }}> 
                                                        {{ $session->KodSesi_Sem }} 
                                                    </option>
                                                    @endforeach

                                                </select>
                                                @error('session')
                                                <div class="invalid-feedback" style="display: block">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description<span style="color: red;">*</span> :</label>
                                                <div class="col-sm-10">
                                                    <textarea id="address" name="address" row="3" class="form-control"></textarea>
                                                    <div class="invalid-feedback address_err" style="display: block">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date<span style="color: red;">*</span> :</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="postcode" name="postcode" value="" class="form-control">
                                                    <div class="invalid-feedback postcode_err" style="display: block">
                                                        
                                                    </div>
                                                </div>
                
                                                <label class="col-sm-2 col-form-label">Venue<span style="color: red;">*</span> :</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="city" name="city" value="" class="form-control">
                                                    <div class="invalid-feedback city_err" style="display: block">
                                                
                                                    </div>   
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Total Hours<span style="color: red;">*</span> :</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="state" name="state" value="" class="form-control">
                                                    <div class="invalid-feedback state_err" style="display: block">
                                                       
                                                    </div>
                                                </div>

                                            </div>
                                            
                                            
                                            

                
                                            <div class="form-group text-right">
                                                <button class="btn btn-primary mr-1 btn-submit btn-update-profile" type="button"><i class="fa fa-paper-plane"></i>
                                                    UPDATE</button>
                                                <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>
                                            </div>
                

                                        </form>
                                    </div>
                                </div>

                            </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection