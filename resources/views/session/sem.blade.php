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
                <div class="card-header">{{ __('Student Semester Index') }}</div>

                <div class="card-body">

                <table class="table">
                <thead>
                 <tr>
                 <th> NO </th>
                 <th> NO MATRIX </th>
                 <th> SESSION CODE</th>
                 <th> SEMESTER </th>
                
                 
                 </tr>
                 </thead>
                 
 
                 <tbody>
                   @foreach($sems as $no => $sem)
                   <tr>
                   <td>{{ ++$no }}</td> 
                   <td>{{ $sem->RKD01_Nomatrik}}</td>
                   <td>{{ $sem->KodSesi_Sem}}</td>
                   <td>{{ $sem->Semester}}</td>

                   

            
                </tr>
                    @endforeach
                </tbody>
                </table>
                {{$sems->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection