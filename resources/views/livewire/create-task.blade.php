<div class="max-h-screen overflow-auto ms-auto w-5/6">
    <div class="container max-w-full mx-auto pt-5">
        <div class="text-center font-bold text-black pt-4 text-2xl">
            <h1>Create New Task</h1>
        </div>
        <div class="pt-3">
            <div class="h-screen w-full md:w-5/6 md:max-w-full mx-auto">
                <div class="p-6 border border-gray-300 sm:rounded-md">
                    <form method="POST" action="" wire:submit="create">
                        @csrf
                        <div class="flex flex-row justify-between">
                            <label class="block mb-6 w-2/5">
                                <span class="text-gray-700">Title:</span>
                                <input type="text" wire:model="title" name="name"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="Title of Tasks" required />
                            </label>

                            <label class="block mb-6 w-2/5">
                                <span class="text-gray-700">Status:</span>
                                <select name="status" wire:model="status"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    required>
                                    <option value="">...</option>
                                    <option value="not started">Not Started</option>
                                    <option value="in progress">In Progress</option>
                                    <option value="completed">Completed</option>
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
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
                            </label>

                            <label class="block mb-6 w-2/5">
                                <span class="text-gray-700">Deadline:</span>
                                <input type="date" wire:model="deadline" name="date"
                                    class=" block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    required />
                            </label>
                        </div>

                        <label class="block mb-6">
                            <span class="text-gray-700">Description:</span>
                            <textarea name="message" wire:model="description"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                rows="3" placeholder="you can optionally add a little description of your task here.">
                              
                            </textarea>
                        </label>

                        <div class="mb-6">
                            <button type="submit"
                                class="h-10 px-5 text-indigo-100 bg-yellow-700 rounded-lg transition-colors duration-150 focus:shadow-outline hover:bg-yellow-800">
                                Create Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
