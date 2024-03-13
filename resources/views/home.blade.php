@extends('layouts.app')

@section('content')
    <div class="home">

        <section class="sec1">
            <ul class="slide">
                <li class="slide_item">
                    <figure>
                        <img src="images/bg/bg3.jpg" alt="bg3">
                        <figcaption>
                            <h2>Nora's</h2>
                            <p>Home Page</p>
                            <a href="#">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="slide_item">
                    <figure>
                        <img src="images/bg/bg4.jpg" alt="bg4">
                        <figcaption>
                            <h2>Nora's</h2>
                            <p>Home Page</p>
                            <a href="#">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="slide_item">
                    <figure>
                        <img src="images/bg/bg5.jpg" alt="bg5">
                        <figcaption>
                            <h2>Nora's</h2>
                            <p>Home Page</p>
                            <a href="#">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="slide_item">
                    <figure>
                        <img src="images/bg/bg7.jpg" alt="bg7">
                        <figcaption>
                            <h2>Nora's</h2>
                            <p>Home Page</p>
                            <a href="#">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="slide_item">
                    <figure>
                        <img src="images/bg/bg6.jpg" alt="bg6">
                        <figcaption>
                            <h2>Nora's</h2>
                            <p>Home Page</p>
                            <a href="#">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="slide_item">
                    <figure>
                        <img src="images/bg/bg7.jpg" alt="bg7">
                        <figcaption>
                            <h2>Nora's</h2>
                            <p>Home Page</p>
                            <a href="#">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="slide_item">
                    <figure>
                        <img src="images/bg/bg8.jpg" alt="bg8">
                        <figcaption>
                            <h2>Nora's</h2>
                            <p>Home Page</p>
                            <a href="#">Read More</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="slide_item">
                    <figure>
                        <img src="images/bg/bg9.jpg" alt="bg9">
                        <figcaption>
                            <h2>Nora's</h2>
                            <p>Home Page</p>
                            <a href="#">Read More</a>
                        </figcaption>
                    </figure>
                </li>
            </ul>

            <nav class="nav">
                <ion-icon class="btn prev" name="arrow-dropleft-circle"></ion-icon>
                <ion-icon class="btn next" name="arrow-dropright-circle"></ion-icon>
            </nav>
        </section>

        <section class="sec2">
            <!-- vue 컴포넌트 삽입 -->
            <about-component></about-component>
        </section>

        <section class="sec3">
            <certification-component></certification-component>
        </section>

        <section class="sec4">
            <portfolio-component></portfolio-component>
        </section>

        <section class="sec5">
            <comment-component></comment-component>
        </section>

        <section class="sec6">
            <here-component></here-component>
        </section>
    </div>
@endsection

<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script>
    document.addEventListener("click", activate);

    function activate(e) {
        const slider = document.querySelector(".slide");
        const items = document.querySelectorAll(".slide_item");

        e.target.matches(".next") && slider.append(items[0]);
        e.target.matches(".prev") && slider.prepend(items[items.length - 1]);

        /*
        if (e.target.matches(".next")) {
            slider.append(items[0]);
        }

        if (e.target.matches(".prev")) {
            slider.prepend(items[items.length - 1]);
        }
        */
    }
</script>
