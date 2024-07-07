<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Alternative') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('create-alternative') }}" class="ms-3">Tambah Alternatif</a>
                    <br>
                    <br>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Nama</th>
                                <th class="px-4 py-2">Luas Bangunan</th>
                                <th class="px-4 py-2">Jumlah Lampu</th>
                                <th class="px-4 py-2">Pendapatan</th>
                                <th class="px-4 py-2"> Jumlah Anggota Keluarga</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alternatives as $alternative)
                            <tr>
                                <td class="border px-4 py-2">{{ $alternative -> id }}</td>
                                <td class="border px-4 py-2">{{ $alternative -> nama }}</td>
                                <td class="border px-4 py-2">{{ $alternative -> luas_bangunan }}</td>
                                <td class="border px-4 py-2">{{ $alternative -> jumlah_penerangan }}</td>
                                <td class="border px-4 py-2">Rp. {{ $alternative -> pendapatan }}</td>
                                <td class="border px-4 py-2">{{ $alternative -> jumlah_anggota_keluarga }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('edit-alternative', $alternative -> id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                    <form action="{{ route('destroy', $alternative->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <table class="table-auto w-full">
                        <h1>Min Max</h1>
                        <br>
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Luas Bangunan</th>
                                <th class="px-4 py-2">Jumlah Lampu</th>
                                <th class="px-4 py-2">Pendapatan</th>
                                <th class="px-4 py-2"> Jumlah Anggota Keluarga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($minmaxs as $minmax)
                            <tr>
                                <td class="border px-4 py-2">{{ $minmax -> M1 }}</td>
                                <td class="border px-4 py-2">{{ $minmax -> M2 }}</td>
                                <td class="border px-4 py-2">{{ $minmax -> M3 }}</td>
                                <td class="border px-4 py-2">{{ $minmax -> M4 }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
