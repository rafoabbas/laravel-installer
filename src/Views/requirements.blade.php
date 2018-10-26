@extends('kubpro::layouts.app')
@section('content')
    <div class="wizard">
        <div class="wizard-inner">
            <div class="connecting-line"></div>
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active">
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                        <span class="round-tab">
                            <i class="glyphicon glyphicon-folder-open"></i>
                        </span>
                    </a>
                </li>

                <li role="presentation" class="disabled">
                    <a href="#step2" role="tab" title="Step 2" >
                        <span class="round-tab">
                            <i class="glyphicon glyphicon-floppy-disk"></i>
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

                    @foreach($requirements['requirements'] as $type => $requirement)
                        <ul class="list-group text-left">
                            <li class="list-group-item d-flex justify-content-between align-items-center {{ $phpSupportInfo['supported'] ? 'success' : 'error' }}">
                                <strong>{{ ucfirst($type) }}</strong>
                                @if($type == 'php')
                                    <strong>
                                        <small>
                                            (version {{ $phpSupportInfo['minimum'] }} required)
                                        </small>
                                    </strong>
                                    <b class="{{ $phpSupportInfo['supported'] ? 'text-success' : 'text-danger' }} float-rig"> <i class="glyphicon glyphicon-{{ $phpSupportInfo['supported'] ? 'ok-circle' : 'ban-circle' }}"></i></b>

                                    <b class="text-success float-rig">{{ $phpSupportInfo['current'] }} &nbsp;</b>





                                @endif
                            </li>
                            @foreach($requirements['requirements'][$type] as $extention => $enabled)
                                <li class="list-group-item d-flex justify-content-between align-items-center {{ $enabled ? 'success' : 'error' }}">
                                    {{ $extention }}
                                    <b class="{{ $enabled ? 'text-success' : 'text-danger' }} float-rig"> <i class="glyphicon glyphicon-{{ $enabled ? 'ok-circle' : 'ban-circle' }}"></i></b>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                    @if ( ! isset($requirements['errors']) && $phpSupportInfo['supported'] )
                        <ul class="list-inline pull-right">
                            <li><a href="{{route('Kubpro::permissions')}}" type="button" class="btn btn-primary next-step">Continue</a></li>
                        </ul>
                    @endif

                </div>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
@stop
