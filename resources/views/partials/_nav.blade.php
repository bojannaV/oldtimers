<div class="masthead">

    <h1 class="text-muted text-center">Thorsten von der Ohe</h1>
    <p class="text-center">- Ihr partner fur erlesene Mercedes-Benz 107SL -</p>

    <nav>
        <ul class="nav nav-justified">
            <li>
                <a href="{{ route('pages.index') }}"  class="{{ active('/') }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('pages.about') }}" class="{{ active('about') }}">
                    Uber mich
                </a>
            </li>
            <li>
                <a href="{{ route('cars.index') }}" class="{{ active('fahrzeugen-aktuell') }}">
                    Garage
                </a>
            </li>
            <li><a href="#">Ausfarht</a></li>
            <li><a href="#">Rundum-Service</a></li>
            <li><a href="#">Wissenwertes</a></li>
            <li><a href="{{ route('pages.contact') }}" class="{{ active('kontakt') }}">Kontakt</a></li>
        </ul>
    </nav>
</div>
