<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyblock Leaderboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
@include('Header_Footer.header')

    <h1>Skyblock Leaderboard</h1>
    <table>
        <thead>
            <tr>
                <th>Place</th>
                <th>Team Name</th>
                <th>Skyblock Value</th>
                <th>member</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>test</td>
                <td>1500</td>
                <td>4</td>
            </tr>
            <tr>
                <td>2</td>
                <td>test</td>
                <td>1200</td>
                <td>8</td>
            </tr>
        </tbody>
    </table>
</body>
</html>