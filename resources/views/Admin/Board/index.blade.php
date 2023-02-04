@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@section('title')
Board
@stop
@endsection
@section('page-header')

@section('title_page1')
Dashboard  
@endsection

@section('title_page2')
Board
@endsection


@section('content')
    <!-- Main content -->
    <div class="content-wrapper kanban">
    
        <section class="content pb-3">
          <div class="container-fluid h-100">
            <div class="card card-row card-secondary">
              <div class="card-header">
                <div class="card-tools">
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>
                <h3 class="card-title">
                  Project 1
                </h3>
              </div>
              
              <div class="card-body">

                <div class="card card-info card-outline">
                  <div class="card-header">
                    <h5 class="card-title">Task Name 1</h5>
                  </div>
                  <div class="card-body">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-primary">
                            Publish
                        </div>
                      </div>
    
                    <div class="custom-control custom-checkbox">
                      <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Name of Task 1 ]</span></label>
                      
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 24-01-2023 ]</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Salah ]</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Status : [  Publish  ]</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                    </div>
                  </div>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-tool">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>

                </div>
                <div class="card card-info card-outline">
                    <div class="card-header">
                      <h5 class="card-title">Task Name 2</h5>
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-info">
                            In-Progress
                        </div>
                      </div>
                        </div>
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Task 2 ]</span></label>
                        
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 25-01-2023 ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Ahmad ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Status : [  Inprogress  ]</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                      </div>
                    </div>
                    <div class="card-tools">
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
  
                  </div>
                  <div class="card card-info card-outline">
                    <div class="card-header">
                      <h5 class="card-title">Task Name 2</h5>
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-warning">
                            Defart
                        </div>
                        
                      </div>
    
                    </div>
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Task 2 ]</span></label>
                        
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 26-01-2023 ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Hasan ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Status : [  Defart  ]</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                      </div>
                    </div>
                    <div class="card-tools">
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
  
                  </div>
    
              </div>
            </div>
            <div class="card card-row card-primary">
              <div class="card-header">
                <div class="card-tools">
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>

                <h3 class="card-title">
                    Project 2
                </h3>
              </div>
              <div class="card-body">

                <div class="card card-info card-outline">
                  <div class="card-header">
                    <h5 class="card-title">Task Name 1</h5>
                  </div>
                  <div class="card-body">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-primary">
                            Publish
                        </div>
                      </div>
    
                    <div class="custom-control custom-checkbox">
                      <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Name of Task 1 ]</span></label>
                      
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 24-01-2023 ]</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Salah ]</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Status : [  Publish  ]</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                    </div>
                  </div>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-tool">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>

                </div>
                <div class="card card-info card-outline">
                    <div class="card-header">
                      <h5 class="card-title">Task Name 2</h5>
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-info">
                            In-Progress
                        </div>
                      </div>
                        </div>
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Task 2 ]</span></label>
                        
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 25-01-2023 ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Ahmad ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Status : [  Inprogress  ]</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                      </div>
                    </div>
                    <div class="card-tools">
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
  
                  </div>
                  <div class="card card-info card-outline">
                    <div class="card-header">
                      <h5 class="card-title">Task Name 2</h5>
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-warning">
                            Defart
                        </div>
                        
                      </div>
    
                    </div>
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Task 2 ]</span></label>
                        
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 26-01-2023 ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Hasan ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Status : [  Defart  ]</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                      </div>
                    </div>
                    <div class="card-tools">
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
  
                  </div>
    
              </div>           
            </div>
            <div class="card card-row card-default">
              <div class="card-header bg-info">
                <div class="card-tools">
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>

                <h3 class="card-title">
                    Project 3
                </h3>
              </div>
              <div class="card-body">

                <div class="card card-info card-outline">
                  <div class="card-header">
                    <h5 class="card-title">Task Name 1</h5>
                  </div>
                  <div class="card-body">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-primary">
                            Publish
                        </div>
                      </div>
    
                    <div class="custom-control custom-checkbox">
                      <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Name of Task 1 ]</span></label>
                      
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 24-01-2023 ]</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Salah ]</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Status : [  Publish  ]</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                    </div>
                  </div>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-tool">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>

                </div>
                <div class="card card-info card-outline">
                    <div class="card-header">
                      <h5 class="card-title">Task Name 2</h5>
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-info">
                            In-Progress
                        </div>
                      </div>
                        </div>
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Task 2 ]</span></label>
                        
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 25-01-2023 ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Ahmad ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Status : [  Inprogress  ]</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                      </div>
                    </div>
                    <div class="card-tools">
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
  
                  </div>
                  <div class="card card-info card-outline">
                    <div class="card-header">
                      <h5 class="card-title">Task Name 2</h5>
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-warning">
                            Defart
                        </div>
                        
                      </div>
    
                    </div>
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Task 2 ]</span></label>
                        
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 26-01-2023 ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Hasan ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Status : [  Defart  ]</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                      </div>
                    </div>
                    <div class="card-tools">
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
  
                  </div>
    
              </div>
            </div>
            <div class="card card-row card-success">
              <div class="card-header">
                <div class="card-tools">
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-plus"></i>
                  </a>
                </div>

                <h3 class="card-title">
                    Project 4
                </h3>
              </div>
              <div class="card-body">

                <div class="card card-info card-outline">
                  <div class="card-header">
                    <h5 class="card-title">Task Name 1</h5>
                  </div>
                  <div class="card-body">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-primary">
                            Publish
                        </div>
                      </div>
    
                    <div class="custom-control custom-checkbox">
                      <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Name of Task 1 ]</span></label>
                      
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 24-01-2023 ]</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Salah ]</span></label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Status : [  Publish  ]</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                    </div>
                  </div>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-tool">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>

                </div>
                <div class="card card-info card-outline">
                    <div class="card-header">
                      <h5 class="card-title">Task Name 2</h5>
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-info">
                            In-Progress
                        </div>
                      </div>
                        </div>
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Task 2 ]</span></label>
                        
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 25-01-2023 ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Ahmad ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Status : [  Inprogress  ]</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                      </div>
                    </div>
                    <div class="card-tools">
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
  
                  </div>
                  <div class="card card-info card-outline">
                    <div class="card-header">
                      <h5 class="card-title">Task Name 2</h5>
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-warning">
                            Defart
                        </div>
                        
                      </div>
    
                    </div>
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <label>Name : <span style="font-size: 14px; margin-left:8px;">[ Task 2 ]</span></label>
                        
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Date : <span style="font-size: 14px; margin-left:8px;">[ 26-01-2023 ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label >Employee : <span style="font-size: 14px; margin-left:8px;">[ Hasan ]</span></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Status : [  Defart  ]</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <label>Description : <span style="font-size: 14px; margin-left:8px;">[ This is Description ]</span></label>
                      </div>
                    </div>
                    <div class="card-tools">
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="btn btn-tool">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
  
                  </div>
    
              </div>
            </div>
          </div>
        </section>
      </div>        
      
@endsection
@section('js')

@endsection