<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="5;url=./CV/cv.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder By AI</title>
    <!-- <link rel="stylesheet" href=""> -->
    <style>
        .loading-spinner {
            margin-top: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .spinner__container {
            width: 56px;
            height: 56px;
            position: relative;
        }

        .text__container {
            height: 56px;
            margin-left: 12px;
            display: flex;
            align-items: center;
        }

        .text__container>span {
            font-size: 16px;
            color: #474F54;
            font-weight: 400;
            font-family: lato, sans-serif;
        }

        .spinner--fill {
            width: 20px;
            height: 20px;
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 100%;
            animation: spinner-fill-scaleout 2.4s infinite ease-in-out;
        }

        .spinner--line {
            width: 54px;
            height: 54px;
            position: absolute;
            top: 0px;
            left: 0px;
            border-radius: 100%;
            animation: spinner-line-scaleout 1.2s infinite ease-in-out;
        }



        @keyframes spinner-fill-scaleout {
            0% {
                transform: scale(0);
                border: 18px solid #1E7E98;
                background-color: #1E7E98;
            }

            100% {
                transform: scale(1);
                border: 18px solid #1E7E98;
                background-color: none;
                opacity: 0;
            }
        }

        @keyframes spinner-line-scaleout {
            0% {
                transform: scale(0);
                border: 1px solid #820068;
                opacity: 1;
            }

            100% {
                transform: scale(1);
                border: 1px solid #820068;
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="loading-spinner">
            <div class="spinner__container">
                <div class="spinner--fill">
                </div>
                <div class="spinner--line">
                </div>
            </div>
            <div class="text__container">
                <span>Please wait while we beautify your resume.</span>
            </div>
        </div>
    </div>
</body>

</html>
<?php
// Set the desired delay time in seconds
$delay = 5;

// Redirect to the desired page after the specified delay
header("refresh: $delay; url=another_page.php");
exit;
?>