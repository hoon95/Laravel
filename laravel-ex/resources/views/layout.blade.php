<body class="antialiased">
    <div class="p-4">
        <!-- 메뉴로 반복되는 부분 -->
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </div>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <!-- content라는 section에 양보 -->
            @yield('content')
        </div>
    </div>
</body>