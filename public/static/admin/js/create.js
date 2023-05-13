"use strict";
var KTCreateApp = function () {
    var e, t, o, r, a, i, n = [];
    return {
        init: function () {
            (e = document.querySelector("#buatUndangan")) && (new bootstrap.Modal(e), t = document.querySelector("#kt_modal_create_app_stepper"), o = document.querySelector("#kt_modal_create_app_form"), r = t.querySelector('[data-kt-stepper-action="submit"]'), a = t.querySelector('[data-kt-stepper-action="next"]'), (i = new KTStepper(t)).on("kt.stepper.changed", (function (e) {
                4 === i.getCurrentStepIndex() ? (r.classList.remove("d-none"), r.classList.add("d-inline-block"), a.classList.add("d-none")) : 5 === i.getCurrentStepIndex() ? (r.classList.add("d-none"), a.classList.add("d-none")) : (r.classList.remove("d-inline-block"), r.classList.remove("d-none"), a.classList.remove("d-none"))
            })), i.on("kt.stepper.next", (function (e) {
                var t = n[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function (t) {
                    console.log("validated!"), "Valid" == t ? e.goNext() : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function () {}))
                })) : (e.goNext(), KTUtil.scrollTop())
            })), i.on("kt.stepper.previous", (function (e) {
                console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
            })), r.addEventListener("click", (function (e) {
                n[3].validate().then((function (t) {
                    console.log("validated!"), "Valid" == t ? (e.preventDefault(), r.disabled = !0, r.setAttribute("data-kt-indicator", "on"), setTimeout((function () {
                        r.removeAttribute("data-kt-indicator"), r.disabled = !1, i.goNext()
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-light"
                        }
                    }).then((function () {
                        KTUtil.scrollTop()
                    }))
                }))
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTCreateApp.init()
}));