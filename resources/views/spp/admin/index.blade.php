<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Dashboard SPP - Admin</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
            <table class="min-w-full table-auto border">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Murid</th>
                        <th class="border px-4 py-2">Bulan</th>
                        <th class="border px-4 py-2">Nominal</th>
                        <th class="border px-4 py-2">Status</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $p)
                        <tr>
                            <td class="border px-4 py-2">{{ $p->user->name }}</td>
                            <td class="border px-4 py-2">{{ $p->spp->month }} {{ $p->spp->year }}</td>
                            <td class="border px-4 py-2">{{ number_format($p->spp->amount) }}</td>
                            <td class="border px-4 py-2">{{ ucfirst($p->status) }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('spp.verify', $p->id) }}" class="text-blue-600">Verifikasi</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
