<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lily Florist - Ulasan Toko</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2" defer></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-dark': '#4a3b3b',
                        'review-bg': '#f2dede',   
                        'footer-bg': '#3e3030',   
                        'star-yellow': '#fbbf24', 
                    },
                    fontFamily: {
                        'serif-display': ["'Playfair Display'", 'serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-poppins bg-white text-gray-800">

    <nav class="max-w-7xl mx-auto px-6 py-6 flex justify-end items-center">
        <div class="space-x-8 text-sm md:text-base font-semibold text-gray-600">
            <a href="LandingPage.php#beranda" class="hover:text-accent-pink font-semibold transition-colors duration-200">Beranda</a>
            <a href="LandingPage.php#tentang-kami" class="hover:text-accent-pink font-semibold transition-colors duration-200">Tentang Kami</a>
            <a href="LandingPage.php#katalog" class="hover:text-accent-pink font-semibold transition-colors duration-200">Katalog</a>
            <a href="LandingPage.php#kontak" class="hover:text-accent-pink font-semibold transition-colors duration-200">Kontak</a>
            </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 pb-20">
        
        <h1 class="text-4xl md:text-5xl font-bold font-serif-display text-primary-dark mb-8">
            Ulasan Toko
        </h1>

        <div id="reviewsContainer" class="space-y-4">
            
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center mt-8">
            <div id="showingEntries" class="text-sm text-gray-600 mb-4 md:mb-0 font-medium">
                Showing 1 to 10 entries
            </div>

            <div id="paginationContainer" class="flex border border-gray-400 rounded-sm overflow-hidden">
                
            </div>
        </div>

    </main>

    <footer class="bg-footer-bg text-gray-300 py-6 px-6 border-t-4 border-red-700 fixed bottom-0 left-0 right-0 z-10">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center">
        
        <div class="text-center md:text-left mb-4 md:mb-0">
            <h2 class="text-2xl font-bold font-serif-display text-white mb-1">Lily Florist</h2>
            <p class="text-xs md:text-sm text-gray-400">Wujudkan Keindahan dalam Setiap Rangkaian</p>
        </div>
        <div class="text-center md:text-right text-xs md:text-sm text-gray-400">
            <p>&copy; 2025 Lily Florist, All rights reserved</p>
        </div>
    </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const supabaseUrl = 'https://uorxpavndirbgapqzugn.supabase.co/'; 
            const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVvcnhwYXZuZGlyYmdhcHF6dWduIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NjQwNDAxOTQsImV4cCI6MjA3OTYxNjE5NH0.ebEFOmTgUFwOefA9FvVAxmm9jcTDVLDi5OLx_3_wh8k'; 

            let supabase;
            if (typeof window.supabase !== 'undefined') {
                supabase = window.supabase.createClient(supabaseUrl, supabaseKey);
            } else {
                console.error('Supabase script not loaded. Please check your internet connection or CDN URL.');
                return; 
            }

            let currentPage = 1;
            const reviewsPerPage = 10;
            let totalReviews = 0;

            async function loadReviews(page = 1) {
                const from = (page - 1) * reviewsPerPage;
                const to = from + reviewsPerPage - 1;

                const { data, error, count } = await supabase
                    .from('reviews')
                    .select('*', { count: 'exact' })
                    .order('created_at', { ascending: false })
                    .range(from, to);

                if (error) {
                    console.error('Error loading reviews:', error);
                    return;
                }

                totalReviews = count;
                const container = document.getElementById('reviewsContainer');
                container.innerHTML = '';

                data.forEach(review => {
                    const stars = '<span>★</span>'.repeat(review.rating);
                    const date = new Date(review.created_at).toLocaleDateString('id-ID', {
                        year: 'numeric', month: 'long', day: 'numeric'
                    });

                    const reviewHTML = `
                        <div class="bg-review-bg p-5 rounded-md shadow-sm">
                            <div class="flex justify-between items-start mb-1">
                                <h3 class="font-bold text-primary-dark text-base">${review.name}</h3>
                                <span class="text-sm font-semibold text-primary-dark/80">${date}</span>
                            </div>
                            <div class="flex text-star-yellow text-lg mb-2">${stars}</div>
                            <p class="text-sm md:text-base text-gray-700 leading-relaxed">${review.comment}</p>
                        </div>
                    `;
                    container.innerHTML += reviewHTML;
                });

                const start = from + 1;
                const end = Math.min(to + 1, totalReviews);
                document.getElementById('showingEntries').textContent = `Showing ${start} to ${end} entries`;

                renderPagination(page);
            }

            function renderPagination(currentPage) {
                const totalPages = Math.ceil(totalReviews / reviewsPerPage);
                const container = document.getElementById('paginationContainer');
                container.innerHTML = '';

                const prevButton = document.createElement('button');
                prevButton.textContent = 'Previous';
                prevButton.className = 'px-3 py-1 bg-white hover:bg-gray-100 text-sm font-medium text-gray-600 border-r border-gray-400';
                prevButton.disabled = currentPage === 1;
                prevButton.addEventListener('click', () => {
                    if (currentPage > 1) {
                        currentPage--;
                        loadReviews(currentPage);
                    }
                });
                container.appendChild(prevButton);

                const maxVisiblePages = 5;
                let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
                let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

                if (endPage - startPage + 1 < maxVisiblePages) {
                    startPage = Math.max(1, endPage - maxVisiblePages + 1);
                }

                for (let i = startPage; i <= endPage; i++) {
                    const pageButton = document.createElement('button');
                    pageButton.textContent = i;
                    pageButton.className = `px-3 py-1 text-sm font-medium border-r border-gray-400 ${i === currentPage ? 'bg-review-bg text-gray-800 font-bold' : 'bg-white hover:bg-gray-100 text-gray-600'}`;
                    pageButton.addEventListener('click', () => {
                        currentPage = i;
                        loadReviews(currentPage);
                    });
                    container.appendChild(pageButton);
                }

                const nextButton = document.createElement('button');
                nextButton.textContent = 'Next';
                nextButton.className = 'px-3 py-1 bg-white hover:bg-gray-100 text-sm font-medium text-gray-600';
                nextButton.disabled = currentPage === totalPages;
                nextButton.addEventListener('click', () => {
                    if (currentPage < totalPages) {
                        currentPage++;
                        loadReviews(currentPage);
                    }
                });
                container.appendChild(nextButton);
            }

            loadReviews(currentPage);
        });
    </script>

</body>
</html>