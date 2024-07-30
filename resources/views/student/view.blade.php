<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-900 border-b border-gray-700">
                    <table class="w-full bg-gray-800 border-collapse border border-gray-700">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-700 text-white">ID</th>
                                    <th class="py-2 px-4 border-b border-gray-700 text-white">Name</th>
                                    <th class="py-2 px-4 border-b border-gray-700 text-white">Mobile</th>
                                    <th class="py-2 px-4 border-b border-gray-700 text-white">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-700 text-white">{{ $student->id }}</td>
                                    <td class="py-2 px-4 border-b border-gray-700 text-white">{{ $student->name }}</td>
                                    <td class="py-2 px-4 border-b border-gray-700 text-white">{{ $student->mobile }}</td>
                                    <td class="py-2 px-4 border-b border-gray-700">
                                        <div class="flex space-x-2">
                                        @can('edit students')
                                            <a href="{{ route('students.edit', $student) }}" class="border mr-1 bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                                            @endcan
                                            @can('delete students')
                                            <form action="{{ route('students.destroy', $student) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
