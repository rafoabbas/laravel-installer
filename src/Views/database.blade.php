@extends('kubpro::layouts.app')
@section('content')
    <div class="wizard">
        <div class="wizard-inner">
            <div class="connecting-line"></div>
            <ul class="nav nav-tabs" role="tablist">



                <li role="presentation" class="success">
                    <a href="#step1"  role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                    </a>
                </li>

                <li role="presentation" class="success">
                    <a href="#step2" role="tab" title="Step 2" >
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                    </a>
                </li>
                <li role="presentation" class="success">
                    <a href="#step3"  role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-wrench"></i>
                            </span>
                    </a>
                </li>

                <li role="presentation" class="active">
                    <a href="#complete" role="tab" title="Complete">
                        <span class="round-tab">
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <form role="form" action="{{route('Kubpro::database.post')}}" method="post">
            @csrf
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="step1">
                    @if ($error)
                        <div class="alert  alert-danger " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {{$message}}
                        </div>

                    @endif

                    <div class="form-group  text-left">
                        <p >Database Connection</p>
                        <select  name="DB_CONNECTION" id="connection" class="form-control" >
                            <option value="mysql" selected>mysql</option>
                            <option value="pgsql">pgsql</option>
                            <option value="sqlsrv">sqlsrv</option>
                        </select>
                    </div>


                    <div class="form-group text-left">
                        <p>Database Host</p>
                        <input type="text" name="DB_HOST" required id="host" value="127.0.0.1" class="form-control" placeholder="Enter Database Host">
                    </div>
                    <div class="form-group text-left">
                        <p>Database Port</p>
                        <input type="text" name="DB_PORT" required id="port" value="3306" class="form-control" placeholder="Enter Database Post">
                    </div>

                    <div class="form-group text-left">
                        <p>Database Name</p>
                        <input type="text" name="DB_DATABASE" required  value="homestead" class="form-control" placeholder="Enter Database Name">
                    </div>
                    <div class="form-group text-left">
                        <p>Database Username</p>
                        <input type="text" name="DB_USERNAME" required  value="homestead" class="form-control" placeholder="Enter Database Username">
                    </div>
                    <div class="form-group text-left">
                        <p>Database Password</p>
                        <input type="password" name="DB_PASSWORD"   value="secret" class="form-control" placeholder="Enter Database Password">
                    </div>


                    <ul class="list-inline pull-right">
                        <li><button  type="submit" class="btn btn-primary next-step">Save</button></li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </form>
    </div>
@stop
@section('js')
    <script src='{{asset('installer/js/index.js')}}'></script>
@stop
