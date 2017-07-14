@extends('layouts.app')

@section('content')

            <div class="content">
                <table class='table'>
                    <tr>
                      <td>title</td>
                      <td>Action</td>
                    </tr>
                @foreach ($posts as $post)
                    <tr>
                      <td>
                         <p>This is user {{ $post->title}}</p>
                      </td>
                      <td>
                       Edit Delete
                      </td>
                    </tr>
                @endforeach
                </table>  
                 {{ link_to_route('posts.create','Add new post',null,['class'=>'btn btn-primary'])}}                                 
            </div>
@endsection