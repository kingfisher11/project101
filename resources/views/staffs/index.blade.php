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
                <div class="card-header">{{ __('Staff Index') }}</div>

                <div class="card-body">

                <table class="table">
                <thead>
                 <tr>
                 <th> STAFF NO </th>
                 <th> NAME</th>
                 <th> DESIGNATION </th>
                
                 
                 </tr>
                 </thead>
                 
 
                 <tbody>
                   @foreach($staffs as $staff)
                   <tr>
                   <td>{{ $staff->NoStaf}}</td>
                   <td>{{ $staff->Nama}}</td>
                   <td>{{ $staff->designation->JwtDesc}}</td>
                   

            
                </tr>
                    @endforeach
                </tbody>
                </table>
                {{$staffs->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection