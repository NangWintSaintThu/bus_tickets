@extends('master')
@section('content')
  <div class="jumbotron jumbotron-fluid subtitle">
        <div class="container">
            <h1 class="text-center text-white"> Login </h1>
        </div>
    </div>
    <h2>Route Lit</h2>
     <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Route List Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="dataTable_length">
                        <label for="#">Leaving From</label>
                          <div class="form-field">
                            <div class="select-wrap">
                              <select class="form-control btn btn-success" name="leavingfrom">
                               
                             </select>
                           </div>
                         </div>
                    </div>
                </div>
                     <div class="col-lg align-items-end">
                      <div class="form-group">
                        <label for="#">Going To</label>
                        <div class="form-field">
                          <div class="select-wrap">
                            <select class="form-control" name="goingto">
                            
                           </select>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg align-self-end">
                  <div class="form-group">
                    <div class="form-field">
                      <a href="{{route('selectseatpage')}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Search</a>
                    </div>
                  </div>
                </div>
                
                <hr>
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="Width:100%;">
                  <thead>
                    <tr role="row">
                <th>Tachileik To Kyaing Tong</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>

                <tr role="row">
                <th>Tachileik To Mong Phat</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>

                 <tr role="row">
                <th>Tachileik To Thar Lay</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>

                <tr role="row">
                <th> Kyaing Tong  To Tachileik</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>

               <tr role="row">
                <th> Kyaing Tong  To Mong Phat</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>

               <tr role="row">
                <th> Kyaing Tong  To Thar Lay</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>
               <tr role="row">
                <th> Thar Lay  To Tachileik</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>
               <tr role="row">
                <th>Thar Lay   To Kyaing Tong</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>
               <tr role="row">
                <th>Thar Lay   To Mong Phat</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>
               <tr role="row">
                <th>Mong Phat   To Kyaing Tong</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>
               <tr role="row">
                <th>Mong Phat   To Tachileik</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>
               <tr role="row">
                <th>Mong Phat   To Thar Lay</th>
                <th><button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">ရွှေရေကန်</button></th>
                 <th><button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ရွှေမြို့တော်</button></th>
                  <th><button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">မိုးကောင်းကင်</button></th>
                   <th><button type="submit" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">ဆမ်လောင်</button></th>
                    <th><button type="submit" class="btn btn-outline-secondary btn-lg active" role="button" aria-pressed="true">တော်ဝင်</button></th>
               </tr>

              </thead>
             </table>
              </div>
            </div>
          </div>
      </div>


 
@endsection