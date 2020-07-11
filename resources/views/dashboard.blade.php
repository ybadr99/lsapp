@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a class="btn btn-primary mb-3" href="/posts/create">Create Post</a>
                    <h3>You Blog Post</h3>
                    @if (count($posts)>0)
                        
                    <table class="table table-striped">
                        <tr>
                            <td>Title</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <th>{{$post->title}}</th>
                            <th>
                                <a class="btn btn-secondary" href="/posts/{{$post->id}}/edit">Edit</a>
                            </th>
                            <th>
                                {!!Form::open(['action'=>['PostsController@destroy',$post->id] ,'method'=>'POST','class'=>'float-right' ])!!}    
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}} 
                                {!!Form::close()!!}
                            </th>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <p>you have no posts</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
