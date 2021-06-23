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

        </div>
        <div class="container">    
            <div class="card">
                <div class="card-header">Mentor Details</div>
                        <div class="card-body">
                            <div class="col-md-4 col-xs-12 col-sm-5 col-lg-8">
                                <div class="container"  >
                                    <h3>{{ $staffs->Nama}} </h3>
                                </div>
                                        <hr>

                                        STAFF NO: {{$staffs->NoStaf}}</br>
                                        DESIGNATION: {{$staffs->designation->JwtDesc}} </br>
                                        BRANCH: {{$staffs->CawKod}}
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <br>
            <div class="card">
                <div class="card-header">{{ __('List of ') }} List of Active Mentees</div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th> NO </th>
                                    <th> MATRIX NUMBER </th>
                                    <th> MENTEE NAME </th>
                                    <th> PROGRAM</th>

                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($mentors as $no => $mentor)
                               
                                <tr>
                                <td>{{ ++$no }}</td> 
                                    <td>{{ $mentor->student->RKD01_Nomatrik }}</td> 
                                    <td>{{ $mentor->student->RKD01_Nama }}</td> 
                                    <td>{{ $mentor->student->RKD01_Program }}</td> 


                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection