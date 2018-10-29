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
                <li role="presentation" class="active">
                    <a href="#step3"  role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-wrench"></i>
                            </span>
                    </a>
                </li>

                <li role="presentation" class="disabled">
                    <a href="#complete" role="tab" title="Complete">
                        <span class="round-tab">
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <form role="form" action="{{route('Kubpro::env.post')}}" method="post">
            @csrf
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="step1">
                    @if ($error)
                        <div class="alert  alert-danger " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            Error
                        </div>

                    @endif
                    <div class="form-group text-left">
                        <p>App Name</p>
                        <input type="text" class="form-control"  name="APP_NAME" value="Laravel" placeholder="Enter app name">
                    </div>
                    <div class="form-group  text-left">
                        <p >App Debug</p>
                        <select name="APP_DEBUG" class="form-control" >
                            <option value="true">True</option>
                            <option value="false">False</option>
                        </select>
                    </div>
                    <div class="form-group text-left">
                        <p>App Url</p>
                        <input type="url" name="APP_URL" required class="form-control" value="http://localhost" placeholder="Enter App url">
                    </div>

                    <ul class="list-inline pull-right">
                        <li><button  type="submit" class="btn btn-primary next-step">Continue</button></li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </form>
    </div>
@stop
