<?php
/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="overlay">

    <section class="form-modal" aria-labelledby="form-title">

        <div class="form-top">

            <a class="close"
               href="<?= $link->url('home.index') ?>"
               aria-label="Zavrieť">
                ×
            </a>

            <h1 id="form-title">
                Pridať novú nehnuteľnosť
            </h1>

            <p>
                Vyplňte základné informácie o nehnuteľnosti
            </p>

        </div>


        <form class="property-form">

            <div class="field">
                <label for="title">Názov</label>

                <input
                    id="title"
                    type="text"
                    placeholder="Napr. Rodinný dom v Žiline"
                >
            </div>


            <div class="form-row">

                <div class="field">
                    <label for="price">Cena</label>

                    <input
                        id="price"
                        type="number"
                        min="1"
                        placeholder="€"
                    >
                </div>


                <div class="field">
                    <label for="location">Lokalita</label>

                    <input
                        id="location"
                        type="text"
                        placeholder="Žilina"
                    >
                </div>

            </div>


            <div class="field">

                <label for="description">Popis</label>

                <textarea
                    id="description"
                    placeholder="Stručný opis nehnuteľnosti..."
                ></textarea>

                <span class="counter">
                    2000 znakov zostáva
                </span>

            </div>


            <div class="form-row">

                <div class="field">

                    <label for="type">
                        Typ nehnuteľnosti
                    </label>

                    <select id="type">
                        <option>Vyberte typ</option>
                        <option>House</option>
                        <option>Apartment</option>
                        <option>Villa</option>
                        <option>Cabin</option>
                    </select>

                </div>


                <div class="field">

                    <label for="style">
                        Štýl nehnuteľnosti
                    </label>

                    <select id="style">
                        <option>Vyberte štýl</option>
                        <option>A-Frame</option>
                        <option>Bungalow</option>
                        <option>Cottage</option>
                        <option>Dome</option>
                    </select>

                </div>

            </div>


            <div class="form-row three">

                <div class="field">

                    <label for="rooms">
                        Počet izieb
                    </label>

                    <input
                        id="rooms"
                        type="number"
                        min="1"
                    >

                </div>


                <div class="field">

                    <label for="baths">
                        Počet kúpeľní
                    </label>

                    <input
                        id="baths"
                        type="number"
                        min="0"
                    >

                </div>


                <div class="field">

                    <label for="size">
                        Rozloha m²
                    </label>

                    <input
                        id="size"
                        type="number"
                        min="1"
                    >

                </div>

            </div>


            <section>

                <p class="field-title">
                    Accessibility features
                </p>

                <div class="chips">

                    <span class="chip">
                        Wheelchair accessible
                    </span>

                    <span class="chip">
                        Elevator
                    </span>

                    <span class="chip">
                        Accessible parking
                    </span>

                    <span class="chip">
                        Step-free access
                    </span>

                    <span class="chip">
                        Ground-floor access
                    </span>

                </div>

            </section>


            <section>

                <p class="field-title">
                    Fotografie nehnuteľnosti
                </p>

                <label class="upload-box">

                    <span>
                        <strong>
                            Kliknite pre výber fotografií
                        </strong>
                    </span>

                    <input
                        type="file"
                        hidden
                        multiple
                    >

                </label>

            </section>


            <div class="form-actions">

                <button
                    type="button"
                    class="primary-button"
                >
                    Uložiť
                </button>

            </div>

        </form>

    </section>

</main>
