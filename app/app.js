$("li").click(function() {
    $(this).toggleClass("selected");
});
$("ul").sortable({
    connectWith: "ul",
    start: function(e, info) {
        info.item.siblings(".selected").appendTo(info.item);
    },
    stop: function(e, info) {
        info.item.after(info.item.find("li"))
    }
});