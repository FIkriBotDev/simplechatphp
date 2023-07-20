<?php
include 'ip.php';
?>
<!doctype html>
<html>
<head>
    <title>Simple Live Chat by ~KacungZup</title>
    <meta name="description" content="Made with PHP Lang">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            font-size: 36px;
            text-align: center;
            margin-top: 50px;
        }

        p {
            font-size: 18px;
            text-align: center;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Responsive Styles */
        @media only screen and (max-width: 768px) {
            form {
                width: 80%;
            }

            iframe {
                width: 100%;
                height: 300px; /* Adjust the height as needed for mobile view */
            }
        }

        @media only screen and (min-width: 769px) {
            iframe {
                width: 80%;
                height: 2000px; /* Set the height to a large value for the iframe to be very long */
            }
        }
    </style>
</head>
<body>
<center>
    <h1>Simple Live Chat by ~KacungZup</h1>
    <br /><a href="https://github.com/FikriBotDev/simplechatphp">Free Source Code</a>
</center>
<br />
<form action="submit.php" method="post">
    Nama: <input type="text" name="nama" id=""><br />
    Tulis komentar anda: <input type="text" name="komentar" id=""><br />
    <input type="submit" value="Kirim"><br />
</form>
<br />
<center>
    <iframe src="http://kacung.diimz.site:2020/komentar.txt" frameborder="0"></iframe>
</center>
</body>
</html>
