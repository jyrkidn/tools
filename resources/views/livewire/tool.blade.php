<div class="flex flex-col m-4 lg:h-90">
    @if ($error)
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 relative mb-4" role="alert">
            <span class="block sm:inline">
                {{ $error }}
            </span>
        </div>
    @endif

    <div class="flex flex-col lg:flex-row h-full">

        <textarea
            wire:model.lazy="minified"
            cols="30"
            rows="10"
            class="bg-yellow-500 focus:outline-none focus:shadow-outline border text-purple-800 block w-full lg:w-5/12 appearance-none leading-normal"
        ></textarea>

        <div class="flex justify-center flex-col w-full lg:w-2/12 lg:px-2">
            @foreach ($converts as $key => $convert)
                <button
                    type="button"
                    class="bg-yellow-500 hover:bg-yellow-600 text-purple-800 font-bold py-2 px-4 my-2 inline-flex items-center justify-center"
                    wire:click="convert('{{ $key }}')"
                >
                    <span>{{ $convert::name() }}</span>
                    <svg class="fill-current w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            @endforeach
        </div>

        <div class="bg-white focus:outline-none focus:shadow-outline block w-full lg:w-5/12 appearance-none leading-normal">
            <textarea
                id="editor"
                cols="30"
                rows="10"
            ></textarea>
        </div>
    </div>
</div>
