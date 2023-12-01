<div class="flex flex-row">
    <div class="w-96 md:w-60"></div>
    <div class="max-h-screen overflow-auto ms-auto w-5/6 bg-yellow-50">
        <div class="container max-w-full mx-auto pt-5">
            <div class="mx-auto w-5/6 mb-9 min-h-screen">
                <div
                    class="overflow-x-auto overflow-auto shadow-md sm:rounded border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">

                    <!-- Search field to search for user related tasks -->
                    <div class="py-3 px-4">
                        <form wire:submit="Search" class="relative max-w-xs">
                            <label class="sr-only">Search</label>
                            <input type="text" wire:model="search" name="hs-table-with-pagination-search"
                                id="hs-table-with-pagination-search"
                                class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                placeholder="Search for tasks">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.3-4.3" />
                                </svg>
                            </div>
                        </form>
                    </div>

                    <!-- Table to list user related tasks -->
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    s/n
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Title

                                        <!-- Button for sorting by title -->
                                        {{-- <svg wire:click="titleSort" class="w-3 h-3 ms-1.5 cursor-pointer"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg> --}}
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Description
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Status

                                        <!-- Button for sorting by deadline -->
                                        {{-- <svg wire:click="deadlineSort" class="w-3 h-3 ms-1.5 cursor-pointer"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg> --}}
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Priority

                                        <!-- Button for sorting by priority -->
                                        {{-- <svg wire:click="prioritySort" class="w-3 h-3 ms-1.5 cursor-pointer"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg> --}}
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Deadline

                                        <!-- Button for sorting by status -->
                                        {{-- <svg wire:click="statusSort" class="w-3 h-3 ms-1.5 cursor-pointer"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg> --}}
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex items-center">
                                        Actions
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- Check if the task is being sorted -->
                            @if ($sortedTasks)

                                <!-- Display related user tasks based on the sorting -->
                                @foreach ($sortedTasks as $task)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                        wire:key="{{ $task->id }}">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $n++ }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $task->title }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ Str::substr($task->description, 0, 100) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $task->status }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $task->priority }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $task->deadline }}
                                            ({{ \Carbon\Carbon::parse($task->deadline)->diffForHumans() }})
                                        </td>
                                        <td class="px-6 py-4 flex items-center text-center justify-between">
                                            <a href="#"
                                                class="font-medium text-yellow-500 hover:text-yellow-700 dark:text-yellow-500 underline py-3 mr-3"
                                                wire:click="editBtn({{ $task->id }})">Edit</a>
                                            <a href="#"
                                                class="font-medium text-red-600 hover:text-red-300 dark:text-red-500 hover:underline py-3 ml-2"
                                                wire:click="deleteBtn({{ $task->id }})">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @elseif ($searchResult)
                                <!-- Display related user tasks based on the searched terms -->
                                @foreach ($searchResult as $task)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                        wire:key="{{ $task->id }}">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $n++ }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $task->title }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ Str::substr($task->description, 0, 100) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $task->status }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $task->priority }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $task->deadline }}
                                            ({{ \Carbon\Carbon::parse($task->deadline)->diffForHumans() }})
                                        </td>
                                        <td class="px-6 py-4 flex items-center text-center justify-between">
                                            <a href="#"
                                                class="font-medium text-yellow-500 hover:text-yellow-700 dark:text-yellow-500 underline py-3 mr-3"
                                                wire:click="editBtn({{ $task->id }})">Edit</a>
                                            <a href="#"
                                                class="font-medium text-red-600 hover:text-red-300 dark:text-red-500 hover:underline py-3 ml-2"
                                                wire:click="deleteBtn({{ $task->id }})">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <!-- Display related user tasks if not sorted or/and not searched -->
                                @foreach ($tasks as $task)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                        wire:key="{{ $task->id }}">
                                        <th scope="col"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $n++ }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $task->title }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ Str::substr($task->description, 0, 100) . '...' }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $task->status }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $task->priority }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $task->deadline }}
                                            ({{ \Carbon\Carbon::parse($task->deadline)->diffForHumans() }})
                                        </td>
                                        <td class="px-6 py-4 flex items-center text-center justify-between">
                                            <a href="{{ route('view-task', $task->id) }}" wire:navigate
                                                class="font-medium text-blue-500 hover:text-blue-700 dark:text-yellow-500 underline py-3 mr-3"
                                                wire:click="viewBtn({{ $task->id }})">
                                                View
                                            </a>
                                            <a href="#"
                                                class="font-medium text-yellow-500 hover:text-yellow-700 dark:text-yellow-500 underline py-3 ml-2 mr-3"
                                                wire:click="editBtn({{ $task->id }})">
                                                Edit
                                            </a>
                                            <a href="#"
                                                class="font-medium text-red-600 hover:text-red-300 dark:text-red-500 hover:underline py-3 ml-2"
                                                wire:click="deleteBtn({{ $task->id }})">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            @endif

                        </tbody>

                        <!-- Modal for editing task -->
                        @if ($editTask)
                            <x-dialog-modal wire:model="editTask">
                                <x-slot name="title">
                                    <h1>
                                        Edit Task - {{ $selectedTask->title }}
                                    </h1>
                                </x-slot>

                                <x-slot name="content">
                                    {{-- @if ($selectedTask) --}}
                                    <form method="POST" action="" wire:submit="create">
                                        @csrf
                                        <div class="flex flex-row justify-between">
                                            <label class="block mb-6 w-2/5">
                                                <span class="text-gray-700">Title:</span>
                                                <input type="text" wire:model="title" name="name"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    placeholder="Title of Tasks" value="{{ $selectedTask->title }}"
                                                    required />
                                            </label>

                                            <label class="block mb-6 w-2/5">
                                                <span class="text-gray-700">Status:</span>
                                                <select name="status" wire:model="status"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    required>
                                                    <option value="">...</option>
                                                    <option
                                                        {{ $selectedTask->status === 'not started' ? 'selected' : '' }}
                                                        value="not started">
                                                        Not Started
                                                    </option>
                                                    <option
                                                        {{ $selectedTask->status === 'in progress' ? 'selected' : '' }}
                                                        value="in progress">
                                                        In Progress
                                                    </option>
                                                    <option
                                                        {{ $selectedTask->status === 'completed' ? 'selected' : '' }}
                                                        value="completed">
                                                        Completed
                                                    </option>
                                                </select>
                                            </label>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <label class="block mb-6 w-2/5">
                                                <span class="text-gray-700">Priority:</span>
                                                <select name="priority" wire:model="priority"
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    required>
                                                    <option value="">...</option>
                                                    <option {{ $selectedTask->status === 'low' ? 'selected' : '' }}
                                                        value="low">
                                                        Low
                                                    </option>
                                                    <option {{ $selectedTask->status === 'medium' ? 'selected' : '' }}
                                                        value="medium">
                                                        Medium
                                                    </option>
                                                    <option {{ $selectedTask->status === 'high' ? 'selected' : '' }}
                                                        value="high">
                                                        High
                                                    </option>
                                                </select>
                                            </label>

                                            <label class="block mb-6 w-2/5">
                                                <span class="text-gray-700">Deadline:</span>
                                                <input type="date" wire:model="deadline" name="date"
                                                    class=" block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                    value="$selectedTask->deadline" required />
                                            </label>
                                        </div>

                                        <label class="block mb-6">
                                            <span class="text-gray-700">Description:</span>
                                            <textarea name="message" wire:model="description"
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                rows="3" placeholder="you can optionally add a little description of your task here.">
                                            {{ $selectedTask->description }}
                                          </textarea>
                                        </label>

                                        <div class="flex flex-row mb-6">
                                            {{-- <button type="submit"
                                                class="h-10 px-5 text-indigo-100 bg-indigo-700 rounded-lg transition-colors duration-150 focus:shadow-outline hover:bg-indigo-800">
                                                Create Now
                                            </button> --}}
                                            {{-- <div class="w-2/5"> --}}
                                            <button type="submit" wire:click="update({{ $selectedTask->id }})"
                                                class="h-10 px-5 mr-2 text-indigo-100 bg-yellow-700 rounded-lg transition-colors duration-150 focus:shadow-outline hover:bg-yellow-800">
                                                Save Changes
                                            </button>
                                            {{-- </div>

                                            <div class="w-2/5"> --}}
                                            <button type="submit" wire:click="cancelEditBtn"
                                                class="h-10 px-9 ml-2 text-indigo-100 bg-green-700 rounded-lg transition-colors duration-150 focus:shadow-outline hover:bg-green-800">
                                                Cancel
                                            </button>
                                            {{-- </div> --}}
                                        </div>
                                    </form>
                                    {{-- @endif --}}
                                </x-slot>
                            </x-dialog-modal>
                        @endif

                        <!-- Modal for deleting task -->
                        @if ($deleteTask)
                            <x-confirmation-modal wire:model="deleteTask">
                                <x-slot name="title">
                                    Delete Task
                                </x-slot>

                                <x-slot name="content">
                                    Are you sure you want to delete this task?
                                    {{-- <br> --}}
                                    You can either <b>cancel</b> now or <b>proceed</b>.
                                </x-slot>

                                <x-slot name="footer">
                                    <div class="flex flex-row justify-between">
                                        <div class="py-1">
                                            <button type="submit" wire:click="cancelDel"
                                                class="text-lg text-center font-semibold bg-yellow-700 w-full text-white rounded-lg px-4 py-3 block shadow-xl hover:text-white hover:bg-yellow-900">
                                                Cancel
                                            </button>
                                        </div>

                                        <div class="mx-3"></div>

                                        <div class="py-1">
                                            <button type="button" wire:click="delete({{ $task2del->id }})"
                                                class="text-lg font-semibold bg-green-700 w-full text-white rounded-lg px-4 py-3 block shadow-xl hover:text-white hover:bg-green-900">
                                                Proceed
                                            </button>
                                        </div>
                                    </div>
                                </x-slot>

                            </x-confirmation-modal>
                        @endif

                    </table>

                    <!--pagination-->
                    <div class="py-1 px-4 bg-gray-100">
                        {{-- @if ($searchResult)
                            @if ($searchResult->count() > 1)
                            {{ $searchResult->links() }}
                            @endif
                        @elseif ($sortedTasks)
                            @if ($sortedTasks->count() > 1)
                                {{ $sortedTasks->links() }}
                            @endif
                        @else --}}
                        @if ($tasks)
                            {{ $tasks->links() }}
                        @endif
                        {{-- @endif --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
