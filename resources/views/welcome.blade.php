<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Task Tracker</title>

    <!-- Tailwind CSS (latest CDN with JIT) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom styles for glass effect -->
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .glass {
            background: rgba(255, 255, 255, 0.12);
            border-radius: 1rem;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.3);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">

    <div class="glass p-10 max-w-xl w-full text-white text-center">
        <h1 class="text-4xl font-bold mb-4">Welcome to <span class="text-blue-300">Task Tracker</span> 📝</h1>

        <!-- You can change to text-purple-300 or any Tailwind color -->
        <p class="text-black-200 text-lg mb-6 font-medium">
            A sleek and modern way to stay productive and track your tasks with ease.
        </p>

        <div class="flex justify-center gap-4">
            <a href="{{ route('login') }}" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg text-white font-semibold transition">
                Login
            </a>
            <a href="{{ route('register') }}" class="px-6 py-2 bg-green-600 hover:bg-green-700 rounded-lg text-white font-semibold transition">
                Register
            </a>
        </div>
    </div>

</body>
</html>
