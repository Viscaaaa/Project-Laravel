@extends('layouts.app')

@section('title', 'Project')

@section('content')

    <!-- Video Section -->
    <section class="bg-black w-full h-[700px] flex justify-center items-center">
        
            <video class="w-1/2 h-[700px]  flex justify-center items-center" autoplay loop muted>
                <source src="{{ asset('videos/vid1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        
    </section>

    <!-- Products/Services Section -->
    <section class="container mx-auto  px-6 flex">
        <div class="flex items-center justify-center"><div class="w-1/2"><h2 class="text-5xl font-bold text-gray-800 mb-6">Toffin For Personal To Professional</h2> 
            <p class="text-light text-gray-800">Beragam pilihan peralatan dan bahan baku merek lokal hingga kelas dunia untuk di rumah, kantor, kafe serta restoran. </p></div>
        </div>
        
        <div class="flex-grow grid grid-cols-2">
            <div class=" flex items-center justify-center bg-gray-100 hover:bg-gray-200 p-4 text-center mr-1 h-[300px]">
                <div class=""><h3 class="text-xl font-semibold text-gray-800">Product 1</h3>
                    <p class="text-gray-600">Short description of the product.</p></div>
                
            </div>
            <div class=" flex items-center justify-center bg-gray-100 hover:bg-gray-200 p-4 text-center h-[300px]">
                <div><h3 class="text-xl font-semibold text-gray-800">Product 1</h3>
                    <p class="text-gray-600">Short description of the product.</p></div>
            </div>
            <div class="flex items-center justify-center bg-gray-100 hover:bg-gray-200 p-4 text-center mt-1 mr-1 h-[300px]">
                <div><h3 class="text-xl font-semibold text-gray-800">Product 1</h3>
                    <p class="text-gray-600">Short description of the product.</p></div>
            </div>
            <div class="flex items-center justify-center bg-gray-100 hover:bg-gray-200 p-4 text-center mt-1  h-[300px]">
                <div><h3 class="text-xl font-semibold text-gray-800">Product 1</h3>
                    <p class="text-gray-600">Short description of the product.</p></div>
            </div>
        </div>
    </section>

@endsection
