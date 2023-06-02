<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name:')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- licencenumber -->
        <div>
            <x-input-label for="licencenumber" :value="__('Licence Number:')" />
            <x-text-input id="licencenumber" class="block mt-1 w-full" type="text" name="licencenumber" :value="old('licencenumber')" required autofocus autocomplete="licencenumber" />
            <x-input-error :messages="$errors->get('licencenumber')" class="mt-2" />
        </div>

        <!-- idnumber -->
        <div>
            <x-input-label for="idnumber" :value="__('National ID/ Alien Card Number:')" />
            <x-text-input id="idnumber" class="block mt-1 w-full" type="text" name="idnumber" :value="old('idnumber')" required autofocus autocomplete="idnumber" />
            <x-input-error :messages="$errors->get('idnumber')" class="mt-2" />
        </div>

        <!-- phonenumber -->
        <div>
            <x-input-label for="phonenumber" :value="__('Phone Number:')" />
            <x-text-input id="phonenumber" class="block mt-1 w-full" type="text" name="phonenumber" :value="old('phonenumber')" required autofocus autocomplete="phonenumber" />
            <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
        </div>

        <!-- dob -->
        <div>
            <x-input-label for="dob" :value="__('Date Of Birth:')" />
            <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autofocus autocomplete="dob" />
            <x-input-error :messages="$errors->get('dob')" class="mt-2" />
        </div>

        <!-- bloodgroup -->
<!-- bloodgroup -->
<div>
    <x-input-label for="bloodgroup" :value="__('Blood Group:')" />
    <select id="bloodgroup" name="bloodgroup" class="block mt-1 w-full">
        <option value="">Select Blood Group</option>
        <option value="A+">A-positive (A+)</option>
        <option value="A-">A-negative (A-)</option>
        <option value="B+">B-positive (B+)</option>
        <option value="B-">B-negative (B-)</option>
        <option value="AB+">AB-positive (AB+)</option>
        <option value="AB-">AB-negative (AB-)</option>
        <option value="O+">O-positive (O+)</option>
        <option value="O-">O-negative (O-)</option>
    </select>
    <x-input-error :messages="$errors->get('bloodgroup')" class="mt-2" />
</div>



        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email:')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password:')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password:')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
