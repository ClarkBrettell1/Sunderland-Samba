@extends('layouts.layout')
@section('content')
<script>
    $(function() {

        // INITIALIZE DATEPICKER PLUGIN
        $('.datepicker').datepicker({
            clearBtn: true
            , format: "dd/mm/yyyy"
        });


        // FOR DEMO PURPOSE
        $('#date').on('change', function() {
            var pickedDate = $('input').val();
        });
    });

</script>
<script>
    ! function(a) {
        "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require("jquery") : jQuery)
    }(function(a, b) {
        function c() {
            return new Date(Date.UTC.apply(Date, arguments))
        }

        function d() {
            var a = new Date;
            return c(a.getFullYear(), a.getMonth(), a.getDate())
        }

        function e(a, b) {
            return a.getUTCFullYear() === b.getUTCFullYear() && a.getUTCMonth() === b.getUTCMonth() && a.getUTCDate() === b.getUTCDate()
        }

        function f(c, d) {
            return function() {
                return d !== b && a.fn.datepicker.deprecated(d), this[c].apply(this, arguments)
            }
        }

        function g(a) {
            return a && !isNaN(a.getTime())
        }

        function h(b, c) {
            function d(a, b) {
                return b.toLowerCase()
            }
            var e, f = a(b).data()
                , g = {}
                , h = new RegExp("^" + c.toLowerCase() + "([A-Z])");
            c = new RegExp("^" + c.toLowerCase());
            for (var i in f) c.test(i) && (e = i.replace(h, d), g[e] = f[i]);
            return g
        }

        function i(b) {
            var c = {};
            if (q[b] || (b = b.split("-")[0], q[b])) {
                var d = q[b];
                return a.each(p, function(a, b) {
                    b in d && (c[b] = d[b])
                }), c
            }
        }
        var j = function() {
                var b = {
                    get: function(a) {
                        return this.slice(a)[0]
                    }
                    , contains: function(a) {
                        for (var b = a && a.valueOf(), c = 0, d = this.length; c < d; c++)
                            if (0 <= this[c].valueOf() - b && this[c].valueOf() - b < 864e5) return c;
                        return -1
                    }
                    , remove: function(a) {
                        this.splice(a, 1)
                    }
                    , replace: function(b) {
                        b && (a.isArray(b) || (b = [b]), this.clear(), this.push.apply(this, b))
                    }
                    , clear: function() {
                        this.length = 0
                    }
                    , copy: function() {
                        var a = new j;
                        return a.replace(this), a
                    }
                };
                return function() {
                    var c = [];
                    return c.push.apply(c, arguments), a.extend(c, b), c
                }
            }()
            , k = function(b, c) {
                a.data(b, "datepicker", this), this._events = [], this._secondaryEvents = [], this._process_options(c), this.dates = new j, this.viewDate = this.o.defaultViewDate, this.focusDate = null, this.element = a(b), this.isInput = this.element.is("input"), this.inputField = this.isInput ? this.element : this.element.find("input"), this.component = !!this.element.hasClass("date") && this.element.find(".add-on, .input-group-addon, .input-group-append, .input-group-prepend, .btn"), this.component && 0 === this.component.length && (this.component = !1), this.isInline = !this.component && this.element.is("div"), this.picker = a(r.template), this._check_template(this.o.templates.leftArrow) && this.picker.find(".prev").html(this.o.templates.leftArrow), this._check_template(this.o.templates.rightArrow) && this.picker.find(".next").html(this.o.templates.rightArrow), this._buildEvents(), this._attachEvents(), this.isInline ? this.picker.addClass("datepicker-inline").appendTo(this.element) : this.picker.addClass("datepicker-dropdown dropdown-menu"), this.o.rtl && this.picker.addClass("datepicker-rtl"), this.o.calendarWeeks && this.picker.find(".datepicker-days .datepicker-switch, thead .datepicker-title, tfoot .today, tfoot .clear").attr("colspan", function(a, b) {
                    return Number(b) + 1
                }), this._process_options({
                    startDate: this._o.startDate
                    , endDate: this._o.endDate
                    , daysOfWeekDisabled: this.o.daysOfWeekDisabled
                    , daysOfWeekHighlighted: this.o.daysOfWeekHighlighted
                    , datesDisabled: this.o.datesDisabled
                }), this._allow_update = !1, this.setViewMode(this.o.startView), this._allow_update = !0, this.fillDow(), this.fillMonths(), this.update(), this.isInline && this.show()
            };
        k.prototype = {
            constructor: k
            , _resolveViewName: function(b) {
                return a.each(r.viewModes, function(c, d) {
                    if (b === c || -1 !== a.inArray(b, d.names)) return b = c, !1
                }), b
            }
            , _resolveDaysOfWeek: function(b) {
                return a.isArray(b) || (b = b.split(/[,\s]*/)), a.map(b, Number)
            }
            , _check_template: function(c) {
                try {
                    if (c === b || "" === c) return !1;
                    if ((c.match(/[<>]/g) || []).length <= 0) return !0;
                    return a(c).length > 0
                } catch (a) {
                    return !1
                }
            }
            , _process_options: function(b) {
                this._o = a.extend({}, this._o, b);
                var e = this.o = a.extend({}, this._o)
                    , f = e.language;
                q[f] || (f = f.split("-")[0], q[f] || (f = o.language)), e.language = f, e.startView = this._resolveViewName(e.startView), e.minViewMode = this._resolveViewName(e.minViewMode), e.maxViewMode = this._resolveViewName(e.maxViewMode), e.startView = Math.max(this.o.minViewMode, Math.min(this.o.maxViewMode, e.startView)), !0 !== e.multidate && (e.multidate = Number(e.multidate) || !1, !1 !== e.multidate && (e.multidate = Math.max(0, e.multidate))), e.multidateSeparator = String(e.multidateSeparator), e.weekStart %= 7, e.weekEnd = (e.weekStart + 6) % 7;
                var g = r.parseFormat(e.format);
                e.startDate !== -1 / 0 && (e.startDate ? e.startDate instanceof Date ? e.startDate = this._local_to_utc(this._zero_time(e.startDate)) : e.startDate = r.parseDate(e.startDate, g, e.language, e.assumeNearbyYear) : e.startDate = -1 / 0), e.endDate !== 1 / 0 && (e.endDate ? e.endDate instanceof Date ? e.endDate = this._local_to_utc(this._zero_time(e.endDate)) : e.endDate = r.parseDate(e.endDate, g, e.language, e.assumeNearbyYear) : e.endDate = 1 / 0), e.daysOfWeekDisabled = this._resolveDaysOfWeek(e.daysOfWeekDisabled || []), e.daysOfWeekHighlighted = this._resolveDaysOfWeek(e.daysOfWeekHighlighted || []), e.datesDisabled = e.datesDisabled || [], a.isArray(e.datesDisabled) || (e.datesDisabled = e.datesDisabled.split(",")), e.datesDisabled = a.map(e.datesDisabled, function(a) {
                    return r.parseDate(a, g, e.language, e.assumeNearbyYear)
                });
                var h = String(e.orientation).toLowerCase().split(/\s+/g)
                    , i = e.orientation.toLowerCase();
                if (h = a.grep(h, function(a) {
                        return /^auto|left|right|top|bottom$/.test(a)
                    }), e.orientation = {
                        x: "auto"
                        , y: "auto"
                    }, i && "auto" !== i)
                    if (1 === h.length) switch (h[0]) {
                        case "top":
                        case "bottom":
                            e.orientation.y = h[0];
                            break;
                        case "left":
                        case "right":
                            e.orientation.x = h[0]
                    } else i = a.grep(h, function(a) {
                        return /^left|right$/.test(a)
                    }), e.orientation.x = i[0] || "auto", i = a.grep(h, function(a) {
                        return /^top|bottom$/.test(a)
                    }), e.orientation.y = i[0] || "auto";
                    else;
                if (e.defaultViewDate instanceof Date || "string" == typeof e.defaultViewDate) e.defaultViewDate = r.parseDate(e.defaultViewDate, g, e.language, e.assumeNearbyYear);
                else if (e.defaultViewDate) {
                    var j = e.defaultViewDate.year || (new Date).getFullYear()
                        , k = e.defaultViewDate.month || 0
                        , l = e.defaultViewDate.day || 1;
                    e.defaultViewDate = c(j, k, l)
                } else e.defaultViewDate = d()
            }
            , _applyEvents: function(a) {
                for (var c, d, e, f = 0; f < a.length; f++) c = a[f][0], 2 === a[f].length ? (d = b, e = a[f][1]) : 3 === a[f].length && (d = a[f][1], e = a[f][2]), c.on(e, d)
            }
            , _unapplyEvents: function(a) {
                for (var c, d, e, f = 0; f < a.length; f++) c = a[f][0], 2 === a[f].length ? (e = b, d = a[f][1]) : 3 === a[f].length && (e = a[f][1], d = a[f][2]), c.off(d, e)
            }
            , _buildEvents: function() {
                var b = {
                    keyup: a.proxy(function(b) {
                        -1 === a.inArray(b.keyCode, [27, 37, 39, 38, 40, 32, 13, 9]) && this.update()
                    }, this)
                    , keydown: a.proxy(this.keydown, this)
                    , paste: a.proxy(this.paste, this)
                };
                !0 === this.o.showOnFocus && (b.focus = a.proxy(this.show, this)), this.isInput ? this._events = [
                    [this.element, b]
                ] : this.component && this.inputField.length ? this._events = [
                    [this.inputField, b]
                    , [this.component, {
                        click: a.proxy(this.show, this)
                    }]
                ] : this._events = [
                    [this.element, {
                        click: a.proxy(this.show, this)
                        , keydown: a.proxy(this.keydown, this)
                    }]
                ], this._events.push([this.element, "*", {
                    blur: a.proxy(function(a) {
                        this._focused_from = a.target
                    }, this)
                }], [this.element, {
                    blur: a.proxy(function(a) {
                        this._focused_from = a.target
                    }, this)
                }]), this.o.immediateUpdates && this._events.push([this.element, {
                    "changeYear changeMonth": a.proxy(function(a) {
                        this.update(a.date)
                    }, this)
                }]), this._secondaryEvents = [
                    [this.picker, {
                        click: a.proxy(this.click, this)
                    }]
                    , [this.picker, ".prev, .next", {
                        click: a.proxy(this.navArrowsClick, this)
                    }]
                    , [this.picker, ".day:not(.disabled)", {
                        click: a.proxy(this.dayCellClick, this)
                    }]
                    , [a(window), {
                        resize: a.proxy(this.place, this)
                    }]
                    , [a(document), {
                        "mousedown touchstart": a.proxy(function(a) {
                            this.element.is(a.target) || this.element.find(a.target).length || this.picker.is(a.target) || this.picker.find(a.target).length || this.isInline || this.hide()
                        }, this)
                    }]
                ]
            }
            , _attachEvents: function() {
                this._detachEvents(), this._applyEvents(this._events)
            }
            , _detachEvents: function() {
                this._unapplyEvents(this._events)
            }
            , _attachSecondaryEvents: function() {
                this._detachSecondaryEvents(), this._applyEvents(this._secondaryEvents)
            }
            , _detachSecondaryEvents: function() {
                this._unapplyEvents(this._secondaryEvents)
            }
            , _trigger: function(b, c) {
                var d = c || this.dates.get(-1)
                    , e = this._utc_to_local(d);
                this.element.trigger({
                    type: b
                    , date: e
                    , viewMode: this.viewMode
                    , dates: a.map(this.dates, this._utc_to_local)
                    , format: a.proxy(function(a, b) {
                        0 === arguments.length ? (a = this.dates.length - 1, b = this.o.format) : "string" == typeof a && (b = a, a = this.dates.length - 1), b = b || this.o.format;
                        var c = this.dates.get(a);
                        return r.formatDate(c, b, this.o.language)
                    }, this)
                })
            }
            , show: function() {
                if (!(this.inputField.is(":disabled") || this.inputField.prop("readonly") && !1 === this.o.enableOnReadonly)) return this.isInline || this.picker.appendTo(this.o.container), this.place(), this.picker.show(), this._attachSecondaryEvents(), this._trigger("show"), (window.navigator.msMaxTouchPoints || "ontouchstart" in document) && this.o.disableTouchKeyboard && a(this.element).blur(), this
            }
            , hide: function() {
                return this.isInline || !this.picker.is(":visible") ? this : (this.focusDate = null, this.picker.hide().detach(), this._detachSecondaryEvents(), this.setViewMode(this.o.startView), this.o.forceParse && this.inputField.val() && this.setValue(), this._trigger("hide"), this)
            }
            , destroy: function() {
                return this.hide(), this._detachEvents(), this._detachSecondaryEvents(), this.picker.remove(), delete this.element.data().datepicker, this.isInput || delete this.element.data().date, this
            }
            , paste: function(b) {
                var c;
                if (b.originalEvent.clipboardData && b.originalEvent.clipboardData.types && -1 !== a.inArray("text/plain", b.originalEvent.clipboardData.types)) c = b.originalEvent.clipboardData.getData("text/plain");
                else {
                    if (!window.clipboardData) return;
                    c = window.clipboardData.getData("Text")
                }
                this.setDate(c), this.update(), b.preventDefault()
            }
            , _utc_to_local: function(a) {
                if (!a) return a;
                var b = new Date(a.getTime() + 6e4 * a.getTimezoneOffset());
                return b.getTimezoneOffset() !== a.getTimezoneOffset() && (b = new Date(a.getTime() + 6e4 * b.getTimezoneOffset())), b
            }
            , _local_to_utc: function(a) {
                return a && new Date(a.getTime() - 6e4 * a.getTimezoneOffset())
            }
            , _zero_time: function(a) {
                return a && new Date(a.getFullYear(), a.getMonth(), a.getDate())
            }
            , _zero_utc_time: function(a) {
                return a && c(a.getUTCFullYear(), a.getUTCMonth(), a.getUTCDate())
            }
            , getDates: function() {
                return a.map(this.dates, this._utc_to_local)
            }
            , getUTCDates: function() {
                return a.map(this.dates, function(a) {
                    return new Date(a)
                })
            }
            , getDate: function() {
                return this._utc_to_local(this.getUTCDate())
            }
            , getUTCDate: function() {
                var a = this.dates.get(-1);
                return a !== b ? new Date(a) : null
            }
            , clearDates: function() {
                this.inputField.val(""), this.update(), this._trigger("changeDate"), this.o.autoclose && this.hide()
            }
            , setDates: function() {
                var b = a.isArray(arguments[0]) ? arguments[0] : arguments;
                return this.update.apply(this, b), this._trigger("changeDate"), this.setValue(), this
            }
            , setUTCDates: function() {
                var b = a.isArray(arguments[0]) ? arguments[0] : arguments;
                return this.setDates.apply(this, a.map(b, this._utc_to_local)), this
            }
            , setDate: f("setDates")
            , setUTCDate: f("setUTCDates")
            , remove: f("destroy", "Method `remove` is deprecated and will be removed in version 2.0. Use `destroy` instead")
            , setValue: function() {
                var a = this.getFormattedDate();
                return this.inputField.val(a), this
            }
            , getFormattedDate: function(c) {
                c === b && (c = this.o.format);
                var d = this.o.language;
                return a.map(this.dates, function(a) {
                    return r.formatDate(a, c, d)
                }).join(this.o.multidateSeparator)
            }
            , getStartDate: function() {
                return this.o.startDate
            }
            , setStartDate: function(a) {
                return this._process_options({
                    startDate: a
                }), this.update(), this.updateNavArrows(), this
            }
            , getEndDate: function() {
                return this.o.endDate
            }
            , setEndDate: function(a) {
                return this._process_options({
                    endDate: a
                }), this.update(), this.updateNavArrows(), this
            }
            , setDaysOfWeekDisabled: function(a) {
                return this._process_options({
                    daysOfWeekDisabled: a
                }), this.update(), this
            }
            , setDaysOfWeekHighlighted: function(a) {
                return this._process_options({
                    daysOfWeekHighlighted: a
                }), this.update(), this
            }
            , setDatesDisabled: function(a) {
                return this._process_options({
                    datesDisabled: a
                }), this.update(), this
            }
            , place: function() {
                if (this.isInline) return this;
                var b = this.picker.outerWidth()
                    , c = this.picker.outerHeight()
                    , d = a(this.o.container)
                    , e = d.width()
                    , f = "body" === this.o.container ? a(document).scrollTop() : d.scrollTop()
                    , g = d.offset()
                    , h = [0];
                this.element.parents().each(function() {
                    var b = a(this).css("z-index");
                    "auto" !== b && 0 !== Number(b) && h.push(Number(b))
                });
                var i = Math.max.apply(Math, h) + this.o.zIndexOffset
                    , j = this.component ? this.component.parent().offset() : this.element.offset()
                    , k = this.component ? this.component.outerHeight(!0) : this.element.outerHeight(!1)
                    , l = this.component ? this.component.outerWidth(!0) : this.element.outerWidth(!1)
                    , m = j.left - g.left
                    , n = j.top - g.top;
                "body" !== this.o.container && (n += f), this.picker.removeClass("datepicker-orient-top datepicker-orient-bottom datepicker-orient-right datepicker-orient-left"), "auto" !== this.o.orientation.x ? (this.picker.addClass("datepicker-orient-" + this.o.orientation.x), "right" === this.o.orientation.x && (m -= b - l)) : j.left < 0 ? (this.picker.addClass("datepicker-orient-left"), m -= j.left - 10) : m + b > e ? (this.picker.addClass("datepicker-orient-right"), m += l - b) : this.o.rtl ? this.picker.addClass("datepicker-orient-right") : this.picker.addClass("datepicker-orient-left");
                var o, p = this.o.orientation.y;
                if ("auto" === p && (o = -f + n - c, p = o < 0 ? "bottom" : "top"), this.picker.addClass("datepicker-orient-" + p), "top" === p ? n -= c + parseInt(this.picker.css("padding-top")) : n += k, this.o.rtl) {
                    var q = e - (m + l);
                    this.picker.css({
                        top: n
                        , right: q
                        , zIndex: i
                    })
                } else this.picker.css({
                    top: n
                    , left: m
                    , zIndex: i
                });
                return this
            }
            , _allow_update: !0
            , update: function() {
                if (!this._allow_update) return this;
                var b = this.dates.copy()
                    , c = []
                    , d = !1;
                return arguments.length ? (a.each(arguments, a.proxy(function(a, b) {
                    b instanceof Date && (b = this._local_to_utc(b)), c.push(b)
                }, this)), d = !0) : (c = this.isInput ? this.element.val() : this.element.data("date") || this.inputField.val(), c = c && this.o.multidate ? c.split(this.o.multidateSeparator) : [c], delete this.element.data().date), c = a.map(c, a.proxy(function(a) {
                    return r.parseDate(a, this.o.format, this.o.language, this.o.assumeNearbyYear)
                }, this)), c = a.grep(c, a.proxy(function(a) {
                    return !this.dateWithinRange(a) || !a
                }, this), !0), this.dates.replace(c), this.o.updateViewDate && (this.dates.length ? this.viewDate = new Date(this.dates.get(-1)) : this.viewDate < this.o.startDate ? this.viewDate = new Date(this.o.startDate) : this.viewDate > this.o.endDate ? this.viewDate = new Date(this.o.endDate) : this.viewDate = this.o.defaultViewDate), d ? (this.setValue(), this.element.change()) : this.dates.length && String(b) !== String(this.dates) && d && (this._trigger("changeDate"), this.element.change()), !this.dates.length && b.length && (this._trigger("clearDate"), this.element.change()), this.fill(), this
            }
            , fillDow: function() {
                if (this.o.showWeekDays) {
                    var b = this.o.weekStart
                        , c = "<tr>";
                    for (this.o.calendarWeeks && (c += '<th class="cw">&#160;</th>'); b < this.o.weekStart + 7;) c += '<th class="dow', -1 !== a.inArray(b, this.o.daysOfWeekDisabled) && (c += " disabled"), c += '">' + q[this.o.language].daysMin[b++ % 7] + "</th>";
                    c += "</tr>", this.picker.find(".datepicker-days thead").append(c)
                }
            }
            , fillMonths: function() {
                for (var a, b = this._utc_to_local(this.viewDate), c = "", d = 0; d < 12; d++) a = b && b.getMonth() === d ? " focused" : "", c += '<span class="month' + a + '">' + q[this.o.language].monthsShort[d] + "</span>";
                this.picker.find(".datepicker-months td").html(c)
            }
            , setRange: function(b) {
                b && b.length ? this.range = a.map(b, function(a) {
                    return a.valueOf()
                }) : delete this.range, this.fill()
            }
            , getClassNames: function(b) {
                var c = []
                    , f = this.viewDate.getUTCFullYear()
                    , g = this.viewDate.getUTCMonth()
                    , h = d();
                return b.getUTCFullYear() < f || b.getUTCFullYear() === f && b.getUTCMonth() < g ? c.push("old") : (b.getUTCFullYear() > f || b.getUTCFullYear() === f && b.getUTCMonth() > g) && c.push("new"), this.focusDate && b.valueOf() === this.focusDate.valueOf() && c.push("focused"), this.o.todayHighlight && e(b, h) && c.push("today"), -1 !== this.dates.contains(b) && c.push("active"), this.dateWithinRange(b) || c.push("disabled"), this.dateIsDisabled(b) && c.push("disabled", "disabled-date"), -1 !== a.inArray(b.getUTCDay(), this.o.daysOfWeekHighlighted) && c.push("highlighted"), this.range && (b > this.range[0] && b < this.range[this.range.length - 1] && c.push("range"), -1 !== a.inArray(b.valueOf(), this.range) && c.push("selected"), b.valueOf() === this.range[0] && c.push("range-start"), b.valueOf() === this.range[this.range.length - 1] && c.push("range-end")), c
            }
            , _fill_yearsView: function(c, d, e, f, g, h, i) {
                for (var j, k, l, m = "", n = e / 10, o = this.picker.find(c), p = Math.floor(f / e) * e, q = p + 9 * n, r = Math.floor(this.viewDate.getFullYear() / n) * n, s = a.map(this.dates, function(a) {
                        return Math.floor(a.getUTCFullYear() / n) * n
                    }), t = p - n; t <= q + n; t += n) j = [d], k = null, t === p - n ? j.push("old") : t === q + n && j.push("new"), -1 !== a.inArray(t, s) && j.push("active"), (t < g || t > h) && j.push("disabled"), t === r && j.push("focused"), i !== a.noop && (l = i(new Date(t, 0, 1)), l === b ? l = {} : "boolean" == typeof l ? l = {
                    enabled: l
                } : "string" == typeof l && (l = {
                    classes: l
                }), !1 === l.enabled && j.push("disabled"), l.classes && (j = j.concat(l.classes.split(/\s+/))), l.tooltip && (k = l.tooltip)), m += '<span class="' + j.join(" ") + '"' + (k ? ' title="' + k + '"' : "") + ">" + t + "</span>";
                o.find(".datepicker-switch").text(p + "-" + q), o.find("td").html(m)
            }
            , fill: function() {
                var e, f, g = new Date(this.viewDate)
                    , h = g.getUTCFullYear()
                    , i = g.getUTCMonth()
                    , j = this.o.startDate !== -1 / 0 ? this.o.startDate.getUTCFullYear() : -1 / 0
                    , k = this.o.startDate !== -1 / 0 ? this.o.startDate.getUTCMonth() : -1 / 0
                    , l = this.o.endDate !== 1 / 0 ? this.o.endDate.getUTCFullYear() : 1 / 0
                    , m = this.o.endDate !== 1 / 0 ? this.o.endDate.getUTCMonth() : 1 / 0
                    , n = q[this.o.language].today || q.en.today || ""
                    , o = q[this.o.language].clear || q.en.clear || ""
                    , p = q[this.o.language].titleFormat || q.en.titleFormat
                    , s = d()
                    , t = (!0 === this.o.todayBtn || "linked" === this.o.todayBtn) && s >= this.o.startDate && s <= this.o.endDate && !this.weekOfDateIsDisabled(s);
                if (!isNaN(h) && !isNaN(i)) {
                    this.picker.find(".datepicker-days .datepicker-switch").text(r.formatDate(g, p, this.o.language)), this.picker.find("tfoot .today").text(n).css("display", t ? "table-cell" : "none"), this.picker.find("tfoot .clear").text(o).css("display", !0 === this.o.clearBtn ? "table-cell" : "none"), this.picker.find("thead .datepicker-title").text(this.o.title).css("display", "string" == typeof this.o.title && "" !== this.o.title ? "table-cell" : "none"), this.updateNavArrows(), this.fillMonths();
                    var u = c(h, i, 0)
                        , v = u.getUTCDate();
                    u.setUTCDate(v - (u.getUTCDay() - this.o.weekStart + 7) % 7);
                    var w = new Date(u);
                    u.getUTCFullYear() < 100 && w.setUTCFullYear(u.getUTCFullYear()), w.setUTCDate(w.getUTCDate() + 42), w = w.valueOf();
                    for (var x, y, z = []; u.valueOf() < w;) {
                        if ((x = u.getUTCDay()) === this.o.weekStart && (z.push("<tr>"), this.o.calendarWeeks)) {
                            var A = new Date(+u + (this.o.weekStart - x - 7) % 7 * 864e5)
                                , B = new Date(Number(A) + (11 - A.getUTCDay()) % 7 * 864e5)
                                , C = new Date(Number(C = c(B.getUTCFullYear(), 0, 1)) + (11 - C.getUTCDay()) % 7 * 864e5)
                                , D = (B - C) / 864e5 / 7 + 1;
                            z.push('<td class="cw">' + D + "</td>")
                        }
                        y = this.getClassNames(u), y.push("day");
                        var E = u.getUTCDate();
                        this.o.beforeShowDay !== a.noop && (f = this.o.beforeShowDay(this._utc_to_local(u)), f === b ? f = {} : "boolean" == typeof f ? f = {
                            enabled: f
                        } : "string" == typeof f && (f = {
                            classes: f
                        }), !1 === f.enabled && y.push("disabled"), f.classes && (y = y.concat(f.classes.split(/\s+/))), f.tooltip && (e = f.tooltip), f.content && (E = f.content)), y = a.isFunction(a.uniqueSort) ? a.uniqueSort(y) : a.unique(y), z.push('<td class="' + y.join(" ") + '"' + (e ? ' title="' + e + '"' : "") + ' data-date="' + u.getTime().toString() + '">' + E + "</td>"), e = null, x === this.o.weekEnd && z.push("</tr>"), u.setUTCDate(u.getUTCDate() + 1)
                    }
                    this.picker.find(".datepicker-days tbody").html(z.join(""));
                    var F = q[this.o.language].monthsTitle || q.en.monthsTitle || "Months"
                        , G = this.picker.find(".datepicker-months").find(".datepicker-switch").text(this.o.maxViewMode < 2 ? F : h).end().find("tbody span").removeClass("active");
                    if (a.each(this.dates, function(a, b) {
                            b.getUTCFullYear() === h && G.eq(b.getUTCMonth()).addClass("active")
                        }), (h < j || h > l) && G.addClass("disabled"), h === j && G.slice(0, k).addClass("disabled"), h === l && G.slice(m + 1).addClass("disabled"), this.o.beforeShowMonth !== a.noop) {
                        var H = this;
                        a.each(G, function(c, d) {
                            var e = new Date(h, c, 1)
                                , f = H.o.beforeShowMonth(e);
                            f === b ? f = {} : "boolean" == typeof f ? f = {
                                enabled: f
                            } : "string" == typeof f && (f = {
                                classes: f
                            }), !1 !== f.enabled || a(d).hasClass("disabled") || a(d).addClass("disabled"), f.classes && a(d).addClass(f.classes), f.tooltip && a(d).prop("title", f.tooltip)
                        })
                    }
                    this._fill_yearsView(".datepicker-years", "year", 10, h, j, l, this.o.beforeShowYear), this._fill_yearsView(".datepicker-decades", "decade", 100, h, j, l, this.o.beforeShowDecade), this._fill_yearsView(".datepicker-centuries", "century", 1e3, h, j, l, this.o.beforeShowCentury)
                }
            }
            , updateNavArrows: function() {
                if (this._allow_update) {
                    var a, b, c = new Date(this.viewDate)
                        , d = c.getUTCFullYear()
                        , e = c.getUTCMonth()
                        , f = this.o.startDate !== -1 / 0 ? this.o.startDate.getUTCFullYear() : -1 / 0
                        , g = this.o.startDate !== -1 / 0 ? this.o.startDate.getUTCMonth() : -1 / 0
                        , h = this.o.endDate !== 1 / 0 ? this.o.endDate.getUTCFullYear() : 1 / 0
                        , i = this.o.endDate !== 1 / 0 ? this.o.endDate.getUTCMonth() : 1 / 0
                        , j = 1;
                    switch (this.viewMode) {
                        case 4:
                            j *= 10;
                        case 3:
                            j *= 10;
                        case 2:
                            j *= 10;
                        case 1:
                            a = Math.floor(d / j) * j <= f, b = Math.floor(d / j) * j + j > h;
                            break;
                        case 0:
                            a = d <= f && e <= g, b = d >= h && e >= i
                    }
                    this.picker.find(".prev").toggleClass("disabled", a), this.picker.find(".next").toggleClass("disabled", b)
                }
            }
            , click: function(b) {
                b.preventDefault(), b.stopPropagation();
                var e, f, g, h;
                e = a(b.target), e.hasClass("datepicker-switch") && this.viewMode !== this.o.maxViewMode && this.setViewMode(this.viewMode + 1), e.hasClass("today") && !e.hasClass("day") && (this.setViewMode(0), this._setDate(d(), "linked" === this.o.todayBtn ? null : "view")), e.hasClass("clear") && this.clearDates(), e.hasClass("disabled") || (e.hasClass("month") || e.hasClass("year") || e.hasClass("decade") || e.hasClass("century")) && (this.viewDate.setUTCDate(1), f = 1, 1 === this.viewMode ? (h = e.parent().find("span").index(e), g = this.viewDate.getUTCFullYear(), this.viewDate.setUTCMonth(h)) : (h = 0, g = Number(e.text()), this.viewDate.setUTCFullYear(g)), this._trigger(r.viewModes[this.viewMode - 1].e, this.viewDate), this.viewMode === this.o.minViewMode ? this._setDate(c(g, h, f)) : (this.setViewMode(this.viewMode - 1), this.fill())), this.picker.is(":visible") && this._focused_from && this._focused_from.focus(), delete this._focused_from
            }
            , dayCellClick: function(b) {
                var c = a(b.currentTarget)
                    , d = c.data("date")
                    , e = new Date(d);
                this.o.updateViewDate && (e.getUTCFullYear() !== this.viewDate.getUTCFullYear() && this._trigger("changeYear", this.viewDate), e.getUTCMonth() !== this.viewDate.getUTCMonth() && this._trigger("changeMonth", this.viewDate)), this._setDate(e)
            }
            , navArrowsClick: function(b) {
                var c = a(b.currentTarget)
                    , d = c.hasClass("prev") ? -1 : 1;
                0 !== this.viewMode && (d *= 12 * r.viewModes[this.viewMode].navStep), this.viewDate = this.moveMonth(this.viewDate, d), this._trigger(r.viewModes[this.viewMode].e, this.viewDate), this.fill()
            }
            , _toggle_multidate: function(a) {
                var b = this.dates.contains(a);
                if (a || this.dates.clear(), -1 !== b ? (!0 === this.o.multidate || this.o.multidate > 1 || this.o.toggleActive) && this.dates.remove(b) : !1 === this.o.multidate ? (this.dates.clear(), this.dates.push(a)) : this.dates.push(a), "number" == typeof this.o.multidate)
                    for (; this.dates.length > this.o.multidate;) this.dates.remove(0)
            }
            , _setDate: function(a, b) {
                b && "date" !== b || this._toggle_multidate(a && new Date(a)), (!b && this.o.updateViewDate || "view" === b) && (this.viewDate = a && new Date(a)), this.fill(), this.setValue(), b && "view" === b || this._trigger("changeDate"), this.inputField.trigger("change"), !this.o.autoclose || b && "date" !== b || this.hide()
            }
            , moveDay: function(a, b) {
                var c = new Date(a);
                return c.setUTCDate(a.getUTCDate() + b), c
            }
            , moveWeek: function(a, b) {
                return this.moveDay(a, 7 * b)
            }
            , moveMonth: function(a, b) {
                if (!g(a)) return this.o.defaultViewDate;
                if (!b) return a;
                var c, d, e = new Date(a.valueOf())
                    , f = e.getUTCDate()
                    , h = e.getUTCMonth()
                    , i = Math.abs(b);
                if (b = b > 0 ? 1 : -1, 1 === i) d = -1 === b ? function() {
                    return e.getUTCMonth() === h
                } : function() {
                    return e.getUTCMonth() !== c
                }, c = h + b, e.setUTCMonth(c), c = (c + 12) % 12;
                else {
                    for (var j = 0; j < i; j++) e = this.moveMonth(e, b);
                    c = e.getUTCMonth(), e.setUTCDate(f), d = function() {
                        return c !== e.getUTCMonth()
                    }
                }
                for (; d();) e.setUTCDate(--f), e.setUTCMonth(c);
                return e
            }
            , moveYear: function(a, b) {
                return this.moveMonth(a, 12 * b)
            }
            , moveAvailableDate: function(a, b, c) {
                do {
                    if (a = this[c](a, b), !this.dateWithinRange(a)) return !1;
                    c = "moveDay"
                } while (this.dateIsDisabled(a));
                return a
            }
            , weekOfDateIsDisabled: function(b) {
                return -1 !== a.inArray(b.getUTCDay(), this.o.daysOfWeekDisabled)
            }
            , dateIsDisabled: function(b) {
                return this.weekOfDateIsDisabled(b) || a.grep(this.o.datesDisabled, function(a) {
                    return e(b, a)
                }).length > 0
            }
            , dateWithinRange: function(a) {
                return a >= this.o.startDate && a <= this.o.endDate
            }
            , keydown: function(a) {
                if (!this.picker.is(":visible")) return void(40 !== a.keyCode && 27 !== a.keyCode || (this.show(), a.stopPropagation()));
                var b, c, d = !1
                    , e = this.focusDate || this.viewDate;
                switch (a.keyCode) {
                    case 27:
                        this.focusDate ? (this.focusDate = null, this.viewDate = this.dates.get(-1) || this.viewDate, this.fill()) : this.hide(), a.preventDefault(), a.stopPropagation();
                        break;
                    case 37:
                    case 38:
                    case 39:
                    case 40:
                        if (!this.o.keyboardNavigation || 7 === this.o.daysOfWeekDisabled.length) break;
                        b = 37 === a.keyCode || 38 === a.keyCode ? -1 : 1, 0 === this.viewMode ? a.ctrlKey ? (c = this.moveAvailableDate(e, b, "moveYear")) && this._trigger("changeYear", this.viewDate) : a.shiftKey ? (c = this.moveAvailableDate(e, b, "moveMonth")) && this._trigger("changeMonth", this.viewDate) : 37 === a.keyCode || 39 === a.keyCode ? c = this.moveAvailableDate(e, b, "moveDay") : this.weekOfDateIsDisabled(e) || (c = this.moveAvailableDate(e, b, "moveWeek")) : 1 === this.viewMode ? (38 !== a.keyCode && 40 !== a.keyCode || (b *= 4), c = this.moveAvailableDate(e, b, "moveMonth")) : 2 === this.viewMode && (38 !== a.keyCode && 40 !== a.keyCode || (b *= 4), c = this.moveAvailableDate(e, b, "moveYear")), c && (this.focusDate = this.viewDate = c, this.setValue(), this.fill(), a.preventDefault());
                        break;
                    case 13:
                        if (!this.o.forceParse) break;
                        e = this.focusDate || this.dates.get(-1) || this.viewDate, this.o.keyboardNavigation && (this._toggle_multidate(e), d = !0), this.focusDate = null, this.viewDate = this.dates.get(-1) || this.viewDate, this.setValue(), this.fill(), this.picker.is(":visible") && (a.preventDefault(), a.stopPropagation(), this.o.autoclose && this.hide());
                        break;
                    case 9:
                        this.focusDate = null, this.viewDate = this.dates.get(-1) || this.viewDate, this.fill(), this.hide()
                }
                d && (this.dates.length ? this._trigger("changeDate") : this._trigger("clearDate"), this.inputField.trigger("change"))
            }
            , setViewMode: function(a) {
                this.viewMode = a, this.picker.children("div").hide().filter(".datepicker-" + r.viewModes[this.viewMode].clsName).show(), this.updateNavArrows(), this._trigger("changeViewMode", new Date(this.viewDate))
            }
        };
        var l = function(b, c) {
            a.data(b, "datepicker", this), this.element = a(b), this.inputs = a.map(c.inputs, function(a) {
                return a.jquery ? a[0] : a
            }), delete c.inputs, this.keepEmptyValues = c.keepEmptyValues, delete c.keepEmptyValues, n.call(a(this.inputs), c).on("changeDate", a.proxy(this.dateUpdated, this)), this.pickers = a.map(this.inputs, function(b) {
                return a.data(b, "datepicker")
            }), this.updateDates()
        };
        l.prototype = {
            updateDates: function() {
                this.dates = a.map(this.pickers, function(a) {
                    return a.getUTCDate()
                }), this.updateRanges()
            }
            , updateRanges: function() {
                var b = a.map(this.dates, function(a) {
                    return a.valueOf()
                });
                a.each(this.pickers, function(a, c) {
                    c.setRange(b)
                })
            }
            , clearDates: function() {
                a.each(this.pickers, function(a, b) {
                    b.clearDates()
                })
            }
            , dateUpdated: function(c) {
                if (!this.updating) {
                    this.updating = !0;
                    var d = a.data(c.target, "datepicker");
                    if (d !== b) {
                        var e = d.getUTCDate()
                            , f = this.keepEmptyValues
                            , g = a.inArray(c.target, this.inputs)
                            , h = g - 1
                            , i = g + 1
                            , j = this.inputs.length;
                        if (-1 !== g) {
                            if (a.each(this.pickers, function(a, b) {
                                    b.getUTCDate() || b !== d && f || b.setUTCDate(e)
                                }), e < this.dates[h])
                                for (; h >= 0 && e < this.dates[h];) this.pickers[h--].setUTCDate(e);
                            else if (e > this.dates[i])
                                for (; i < j && e > this.dates[i];) this.pickers[i++].setUTCDate(e);
                            this.updateDates(), delete this.updating
                        }
                    }
                }
            }
            , destroy: function() {
                a.map(this.pickers, function(a) {
                    a.destroy()
                }), a(this.inputs).off("changeDate", this.dateUpdated), delete this.element.data().datepicker
            }
            , remove: f("destroy", "Method `remove` is deprecated and will be removed in version 2.0. Use `destroy` instead")
        };
        var m = a.fn.datepicker
            , n = function(c) {
                var d = Array.apply(null, arguments);
                d.shift();
                var e;
                if (this.each(function() {
                        var b = a(this)
                            , f = b.data("datepicker")
                            , g = "object" == typeof c && c;
                        if (!f) {
                            var j = h(this, "date")
                                , m = a.extend({}, o, j, g)
                                , n = i(m.language)
                                , p = a.extend({}, o, n, j, g);
                            b.hasClass("input-daterange") || p.inputs ? (a.extend(p, {
                                inputs: p.inputs || b.find("input").toArray()
                            }), f = new l(this, p)) : f = new k(this, p), b.data("datepicker", f)
                        }
                        "string" == typeof c && "function" == typeof f[c] && (e = f[c].apply(f, d))
                    }), e === b || e instanceof k || e instanceof l) return this;
                if (this.length > 1) throw new Error("Using only allowed for the collection of a single element (" + c + " function)");
                return e
            };
        a.fn.datepicker = n;
        var o = a.fn.datepicker.defaults = {
                assumeNearbyYear: !1
                , autoclose: !1
                , beforeShowDay: a.noop
                , beforeShowMonth: a.noop
                , beforeShowYear: a.noop
                , beforeShowDecade: a.noop
                , beforeShowCentury: a.noop
                , calendarWeeks: !1
                , clearBtn: !1
                , toggleActive: !1
                , daysOfWeekDisabled: []
                , daysOfWeekHighlighted: []
                , datesDisabled: []
                , endDate: 1 / 0
                , forceParse: !0
                , format: "mm/dd/yyyy"
                , keepEmptyValues: !1
                , keyboardNavigation: !0
                , language: "en"
                , minViewMode: 0
                , maxViewMode: 4
                , multidate: !1
                , multidateSeparator: ","
                , orientation: "auto"
                , rtl: !1
                , startDate: -1 / 0
                , startView: 0
                , todayBtn: !1
                , todayHighlight: !1
                , updateViewDate: !0
                , weekStart: 0
                , disableTouchKeyboard: !1
                , enableOnReadonly: !0
                , showOnFocus: !0
                , zIndexOffset: 10
                , container: "body"
                , immediateUpdates: !1
                , title: ""
                , templates: {
                    leftArrow: "&#x00AB;"
                    , rightArrow: "&#x00BB;"
                }
                , showWeekDays: !0
            }
            , p = a.fn.datepicker.locale_opts = ["format", "rtl", "weekStart"];
        a.fn.datepicker.Constructor = k;
        var q = a.fn.datepicker.dates = {
                en: {
                    days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
                    , daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
                    , daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
                    , months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
                    , monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                    , today: "Today"
                    , clear: "Clear"
                    , titleFormat: "MM yyyy"
                }
            }
            , r = {
                viewModes: [{
                    names: ["days", "month"]
                    , clsName: "days"
                    , e: "changeMonth"
                }, {
                    names: ["months", "year"]
                    , clsName: "months"
                    , e: "changeYear"
                    , navStep: 1
                }, {
                    names: ["years", "decade"]
                    , clsName: "years"
                    , e: "changeDecade"
                    , navStep: 10
                }, {
                    names: ["decades", "century"]
                    , clsName: "decades"
                    , e: "changeCentury"
                    , navStep: 100
                }, {
                    names: ["centuries", "millennium"]
                    , clsName: "centuries"
                    , e: "changeMillennium"
                    , navStep: 1e3
                }]
                , validParts: /dd?|DD?|mm?|MM?|yy(?:yy)?/g
                , nonpunctuation: /[^ -\/:-@\u5e74\u6708\u65e5\[-`{-~\t\n\r]+/g
                , parseFormat: function(a) {
                    if ("function" == typeof a.toValue && "function" == typeof a.toDisplay) return a;
                    var b = a.replace(this.validParts, "\0").split("\0")
                        , c = a.match(this.validParts);
                    if (!b || !b.length || !c || 0 === c.length) throw new Error("Invalid date format.");
                    return {
                        separators: b
                        , parts: c
                    }
                }
                , parseDate: function(c, e, f, g) {
                    function h(a, b) {
                        return !0 === b && (b = 10), a < 100 && (a += 2e3) > (new Date).getFullYear() + b && (a -= 100), a
                    }

                    function i() {
                        var a = this.slice(0, j[n].length)
                            , b = j[n].slice(0, a.length);
                        return a.toLowerCase() === b.toLowerCase()
                    }
                    if (!c) return b;
                    if (c instanceof Date) return c;
                    if ("string" == typeof e && (e = r.parseFormat(e)), e.toValue) return e.toValue(c, e, f);
                    var j, l, m, n, o, p = {
                            d: "moveDay"
                            , m: "moveMonth"
                            , w: "moveWeek"
                            , y: "moveYear"
                        }
                        , s = {
                            yesterday: "-1d"
                            , today: "+0d"
                            , tomorrow: "+1d"
                        };
                    if (c in s && (c = s[c]), /^[\-+]\d+[dmwy]([\s,]+[\-+]\d+[dmwy])*$/i.test(c)) {
                        for (j = c.match(/([\-+]\d+)([dmwy])/gi), c = new Date, n = 0; n < j.length; n++) l = j[n].match(/([\-+]\d+)([dmwy])/i), m = Number(l[1]), o = p[l[2].toLowerCase()], c = k.prototype[o](c, m);
                        return k.prototype._zero_utc_time(c)
                    }
                    j = c && c.match(this.nonpunctuation) || [];
                    var t, u, v = {}
                        , w = ["yyyy", "yy", "M", "MM", "m", "mm", "d", "dd"]
                        , x = {
                            yyyy: function(a, b) {
                                return a.setUTCFullYear(g ? h(b, g) : b)
                            }
                            , m: function(a, b) {
                                if (isNaN(a)) return a;
                                for (b -= 1; b < 0;) b += 12;
                                for (b %= 12, a.setUTCMonth(b); a.getUTCMonth() !== b;) a.setUTCDate(a.getUTCDate() - 1);
                                return a
                            }
                            , d: function(a, b) {
                                return a.setUTCDate(b)
                            }
                        };
                    x.yy = x.yyyy, x.M = x.MM = x.mm = x.m, x.dd = x.d, c = d();
                    var y = e.parts.slice();
                    if (j.length !== y.length && (y = a(y).filter(function(b, c) {
                            return -1 !== a.inArray(c, w)
                        }).toArray()), j.length === y.length) {
                        var z;
                        for (n = 0, z = y.length; n < z; n++) {
                            if (t = parseInt(j[n], 10), l = y[n], isNaN(t)) switch (l) {
                                case "MM":
                                    u = a(q[f].months).filter(i), t = a.inArray(u[0], q[f].months) + 1;
                                    break;
                                case "M":
                                    u = a(q[f].monthsShort).filter(i), t = a.inArray(u[0], q[f].monthsShort) + 1
                            }
                            v[l] = t
                        }
                        var A, B;
                        for (n = 0; n < w.length; n++)(B = w[n]) in v && !isNaN(v[B]) && (A = new Date(c), x[B](A, v[B]), isNaN(A) || (c = A))
                    }
                    return c
                }
                , formatDate: function(b, c, d) {
                    if (!b) return "";
                    if ("string" == typeof c && (c = r.parseFormat(c)), c.toDisplay) return c.toDisplay(b, c, d);
                    var e = {
                        d: b.getUTCDate()
                        , D: q[d].daysShort[b.getUTCDay()]
                        , DD: q[d].days[b.getUTCDay()]
                        , m: b.getUTCMonth() + 1
                        , M: q[d].monthsShort[b.getUTCMonth()]
                        , MM: q[d].months[b.getUTCMonth()]
                        , yy: b.getUTCFullYear().toString().substring(2)
                        , yyyy: b.getUTCFullYear()
                    };
                    e.dd = (e.d < 10 ? "0" : "") + e.d, e.mm = (e.m < 10 ? "0" : "") + e.m, b = [];
                    for (var f = a.extend([], c.separators), g = 0, h = c.parts.length; g <= h; g++) f.length && b.push(f.shift()), b.push(e[c.parts[g]]);
                    return b.join("")
                }
                , headTemplate: '<thead><tr><th colspan="7" class="datepicker-title"></th></tr><tr><th class="prev">' + o.templates.leftArrow + '</th><th colspan="5" class="datepicker-switch"></th><th class="next">' + o.templates.rightArrow + "</th></tr></thead>"
                , contTemplate: '<tbody><tr><td colspan="7"></td></tr></tbody>'
                , footTemplate: '<tfoot><tr><th colspan="7" class="today"></th></tr><tr><th colspan="7" class="clear"></th></tr></tfoot>'
            };
        r.template = '<div class="datepicker"><div class="datepicker-days"><table class="table-condensed">' + r.headTemplate + "<tbody></tbody>" + r.footTemplate + '</table></div><div class="datepicker-months"><table class="table-condensed">' + r.headTemplate + r.contTemplate + r.footTemplate + '</table></div><div class="datepicker-years"><table class="table-condensed">' + r.headTemplate + r.contTemplate + r.footTemplate + '</table></div><div class="datepicker-decades"><table class="table-condensed">' + r.headTemplate + r.contTemplate + r.footTemplate + '</table></div><div class="datepicker-centuries"><table class="table-condensed">' + r.headTemplate + r.contTemplate + r.footTemplate + "</table></div></div>", a.fn.datepicker.DPGlobal = r, a.fn.datepicker.noConflict = function() {
            return a.fn.datepicker = m, this
        }, a.fn.datepicker.version = "1.9.0", a.fn.datepicker.deprecated = function(a) {
            var b = window.console;
            b && b.warn && b.warn("DEPRECATED: " + a)
        }, a(document).on("focus.datepicker.data-api click.datepicker.data-api", '[data-provide="datepicker"]', function(b) {
            var c = a(this);
            c.data("datepicker") || (b.preventDefault(), n.call(c, "show"))
        }), a(function() {
            n.call(a('[data-provide="datepicker-inline"]'))
        })
    });

</script>
<script>
    /*!
     *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
     *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
     */
    @font - face {
        font - family: 'FontAwesome';
        src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
        src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
        font - weight: normal;
        font - style: normal
    }.fa {
        display: inline - block;font: normal normal normal 14 px / 1 FontAwesome;font - size: inherit;text - rendering: auto; - webkit - font - smoothing: antialiased; - moz - osx - font - smoothing: grayscale
    }.fa - lg {
        font - size: 1.33333333 em;
        line - height: .75 em;
        vertical - align: -15 %
    }.fa - 2 x {
        font - size: 2 em
    }.fa - 3 x {
        font - size: 3 em
    }.fa - 4 x {
        font - size: 4 em
    }.fa - 5 x {
        font - size: 5 em
    }.fa - fw {
        width: 1.28571429 em;text - align: center
    }.fa - ul {
        padding - left: 0;
        margin - left: 2.14285714 em;
        list - style - type: none
    }.fa - ul > li {
        position: relative
    }.fa - li {
        position: absolute;left: -2.14285714 em;width: 2.14285714 em;top: .14285714 em;text - align: center
    }.fa - li.fa - lg {
        left: -1.85714286 em
    }.fa - border {
        padding: .2 em .25 em .15 em;border: solid .08 em #eee;border - radius: .1 em
    }.fa - pull - left {
        float: left
    }.fa - pull - right {
        float: right
    }.fa.fa - pull - left {
        margin - right: .3 em
    }.fa.fa - pull - right {
        margin - left: .3 em
    }.pull - right {
        float: right
    }.pull - left {
        float: left
    }.fa.pull - left {
        margin - right: .3 em
    }.fa.pull - right {
        margin - left: .3 em
    }.fa - spin {
        -webkit - animation: fa - spin 2 s infinite linear;
        animation: fa - spin 2 s infinite linear
    }.fa - pulse {
        -webkit - animation: fa - spin 1 s infinite steps(8);
        animation: fa - spin 1 s infinite steps(8)
    }
    @ - webkit - keyframes fa - spin {
        0 % {
            -webkit - transform: rotate(0 deg);transform: rotate(0 deg)
        }
        100 % {
            -webkit - transform: rotate(359 deg);transform: rotate(359 deg)
        }
    }
    @keyframes fa - spin {
            0 % {
                -webkit - transform: rotate(0 deg);transform: rotate(0 deg)
            }
            100 % {
                -webkit - transform: rotate(359 deg);transform: rotate(359 deg)
            }
        }.fa - rotate - 90 {
            -ms - filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)"; - webkit - transform: rotate(90 deg); - ms - transform: rotate(90 deg);
            transform: rotate(90 deg)
        }.fa - rotate - 180 {
            -ms - filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)"; - webkit - transform: rotate(180 deg); - ms - transform: rotate(180 deg);
            transform: rotate(180 deg)
        }.fa - rotate - 270 {
            -ms - filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)"; - webkit - transform: rotate(270 deg); - ms - transform: rotate(270 deg);
            transform: rotate(270 deg)
        }.fa - flip - horizontal {
            -ms - filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)"; - webkit - transform: scale(-1, 1); - ms - transform: scale(-1, 1);
            transform: scale(-1, 1)
        }.fa - flip - vertical {
            -ms - filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"; - webkit - transform: scale(1, -1); - ms - transform: scale(1, -1);
            transform: scale(1, -1)
        }: root.fa - rotate - 90,: root.fa - rotate - 180,: root.fa - rotate - 270,: root.fa - flip - horizontal,: root.fa - flip - vertical {
            filter: none
        }.fa - stack {
            position: relative;display: inline - block;width: 2 em;height: 2 em;line - height: 2 em;vertical - align: middle
        }.fa - stack - 1 x, .fa - stack - 2 x {
            position: absolute;left: 0;width: 100 % ;text - align: center
        }.fa - stack - 1 x {
            line - height: inherit
        }.fa - stack - 2 x {
            font - size: 2 em
        }.fa - inverse {
            color: #fff
        }.fa - glass: before {
            content: "\f000"
        }.fa - music: before {
            content: "\f001"
        }.fa - search: before {
            content: "\f002"
        }.fa - envelope - o: before {
            content: "\f003"
        }.fa - heart: before {
            content: "\f004"
        }.fa - star: before {
            content: "\f005"
        }.fa - star - o: before {
            content: "\f006"
        }.fa - user: before {
            content: "\f007"
        }.fa - film: before {
            content: "\f008"
        }.fa - th - large: before {
            content: "\f009"
        }.fa - th: before {
            content: "\f00a"
        }.fa - th - list: before {
            content: "\f00b"
        }.fa - check: before {
            content: "\f00c"
        }.fa - remove: before, .fa - close: before, .fa - times: before {
            content: "\f00d"
        }.fa - search - plus: before {
            content: "\f00e"
        }.fa - search - minus: before {
            content: "\f010"
        }.fa - power - off: before {
            content: "\f011"
        }.fa - signal: before {
            content: "\f012"
        }.fa - gear: before, .fa - cog: before {
            content: "\f013"
        }.fa - trash - o: before {
            content: "\f014"
        }.fa - home: before {
            content: "\f015"
        }.fa - file - o: before {
            content: "\f016"
        }.fa - clock - o: before {
            content: "\f017"
        }.fa - road: before {
            content: "\f018"
        }.fa - download: before {
            content: "\f019"
        }.fa - arrow - circle - o - down: before {
            content: "\f01a"
        }.fa - arrow - circle - o - up: before {
            content: "\f01b"
        }.fa - inbox: before {
            content: "\f01c"
        }.fa - play - circle - o: before {
            content: "\f01d"
        }.fa - rotate - right: before, .fa - repeat: before {
            content: "\f01e"
        }.fa - refresh: before {
            content: "\f021"
        }.fa - list - alt: before {
            content: "\f022"
        }.fa - lock: before {
            content: "\f023"
        }.fa - flag: before {
            content: "\f024"
        }.fa - headphones: before {
            content: "\f025"
        }.fa - volume - off: before {
            content: "\f026"
        }.fa - volume - down: before {
            content: "\f027"
        }.fa - volume - up: before {
            content: "\f028"
        }.fa - qrcode: before {
            content: "\f029"
        }.fa - barcode: before {
            content: "\f02a"
        }.fa - tag: before {
            content: "\f02b"
        }.fa - tags: before {
            content: "\f02c"
        }.fa - book: before {
            content: "\f02d"
        }.fa - bookmark: before {
            content: "\f02e"
        }.fa - print: before {
            content: "\f02f"
        }.fa - camera: before {
            content: "\f030"
        }.fa - font: before {
            content: "\f031"
        }.fa - bold: before {
            content: "\f032"
        }.fa - italic: before {
            content: "\f033"
        }.fa - text - height: before {
            content: "\f034"
        }.fa - text - width: before {
            content: "\f035"
        }.fa - align - left: before {
            content: "\f036"
        }.fa - align - center: before {
            content: "\f037"
        }.fa - align - right: before {
            content: "\f038"
        }.fa - align - justify: before {
            content: "\f039"
        }.fa - list: before {
            content: "\f03a"
        }.fa - dedent: before, .fa - outdent: before {
            content: "\f03b"
        }.fa - indent: before {
            content: "\f03c"
        }.fa - video - camera: before {
            content: "\f03d"
        }.fa - photo: before, .fa - image: before, .fa - picture - o: before {
            content: "\f03e"
        }.fa - pencil: before {
            content: "\f040"
        }.fa - map - marker: before {
            content: "\f041"
        }.fa - adjust: before {
            content: "\f042"
        }.fa - tint: before {
            content: "\f043"
        }.fa - edit: before, .fa - pencil - square - o: before {
            content: "\f044"
        }.fa - share - square - o: before {
            content: "\f045"
        }.fa - check - square - o: before {
            content: "\f046"
        }.fa - arrows: before {
            content: "\f047"
        }.fa - step - backward: before {
            content: "\f048"
        }.fa - fast - backward: before {
            content: "\f049"
        }.fa - backward: before {
            content: "\f04a"
        }.fa - play: before {
            content: "\f04b"
        }.fa - pause: before {
            content: "\f04c"
        }.fa - stop: before {
            content: "\f04d"
        }.fa - forward: before {
            content: "\f04e"
        }.fa - fast - forward: before {
            content: "\f050"
        }.fa - step - forward: before {
            content: "\f051"
        }.fa - eject: before {
            content: "\f052"
        }.fa - chevron - left: before {
            content: "\f053"
        }.fa - chevron - right: before {
            content: "\f054"
        }.fa - plus - circle: before {
            content: "\f055"
        }.fa - minus - circle: before {
            content: "\f056"
        }.fa - times - circle: before {
            content: "\f057"
        }.fa - check - circle: before {
            content: "\f058"
        }.fa - question - circle: before {
            content: "\f059"
        }.fa - info - circle: before {
            content: "\f05a"
        }.fa - crosshairs: before {
            content: "\f05b"
        }.fa - times - circle - o: before {
            content: "\f05c"
        }.fa - check - circle - o: before {
            content: "\f05d"
        }.fa - ban: before {
            content: "\f05e"
        }.fa - arrow - left: before {
            content: "\f060"
        }.fa - arrow - right: before {
            content: "\f061"
        }.fa - arrow - up: before {
            content: "\f062"
        }.fa - arrow - down: before {
            content: "\f063"
        }.fa - mail - forward: before, .fa - share: before {
            content: "\f064"
        }.fa - expand: before {
            content: "\f065"
        }.fa - compress: before {
            content: "\f066"
        }.fa - plus: before {
            content: "\f067"
        }.fa - minus: before {
            content: "\f068"
        }.fa - asterisk: before {
            content: "\f069"
        }.fa - exclamation - circle: before {
            content: "\f06a"
        }.fa - gift: before {
            content: "\f06b"
        }.fa - leaf: before {
            content: "\f06c"
        }.fa - fire: before {
            content: "\f06d"
        }.fa - eye: before {
            content: "\f06e"
        }.fa - eye - slash: before {
            content: "\f070"
        }.fa - warning: before, .fa - exclamation - triangle: before {
            content: "\f071"
        }.fa - plane: before {
            content: "\f072"
        }.fa - calendar: before {
            content: "\f073"
        }.fa - random: before {
            content: "\f074"
        }.fa - comment: before {
            content: "\f075"
        }.fa - magnet: before {
            content: "\f076"
        }.fa - chevron - up: before {
            content: "\f077"
        }.fa - chevron - down: before {
            content: "\f078"
        }.fa - retweet: before {
            content: "\f079"
        }.fa - shopping - cart: before {
            content: "\f07a"
        }.fa - folder: before {
            content: "\f07b"
        }.fa - folder - open: before {
            content: "\f07c"
        }.fa - arrows - v: before {
            content: "\f07d"
        }.fa - arrows - h: before {
            content: "\f07e"
        }.fa - bar - chart - o: before, .fa - bar - chart: before {
            content: "\f080"
        }.fa - twitter - square: before {
            content: "\f081"
        }.fa - facebook - square: before {
            content: "\f082"
        }.fa - camera - retro: before {
            content: "\f083"
        }.fa - key: before {
            content: "\f084"
        }.fa - gears: before, .fa - cogs: before {
            content: "\f085"
        }.fa - comments: before {
            content: "\f086"
        }.fa - thumbs - o - up: before {
            content: "\f087"
        }.fa - thumbs - o - down: before {
            content: "\f088"
        }.fa - star - half: before {
            content: "\f089"
        }.fa - heart - o: before {
            content: "\f08a"
        }.fa - sign - out: before {
            content: "\f08b"
        }.fa - linkedin - square: before {
            content: "\f08c"
        }.fa - thumb - tack: before {
            content: "\f08d"
        }.fa - external - link: before {
            content: "\f08e"
        }.fa - sign - in: before {
            content: "\f090"
        }.fa - trophy: before {
            content: "\f091"
        }.fa - github - square: before {
            content: "\f092"
        }.fa - upload: before {
            content: "\f093"
        }.fa - lemon - o: before {
            content: "\f094"
        }.fa - phone: before {
            content: "\f095"
        }.fa - square - o: before {
            content: "\f096"
        }.fa - bookmark - o: before {
            content: "\f097"
        }.fa - phone - square: before {
            content: "\f098"
        }.fa - twitter: before {
            content: "\f099"
        }.fa - facebook - f: before, .fa - facebook: before {
            content: "\f09a"
        }.fa - github: before {
            content: "\f09b"
        }.fa - unlock: before {
            content: "\f09c"
        }.fa - credit - card: before {
            content: "\f09d"
        }.fa - feed: before, .fa - rss: before {
            content: "\f09e"
        }.fa - hdd - o: before {
            content: "\f0a0"
        }.fa - bullhorn: before {
            content: "\f0a1"
        }.fa - bell: before {
            content: "\f0f3"
        }.fa - certificate: before {
            content: "\f0a3"
        }.fa - hand - o - right: before {
            content: "\f0a4"
        }.fa - hand - o - left: before {
            content: "\f0a5"
        }.fa - hand - o - up: before {
            content: "\f0a6"
        }.fa - hand - o - down: before {
            content: "\f0a7"
        }.fa - arrow - circle - left: before {
            content: "\f0a8"
        }.fa - arrow - circle - right: before {
            content: "\f0a9"
        }.fa - arrow - circle - up: before {
            content: "\f0aa"
        }.fa - arrow - circle - down: before {
            content: "\f0ab"
        }.fa - globe: before {
            content: "\f0ac"
        }.fa - wrench: before {
            content: "\f0ad"
        }.fa - tasks: before {
            content: "\f0ae"
        }.fa - filter: before {
            content: "\f0b0"
        }.fa - briefcase: before {
            content: "\f0b1"
        }.fa - arrows - alt: before {
            content: "\f0b2"
        }.fa - group: before, .fa - users: before {
            content: "\f0c0"
        }.fa - chain: before, .fa - link: before {
            content: "\f0c1"
        }.fa - cloud: before {
            content: "\f0c2"
        }.fa - flask: before {
            content: "\f0c3"
        }.fa - cut: before, .fa - scissors: before {
            content: "\f0c4"
        }.fa - copy: before, .fa - files - o: before {
            content: "\f0c5"
        }.fa - paperclip: before {
            content: "\f0c6"
        }.fa - save: before, .fa - floppy - o: before {
            content: "\f0c7"
        }.fa - square: before {
            content: "\f0c8"
        }.fa - navicon: before, .fa - reorder: before, .fa - bars: before {
            content: "\f0c9"
        }.fa - list - ul: before {
            content: "\f0ca"
        }.fa - list - ol: before {
            content: "\f0cb"
        }.fa - strikethrough: before {
            content: "\f0cc"
        }.fa - underline: before {
            content: "\f0cd"
        }.fa - table: before {
            content: "\f0ce"
        }.fa - magic: before {
            content: "\f0d0"
        }.fa - truck: before {
            content: "\f0d1"
        }.fa - pinterest: before {
            content: "\f0d2"
        }.fa - pinterest - square: before {
            content: "\f0d3"
        }.fa - google - plus - square: before {
            content: "\f0d4"
        }.fa - google - plus: before {
            content: "\f0d5"
        }.fa - money: before {
            content: "\f0d6"
        }.fa - caret - down: before {
            content: "\f0d7"
        }.fa - caret - up: before {
            content: "\f0d8"
        }.fa - caret - left: before {
            content: "\f0d9"
        }.fa - caret - right: before {
            content: "\f0da"
        }.fa - columns: before {
            content: "\f0db"
        }.fa - unsorted: before, .fa - sort: before {
            content: "\f0dc"
        }.fa - sort - down: before, .fa - sort - desc: before {
            content: "\f0dd"
        }.fa - sort - up: before, .fa - sort - asc: before {
            content: "\f0de"
        }.fa - envelope: before {
            content: "\f0e0"
        }.fa - linkedin: before {
            content: "\f0e1"
        }.fa - rotate - left: before, .fa - undo: before {
            content: "\f0e2"
        }.fa - legal: before, .fa - gavel: before {
            content: "\f0e3"
        }.fa - dashboard: before, .fa - tachometer: before {
            content: "\f0e4"
        }.fa - comment - o: before {
            content: "\f0e5"
        }.fa - comments - o: before {
            content: "\f0e6"
        }.fa - flash: before, .fa - bolt: before {
            content: "\f0e7"
        }.fa - sitemap: before {
            content: "\f0e8"
        }.fa - umbrella: before {
            content: "\f0e9"
        }.fa - paste: before, .fa - clipboard: before {
            content: "\f0ea"
        }.fa - lightbulb - o: before {
            content: "\f0eb"
        }.fa - exchange: before {
            content: "\f0ec"
        }.fa - cloud - download: before {
            content: "\f0ed"
        }.fa - cloud - upload: before {
            content: "\f0ee"
        }.fa - user - md: before {
            content: "\f0f0"
        }.fa - stethoscope: before {
            content: "\f0f1"
        }.fa - suitcase: before {
            content: "\f0f2"
        }.fa - bell - o: before {
            content: "\f0a2"
        }.fa - coffee: before {
            content: "\f0f4"
        }.fa - cutlery: before {
            content: "\f0f5"
        }.fa - file - text - o: before {
            content: "\f0f6"
        }.fa - building - o: before {
            content: "\f0f7"
        }.fa - hospital - o: before {
            content: "\f0f8"
        }.fa - ambulance: before {
            content: "\f0f9"
        }.fa - medkit: before {
            content: "\f0fa"
        }.fa - fighter - jet: before {
            content: "\f0fb"
        }.fa - beer: before {
            content: "\f0fc"
        }.fa - h - square: before {
            content: "\f0fd"
        }.fa - plus - square: before {
            content: "\f0fe"
        }.fa - angle - double - left: before {
            content: "\f100"
        }.fa - angle - double - right: before {
            content: "\f101"
        }.fa - angle - double - up: before {
            content: "\f102"
        }.fa - angle - double - down: before {
            content: "\f103"
        }.fa - angle - left: before {
            content: "\f104"
        }.fa - angle - right: before {
            content: "\f105"
        }.fa - angle - up: before {
            content: "\f106"
        }.fa - angle - down: before {
            content: "\f107"
        }.fa - desktop: before {
            content: "\f108"
        }.fa - laptop: before {
            content: "\f109"
        }.fa - tablet: before {
            content: "\f10a"
        }.fa - mobile - phone: before, .fa - mobile: before {
            content: "\f10b"
        }.fa - circle - o: before {
            content: "\f10c"
        }.fa - quote - left: before {
            content: "\f10d"
        }.fa - quote - right: before {
            content: "\f10e"
        }.fa - spinner: before {
            content: "\f110"
        }.fa - circle: before {
            content: "\f111"
        }.fa - mail - reply: before, .fa - reply: before {
            content: "\f112"
        }.fa - github - alt: before {
            content: "\f113"
        }.fa - folder - o: before {
            content: "\f114"
        }.fa - folder - open - o: before {
            content: "\f115"
        }.fa - smile - o: before {
            content: "\f118"
        }.fa - frown - o: before {
            content: "\f119"
        }.fa - meh - o: before {
            content: "\f11a"
        }.fa - gamepad: before {
            content: "\f11b"
        }.fa - keyboard - o: before {
            content: "\f11c"
        }.fa - flag - o: before {
            content: "\f11d"
        }.fa - flag - checkered: before {
            content: "\f11e"
        }.fa - terminal: before {
            content: "\f120"
        }.fa - code: before {
            content: "\f121"
        }.fa - mail - reply - all: before, .fa - reply - all: before {
            content: "\f122"
        }.fa - star - half - empty: before, .fa - star - half - full: before, .fa - star - half - o: before {
            content: "\f123"
        }.fa - location - arrow: before {
            content: "\f124"
        }.fa - crop: before {
            content: "\f125"
        }.fa - code - fork: before {
            content: "\f126"
        }.fa - unlink: before, .fa - chain - broken: before {
            content: "\f127"
        }.fa - question: before {
            content: "\f128"
        }.fa - info: before {
            content: "\f129"
        }.fa - exclamation: before {
            content: "\f12a"
        }.fa - superscript: before {
            content: "\f12b"
        }.fa - subscript: before {
            content: "\f12c"
        }.fa - eraser: before {
            content: "\f12d"
        }.fa - puzzle - piece: before {
            content: "\f12e"
        }.fa - microphone: before {
            content: "\f130"
        }.fa - microphone - slash: before {
            content: "\f131"
        }.fa - shield: before {
            content: "\f132"
        }.fa - calendar - o: before {
            content: "\f133"
        }.fa - fire - extinguisher: before {
            content: "\f134"
        }.fa - rocket: before {
            content: "\f135"
        }.fa - maxcdn: before {
            content: "\f136"
        }.fa - chevron - circle - left: before {
            content: "\f137"
        }.fa - chevron - circle - right: before {
            content: "\f138"
        }.fa - chevron - circle - up: before {
            content: "\f139"
        }.fa - chevron - circle - down: before {
            content: "\f13a"
        }.fa - html5: before {
            content: "\f13b"
        }.fa - css3: before {
            content: "\f13c"
        }.fa - anchor: before {
            content: "\f13d"
        }.fa - unlock - alt: before {
            content: "\f13e"
        }.fa - bullseye: before {
            content: "\f140"
        }.fa - ellipsis - h: before {
            content: "\f141"
        }.fa - ellipsis - v: before {
            content: "\f142"
        }.fa - rss - square: before {
            content: "\f143"
        }.fa - play - circle: before {
            content: "\f144"
        }.fa - ticket: before {
            content: "\f145"
        }.fa - minus - square: before {
            content: "\f146"
        }.fa - minus - square - o: before {
            content: "\f147"
        }.fa - level - up: before {
            content: "\f148"
        }.fa - level - down: before {
            content: "\f149"
        }.fa - check - square: before {
            content: "\f14a"
        }.fa - pencil - square: before {
            content: "\f14b"
        }.fa - external - link - square: before {
            content: "\f14c"
        }.fa - share - square: before {
            content: "\f14d"
        }.fa - compass: before {
            content: "\f14e"
        }.fa - toggle - down: before, .fa - caret - square - o - down: before {
            content: "\f150"
        }.fa - toggle - up: before, .fa - caret - square - o - up: before {
            content: "\f151"
        }.fa - toggle - right: before, .fa - caret - square - o - right: before {
            content: "\f152"
        }.fa - euro: before, .fa - eur: before {
            content: "\f153"
        }.fa - gbp: before {
            content: "\f154"
        }.fa - dollar: before, .fa - usd: before {
            content: "\f155"
        }.fa - rupee: before, .fa - inr: before {
            content: "\f156"
        }.fa - cny: before, .fa - rmb: before, .fa - yen: before, .fa - jpy: before {
            content: "\f157"
        }.fa - ruble: before, .fa - rouble: before, .fa - rub: before {
            content: "\f158"
        }.fa - won: before, .fa - krw: before {
            content: "\f159"
        }.fa - bitcoin: before, .fa - btc: before {
            content: "\f15a"
        }.fa - file: before {
            content: "\f15b"
        }.fa - file - text: before {
            content: "\f15c"
        }.fa - sort - alpha - asc: before {
            content: "\f15d"
        }.fa - sort - alpha - desc: before {
            content: "\f15e"
        }.fa - sort - amount - asc: before {
            content: "\f160"
        }.fa - sort - amount - desc: before {
            content: "\f161"
        }.fa - sort - numeric - asc: before {
            content: "\f162"
        }.fa - sort - numeric - desc: before {
            content: "\f163"
        }.fa - thumbs - up: before {
            content: "\f164"
        }.fa - thumbs - down: before {
            content: "\f165"
        }.fa - youtube - square: before {
            content: "\f166"
        }.fa - youtube: before {
            content: "\f167"
        }.fa - xing: before {
            content: "\f168"
        }.fa - xing - square: before {
            content: "\f169"
        }.fa - youtube - play: before {
            content: "\f16a"
        }.fa - dropbox: before {
            content: "\f16b"
        }.fa - stack - overflow: before {
            content: "\f16c"
        }.fa - instagram: before {
            content: "\f16d"
        }.fa - flickr: before {
            content: "\f16e"
        }.fa - adn: before {
            content: "\f170"
        }.fa - bitbucket: before {
            content: "\f171"
        }.fa - bitbucket - square: before {
            content: "\f172"
        }.fa - tumblr: before {
            content: "\f173"
        }.fa - tumblr - square: before {
            content: "\f174"
        }.fa - long - arrow - down: before {
            content: "\f175"
        }.fa - long - arrow - up: before {
            content: "\f176"
        }.fa - long - arrow - left: before {
            content: "\f177"
        }.fa - long - arrow - right: before {
            content: "\f178"
        }.fa - apple: before {
            content: "\f179"
        }.fa - windows: before {
            content: "\f17a"
        }.fa - android: before {
            content: "\f17b"
        }.fa - linux: before {
            content: "\f17c"
        }.fa - dribbble: before {
            content: "\f17d"
        }.fa - skype: before {
            content: "\f17e"
        }.fa - foursquare: before {
            content: "\f180"
        }.fa - trello: before {
            content: "\f181"
        }.fa - female: before {
            content: "\f182"
        }.fa - male: before {
            content: "\f183"
        }.fa - gittip: before, .fa - gratipay: before {
            content: "\f184"
        }.fa - sun - o: before {
            content: "\f185"
        }.fa - moon - o: before {
            content: "\f186"
        }.fa - archive: before {
            content: "\f187"
        }.fa - bug: before {
            content: "\f188"
        }.fa - vk: before {
            content: "\f189"
        }.fa - weibo: before {
            content: "\f18a"
        }.fa - renren: before {
            content: "\f18b"
        }.fa - pagelines: before {
            content: "\f18c"
        }.fa - stack - exchange: before {
            content: "\f18d"
        }.fa - arrow - circle - o - right: before {
            content: "\f18e"
        }.fa - arrow - circle - o - left: before {
            content: "\f190"
        }.fa - toggle - left: before, .fa - caret - square - o - left: before {
            content: "\f191"
        }.fa - dot - circle - o: before {
            content: "\f192"
        }.fa - wheelchair: before {
            content: "\f193"
        }.fa - vimeo - square: before {
            content: "\f194"
        }.fa - turkish - lira: before, .fa -
        try: before {
            content: "\f195"
        }.fa - plus - square - o: before {
            content: "\f196"
        }.fa - space - shuttle: before {
            content: "\f197"
        }.fa - slack: before {
            content: "\f198"
        }.fa - envelope - square: before {
            content: "\f199"
        }.fa - wordpress: before {
            content: "\f19a"
        }.fa - openid: before {
            content: "\f19b"
        }.fa - institution: before, .fa - bank: before, .fa - university: before {
            content: "\f19c"
        }.fa - mortar - board: before, .fa - graduation - cap: before {
            content: "\f19d"
        }.fa - yahoo: before {
            content: "\f19e"
        }.fa - google: before {
            content: "\f1a0"
        }.fa - reddit: before {
            content: "\f1a1"
        }.fa - reddit - square: before {
            content: "\f1a2"
        }.fa - stumbleupon - circle: before {
            content: "\f1a3"
        }.fa - stumbleupon: before {
            content: "\f1a4"
        }.fa - delicious: before {
            content: "\f1a5"
        }.fa - digg: before {
            content: "\f1a6"
        }.fa - pied - piper - pp: before {
            content: "\f1a7"
        }.fa - pied - piper - alt: before {
            content: "\f1a8"
        }.fa - drupal: before {
            content: "\f1a9"
        }.fa - joomla: before {
            content: "\f1aa"
        }.fa - language: before {
            content: "\f1ab"
        }.fa - fax: before {
            content: "\f1ac"
        }.fa - building: before {
            content: "\f1ad"
        }.fa - child: before {
            content: "\f1ae"
        }.fa - paw: before {
            content: "\f1b0"
        }.fa - spoon: before {
            content: "\f1b1"
        }.fa - cube: before {
            content: "\f1b2"
        }.fa - cubes: before {
            content: "\f1b3"
        }.fa - behance: before {
            content: "\f1b4"
        }.fa - behance - square: before {
            content: "\f1b5"
        }.fa - steam: before {
            content: "\f1b6"
        }.fa - steam - square: before {
            content: "\f1b7"
        }.fa - recycle: before {
            content: "\f1b8"
        }.fa - automobile: before, .fa - car: before {
            content: "\f1b9"
        }.fa - cab: before, .fa - taxi: before {
            content: "\f1ba"
        }.fa - tree: before {
            content: "\f1bb"
        }.fa - spotify: before {
            content: "\f1bc"
        }.fa - deviantart: before {
            content: "\f1bd"
        }.fa - soundcloud: before {
            content: "\f1be"
        }.fa - database: before {
            content: "\f1c0"
        }.fa - file - pdf - o: before {
            content: "\f1c1"
        }.fa - file - word - o: before {
            content: "\f1c2"
        }.fa - file - excel - o: before {
            content: "\f1c3"
        }.fa - file - powerpoint - o: before {
            content: "\f1c4"
        }.fa - file - photo - o: before, .fa - file - picture - o: before, .fa - file - image - o: before {
            content: "\f1c5"
        }.fa - file - zip - o: before, .fa - file - archive - o: before {
            content: "\f1c6"
        }.fa - file - sound - o: before, .fa - file - audio - o: before {
            content: "\f1c7"
        }.fa - file - movie - o: before, .fa - file - video - o: before {
            content: "\f1c8"
        }.fa - file - code - o: before {
            content: "\f1c9"
        }.fa - vine: before {
            content: "\f1ca"
        }.fa - codepen: before {
            content: "\f1cb"
        }.fa - jsfiddle: before {
            content: "\f1cc"
        }.fa - life - bouy: before, .fa - life - buoy: before, .fa - life - saver: before, .fa - support: before, .fa - life - ring: before {
            content: "\f1cd"
        }.fa - circle - o - notch: before {
            content: "\f1ce"
        }.fa - ra: before, .fa - resistance: before, .fa - rebel: before {
            content: "\f1d0"
        }.fa - ge: before, .fa - empire: before {
            content: "\f1d1"
        }.fa - git - square: before {
            content: "\f1d2"
        }.fa - git: before {
            content: "\f1d3"
        }.fa - y - combinator - square: before, .fa - yc - square: before, .fa - hacker - news: before {
            content: "\f1d4"
        }.fa - tencent - weibo: before {
            content: "\f1d5"
        }.fa - qq: before {
            content: "\f1d6"
        }.fa - wechat: before, .fa - weixin: before {
            content: "\f1d7"
        }.fa - send: before, .fa - paper - plane: before {
            content: "\f1d8"
        }.fa - send - o: before, .fa - paper - plane - o: before {
            content: "\f1d9"
        }.fa - history: before {
            content: "\f1da"
        }.fa - circle - thin: before {
            content: "\f1db"
        }.fa - header: before {
            content: "\f1dc"
        }.fa - paragraph: before {
            content: "\f1dd"
        }.fa - sliders: before {
            content: "\f1de"
        }.fa - share - alt: before {
            content: "\f1e0"
        }.fa - share - alt - square: before {
            content: "\f1e1"
        }.fa - bomb: before {
            content: "\f1e2"
        }.fa - soccer - ball - o: before, .fa - futbol - o: before {
            content: "\f1e3"
        }.fa - tty: before {
            content: "\f1e4"
        }.fa - binoculars: before {
            content: "\f1e5"
        }.fa - plug: before {
            content: "\f1e6"
        }.fa - slideshare: before {
            content: "\f1e7"
        }.fa - twitch: before {
            content: "\f1e8"
        }.fa - yelp: before {
            content: "\f1e9"
        }.fa - newspaper - o: before {
            content: "\f1ea"
        }.fa - wifi: before {
            content: "\f1eb"
        }.fa - calculator: before {
            content: "\f1ec"
        }.fa - paypal: before {
            content: "\f1ed"
        }.fa - google - wallet: before {
            content: "\f1ee"
        }.fa - cc - visa: before {
            content: "\f1f0"
        }.fa - cc - mastercard: before {
            content: "\f1f1"
        }.fa - cc - discover: before {
            content: "\f1f2"
        }.fa - cc - amex: before {
            content: "\f1f3"
        }.fa - cc - paypal: before {
            content: "\f1f4"
        }.fa - cc - stripe: before {
            content: "\f1f5"
        }.fa - bell - slash: before {
            content: "\f1f6"
        }.fa - bell - slash - o: before {
            content: "\f1f7"
        }.fa - trash: before {
            content: "\f1f8"
        }.fa - copyright: before {
            content: "\f1f9"
        }.fa - at: before {
            content: "\f1fa"
        }.fa - eyedropper: before {
            content: "\f1fb"
        }.fa - paint - brush: before {
            content: "\f1fc"
        }.fa - birthday - cake: before {
            content: "\f1fd"
        }.fa - area - chart: before {
            content: "\f1fe"
        }.fa - pie - chart: before {
            content: "\f200"
        }.fa - line - chart: before {
            content: "\f201"
        }.fa - lastfm: before {
            content: "\f202"
        }.fa - lastfm - square: before {
            content: "\f203"
        }.fa - toggle - off: before {
            content: "\f204"
        }.fa - toggle - on: before {
            content: "\f205"
        }.fa - bicycle: before {
            content: "\f206"
        }.fa - bus: before {
            content: "\f207"
        }.fa - ioxhost: before {
            content: "\f208"
        }.fa - angellist: before {
            content: "\f209"
        }.fa - cc: before {
            content: "\f20a"
        }.fa - shekel: before, .fa - sheqel: before, .fa - ils: before {
            content: "\f20b"
        }.fa - meanpath: before {
            content: "\f20c"
        }.fa - buysellads: before {
            content: "\f20d"
        }.fa - connectdevelop: before {
            content: "\f20e"
        }.fa - dashcube: before {
            content: "\f210"
        }.fa - forumbee: before {
            content: "\f211"
        }.fa - leanpub: before {
            content: "\f212"
        }.fa - sellsy: before {
            content: "\f213"
        }.fa - shirtsinbulk: before {
            content: "\f214"
        }.fa - simplybuilt: before {
            content: "\f215"
        }.fa - skyatlas: before {
            content: "\f216"
        }.fa - cart - plus: before {
            content: "\f217"
        }.fa - cart - arrow - down: before {
            content: "\f218"
        }.fa - diamond: before {
            content: "\f219"
        }.fa - ship: before {
            content: "\f21a"
        }.fa - user - secret: before {
            content: "\f21b"
        }.fa - motorcycle: before {
            content: "\f21c"
        }.fa - street - view: before {
            content: "\f21d"
        }.fa - heartbeat: before {
            content: "\f21e"
        }.fa - venus: before {
            content: "\f221"
        }.fa - mars: before {
            content: "\f222"
        }.fa - mercury: before {
            content: "\f223"
        }.fa - intersex: before, .fa - transgender: before {
            content: "\f224"
        }.fa - transgender - alt: before {
            content: "\f225"
        }.fa - venus - double: before {
            content: "\f226"
        }.fa - mars - double: before {
            content: "\f227"
        }.fa - venus - mars: before {
            content: "\f228"
        }.fa - mars - stroke: before {
            content: "\f229"
        }.fa - mars - stroke - v: before {
            content: "\f22a"
        }.fa - mars - stroke - h: before {
            content: "\f22b"
        }.fa - neuter: before {
            content: "\f22c"
        }.fa - genderless: before {
            content: "\f22d"
        }.fa - facebook - official: before {
            content: "\f230"
        }.fa - pinterest - p: before {
            content: "\f231"
        }.fa - whatsapp: before {
            content: "\f232"
        }.fa - server: before {
            content: "\f233"
        }.fa - user - plus: before {
            content: "\f234"
        }.fa - user - times: before {
            content: "\f235"
        }.fa - hotel: before, .fa - bed: before {
            content: "\f236"
        }.fa - viacoin: before {
            content: "\f237"
        }.fa - train: before {
            content: "\f238"
        }.fa - subway: before {
            content: "\f239"
        }.fa - medium: before {
            content: "\f23a"
        }.fa - yc: before, .fa - y - combinator: before {
            content: "\f23b"
        }.fa - optin - monster: before {
            content: "\f23c"
        }.fa - opencart: before {
            content: "\f23d"
        }.fa - expeditedssl: before {
            content: "\f23e"
        }.fa - battery - 4: before, .fa - battery: before, .fa - battery - full: before {
            content: "\f240"
        }.fa - battery - 3: before, .fa - battery - three - quarters: before {
            content: "\f241"
        }.fa - battery - 2: before, .fa - battery - half: before {
            content: "\f242"
        }.fa - battery - 1: before, .fa - battery - quarter: before {
            content: "\f243"
        }.fa - battery - 0: before, .fa - battery - empty: before {
            content: "\f244"
        }.fa - mouse - pointer: before {
            content: "\f245"
        }.fa - i - cursor: before {
            content: "\f246"
        }.fa - object - group: before {
            content: "\f247"
        }.fa - object - ungroup: before {
            content: "\f248"
        }.fa - sticky - note: before {
            content: "\f249"
        }.fa - sticky - note - o: before {
            content: "\f24a"
        }.fa - cc - jcb: before {
            content: "\f24b"
        }.fa - cc - diners - club: before {
            content: "\f24c"
        }.fa - clone: before {
            content: "\f24d"
        }.fa - balance - scale: before {
            content: "\f24e"
        }.fa - hourglass - o: before {
            content: "\f250"
        }.fa - hourglass - 1: before, .fa - hourglass - start: before {
            content: "\f251"
        }.fa - hourglass - 2: before, .fa - hourglass - half: before {
            content: "\f252"
        }.fa - hourglass - 3: before, .fa - hourglass - end: before {
            content: "\f253"
        }.fa - hourglass: before {
            content: "\f254"
        }.fa - hand - grab - o: before, .fa - hand - rock - o: before {
            content: "\f255"
        }.fa - hand - stop - o: before, .fa - hand - paper - o: before {
            content: "\f256"
        }.fa - hand - scissors - o: before {
            content: "\f257"
        }.fa - hand - lizard - o: before {
            content: "\f258"
        }.fa - hand - spock - o: before {
            content: "\f259"
        }.fa - hand - pointer - o: before {
            content: "\f25a"
        }.fa - hand - peace - o: before {
            content: "\f25b"
        }.fa - trademark: before {
            content: "\f25c"
        }.fa - registered: before {
            content: "\f25d"
        }.fa - creative - commons: before {
            content: "\f25e"
        }.fa - gg: before {
            content: "\f260"
        }.fa - gg - circle: before {
            content: "\f261"
        }.fa - tripadvisor: before {
            content: "\f262"
        }.fa - odnoklassniki: before {
            content: "\f263"
        }.fa - odnoklassniki - square: before {
            content: "\f264"
        }.fa - get - pocket: before {
            content: "\f265"
        }.fa - wikipedia - w: before {
            content: "\f266"
        }.fa - safari: before {
            content: "\f267"
        }.fa - chrome: before {
            content: "\f268"
        }.fa - firefox: before {
            content: "\f269"
        }.fa - opera: before {
            content: "\f26a"
        }.fa - internet - explorer: before {
            content: "\f26b"
        }.fa - tv: before, .fa - television: before {
            content: "\f26c"
        }.fa - contao: before {
            content: "\f26d"
        }.fa - 500 px: before {
            content: "\f26e"
        }.fa - amazon: before {
            content: "\f270"
        }.fa - calendar - plus - o: before {
            content: "\f271"
        }.fa - calendar - minus - o: before {
            content: "\f272"
        }.fa - calendar - times - o: before {
            content: "\f273"
        }.fa - calendar - check - o: before {
            content: "\f274"
        }.fa - industry: before {
            content: "\f275"
        }.fa - map - pin: before {
            content: "\f276"
        }.fa - map - signs: before {
            content: "\f277"
        }.fa - map - o: before {
            content: "\f278"
        }.fa - map: before {
            content: "\f279"
        }.fa - commenting: before {
            content: "\f27a"
        }.fa - commenting - o: before {
            content: "\f27b"
        }.fa - houzz: before {
            content: "\f27c"
        }.fa - vimeo: before {
            content: "\f27d"
        }.fa - black - tie: before {
            content: "\f27e"
        }.fa - fonticons: before {
            content: "\f280"
        }.fa - reddit - alien: before {
            content: "\f281"
        }.fa - edge: before {
            content: "\f282"
        }.fa - credit - card - alt: before {
            content: "\f283"
        }.fa - codiepie: before {
            content: "\f284"
        }.fa - modx: before {
            content: "\f285"
        }.fa - fort - awesome: before {
            content: "\f286"
        }.fa - usb: before {
            content: "\f287"
        }.fa - product - hunt: before {
            content: "\f288"
        }.fa - mixcloud: before {
            content: "\f289"
        }.fa - scribd: before {
            content: "\f28a"
        }.fa - pause - circle: before {
            content: "\f28b"
        }.fa - pause - circle - o: before {
            content: "\f28c"
        }.fa - stop - circle: before {
            content: "\f28d"
        }.fa - stop - circle - o: before {
            content: "\f28e"
        }.fa - shopping - bag: before {
            content: "\f290"
        }.fa - shopping - basket: before {
            content: "\f291"
        }.fa - hashtag: before {
            content: "\f292"
        }.fa - bluetooth: before {
            content: "\f293"
        }.fa - bluetooth - b: before {
            content: "\f294"
        }.fa - percent: before {
            content: "\f295"
        }.fa - gitlab: before {
            content: "\f296"
        }.fa - wpbeginner: before {
            content: "\f297"
        }.fa - wpforms: before {
            content: "\f298"
        }.fa - envira: before {
            content: "\f299"
        }.fa - universal - access: before {
            content: "\f29a"
        }.fa - wheelchair - alt: before {
            content: "\f29b"
        }.fa - question - circle - o: before {
            content: "\f29c"
        }.fa - blind: before {
            content: "\f29d"
        }.fa - audio - description: before {
            content: "\f29e"
        }.fa - volume - control - phone: before {
            content: "\f2a0"
        }.fa - braille: before {
            content: "\f2a1"
        }.fa - assistive - listening - systems: before {
            content: "\f2a2"
        }.fa - asl - interpreting: before, .fa - american - sign - language - interpreting: before {
            content: "\f2a3"
        }.fa - deafness: before, .fa - hard - of -hearing: before, .fa - deaf: before {
            content: "\f2a4"
        }.fa - glide: before {
            content: "\f2a5"
        }.fa - glide - g: before {
            content: "\f2a6"
        }.fa - signing: before, .fa - sign - language: before {
            content: "\f2a7"
        }.fa - low - vision: before {
            content: "\f2a8"
        }.fa - viadeo: before {
            content: "\f2a9"
        }.fa - viadeo - square: before {
            content: "\f2aa"
        }.fa - snapchat: before {
            content: "\f2ab"
        }.fa - snapchat - ghost: before {
            content: "\f2ac"
        }.fa - snapchat - square: before {
            content: "\f2ad"
        }.fa - pied - piper: before {
            content: "\f2ae"
        }.fa - first - order: before {
            content: "\f2b0"
        }.fa - yoast: before {
            content: "\f2b1"
        }.fa - themeisle: before {
            content: "\f2b2"
        }.fa - google - plus - circle: before, .fa - google - plus - official: before {
            content: "\f2b3"
        }.fa - fa: before, .fa - font - awesome: before {
            content: "\f2b4"
        }.fa - handshake - o: before {
            content: "\f2b5"
        }.fa - envelope - open: before {
            content: "\f2b6"
        }.fa - envelope - open - o: before {
            content: "\f2b7"
        }.fa - linode: before {
            content: "\f2b8"
        }.fa - address - book: before {
            content: "\f2b9"
        }.fa - address - book - o: before {
            content: "\f2ba"
        }.fa - vcard: before, .fa - address - card: before {
            content: "\f2bb"
        }.fa - vcard - o: before, .fa - address - card - o: before {
            content: "\f2bc"
        }.fa - user - circle: before {
            content: "\f2bd"
        }.fa - user - circle - o: before {
            content: "\f2be"
        }.fa - user - o: before {
            content: "\f2c0"
        }.fa - id - badge: before {
            content: "\f2c1"
        }.fa - drivers - license: before, .fa - id - card: before {
            content: "\f2c2"
        }.fa - drivers - license - o: before, .fa - id - card - o: before {
            content: "\f2c3"
        }.fa - quora: before {
            content: "\f2c4"
        }.fa - free - code - camp: before {
            content: "\f2c5"
        }.fa - telegram: before {
            content: "\f2c6"
        }.fa - thermometer - 4: before, .fa - thermometer: before, .fa - thermometer - full: before {
            content: "\f2c7"
        }.fa - thermometer - 3: before, .fa - thermometer - three - quarters: before {
            content: "\f2c8"
        }.fa - thermometer - 2: before, .fa - thermometer - half: before {
            content: "\f2c9"
        }.fa - thermometer - 1: before, .fa - thermometer - quarter: before {
            content: "\f2ca"
        }.fa - thermometer - 0: before, .fa - thermometer - empty: before {
            content: "\f2cb"
        }.fa - shower: before {
            content: "\f2cc"
        }.fa - bathtub: before, .fa - s15: before, .fa - bath: before {
            content: "\f2cd"
        }.fa - podcast: before {
            content: "\f2ce"
        }.fa - window - maximize: before {
            content: "\f2d0"
        }.fa - window - minimize: before {
            content: "\f2d1"
        }.fa - window - restore: before {
            content: "\f2d2"
        }.fa - times - rectangle: before, .fa - window - close: before {
            content: "\f2d3"
        }.fa - times - rectangle - o: before, .fa - window - close - o: before {
            content: "\f2d4"
        }.fa - bandcamp: before {
            content: "\f2d5"
        }.fa - grav: before {
            content: "\f2d6"
        }.fa - etsy: before {
            content: "\f2d7"
        }.fa - imdb: before {
            content: "\f2d8"
        }.fa - ravelry: before {
            content: "\f2d9"
        }.fa - eercast: before {
            content: "\f2da"
        }.fa - microchip: before {
            content: "\f2db"
        }.fa - snowflake - o: before {
            content: "\f2dc"
        }.fa - superpowers: before {
            content: "\f2dd"
        }.fa - wpexplorer: before {
            content: "\f2de"
        }.fa - meetup: before {
            content: "\f2e0"
        }.sr - only {
            position: absolute;width: 1 px;height: 1 px;padding: 0;margin: -1 px;overflow: hidden;clip: rect(0, 0, 0, 0);border: 0
        }.sr - only - focusable: active, .sr - only - focusable: focus {
            position: static;width: auto;height: auto;margin: 0;overflow: visible;clip: auto
        }

</script>
<style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
    .datepicker td,
    .datepicker th {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 0.85rem;
    }

    .datepicker {
        margin-bottom: 3rem;
    }

    /*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
    body {
        min-height: 100vh;
        background-color: #fafafa;
    }

    .input-group {
        border-radius: 30rem;
    }

    input.form-control {
        border-radius: 30rem 0 0 30rem;
        border: none;
    }

    input.form-control:focus {
        box-shadow: none;
    }

    input.form-control::placeholder {
        font-style: italic;
    }

    .input-group-text {
        border-radius: 0 30rem 30rem 0;
        border: none;
    }

    .datepicker-dropdown {
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

</style>



<div class="d-flex flex-column page-size p-2">
    <h1>Add The Match Report</h1>
    <div clas="mssg"></div>
    <form class="d-flex flex-column create-form p-3" action="/football/sunderland/reports/{{$report->id }}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('Put')
        <label for="title">Fixture Name</label>
        <input class="p-1 m-1" name="title" id="title" value="{{$report->title}}">

        <label for="date">Fixture Date</label>
        <div class="datepicker date input-group p-1">
            <input class="p-1 m-1" id="date" name="date" value="{{$report->date}}">
            <div class="input-group-append"><span class="input-group-text px-4"><i class="fa fa-clock-o"></i></span></div>
        </div>

        <label for="result">Result</label>
        <input class="p-1 m-1" name="result" id="result" value="{{$report->result}}">

        <label for="home">Home(Yes / No)</label>
        <input class="p-1 m-1" name="home" id="home" value="{{$report->home}}">

        <label for="home_goals">Home Goals</label>
        <input class="p-1 m-1" name="home_goals" id="home_goals" value="{{$report->home_goals}}">

        <label for="away_goals">Away Goals</label>
        <input class="p-1 m-1" name="away_goals" id="away_goals" value="{{$report->away_goals}}">

        <label for="img">Main Image</label>
        <input class="p-1 m-1" type="file" id="img" name="img">
        <img src="/img/reports/{{$report->img}}" alt="report img" class="thumb">

        <label for="paragraph_1">First Paragraph (required)</label><br>
        <textarea name="paragraph_1" id="paragraph_1" cols="30" rows="10" >
            {{$report->paragraph_1}}
        </textarea>
        <label for="paragraph_2">Second Paragraph (optional)</label><br>
        <textarea name="paragraph_2" id="paragraph_2" cols="30" rows="10">
            {{$report->paragraph_2}}
        </textarea>

        <label for="img_2">Additional Image(optional)</label>
        <input class="p-1 m-1" type="file" id="img_2" name="img_2">
        <img src="/img/reports/{{$report->img_2}}" alt="report img" class="thumb">
        
        <label for="paragraph_3">Third Paragraph (optional)</label><br>
        <textarea name="paragraph_3" id="paragraph_3" cols="30" rows="10">
            {{$report->paragraph_3}}
        </textarea>
        
        <label for="paragraph_4">Fourth Paragraph (optional)</label><br>
        <textarea name="paragraph_4" id="paragraph_4" cols="30" rows="10">
            {{$report->paragraph_4}}
        </textarea>
        
        <label for="img_3">Additional Image (optional)</label>
        <input class="p-1 m-1" type="file" id="img_3" name="img_3">
        <img src="/img/reports/{{$report->img_3}}" alt="report img" class="thumb">

        <label for="paragraph_5">Fifth Paragraph (optional)</label><br>
        <textarea name="paragraph_5" id="paragraph_5" cols="30" rows="10">
            {{$report->paragraph_5}}
        </textarea>



        <input class="btn btn-info px-3 mx-auto my-2" type="submit" value="Update Match Report">
    </form>
</div>
@endsection


