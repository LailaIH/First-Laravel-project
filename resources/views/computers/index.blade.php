@extends('layout')
@section('content')



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
Computers page

<div class='mt-8'>
    <ul>
    @foreach($computers as $com)
    <a href="{{ route('computers.show' , ['computer'=>$com['id'] ] ) }}">
    <li> {{  $com['name']    }} </li> </a>
    @endforeach

    </ul>
 </div> 



                </div>

@endsection
@section('content2')    
<div class="flex items-center">
                                Computers page
                            </div>

                          
@endsection          

@section('title' , 'Computers')