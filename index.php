<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thread — The Field Pack | Free Bootstrap 5 Single-Product Template</title>
  <meta name="description" content="Thread is a free Bootstrap 5 single-product landing template — a story-driven, editorial page for one hero product. Built with vanilla JavaScript and inline SVG icons, zero dependencies.">
  <meta name="author" content="uiCookies">

  <meta property="og:type" content="product">
  <meta property="og:title" content="Thread — The Field Pack, one bag for everywhere">
  <meta property="og:description" content="A single-product direct-to-consumer landing template. Editorial, confident, one buy path.">
  <meta property="og:image" content="img/hero.jpg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400;1,9..144,500&family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "The Field Pack",
    "brand": { "@type": "Brand", "name": "Thread" },
    "description": "A 20-litre everyday backpack in 100% recycled ballistic nylon with a suspended 16-inch laptop sleeve, weatherproof zips and a lifetime guarantee.",
    "image": "img/hero.jpg",
    "sku": "THREAD-FP01",
    "offers": {
      "@type": "Offer",
      "priceCurrency": "USD",
      "price": "165",
      "availability": "https://schema.org/InStock"
    },
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "2340"
    }
  }
  </script>
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <!-- announcement -->
  <div class="announce">
    Free carbon-neutral shipping worldwide &nbsp;·&nbsp; <strong>100-night trial</strong> &nbsp;·&nbsp; Lifetime guarantee
  </div>

  <!-- header -->
  <header class="site-header" id="header">
    <div class="wrap nav-row">
      <a class="brand" href="#top" aria-label="Thread — home">
        <span class="knot" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3c-3.5 2.5-3.5 6.5 0 9s3.5 6.5 0 9"/><path d="M12 3c3.5 2.5 3.5 6.5 0 9s-3.5 6.5 0 9"/></svg>
        </span>
        Thread
      </a>

      <nav class="main-nav" aria-label="Primary">
        <a href="#story">The problem</a>
        <a href="#features">Design</a>
        <a href="#specs">Specs</a>
        <a href="#reviews">Reviews</a>
        <a href="#faq">FAQ</a>
      </nav>

      <div class="nav-actions">
        <button class="icon-btn" aria-label="Search">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
        </button>
        <button class="icon-btn" aria-label="Your bag, 0 items">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8h12l-1 12H7L6 8z"/><path d="M9 8V6a3 3 0 0 1 6 0v2"/></svg>
        </button>
        <a class="btn-t nav-buy" href="#buy">Buy — <span class="price-tag">$165</span></a>
        <button class="icon-btn nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false" aria-controls="drawer">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
        </button>
      </div>
    </div>
  </header>

  <!-- mobile drawer -->
  <div class="drawer-backdrop" id="drawerBackdrop"></div>
  <aside class="drawer" id="drawer" aria-label="Mobile menu" aria-hidden="true">
    <div class="drawer-head">
      <span class="brand">Thread</span>
      <button class="icon-btn" id="drawerClose" aria-label="Close menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg>
      </button>
    </div>
    <nav aria-label="Mobile">
      <a href="#story">The problem</a>
      <a href="#features">Design</a>
      <a href="#specs">Specs</a>
      <a href="#reviews">Reviews</a>
      <a href="#faq">FAQ</a>
    </nav>
    <div class="drawer-foot">
      <a href="#buy" class="btn-t btn-block btn-lg">Buy The Field Pack — $165</a>
    </div>
  </aside>

  <main id="main">
    <span id="top"></span>

    <!-- ============================================================ HERO -->
    <section class="hero" aria-labelledby="hero-title" id="buy">
      <div class="wrap hero-grid">
        <div class="hero-copy">
          <span class="eyebrow">The Field Pack · Model 01</span>
          <h1 id="hero-title">One bag.<br><em>Everywhere.</em></h1>
          <p class="hero-sub">We spent three years making a single backpack so considered you never need another. 20 litres, recycled to the thread, guaranteed for life.</p>

          <div class="rating-row">
            <span class="stars" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
            </span>
            <span class="meta"><strong>4.9</strong> · 2,340 verified reviews</span>
          </div>

          <div class="buy-panel">
            <div class="buy-line">
              <span class="price">$165</span>
              <span class="was">$195</span>
              <span class="badge-save">Launch price</span>
            </div>

            <span class="field-label">Colour — <span class="swatch-name" id="swatchName">Pine</span></span>
            <div class="swatches" role="group" aria-label="Choose a colour">
              <button class="swatch" style="background:#2F5D50" data-color="Pine" aria-pressed="true" aria-label="Pine"></button>
              <button class="swatch" style="background:#3A3F46" data-color="Slate" aria-pressed="false" aria-label="Slate"></button>
              <button class="swatch" style="background:#B9A98A" data-color="Sand" aria-pressed="false" aria-label="Sand"></button>
              <button class="swatch" style="background:#7C4A3A" data-color="Clay" aria-pressed="false" aria-label="Clay"></button>
            </div>

            <div class="qtybuy">
              <div class="qty" aria-label="Quantity">
                <button type="button" id="qtyMinus" aria-label="Decrease quantity">&minus;</button>
                <input type="number" id="qtyInput" value="1" min="1" max="9" inputmode="numeric" aria-label="Quantity">
                <button type="button" id="qtyPlus" aria-label="Increase quantity">+</button>
              </div>
              <button class="btn-t btn-lg" style="flex:1" id="addToCart">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8h12l-1 12H7L6 8z"/><path d="M9 8V6a3 3 0 0 1 6 0v2"/></svg>
                Add to bag
              </button>
            </div>

            <ul class="buy-perks">
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Free 2-day shipping</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 100-night trial</li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Lifetime repairs</li>
            </ul>
          </div>
        </div>

        <div class="hero-media">
          <div class="hero-frame">
            <span class="tag-float">20 L · 1.08 kg</span>
            <img id="heroImg" src="img/hero.jpg" alt="The Field Pack backpack in pine, photographed against a warm studio backdrop">
          </div>
          <div class="thumbs" role="group" aria-label="Product views">
            <button class="thumb" data-full="img/hero.jpg" aria-pressed="true" aria-label="Front view">
              <img src="img/hero.jpg" alt="">
            </button>
            <button class="thumb" data-full="img/gallery1.jpg" aria-pressed="false" aria-label="Side profile">
              <img src="img/gallery1.jpg" alt="">
            </button>
            <button class="thumb" data-full="img/gallery2.jpg" aria-pressed="false" aria-label="Open main compartment">
              <img src="img/gallery2.jpg" alt="">
            </button>
            <button class="thumb" data-full="img/gallery3.jpg" aria-pressed="false" aria-label="Fabric detail">
              <img src="img/gallery3.jpg" alt="">
            </button>
            <button class="thumb" data-full="img/gallery4.jpg" aria-pressed="false" aria-label="Zipper hardware">
              <img src="img/gallery4.jpg" alt="">
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================================================= LOGO BAR -->
    <div class="logobar">
      <div class="wrap">
        <span class="as-seen">As covered in</span>
        <span class="press">Gearly</span>
        <span class="press">OFFGRID</span>
        <span class="press">Carry&nbsp;Weekly</span>
        <span class="press">Minimal<small>MAG</small></span>
        <span class="press">The&nbsp;Detail</span>
      </div>
    </div>

    <!-- ====================================================== PROBLEM/SOL -->
    <section class="section problem" id="story" aria-labelledby="story-title">
      <div class="wrap split">
        <div class="split-media reveal">
          <img src="img/problem.jpg" alt="A cluttered desk piled with a worn-out backpack and scattered belongings">
        </div>
        <div class="reveal">
          <span class="index">01</span>
          <span class="eyebrow">Why we built it</span>
          <h2 id="story-title">You own four bags. None of them are right.</h2>
          <p class="lead">The gym bag that can't hold a laptop. The commuter that dies in the rain. The "nice" one you're scared to scuff. So you keep buying — and keep being disappointed.</p>
          <ul class="problem-list">
            <li>
              <span class="ic" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"/></svg></span>
              <span class="txt"><b>Straps that dig in.</b> Thin webbing turns a full day of carrying into a sore-shoulder day.</span>
            </li>
            <li>
              <span class="ic" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"/></svg></span>
              <span class="txt"><b>Zips that fail first.</b> The cheapest component decides the lifespan of the whole bag.</span>
            </li>
            <li>
              <span class="ic" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"/></svg></span>
              <span class="txt"><b>A landfill by spring.</b> Fast bags aren't made to be repaired — they're made to be replaced.</span>
            </li>
          </ul>
          <p style="margin-top:1.6rem;font-family:var(--ff-display);font-size:1.35rem;color:var(--pine);line-height:1.4">So we made exactly one bag, and made it right.</p>
        </div>
      </div>
    </section>

    <!-- ========================================================= FEATURES -->
    <section class="section section--stone" id="features" aria-labelledby="features-title">
      <div class="wrap">
        <div class="sec-head">
          <span class="index">02</span>
          <span class="eyebrow">The design</span>
          <h2 id="features-title">Every part earns its place.</h2>
          <p>No pocket exists to look busy on a spec sheet. Each one solves a problem we lived with for years.</p>
        </div>

        <div class="feature-row reveal">
          <div class="feature-media">
            <img src="img/feature-material.jpg" alt="Close-up of the pack's recycled ballistic-nylon weave">
          </div>
          <div class="feature-copy">
            <span class="eyebrow">Material</span>
            <h3>Recycled ballistic nylon that shrugs off weather.</h3>
            <p>The shell is a 900-denier recycled ballistic weave — the same abrasion class used in luggage that survives baggage handlers. A DWR finish beads off rain, and the whole textile is spun from post-consumer bottles.</p>
            <div class="feature-spec">
              <div class="item"><span class="n">900D</span><span class="l">Ballistic weave</span></div>
              <div class="item"><span class="n">100%</span><span class="l">Recycled shell</span></div>
              <div class="item"><span class="n">IPX4</span><span class="l">Weather rated</span></div>
            </div>
          </div>
        </div>

        <div class="feature-row reverse reveal">
          <div class="feature-media">
            <img src="img/feature-organize.jpg" alt="The open main compartment showing the padded laptop sleeve and organiser pockets">
          </div>
          <div class="feature-copy">
            <span class="eyebrow">Organisation</span>
            <h3>A place for the twelve things you actually carry.</h3>
            <p>A suspended 16&Prime; laptop sleeve keeps your machine off the ground on a hard drop. A fleece-lined nook protects sunglasses and a phone. The clamshell opens flat, so packing feels like a drawer, not a cave.</p>
            <div class="feature-spec">
              <div class="item"><span class="n">16&Prime;</span><span class="l">Suspended sleeve</span></div>
              <div class="item"><span class="n">7</span><span class="l">Considered pockets</span></div>
              <div class="item"><span class="n">180&deg;</span><span class="l">Clamshell open</span></div>
            </div>
          </div>
        </div>

        <div class="feature-row reveal">
          <div class="feature-media">
            <img src="img/feature-carry.jpg" alt="The Field Pack worn on the shoulders, showing the contoured strap system">
          </div>
          <div class="feature-copy">
            <span class="eyebrow">Comfort</span>
            <h3>Carries a full load like it's half empty.</h3>
            <p>Contoured shoulder straps spread weight across a wider footprint, and a breathable back panel keeps air moving on the walk from the platform. A hideaway sternum strap locks the load down when you break into a run for the 8:14.</p>
            <div class="feature-spec">
              <div class="item"><span class="n">42mm</span><span class="l">Contoured straps</span></div>
              <div class="item"><span class="n">3D</span><span class="l">Airflow back panel</span></div>
              <div class="item"><span class="n">12kg</span><span class="l">Comfortable load</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================ SPECS -->
    <section class="section" id="specs" aria-labelledby="specs-title">
      <div class="wrap specs-grid">
        <div class="specs-media reveal">
          <img src="img/specs.jpg" alt="The Field Pack photographed flat to show its full silhouette and dimensions">
        </div>
        <div>
          <span class="index">03</span>
          <span class="eyebrow">The numbers</span>
          <h2 id="specs-title" style="font-size:clamp(2rem,4vw,3rem)">Specifications, in full.</h2>
          <p class="lead" style="margin-bottom:2rem">No asterisks, no "up to". These are the real figures for Model&nbsp;01.</p>
          <dl class="spec-table">
            <div class="row-s"><dt>Capacity</dt><dd>20 L (expands to 24 L)</dd></div>
            <div class="row-s"><dt>Weight</dt><dd>1.08 kg / 2.4 lb</dd></div>
            <div class="row-s"><dt>Laptop</dt><dd>Fits up to 16&Prime; — suspended, padded sleeve</dd></div>
            <div class="row-s"><dt>Dimensions</dt><dd>46 &times; 30 &times; 15 cm</dd></div>
            <div class="row-s"><dt>Shell</dt><dd>900D recycled ballistic nylon, DWR coated</dd></div>
            <div class="row-s"><dt>Zips</dt><dd>#10 YKK AquaGuard, weather-sealed</dd></div>
            <div class="row-s"><dt>Hardware</dt><dd>Anodised aluminium &amp; Duraflex buckles</dd></div>
            <div class="row-s"><dt>Cabin</dt><dd>Meets IATA carry-on limits worldwide</dd></div>
            <div class="row-s"><dt>Warranty</dt><dd>Lifetime — free repairs, forever</dd></div>
          </dl>
        </div>
      </div>
    </section>

    <!-- ========================================================= COMPARE -->
    <section class="section section--stone" id="compare" aria-labelledby="compare-title">
      <div class="wrap">
        <div class="sec-head">
          <span class="eyebrow">Honest comparison</span>
          <h2 id="compare-title">How it stacks up.</h2>
          <p>We put the three bags most people are actually choosing between side by side. Here's where the money goes.</p>
        </div>
        <div class="compare-wrap reveal">
          <table class="compare">
            <thead>
              <tr>
                <th scope="col">&nbsp;</th>
                <th scope="col" class="own head-own"><span class="brandcol">The Field Pack</span></th>
                <th scope="col">Fast-fashion pack</th>
                <th scope="col">Heritage label</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Price</th>
                <td class="own">$165</td>
                <td>$45</td>
                <td>$290</td>
              </tr>
              <tr>
                <th scope="row">100% recycled shell</th>
                <td class="own"><span class="ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span></td>
                <td><span class="dash"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12h14"/></svg></span></td>
                <td><span class="dash"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12h14"/></svg></span></td>
              </tr>
              <tr>
                <th scope="row">Weather-sealed YKK zips</th>
                <td class="own"><span class="ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span></td>
                <td><span class="dash"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12h14"/></svg></span></td>
                <td><span class="ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span></td>
              </tr>
              <tr>
                <th scope="row">Suspended laptop sleeve</th>
                <td class="own"><span class="ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span></td>
                <td><span class="dash"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12h14"/></svg></span></td>
                <td><span class="dash"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12h14"/></svg></span></td>
              </tr>
              <tr>
                <th scope="row">Free lifetime repairs</th>
                <td class="own"><span class="ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span></td>
                <td><span class="dash"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12h14"/></svg></span></td>
                <td>2-year warranty</td>
              </tr>
              <tr>
                <th scope="row">Plastic-free packaging</th>
                <td class="own"><span class="ck"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></span></td>
                <td><span class="dash"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12h14"/></svg></span></td>
                <td><span class="dash"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M5 12h14"/></svg></span></td>
              </tr>
              <tr>
                <th scope="row">Weight</th>
                <td class="own">1.08 kg</td>
                <td>0.7 kg</td>
                <td>1.6 kg</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- ========================================================= REVIEWS -->
    <section class="section" id="reviews" aria-labelledby="reviews-title">
      <div class="wrap">
        <div class="rev-top">
          <div>
            <span class="eyebrow">What owners say</span>
            <h2 id="reviews-title" style="font-size:clamp(2rem,4vw,3rem);margin-bottom:0">Carried daily by 40,000 people.</h2>
          </div>
          <div class="rev-score">
            <span class="num">4.9</span>
            <span class="out">/ 5</span>
            <div>
              <span class="stars" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              </span>
              <div style="font-size:.85rem;color:var(--mute)">2,340 verified reviews</div>
            </div>
          </div>
        </div>

        <div class="rev-grid">
          <article class="rev-card reveal">
            <span class="stars" aria-label="5 out of 5 stars">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
            </span>
            <blockquote>"I sold the other three bags after a week. It rained the whole of my Lisbon trip and my laptop didn't get a drop on it."</blockquote>
            <div class="who">
              <span class="av"><img src="img/person1.jpg" alt="Portrait of Marcus Deveraux"></span>
              <div>
                <div class="nm">Marcus Deveraux</div>
                <div class="rl">Product designer · London</div>
                <span class="verified"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Verified buyer</span>
              </div>
            </div>
          </article>

          <article class="rev-card reveal">
            <span class="stars" aria-label="5 out of 5 stars">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
            </span>
            <blockquote>"Two years of daily commuting and a coffee spill it survived without a mark. The lifetime repair felt like a gimmick until I actually used it — free, no questions."</blockquote>
            <div class="who">
              <span class="av"><img src="img/person2.jpg" alt="Portrait of Priya Nandakumar"></span>
              <div>
                <div class="nm">Priya Nandakumar</div>
                <div class="rl">Nurse practitioner · Chicago</div>
                <span class="verified"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Verified buyer</span>
              </div>
            </div>
          </article>

          <article class="rev-card reveal">
            <span class="stars" aria-label="5 out of 5 stars">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.9 6.3 6.9.7-5.1 4.6 1.4 6.8L12 17.6 5.9 21l1.4-6.8L2.2 9.6l6.9-.7L12 2z"/></svg>
            </span>
            <blockquote>"As a photographer I abuse my gear. Six countries, one carry-on, this pack. It's the first bag that made me stop looking for a better one."</blockquote>
            <div class="who">
              <span class="av"><img src="img/person3.jpg" alt="Portrait of Elena Sørensen"></span>
              <div>
                <div class="nm">Elena Sørensen</div>
                <div class="rl">Travel photographer · Oslo</div>
                <span class="verified"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Verified buyer</span>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ======================================================= GUARANTEE -->
    <section class="section section--ink guarantee" aria-labelledby="guar-title">
      <div class="wrap split">
        <div>
          <span class="eyebrow" style="color:var(--sand)">Owned, not rented</span>
          <h2 id="guar-title">The last backpack you'll need to buy.</h2>
          <p class="lead">If it tears, snaps, splits or wears through — we fix it, free, for as long as you own it. And if the first 100 nights don't convince you, send it back for a full refund. We'll cover the shipping.</p>
          <ul class="guar-points">
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Lifetime repairs on every seam, strap and zip</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> 100-night trial, full refund, we pay return shipping</li>
            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg> Carbon-neutral delivery in plastic-free packaging</li>
          </ul>
          <a href="#buy" class="btn-t btn-paper btn-lg" style="margin-top:1.8rem">Get The Field Pack — $165</a>
        </div>
        <div class="guarantee-media reveal">
          <img src="img/guarantee.jpg" alt="A maker's hands stitching the reinforced base of the pack">
        </div>
      </div>
    </section>

    <!-- ============================================================= FAQ -->
    <section class="section" id="faq" aria-labelledby="faq-title">
      <div class="wrap faq-grid">
        <div>
          <span class="index">04</span>
          <span class="eyebrow">Good questions</span>
          <h2 id="faq-title" style="font-size:clamp(2rem,4vw,2.8rem)">Before you commit.</h2>
          <p style="color:var(--ink-soft)">Still unsure? Email <a href="#">hello@thread.example</a> and a real person replies within a day.</p>
        </div>
        <div class="faq-list">
          <details class="faq" open>
            <summary>What does the 100-night trial cover? <span class="plus" aria-hidden="true"></span></summary>
            <div class="faq-body"><p>Carry it every day for 100 nights. If it isn't the best bag you've owned, request a return from your account and we'll refund the full amount and pay for the return label — no restocking fee, no interrogation.</p></div>
          </details>
          <details class="faq">
            <summary>Is the lifetime guarantee really lifetime? <span class="plus" aria-hidden="true"></span></summary>
            <div class="faq-body"><p>Yes. For as long as you own the pack, we'll repair any failure in materials or workmanship at no cost. Zip pull snapped? Seam opened? Send it in and we'll fix it or replace the part. Normal wear and cosmetic aging are part of the story, not a defect.</p></div>
          </details>
          <details class="faq">
            <summary>Will it fit my laptop? <span class="plus" aria-hidden="true"></span></summary>
            <div class="faq-body"><p>The suspended sleeve fits laptops up to 16 inches, including 16&Prime; MacBook Pros and most 15.6&Prime; Windows machines. The sleeve floats above the base, so a hard drop lands on padding rather than your screen.</p></div>
          </details>
          <details class="faq">
            <summary>How many colours are there? <span class="plus" aria-hidden="true"></span></summary>
            <div class="faq-body"><p>Four: Pine, Slate, Sand and a limited Clay. We keep the range small on purpose — one considered bag in a colour you'll actually wear, rather than a wall of options you'll second-guess.</p></div>
          </details>
          <details class="faq">
            <summary>Where does it ship from, and how fast? <span class="plus" aria-hidden="true"></span></summary>
            <div class="faq-body"><p>We ship carbon-neutral from regional warehouses in the US, EU and UK. Standard delivery is free and lands in 2&ndash;4 working days; you'll get a tracked link the moment it leaves.</p></div>
          </details>
          <details class="faq">
            <summary>Can I carry it on a plane? <span class="plus" aria-hidden="true"></span></summary>
            <div class="faq-body"><p>At 46 &times; 30 &times; 15 cm it sits within IATA cabin guidelines and every major carrier's personal-item and carry-on limits we've tested. It slides under the seat in front or into an overhead with room to spare.</p></div>
          </details>
        </div>
      </div>
    </section>
  </main>

  <!-- ===================================================== STICKY BUY BAR -->
  <div class="buybar" id="buybar" aria-hidden="true">
    <div class="wrap">
      <div class="bb-prod">
        <span class="bb-thumb"><img src="img/gallery1.jpg" alt=""></span>
        <span class="bb-name">The Field Pack <span class="sub">Colour: <span id="bbColor">Pine</span> · 20 L</span></span>
      </div>
      <span class="bb-price">$165</span>
      <a href="#buy" class="btn-t" id="bbBuy">Add to bag</a>
    </div>
  </div>

  <!-- toast -->
  <div class="toast-note" id="toast" role="status" aria-live="polite">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
    <span id="toastMsg">Added to your bag</span>
  </div>

  <!-- ========================================================== FOOTER -->
  <footer class="site-footer">
    <div class="wrap">
      <div class="footer-top">
        <div class="footer-brand">
          <a class="brand" href="#top">
            <span class="knot" aria-hidden="true" style="color:var(--sand)">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3c-3.5 2.5-3.5 6.5 0 9s3.5 6.5 0 9"/><path d="M12 3c3.5 2.5 3.5 6.5 0 9s-3.5 6.5 0 9"/></svg>
            </span>
            Thread
          </a>
          <p>One bag, made once, made right. Recycled to the thread and guaranteed for life.</p>
          <form class="newsletter" id="newsletter" novalidate>
            <label for="nlEmail" class="visually-hidden" style="position:absolute;left:-9999px">Email address</label>
            <input type="email" id="nlEmail" name="email" placeholder="Your email — get $15 off" autocomplete="email" required>
            <button type="submit" class="btn-t">Join</button>
          </form>
          <div class="msg" id="nlMsg" aria-live="polite"></div>
        </div>

        <div class="footer-col">
          <h4>Product</h4>
          <ul>
            <li><a href="#buy">The Field Pack</a></li>
            <li><a href="#specs">Specifications</a></li>
            <li><a href="#features">Design story</a></li>
            <li><a href="#compare">Compare</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Support</h4>
          <ul>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#">Shipping &amp; returns</a></li>
            <li><a href="#">Lifetime repairs</a></li>
            <li><a href="#">Track your order</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="#">Our materials</a></li>
            <li><a href="#">Sustainability</a></li>
            <li><a href="#">Journal</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <span>© 2026 Thread Goods Co. · A demo brand. &nbsp;·&nbsp; Free template by <a href="https://uicookies.com/" rel="noopener">uiCookies</a>.</span>
        <div class="social">
          <a href="#" aria-label="Thread on Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
          <a href="#" aria-label="Thread on YouTube"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"><rect x="2.5" y="5.5" width="19" height="13" rx="4"/><path d="M10 9.5l5 2.5-5 2.5z" fill="currentColor" stroke="none"/></svg></a>
          <a href="#" aria-label="Thread on Pinterest"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="9"/><path d="M9.5 20c-.4-1.4-.3-2.6 0-4l1-4.3M9 8.5c0-1.6 1.3-2.9 3.3-2.9 2 0 3.4 1.2 3.4 3.2 0 2.4-1.4 4.3-3.3 4.3-1 0-1.8-.8-1.5-1.9"/></svg></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/vendor/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
