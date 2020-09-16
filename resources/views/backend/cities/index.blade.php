@extends('backendtemplate')
@section('content')

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">City List</h1>
                
                  <a href="{{-- {{route('cities.create')}} --}}" class="btn btn-secondary float-right">Add New</a>
                </div>
          
         <div class="row">
          <div class="col-md-12">
         <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>id</th>
                <th>Name</th>
              </tr>
              </thead>
             {{-- <tbody>
              @php $i=1; @endphp
              @foreach($cities as $city)
               <tr>
                 <td>{{$id}}</td>
                 <td>{{$city->name}}</td>
              </tr>
               @endforeach
             </tbody>  --}}
           </table>
         </div>
           </div>
@endsection