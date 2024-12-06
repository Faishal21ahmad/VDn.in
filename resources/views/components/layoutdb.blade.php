<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $title }}</title>
    <style>
        /* Menyembunyikan sidebar normal pada layar kecil */
        @media (max-width: 1024px) {
            #sidebarNormal {
                display: none;
            }
        }

        /* Menampilkan sidebar normal pada layar besar */
        @media (min-width: 1025px) {
            #sidebarNormal {
                display: block;
            }

            #sidebarMini {
                display: none; /* Disembunyikan pada desktop */
            }
        }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body">
    @if ($errors->any())
        <div id="alert" class="fixed top-4 right-4 bg-red-500 text-white px-6 py-4 rounded-md shadow-lg z-50">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="font-semibold">Error:</span>
            </div>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button onclick="closeAlert()" class="absolute top-2 right-2 text-white hover:text-gray-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    @endif
    @if (session('success'))
        <div id="alert" class="fixed top-4 right-4 bg-green-500 text-white px-6 py-4 rounded-md shadow-lg z-50">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="font-semibold">Success:</span>
            </div>
            <p class="mt-2">{{ session('success') }}</p>
            <button onclick="closeAlert()" class="absolute top-2 right-2 text-white hover:text-gray-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    @endif
    <!-- Navbar -->
    <x-navbar :data="$user"  />
    <!-- Main Layout -->
    <div class="mx-auto max-w-[1722px] h-full p-4 mt-14 flex gap-2">
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>
        <!-- Main Content -->
        <div class="w-full min-w-[360px] flex-col pr-2">
            {{ $slot }}
        </div>
        
    </div>

    <script>
        function closeAlert() {
            document.getElementById('alert').style.display = 'none';
        }

        // Auto-close the alert after 5 seconds
        setTimeout(function() {
            closeAlert();
        }, 5000);
    </script>  
    
</body>
</html>