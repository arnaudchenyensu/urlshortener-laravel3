@layout('master')

@section('container')

    <p> Here is your shorten URL : </p>
    <p> {{ HTML::link($shortened) }} </p>
    {{ HTML::link_to_route('new_url', 'Create a new one', '', array('class'=>'btn btn-success')) }}
@endsection