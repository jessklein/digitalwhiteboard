<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Case Whiteboard</title>
    <link href='whiteboard.css' rel='stylesheet' type='text/css' />
    <link href='dist/dragula.css' rel='stylesheet' type='text/css' />
    <script>
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
    <div class="wrapper">
        <h1>Staff Distribution</h1>
        <div id="col1">
            <h1>Site 1</h1>
            <div class="container">
                <h2>Function 1</h2>
                <?php
                    for ($x = 0; $x <= 19; $x++) {
                        $target = 0;
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                        $target++;
                    }
                ?>
            </div>
            <div class="container">
                <h2>Function 2</h2>
                <?php
                    for ($x = 0; $x <= 19; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
            <div class="container">
                <h2>Function 3</h2>
                <?php
                    for ($x = 0; $x <= 5; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
            <div class="container">
                <h2>Function 4</h2>
                <?php
                    for ($x = 0; $x <= 5; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
            <div class="container">
                <h2>Function 5</h2>
                <?php
                    for ($x = 0; $x <= 5; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
        </div>
        <div id="col2">
            <h1>Site 2</h1>
            <div class="container">
                <h2>Function 1</h2>
                <?php
                    for ($x = 0; $x <= 19; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
            <div class="container">
                <h2>Function 2</h2>
                <?php
                    for ($x = 0; $x <= 19; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
            <div class="container">
                <h2>Function 3</h2>
                <?php
                    for ($x = 0; $x <= 5; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
            <div class="container">
                <h2>Function 4</h2>
                <?php
                    for ($x = 0; $x <= 5; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
            <div class="container">
                <h2>Function 5</h2>
                <?php
                    for ($x = 0; $x <= 5; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
        </div>
        <div id="col3">
            <h1>Site 3</h1>
            <div class="container">
                <h2>Function 1</h2>
                <?php
                    for ($x = 0; $x <= 19; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
             <div class="container">
                <h2>Function 2</h2>
                <?php
                    for ($x = 0; $x <= 19; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
             <div class="container">
                <h2>Function 3</h2>
                <?php
                    for ($x = 0; $x <= 5; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
             <div class="container">
                <h2>Function 4</h2>
                <?php
                    for ($x = 0; $x <= 5; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
            <div class="container">
                <h2>Function 5</h2>
                <?php
                    for ($x = 0; $x <= 5; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
        </div>
        <div id="col4">
            <h1>Announcements</h1>
            <div class="container">
                <textarea class="announce"></textarea>
            </div>
            <h1>Staff Out</h1>
            <div class="container">
                <?php
                    for ($x = 0; $x <= 29; $x++) {
                        echo '<div class="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
                    }
                ?>
            </div>
        </div>
        <div id="col5">
            <div class="container">
                <p><span class="break1">&nbsp;</span> = Break 1<br />
                <span class="break2">&nbsp;</span> = Break 2<br />
                <span class="break3">&nbsp;</span> = Break 3<br />
                &rarr; = In Training<br />
                &Dagger; = Function 1 Only<br />
                &spades; = Function 2 Capable<br />
                &clubs; = Function 3 Capable<br />
                &hearts; = Function 4 Capable<br />
                &diams; = Function 5 Capable</p>
            </div>
            <h1>Staff</h1>
            <?php include('staff.php');?>
        </div>
    </div>
</body>
</html>