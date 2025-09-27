    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-2xl font-bold mb-4">Selamat datang, {{ $user->name }}!</h1>
                    <p class="text-gray-600">Ini dashboard Guru</p>
                    
                    <!-- Informasi user -->
                    <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                        <p><strong>Role:</strong> {{ $user->role }}</p>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>Login pada:</strong> {{ now()->format('d F Y H:i:s') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>