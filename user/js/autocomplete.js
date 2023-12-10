//https://jqueryui.com/autocomplete/
function autoComplete(g, f, l) {
    function k(b) {
        if (!b) return !1;
        for (var a = 0; a < b.length; a++) b[a].classList.remove("active");
        d >= b.length && (d = 0);
        0 > d && (d = b.length - 1);
        b[d].classList.add("active");
    }
    function h(b) {
        for (var a = document.getElementsByClassName("autocomplete-list"), c = 0; c < a.length; c++) b != a[c] && b != g && a[c].parentNode.removeChild(a[c]);
    }
    var d;
    g.addEventListener("input", function (b) {
        var a,
            c = this.value;
        h();
        if (!c || c.length < l) return !1;
        d = -1;
        b = document.createElement("DIV");
        b.setAttribute("id", this.id + "-list");
        b.setAttribute("class", "autocomplete-list");
        this.parentNode.appendChild(b);
        for (a = 0; a < f.length; a++)
            if (f[a].substr(0, c.length).toUpperCase() == c.toUpperCase()) {
                var e = document.createElement("DIV");
                e.innerHTML = "<strong>" + f[a].substr(0, c.length) + "</strong>";
                e.innerHTML += f[a].substr(c.length);
                e.innerHTML += "<input type='hidden' value='" + f[a] + "'>";
                e.addEventListener("click", function (m) {
                    g.value = this.getElementsByTagName("input")[0].value;
                    h();
                });
                b.appendChild(e);
            }
    });
    g.addEventListener("keydown", function (b) {
        var a = document.getElementById(this.id + "-list");
        a && (a = a.getElementsByTagName("div"));
        40 == b.keyCode ? (d++, k(a)) : 38 == b.keyCode ? (d--, k(a)) : 13 == b.keyCode && (b.preventDefault(), -1 < d && a && a[d].click());
    });
    document.addEventListener("click", function (b) {
        h(b.target);
    });
}
