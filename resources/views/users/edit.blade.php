<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit User</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('users.update', $user) }}">
            @csrf @method('PUT')
            <div class="mb-4">
                <label>Nama</label>
                <input type="text" name="name" class="border w-full p-2" value="{{ $user->name }}">
            </div>
            <div class="mb-4">
                <label>Email</label>
                <input type="email" name="email" class="border w-full p-2" value="{{ $user->email }}">
            </div>
            <div class="mb-4">
                <label>Role</label>
                <select name="role" class="border w-full p-2">
                    <option value="superadmin" @selected($user->role == 'superadmin')>Superadmin</option>
                    <option value="admin" @selected($user->role == 'admin')>Admin</option>
                    <option value="guru" @selected($user->role == 'guru')>Guru</option>
                    <option value="murid" @selected($user->role == 'murid')>Murid</option>
                </select>
            </div>
            <div class="mb-4">
                <label>Password (biarkan kosong jika tidak diubah)</label>
                <input type="password" name="password" class="border w-full p-2">
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
