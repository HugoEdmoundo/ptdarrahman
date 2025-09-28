<x-app-layout>
    <x-slot name="header">Laporan SPP</x-slot>

    <form class="p-4 flex space-x-4" method="GET" action="{{ route('spp.report') }}">
        <select name="month" class="border px-2 py-1">
            <option value="">Pilih Bulan</option>
            @foreach(['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'] as $m)
                <option value="{{ $m }}" {{ request('month')==$m?'selected':'' }}>{{ $m }}</option>
            @endforeach
        </select>
        <input type="number" name="year" placeholder="Tahun" value="{{ request('year') }}" class="border px-2 py-1">
        <button type="submit" class="bg-blue-500 text-white px-4 py-1 rounded">Filter</button>
        <a href="{{ route('spp.export','excel') }}?month={{ request('month') }}&year={{ request('year') }}" class="bg-green-500 text-white px-4 py-1 rounded">Export Excel</a>
        <a href="{{ route('spp.export','pdf') }}?month={{ request('month') }}&year={{ request('year') }}" class="bg-red-500 text-white px-4 py-1 rounded">Export PDF</a>
    </form>

    <div class="p-4">
        <table class="w-full table-auto border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">Murid</th>
                    <th class="px-4 py-2">Bulan</th>
                    <th class="px-4 py-2">Tahun</th>
                    <th class="px-4 py-2">Nominal</th>
                    <th class="px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $p)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $p->user->name }}</td>
                        <td class="px-4 py-2">{{ $p->spp->month }}</td>
                        <td class="px-4 py-2">{{ $p->spp->year }}</td>
                        <td class="px-4 py-2">{{ number_format($p->spp->amount,0,',','.') }}</td>
                        <td class="px-4 py-2">{{ ucfirst($p->status) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
