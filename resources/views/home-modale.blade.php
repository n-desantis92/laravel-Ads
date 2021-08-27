@extends('layouts.base')

@section('content')
    <header>
        <div class="logo">
            <img src="img/logo-spotify.png" alt="logo spotify">
        </div>
        <nav>
            <ul>
                <li>Cookie</li>
                <li>Session</li>
            </ul>
        </nav>

    </header>
    <main>
        <h1>Passa a premium gratis per 1 mese</h1>
        <h2>Al termine dell'offerta, solo 	&euro; 9,99 al mese. Annulla in qualsiasi momento.</h2>
        <button class="piani" >vedi i piani</button>
        <h5>Si applicano termini e condizioni. L'offerta di 1 mese gratis non è disponibile per gli utenti che hanno già provato Spotify Premium.</h5>
    </main>

@endsection

@section('modale')
        <div class="cont-modale">

            <div class="modale">
                <div class="close">
                    <i class="fas fa-times"></i>
                </div>
                <div class="header-mod">
                    <div class="logo-modal">
                        <img src="img/logo-spotify.png" alt="logo spotify">
                    </div>
                </div>
                <div class="main-mod">
                    <div class="mod-top">
                        <h2>&#36;7.90</h2>
                        <p>per month</p>
                    </div>
                    <div class="mod-center">
                        <h3>Includes</h3>
                        <ul>
                            <li>
                                A Spotify Premium subscription (Ad free, listen offline)
                            </li>
                            <li>
                                No data changes for music listening on Spotify Premium
                            </li>
                            <li>
                                12-mounth contract applies
                            </li>
                        </ul>
                    </div>
                    <div class="mod-bottom">
                        <button>Subscibe</button>
                        <p>Or &#36; 9.90 per mounth without contract</p>
                    </div>
                </div>
            </div>
        </div>
@endsection