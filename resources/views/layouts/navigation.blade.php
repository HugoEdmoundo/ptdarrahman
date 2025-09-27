<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Left: Logo & Menu -->
            <div class="flex items-center space-x-8">
                <a href="{{ route('dashboard') }}">
                    <img src="https://res.cloudinary.com/dunynusuh/image/upload/v1755771459/Logo-Ar-Rahman_fm4mgg.png" 
                         alt="Logo" 
                         class="h-9 sm:h-10 w-auto object-contain">
                </a>

                <!-- Links -->
                <div class="hidden sm:flex space-x-4">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>

                    @php
                        use App\Http\Controllers\AkademikController;
                        $role = auth()->user()->role;
                        $userName = auth()->user()->name;
                        $akademik = AkademikController::getAkademikData();
                    @endphp

                    {{-- Superadmin/Admin --}}
                    @if($role === 'superadmin' || $role === 'admin')
                        <x-nav-link :href="route('cms')" :active="request()->routeIs('cms')">CMS</x-nav-link>
                        <x-nav-link :href="route('pelanggaran')" :active="request()->routeIs('pelanggaran')">Pelanggaran</x-nav-link>
                        <x-nav-link :href="route('inventaris')" :active="request()->routeIs('inventaris')">Inventaris</x-nav-link>
                        <x-nav-link :href="route('kunjungan')" :active="request()->routeIs('kunjungan')">Kunjungan</x-nav-link>
                        <x-nav-link :href="route('akademik.index')" :active="request()->routeIs('akademik.index')">Akademik</x-nav-link>
                        <x-nav-link :href="route('rapor')" :active="request()->routeIs('rapor')">Rapor</x-nav-link>
                        <x-nav-link :href="route('absen')" :active="request()->routeIs('absen')">Absen</x-nav-link>

                    {{-- Guru --}}
                    @elseif($role === 'guru')
                        @if(isset($akademik[$userName]))
                            <x-dropdown align="left" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-150 ease-in-out">
                                        Akademik
                                        <svg class="ml-1 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    @foreach($akademik[$userName] as $m)
                                        <x-dropdown-link :href="route('akademik.guru.show', ['mapel' => urlencode($m)])">
                                            {{ $m }}
                                        </x-dropdown-link>
                                    @endforeach
                                </x-slot>
                            </x-dropdown>
                        @endif
                        
                        <x-nav-link :href="route('absen.guru')" :active="request()->routeIs('absen.guru')">Absen</x-nav-link>
                        
                        @if(in_array($userName, ['Makhrozal Mizan', 'Murtado Tumari']))
                            <x-nav-link :href="route('inventaris.guru')" :active="request()->routeIs('inventaris.guru')">Inventaris</x-nav-link>
                        @endif
                        
                        @if($userName === 'Murtado Tumari')
                            <x-nav-link :href="route('pelanggaran.guru')" :active="request()->routeIs('pelanggaran.guru')">Pelanggaran</x-nav-link>
                        @endif

                    {{-- Murid --}}
                    @elseif($role === 'murid')
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-150 ease-in-out">
                                    Akademik
                                    <svg class="ml-1 h-4 w-4 fill-current" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                @foreach($akademik as $guru => $mapelArray)
                                    @foreach($mapelArray as $m)
                                        <x-dropdown-link :href="route('akademik.murid.show', ['mapel' => urlencode($m)])">
                                            {{ $m }} - {{ $guru }}
                                        </x-dropdown-link>
                                    @endforeach
                                @endforeach
                            </x-slot>
                        </x-dropdown>
                        
                        <x-nav-link :href="route('pelanggaran.murid')" :active="request()->routeIs('pelanggaran.murid')">Pelanggaran</x-nav-link>
                        <x-nav-link :href="route('absen.murid')" :active="request()->routeIs('absen.murid')">Absen</x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Right: user dropdown -->
            <div class="hidden sm:flex sm:items-center space-x-4">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-150 ease-in-out">
                            {{ Auth::user()->name }}
                            <svg class="ml-1 h-4 w-4 fill-current" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>