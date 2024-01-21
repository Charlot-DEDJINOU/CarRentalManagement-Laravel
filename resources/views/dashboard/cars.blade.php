@include('../_header')
<section class="dashboard d-flex">
    <div class="tables w-25 h-100 text-bg-success py-5 d-flex flex-column">
        <a href="{{ route('dashboard.users') }}" class="d-flex align-items-center justify-content-around border mb-3 item">
            <span class="d-inline-block text-center mx-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
            </span>
            <span class="d-inline-block w-100 fs-3 fw-light">Utilisateurs</span>
        </a>
        <a href="{{ route('dashboard.cars') }}" class="d-flex align-items-center justify-content-around border mb-3 text-dark text-bg-light text-decoration-none">
            <span class="d-inline-block text-center mx-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                    <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                </svg>
            </span>
            <span class="d-inline-block w-100 fs-3 fw-light">Voitures</span>
        </a>
        <a href="{{ route('dashboard.rentals') }}" class="d-flex align-items-center justify-content-around border mb-3 item">
            <span class="d-inline-block text-center mx-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-database-fill" viewBox="0 0 16 16">
                    <path d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223"/>
                    <path d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                    <path d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                    <path d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                </svg>
            </span>
            <span class="d-inline-block w-100 fs-3 fw-light">Locations</span>
        </a>
        <a href="{{ route('page.createCar') }}" class="d-flex align-items-center justify-content-around border mb-3 item">
            <span class="d-inline-block text-center mx-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                </svg>
            </span>
            <span class="d-inline-block w-100 fs-3 fw-light">Créer une voiture</span>
        </a>
    </div>
    <div class="w-75 h-100 d-flex align-items-start details">
        <table class="table mx-5 mt-3 h-100 text-center">
            <thead>
                    <tr>
                       <th scope="col">id</th>
                       <th scope="col">Designation</th>
                       <th scope="col">Model</th>
                       <th scope="col">Année</th>
                       <th scope="col">Disponible</th>
                       <th scope="col">Numéro d'enregistrement</th>
                       <th scope="col">Action</th>
                   </tr>
               </thead>
             <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <th scope="col">{{ $car->id }}</th>
                        <td>{{ $car->brand }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->year }}</td>
                        <td>
                            @if ( $car->availability == 1 )
                                Oui
                            @else
                                Non
                            @endif
                        </td>
                        <td>{{ $car->registration_number }}</td>
                        <td>
                            <a href="{{ route('cars.edit' , ['id' => $car->id]) }}" class="btn btn-success">Modifier</a>
                            <form action="{{ route('cars.delete', ['id' => $car->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
             </tbody>
        </table>
    </div>
</section>
@include('../_footer')