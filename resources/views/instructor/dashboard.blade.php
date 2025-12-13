<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-nature-800 leading-tight flex items-center">
            <span class="text-2xl mr-2"></span>
            Instructor Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="bg-nature-100 border-l-4 border-nature-500 text-nature-800 px-4 py-3 rounded mb-4 shadow">
                    <p class="font-medium">✓ {{ session('success') }}</p>
                </div>
            @endif

            <div class="flex justify-end mb-6">
                <a href="{{ route('instructor.courses.create') }}"
                   class="btn-nature-primary flex items-center shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Create New Course
                </a>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 border-l-4 border-nature-500">
                <h3 class="text-2xl font-bold mb-6 text-nature-800 flex items-center">
                    <span class="text-3xl mr-2">📚</span>
                    My Courses ({{ $courses->count() }})
                </h3>

                @if($courses->count())
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse table-nature">
                            <thead>
                                <tr class="bg-nature-100">
                                    <th class="p-4 text-left font-semibold text-nature-800">Title</th>
                                    <th class="p-4 text-left font-semibold text-nature-800">Short Description</th>
                                    <th class="p-4 text-left font-semibold text-nature-800">Created</th>
                                    <th class="p-4 text-left font-semibold text-nature-800">Updated</th>
                                    <th class="p-4 text-center font-semibold text-nature-800">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-nature-200">
                                @foreach($courses as $course)
                                    <tr class="hover:bg-nature-50 transition">
                                        <td class="p-4 font-medium text-nature-900">{{ $course->title }}</td>
                                        <td class="p-4 text-gray-700">{{ Str::limit($course->short_description, 50) }}</td>
                                        <td class="p-4 text-gray-600">{{ $course->created_at->format('M d, Y') }}</td>
                                        <td class="p-4 text-gray-600">{{ $course->updated_at->format('M d, Y') }}</td>
                                        <td class="p-4">
                                            <div class="flex gap-2 justify-center">
                                                <a href="{{ route('instructor.courses.edit', $course) }}" 
                                                   class="text-nature-600 hover:text-nature-800 font-medium hover:underline">
                                                    ✏️ Edit
                                                </a>
                                                <form method="POST" action="{{ route('instructor.courses.destroy', $course) }}" 
                                                      onsubmit="return confirm('Are you sure you want to delete this course?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800 font-medium hover:underline">
                                                        🗑️ Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-12">
                        <p class="text-gray-500 text-lg">🌱 You haven't created any courses yet.</p>
                        <p class="text-gray-400 mt-2">Start by creating your first course!</p>
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>