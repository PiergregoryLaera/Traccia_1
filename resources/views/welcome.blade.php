<x-layout>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Bentornato @auth{{ Auth::user()->name }}@endauth</h3>
            </div>
        </div>
    </div>
    <div id="map" style="height: 400px;"></div>

    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-4 my-2">
               <x-googleAutocomplete/>
        </div>
    </div>
    
    @auth
    
    
    @endauth

    <script src="https://maps.googleapis.com/maps/api/js?key=Docs_CreateAPIKey&utm_content=Docs_Central&hl=it&_gl=1*gxs27d*_ga*MTk5NTEwNjExMy4xNjg1NTQzNzc1*_ga_NRWSTWS78N*MTY4NTYwNTMyMi4yLjEuMTY4NTYwNjc4MS4wLjAuMA.." async defer></script>

<script src="{{ asset('js/custom-map.js') }}"></script>
</x-layout>

