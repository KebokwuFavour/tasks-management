<x-app-layout>
    <!-- header -->
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                {{-- <button type="button"
                    class="flex items-center focus:outline-none rounded-lg text-gray-600 hover:text-yellow-600 focus:text-yellow-600 font-semibold p-2 border border-transparent hover:border-yellow-300 focus:border-yellow-300 transition">
                    <span
                        class="inline-flex items-center justify-center w-6 h-6 text-gray-600 text-xs rounded bg-white transition mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </span>
                    <span class="text-sm">Archive</span>
                </button> --}}
            </div>
            <div class="text-lg font-bold">Overview</div>
            <div>
                {{-- <button type="button"
                    class="flex items-center focus:outline-none rounded-lg text-gray-600 hover:text-yellow-600 focus:text-yellow-600 font-semibold p-2 border border-transparent hover:border-yellow-300 focus:border-yellow-300 transition">
                    <span class="text-sm">This week</span>
                    <span
                        class="inline-flex items-center justify-center w-6 h-6 text-gray-600 text-xs rounded bg-white transition ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </span>
                </button> --}}
            </div>
        </div>
    </x-slot>
    <!-- /header -->

    <!-- main content -->
    <main class="ml-60 pt-16 max-h-screen overflow-auto">
        <div class="px-6 py-8">
            <div class="max-w-4xl mx-auto">

                <div class="bg-white rounded-3xl p-8 mb-5">
                    <h1 class="text-3xl font-bold mb-10">
                        keeping track of daily activities including pasts, current, and future tasks
                    </h1>
                    <div class="flex items-center justify-between">
                        <div class="flex items-stretch">
                            <div class="text-gray-400 text-xs">Total<br>Tasks</div>
                            <div class="h-100 border-l mx-4"></div>
                            <div class="flex flex-nowrap -space-x-3">
                                <div class="h-9 w-9">
                                    <div
                                        class="object-cover w-full h-full rounded-full bg-yellow-500 text-white text-center pt-1">
                                        {{ $userTasks->count() }}
                                    </div>
                                </div>
                                {{-- <div class="h-9 w-9">
                                    <img class="object-cover w-full h-full rounded-full"
                                        src="https://ui-avatars.com/api/?background=random">
                                </div> --}}
                            </div>
                        </div>
                        <div class="flex items-center gap-x-2" style="visibility:hidden;">
                            <button type="button"
                                class="inline-flex items-center justify-center h-9 px-3 rounded-xl border hover:border-gray-400 text-gray-800 hover:text-gray-900 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z" />
                                </svg>
                            </button>
                            <button type="button"
                                class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                                Open
                            </button>
                        </div>
                    </div>

                    <hr class="my-10">

                    <div class="grid grid-rows-2 md:grid-cols-2 gap-x-20">
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Stats</h2>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="col-span-2">
                                    <div class="p-4 bg-green-100 rounded-xl">
                                        <div class="font-bold text-lg text-gray-800 leading-none">Good day,
                                            <span
                                                class="text-yellow-800 text-xl font-extrabold">{{ Auth::user()->name }}</span>
                                        </div>
                                        <div class="mt-5">
                                            <a href="{{ route('task-list') }}" wire:navigate
                                                class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                                Start tracking
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                    <div class="font-bold text-2xl leading-none">
                                        {{ $completed->count() }}</div>
                                    <div class="mt-2">Tasks finished</div>
                                </div>
                                <div class="p-4 bg-gray-300 rounded-xl text-gray-800">
                                    <div class="font-bold text-2xl leading-none">
                                        {{ $inProgress->count() }}</div>
                                    <div class="mt-2">Tasks in progress</div>
                                </div>
                                <div class="p-4 bg-blue-100 rounded-xl text-gray-800">
                                    <div class="font-bold text-2xl leading-none">
                                        {{ $notStarted->count() }}</div>
                                    <div class="mt-2">Tasks not started</div>
                                </div>
                                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                    <div class="font-bold text-2xl leading-none">{{ $deadlineAsToday->count() }}</div>
                                    <div class="mt-2">Deadline is today</div>
                                </div>
                                <div class="col-span-2">
                                    <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                                        <div class="font-bold text-xl leading-none">Your daily plan</div>
                                        <div class="mt-2">{{ $completedToday->count() }} of
                                            {{ $deadlineAsToday->count() }} completed</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Your tasks due today</h2>

                            <div class="space-y-4">
                                {{-- check if task due today are less than one (if there is no task for today) --}}
                                @if ($deadlineAsToday->count() < 1)
                                    <div class="p-4 text-gray-800 space-y-2">
                                        <p class="font-bold text-yellow-800">
                                            <em>
                                                No Task set due today
                                            </em>
                                        </p>
                                    </div>
                                @endif

                                {{-- check if status for tasks due today are completed --}}
                                @if ($completed->count() === $userTasks->count())
                                    <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                        <a href="javascript:void(0)"
                                            class="font-bold hover:text-yellow-800 hover:underline cursor-default">
                                            All tasks due today have been completed. congrats
                                        </a>
                                    </div>
                                @else
                                    {{-- @foreach ($deadlineAsToday as $task) --}}
                                    {{-- check if tasks due today that are not completed are greater than four(4) --}}
                                    @if ($todayNC->count() > 4)
                                        {{-- if greater than four(4), display four(4) --}}
                                        @foreach ($todayNCDetail as $taskD)
                                            <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                                <div class="flex justify-between">
                                                    <div class="text-gray-400 text-xs">
                                                        today task(s) are: {{ $deadlineAsToday->count() }} in
                                                        number
                                                    </div>
                                                    <div class="text-gray-400 text-xs">{{ date('H') }}h</div>
                                                </div>
                                                <a href="{{ route('view-task', $taskD->id) }}"
                                                    class="font-bold hover:text-yellow-800 hover:underline">
                                                    {{ $taskD->title }}
                                                </a>

                                                <div class="text-sm text-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                        height="1em" fill="currentColor"
                                                        class="text-gray-800 inline align-middle mr-1"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                    </svg>Deadline is today
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="text-sm text-center text-gray-100">
                                            <a href="{{ route('task-list') }}">
                                                <em>
                                                    Navigate to the task list page for more
                                                </em>
                                            </a>
                                        </div>
                                    @else
                                        {{-- check if tasks due today that are not completed are greater than two(2) --}}
                                        @if ($todayNC->count() > 2)
                                            @foreach ($deadlineAsToday as $task)
                                                @if ($task->status != 'completed')
                                                    <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                                        <div class="flex justify-between">
                                                            <div class="text-gray-400 text-xs">
                                                                today task(s) are: {{ $deadlineAsToday->count() }} in
                                                                number
                                                            </div>
                                                            <div class="text-gray-400 text-xs">{{ date('H') }}h
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('view-task', $task->id) }}"
                                                            class="font-bold hover:text-yellow-800 hover:underline">
                                                            {{ $task->title }}
                                                        </a>

                                                        <div class="text-sm text-gray-600">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                height="1em" fill="currentColor"
                                                                class="text-gray-800 inline align-middle mr-1"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                            </svg>Deadline is today
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @else
                                            {{-- display the tasks due today that are not completed after that, display uncompleted future tasks --}}
                                            @foreach ($deadlineAsToday as $task)
                                                {{-- tasks due today that are not completed --}}
                                                @if ($task->status != 'completed')
                                                    <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                                        <div class="flex justify-between">
                                                            <div class="text-gray-400 text-xs">
                                                                today task(s) are: {{ $deadlineAsToday->count() }} in
                                                                number
                                                            </div>
                                                            <div class="text-gray-400 text-xs">{{ date('H') }}h
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('view-task', $task->id) }}"
                                                            class="font-bold hover:text-yellow-800 hover:underline">
                                                            {{ $task->title }}
                                                        </a>

                                                        <div class="text-sm text-gray-600">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                height="1em" fill="currentColor"
                                                                class="text-gray-800 inline align-middle mr-1"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                            </svg>Deadline is today
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach

                                            <div class="border-b-4"></div>

                                            {{-- Uncompleted future tasks --}}
                                            {{-- check if uncompleted future tasks are less than or equal to three(3) --}}
                                            @if ($futureTasks->count() <= 3)
                                                @foreach ($futureTasksDisp as $item)
                                                    <div
                                                        class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                                        <a href="{{ route('view-task', $item->id) }}"
                                                            class="font-bold hover:text-yellow-800 hover:underline">
                                                            {{ $item->title }}
                                                        </a>
                                                        <div class="text-sm text-gray-600">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                height="1em" fill="currentColor"
                                                                class="text-gray-800 inline align-middle mr-1"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                            </svg>
                                                            Deadline is in
                                                            {{ \Carbon\Carbon::parse($item->deadline)->diffForHumans() }}
                                                        </div>
                                                    </div>
                                                @endforeach

                                                {{-- check if uncompleted future tasks are less than one(1), that is if there is no uncompleted future task --}}
                                                @if ($futureTasks->count() < 1)
                                                    <div class="p-4 text-gray-800 space-y-2">
                                                        <p class="font-bold text-yellow-800">
                                                            <em>
                                                                No future due tasks
                                                            </em>
                                                        </p>
                                                    </div>
                                                @endif
                                            @else
                                                {{-- check if there is no uncompleted  tasks due today --}}
                                                @if ($deadlineAsToday->count() < 1)
                                                    @foreach ($futureTasksDisp3 as $item)
                                                        <div
                                                            class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                                            <a href="{{ route('view-task', $item->id) }}"
                                                                class="font-bold hover:text-yellow-800 hover:underline">
                                                                {{ $item->title }}
                                                            </a>
                                                            <div class="text-sm text-gray-600">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                    height="1em" fill="currentColor"
                                                                    class="text-gray-800 inline align-middle mr-1"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                                </svg>
                                                                Deadline is in
                                                                {{ \Carbon\Carbon::parse($item->deadline)->diffForHumans() }}
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    {{-- if no uncompleted future task --}}
                                                    @if ($futureTasks->count() < 1)
                                                        <div class="p-4 text-gray-800 space-y-2">
                                                            <p class="font-bold text-yellow-800">
                                                                <em>
                                                                    No Task set due in future
                                                                </em>
                                                            </p>
                                                        </div>
                                                    @endif
                                                @endif

                                                {{-- if only one uncompleted task due today --}}
                                                @if ($deadlineAsToday->count() < 2)
                                                    @foreach ($futureTasksDisp3 as $item)
                                                        <div
                                                            class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                                            <a href="{{ route('view-task', $item->id) }}"
                                                                class="font-bold hover:text-yellow-800 hover:underline">
                                                                {{ $item->title }}
                                                            </a>
                                                            <div class="text-sm text-gray-600">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                    height="1em" fill="currentColor"
                                                                    class="text-gray-800 inline align-middle mr-1"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                                </svg>
                                                                Deadline is in
                                                                {{ \Carbon\Carbon::parse($item->deadline)->diffForHumans() }}
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    @if ($futureTasks->count() < 1)
                                                        <div class="p-4 text-gray-800 space-y-2">
                                                            <p class="font-bold text-yellow-800">
                                                                <em>
                                                                    No Task set due in future
                                                                </em>
                                                            </p>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endif

                                        @endif
                                    @endif
                                    {{-- @endforeach --}}
                                @endif


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>
    <!-- /main content -->
</x-app-layout>
