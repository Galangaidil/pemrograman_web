<?php
require 'koneksiDB.php';

$movieArray = array();
$respone = array();

//$query("SELECT * FROM mhs");
$query = "SELECT LuasWilayah, NamaKota FROM kota";

$result = array();

// Prepare query
// stmt = statement

if ($stmt = $conn->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($y, $label);

    while ($stmt->fetch()) {
        $movieArray = array();
        $movieArray['y'] = $y;
        $movieArray['label'] = $label;
        $result[] = $movieArray;
    }
    $stmt->close();
    $respone["success"] = 1;
    $respone["data"] = $result;
} else {
    $respone["success"] = 0;
    $respone["message"] = mysqli_error($conn);
}

//echo json_encode($respone);

?>
<!DOCTYPE HTML>
<html>

<head>
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "dark2",
                title: {
                    text: "Luas Wilayah"
                },
                axisY: {
                    title: "Luas Wilayah (in km)"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0.## km",
                    dataPoints: <?php echo json_encode($result, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>


    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>