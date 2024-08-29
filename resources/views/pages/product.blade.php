@extends('layouts.app')

@section('content')




 

<section class="text-center py-16 ml-8 mr-8">
    <h2 class="text-3xl font-bold mb-8">Our Products</h2>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

      @foreach ($products as $item)
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://picsum.photos/300/200" alt="Product 1" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-bold">{{ $item->name }}</h3>
          <p class="text-gray-500">{{ $item->description }}.</p>
          <p class="text-lg font-bold">${{$item->price  }}</p>
        </div>
      </div>
      @endforeach

     

    

     

      

    </div>
  </section>
  
@endsection