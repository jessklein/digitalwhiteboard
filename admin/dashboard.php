<?php include('header.php'); ?>

    
</head>
<body>
    <div id="wrap">
        <?php include('sidebar.php'); ?>
        <header><h1>JPMC VT Digital Whiteboard</h1></header>
        <div id="dashboard">
            <p>To Add, Edit or Remove Employees, please see the Staff Roster module (link on the left).<br />
            To assign staff members to a particular function, drag their tile from the Staff list on the right to the desired site/function and click the 'Submit' button. Multiple changes can be made at a time. Changes will be saved and published immediately.</p>
            
            <?php include('calculator.php'); ?>
            
        <h2>Assignments</h2>
        <!-- first site -->
        <div id="col1">
            <h2>Chicago</h2>
            <div class="function dc1">
                <h3>DC1</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                    
                </div>
            </div>
            <div class="function dc2">
                <h3>DC2</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function midff">
                <h3>Freeform</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function midff">
                <h3>Manual ID</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function jbaide">
                <h3>JBAide</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
        </div>
        
        <!-- second site -->
        <div id="col2">
            <h2>Dallas</h2>
            <div class="function dc1">
                <h3>DC1</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function dc2">
                <h3>DC2</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function midff">
                <h3>Freeform</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function midff">
                <h3>Manual ID</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function jbaide">
                <h3>JBAide</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
        </div>
        
        <!-- third site -->
        <div id="col3">
            <h2>Phoenix</h2>
            <div class="function dc1">
                <h3>DC1</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function dc2">
                <h3>DC2</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function midff">
                <h3>Freeform</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function midff">
                <h3>Manual ID</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
            <div class="function jbaide">
                <h3>JBAide</h3>
                <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
                </div>
            </div>
        </div>
        
        <!-- staff sidebar -->
        <div id="col4">
            <h2>Announcements</h2>
            <textarea class="announce"></textarea>
            <h2>Scheduled Out</h2>
            <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
            </div>
            <h2>Trainging/Skills Academy</h2>
            <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
            </div>
            <h2>Project</h2>
            <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
            </div>
            <h2>Staff</h2>
            <ul class="tab">
                <li><a href="#" class="tablinks" onclick="openTab(event, 'First')">1st Shift</a></li>
                <li><a href="#" class="tablinks" onclick="openTab(event, 'Second')">2nd Shift</a></li>
                <li><a href="#" class="tablinks" onclick="openTab(event, 'Third')">3rd Shift</a></li>
            </ul>
            <div id="First" class="tabcontent active">
                <ul class="tiles">
                    <li class="emp break1 draggable dc1" id="emp01" draggable="true" ondragstart="drag(event)">John A Doe</li>
                    <li class="emp break2 draggable dc2" id="emp02" draggable="true" ondragstart="drag(event)">Jane B Doe</li>
                    <li class="emp break3 draggable midff" id="emp03" draggable="true" ondragstart="drag(event)">John C Doe</li>
                    <li class="emp break1 draggable jbaide" id="emp04" draggable="true" ondragstart="drag(event)">Jane D Doe</li>
                    <li class="emp break2 draggable dc1" id="emp05" draggable="true" ondragstart="drag(event)">John E Doe</li>
                    <li class="emp break1 draggable dc2" id="emp06" draggable="true" ondragstart="drag(event)">Jane F Doe</li>
                    <li class="emp break2 draggable midff" id="emp07" draggable="true" ondragstart="drag(event)">John G Doe</li>
                    <li class="emp break3 draggable jbaide" id="emp08" draggable="true" ondragstart="drag(event)">Jane H Doe</li>
                    <li class="emp break1 draggable dc1" id="emp09" draggable="true" ondragstart="drag(event)">John I Doe</li>
                    <li class="emp break2 draggable dc2" id="emp10" draggable="true" ondragstart="drag(event)">Jane J Doe</li>
                    <li class="emp break1 draggable midff" id="emp11" draggable="true" ondragstart="drag(event)">John K Doe</li>
                    <li class="emp break2 draggable jbaide" id="emp12" draggable="true" ondragstart="drag(event)">Jane L Doe</li>
                    <li class="emp break3 draggable dc1" id="emp13" draggable="true" ondragstart="drag(event)">John M Doe</li>
                    <li class="emp break1 draggable dc2" id="emp14" draggable="true" ondragstart="drag(event)">Jane N Doe</li>
                    <li class="emp break2 draggable midff" id="emp15" draggable="true" ondragstart="drag(event)">John O Doe</li>
                    <li class="emp break1 draggable jbaide" id="emp16" draggable="true" ondragstart="drag(event)">Jane P Doe</li>
                    <li class="emp break2 draggable dc1" id="emp17" draggable="true" ondragstart="drag(event)">John Q Doe</li>
                    <li class="emp break3 draggable dc2" id="emp18" draggable="true" ondragstart="drag(event)">Jane R Doe</li>
                    <li class="emp break1 draggable midff" id="emp19" draggable="true" ondragstart="drag(event)">John S Doe</li>
                    <li class="emp break2 draggable jbaide" id="emp20" draggable="true" ondragstart="drag(event)">Jane T Doe</li>
                    <li class="emp break2 draggable dc1" id="emp21" draggable="true" ondragstart="drag(event)">John U Doe</li>
                    <li class="emp break2 draggable dc2" id="emp22" draggable="true" ondragstart="drag(event)">Jane V Doe</li>
                </ul>
            </div>
            <div id="Second" class="tabcontent">
                <ul class="tiles">
                    <li class="emp break1 draggable dc1" id="emp01" draggable="true" ondragstart="drag(event)">John A Doe</li>
                    <li class="emp break2 draggable dc2" id="emp02" draggable="true" ondragstart="drag(event)">Jane B Doe</li>
                    <li class="emp break3 draggable midff" id="emp03" draggable="true" ondragstart="drag(event)">John C Doe</li>
                    <li class="emp break1 draggable jbaide" id="emp04" draggable="true" ondragstart="drag(event)">Jane D Doe</li>
                    <li class="emp break2 draggable dc1" id="emp05" draggable="true" ondragstart="drag(event)">John E Doe</li>
                    <li class="emp break1 draggable dc2" id="emp06" draggable="true" ondragstart="drag(event)">Jane F Doe</li>
                    <li class="emp break2 draggable midff" id="emp07" draggable="true" ondragstart="drag(event)">John G Doe</li>
                    <li class="emp break3 draggable jbaide" id="emp08" draggable="true" ondragstart="drag(event)">Jane H Doe</li>
                    <li class="emp break1 draggable dc1" id="emp09" draggable="true" ondragstart="drag(event)">John I Doe</li>
                    <li class="emp break2 draggable dc2" id="emp10" draggable="true" ondragstart="drag(event)">Jane J Doe</li>
                    <li class="emp break1 draggable midff" id="emp11" draggable="true" ondragstart="drag(event)">John K Doe</li>
                    <li class="emp break2 draggable jbaide" id="emp12" draggable="true" ondragstart="drag(event)">Jane L Doe</li>
                    <li class="emp break3 draggable dc1" id="emp13" draggable="true" ondragstart="drag(event)">John M Doe</li>
                    <li class="emp break1 draggable dc2" id="emp14" draggable="true" ondragstart="drag(event)">Jane N Doe</li>
                    <li class="emp break2 draggable midff" id="emp15" draggable="true" ondragstart="drag(event)">John O Doe</li>
                    <li class="emp break1 draggable jbaide" id="emp16" draggable="true" ondragstart="drag(event)">Jane P Doe</li>
                    <li class="emp break2 draggable dc1" id="emp17" draggable="true" ondragstart="drag(event)">John Q Doe</li>
                    <li class="emp break3 draggable dc2" id="emp18" draggable="true" ondragstart="drag(event)">Jane R Doe</li>
                    <li class="emp break1 draggable midff" id="emp19" draggable="true" ondragstart="drag(event)">John S Doe</li>
                    <li class="emp break2 draggable jbaide" id="emp20" draggable="true" ondragstart="drag(event)">Jane T Doe</li>
                    <li class="emp break2 draggable dc1" id="emp21" draggable="true" ondragstart="drag(event)">John U Doe</li>
                    <li class="emp break2 draggable dc2" id="emp22" draggable="true" ondragstart="drag(event)">Jane V Doe</li>
                </ul>
            </div>
            <div id="Third" class="tabcontent">
                <ul class="tiles">
                    <li class="emp break1 draggable dc1" id="emp01" draggable="true" ondragstart="drag(event)">John A Doe</li>
                    <li class="emp break2 draggable dc2" id="emp02" draggable="true" ondragstart="drag(event)">Jane B Doe</li>
                    <li class="emp break3 draggable midff" id="emp03" draggable="true" ondragstart="drag(event)">John C Doe</li>
                    <li class="emp break1 draggable jbaide" id="emp04" draggable="true" ondragstart="drag(event)">Jane D Doe</li>
                    <li class="emp break2 draggable dc1" id="emp05" draggable="true" ondragstart="drag(event)">John E Doe</li>
                    <li class="emp break1 draggable dc2" id="emp06" draggable="true" ondragstart="drag(event)">Jane F Doe</li>
                    <li class="emp break2 draggable midff" id="emp07" draggable="true" ondragstart="drag(event)">John G Doe</li>
                    <li class="emp break3 draggable jbaide" id="emp08" draggable="true" ondragstart="drag(event)">Jane H Doe</li>
                    <li class="emp break1 draggable dc1" id="emp09" draggable="true" ondragstart="drag(event)">John I Doe</li>
                    <li class="emp break2 draggable dc2" id="emp10" draggable="true" ondragstart="drag(event)">Jane J Doe</li>
                    <li class="emp break1 draggable midff" id="emp11" draggable="true" ondragstart="drag(event)">John K Doe</li>
                    <li class="emp break2 draggable jbaide" id="emp12" draggable="true" ondragstart="drag(event)">Jane L Doe</li>
                    <li class="emp break3 draggable dc1" id="emp13" draggable="true" ondragstart="drag(event)">John M Doe</li>
                    <li class="emp break1 draggable dc2" id="emp14" draggable="true" ondragstart="drag(event)">Jane N Doe</li>
                    <li class="emp break2 draggable midff" id="emp15" draggable="true" ondragstart="drag(event)">John O Doe</li>
                    <li class="emp break1 draggable jbaide" id="emp16" draggable="true" ondragstart="drag(event)">Jane P Doe</li>
                    <li class="emp break2 draggable dc1" id="emp17" draggable="true" ondragstart="drag(event)">John Q Doe</li>
                    <li class="emp break3 draggable dc2" id="emp18" draggable="true" ondragstart="drag(event)">Jane R Doe</li>
                    <li class="emp break1 draggable midff" id="emp19" draggable="true" ondragstart="drag(event)">John S Doe</li>
                    <li class="emp break2 draggable jbaide" id="emp20" draggable="true" ondragstart="drag(event)">Jane T Doe</li>
                    <li class="emp break2 draggable dc1" id="emp21" draggable="true" ondragstart="drag(event)">John U Doe</li>
                    <li class="emp break2 draggable dc2" id="emp22" draggable="true" ondragstart="drag(event)">Jane V Doe</li>
                </ul>
            </div>
        </div>
        <input type="submit" value="Update Board" />
        <footer>Assignments Last Updated: <em>July 7, 2016 @ 9:32 PM</em> by John J Smith<br />
        <em>(Number)</em> users currently viewing the published board. <em>(Number)</em> users currently editing assignments.</footer>
        </div>
    </div>
</body>