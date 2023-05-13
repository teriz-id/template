(() => {
    var e, n, t, o, l, a, i, s, d = document.getElementById("Qondangan"),
        r = document.documentElement.lang,
        c = document.getElementById("loader");
    c && (window.onload = c.style.display = "none");
    var u = new Splide("#Qondangan", {
            type: "fade",
            direction: "ttb",
            height: "100%",
            wheel: !0,
            arrows: !1,
            pagination: !1,
            updateOnMove: !0,
            drag: !1,
            noDrag: "input, textarea, .rsvp-placeholder"
        }),
        m = new Splide("#menuSlider", {
            fixedWidth: "25%",
            fixedHeight: 60,
            focus: "center",
            arrows: !1,
            rewind: !0,
            pagination: !1,
            cover: !1,
            updateOnMove: !0,
            isNavigation: !0
        });
    u.mount();
    var y = d.dataset.guest,
        p = document.getElementById("guestNameSlot");
    y && p && (p.innerHTML = y);
    var g = d.dataset.group,
        v = document.getElementById("groupNameSlot");
    g && v && (v.innerHTML = g);
    document.getElementById("btnMusic");
    var h = document.getElementById("music") ? document.getElementById("music") : null,
        f = document.querySelector(".sc-music > iframe"),
        b = f ? SC.Widget(f) : null,
        w = !1;
    playMusic = function (e) {
        e ? h && h.play() : h && (w ? h.pause() : h.play()), b && SC.Widget.Events.READY && (w ? (b.pause(), w = !1) : (b.play(), w = !0))
    }, h && (h.onplaying = function () {
        w = !0
    }, h.onpause = function () {
        w = !1
    }),openInvitation = function (e) {
        playMusic(!0)
    };
    for (var x = function (e) {
            openInvitation(), null === document.querySelector(".no-menu") ? (m.mount(), u.sync(m), m.go(1)) : u.go(1), d.classList.remove("not-open"), e.target.style.display = "none", u.Components.Drag.disable(!1)
        }, E = document.getElementsByClassName("btn-open-invitation"), L = 0; L < E.length; L++) E[L].addEventListener("click", x, !1);
    showGift = function (e) {
        for (var n = 0; n < T.length; n++) n != e && (M[n].style.display = "none");
        M[e].style.display = "inherit"
    };
    for (var M = document.getElementsByClassName("gift-container"), B = 0; B < M.length; B++) M[B].style.display = "none";
    for (var T = document.getElementsByClassName("btn-gift"), I = function (e) {
            T[e].onclick = function () {
                showGift(e)
            }
        }, S = 0; S < T.length; S++) I(S);
    var C = document.getElementById("lightboxWrapper"),
        H = document.getElementById("lightboxCloseBtn"),
        k = document.getElementById("lightboxNextBtn"),
        q = document.getElementById("lightboxPrevBtn"),
        N = document.querySelector("#lightboxWrapper > .lightbox-list"),
        _ = document.getElementsByClassName("lightbox");
    showLightbox = function (e) {
        C.classList.add("show"), N.innerHTML = '<div class="lightbox-inner"><img src="'.concat(_[e].src, '"></div>'), k.dataset.index = e, q.dataset.index = e
    }, k.onclick = function () {
        var e = parseInt(k.dataset.index) + 1;
        e >= _.length && (e = 0), showLightbox(e)
    }, q.onclick = function () {
        var e = parseInt(q.dataset.index) - 1; - 1 == e && (e = _.length - 1), showLightbox(e)
    }, closeLightbox = function () {
        C.classList.remove("show"), N.innerHTML = ""
    };
    for (var F = function (e) {
            _[e].onclick = function () {
                showLightbox(e)
            }
        }, D = 0; D < _.length; D++) F(D);
    H.onclick = function () {
        closeLightbox()
    };
    var R = document.getElementsByTagName("BODY")[0],
        W = document.getElementById("modalOverlay");
    showModal = function (e) {
        R.classList.add("modal-open"), W.classList.add("show"), W.style = "display: block;", e.classList.add("show"), e.style = "display: block;"
    }, closeModal = function (e) {
        R.classList.remove("modal-open"), W.classList.remove("show"), W.style = "display: none;", e.classList.remove("show"), e.style = "display: none;"
    };
    var O = document.getElementsByClassName("countdown-wrapper");
    displayCountdown = function (e) {
        var n = new Date(e.dataset.datetime).getTime(),
            t = e.querySelector(".countdown > .day > .number"),
            o = e.querySelector(".countdown > .hour > .number"),
            l = e.querySelector(".countdown > .minute > .number"),
            a = e.querySelector(".countdown > .second > .number"),
            i = setInterval((function () {
                var e = (new Date).getTime(),
                    s = n - e,
                    d = Math.floor(s / 864e5),
                    r = Math.floor(s % 864e5 / 36e5),
                    c = Math.floor(s % 36e5 / 6e4),
                    u = Math.floor(s % 6e4 / 1e3);
                t.innerHTML = d, o.innerHTML = r, l.innerHTML = c, a.innerHTML = u, s < 0 && (clearInterval(i), t.innerHTML = "00", o.innerHTML = "00", l.innerHTML = "00", a.innerHTML = "00")
            }), 1e3)
    };
    for (var A = 0; A < O.length; A++) displayCountdown(O[A]);
    for (var j = document.getElementsByClassName("btn-rsvp"), G = null !== (e = document.querySelector(".rsvp-placeholder")) && void 0 !== e ? e : null, U = null !== (n = document.querySelector(".rsvp-form")) && void 0 !== n ? n : null, Y = 0; Y < j.length; Y++) G ? j[Y].style.display = "none" : j[Y].onclick = function () {
        showModal(rsvpModal)
    };
    U && G && (G.innerHTML = "", G.appendChild(U));
    var P = null !== (t = document.getElementById("app")) && void 0 !== t ? t : null,
        z = null !== (o = document.getElementById("illegal")) && void 0 !== o ? o : null,
        J = null !== (l = document.getElementById("waterMark")) && void 0 !== l ? l : null,
        K = null !== (a = document.querySelector(".watermark-placeholder")) && void 0 !== a ? a : null,
        Q = null !== (i = document.querySelector(".no-watermark")) && void 0 !== i ? i : null,
        V = null !== (s = document.querySelector(".watermark")) && void 0 !== s ? s : null;
    J && K && null == Q ? (J.style.display = "inherit", K.appendChild(J), z.style.display = "none") : V && null == K ? (P.innerHTML = "", z.style.display = "flex") : (J.style.display = "none", z.style.display = "none");
    for (var X = document.getElementsByClassName("account-number"), Z = 0; Z < X.length; Z++) X[Z].innerHTML && ("id" == r ? X[Z].insertAdjacentHTML("afterend", "<button type='button' class='btn btn-sm btn-primary mt-2 mb-2 animate__animated animate__fadeInUp animate__slow delay-5' data-text='".concat(X[Z].innerText, "' onclick='copyText(event)' style='font-family: sans-serif; border-radius: 4px'>Salin Rekening</button>")) : X[Z].insertAdjacentHTML("afterend", "<button type='button' class='btn btn-sm btn-primary mt-2 mb-2 animate__animated animate__fadeInUp animate__slow delay-5' data-text='".concat(X[Z].innerText, "' onclick='copyText(event)' style='font-family: sans-serif; border-radius: 4px'>Copy to Clipboard</button>")));
    copyText = function (e) {
        var n = document.createElement("input");
        n.autofocus = !1, n.value = e.target.dataset.text, document.body.appendChild(n), n.select(), document.execCommand("copy"), n.remove(), e.target.innerHTML = "id" == r ? "Berhasil Disalin" : "Copied to Clipboard"
    }
})();