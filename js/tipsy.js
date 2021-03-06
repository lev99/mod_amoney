jQuery(function(t) {
  t("#example-1").tipsy(), t("#auto-gravity").tipsy({
    gravity: t.fn.tipsy.autoNS
  }), t("#example-fade").tipsy({
    fade: !0
  }), t("#example-custom-attribute").tipsy({
    title: "id"
  }), t("#example-callback").tipsy({
    title: function() {
      return this.getAttribute("data-original-title").toUpperCase()
    }
  }), t("#example-fallback").tipsy({
    fallback: "Where's my tooltip yo'?"
  }), t("#example-html").tipsy({
    html: !0
  }), t("#north").tipsy({
    gravity: "n"
  }), t("#south").tipsy({
    gravity: "s"
  }), t("#east").tipsy({
    gravity: "e"
  }), t("#west").tipsy({
    gravity: "w"
  }), t("#north-west").tipsy({
    gravity: "nw"
  }), t("#north-east").tipsy({
    gravity: "ne"
  }), t("#south-west").tipsy({
    gravity: "sw"
  }), t("#south-east").tipsy({
    gravity: "se"
  }), t(".north").tipsy({
    gravity: "n"
  }), t(".south").tipsy({
    gravity: "s"
  }), t(".east").tipsy({
    gravity: "e"
  }), t(".west").tipsy({
    gravity: "w"
  }), t(".north-west").tipsy({
    gravity: "nw"
  }), t(".north-east").tipsy({
    gravity: "ne"
  }), t(".south-west").tipsy({
    gravity: "sw"
  }), t(".south-east").tipsy({
    gravity: "se"
  }), t(".focus-example [title]").tipsy({
    trigger: "focus",
    gravity: "w"
  }), t(".focus-example1 [title]").tipsy({
    trigger: "focus",
    gravity: "e"
  }), t(".focus-example2 [title]").tipsy({
    trigger: "focus",
    gravity: "n"
  }), t(".focus-example3 [title]").tipsy({
    trigger: "focus",
    gravity: "s"
  }), t(".focus-example4 [title]").tipsy({
    trigger: "focus",
    gravity: "w"
  })
});
