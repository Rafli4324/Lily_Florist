<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lily Florist - Sign In</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            mauve: '#A57172', 
            'mauve-dark': '#8c6d6e',
          },
          fontFamily: {
            'serif-display': ["'Playfair Display'", 'serif'],
            'poppins': ['Poppins', 'sans-serif']
          },
        }
      }
    }

    const supabaseUrl = 'https://uorxpavndirbgapqzugn.supabase.co';
    const supabaseAnonKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVvcnhwYXZuZGlyYmdhcHF6dWduIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NjQwNDAxOTQsImV4cCI6MjA3OTYxNjE5NH0.ebEFOmTgUFwOefA9FvVAxmm9jcTDVLDi5OLx_3_wh8k';
    const supabase = window.supabase.createClient(supabaseUrl, supabaseAnonKey);

    async function handleLogin(event) {
      event.preventDefault();

      const email = document.querySelector('input[name="email"]').value;
      const password = document.querySelector('input[name="password"]').value;

      try {
        const { data, error } = await supabase.auth.signInWithPassword({
          email: email,
          password: password,
        });

        if (error) {
          alert('Login gagal: ' + error.message);
        } else {
          alert('Login berhasil! Selamat datang.');
          window.location.href = 'dashboardadmin.php';
        }
      } catch (err) {
        console.error('Error:', err);
        alert('Terjadi kesalahan. Coba lagi.');
      }
    }

    async function handleSignUp(event) {
      event.preventDefault();
      const email = document.querySelector('input[name="email"]').value;
      const password = document.querySelector('input[name="password"]').value;

      try {
        const { data, error } = await supabase.auth.signUp({
          email: email,
          password: password,
        });

        if (error) {
          alert('Sign-up gagal: ' + error.message);
        } else {
          alert('Sign-up berhasil! Periksa email Anda untuk konfirmasi.');
        }
      } catch (err) {
        console.error('Error:', err);
        alert('Terjadi kesalahan. Coba lagi.');
      }
    }

    document.addEventListener('DOMContentLoaded', () => {
      const form = document.querySelector('form');
      form.addEventListener('submit', handleLogin);

    });
  </script>
</head>

<body class="font-poppins h-screen w-full overflow-hidden">

  <div class="flex h-screen">

      <div class="w-3/5 relative bg-cover bg-center bg-no-repeat" style="background-image: url('../img/login.png');">
          <div class="absolute inset-0 bg-[rgba(242,222,222,0.55)]"></div>
      </div>

      <div class="w-2/5 bg-white rounded-l-[60px] shadow-2xl flex flex-col justify-center px-10 md:px-16 lg:px-20">

          <div class="mb-10">
              <h1 class="font-serif-display text-4xl md:text-5xl text-mauve-dark mb-2">Lily Florist</h1>
              <h2 class="text-xl font-bold text-mauve">Sign In</h2>
          </div>

          <form action="#" method="post" class="space-y-8">
              
              <div class="group">
                  <label class="block text-xs text-gray-400 mb-1">Masukkan Email</label>
                  <input
                      type="email"
                      name="email"
                      class="w-full border-b border-gray-200 py-2 text-gray-700 focus:border-mauve focus:outline-none transition-colors bg-transparent placeholder-transparent"
                      required
                  />
              </div>

              <div class="group">
                  <label class="block text-xs text-gray-400 mb-1">Masukkan Kata Sandi</label>
                  <input
                      type="password"
                      name="password"
                      class="w-full border-b border-gray-200 py-2 text-gray-700 focus:border-mauve focus:outline-none transition-colors bg-transparent placeholder-transparent"
                      required
                  />
              </div>

              <div class="pt-6">
                  <button 
                      type="submit" 
                      class="w-full rounded-xl bg-mauve py-3 text-white font-semibold shadow-md hover:bg-mauve-dark transition duration-300"
                  >
                      Masuk
                  </button>
              </div>

              <div class="text-center text-xs text-gray-500 mt-6">
                  Kamu tidak mempunyai akun? 
                  <a href="#" class="font-bold text-mauve hover:underline">Daftar</a>
              </div>
          </form>

      </div>
  </div>

</body>
</html>