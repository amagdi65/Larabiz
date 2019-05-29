@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing <span class="pull-right"><a href="/dashboard" class="btn btn-default btn-xs">Go Back</a></span></div>

                <div class="panel-body">
                    {!! Form::open(['action' => 'ListingsController@store','method' => 'POST']) !!}
                        {{Form::bsText('name','',['placeholder' => 'Company Name'])}}
                        {{Form::bsText('website','',['placeholder' => 'Comany WebSite'])}}
                        {{Form::bsText('email','',['placeholder' => 'Contact Email'])}}
                        {{Form::bsText('phone','',['placeholder' => 'Contact Phone'])}}
                        {{Form::bsText('address','',['placeholder' => 'Bussiness Address'])}}
                        {{Form::bsTextArea('bio','',['placeholder' => 'About This Bussiness'])}}
                        {{Form::bsSubmit('submit',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
</div>
@endsection