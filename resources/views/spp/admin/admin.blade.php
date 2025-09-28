<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Verifikasi Pembayaran SPP</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <table class="table-auto w-full mt-2">
            <thead>
                <tr>
                    <th>Murid</th>
                    <th>Bulan</th>
                    <th>Nominal</th>
                    <th>Status</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->user->name }}</td>
                    <td>{{ $payment->spp->month }} {{ $payment->spp->year }}</td>
                    <td>{{ number_format($payment->spp->amount) }}</td>
                    <td>{{ ucfirst($payment->status) }}</td>
                    <td>
                        @if($payment->proof)
                            <a href="{{ asset('storage/'.$payment->proof) }}" target="_blank" class="text-blue-600 underline">Lihat</a>
                        @endif
                    </td>
                    <td>
                        @if($payment->status == 'pending')
                            <a href="{{ route('spp.verify', $payment->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Verifikasi</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
