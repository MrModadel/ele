

window.onload = function () {
    (function () { const r = document.createElement("link").relList; if (r && r.supports && r.supports("modulepreload")) return; for (const e of document.querySelectorAll('link[rel="modulepreload"]')) u(e); new MutationObserver(e => { for (const t of e) if (t.type === "childList") for (const i of t.addedNodes) i.tagName === "LINK" && i.rel === "modulepreload" && u(i) }).observe(document, { childList: !0, subtree: !0 }); function c(e) { const t = {}; return e.integrity && (t.integrity = e.integrity), e.referrerPolicy && (t.referrerPolicy = e.referrerPolicy), e.crossOrigin === "use-credentials" ? t.credentials = "include" : e.crossOrigin === "anonymous" ? t.credentials = "omit" : t.credentials = "same-origin", t } function u(e) { if (e.ep) return; e.ep = !0; const t = c(e); fetch(e.href, t) } })(); let m = document.querySelector(".but-menu"), p = document.querySelector(".burgerMenu__close"), o = document.querySelector(".burgerMenu"); m.onclick = () => { document.querySelector('.burgerMenu__effect').style.display = 'block'; o.classList[1] !== "active-br" ? (setTimeout(() => { o.style.bottom = "0" }, 300), o.classList.add("active-br")) : (o.classList.remove("active-br"), o.style.bottom = "-100%") }; p.onclick = () => { document.querySelector('.burgerMenu__effect').style.display = 'none'; o.classList.remove("active-br"), o.style.bottom = "-100%" }; let b = document.querySelector(".surfacing__close"), s = document.querySelector(".surfacing"); setTimeout(() => { setTimeout(() => { s.style.opacity = "1" }, 300), s.style.display = "flex" }, 1e4); b.onclick = () => { s.style.display = "none", s.style.opacity = "0" }; let a = document.querySelector(".video__close"), l = document.querySelector(".video"), d = document.querySelector(".btn-sec"), y = document.querySelector(".video iframe"); d && (d.onclick = () => { setTimeout(() => { l.style.opacity = "1" }, 300), l.style.display = "flex", y.src = " https://www.youtube.com/embed/yfewY3J4Gf0?si=WUt66CnZV3Z1X8Se" }); a && (a.onclick = () => { l.style.display = "none", l.style.opacity = "0", y.src = " " }); let g = document.querySelectorAll(".telegramH"), h = document.querySelectorAll(".whatsappH"); f(g, "https://t.me/iam_electronik"); f(h, "https://wa.me/79302380000"); function f(n, r) { n.forEach(c => { c && (c.onclick = () => { location.assign(r) }) }) }
    let telegramA = document.querySelector('.telegramA');
    telegramA.onclick = () => {
        location.assign('https://t.me/electronik_optom');
    }
    // let form = document.querySelector('form');
    // form.onsubmit = async (event) => {
    //     event.preventDefault();
    //     let b = true;
    //     let inputs = form.querySelectorAll('input');
    //     let name;
    //     let tel;
    //     if (inputs[0].value.length > 0) {
    //         name = inputs[0].value;
    //     } else {
    //         b = false
    //     }
    //     if (inputs[1].value.length > 0) {
    //         tel = inputs[1].value;
    //     } else {
    //         b = false
    //     }
    //     let obj = {
    //         "_embedded": {
    //             "metadata": {
    //                 "category": "forms",
    //                 "form_name": "ElectronikFrom",
    //                 "form_page": "https://electronik-optom.ru/",
    //                 "referer": "https://example.com/form.html"
    //             },
    //             "contacts": [
    //                 {
    //                     "first_name": tel,
    //                     "custom_fields_values": [
    //                         {
    //                             "field_code": "PHONE",
    //                             "values": [
    //                                 {
    //                                     "enum_code": "WORK",
    //                                     "value": tel
    //                                 }
    //                             ]
    //                         }
    //                     ]
    //                 }
    //             ]
    //         }
    //     }

    //     if (b) {
    //         try {
    //             const response = await fetch(url, {
    //                 method: "POST", 
    //                 body: JSON.stringify(obj),
    //                 headers: {
    //                     "Content-Type": "application/json",
    //                 },
    //             });
    //             const json = await response.json();
    //             console.log("Успех:", JSON.stringify(json));
    //         } catch (error) {
    //             console.error("Ошибка:", error);
    //         }

    //     }
    //     obj = {};
    // }
}






