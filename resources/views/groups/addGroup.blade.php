@extends('app')
@section('content')

<div class="container">
    <center><h1>Add Group</h1></center>
    {!! Form::open(array('url' => 'group/create')) !!}
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="row">
     {!! Form::text('name') !!}
       
    </div>
    <div class="row">
     {!! Form::submit('submit') !!}
       
    </div>
    
    
    {!! Form::close() !!}

</div>

@endsection

