@extends('account.layout.default')
@section('account.content')
    <div class="px-0 py-0">
        <div class="flex flex-no-wrap items-start">
            <div class="w-full">
                <form class="" action="{{ route('account.password.store') }}" method="post">
                    @csrf
                    <div class="bg-white rounded shadow mt-0 py-4">
                        <div class="mt-0 px-7">
                            <p class="text-xl font-semibold leading-tight text-gray-800">
                                Password
                            </p>
                            <div class="grid w-full grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-7 mt-7">
                                <div>
                                    <label for="current_password"
                                        class="text-base font-medium leading-none {{ $errors->has('current_password') ? 'text-red-400' : 'text-gray-800' }}">
                                        Current Password
                                    </label>
                                    <input type="password" name="current_password" id="current_password" value=""
                                        class="w-full p-3 mt-4 border {{ $errors->has('name') ? 'has-error border-red-400' : 'border-gray-300' }}  rounded outline-none focus:bg-gray-50">
                                    @if ($errors->has('current_password'))
                                        <p class="mt-3 text-xs leading-3 text-red-400 font-bold">
                                            {{ $errors->first('current_password') }}
                                        </p>
                                    @endif
                                </div>
                                <div>
                                    <label for="password"
                                        class="text-base font-medium leading-none {{ $errors->has('password') ? 'text-red-400' : 'text-gray-800' }}">
                                        New Password
                                    </label>
                                    <input type="password" name="password" id="password" value=""
                                        class="w-full p-3 mt-4 border {{ $errors->has('name') ? 'has-error border-red-400' : 'border-gray-300' }}  rounded outline-none focus:bg-gray-50">
                                    @if ($errors->has('password'))
                                        <p class="mt-3 text-xs leading-3 text-red-400 font-bold">
                                            {{ $errors->first('password') }}
                                        </p>
                                    @endif
                                </div>
                                <div>
                                    <label for="password_confirmation"
                                        class="text-base font-medium leading-none {{ $errors->has('password_confirmation') ? 'text-red-400' : 'text-gray-800' }}">
                                        Confirm Password
                                    </label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        value=""
                                        class="w-full p-3 mt-4 border {{ $errors->has('name') ? 'has-error border-red-400' : 'border-gray-300' }}  rounded outline-none focus:bg-gray-50">
                                    @if ($errors->has('password_confirmation'))
                                        <p class="mt-3 text-xs leading-3 text-red-400 font-bold">
                                            {{ $errors->first('password_confirmation') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <hr class="h-[1px] bg-gray-100 my-14">
                        <div
                            class="flex flex-col flex-wrap items-center justify-center w-full px-7 lg:flex-row lg:justify-end md:justify-end gap-x-4 gap-y-4">

                            <button type="submit"
                                class="bg-indigo-700 rounded hover:bg-indigo-600 transform duration-300 ease-in-out text-sm font-medium px-6 py-4 text-white lg:max-w-[144px] w-full">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
