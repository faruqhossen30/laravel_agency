<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comment Jet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Inter";
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .step-wizard-list{
            background: #fff;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            color: #333;
            list-style-type: none;
            border-radius: 10px;
            display: flex;
            padding: 20px 10px;
            position: relative;
            z-index: 10;
        }
        .step-wizard-item{
            padding: 0 20px;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive:1;
            flex-grow: 1;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            text-align: center;
            min-width: 170px;
            position: relative;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F3F3F3]">
    <div class=" max-w-xl mx-auto py-10">
        <section class="step-wizard">
            <ul class="step-wizard-list">
                <li class="step-wizard-item">
                    <span class="progress-count">
                        1
                    </span>
                    <span class="progress-label">
                        Billing Info
                    </span>
                </li>
                <li class="step-wizard-item">
                    <span class="progress-count">
                        2
                    </span>
                    <span class="progress-label">
                        Payment Method
                    </span>
                </li>
                <li class="step-wizard-item">
                    <span class="progress-count">
                        3
                    </span>
                    <span class="progress-label">
                        checkout
                    </span>
                </li>
                <li class="step-wizard-item">
                    <span class="progress-count">
                        4
                    </span>
                    <span class="progress-label">
                        Success
                    </span>
                </li>
            </ul>
        </section>
    </div>
</body>

</html>
