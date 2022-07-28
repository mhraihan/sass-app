<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        @foreach ($plans as $plan)
                            <li class="my-4 border-b border-gray-200 pb-2">
                                <a href="">{{ $plan->name }} ( ${{ $plan->price }})</a>
                            </li>
                        @endforeach
                        <li class="list-group-item my-4">
                            <a href="{{ route('plans.index') }}">User plans</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
