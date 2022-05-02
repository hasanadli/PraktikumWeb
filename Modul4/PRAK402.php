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
        <title>Soal 2</title>
    </head>
    <body>
        <?php
        $data = [
            [
                "Nama" => "Andi",
                "NIM" => "2101001",
                "Nilai UTS" => "87",
                "Nilai UAS" => "65"
            ],
            [
                "Nama" => "Budi",
                "NIM" => "2101002",
                "Nilai UTS" => "76",
                "Nilai UAS" => "79"
            ],
            [
                "Nama" => "Tono",
                "NIM" => "2101003",
                "Nilai UTS" => "50",
                "Nilai UAS" => "41"
            ],
            [
                "Nama" => "Jessica",
                "NIM" => "2101004",
                "Nilai UTS" => "60",
                "Nilai UAS" => "75"
            ]
        ];

        for ($i = 0; $i < count($data); $i++) {
            $konversiNilai = (40 / 100 * $data[$i]["Nilai UTS"]) + (60 / 100 * $data[$i]["Nilai UAS"]);
            $data[$i]["Nilai Akhir"] = $konversiNilai;
                if ($konversiNilai >= 80) {
                    $data[$i]["Huruf"] = "A";
                } elseif ($konversiNilai >= 70) {
                    $data[$i]["Huruf"] = "B";
                } elseif ($konversiNilai >= 60) {
                    $data[$i]["Huruf"] = "C";
                } elseif ($konversiNilai >= 50) {
                    $data[$i]["Huruf"] = "D";
                } else {
                    $data[$i]["Huruf"] = "E";
                }
            }

            echo "<table>";
            echo "<tr>";
            foreach ($data[0] as $key => $value) {
                echo "<th>" . $key . "</th>";
            }
            echo "</tr>";
            foreach ($data as $mahasiswa) {
                echo "<tr>";
                foreach ($mahasiswa as $key => $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            ?>        
    </body>
</html>