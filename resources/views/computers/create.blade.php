@extends('layout')
@section('content')
@section('title' , 'Create')



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
Create New Computer


                

<!-- <div class="flex justify-center"> -->

<form method="post" action="" class="form bg-white p-6 border-1">
<div>
    <label for="computer-name" >Computer Name</label>
    <input id ="computer-name" name="computer-name" type="text">
</div>

<div>
    <label for="computer-origin" >Computer Origin</label>
    <input id ="computer-origin" name="computer-origin" type="text">
</div>


<div>
    <label for="computer-price" >Computer Price</label>
    <input id ="computer-price" name="computer-price" type="text">
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

