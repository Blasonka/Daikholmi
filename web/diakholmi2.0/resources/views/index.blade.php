@extends('layouts.app')

@section('content')
    <section class="py-5 d-flex align-items-center min-vh-100 position-relative">
        <div class="container">
            <div class="col-md-4 d-none d-md-block h-100 position-absolute top-0 start-0 bg-success" style="z-index:-2;">
            </div>
            <div class="col-md-8 h-100 position-absolute top-0 end-0 bg-dark" style="z-index:-2;">
                <img alt="" class="img-fluid h-100 opacity object-fit-cover" src="/img/library3.jpg">
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="bg-theme p-5 shadow">
                        <h1 class="display-3 fw-bold">Középiskolai felkészítő <span class="text-success">Győrben</span>
                        </h1>
                        <p class="lead my-4">Intenzív felkészítés a középiskolai írásbeli felvételi vizsgára</p>
                        <a class="btn btn-lg btn-success d-block d-md-inline mx-md-auto mx-0" href="{{ route('students.create') }}">Jelentkezés</a>                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-theme" id="study">
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
                        <div class="text-success me-4">
                            <svg class="bi bi-aspect-ratio" fill="currentColor" height="32" viewbox="0 0 16 16"
                                width="32" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-sort-numeric-up-alt" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.36 7.098c-1.137 0-1.708-.657-1.762-1.278h1.004c.058.223.343.45.773.45.824 0 1.164-.829 1.133-1.856h-.059c-.148.39-.57.742-1.261.742-.91 0-1.72-.613-1.72-1.758 0-1.148.848-1.836 1.973-1.836 1.09 0 2.063.637 2.063 2.688 0 1.867-.723 2.848-2.145 2.848zm.062-2.735c.504 0 .933-.336.933-.972 0-.633-.398-1.008-.94-1.008-.52 0-.927.375-.927 1 0 .64.418.98.934.98" />
                                <path
                                    d="M12.438 8.668V14H11.39V9.684h-.051l-1.211.859v-.969l1.262-.906h1.046zM4.5 13.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707z" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="mb-2 mb-lg-3 fw-bold">Siker</h5>
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
                        <div class="text-success me-4">
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
                        <div class="text-success me-4">
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
                        <div class="text-success me-4">
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

    <section class="py-5 bg-theme">
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
                    <div class="card rounded-0 text-center p-3 bg-success-subtle px-5 mb-5">
                        <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4"
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
                    <div class="card rounded-0 text-center p-3 bg-success-subtle px-5 mb-5">
                        <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4"
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
                    <div class="card rounded-0 text-center p-3 bg-success-subtle px-5 mb-5">
                        <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4"
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
                    <div class="card rounded-0 text-center p-3 bg-success-subtle px-5 mb-5">
                        <div class="d-flex rounded-circle mx-auto align-items-center justify-content-center text-white fs-3 fw-bold bg-success border border-white border-4"
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
