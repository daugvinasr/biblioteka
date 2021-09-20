<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    <div>
        <section class="container mx-auto p-6 rounded-10">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="text-md tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            @yield('tableNames')
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                            @yield('tableData')
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
