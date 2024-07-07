<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Weight') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Luas Bangunan</th>
                                <th class="px-4 py-2">Jumlah Lampu</th>
                                <th class="px-4 py-2">Pendapatan</th>
                                <th class="px-4 py-2">Jumlah Anggota Keluarga</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($weight as $weight)
                            <tr>
                                <td class="border px-4 py-2">{{ $weight -> id }}</td>
                                <td class="border px-4 py-2">{{ $weight -> w1 }}</td>
                                <td class="border px-4 py-2">{{ $weight -> w2 }}</td>
                                <td class="border px-4 py-2">{{ $weight -> w3 }}</td>
                                <td class="border px-4 py-2">{{ $weight -> w4 }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('edit-weight', $weight -> id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
