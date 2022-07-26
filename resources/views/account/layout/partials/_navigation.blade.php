 <ul class="mt-0">
     <li
         class="{{ return_if(on_page('account'), 'bg-green-500 text-white') }} flex w-full justify-between  hover:text-white hover:bg-indigo-800 cursor-pointer items-center">
         <a class="w-full  px-8 py-3" href="{{ route('account.index') }}"
             class="flex items-center  rounded focus:outline-none focus:ring-2 focus:ring-white">
             <span class="text-sm ml-2">Account Overview</span>
         </a>
     </li>
     <li
         class="{{ return_if(on_page('account/profile'), 'bg-green-500 text-white') }} flex w-full justify-between  hover:text-white hover:bg-indigo-800 cursor-pointer items-center">
         <a class="w-full  px-8 py-3" href="{{ route('account.profile.index') }}"
             class="flex items-center  rounded focus:outline-none focus:ring-2 focus:ring-white">
             <span class="text-sm ml-2">Profile</span>
         </a>
     </li>

     <li
         class="{{ return_if(on_page('account/password'), 'bg-green-500 text-white') }} flex w-full justify-between  hover:text-white hover:bg-indigo-800 cursor-pointer items-center">
         <a class="w-full  px-8 py-3" href="{{ route('account.password.index') }}"
             class="flex items-center  rounded focus:outline-none focus:ring-2 focus:ring-white">
             <span class="text-sm ml-2">Password</span>
         </a>
     </li>

 </ul>
