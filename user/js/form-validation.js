(function (b) {
    function p(c) {
        var a = !0;
        b("input", c).each(function () {
            (settings = b.data(this, "settings")) && 0 == g(this, settings) && (a = !1);
        });
        b("textarea", c).each(function () {
            (settings = b.data(this, "settings")) && 0 == g(this, settings) && (a = !1);
        });
        b("select", c).each(function () {
            (settings = b.data(this, "settings")) && 0 == g(this, settings) && (a = !1);
        });
        return a;
    }
    function m(c, a) {
        var d = "#" + b(c).attr("id") + "_bubble",
            e = b(c).offset().top,
            f = b(c).offset().left;
        "topright" == a.position && ((f += b(c).width()), "bubble" == a.bubble_class && (f -= 27), (e -= b(d).height()), (e -= 10));
        "topleft" == a.position && ((e -= b(d).height()), (e -= 10), "bubble" == a.bubble_class && (f -= 27));
        "centerright" == a.position && (f += b(c).width() + 13);
        f += a.offsetx;
        e += a.offsety;
        b(d).css({ top: e, left: f });
    }
    function l(c, a) {
        b(c).find(".bubbleContent").html(a);
    }
    function h(c, a, d) {
        b(c).find(".bubbleContent").css("background-color", a);
        b(c).find(".bubbleArrow div").css("background-color", a);
        b(c).find(".bubbleArrow .line1").css("background-color", d);
        b(c).find(".bubbleArrow .line2").css("background-color", d);
        b(c).find(".bubbleContent").css("border-color", d);
        b(c).find(".bubbleArrow div").css("border-color", d);
        b(c).find(".bubbleArrow .line3").css("border-color", d);
    }
    function k(c, a, d) {
        a.bootstrap
            ? ((b("#" + b(c).attr("id") + " ~ .invalid-feedback").text = d), b(c).removeClass("is-valid"), b(c).addClass("is-invalid"))
            : ((c = "#" + b(c).attr("id") + "_bubble"), l(c, d), h(c, a.color_error, a.color_border), "slide" == a.effect ? b(c).show("slide", { direction: "right" }, 500) : "fade" == a.effect ? b(c).fadeIn(500) : b(c).show());
    }
    function n(c, a) {
        if (a.bootstrap) b(c).removeClass("is-invalid"), b(c).addClass("is-valid");
        else {
            var d = "#" + b(c).attr("id") + "_bubble";
            "slide" == a.effect
                ? b(d).hide("slide", { direction: "right" }, 500)
                : "fade" == a.effect
                ? b(d).fadeOut(500, function () {
                      l(d, a.title_text);
                      h(d, a.color_hint, a.color_border);
                  })
                : (b(d).hide(), l(d, a.title_text), h(d, a.color_hint, a.color_border));
        }
    }
    function g(c, a) {
        var d = null;
        switch (a.type) {
            case "alphanumeric":
                d = /\w*/;
                break;
            case "number":
                d = /^[0-9-+]+$/;
                break;
            case "email":
                d = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i;
                break;
            case "custom":
                d = a.param;
        }
        pointer = b(c);
        if (!pointer.prop("disabled") && "none" != pointer.css("display") && "hidden" != pointer.css("visibility") && (1 == a.required || 0 != pointer.val().length)) {
            var e = !0;
            d && (e = d.test(pointer.val()));
            e && ("" != a.length_min && pointer.val().length < parseInt(a.length_min) && (e = !1), e && "" != a.length_max && pointer.val().length > parseInt(a.length_max) && (e = !1));
            if (e) {
                "number" == a.type && ("" != a.value_min && (e = eval(pointer.val() + a.expr_min + a.value_min)), e && "" != a.value_max && (e = eval(pointer.val() + a.expr_max + a.value_max)));
                "checkbox" == a.type && (e = b(c).is(":checked"));
                "radio" == a.type && ((d = b(c).attr("name")), b("input[name='" + d + "']:checked").val() || (e = !1));
                "select" == a.type && ((d = b(c).prop("selectedIndex")), -1 == d && (e = !1), 0 == d && 1 == a.disallowfirstchoice && (e = !1));
                "ajax" == a.type &&
                    ((e = !1),
                    (d = "value=" + b(c).val()),
                    b.ajax({
                        type: "POST",
                        async: !1,
                        url: a.param,
                        data: d,
                        success: function (b) {
                            "true" == b && (e = !0);
                        },
                    }));
                if (a.match_id) {
                    matchobj = b("#" + a.match_id);
                    matchsettings = matchobj.data("settings");
                    if ("" != matchobj.val() && matchobj.val() != pointer.val()) return k(c, a, a.match_text), k(matchobj, matchsettings, matchsettings.match_text), !1;
                    "" != matchobj.val() && n(matchobj, matchsettings);
                    return !0;
                }
                0 == e && k(c, a, a.error_text);
                return e;
            }
            k(c, a, a.error_text);
            return !1;
        }
        return !0;
    }
    b.fn.validate = function (c) {
        return this.each(function () {
            b.validate(this, c);
        });
    };
    b.validate = function (c, a) {
        var d = {
            title_text: "Please enter a value",
            error_text: "The entered value is invalid",
            color_text: "#00FF00",
            color_hint: "#00FF00",
            color_error: "#FF0000",
            color_border: "#808080",
            opacity: 1,
            effect: "fade",
            match_text: "Values must be identical",
            match_id: null,
            length_min: "",
            length_max: "",
            value_min: "",
            value_max: "",
            expr_min: "",
            expr_max: "",
            type: "text",
            required: !0,
            disallowfirstchoice: !1,
            bootstrap: !1,
            nohint: !1,
            font_family: "Poppins",
            font_size: "13px",
            font_weight: "normal",
            font_style: "normal",
            position: "topright",
            offsetx: 0,
            offsety: 0,
            bubble_class: "bubble",
            param: null,
        };
        a && (d = b.extend(d, a));
        d.title_text = b(c).attr("title");
        "" == d.title_text && (d.title_text = "Enter a value");
        if (d.bootstrap) d.nohint = !0;
        else {
            var e = b(c).attr("id"),
                f = "#" + e + "_bubble";
            e = '<div id="' + e + '_bubble" class="' + d.bubble_class + '">';
            e = e + '<div class="bubbleContent">' + d.title_text + "</div>";
            e +=
                '<div class="bubbleArrow"><div class="line10">\x3c!-- --\x3e</div><div class="line9">\x3c!-- --\x3e</div><div class="line8">\x3c!-- --\x3e</div><div class="line7">\x3c!-- --\x3e</div><div class="line6">\x3c!-- --\x3e</div><div class="line5">\x3c!-- --\x3e</div><div class="line4">\x3c!-- --\x3e</div><div class="line3">\x3c!-- --\x3e</div><div class="line2">\x3c!-- --\x3e</div><div class="line1">\x3c!-- --\x3e</div></div></div>';
            b("body").append(e);
            b(c).removeAttr("title");
            m(c, d);
            b(f).css("opacity", d.opacity);
            h(f, d.color_hint, d.color_border);
            b(f).find(".bubbleContent").css("color", d.color_text);
            b(f).find(".bubbleContent").css("font-family", d.font_family);
            b(f).find(".bubbleContent").css("font-size", d.font_size);
            b(f).find(".bubbleContent").css("font-weight", d.font_weight);
            b(f).find(".bubbleContent").css("font-style", d.font_style);
            b(f).hide();
        }
        b.data(c, "settings", d);
        b(c)
            .focus(function () {
                var a = d;
                if (!a.nohint) {
                    m(c, a);
                    var e = "#" + b(c).attr("id") + "_bubble";
                    "slide" == a.effect ? b(e).show("slide", { direction: "right" }, 500) : "fade" == a.effect ? b(e).fadeIn(500) : b(e).show();
                }
            })
            .blur(function () {
                var a = d;
                g(c, a) && n(c, a);
            });
    };
    b.validate.form = function (b) {
        return p(b);
    };
})(jQuery);
