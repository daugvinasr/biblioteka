<div class="bg-yellow-700 mb-8 shadow-lg ">
    <div class="container mx-auto">
        <div class="flex items-center">
            <a href="/biblioteka/public/" class="block px-5 py-4 text-white {{ session('activeNav') == 'home' ? 'bg-yellow-800' : null }}">Pagrindinis</a>
            <a href="/biblioteka/public/authors" class="block px-5 py-4 text-white {{ session('activeNav') == 'authors' ? 'bg-yellow-800' : null }}">Autoriai</a>
            <a href="/biblioteka/public/books" class="block px-5 py-4 text-white {{ session('activeNav') == 'books' ? 'bg-yellow-800' : null }}">Knygos</a>
            <a href="/biblioteka/public/borrows" class="block px-5 py-4 text-white {{ session('activeNav') == 'borrows' ? 'bg-yellow-800' : null }}">Paimtos knygos</a>
            <a href="/biblioteka/public/students" class="block px-5 py-4 text-white {{ session('activeNav') == 'students' ? 'bg-yellow-800' : null }}">Studentai</a>
            <a href="/biblioteka/public/types" class="block px-5 py-4 text-white {{ session('activeNav') == 'types' ? 'bg-yellow-800' : null }}">Tipai</a>
        </div>
    </div>
</div>
