@extends('layouts.admin')

@section('content')
    <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-xl font-bold mb-4 text-white">Edit Product</h2>
        <form action="{{ route('admin.products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-300 text-sm font-bold mb-2" for="name">
                    Product Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-700 text-gray-300 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-blue-500" id="name" type="text" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-300 text-sm font-bold mb-2" for="category_id">
                    Category
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-700 text-gray-300 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-blue-500" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }} class="bg-gray-800">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-300 text-sm font-bold mb-2" for="price">
                    Price
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-700 text-gray-300 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-blue-500" id="price" type="number" step="0.01" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline focus:ring focus:ring-blue-500" type="submit">
                    Update Product
                </button>
            </div>
        </form>
    </div>
@endsection
