@extends('kubpro::layouts.app')
@section('content')
    <div class="wizard">

        <form role="form" >

            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="step1">
                    <div class="align-self-baseline p-2 bd-highlight"><div class="alert alert-success "  role="alert">
                            {{__('installer.sucsess.message')}}<a href="{{asset('/')}}"> {{__('installer.homepage')}}</a>
                        </div></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </form>
    </div>
@stop
