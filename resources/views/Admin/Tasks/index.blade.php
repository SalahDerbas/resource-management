@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@section('title')
Tasks
@stop
@endsection
@section('page-header')


@section('title_page1')
Dashboard  
@endsection

@section('title_page2')
Tasks
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <p><br><br><br><br><br><br><br><br><br><h1>Tasks Page</h1><br><br><br><br><br><br><br><br><br></p>
                </div>
            </div>
        </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection