@layout('master')

@section('container')

    {{ Form::open('/') }}
        {{ Form::label('url', 'Type your URL to shorten:') }}
        {{ Form::text('url') }}
        {{ Form::submit('Shorten URL') }}
    {{ Form::close() }}

@endsection