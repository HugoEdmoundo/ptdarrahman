<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Dashboard SPP - Murid</h2>
    </x-slot>

    <div class="py-6 max-w-5xl mx-auto">
        <a href="{{ route('spp.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Input Pembayaran</a>

        <table class="min-w-full table-auto border">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Bulan</th>
                    <th class="border px-4 py-2">Nominal</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Bukti</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $p)
                    <tr>
                        <td class="border px-4 py-2">{{ $p->spp->month }} {{ $p->spp->year }}</td>
                        <td class="border px-4 py-2">{{ number_format($p->spp->amount) }}</td>
                        <td class="border px-4 py-2">{{ ucfirst($p->status) }}</td>
                        <td class="border px-4 py-2">
                            @if($p->proof)
                                <a href="{{ asset('storage/'.$p->proof) }}" target="_blank" class="text-blue-600">Lihat</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
