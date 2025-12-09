<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Dashboard Admin - Lily Florist</title>

  <!-- Tailwind CDN (untuk development cepat) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* kecilkan box-shadow agar mirip desain */
    .soft-card { box-shadow: 0 6px 10px rgba(0,0,0,0.06), inset 0 2px 0 rgba(255,255,255,0.6); }
    .soft-card-sm { box-shadow: 0 4px 8px rgba(0,0,0,0.06), inset 0 1px 0 rgba(255,255,255,0.6); }
  </style>
</head>
<body class="antialiased bg-white text-gray-700 font-sans">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#d9a4a7] text-[#6b4042] flex-shrink-0">
      <div class="px-6 py-8">
        <div class="flex items-center justify-between">
          <div class="text-2xl font-serif font-semibold">Lily Florist</div>
          <button class="p-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
          </button>
        </div>

        <nav class="mt-8">
          <a class="flex items-center gap-3 bg-[#eecfd0] px-3 py-2 rounded-md text-sm shadow-inner soft-card-sm" href="DashboardAdmin.php">
            <svg class="w-5 h-5 text-[#8a595b]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/></svg>
            <span class="text-xs">Dashboard</span>
          </a>

          <div class="mt-6 text-sm">
            <div class="text-xs uppercase tracking-wide mb-2">Katalog</div>
            <a class="flex items-center gap-3 px-3 py-2 rounded-md hover:bg-[#efdcdd]" href="ManajemenKatalog.php">
              <svg class="w-5 h-5 text-[#8a595b]" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"/></svg>
              <span>Manajemen Katalog</span>
            </a>
          </div>

          <div class="mt-6 text-sm">
            <div class="text-xs uppercase tracking-wide mb-2">Transaksi</div>
            <a class="flex items-center gap-3 px-3 py-2 rounded-md hover:bg-[#efdcdd]" href="Pendapatan.php">
              <svg class="w-5 h-5 text-[#8a595b]" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
              <span>Pendapatan</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2 rounded-md hover:bg-[#efdcdd] mt-2" href="Pengeluaran.php">
              <svg class="w-5 h-5 text-[#8a595b]" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-width="2" d="M12 20V4m8 8H4"/></svg>
              <span>Pengeluaran</span>
            </a>
          </div>

          <div class="mt-8">
            <a class="flex items-center gap-3 px-3 py-2 text-sm rounded-md hover:bg-[#efdcdd]" href="#">
              <svg class="w-5 h-5 text-[#8a595b]" viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10" stroke-width="2"/><path d="M12 8v4l3 3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <span>Logout</span>
            </a>
          </div>
        </nav>
      </div>
    </aside>

    <!-- Main content -->
    <div class="flex-1 flex flex-col">
      <!-- Top bar -->
      <header class="h-16 bg-[#efe6dd] border-b border-gray-200 flex items-center px-8">
        <div class="text-lg font-semibold text-[#7a675f]">Selamat Datang, Administrator</div>
      </header>

      <!-- Page body -->
      <main class="p-8 overflow-auto">
        <h1 class="text-2xl font-bold text-[#3b2b2a] mb-6">Dashboard</h1>

        <!-- Stat cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
          <div class="bg-[#fbf6f4] rounded-lg p-5 soft-card">
            <div class="text-xs text-gray-500">Total Katalog</div>
            <div class="mt-3 text-3xl font-semibold">1</div>
          </div>

          <div class="bg-[#fbf6f4] rounded-lg p-5 soft-card">
            <div class="text-xs text-gray-500">Pendapatan (Hari Ini)</div>
            <div id="totalIncomeToday" class="mt-3 text-lg font-semibold">Rp.0,00</div>
            <div class="text-xs text-gray-400 mt-2">Bulanan: <span id="totalIncomeMonth">Rp.0,00</span></div>
          </div>

          <div class="bg-[#fbf6f4] rounded-lg p-5 soft-card">
            <div class="text-xs text-gray-500">Pengeluaran (Hari Ini)</div>
            <div id="totalExpenseToday" class="mt-3 text-lg font-semibold">Rp.0,00</div>
            <div class="text-xs text-gray-400 mt-2">Bulanan: <span id="totalExpenseMonth">Rp.0,00</span></div>
          </div>

          <div class="bg-[#fbf6f4] rounded-lg p-5 soft-card">
            <div class="text-xs text-gray-500">Sisa Uang</div>
            <div id="sisaUang" class="mt-3 text-lg font-semibold">Rp.0,00</div>
          </div>
        </div>

        <!-- Rekap table -->
        <section class="max-w-3xl">
          <h2 class="text-base font-semibold mb-4">Rekap Pendapatan Bulanan</h2>

          <div class="overflow-hidden rounded-md border border-[#e7c9c9]">
            <div class="bg-[#ddabab] px-4 py-2 text-sm font-medium text-white"> <!-- header -->
              <div class="grid grid-cols-3 gap-0">
                <div class="pl-4">Rekap Keuangan</div>
                <div class="text-center">Bulan</div>
                <div class="text-right pr-4">Detail</div>
              </div>
            </div>

            <div class="bg-white">
              <table class="w-full text-sm">
                <tbody>
                  <tr class="border-t border-[#f0dede]">
                    <td class="px-4 py-4 text-sm text-[#5b4a49]">Rp.26.000.000,00</td>
                    <td class="text-center text-sm">Januari</td>
                    <td class="text-right pr-4 text-sm text-[#e06b6b]"><a href="#">Lihat detail</a></td>
                  </tr>

                  <tr class="border-t border-[#f0dede]">
                    <td class="px-4 py-4 text-sm text-[#5b4a49]">Rp.26.000.000,00</td>
                    <td class="text-center text-sm">Februari</td>
                    <td class="text-right pr-4 text-sm text-[#e06b6b]"><a href="#">Lihat detail</a></td>
                  </tr>

                  <tr class="border-t border-[#f0dede]">
                    <td class="px-4 py-4 text-sm text-[#5b4a49]">Rp.26.000.000,00</td>
                    <td class="text-center text-sm">Februari</td>
                    <td class="text-right pr-4 text-sm text-[#e06b6b]"><a href="#">Lihat detail</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
<script>
  const supabaseUrl = 'https://uorxpavndirbgapqzugn.supabase.co'; 
  const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVvcnhwYXZuZGlyYmdhcHF6dWduIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NjQwNDAxOTQsImV4cCI6MjA3OTYxNjE5NH0.ebEFOmTgUFwOefA9FvVAxmm9jcTDVLDi5OLx_3_wh8k'; 
  let supabaseClient;

  function initializeSupabase() {
    if (typeof supabase === 'undefined') {
      console.error('Supabase library not loaded.');
      return false;
    }
    supabaseClient = supabase.createClient(supabaseUrl, supabaseKey);
    return true;
  }

  function formatRupiah(angka) {
  const isNegative = angka.startsWith('-');
  var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);
  if (ribuan) {
    const separator = sisa ? '.' : '';
    rupiah += separator + ribuan.join('.');
  }
  return (isNegative ? '-Rp.' : 'Rp.') + rupiah + ',00';
}

  async function loadDashboardStats() {
    if (!supabaseClient) return;

    const today = new Date().toISOString().split('T')[0];
    const currentMonth = new Date().getMonth() + 1;
    const currentYear = new Date().getFullYear();

    try {
      const { data: incomeToday, error: incomeError } = await supabaseClient
        .from('tabel_pendapatan')
        .select('jumlah')
        .eq('tanggal', today);
      if (incomeError) throw incomeError;
      const totalIncomeToday = incomeToday.reduce((sum, item) => sum + item.jumlah, 0);

      const { data: expenseToday, error: expenseError } = await supabaseClient
        .from('tabel_pengeluaran')
        .select('jumlah')
        .eq('tanggal', today);
      if (expenseError) throw expenseError;
      const totalExpenseToday = expenseToday.reduce((sum, item) => sum + item.jumlah, 0);

      const { data: incomeMonth, error: incomeMonthError } = await supabaseClient
        .from('tabel_pendapatan')
        .select('jumlah')
        .gte('tanggal', `${currentYear}-${String(currentMonth).padStart(2, '0')}-01`)
        .lt('tanggal', `${currentYear}-${String(currentMonth + 1).padStart(2, '0')}-01`);
      if (incomeMonthError) throw incomeMonthError;
      const totalIncomeMonth = incomeMonth.reduce((sum, item) => sum + item.jumlah, 0);

      const { data: expenseMonth, error: expenseMonthError } = await supabaseClient
        .from('tabel_pengeluaran')
        .select('jumlah')
        .gte('tanggal', `${currentYear}-${String(currentMonth).padStart(2, '0')}-01`)
        .lt('tanggal', `${currentYear}-${String(currentMonth + 1).padStart(2, '0')}-01`);
      if (expenseMonthError) throw expenseMonthError;
      const totalExpenseMonth = expenseMonth.reduce((sum, item) => sum + item.jumlah, 0);

      const sisaUang = totalIncomeToday - totalExpenseToday;

      document.getElementById('totalIncomeToday').textContent = formatRupiah(totalIncomeToday.toString());
      document.getElementById('totalExpenseToday').textContent = formatRupiah(totalExpenseToday.toString());
      document.getElementById('totalIncomeMonth').textContent = formatRupiah(totalIncomeMonth.toString());
      document.getElementById('totalExpenseMonth').textContent = formatRupiah(totalExpenseMonth.toString());
      document.getElementById('sisaUang').textContent = formatRupiah(sisaUang.toString());
    } catch (err) {
      console.error('Error loading dashboard stats:', err);
      document.getElementById('totalIncomeToday').textContent = 'Rp.0,00';
      document.getElementById('totalExpenseToday').textContent = 'Rp.0,00';
      document.getElementById('totalIncomeMonth').textContent = 'Rp.26.000.000,00';
      document.getElementById('totalExpenseMonth').textContent = 'Rp.26.000.000,00';
      document.getElementById('sisaUang').textContent = 'Rp.0,00';
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    if (initializeSupabase()) {
      loadDashboardStats();
    }
  });
</script>

</body>
</html>