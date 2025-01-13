@extends('layouts.admin')

@section('content')
    <div class="bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-white">Category Details</h2>
            <a href="{{ route('admin.categories.create') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                Add Category
            </a>
        </div>
        @if(session('success'))
            <div class="bg-green-700 border border-green-500 text-green-200 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">
                        ID
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">
                        Name
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-900 text-left text-xs font-semibold text-gray-300 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-700 bg-gray-800 text-sm text-gray-300">
                            {{ $category->id }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-700 bg-gray-800 text-sm text-gray-300">
                            {{ $category->name }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-700 bg-gray-800 text-sm text-gray-300 flex space-x-2">
                            <!-- Edit Button -->
                            <a href="{{ route('admin.categories.edit', $category) }}" 
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" 
                                        onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
