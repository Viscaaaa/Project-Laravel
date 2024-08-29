@extends('layouts.app')

@section('content')
<section class="text-center py-16 ml-8 mr-8">
    <h2 class="text-3xl font-bold mb-8">Our Products</h2>
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://picsum.photos/300/200" alt="Product 1" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-bold">Product 1</h3>
          <p class="text-gray-500">Deskripsi produk singkat dan menarik.</p>
          <p class="text-lg font-bold">$99.99</p>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://picsum.photos/300/200" alt="Product 2" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-bold">Product 2</h3>
          <p class="text-gray-500">Deskripsi produk singkat dan menarik.</p>
          <p class="text-lg font-bold">$149.99</p>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://picsum.photos/300/200" alt="Product 2" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-bold">Product 2</h3>
          <p class="text-gray-500">Deskripsi produk singkat dan menarik.</p>
          <p class="text-lg font-bold">$149.99</p>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://picsum.photos/300/200" alt="Product 2" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-bold">Product 2</h3>
          <p class="text-gray-500">Deskripsi produk singkat dan menarik.</p>
          <p class="text-lg font-bold">$149.99</p>
        </div>
      </div>

      <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="https://picsum.photos/300/200" alt="Product 2" class="w-full">
        <div class="p-4">
          <h3 class="text-xl font-bold">Product 2</h3>
          <p class="text-gray-500">Deskripsi produk singkat dan menarik.</p>
          <p class="text-lg font-bold">$149.99</p>
        </div>
      </div>

    </div>
  </section>
  
@endsection