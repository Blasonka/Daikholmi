@extends('layouts.app')

@section('content')
    <section class="py-5 d-flex align-items-center min-vh-100 position-relative">
        <div class="container">
            <div class="col-md-4 d-none d-md-block h-100 position-absolute top-0 start-0 bg-primary" style="z-index:-2;">
            </div>
            <div class="col-md-8 h-100 position-absolute top-0 end-0 bg-light" style="z-index:-2;">
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="bg-white p-5 shadow">
                        <h1 class="display-3 fw-bold">Középiskolai felkészítő <span class="text-primary">Győrben</span>
                        </h1>
                        <p class="lead my-4">Intenzív felkészítés a középiskolai írásbeli felvételi vizsgára</p><a
                            class="btn btn-lg btn-primary" href="{{ route('student.create') }}">Jelentkezés</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-3">
                <div class="col-lg-8 col-xl-7">
                    <h2 class="display-5 fw-bold">Intenzív felkészítés</h2>
                    <p class="lead">a középiskolai írásbeli felvételi vizsgára</p>
                </div>
            </div>
            <div class="row g-4 g-md-5">
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="text-primary me-4">
                            <svg class="bi bi-aspect-ratio" fill="currentColor" height="32" viewbox="0 0 16 16"
                                width="32" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z">
                                </path>
                                <path
                                    d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="mb-2 mb-lg-3 fw-bold">...</h5>
                            <p><span class="text-decoration-underline"> Bármelyik középiskolába jelentkezik</span>, az
                                írásbeli felvételi vizsgán lehet megszerezni és
                                elveszteni a legtöbb pontot – figyelmetlenségből, az izgalom miatt, vagy mert ismeretlen
                                feladat típussal találkozik gyermekünk.
                                <strong>Minimális pontkülönbség dönthet a sikeres felvételi és az elutasítás
                                    között!</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="text-primary me-4">
                            <svg class="bi bi-emoji-wink" fill="currentColor" height="32" viewbox="0 0 16 16"
                                width="32" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path
                                    d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm1.757-.437a.5.5 0 0 1 .68.194.934.934 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.934 1.934 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="mb-2 mb-lg-3 fw-bold">Felkészítés</h5>
                            <p>Tanáraink kis csoportok (maximum 20 fő) részére tartanak speciális, intenzív felkészítést
                                felvételi tárgyakból (matematika – magyar nyelv és irodalom), heti 2 tanóra + kötelező
                                otthoni tanulással (házi feladat), egyéni értékelés, 4, 6 és nyolcosztályos képzésre
                                jelentkezőknek egyaránt. A szintfelmérő dolgozatok eredményéről a szülők visszajelzést
                                kapnak, az órai munkát digitális tanterem egészíti ki, biztosítva a házi feladatokhoz a
                                könnyebb hozzáférést, az esetleges hiányzások egyszerű pótlását!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="text-primary me-4">
                            <svg class="bi bi-layout-text-window-reverse" fill="currentColor" height="32"
                                viewbox="0 0 16 16" width="32" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z">
                                </path>
                                <path
                                    d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="mb-2 mb-lg-3 fw-bold">Képzések</h5>
                            <p>(3.) 4. osztály - <a href="https://maps.app.goo.gl/X8TLdsf6KeM6cFax9"
                                    target="_blank">Kazinczy Ferenc Gimnázium, Győr</a><br>
                                (5.) 6. és (7.) 8. osztály - <a href="https://maps.app.goo.gl/zeqwzXCummqQyBGy9"
                                    target="_blank">Révai Miklós Gimnázium, Győr</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex">
                        <div class="text-primary me-4">
                            <svg class="bi bi-clipboard-check" fill="currentColor" height="32" viewbox="0 0 16 16"
                                width="32" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"
                                    fill-rule="evenodd"></path>
                                <path
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z">
                                </path>
                                <path
                                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="mb-2 mb-lg-3 fw-bold">Aktuális</h5>
                            <p>
                                1. rész - 2025. március 10-től májusig<br>
                                2. rész - 2025. szeptembertől novemberig<br>
                                3. rész - 2025. novembertől 2026. januári vizsgáig
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <!-- Heading -->
            <div class="row text-center mb-4">
                <div class="col-12 col-lg-10 col-xl-8 mx-auto text-center">
                    <p class="text-muted mb-0 fw-light">Lépések</p>
                    <h2>Előzetes regisztráció</h2>
                    <p class="lead mb-4">(nem kötelez semmire, csak a helyet biztosítjuk)</p>
                </div>
            </div><!-- Steps Wrap -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Step -->
                    <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5">
                        <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-primary border border-white border-4"
                            style="width: 4rem; height:4rem; margin-top: -3rem;">
                            1
                        </div>
                        <h5 class="mt-3">...</h5>
                        <p class="text-muted">E-mailt kell küldeni a <strong>felkeszitgyor@gmail.com</strong> címre,
                            melynek
                            tartalma: diák
                            neve, évfolyama, iskola neve, kapcsolattartó szülő telefonszáma, szülő e-mail címe, lakcím
                            vagy számlacím. <strong>A regisztráció még nem jelent egyben beiratkozást is!</strong></p>
                    </div>
                    <!-- Step -->
                    <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5">
                        <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-primary border border-white border-4"
                            style="width: 4rem; height:4rem; margin-top: -3rem;">
                            2
                        </div>
                        <h5 class="mt-3">...</h5>
                        <p class="text-muted">Pár napon belül mindenki visszajelzést kap a regisztrációról és általános
                            tájékoztatást a
                            tanfolyamról. Aki nem kapja meg, jelezze a <strong>diakholmi@gmail.com</strong> címen vagy a
                            <strong>20/969-1417</strong>-es telefonon!
                        </p>
                    </div>
                    <!-- Step -->
                    <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5">
                        <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-primary border border-white border-4"
                            style="width: 4rem; height:4rem; margin-top: -3rem;">
                            3
                        </div>
                        <h5 class="mt-3">...</h5>
                        <p class="text-muted">A tanfolyam kezdése előtt a regisztráltakat tájékoztatjuk az aktuális
                            információkról (mikor –
                            nap, óra – kezdődik, hány csoportot tudunk indítani, mennyibe kerül, ki tartja, mit kell
                            hozni, stb…) és a beiratkozás helyéről, idejéről. <strong>Beiratkozásról csak a pontos
                                adatok birtokában kell dönteni!</strong></p>
                    </div>
                    <!-- Step -->
                    <div class="card rounded-0 text-center p-3 bg-light px-5 mb-5">
                        <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-primary border border-white border-4"
                            style="width: 4rem; height:4rem; margin-top: -3rem;">
                            4
                        </div>
                        <h5 class="mt-3">...</h5>
                        <p class="text-muted">A csoportok kialakítása a beiratkozáskor történik, kisebb változásokra
                            szülői
                            kérésre (pl.
                            órarend változás miatt, iskolai program, betegség, stb…) lehetőséget adunk. Egyeztetés után
                            bekapcsolódni később is van lehetőség, de a tanfolyam elindulása után jelentkezőket csak a
                            szabad helyek függvényében tudjuk fogadni!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
