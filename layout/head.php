<meta charset="utf-8" />
<meta name="robots" content="noindex">
<meta property="og:type" content="website" />
<meta content="summary_large_image" name="twitter:card" />
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link href="assets/css/brixagencydev.65be43398.css" rel="stylesheet" type="text/css" />
<link href="assets/favicon.jpg" rel="shortcut icon" type="image/x-icon" />
<link href="assets/favicon.jpg" rel="apple-touch-icon" />

<!-- Add windows-os class to to 3D Geometric CTA -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to detect Windows OS
        function isWindows() {
            return navigator.platform.toUpperCase().indexOf('WIN') > -1;
        }

        if (isWindows()) {
            // Get the element with the specific ID
            const element = document.getElementById('brixctav1');

            // Check if the element exists, and add the 'windows-os' class to it
            if (element) {
                element.classList.add('windows-os');
            }
        }
    });
</script>

<!-- Add classes to BRIX 3D CTA -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to detect Windows OS
        function isWindows() {
            return navigator.platform.toUpperCase().indexOf('WIN') > -1;
        }

        if (isWindows()) {
            // List of element IDs
            const elementIds = [
                'brixbcta1',
                'brixbcta2',
                'brixbcta3',
                'brixbcta4',
                'brixbcta5',
            ];

            // Iterate through the IDs, find the elements, and add the corresponding class names
            elementIds.forEach(function(id) {
                const element = document.getElementById(id);

                if (element) {
                    element.classList.add(id);
                }
            });
        }
    });
</script>

<!-- Add Windows Styling to 3D Geometric CTA -->
<style>
    .windows-os {
        background-image: linear-gradient(to bottom, #0A76FF 82%, #0A84FF 91%) !important;
    }
</style>

<!-- Add Windows Styling to BRIX 3D CTA -->
<style>
    .brixbcta1 {
        background-image: linear-gradient(90deg, transparent 44%, #0A6EEC 57%) !important;
    }

    .brixbcta2 {
        background-image: linear-gradient(180deg, #097CF2 49%, #085AF4 72%, #055BF3) !important;
    }

    .brixbcta3 {
        background-image: linear-gradient(153deg, #0782F7 23%, #0780F8 38%, #087CF8 47%, #066DF7 57%, #0957F2 65%, #0957F2 88%) !important;
    }

    .brixbcta4 {
        background-color: #1278FF !important;
    }

    .brixbcta5 {
        background-color: #0A5ADF !important;
    }

    @media screen and (max-width: 479px) {
        .cta.cta-v1-section {
            background-image: linear-gradient(#0976FE 82.77%, #1986FC) !important;
        }
    }

    @media screen and (max-width: 479px) {
        .cta-v2 {
            background-image: linear-gradient(84deg, #0b75f1 29.41%, #0a5fd9 73.11%) !important;
        }
    }

    @media only screen and (min-width: 1440px) {
        .brixbcta1 {
            background-image: linear-gradient(87deg, transparent 30%, #0963e2 43%) !important;
        }
        .brixbcta3 {
            background-image: linear-gradient(153deg, #0B77F3 25%, #0B74F8 31%, #0C5CF3 48%, #0862E1 76%, #0B59F3 80%, #0B59F3 100%) !important;
        }
    }

    @media only screen and (min-width: 1280px) {
        .brixbcta1 {
            background-image: linear-gradient(90deg, transparent 40%, #0963e2 45%) !important;
        }
        .brixbcta3 {
            background-image: linear-gradient(153deg, #0B77F3 25%, #0B74F8 31%, #0C5CF3 48%, #0862E1 76%, #0B59F3 80%, #0B59F3 100%) !important;
        }
    }
</style>

<!-- Add Mac Styling to 3D Geometric CTA -->
<style>
    .cta-v1-section {
        background-image: linear-gradient(to bottom, #0A76FF 82%, #0A84FF 91%) !important;
    }
</style>

<!-- Add classes to BRIX 3D CTA -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // List of element IDs
        const elementIds = [
            'brixbcta1',
            'brixbcta2',
            'brixbcta3',
            'brixbcta4',
            'brixbcta5',
        ];

        // Iterate through the IDs, find the elements, and add the corresponding class names
        elementIds.forEach(function(id) {
            const element = document.getElementById(id);

            if (element) {
                element.classList.add(id);
            }
        });
    });
</script>