<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Input Pembayaran SPP</h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto">
        <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('spp.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="spp_id" class="block mb-2">Pilih Bulan / SPP:</label>
                    <select name="spp_id" id="spp_id" class="border p-2 w-full">
                        @foreach($spps as $spp)
                            <option value="{{ $spp->id }}" data-amount="{{ $spp->amount }}">
                                {{ $spp->month }} {{ $spp->year }} - {{ number_format($spp->amount) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="amount" class="block mb-2">Nominal yang dibayar:</label>
                    <input type="number" name="amount" id="amount" class="border p-2 w-full" min="0" step="1">
                </div>

                <div class="mb-4">
                    <label for="proof" class="block mb-2">Upload Bukti Transfer:</label>
                    <input type="file" name="proof" id="proof" class="border p-2 w-full" required>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Kirim Pembayaran</button>
            </form>
        </div>
    </div>

    <script>
        const sppSelect = document.getElementById('spp_id');
        const amountInput = document.getElementById('amount');

        function updateAmount() {
            const selectedOption = sppSelect.options[sppSelect.selectedIndex];
            amountInput.value = selectedOption.dataset.amount;
        }

        sppSelect.addEventListener('change', updateAmount);
        window.addEventListener('DOMContentLoaded', updateAmount);
    </script>
</x-app-layout>
