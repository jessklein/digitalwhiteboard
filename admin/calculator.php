<div id="calc">
                <h2>Split Calculator</h2>
                <form id="splitcalc" oninput="updateOutput()">
                <label>Active Staff Count:</label> <input type="number" name="staffcount" value="0" onchange="updateOutput()" />
                <table>
                    <tr>
                        <th></th>
                        <th>DC1</th>
                        <th>DC2</th>
                        <th>FF</th>
                        <th>MID</th>
                        <th>eFlow Total</th>
                        <th>eFlow %</th>
                        <th>Assign Staff</th>
                    </tr>
                    <tr>
                        <th>CHI</th>
                        <td><input type="number" name="chidc1" value="0" onchange="updateOutput()" /></td>
                        <td><input type="number" name="chidc2" value="0" onchange="updateOutput()" /></td>
                        <td><input type="number" name="chiff" value="0" onchange="updateOutput()" /></td>
                        <td><input type="number" name="chimid" value="0" onchange="updateOutput()" /></td>
                        <td><output type="number" name="chitotal" value="0" /></td>
                        <td><output type="number" name="chipercent" value ="0" /></td>
                        <td><output type="number" name="chistaff" value="0" /></td>
                    </tr>
                    <tr>
                        <th>DAL</th>
                        <td><input type="number" name="daldc1" value="0" onchange="updateOutput()" /></td>
                        <td><input type="number" name="daldc2" value="0" onchange="updateOutput()" /></td>
                        <td><input type="number" name="dalff" value="0" onchange="updateOutput()" /></td>
                        <td><input type="number" name="dalmid" value="0" onchange="updateOutput()" /></td>
                        <td><output type="number" name="daltotal" value="0" /></td>
                        <td><output type="number" name="dalpercent" value ="0" /></td>
                        <td><output type="number" name="dalstaff" value="0" /></td>
                    </tr>
                    <tr>
                        <th>PHX</th>
                        <td><input type="number" name="phxdc1" value="0" onchange="updateOutput()" /></td>
                        <td><input type="number" name="phxdc2" value="0" onchange="updateOutput()" /></td>
                        <td><input type="number" name="phxff" value="0" onchange="updateOutput()" /></td>
                        <td><input type="number" name="phxmid" value="0" onchange="updateOutput()" /></td>
                        <td><output type="number" name="phxtotal" value="0" /></td>
                        <td><output type="number" name="phxpercent" value ="0" /></td>
                        <td><output type="number" name="phxstaff" value="0" /></td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td><output type="number" name="dc1total" value="0" /></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><output type="number" name="eflowtotal" value="0" /></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                </form>
            </div>