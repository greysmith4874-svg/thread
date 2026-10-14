/* =========================================================================
   Thread — template behaviour. Vanilla JS only, zero dependencies.
   Each feature is its own guard-claused init.
   ========================================================================= */
(function () {
  "use strict";

  var reduceMotion = window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* ---------------------------------------------------- sticky header shade */
  function initHeader() {
    var header = document.getElementById("header");
    if (!header) return;
    var onScroll = function () {
      header.classList.toggle("is-scrolled", window.scrollY > 8);
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }

  /* --------------------------------------------------------------- mobile nav */
  function initMobileNav() {
    var toggle = document.getElementById("navToggle");
    var drawer = document.getElementById("drawer");
    var backdrop = document.getElementById("drawerBackdrop");
    var closeBtn = document.getElementById("drawerClose");
    if (!toggle || !drawer || !backdrop) return;

    function open() {
      drawer.classList.add("open");
      backdrop.classList.add("open");
      drawer.setAttribute("aria-hidden", "false");
      toggle.setAttribute("aria-expanded", "true");
      document.body.style.overflow = "hidden";
    }
    function close() {
      drawer.classList.remove("open");
      backdrop.classList.remove("open");
      drawer.setAttribute("aria-hidden", "true");
      toggle.setAttribute("aria-expanded", "false");
      document.body.style.overflow = "";
    }

    toggle.addEventListener("click", open);
    backdrop.addEventListener("click", close);
    if (closeBtn) closeBtn.addEventListener("click", close);
    drawer.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", close);
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && drawer.classList.contains("open")) close();
    });
  }

  /* ------------------------------------------------------------ hero gallery */
  function initGallery() {
    var main = document.getElementById("heroImg");
    var thumbs = document.querySelectorAll(".thumb");
    if (!main || !thumbs.length) return;

    thumbs.forEach(function (btn) {
      btn.addEventListener("click", function () {
        var full = btn.getAttribute("data-full");
        if (!full) return;
        main.src = full;
        thumbs.forEach(function (t) { t.setAttribute("aria-pressed", "false"); });
        btn.setAttribute("aria-pressed", "true");
      });
    });
  }

  /* ------------------------------------------------------- colour swatches */
  function initSwatches() {
    var swatches = document.querySelectorAll(".swatch");
    var nameOut = document.getElementById("swatchName");
    var bbColor = document.getElementById("bbColor");
    if (!swatches.length) return;

    swatches.forEach(function (sw) {
      sw.addEventListener("click", function () {
        var name = sw.getAttribute("data-color") || "";
        swatches.forEach(function (s) { s.setAttribute("aria-pressed", "false"); });
        sw.setAttribute("aria-pressed", "true");
        if (nameOut) nameOut.textContent = name;
        if (bbColor) bbColor.textContent = name;
      });
    });
  }

  /* --------------------------------------------------------- quantity stepper */
  function initQty() {
    var input = document.getElementById("qtyInput");
    var minus = document.getElementById("qtyMinus");
    var plus = document.getElementById("qtyPlus");
    if (!input || !minus || !plus) return;

    var min = parseInt(input.min, 10) || 1;
    var max = parseInt(input.max, 10) || 99;

    function clamp() {
      var v = parseInt(input.value, 10);
      if (isNaN(v) || v < min) v = min;
      if (v > max) v = max;
      input.value = v;
    }
    minus.addEventListener("click", function () { input.value = (parseInt(input.value, 10) || min) - 1; clamp(); });
    plus.addEventListener("click", function () { input.value = (parseInt(input.value, 10) || min) + 1; clamp(); });
    input.addEventListener("change", clamp);
  }

  /* -------------------------------------------------------- add-to-bag toast */
  function initToast() {
    var toast = document.getElementById("toast");
    var msg = document.getElementById("toastMsg");
    if (!toast) return;
    var timer;

    function show(text) {
      if (msg && text) msg.textContent = text;
      toast.classList.add("show");
      clearTimeout(timer);
      timer = setTimeout(function () { toast.classList.remove("show"); }, 2600);
    }

    var add = document.getElementById("addToCart");
    if (add) {
      add.addEventListener("click", function () {
        var qty = document.getElementById("qtyInput");
        var n = qty ? (parseInt(qty.value, 10) || 1) : 1;
        show(n > 1 ? n + " × Field Pack added to your bag" : "The Field Pack added to your bag");
      });
    }
  }

  /* ------------------------------------------------- sticky buy bar reveal */
  function initBuyBar() {
    var bar = document.getElementById("buybar");
    var anchor = document.getElementById("buy");
    if (!bar || !anchor) return;

    if (!("IntersectionObserver" in window)) {
      // Fallback: show once the user scrolls past the fold.
      window.addEventListener("scroll", function () {
        bar.classList.toggle("show", window.scrollY > 700);
      }, { passive: true });
      return;
    }

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        // Show the bar only when the hero buy block has scrolled out of view.
        var visible = entry.isIntersecting;
        bar.classList.toggle("show", !visible);
        bar.setAttribute("aria-hidden", visible ? "true" : "false");
      });
    }, { rootMargin: "-40% 0px 0px 0px" });
    io.observe(anchor);
  }

  /* ----------------------------------------------------------- scroll reveal */
  function initReveal() {
    var els = document.querySelectorAll(".reveal");
    if (!els.length) return;
    if (reduceMotion || !("IntersectionObserver" in window)) {
      els.forEach(function (el) { el.classList.add("in"); });
      return;
    }
    var io = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("in");
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: "0px 0px -8% 0px" });
    els.forEach(function (el) { io.observe(el); });
  }

  /* ------------------------------------------------- single-open FAQ accord. */
  function initFaq() {
    var items = document.querySelectorAll("details.faq");
    if (!items.length) return;
    items.forEach(function (d) {
      d.addEventListener("toggle", function () {
        if (!d.open) return;
        items.forEach(function (other) {
          if (other !== d) other.open = false;
        });
      });
    });
  }

  /* ---------------------------------------------------- newsletter (front-end) */
  function initNewsletter() {
    var form = document.getElementById("newsletter");
    var msg = document.getElementById("nlMsg");
    if (!form) return;
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var input = document.getElementById("nlEmail");
      var val = input ? input.value.trim() : "";
      var ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val);
      if (!msg) return;
      if (ok) {
        msg.style.color = "#9ecdbb";
        msg.textContent = "You're in — check your inbox for the code.";
        form.reset();
      } else {
        msg.style.color = "#e6a08a";
        msg.textContent = "Please enter a valid email address.";
      }
    });
  }

  /* --------------------------------------------------------------------- boot */
  function boot() {
    initHeader();
    initMobileNav();
    initGallery();
    initSwatches();
    initQty();
    initToast();
    initBuyBar();
    initReveal();
    initFaq();
    initNewsletter();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", boot);
  } else {
    boot();
  }
})();
