@extends('kubpro::layouts.app')
@section('content')
    <div class="wizard">
        <div class="wizard-inner">
            <div class="connecting-line"></div>
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="success">
                    <a href="#step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                    </a>
                </li>

                <li role="presentation"  class="active">
                    <a href="#step2" role="tab" title="Step 2" >
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a href="#step3"  role="tab" title="Step 3">
                        <span class="round-tab">
                            <i class="glyphicon glyphicon-wrench"></i>
                        </span>
                    </a>
                </li>

                <li role="presentation" class="disabled">
                    <a href="#complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-task"></i>
                            </span>
                    </a>
                </li>
            </ul>
        </div>

        <form role="form">
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="step1">
                    <ul class="list-group text-left">
                        @foreach($permissions['permissions'] as $permission)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $permission['folder'] }}
                                <b class="float-rig">{{ $permission['permission'] }}</b>
                                <b class="{{ $permission['isSet'] ? 'text-success' : 'text-danger' }} float-rig"> <i class="glyphicon glyphicon-{{ $permission['isSet'] ? 'ok-circle' : 'ban-circle' }}"> </i></b>


                            </li>
                        @endforeach


                    </ul>
                    @if ( ! isset($permissions['errors']))
                        <ul class="list-inline pull-right">
                            <li><a href="{{route('Kubpro::env')}}" type="button" class="btn btn-primary next-step">{{__('installer.continue')}}</a></li>
                        </ul>
                    @endif


                </div>



                <div class="clearfix"></div>
            </div>
        </form>
    </div>
@stop
