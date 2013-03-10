@layout('master')

@section('container')

    {{ Form::open('/') }}
        <p> {{ Form::label('url', 'Type your URL to shorten:') }} </p>
        {{ Form::text('url') }}
        {{ $errors->first('url', '<p class="error">:message</p>')}}
        <div> {{ Form::submit('Shorten URL', array('class' => 'btn btn-success')) }} </div>
    {{ Form::close() }}

@endsection