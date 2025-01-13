<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
   
</head>
<body class="bg-gray-100 dark:bg-gray-800">
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-900 shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-7">
                    <a href="#" class="flex items-center py-4 px-2">
                        <span class="font-semibold text-gray-500 dark:text-gray-300 text-lg">Admin Dashboard</span>
                    </a>
                </div>
                <!-- Primary Nav -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('admin.categories.index') }}" 
                       class="py-4 px-2 font-semibold text-gray-500 dark:text-gray-300 hover:text-green-500 dark:hover:text-green-400 transition duration-300">
                        Categories
                    </a>
                    <a href="{{ route('admin.products.index') }}" 
                       class="py-4 px-2 font-semibold text-gray-500 dark:text-gray-300 hover:text-green-500 dark:hover:text-green-400 transition duration-300">
                        Products
                    </a>
                </div>
                <!-- Dark Mode Toggle -->
                <button 
                   
                    class="p-2 bg-gray-200 dark:bg-gray-700 rounded hover:bg-gray-300 dark:hover:bg-gray-600 transition duration-300">
                    🌙
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-6 px-4">
        @yield('content')
    </div>
</body>
</html>
