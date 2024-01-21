@include('_header')
<section class="welcome">
    <div class="item d-flex flex-column align-items-center justify-content-center text-white">
        <div class="titre text-center">Car Rental Management</div>
        <p class="text-center mb-5 fw-light fs-1">vous souhaite la bienvenue</p>
        <a href="{{ route('car.cars') }}" class="btn btn-success">Découvrez nos voitures</a>
    </div>
</section>
<section class="about py-5">
      <div class="container d-flex justify-content-between about-container">
          <img src="assets/v1.webp" alt="about" />
          <div class="d-flex flex-column justify-content-between content">
                <h3 class="text-success text-center">À propos de nous</h3>
                <p class="fw-light">Bienvenue sur notre plateforme de gestion de location de voitures ! Chez [Nom de l'entreprise], nous sommes passionnés par la simplification du processus de location de voitures pour offrir une expérience utilisateur fluide et agréable.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil sed aliquam ipsum eveniet necessitatibus aliquid pariatur recusandae neque, possimus accusantium sint incidunt. Libero pariatur sequi dolores. Tempora consequatur minima quisquam.</p>
                <p class="fw-light">Notre mission est de fournir à nos utilisateurs un moyen pratique et efficace de gérer la location de véhicules. Que vous soyez un administrateur gérant un parc automobile ou un utilisateur à la recherche de la voiture parfaite, notre plateforme offre des fonctionnalités robustes et conviviales pour répondre à vos besoins.</p>
                <a href="{{ route('page.contact') }}" class="btn btn-success">Contactez-nous</a>
          </div>
      </div>
</section>
<section class="innovation py-5">
    <div class="container innovation-container">
        <div class="fs-3 text-success">Pourquoi nous choisir ?</div>
        <div class="d-flex flex-column w-100 mt-5">
            <div class="item d-flex w-100 mb-4">
                <span class="text-bg-success number text-white fw-bold fs-3 ">1</span>
                <div class="d-flex flex-column content mx-3 justify-content-center">
                    <p class="mb-3 title text-success fs-3">Gestion intuitive</p>
                    <p class="description fw-light ">Grâce à notre interface utilisateur conviviale, la gestion des véhicules et des locations devient un jeu d'enfant.</p>
                </div>
            </div>
            <div class="item d-flex w-100 mb-4 mx-5">
                <span class="text-bg-success number text-white fw-bold fs-3 ">2</span>
                <div class="d-flex flex-column content mx-3 justify-content-center">
                    <p class="mb-3 title text-success fs-3">Sécurité Avancée</p>
                    <p class="description fw-light ">Vos données sont notre priorité. Nous mettons en œuvre des mesures de sécurité avancées pour assurer la confidentialité et l'intégrité de vos informations.</p>
                </div>
            </div>
            <div class="item d-flex w-100 mb-4">
                <span class="text-bg-success number text-white fw-bold fs-3 ">3</span>
                <div class="d-flex flex-column content mx-3 justify-content-center">
                    <p class="mb-3 title text-success fs-3">Flexibilité Personnalisée</p>
                    <p class="description fw-light "> Que vous soyez un utilisateur individuel ou une entreprise, nos fonctionnalités peuvent être adaptées pour répondre à vos exigences spécifiques.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products py-5">
    <div class="container products-container">
        <div class="fs-3 text-success">Nos voitures</div>
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
<section class="testimony py-5">
    <div class="container testimonies-container">
        <div class="fs-3 text-success">Nos clients témoignent</div>
        <div class="mt-5 d-flex flex-wrap justify-content-between all-testimonies">
            <div class="testimony-item p-3">
                <div class="testimony-text-container">
                  <p class="text-justify fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ea odit modi saepe facilis culpa recusandae laboriosam ducimus, harum eveniet aliquid corporis minus velit, adipisci qui omnis sequi? Quos, fuga?</p>
                </div>
                <div class="testimony-user">
                  <img src="{{ asset('assets/v1.webp') }}" class="testimony-user-logo">
                  <p>Charlot DEDJINOU</p>
                </div>
              <div>Expert Debugger</div>
            </div>
            <div class="testimony-item p-3">
                <div class="testimony-text-container">
                  <p class="text-justify fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ea odit modi saepe facilis culpa recusandae laboriosam ducimus, harum eveniet aliquid corporis minus velit, adipisci qui omnis sequi? Quos, fuga?</p>
                </div>
                <div class="testimony-user">
                  <img src="{{ asset('assets/v4.jpg') }}" class="testimony-user-logo">
                  <p>Destiny Espoir Joël</p>
                </div>
              <div>Data Scientist</div>
            </div>
            <div class="testimony-item p-3">
                <div class="testimony-text-container">
                  <p class="text-justify fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ea odit modi saepe facilis culpa recusandae laboriosam ducimus, harum eveniet aliquid corporis minus velit, adipisci qui omnis sequi? Quos, fuga?</p>
                </div>
                <div class="testimony-user">
                  <img src="{{ asset('assets/v3.jpg') }}" class="testimony-user-logo">
                  <p>Samira Bandolo</p>
                </div>
              <div>Developpeuse Web</div>
            </div>
            <div class="testimony-item p-3">
                <div class="testimony-text-container">
                  <p class="text-justify fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut ea odit modi saepe facilis culpa recusandae laboriosam ducimus, harum eveniet aliquid corporis minus velit, adipisci qui omnis sequi? Quos, fuga?</p>
                </div>
                <div class="testimony-user">
                  <img src="assets/v1.webp" class="testimony-user-logo">
                  <p>Samira MVOGO</p>
                </div>
              <div>Developpeuse Mobile</div>
            </div>
        </div>
    </div>
</section>
<section class="newsletter py-5">
    <div class="newsletter-container container d-flex flex-column align-items-center text-bg-success py-5">
        <p class="fs-3 mb-5">Souscrivez à nos newsletter</p>
        <form class="newsletter-form">
            <input type="email" placeholder="example@gmail.com">
            <input type="submit" value="S'abonner">
        </form>
    </div>
 </section>
@include('_footer')