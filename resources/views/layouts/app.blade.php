<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>@yield('title')</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    <body class="font-sans antialiased">
 @include('layouts.header')
<main class="max-w-[1440px] mx-auto px-6 py-12 min-h-[calc(100vh-64px)]">
    @yield('main')
</main>
 
 <script>

const find_user = document.getElementById('find_user');
const results = document.getElementById('results');

find_user.addEventListener('input', async (e) => {
    const username = e.target.value.trim();

    if (username.length < 1) {
        results.innerHTML = '';
        return;
    }

    const response = await fetch(`search?username=${username}`);
    const users = await response.json();
    console.log(users);
    

    results.innerHTML = '';

    users.forEach(user => {
        results.innerHTML += `<li>${user.username}</li>`;
    });
});

    
</script>
    </body>
</html>
