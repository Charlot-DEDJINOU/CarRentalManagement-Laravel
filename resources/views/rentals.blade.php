@include('_header')
<section class="rentals p-5">
    <div class="container mt-5">
        <div class="mb-3 position-relative d-flex justify-content-between w-100">
            <h3>Mes Location</h3>
            <input type="text" id="search" class="form-control w-50 mx-3" placeholder="Rechercher...">
            <button class="btn btn-success w-25">Rechercher</button>
        </div>
        <div class="d-flex flex-wrap mt-5">
            @foreach ($rentals as $rental )
                <div class="row mb-3">
                    <img src="{{ asset( $rental->car->images )}} " alt="voiture" class="col-5 px-3" />
                    <div class="col-6">
                        @if ($rental->status == '1')
                            <h2 class="mb-2 fs-5 fw-medium text-center text-bg-info text-white p-3 mb-3">En attente d'approbation</h2>
                        @elseif ( $rental->status == '2' )
                            <h2 class="mb-2 fs-5 fw-medium text-center text-bg-success text-white p-3 mb-3">Reversation Approuvée</h2>
                        @elseif ( $rental->status == '3' )
                            <h2 class="mb-2 fs-5 fw-medium text-center text-bg-danger text-white p-3 mb-3">Reservation expirée</h2>
                        @endif
                        <p class="mb-2 fs-5 fw-light"><b>Designation</b>: {{ $rental->car->brand }}</p>
                        <p class="mb-2 fs-5 fw-light"><b>Model</b>: {{ $rental->car->model }}</p>
                        <p class="mb-2 fs-5 fw-light"><b>Debut de location</b>: {{ Str::substr($rental->rental_date, 0, 10) }}</p>
                        <p class="mb-2 fs-5 fw-light"><b>Fin de location</b>: {{ Str::substr($rental->return_date, 0, 10) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('_footer')