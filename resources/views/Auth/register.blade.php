<x-layoutat>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- {{ route('register') }} --}}
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-4 text-left">
            <label for="name" class="block text-black font-medium mb-1">name</label>
            <input type="text" name="name" id="name"  class="w-full px-4 py-2 rounded-lg bg-[#C5DFF8] text-black focus:outline-none">
        </div>
        <div class="mb-4 text-left">
            <label for="email" class="block text-black font-medium mb-1">Email</label>
            <input type="email" name="email" id="email" class="w-full px-4 py-2 rounded-lg bg-[#C5DFF8] text-black focus:outline-none">
        </div>
        <div class="mb-6 text-left flex space-x-4">
            <div class="w-1/2">
                <label for="password" class="block text-black font-medium mb-1">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 rounded-lg bg-[#C5DFF8] text-black focus:outline-none">
            </div>
            <div class="w-1/2">
                <label for="password_confirmation" class="block text-black font-medium mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-2 rounded-lg bg-[#C5DFF8] text-black focus:outline-none">
            </div>
        </div>
        <button type="submit" class="w-40 py-2 mt-6 rounded-lg bg-[#4A55A2] text-white font-semibold hover:bg-[#3e4890]">Daftar</button>
    </form>
    <p class="mt-6 text-sm text-gray-700">Sudah Punya Akun?
        <a href="{{ url('/login') }}" class="text-[#4A55A2] font-semibold hover:underline">Login disini!</a>
    </p>
    <a href="{{ url('/') }}" class="mt-6 text-sm text-[#4A55A2]"><-- Gak jadi</a>
</x-layoutat>