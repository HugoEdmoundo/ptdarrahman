<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Selamat datang, {{ $user->name }}!</h1>
                <p class="text-gray-600">Ini dashboard Superadmin</p>
                
                <!-- Informasi user -->
                <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                    <p><strong>Role:</strong> {{ $user->role }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Login pada:</strong> {{ now()->format('d F Y H:i:s') }}</p>
                </div>

                <!-- Quick actions untuk superadmin -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="{{ route('cms') }}" class="bg-blue-100 p-4 rounded-lg hover:bg-blue-200 transition">
                        <h3 class="font-semibold text-blue-800">CMS Management</h3>
                        <p class="text-sm text-blue-600">Kelola konten sistem</p>
                    </a>
                    
                    <a href="{{ route('akademik.index') }}" class="bg-green-100 p-4 rounded-lg hover:bg-green-200 transition">
                        <h3 class="font-semibold text-green-800">Akademik</h3>
                        <p class="text-sm text-green-600">Kelola data akademik</p>
                    </a>
                    
                    <a href="{{ route('pelanggaran') }}" class="bg-red-100 p-4 rounded-lg hover:bg-red-200 transition">
                        <h3 class="font-semibold text-red-800">Pelanggaran</h3>
                        <p class="text-sm text-red-600">Monitor pelanggaran siswa</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>