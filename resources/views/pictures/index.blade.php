@extends('layout')
@section('content')



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
Pictures page

<div class='mt-8'>
    <ul>
    @foreach($pictures as $pic)
    
     <a href="{{route('pictures.show' , ['picture'=>$pic['id'] ]  )}}">
    <li> {{  $pic['title']    }} </li>
     </a>
    @endforeach

    </ul>
 </div> 



                </div>

@endsection
@section('content2')    
<div class="flex items-center">
                                Pictures page
                            </div>

                          
@endsection          

@section('title' , 'Pictures')