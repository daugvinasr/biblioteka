@include('partials.head')
<body>
    @include('partials.navbar')
    <div>
        <section class="container mx-auto p-6 rounded-10">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full">
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
    <section class="container mx-auto p-6 rounded-10">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg px-2 py-2">
            @yield('inputFields')
        </div>
    </section>
</body>

</html>
