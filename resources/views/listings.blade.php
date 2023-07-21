@extends('layout')

@section('content')
<h1>{{$heading;}}</h2>

@unless(count($listings) === 0)

@foreach($listings as $listing)
    <a href="/listings/{{$listing['id']}}">
        <h2>{{$listing['title']}}</h2>
    </a>
    <p>{{$listing['description'] }}</p>
@endforeach

@else
<p>no listings found</p>
@endunless

@endsection