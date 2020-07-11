@extends('layouts.app')

@section('content')
    <h2> List of all Posts</h2>
    <hr>
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                    @if (count($posts)>0)
                        @foreach($posts as $post)
                            <div class="col-md-4">
                                <div class="card mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-dark text-white">
                                            {{$post->title}}
                                    </div>
                                    <div class="card-body">
                                            <div class="card-title">
                                                <h4> {{$post->title}}</h4>
                                            </div>
                                            <div class="card-text">
                                                {!!$post->body!!}
                                            </div>
                                            <small> written on {{$post->created_at}} </small>
                                        <hr>
                                    <a href="/posts/{{$post->id}}" class="btn btn-primary"> Show More</a>
                                    </div>    
                                </div>
                        </div>
                        @endforeach
                        
                    @else
                        <h3>No posts found</h3>
                    @endif
                </div>
 
            
        </div>

        <div class="col-md-3">
                <div class="card mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-info text-white"> Stats.</div>
                        <div class="card-body">
                        
                        <p class="card-text"> All Posts: {{$count}}</p>
                        </div>
                    </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>

@endsection