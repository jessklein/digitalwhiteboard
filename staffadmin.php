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
        <div class="container">
            <h1>Current Staff</h1>
            <?php include('staff.php');?>
        </div>
        <div class="container">
            <h1>Add Employee</h1>
            <label>First Name:</label><br />
            <label>Last Name:</label><br />
            <label>SID:</label><br />
            <label>Supervisor:</label><br />
            <label>Shift:</label><br />
            <label>Break:</label><br />
            <label>Trained Functions:</label><br />
            <label>Temp/Perm:</label>
        </div>
    </div>
</body>
</html>