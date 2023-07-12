<h1>{{$heading;}}</h2>
@unless(count($listings) === 0)
@foreach($listings as $listing)
    <h2>{{$listing['title']}}</h2>
    <p>{{$listing['descriptions'] }} chked</p>
@endforeach

@else
<p>no listings </p>
@endunless
