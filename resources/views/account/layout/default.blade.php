<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden ">
                <div class="p-6">
                    <div class="flex flex-row">
                        <div class="basis-3/12">
                            @include('account.layout.partials._navigation')
                        </div>
                        <div class="basis-9/12">
                            <div class=" px-8 py-3">
                                @yield('account.content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
