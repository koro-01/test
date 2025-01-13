@extends('layouts.admin')

@section('content')
    <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-white">Product Details</h2>
            <a href="{{ route('admin.products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add Product
            </a>
        </div>
        @if(session('success'))
            <div class="bg-green-800 border border-green-600 text-green-300 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-600 bg-gray-700 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">
                        ID
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-600 bg-gray-700 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">
                        Category
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-600 bg-gray-700 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">
                        Name
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-600 bg-gray-700 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">
                        Price
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-600 bg-gray-700 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-600 bg-gray-700 text-sm text-gray-300">
                            {{ $product->id }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-600 bg-gray-700 text-sm text-gray-300">
                            {{ $product->category->name }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-600 bg-gray-700 text-sm text-gray-300">
                            {{ $product->name }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-600 bg-gray-700 text-sm text-gray-300">
                            {{ number_format($product->price, 2) }}$
                        </td>
                        <td class="px-5 py-5 border-b border-gray-600 bg-gray-700 text-sm">
                            <a href="{{ route('admin.products.edit', $product) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
