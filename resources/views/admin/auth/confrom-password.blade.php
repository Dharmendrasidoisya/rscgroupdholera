<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                <img src="{{asset('img/adminlogo.png')}}" alrt="hello" width="250px">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        
        <form method="POST" action="{{route('admin.forgot.update')}}">
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="Old Password" :value="__('Old Password')" />
                <x-text-input class="block mt-1 w-full" type="password" name="oldpassword" required autofocus />
            </div>
            <div>
                <x-input-label for="New Password" :value="__('New Password')" />
                <x-text-input class="block mt-1 w-full" type="password" name="newpassword" required autofocus />
            </div>
            <div>
                <x-input-label for="Confirm Password" :value="__('Confirm Password')" />
                <x-text-input class="block mt-1 w-full" type="password" name="confirmpassword" required autofocus />
            </div>
               
            <div class="flex items-center justify-end mt-4">
              
                <x-primary-button class="ml-3">
                    {{ __('Password Reset') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
