@include('_header')
<div class="container-fluid min-vh-100 d-flex flex-column flex-md-row py-5 contact">

    <div class="container-md w-md-50 position-relative h-100 mt-5 ">
        <img src={{ asset('assets/v2.jpg')}}
            alt="Contactez-nous"
            class="img-fluid position-absolute transition-opacity duration-1000 rounded-md ease-in-out" />
    </div>

    <div class="bg-white py-4 container-md w-md-50 mt-5">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-weight-bold text-center mb-4 text-success">Contactez-nous</h2>
            <form class="max-w-md mx-auto">
                <div class="mb-3">
                    <label for="name" class="form-label text-gray-600">Nom</label>
                    <input type="text" id="name" name="name"
                        class="form-control border border-gray-300 rounded p-2 bg-light focus:outline-none focus-border-primary"
                        placeholder="Votre nom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="form-control border border-gray-300 rounded p-2 bg-light focus:outline-none focus-border-primary"
                        placeholder="Votre email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label text-gray-600">Message</label>
                    <textarea id="message" name="message" rows="4"
                        class="form-control border border-gray-300 rounded p-2 bg-light focus:outline-none focus-border-primary"
                        placeholder="Votre message"></textarea>
                </div>
                <div class="text-center">
                    <a  href="{{ route('car.acceuil') }}"
                        class="btn btn-success w-100 h-40 text-white font-weight-bold">Envoyer</a>
                </div>
            </form>
        </div>
    </div>
</div>
@include('_footer')