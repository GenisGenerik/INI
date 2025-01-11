<x-komponen.cabanglayout>
    @hasrole('jayusman')
    <form method="GET" action="{{ route('user') }}" class="mb-4">
        <label for="cabang_id" class="text-white font-medium mr-2">Filter by Cabang:</label>
<<<<<<< HEAD
        <select name="cabang_id" id="cabang_id" class="bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 text-white px-4 py-2 rounded-lg font-medium shadow-md hover:opacity-90 transition-transform duration-300">
=======
        <select name="cabang_id" id="cabang_id" class="bg-gray-600 text-white px-4 py-2 rounded-lg font-medium shadow-md hover:bg-gray-500 transition-transform duration-300">
>>>>>>> 3ed3ae01fdd56628918d4e0dbd4a9a34f2e860ba
            <option value="">-- Select Cabang --</option>
            @foreach ($cabangs as $cabang)
                <option value="{{ $cabang->id }}" {{ request('cabang_id') == $cabang->id ? 'selected' : '' }}>{{ $cabang->nama }}</option>
            @endforeach
        </select>
<<<<<<< HEAD
        <button type="submit" class="bg-gradient-to-r from-blue-500 to-green-400 text-white px-4 py-2 rounded-lg font-medium shadow-md hover:opacity-90 transition-transform duration-300 transform hover:scale-105 ml-2">Filter</button>
    </form>
    @endhasrole

    <button onclick="window.location.href='{{ route('user.create') }}'"
        class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-2 rounded-lg font-medium shadow-md hover:opacity-90 transition-transform duration-300 transform hover:scale-105 flex items-center">
        <span class="text-xl font-bold mr-2"></span> Tambah User
    </button>

    <div class="overflow-x-auto mt-6">
        <table class="min-w-full bg-gradient-to-r from-white to-white rounded-lg shadow-md">
            <thead class="bg-gradient-to-r from-blue-500 to-blue-300 border-b">
                <tr>
                    <th class="py-3 px-6 text-left text-black font-bold">No</th>
                    <th class="py-3 px-6 text-left text-black font-bold">Nama User</th>
                    @hasrole('jayusman')
                    <th class="py-3 px-6 text-left text-black font-bold">Nama Cabang</th>
                    @endhasrole
                    <th class="py-3 px-6 text-left text-black font-bold">Role</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-blue">
                @foreach ($users as $index => $user)
                    <tr class="hover:bg-gradient-to-r from-blue-50 to-green-50">
                        <td class="py-3 px-6">{{ $index + 1 }}</td>
                        <td class="py-3 px-6">{{ $user->name }}</td>
                        @hasrole('jayusman')
                        <td class="py-3 px-6">{{ $user->cabang->nama ?? '-' }}</td>
                        @endhasrole
                        <td class="py-3 px-6">{{ $user->roles->pluck('name')->join(', ') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $users->links() }}
    </div>
=======
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg font-medium shadow-md hover:bg-blue-400 transition-transform duration-300 transform hover:scale-105 ml-2">Filter</button>
    </form>
    @endhasrole
    <button onclick="window.location.href='{{ route('user.create') }}'"
        class="bg-blue-500 text-white px-4 py-2 rounded-lg font-medium shadow-md hover:bg-blue-400 transition-transform duration-300 transform hover:scale-105 flex items-center">
        <span class="text-xl font-bold mr-2"></span> Tambah User
    </button>

    <table class="min-w-full bg-gray-700 shadow-lg rounded-lg mt-5">
        <thead>
            <tr class="bg-gray-600 text-gray-200 text-left">
                <th class="px-4 py-3 font-semibold">No</th>
                <th class="px-4 py-3 font-semibold">Nama User</th>
                @hasrole('jayusman')
                <th class="px-4 py-3 font-semibold">Nama Cabang</th>
                @endhasrole
                <th class="px-4 py-3 font-semibold">Role</th>
            </tr>
        </thead>
        <tbody>
            @hasrole('jayusman')
            <tr class="bg-gray-800 hover:bg-gray-700 transition">
                <td class="px-4 py-3">1</td>
                <td class="px-4 py-3">Jayusman</td>
                <td class="px-4 py-3">Utama</td>
                <td class="px-4 py-3">Pemilik</td>
            </tr>
            @endhasrole
            @foreach ($users as $data)
                <tr class="bg-gray-800 hover:bg-gray-700 transition">
                    <td class="px-4 py-3">{{ $data->id }}</td>
                    <td class="px-4 py-3">{{ $data->name }}</td>
                    @hasrole('jayusman')
                    <td class="px-4 py-3">{{ $data->cabang->nama }}</td>
                    @endhasrole
                    <td class="px-4 py-3">
                        @foreach ($data->roles as $role)
                            {{ $role->name }}
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>{{ $users->links() }}</div>
>>>>>>> 3ed3ae01fdd56628918d4e0dbd4a9a34f2e860ba
</x-komponen.cabanglayout>
