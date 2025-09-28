<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Data Murid</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
            <table class="min-w-full table-auto border">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">Kelas</th>
                        <th class="border px-4 py-2">WA / Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $s)
                        <tr>
                            <td class="border px-4 py-2">{{ $s->name }}</td>
                            <td class="border px-4 py-2">{{ $s->kelas ?? '-' }}</td>
                            <td class="border px-4 py-2">{{ $s->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
