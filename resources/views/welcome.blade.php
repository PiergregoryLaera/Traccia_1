<x-layout>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">
                    Bentornato @auth{{ Auth::user()->name }}@endauth
                </h3>
            </div>
        </div>
    </div>

    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-4 my-2">
                <form action="{{route('viewCity')}}" method="POST">
                    @csrf
                    <select name="comune">
                        <option value="">Seleziona città</option>
                        @foreach ($comuni as $comune)
                            <option value="{{ $comune->id }}">{{ $comune->name }}</option>
                        @endforeach
                    </select>
                    <x-googleAutocomplete/>
                    <button type="submit">Cerca</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
