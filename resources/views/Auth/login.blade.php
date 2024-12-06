<x-layoutat>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- {{ route('login') }} --}}
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4 text-left">
            <label for="email" class="block text-black font-medium mb-1">email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2  rounded-lg bg-[#C5DFF8] text-black focus:outline-none" required>
        </div>
        <div class="mb-6 text-left">
            <label for="password" class="block text-black font-medium mb-1">password</label>
            <input type="password" id="password" name="password" class="w-full px-4 py-2  rounded-lg bg-[#C5DFF8] text-black focus:outline-none" required>
        </div>
        <button type="submit" class="w-40 py-2 mt-6 rounded-lg bg-[#4A55A2] text-white font-semibold hover:bg-[#3e4890]">Login</button>
    </form>
    </form>
    <p class="mt-6 text-sm text-gray-700">Sudah Punya Akun? 
        <a href="{{ url('/register') }}" class="text-[#4A55A2] font-semibold hover:underline">Ayo Daftar!</a>
    </p>
    <a href="{{ url('/') }}" class="mt-6 text-sm text-[#4A55A2]"><-- Gak jadi</a>

</x-layoutat>