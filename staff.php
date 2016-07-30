<?php include('header.php'); ?>
<body>
    <div id="wrap">
        <nav>
            <div id="menu">
                <ul class="nav">
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="staff.html">Staff Roster</a></li>
                </ul>
            </div>
        </nav>
        <header><h1>JPMC VT Digital Whiteboard</h1></header>
        
        <!-- Current Staff Roster -->
        <div id="staff">
            <div id="current">
                <h2>Current Staff</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                    <tr>
                        <td>John A Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane B Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>John C Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane D Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>John E Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane F Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>John G Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane H Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>John I Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane J Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>John K Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane L Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>John M Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane N Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>John O Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane P Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>John Q Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane R Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>John S Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane T Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>John U Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                    <tr>
                        <td>Jane V Doe</td>
                        <td><img src="images/edit.png" /></td>
                        <td><img src="images/delete.png" /></td>
                    </tr>
                </table>
            </div>
            <div id="addstaff">
                <h2>Add Employee</h2>
                <label>First Name:</label> <input type="text" /><br />
                <label>Middle Name: </label> <input type="text" /><br />
                <label>Last Name:</label> <input type="text" /><br />
                <label>SID:</label> <input type="text" /><br />
                <label>Hire Date:</label> <input type="date" /><br />
                <label>Conversion Date:</label> <input type="date" /><br />
                <label>Shift:</label> <input type="radio" />1st <input type="radio" />2nd <input type="radio" />3rd<br />
                <label>Break:</label> <input type="radio" />1st <input type="radio" />2nd <input type="radio" />3rd<br />
                <label>Functions:</label> <input type="checkbox" />DC1 <input type="checkbox" />DC2 <input type="checkbox" />MID/FF <input type="checkbox" />JBAide <input type="checkbox" />WFC<br />
                Schedule<br />
                <p class="schedule">
                    <label>Monday</label><input type="text" /> <input type="text" /><br />
                    <label>Tuesday</label><input type="text" /> <input type="text" /><br />
                    <label>Wednesday</label><input type="text" /> <input type="text" /><br />
                    <label>Thursday</label><input type="text" /> <input type="text" /><br />
                    <label>Friday</label><input type="text" /> <input type="text" /><br />
                    <label>Saturday</label><input type="text" /> <input type="text" /><br />
                    <label>Sunday</label><input type="text" /> <input type="text" /><br />
                </p>
                <input type="submit" value="Add Employee" /><input type="reset" />
            </div>
        </div>
    </div>
</body>