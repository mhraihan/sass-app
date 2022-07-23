<!-- Code block starts -->
<div class="flex items-center justify-center px-4 sm:px-0">
    <div role="alert"
        class="lg:w-10/12 transition duration-150 ease-in-out {{ $class }} shadow rounded-md md:flex items-center top-0 mt-12 mb-8 py-4 px-4">
        <div class="flex justify-end mr-4 md:mt-0 md:pl-4 lg:pl-0">
            <button onclick="closeAlert()"
                class="focus:outline-none focus:text-white hover:text-gray-400 text-sm cursor-pointer text-white">&times;</button>
        </div>
        <div class="sm:flex items-center">
            <p class="text-base text-white">
                {{ $slot }}
            </p>
        </div>
    </div>

</div>
<!-- Code block ends -->
