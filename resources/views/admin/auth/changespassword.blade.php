<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        <div style="text-align: center;">
            <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                <img src="{{asset('img/adminlogo.png')}}" alrt="hello" width="250px">
            </a>
         
        </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 danger text-red-600" :status="session('status1')" />
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{route('admin.forgot.store')}}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
               
            
                <x-text-input class="block mt-1 w-full" type="email" name="email" required autofocus />
               
            
            </div>
               
            <div class="flex items-center justify-end mt-4">
              
                <x-primary-button class="ml-3">
                    {{ __('Submit') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
