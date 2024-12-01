<x-layoutdb>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:user>{{ $user->name }}</x-slot:user>
    <x-batas>{{ $title }}</x-batas>
    <x-modals :playlists="$playlists" />
    <div class="w-full h-full bg-[#C5DFF8] mt-2 rounded-lg p-4">
        <div class="flex items-center p-8">
            <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center">
            <!-- Placeholder for profile picture -->
            </div>
            <h1 class="ml-4 text-xl font-semibold text-blue-800">Hai, {{ $user->name }}</h1>
        </div>

        <div class="w-full flex p-3">
            <div class="w-1/2 p-4">
                <div class="mb-4 text-left">
                    <label for="username" class="block text-[#4A55A2] font-bold mb-1">Username</label>
                    <input type="username" name="" value="{{ $user->name }}" id="username" class="w-full px-4 py-2 rounded-lg bg-white text-black focus:outline-none">
                </div>
                <div class="mb-4 text-left">
                    <label for="email" class="block text-[#4A55A2] font-bold mb-1">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" id="email" class="w-full px-4 py-2 rounded-lg bg-white text-black focus:outline-none">
                </div>
                <div class="mb-4 text-left">
                    <label for="password" class="block text-[#4A55A2] font-bold mb-1">Password</label>
                    <input type="password" name="password" value="********" id="password" class="w-full px-4 py-2 rounded-lg bg-white text-black focus:outline-none">
                </div>
            </div>
            
            <div class="w-1/2 p-4">
                <div class="col-span-1 sm:col-span-2">
                    <label for="motivation" class="block text-[#4A55A2] font-bold mb-1">Motivasi</label>
                    <textarea id="motivation" rows="8" class="w-full px-3 py-2 rounded-lg bg-white focus:outline-none">{{ $user->motivasi }}</textarea>
                </div>
            </div>
        </div>

        <div class="w-full flex justify-center">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 font-bold">
                Submit 
            </button>
        </div>
        
    </div>
</x-layoutdb>