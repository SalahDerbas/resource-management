@extends('layouts.master')

@section('title')
Employees Portfolio
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('title_page1')
Dashboard  
@endsection

@section('title_page2')
Employees
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Employees Informations</h3>
                        </div>
                        <!-- /.card-header -->

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <button style="margin-left: 12px; margin-top: 12px; width:133px;" type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Add Employee
                        </button>
                        <form action="{{ route('Employees.search') }}" method="POST" style="margin-left:85%; margin-top:-45px;">
                            @csrf
                            <input type="text" name="search" id="search" value="{{ $search }}" placeholder="Search" class="form-control" style="width:170px;display:inline-grid;margin-right:10px;">
                            <a href="{{ route('Employees.index') }}"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-redo"></i></button></a>
                        </form>
                        <div class="card-body">
                            <table id="datatable"  class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Designation</th>
                                    <th>Image</th>
                                    <th>Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($Employees as $Employee)
                                    <tr>
                                        <?php $i++; ?>
                                        <td>{{ $i }}</td>
                                        <td>{{$Employee->name}}</td>
                                        <td>{{$Employee->email}}</td>
                                        <td>{{$Employee->department->department ?? ''}}</td>
                                        <td>{{$Employee->designation->designation ?? ''}}</td>
                                        <td>
                                        <img src="{{ $Employee->image }}" width="100" height="100" />
                                        </td>
                                        

                                        <td>
                                            @if($Employee->id != 1)
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#edit{{$Employee->id}}"
                                                    title=""><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#delete{{$Employee->id}}"
                                                    title=""><i
                                                    class="fa fa-trash"></i></button>
                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                    data-target="#add{{$Employee->id}}"
                                                    title=""><i
                                                    class="fa fa-plus"></i></button>
                                            @endif
                                        </td>
                                    </tr>


                                    <!-- add Files  -->
                                    <div class="modal fade" id="add{{$Employee->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        Upload Files For This User {{ $Employee->name}} ? 

                                                            </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- add_form -->
                                                    <form action="{{ route('Employees.upload') }}" enctype="multipart/form-data" method="post">
                                                        {{ method_field('post') }}
                                                        @csrf
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $Employee->id }}">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="image" class="mr-sm-2">Files
                                                                :</label><br>
                                                            <input type="file" accept="image/*" name="file[]" multiple requird>
                                                        </div>

                                                    </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                    class="btn btn-success">Submit</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    <!-- edit_modal_Grade -->
                                    <div class="modal fade" id="edit{{$Employee->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- add_form -->
                                                    <form action="{{ route('Employees.update', 'test') }}" enctype="multipart/form-data" method="post">
                                                        {{ method_field('put') }}
                                                        @csrf
                                                        <div class="row">
                                                        <div class="col">
                                                            <label for="firstname" class="mr-sm-2">Name
                                                                :</label>
                                                            <input id="name" type="text" name="name" value="{{$Employee->name}}" class="form-control">
                                                        </div>

                                                        <div class="col">
                                                            <label for="email" class="mr-sm-2">Email
                                                                :</label>
                                                            <input id="email" type="email" name="email" value="{{$Employee->email}}" class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="password" class="mr-sm-2">Password
                                                                :</label>
                                                            <input id="password" type="password" name="password" value="{{$Employee->password}}" class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label for="phone" class="mr-sm-2">Phone
                                                                :</label>
                                                            <input id="phone" type="number" name="phone" value="{{$Employee->phone}}" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                    <div class="col">
                                                        <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">

                                                            <label for="Name" class="mr-sm-2">Department
                                                                :</label>
                                                            <select class="form-control" name="department_id" id="department_id" required autofocus required >
                                                                @foreach($Departments as $c)
                                                                    <option value = "{{ $c->id }}">{{ $c->department }}</option>
                                                                @endforeach
                                                            </select>


                                                            @if ($errors->has('department_id'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('department_id') }}</strong>
                                                                </span>
                                                            @endif

                                                            </div>
                                                            </div>
                                                            <div class="col">

                                                            <div class="form-group{{ $errors->has('designation_id') ? ' has-error' : '' }}">

                                                            <label for="Name" class="mr-sm-2">Designation
                                                                :</label>
                                                            <select class="form-control" name="designation_id" id="designation_id" required autofocus required >
                                                                @foreach($Designations as $c)
                                                                    <option value = "{{ $c->id }}">{{ $c->designation }}</option>
                                                                @endforeach
                                                            </select>


                                                            @if ($errors->has('designation_id'))
                                                                <span class="help-block">
                                                                <strong>{{ $errors->first('designation_id') }}</strong>
                                                                </span>
                                                            @endif

                                                            </div>
                                                            </div>

                                                            </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">

                                                            <label for="Name" class="mr-sm-2">Gender
                                                                :</label>
                                                            <select class="form-control" name="gender" id="gender" required autofocus required >
                                                            <option value = "male">Male</option>
                                                            <option value = "female">Female</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                                        <div class="col">
                                                            <label for="salary" class="mr-sm-2">Salary
                                                                :</label>
                                                            <input id="salary" type="number" name="salary" value="{{$Employee->salary}}" class="form-control">
                                                        </div>


                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="joining_date" class="mr-sm-2">Joining Date
                                                                :</label>
                                                            <input id="joining_date" type="date" name="joining_date" value="{{$Employee->joining_date}}" class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label for="facebook" class="mr-sm-2">Facebook URL
                                                                :</label>
                                                            <input id="facebook" type="text" name="facebook" value="{{$Employee->facebook}}" class="form-control">
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="whatsapp" class="mr-sm-2">Whatsapp
                                                                :</label>
                                                            <input id="whatsapp" type="number" name="whatsapp" value="{{$Employee->whatsapp}}" class="form-control">
                                                        </div>
                                                        <div class="col">
                                                            <label for="linkedin" class="mr-sm-2">Linkedin URL
                                                                :</label>
                                                            <input id="linkedin" type="text" name="linkedin" value="{{$Employee->linkedin}}" class="form-control">
                                                        </div>

                                                    </div>
                                                
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="image" class="mr-sm-2">image
                                                                :</label><br>
                                                            <input type="file" accept="image" name="image" requird >
                                                        </div>

                                                    </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                    class="btn btn-success">Submit</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- delete_modal_Grade -->
                                    <div class="modal fade" id="delete{{ $Employee->id }}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                        id="exampleModalLabel">
                                                        Delete Employee
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('Employees.destroy', 'test') }}" method="post">
                                                        {{ method_field('Delete') }}
                                                        @csrf
                                                        Are you sure delete ?
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $Employee->id }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                    class="btn btn-danger">ٍSubmit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>


        <!-- add_modal_Grade -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                            Add Employee
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- add_form -->
                        <form action="{{ route('Employees.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="firstname" class="mr-sm-2">Name
                                        :</label>
                                    <input id="name" type="text" name="name" class="form-control">
                                </div>

                                <div class="col">
                                    <label for="email" class="mr-sm-2">Email
                                        :</label>
                                    <input id="email" type="email" name="email" class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="password" class="mr-sm-2">Password
                                        :</label>
                                    <input id="password" type="password" name="password" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="phone" class="mr-sm-2">Phone
                                        :</label>
                                    <input id="phone" type="number" name="phone" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                            <div class="col">
                                <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">

                                    <label for="Name" class="mr-sm-2">Department
                                        :</label>
                                    <select class="form-control" name="department_id" id="department_id" required autofocus required >
                                        @foreach($Departments as $c)
                                            <option value = "{{ $c->id }}">{{ $c->department }}</option>
                                        @endforeach
                                    </select>


                                    @if ($errors->has('department_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                        </span>
                                    @endif

                                    </div>
                                    </div>
                                    <div class="col">

                                    <div class="form-group{{ $errors->has('designation_id') ? ' has-error' : '' }}">

                                    <label for="Name" class="mr-sm-2">Designation
                                        :</label>
                                    <select class="form-control" name="designation_id" id="designation_id" required autofocus required >
                                        @foreach($Designations as $c)
                                            <option value = "{{ $c->id }}">{{ $c->designation }}</option>
                                        @endforeach
                                    </select>


                                    @if ($errors->has('designation_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('designation_id') }}</strong>
                                        </span>
                                    @endif

                                    </div>
                                    </div>

                                    </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">

                                    <label for="Name" class="mr-sm-2">Gender
                                        :</label>
                                    <select class="form-control" name="gender" id="gender" required autofocus required >
                                    <option value = "male">Male</option>
                                    <option value = "female">Female</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col">
                                    <label for="salary" class="mr-sm-2">Salary
                                        :</label>
                                    <input id="salary" type="number" name="salary" class="form-control">
                                </div>


                            </div>

                            <div class="row">
                                 <div class="col">
                                    <label for="joining_date" class="mr-sm-2">Joining Date
                                        :</label>
                                    <input id="joining_date" type="date" name="joining_date" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="facebook" class="mr-sm-2">Facebook URL
                                        :</label>
                                    <input id="facebook" type="text" name="facebook" class="form-control">
                                </div>

                            </div>

                            <div class="row">
                                 <div class="col">
                                    <label for="whatsapp" class="mr-sm-2">Whatsapp
                                        :</label>
                                    <input id="whatsapp" type="number" name="whatsapp" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="linkedin" class="mr-sm-2">Linkedin URL
                                        :</label>
                                    <input id="linkedin" type="text" name="linkedin" class="form-control">
                                </div>

                            </div>
                           
                            <div class="row">
                                <div class="col">
                                    <label for="image" class="mr-sm-2">image
                                        :</label><br>
                                    <input type="file" accept="image" name="image" >
                                </div>

                            </div>

                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </form>

                </div>
            </div>



        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection


@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>


@endsection
