<?php include('header.php'); ?>

        <div id="dashboard">
            <p>To Add, Edit or Remove Employees, please see the Staff Roster module (link on the left).<br />
            To manage active assignment widgets displayed on the front end, please see the Manage Widgets module.<br />
            To assign staff members to a particular function, drag their tile from the Staff list on the right to the desired site/function and click the 'Update Board' button. Multiple changes can be made at a time. Changes will be saved and published immediately.</p>
            
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
            <h2>Scheduled Out</h2>
            <div class="assign target" ondrop="drop(event)" ondragover="allowDrop(event)">
                
            </div>
            <h2>Staff</h2>
            <?php include('stafflist.php'); ?>
        <input type="submit" value="Update Board" />
        <footer>Assignments Last Updated: <em>July 7, 2016 @ 9:32 PM</em> by John J Smith<br />
        <em>(Number)</em> users currently viewing the published board. <em>(Number)</em> users currently editing assignments.</footer>
        </div>
    </div>
</body>