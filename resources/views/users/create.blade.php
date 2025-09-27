<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Tambah User</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="mb-4">
                <label>Nama</label>
                <input type="text" name="name" class="border w-full p-2">
            </div>
            <div class="mb-4">
                <label>Email</label>
                <input type="email" name="email" class="border w-full p-2">
            </div>
            <div class="mb-4">
                <label>Role</label>
                <select name="role" class="border w-full p-2">
                    <option value="superadmin">Superadmin</option>
                    <option value="admin">Admin</option>
                    <option value="guru">Guru</option>
                    <option value="murid">Murid</option>
                </select>
            </div>
            <div class="mb-4">
                <label>Password</label>
                <input type="password" name="password" class="border w-full p-2">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
