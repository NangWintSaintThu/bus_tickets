 @extends('backendtemplate')
@section('content')

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Bus_type List</h1>
                <div class="text-right">
                  <a href="{{route('bus_types.create')}}" class="btn btn-secondary" >Add New</a>
                </div>
      </div>
         <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>id</th>
                <th>Name</th>
              </tr>
            </thead>
             <tbody>
              @php $i=1; @endphp
              @foreach($bus_types as $bus_type)
               <tr>
                 <td>{{$id}}</td>
                 <td>{{$bus_type->name}}</td>
                 
               </tr>
               @endforeach
             </tbody>
           </table>

            
@endsection