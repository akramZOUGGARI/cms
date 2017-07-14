@extends('layouts.app')

@section('content')

            <div class="content">
              @if(Session::has('message'))
              <div  class="col-md-10 col-md-offset-1" >
                {{Session::get('message')}}
              </div>
              @endif
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
                        {{ link_to_route('post.edit','Edit',[$post->id],['class'=>'btn btn-primary'])}}

                       Delete
                      </td>
                    </tr>
                @endforeach
                </table>  
                 {{ link_to_route('post.create','Add new post',null,['class'=>'btn btn-primary'])}}                                 
            </div>
@endsection