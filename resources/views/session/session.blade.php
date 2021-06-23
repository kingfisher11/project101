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
                <div class="card-header">{{ __('Session Index') }}</div>

                <div class="card-body">

                <table class="table">
                <thead>
                 <tr>
                 <th> NO </th>
                 <th> SESSION CODE </th>
                 <th> DESCRIPTION</th>
                 <th> START DATE </th>
                 <th> END DATE </th>
                
                 
                 </tr>
                 </thead>
                 
 
                 <tbody>
                   @foreach($sessions as $no => $session)
                   <tr>
                   <td>{{ ++$no }}</td> 
                   <td>{{ $session->KodSesi_Sem}}</td>
                   <td>{{ $session->Keterangan}}</td>
                   <td>{{ $session->TrkMula_Sem}}</td>
                   <td>{{ $session->TrkMula_Sem}}</td>
                   

            
                </tr>
                    @endforeach
                </tbody>
                </table>
                {{$sessions->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection