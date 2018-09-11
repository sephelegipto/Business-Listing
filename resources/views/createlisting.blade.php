@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing</div>

            <div class="card-body">
                <div class="form-group">
                    {!!Form::open(['action' => 'ListingController@store','method' => 'POST'])!!} {{Form::bsText('name','',['placeholder' => 'Company
                    Name'])}} {{Form::bsText('website','',['placeholder' => 'Company Website'])}} {{Form::bsText('email','',['placeholder'
                    => 'Contact Email'])}} {{Form::bsText('phone','',['placeholder' => 'Contact Phone'])}} {{Form::bsText('address','',['placeholder'
                    => 'Business Address'])}} {{Form::bsTextArea('bio','',['placeholder' => 'About This Business'])}} {{Form::bsSubmit('submit')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
