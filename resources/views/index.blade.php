<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.6.0-web/css/all.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/htmx.min.js') }}"></script>
</head>
<body class="bg-[#FFE3CD] rounded-[24px] w-full min-h-screen relative overflow-hidden">

    <!-- Top Right Rectangle -->
    <img class="absolute right-0 top-0 w-40 h-48" src="{{ asset('images/TopRightRectangle.png') }}" alt="" />

    <!-- Bottom Left Rectangle -->
    <img class="absolute bottom-0 left-0 h-44 w-52" src="{{ asset('images/BottomLeftRectangle.png') }}" alt="" />

    <!-- Copyright -->
    <p class="z-10 absolute bottom-6 left-3 text-xs font-light">
        Copyright @ 2020 Alta Software
    </p>

    <!-- Bottom Right Rectangle -->
    <img class="absolute bottom-0 right-0 w-[500px] h-24" src="{{ asset('images/BottomRightRectangle.png') }}" alt="" />

    <script>
        // Listen for HTMX response errors
        document.body.addEventListener("htmx:responseError", function (event) {
            if (event.detail.xhr.status === 404) {
                htmx.ajax("GET", "{{ route('404') }}", {
                    target: "#login-container",
                });
            }
        });
    </script>
</body>
</html>
