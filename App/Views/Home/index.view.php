<?php
/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Property[] $properties */
?>

<main class="application-layout">

    <aside class="filters">
        <div class="filters-header">
            <h2>Filters</h2>
            <a class="reset" href="#">Reset filters</a>
        </div>

        <section class="filter-group">
            <h3>Property type</h3>

            <div class="check-list">
                <label>
                    <input type="checkbox">
                    Apartment
                </label>

                <label>
                    <input type="checkbox">
                    Cabin
                </label>

                <label>
                    <input type="checkbox">
                    House
                </label>

                <label>
                    <input type="checkbox">
                    Villa
                </label>
            </div>
        </section>


        <section class="filter-group">
            <h3>Style of home</h3>

            <div class="check-list">
                <label>
                    <input type="checkbox">
                    A-Frame
                </label>

                <label>
                    <input type="checkbox">
                    Bungalow
                </label>

                <label>
                    <input type="checkbox">
                    Cottage
                </label>

                <label>
                    <input type="checkbox">
                    Dome
                </label>
            </div>
        </section>


        <section class="filter-group">
            <h3>Price</h3>

            <div class="two-fields">

                <select class="select-field">
                    <option>Any</option>
                    <option>150 000 €</option>
                </select>

                <select class="select-field">
                    <option>Any</option>
                    <option>500 000 €</option>
                </select>

            </div>
        </section>


        <section class="filter-group">
            <h3>Rooms</h3>

            <div class="two-fields">

                <select class="select-field">
                    <option>Any</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>

                <select class="select-field">
                    <option>Any</option>
                    <option>1</option>
                    <option>2</option>
                </select>

            </div>
        </section>


        <section class="filter-group">
            <h3>Accessibility Features</h3>

            <div class="check-list">
                <label>
                    <input type="checkbox">
                    Wheelchair accessible
                </label>

                <label>
                    <input type="checkbox">
                    Elevator
                </label>

                <label>
                    <input type="checkbox">
                    Accessible parking
                </label>
            </div>
        </section>

    </aside>


    <section class="listings" aria-labelledby="results-title">

        <div class="content-header">

            <h1 id="results-title">
                Showing <?php echo count($properties) ?> search results
            </h1>

            <label class="sort">
                Sort by:

                <select>
                    <option>Newest</option>
                    <option>Oldest</option>
                    <option>Popular</option>
                </select>
            </label>

        </div>


        <div class="card-grid">
            <?php foreach ($properties

            as $property) { ?>
            <article class="property-card">
                <a href="<?= $link->url('property.show', ['id' => $property->id]) ?>">
                    <div class="image-placeholder"></div>

                    <div class="card-body">
                        <p class="price"><?= number_format($property->price, 0, ',', ' ') ?>€</p>

                        <p class="property-name">
                            <?= $property->title ?>, <?= $property->location ?>
                        </p>

                        <div class="property-meta">
                            <span>🛁 <?= $property->baths ?></span>
                            <span>🛏 <?= $property->rooms ?></span>
                            <span>↔ <?= $property->size ?> m²</span>
                        </div>
                        <a href="<?= $link->url('property.edit', ['id' => $property->id]) ?>">
                            Upraviť
                        </a>
                </a>
                <form
                        action="<?= $link->url('property.delete', ['id' => $property->id]) ?>"
                        method="POST"
                >
                    <button type="submit">
                        Vymazať
                    </button>
                </form>

        </div>

        </article>
        <?php } ?>
        </div>
    </section>


    <aside class="map-panel" aria-label="Mapa">
        <div class="map-placeholder">
            MAPA
        </div>
    </aside>

</main>