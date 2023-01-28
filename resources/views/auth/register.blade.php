<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="grid grid-cols-2 gap-x-3">
            <x-input id="first_name" label="Nama Depan" name="first_name" type="text" required :value="@old('first_name')" />
            <x-input id="last_name" label="Nama Belakang" name="last_name" type="text" required :value="@old('last_name')" />
        </div>

        {{-- Sex --}}
        <div class="form-control">
            <label class="label">
                <span class="label-text">Jenis Kelamin</span>
            </label>
            <label class="input-group">
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <input type="radio" name="sex" value="male" class="radio checked:bg-primary" />
                        <span class="label-text bg-transparent">Pria</span>
                    </label>
                </div>
                <div class="form-control">
                    <label class="label cursor-pointer">
                        <input type="radio" name="sex" value="female" class="radio checked:bg-primary" />
                        <span class="label-text bg-transparent">Wanita</span>
                    </label>
                </div>
            </label>
        </div>

        {{-- NIK --}}
        <x-input id="nik" label="Nomor Induk Keluarga" name="nik" type="text" required :value="@old('nik')" />

        {{-- Birth Date --}}
        <x-input-single-datepicker label="Tanggal Lahir" id="birth_date" class="block w-full" type="text"
            name="birth_date" required />

        {{-- Phone Number // TODO: add validation --}}
        <x-input id="phone" label="Nomor Telepon" name="phone" type="text" required
            :value="@old('phone')" />

        {{-- Address --}}
        <x-textarea id="address" label="Alamat" name="address" required></x-textarea>

        {{-- Email --}}
        <x-input id="email" label="Email" name="email" type="email" required :value="@old('email')" />

        {{-- Password --}}
        <x-input id="password" label="Password" name="password" type="password" required autocomplete="new-password" />

        {{-- Confirm Password --}}
        <x-input id="password_confirmation" label="Konfirmasi Password" name="password_confirmation" type="password"
            required />

        {{-- Register Button --}}
        <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-gray-600" href="{{ route('login') }}">
                {{ __('Sudah punya akun?') }}
            </a>

            <x-button class="ml-4">
                {{ __('Register') }}
            </x-button>
        </div>
    </form>

    @push('js-internal')
        <script>
            $(function() {
                @if (Session::has('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: '{{ Session::get('success') }}'
                    });
                @endif

                @if (Session::has('error'))
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi Kesalahan',
                        text: '{{ Session::get('error') }}'
                    });
                @endif
            });
        </script>
    @endpush
</x-guest-layout>
