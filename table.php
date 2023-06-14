<br>
    <div class="row">
    <div class="col-3">
        <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <?php require("./atmdir.php"); ?>
            <div class="col-4"><label class="sr-only col-form-label-sm" for="query">Lot No</label></div>
            <div class="col-8 mb-2"><input class = "form-control form-control-sm" type="text" name="fname" id="query" placeholder="Password"></div>
            <div class="col"><button type="submit" class="btn btn-dark mb-2 btn-sm">Submit</button></div>          
            </div>
        </form>
</div>
</div>  

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lotNo = $_POST['fname'];
    $PartNo = $_POST['atmdir'];
    if (empty($lotNo)) {
        $xlFile = realpath("\\\\192.168.1.7\Nasserver_PE\Adrian\TTV\XLS\BLNGW3535SAF01Y\\0322DHV2ATM#1.xls");
    } else {
        $xlFile = realpath("\\\\192.168.1.7\Nasserver_PE\Adrian\TTV\XLS\\".$PartNo."\\".$lotNo."ATM#1.xls");
    }
}
 
$xlDir = dirname($xlFile); 

$conString = odbc_connect(   
    "Driver={Microsoft Excel Driver (*.xls, *.xlsx, *.xlsm, *.xlsb)}
    ;DriverId=790;Dbq=$xlFile;DefaultDir=$xlDir" , '', ''
);

$sqlQuery = "SELECT Distinct tblb.[Tile ID],A1,A2,A3,A4 
            FROM (SELECT [TILE ID],A1,A2,A3,A4,([DATE] & ' ' & [TIME]) as minmax 
                FROM [1$]) tbla 
            INNER JOIN (
                SELECT [TILE ID],
                MAX([DATE] & ' ' & [TIME]) as mini 
                From [1$]
                Group by [Tile ID]) tblb
            ON tbla.[TILE ID] = tblb.[TILE ID] AND tbla.minmax = tblb.mini
            ORDER BY tblb.[TILE ID]";

$results = odbc_exec($conString, $sqlQuery);
$xValues = "";
$A1 = "";
$A2 = "";
$A3 = "";
$A4 = "";
$A4 = "";

while(odbc_fetch_row($results)){ 
    $out1 = odbc_result($results, 1); 
    $out2 = odbc_result($results, 2); 
    $out3 = odbc_result($results, 3); 
    $out4 = odbc_result($results, 4);  
    $out5 = odbc_result($results, 5); 

        $xValues = $xValues.'"'.$out1.'",';
        $A1 = $A1.$out2.',';
        $A2 = $A2.$out3.',';
        $A3 = $A3.$out4.',';
        $A4 = $A4.$out5.',';
}
odbc_free_result($results);

odbc_close($conString);

// ChartJS
echo(
    '<canvas id="myChart" style="width:100%;"></canvas>
    <script>
        
        var xValues = [];
        var y1 = [];
        var y2 = [];
        var y3 = [];
        var y4 = [];
        var chartTitle = "Backend"

        xValues.push('.$xValues.')
        y1.push('.$A1.')
        y2.push('.$A2.')
        y3.push('.$A3.')
        y4.push('.$A4.')

    new Chart("myChart", {
                type: "line",
                data: {
        labels: xValues,
        datasets: [{
            fill: false,
            borderColor: `rgb(255, 0, 0)`,
            tension: 0.1,
            data: y1,
            label: "A1"
            },
            {
            fill: false,
            borderColor: `rgb(0, 255, 0)`,
            tension: 0.1,
            data: y2,
            label: "A2"
            },
            {
            fill: false,
            borderColor: `rgb(0, 0, 255)`,
            tension: 0.1,
            data: y3,
            label: "A3"
            },
            {
            fill: false,
            borderColor: `rgb(255, 255, 0)`,
            tension: 0.1,
            data: y4,
            label: "A4"
            },

        ]
    }
    });
    </script>'
);
?>