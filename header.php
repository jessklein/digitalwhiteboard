<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Case Whiteboard</title>
    <!-- load page styling -->
    <link href='css/main.css' rel='stylesheet' type='text/css' />
    
    <!-- load angular and bootstrap -->
    <script src="js/angular.min.js"></script>
    <script src="js/angular-dragdrop.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <!-- load jquery -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/ui.multisortable.js"></script>
    <script>
        var positions = JSON.parse(localStorage.positions || "{}");
        $(function () {
            var d = $("[id=draggable]").attr("id", function (i) {
                return "draggable_" + i
            })
            $.each(positions, function (id, pos) {
                $("#" + id).css(pos)
            })
            d.draggable({
                containment: ".target",
                scroll: false,
                stop: function (event, ui) {
                    positions[this.id] = ui.position
                    localStorage.positions = JSON.stringify(positions)
                }
            });
        });
        function allowDrop(ev) {
            ev.preventDefault();
        }
        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }
        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
    
</head>
<body>
    <div id="wrap">
        <header><h1>Digital Whiteboard</h1></header>