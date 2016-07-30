<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Case Whiteboard - Dashboard</title>
    <!-- load page styling -->
    <link href='../css/main.css' rel='stylesheet' type='text/css' />
        
    <!-- load angular and bootstrap -->
    <script src="../js/angular.min.js"></script>
    <script src="../js/angular-dragdrop.min.js"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <!-- load jquery -->
    <script src="../js/jquery-3.1.0.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/ui.multisortable.js"></script>
    <script>
        //* Runs the drag and drop functionality
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
        
        //* Runs the tabbed roster functionality
        function openTab(evt, shiftName) {
            // Declare all variables
            var i, tabcontent, tablinks;
            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            // Show the current tab, and add an "active" class to the link that opened the tab
            document.getElementById(shiftName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        
        //* Runs the split calculator
        function updateOutput() {
            // Get the calculator form
            var form = document.getElementById("splitcalc");
            // Initialize output variables
            var chitotal = form.elements["chitotal"];
            var chistaff = form.elements["chistaff"];
            var chipercent = form.elements["chipercent"];
            var daltotal = form.elements["daltotal"];
            var dalstaff = form.elements["dalstaff"];
            var dalpercent = form.elements["dalpercent"];
            var phxtotal = form.elements["phxtotal"];
            var phxstaff = form.elements["phxstaff"];
            var phxpercent = form.elements["phxpercent"];
            var eflowtotal = form.elements["eflowtotal"];
            // Initialize and retrieve input variables
            var staffcount = parseInt(form.elements["staffcount"].value);
            var chidc1 = parseInt(form.elements["chidc1"].value);
            var chidc2 = parseInt(form.elements["chidc2"].value);
            var chiff = parseInt(form.elements["chiff"].value);
            var chimid = parseInt(form.elements["chimid"].value);
            var daldc1 = parseInt(form.elements["daldc1"].value);
            var daldc2 = parseInt(form.elements["daldc2"].value);
            var dalff = parseInt(form.elements["dalff"].value);
            var dalmid = parseInt(form.elements["dalmid"].value);
            var phxdc1 = parseInt(form.elements["phxdc1"].value);
            var phxdc2 = parseInt(form.elements["phxdc2"].value);
            var phxff = parseInt(form.elements["phxff"].value);
            var phxmid = parseInt(form.elements["phxmid"].value);
            // Perform calculations
            chitotal.value = chidc1 + chidc2 + chiff + chimid;
            daltotal.value = daldc1 + daldc2 + dalff + dalmid;
            phxtotal.value = phxdc1 + phxdc2 + phxff + phxmid;
            
            eflowtotal.value = parseInt(chitotal.value) + parseInt(daltotal.value) + parseInt(phxtotal.value);
            
            chipercent.value = Math.round(parseInt(chitotal.value) / parseInt(eflowtotal.value) * 100);
            dalpercent.value = Math.round(parseInt(daltotal.value) / parseInt(eflowtotal.value) * 100);
            phxpercent.value = Math.round(parseInt(phxtotal.value) / parseInt(eflowtotal.value) * 100);
            
            chistaff.value = Math.round(parseInt(staffcount.value) / chipercent.value * 100);
            dalstaff.value = Math.round(parseInt(staffcount.value) / parseInt(dalpercent.value) * 100);
            phxstaff.value = Math.round(parseInt(staffcount.value) / parseInt(phxpercent.value) * 100);
        }
    </script>