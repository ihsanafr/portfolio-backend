<div class="w-full navbar bg-white py-4 px-7">
    <div class="flex flex-row justify-end">

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">
                <div
                    class="text-white bg-red-500 hover:bg-red-700 px-4 py-2 rounded-lg transition transform duration-300">
                    keluar
                </div>
            </button>
        </form>
        


    </div>
</div>
