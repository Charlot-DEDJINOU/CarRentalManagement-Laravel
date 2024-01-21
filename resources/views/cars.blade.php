@include('_header')
<section class="products py-5 bg-white ">
    <div class="container-fluid">
        <div class=" filtre filtre-header">Nos voitures</div>
        <section class="d-inline-flex  bd-highlight">
            <div class="filtre-container">
                <div class="filtre">
                    <div class="mb-3 p-2">
                        <label>Type :</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="compactCheckbox" value="compact">
                            <label class="form-check-label" for="compactCheckbox">
                                Compact
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sedanCheckbox" value="sedan">
                            <label class="form-check-label" for="sedanCheckbox">
                                Sedan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sedanCheckbox" value="sedan">
                            <label class="form-check-label" for="sedanCheckbox">
                                Berline
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sedanCheckbox" value="sedan">
                            <label class="form-check-label" for="sedanCheckbox">
                                Pick-up
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sedanCheckbox" value="sedan">
                            <label class="form-check-label" for="sedanCheckbox">
                                SUV
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Capacités:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="persons2Checkbox" value="2">
                            <label class="form-check-label" for="persons2Checkbox">
                                2 personnes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="persons4Checkbox" value="4">
                            <label class="form-check-label" for="persons4Checkbox">
                                4 personnes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="persons5Checkbox" value="5">
                            <label class="form-check-label" for="persons5Checkbox">
                                5 personnes
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container products-container">
                <div class="mb-3 position-relative d-flex w-100">
                    <input type="text" id="search" class="form-control w-75 mx-3" placeholder="Rechercher...">
                    <button class="btn btn-success w-25">Rechercher</button>
                </div>
                <div class="mt-5 d-flex flex-wrap justify-content-between all-products">
                    @foreach ($cars as $car)
                        <div class="item d-flex flex-column justify-content-between p-3">
                            <img src="{{ asset($car->images) }}" alt="voiture" />
                            <div class="fw-light"><b>Designation</b> : {{ $car->brand }}</div>
                            <div class="fw-light"><b>Model</b> : {{ $car->model }}</div>
                            <div class="fw-light"><b>Prix</b> : 19$/Jour</div>
                            <button class="btn btn-success">
                                <a class="lien" href="{{ route('cars.detail', ['id' => $car->id]) }}">Voir plus</a>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</section>
@include('_footer')