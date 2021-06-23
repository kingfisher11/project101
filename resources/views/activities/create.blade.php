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

                <!-- <input readonly="true" name="staffno" value="" style ="border: none"></input> -->

                    <div class="row"> 

                                    <!-- edit form column -->
                                    <div class="col-md-12">

                                        <form name="activity-create" class="form-horizontal" action="{{ route('activity:store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group row">

                                            <label class="col-sm-2 col-form-label">Session :<span style="color: red;">*</span></label>
                                            <div class="col-sm-4">
                                                <select name="session" class="form-control @error('session') is-invalid @enderror" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                                    <option value="">Select Session</option>
                                                    @foreach ($sessions as $session)
                                                    <option value="{{ $session->KodSesi_Sem }}" {{ ( old('session') == $session->KodSesi_Sem) ? 'selected' : '' }}> 
                                                        {{ sprintf('%04d',$session->KodSesi_Sem) }} 
                                                    </option>
                                                    @endforeach
                                                    <div >
                                                    
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
                                                    <textarea id="desc" name="desc" row="3" class="form-control"></textarea>
                                                    <div class="invalid-feedback address_err" style="display: block">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date<span style="color: red;">*</span> :</label>
                                                <div class="col-sm-4">
                                                    <input class="date form-control" data-date-format="dd/mm/yyyy" type="text" name="activitydate" value="{{ old('activitydate') }}" class="form-control @error('activitydate') is-invalid @enderror">
                                                    @error('activitydate')
                                                    <div class="invalid-feedback" style="display: block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Total Hours<span style="color: red;">*</span> :</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="hours" name="hours" class="form-control">
                                                    <div class="invalid-feedback state_err" style="display: block">
                                                       
                                                    </div>
                                                </div>

                                            </div>
                                            
                                            
                                            

                
                                            <div class="form-group text-right">
                                                <button class="btn btn-primary mr-1 btn-submit btn-update-profile" type="submit"><i class="fa fa-paper-plane"></i>
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

@section('scripts')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
        $( function() {
            $( ".date" ).datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
     
</script> 

@endsection