@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing <span class="pull-right"><a href="/dashboard" class="btn btn-default btn-xs">Go Back</a></span> </div>

                <div class="panel-body">
                    {!! Form::open(['action' => ['ListingsController@update',$listing->id],'method' => 'POST']) !!}
                        {{Form::bsText('name',$listing->name,['placeholder' => 'Company Name'])}}
                        {{Form::bsText('website',$listing->website,['placeholder' => 'Comany WebSite'])}}
                        {{Form::bsText('email',$listing->email,['placeholder' => 'Contact Email'])}}
                        {{Form::bsText('phone',$listing->phone,['placeholder' => 'Contact Phone'])}}
                        {{Form::bsText('address',$listing->address,['placeholder' => 'Bussiness Address'])}}
                        {{Form::bsTextArea('bio',$listing->bio,['placeholder' => 'About This Bussiness'])}}
                        {{Form::hidden('_method','PUT')}}
                        {{Form::bsSubmit('submit',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
</div>
@endsection