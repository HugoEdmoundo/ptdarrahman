<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Verifikasi Pembayaran</h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto">
        <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
            <p><strong>Murid:</strong> {{--{{ $payment->user->name }}--}}</p>
            <p><strong>Bulan:</strong> {{--{{ $payment->spp->month }} {{ $payment->spp->year }}--}}</p>
            <p><strong>Nominal:</strong> {{--{{ number_format($payment->spp->amount) }}--}}</p>
            <p><strong>Status:</strong> {{--{{ ucfirst($payment->status) }}--}}</p>
            <p><strong>Bukti:</strong> <a {{--href="{{ asset('storage/'.$payment->proof) }}"--}} target="_blank" class="text-blue-600">Lihat</a></p>

            <form action="{{--{{ route('spp.approve', $payment->id) }}--}}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded mt-4">Approve</button>
            </form>

            <form action="{{--{{ route('spp.reject', $payment->id) }}--}}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mt-4">Reject</button>
            </form>
        </div>
    </div>
</x-app-layout>
