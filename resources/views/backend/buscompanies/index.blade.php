@extends('backendtemplate')
@section('content')
<<<<<<< HEAD

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Bus Company List</h1>
                <div class="text-right">
                  <a href="{{-- {{route('bus_types.create')}} --}}" class="btn btn-secondary" >Add New</a>
                </div>
      </div>
    </div>
         <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Phone no</th>
                <th>Logo</th>
                <th>Owner name</th>
                <th>Address</th>
                
              </tr>
            </thead>
            {{--  <tbody>
              @php $i=1; @endphp
              @foreach($bus_types as $bus_type)
               <tr>
                 <td>{{$id}}</td>
                 <td>{{$bus_type->name}}</td>
                 
               </tr>
               @endforeach
             </tbody> --}}
           </table>

            
=======
  <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bus Company</h1>
            <a href="#" class="btn btn-info float-right">Add New</a>
          </div>
              <div class="row">
                <div class="col-md-12"> 
                  <table class="table table-bordered">
                   <thead class="thead-dark">
                     <tr>
                       <th>No</th>
                       <th>Name</th>
                       <th>Phone No</th>
                       <th>Logo</th>
                       <th>Owner Name</th>
                       <th>Address</th>
                     </tr>
                     
                    {{--  <tbody>
                      @php $i=1; @endphp
                      @foreach($routes as $route)
                       <tr>
                         <td>{{$i++}}</td>
                         <td>{{$subcategory->name}}</td>
                         <td>
                            <a href="{{route('routes.edit',$route->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>

                            <form action="{{route('routes.destroy',$route->id)}}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger "><i class="fas fa-trash"></i></button>
                            </form>
                        </td>            

                    </tr>
                    @php $i++; @endphp
                    @endforeach
                     </tbody> --}}
                   </thead>
               </table>
              </div>
           </div>

  

>>>>>>> 41f9ba8f7281fed02011c24edefab6fd86550459
@endsection