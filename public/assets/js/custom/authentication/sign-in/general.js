"use strict";
var FacturisGlobalLogin = (function () {
    var e, t, i;
    return {
        init: function () {
            (e = document.querySelector("#facturis_id_sign_in_form")),
                (t = document.querySelector("#facturis_id_sign_in_submit")),
                (i = FormValidation.formValidation(e, {
                    fields: {
                        email: { validators: { regexp: { regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, message: "The value is not a valid email address" }, notEmpty: { message: "Email address is required" } } },
                        password: { validators: { notEmpty: { message: "The password is required" } } },
                    },
                    plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                }));
            /*t.addEventListener("click", function (n) {
                n.preventDefault(),
                    i.validate().then(function (i) {
                        "Valid" == i
                            ? (t.setAttribute("data-facturis-indicator", "on"),
                                (t.disabled = !0),
                                setTimeout(function () {
                                    t.removeAttribute("data-facturis-indicator"),
                                        (t.disabled = !1),
                                        Swal.fire({ text: "You have successfully logged in!", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } }).then(function (t) {
                                            if (t.isConfirmed) {
                                                (e.querySelector('[name="email"]').value = ""), (e.querySelector('[name="password"]').value = "");
                                                var i = e.getAttribute("data-facturis-redirect-url");
                                                i && (location.href = i);
                                            }
                                        });
                                }, 2e3))
                            : Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: { confirmButton: "btn btn-primary" },
                            });
                    });
            });*/
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    FacturisGlobalLogin.init();
});