@extends('layout')
@section('content')
@section('title' , 'CreatePicture')



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
Create New Picture


                

<!-- <div class="flex justify-center"> -->

<form method="post" action="{{route('pictures.update' , ['picture'=>$pic['id'] ])}}" class="form bg-white p-6 border-1">
@csrf
@method('PUT')
<div>
    <label for="picture" >Picture</label>
    <input id ="picture" name="picture" type="file" accept="image/*" value="{{$pic->picture}}">
    @error('picture')
    {{$message}}
    @enderror
</div>

<div>
    <label for="title" >Title</label>
    <input id ="title" name="title" type="text"
     
     value="{{$pic->title}}">
     @error('picture')
    {{$message}}
    @enderror
     

</div>


<div>
    <label for="description" >Description</label>
    <textarea id="description" name="description" rows="4" cols="5" >{{$pic->description}}</textarea>

</div>

<div>
    <button type="submit">Submit</button>
</div>





</form>

</div>





<!-- </div>                 -->

@endsection
@section('content2')    
<div class="flex items-center">
Create New Computer
                            </div>

                          
@endsection          

