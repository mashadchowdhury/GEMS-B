<x-app-layout>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.bootstrap5.min.css" integrity="sha512-Ars0BmSwpsUJnWMw+KoUKGKunT7+T8NGK0ORRKj+HT8naZzLSIQoOSIIM3oyaJljgLxFi0xImI5oZkAWEFARSA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
        integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
        ></script>
        <script>
            $(document).ready(function () {
                $('select').selectize({
                    sortField: 'text'
                });
            });
        </script>
    </head>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8" style="overflow: auto;">
        <form method="POST" action="{{ route('booking.update', $booking) }}">
            @csrf
            @method('patch')
            <label for="accommodation">Accommodation:</label><br>
            <select id="name_accommodation" name="name_accommodation" placeholder="{{ __('Eg: Hyatt Place') }}" style="width: unset;" class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">>
                    <option value="{{$booking->name_accommodation}}">{{$booking->name_accommodation}}</option>
                    @foreach ($accommodations as $accomm)
                    <option value="{{$accomm->name_accommodation}}">{{$accomm->name_accommodation}}</option>
                    @endforeach
                </select>
            <!-- <input
                type="text"
                id="name_accommodation"
                name="name_accommodation"
                placeholder="{{ __('Eg: Hyatt Place') }}"
                value="{{$booking->name_accommodation}}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br> -->
            <label for="group">Group:</label><br>
            <select id="name_group" name="name_group"placeholder="{{ __('Eg: Penticton Fire Dept.') }}" class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">>
                    <option value="{{$booking->name_group}}">{{$booking->name_group}}</option>
                    @foreach ($groups as $groups)
                    <option value="{{$groups->name_group}}">{{$groups->name_group}}</option>
                    @endforeach
                </select>
            <!-- <input
                type="text"
                id="name_group"
                name="name_group"
                placeholder="{{ __('Eg: Penticton Fire Dept.') }}"
                value="{{$booking->name_group}}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br> -->
            <label for="from_date">Booking Start Date:</label><br>
            <input
                type="date"
                id="from_date"
                name="from_date"
                value="{{$booking->from_date}}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="to_date">Booking End Date:</label><br>
            <input
                type="date"
                id="to_date"
                name="to_date"
                value="{{$booking->to_date}}"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('booking.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
