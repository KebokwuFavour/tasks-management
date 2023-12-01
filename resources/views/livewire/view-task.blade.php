<div class="flex flex-row justify-between mt-20 overflow-auto">
    <div class="w-2/6 md:w-60 mr-14 ml-2 sm:mr-0 sm:ml-0"></div>
    <div class="w-3/6 md:w-3/6 mx-auto mt-4 bg-white rounded-3xl p-8 mb-5">
        <h1 class="text-3xl font-bold mb-10">
            {{ $taskDetails->title }}
        </h1>
        <hr class="my-8">

        <div class="">
            <p class="text-sm font-extralight text-gray-400 mb-2">Status: {{ $taskDetails->status }}</p>
            <p class="text-sm font-extralight text-gray-400 mb-2">Priority: {{ $taskDetails->priority }}</p>
            <p class="text-sm font-extralight text-gray-400 mb-2">Created: {{ $taskDetails->created_at }}</p>
            <p class="text-sm font-extralight text-gray-400 mb-2">Deadline: {{ $taskDetails->deadline }}</p>
            <div class="my-5">
                <p class="text-center pt-5">
                    {{ $taskDetails->description }}
                </p>
            </div>
        </div>
    </div>
</div>
