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
                
            <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-5 col-lg-3">
                    <img src="https://icon-library.net/images/profile-image-icon/profile-image-icon-5.jpg" alt="stack photo" class="img">
                </div>
                <div class="col-md-4 col-xs-12 col-sm-5 col-lg-8">
                    <div class="container"  >
                        <h2>{{ $staffs->Nama}} </h2>
                        </div>
                            <hr>

                            STAFF NO: {{$staffs->NoStaf}}</br>
                            DESIGNATION: {{$staffs->designation->JwtDesc}} </br>
                            BRANCH: {{$staffs->CawKod}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('List of ') }} {{ $staffs->Nama}} Mentees</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> No Matrik </th>
                                    <th> Mentee Name </th>
                                    <th> Program</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($mentors as $getStudent)
                               
                                <tr>
                                    <td>{{ $getStudent ->RKD01_Nomatrik }}</td> 
                                    <td>{{ $getStudent ->RKD01_Nama}}</td>
                                    <td>{{ $getStudent ->RKD01_Program }}</td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        {{ $mentors->links() }}

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection