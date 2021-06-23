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
        <div class="input-group-prepend">
                                <a href="" class="btn btn-primary mb-1"><i class="fa fa-plus-circle"></i> Add New Activity</a>
        </div>
        <br>
            <div class="card">
                <div class="card-header">{{ __('Mentor Mentee Activity Index') }}</div>

                <div class="card-body">

                <table class="table">
                <thead>
                 <tr>
                 <th> No </th>
                 <th> No Staff </th>
                 <th> Session </th>
                 <th> Description</th>
                 <th> Date </th>
                 <th> Hours </th>
                
                 
                 </tr>
                 </thead>
                 
 
                 <tbody>
                   @foreach($activities as $no => $activity)
                   <tr>
                   <td>{{ ++$no }}</td> 
                   <td>{{ $activity->staffno}}</td>
                   <td>
                    {{ $activity->session}} 
                    <!-- calling Name from relationship Staff Mentor -->
                    </td>
                   <td>{{ $activity->desc}}</td>
                   <td>{{ $activity->activitydate}}</td>
                   <td>{{ $activity->hours}}</td>
                   

                  
                 
                </tr>
                    @endforeach
                </tbody>
                </table>
                {{$activities->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection