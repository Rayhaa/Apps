@extends('layouts.app')

@section('content')
<div class="bg-cover bg-top" style="height: 480px;" id="bg-main-content">
<div class="container mx-auto text-center text-white pt-4">
    <div class="font-bold text-2xl mt-24" s!tyle="padding-top: 80px">
        <h1>Enter Number Code : </h1>
        <div class="mt-4">
            <input type="text" class="text-base text-black rounded border border-gray-800 sm:max-w-sm bg-gray-200 placeholder-gray-500 lg:w-2/5 w-11/12 px-4 py-2 " placeholder="enter your number">
            <button class="-ml-20 text-white text-base bg-gray-800 rounded px-2 py-1">search</button>
        </div>
    </div>
</div>
</div>
@endsection()