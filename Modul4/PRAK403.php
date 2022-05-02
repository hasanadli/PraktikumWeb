<html>
    <head>
        <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 5px;
                text-align: left;
            }

            th {
                background-color: #ccc;
            }
        </style>
        <title>Soal 3</title>
    </head>
    <body>
    <?php
        $data =
            [
                [
                    "No" => 1, 
                    "Nama" => "Ridho", 
                    "Mata Kuliah Diambil" =>[
                        "Pemrograman I",
                        "Praktikum Pemrograman I",
                        "Pengantar Lingkungan Lahan Basah",
                        "Arsitektur Komputer"
                    ], 
                    "SKS" => [2, 1, 2, 3]
                ],
                [
                    "No" => 2, 
                    "Nama" => "Ratna", 
                    "Mata Kuliah Diambil" =>[
                        "Basis Data I",
                        "Praktikum Basis Data I",
                        "Kalkulus"
                    ], 
                    "SKS" => [2, 1, 3]
                ],
                [
                    "No" => 3, 
                    "Nama" => "Tono", 
                    "Mata Kuliah Diambil" =>[
                        "Rekayasa Perangkat Lunak",
                        "Analisis dan Perancangan Sistem",
                        "Komputasi Awan",
                        "Kecerdasan Bisnis"
                    ], 
                    "SKS" => [3, 3, 3, 3]
                ]
            ];

        for ($i = 0; $i < count($data); $i++) {
            $jmlhSks = 0;
            foreach ($data[$i]["SKS"] as $key => $value) {
                $jmlhSks += $value;
            }
            $data[$i]["Total SKS"] = $jmlhSks;
            if ($jmlhSks > 7) {
                $data[$i]["Keterangan"] = "Tidak Revisi";
            } else {
                $data[$i]["Keterangan"] = "Revisi KRS";
            }
        }

        echo "<table>";
        echo "<tr>";
        foreach ($data[0] as $key => $value) { 
            echo "<th>" . $key . "</th>";
        }
        echo "</tr>";

        foreach ($data as $key => $datanya) {
            echo "<tr>";
            foreach ($datanya as $k => $v) {
                if (is_array($v)) {
                    echo "<td>" . $v[0] . "</td>";
                } else {
                    if ($v == "Tidak Revisi")
                        echo "<td style='background-color: #00ff00;'>" . $v . "</td>";
                    else if ($v == "Revisi KRS")
                        echo "<td style='background-color: #ff0000;'>" . $v . "</td>";
                    else
                        echo "<td>" . $v . "</td>";
                }
            }

            echo "</tr>";
 
            for ($j = 1; $j < count($datanya["Mata Kuliah Diambil"]); $j++) {

                echo "<tr>";
                foreach ($datanya as $val) {
                    if (is_array($val)) {
                        echo "<td> $val[$j] </td>";
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
        }
        echo "</table>";
    ?>
    </body>
</html>