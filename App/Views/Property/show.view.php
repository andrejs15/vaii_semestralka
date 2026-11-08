<?php
/** @var \App\Models\Property $property */
/** @var \Framework\Support\LinkGenerator $link */

?>

<main class="property-detail">

    <section class="property-detail-card">

        <a href="<?= $link->url('home.index') ?>">
            ← Späť
        </a>

        <h1>
            <?= $property->title ?>
        </h1>

        <p class="price">
            <?= number_format($property->price, 0, ',', ' ') ?> €
        </p>

        <p>
            <strong>Lokalita:</strong>
            <?= $property->location ?>
        </p>

        <p>
            <strong>Typ:</strong>
            <?= $property->propertyType ?>
        </p>

        <p>
            <strong>Štýl:</strong>
            <?= $property->styleOfHome ?>
        </p>

        <div class="property-meta">
            <span>
                🛏 <?= $property->rooms ?> izieb
            </span>

            <span>
                🛁 <?= $property->baths ?> kúpeľní
            </span>

            <span>
                ↔ <?= $property->size ?> m²
            </span>
        </div>

        <section class="property-description">

            <h2>
                Popis
            </h2>

            <p>
                <?= $property->description ?>
            </p>

        </section>

        <div class="property-actions">

            <a
                href="<?= $link->url(
                    'property.edit',
                    ['id' => $property->id]
                ) ?>"
                class="primary-button"
            >
                Upraviť
            </a>

        </div>

    </section>

</main>