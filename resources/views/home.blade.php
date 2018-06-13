@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quae id sint? Deleniti temporibus tenetur doloribus ducimus mollitia nemo autem minus nulla eaque totam et accusamus consequatur, illum illo repellat.
</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection