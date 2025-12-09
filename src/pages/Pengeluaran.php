<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Pengeluaran - Lily Florist</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Inter', sans-serif; }
    .font-serif { font-family: 'Playfair Display', serif; }

    .soft-card { box-shadow: 0 4px 6px rgba(0,0,0,0.05); }

    /* Warna Khas Sesuai Gambar */
    .bg-dusty-pink { background-color: #d9a4a7; }
    .text-dusty-dark { color: #6b4042; }
    
    /* Header Tabel Pink Gelap */
    .table-header-pink { background-color: #dbb0b3; color: #543233; }

    /* Tombol Pink Utama */
    .btn-pink {
      background-color: #dbb0b3;
      color: #543233;
      transition: background-color 0.2s;
    }
    .btn-pink:hover { background-color: #c99ba0; }
  </style>
</head>
<body class="antialiased font-sans text-stone-700 bg-white overflow-hidden">

  <div class="flex h-screen">
    <aside class="w-64 bg-dusty-pink text-dusty-dark flex-shrink-0 flex flex-col">
      <div class="px-6 py-8">
        <div class="flex items-center justify-between">
          <div class="text-2xl font-serif font-semibold">Lily Florist</div>
          <button class="p-2 hover:bg-white/20 rounded">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
          </button>
        </div>

        <nav class="mt-8">
          <a class="flex items-center gap-3 px-3 py-2 hover:bg-[#efdcdd] rounded-md text-sm shadow-inner soft-card-sm" href="DashboardAdmin.php">
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
            <a class="flex items-center bg-[#eecfd0] gap-3 px-3 py-2 rounded-md mt-2" href="Pengeluaran.php">
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

    <div class="flex-1 flex flex-col min-w-0 bg-white">
      <header class="h-16 bg-[#fcf9f8] border-b border-[#e7e5e4] flex items-center px-8 justify-between">
        <div class="text-lg font-medium text-[#5e5050]">Selamat Datang, Administrator</div>
      </header>

      <main class="p-8 overflow-y-auto h-full">
        <div class="w-full">
          <h1 class="text-2xl font-bold text-[#4a3b3b] mb-6">Pengeluaran</h1>

          <div class="bg-white p-0 rounded-none">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-4 gap-4">
              <div class="text-sm text-stone-600">
                <div class="font-bold text-stone-700 mb-1">Transaksi Keluar</div>
                <div class="flex items-center gap-2">
                  <span>Show</span>
                  <select class="border border-stone-300 rounded px-2 py-1 text-sm focus:outline-none focus:border-stone-400">
                    <option>5</option>
                    <option>10</option>
                  </select>
                  <span>entries</span>
                </div>
              </div>

              <button id="addExpenseBtn" class="btn-pink px-4 py-2 rounded shadow-sm text-sm font-medium flex items-center gap-2">
                <span>+</span> Pengeluaran
              </button>
            </div>

            <div class="overflow-x-auto border border-[#e5d5d5] rounded-t-md">
              <table class="w-full text-sm text-left">
                <thead class="table-header-pink uppercase text-xs font-bold tracking-wider">
                  <tr>
                    <th class="px-6 py-4 w-16 text-center border-r border-[#c29598]">No</th>
                    <th class="px-6 py-4 w-40 border-r border-[#c29598]">Tanggal</th>
                    <th class="px-6 py-4 w-48 border-r border-[#c29598]">Jumlah</th>
                    <th class="px-6 py-4 border-r border-[#c29598]">Keterangan</th>
                    <th class="px-6 py-4 w-32 text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody id="expenseBody" class="bg-[#fcfaf9] divide-y divide-[#efe6e6]">
                </tbody>
              </table>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="text-xs text-stone-500">Showing 1 to 10 entries</div>
                <div class="flex items-center gap-1">
                    <button class="px-3 py-1 border rounded text-xs bg-gray-50 text-gray-600">Previous</button>
                    <button class="px-3 py-1 border rounded text-xs bg-dusty-pink text-white font-bold">1</button>
                    <button class="px-3 py-1 border rounded text-xs bg-white text-gray-600">2</button>
                    <button class="px-3 py-1 border rounded text-xs bg-white text-gray-600">3</button>
                    <button class="px-3 py-1 border rounded text-xs bg-gray-50 text-gray-600">Next</button>
                </div>
            </div>

          </div>
        </div>
      </main>
    </div>
  </div>

  <div id="expenseModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm px-4">
    <div class="bg-white w-full max-w-lg rounded-lg shadow-2xl transform scale-100 transition-all">
      <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
        <h3 class="text-lg font-bold text-gray-700">Tambah Pengeluaran</h3>
        <button id="expenseModalClose" class="text-gray-400 hover:text-gray-600 transition">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
      </div>

      <form id="expenseForm" class="px-6 py-6 space-y-5">
        
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Tanggal:</label>
          <div class="relative">
            <input id="expenseDate" type="date" class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-[#d9a4a7] focus:border-[#d9a4a7]" />
          </div>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Jumlah:</label>
          <input id="expenseAmount" type="text" class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-[#d9a4a7] focus:border-[#d9a4a7]" placeholder="1.000.000,00" />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Keterangan:</label>
          <textarea id="expenseNote" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-[#d9a4a7] focus:border-[#d9a4a7]" placeholder="Membeli stok..."></textarea>
        </div>

        <div class="flex justify-end gap-3 pt-4">
          <button type="button" id="expenseCancel" class="px-4 py-2 rounded-md text-sm font-medium bg-gray-200 text-gray-700 hover:bg-gray-300 transition">Kembali</button>
          <button type="submit" class="px-4 py-2 rounded-md text-sm font-medium btn-pink shadow-sm">Tambah</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal Konfirmasi Penghapusan -->
<div id="deleteConfirmModal" class="fixed inset-0 z-60 hidden items-center justify-center bg-black/50 backdrop-blur-sm px-4">
  <div class="bg-white w-80 rounded-lg shadow-2xl p-8 text-center transform transition-all scale-100">
    
    <div class="mx-auto w-16 h-16 rounded-full border-2 border-red-500 flex items-center justify-center mb-4">
      <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"/>
      </svg>
    </div>
    <h3 class="text-base font-medium text-gray-800 mb-1">Konfirmasi Penghapusan</h3>
    <p class="text-base font-medium text-gray-800 mb-6">Yakin ingin menghapus data ini?</p>
    <div class="flex gap-4 justify-center">
      <button id="deleteConfirmNo" class="px-6 py-2 rounded shadow-sm text-sm font-medium bg-gray-200 text-gray-700">Tidak</button>
      <button id="deleteConfirmYes" class="px-6 py-2 rounded shadow-sm text-sm font-medium bg-red-500 text-white">Ya</button>
    </div>
  </div>
</div>

<!-- Modal Edit Pengeluaran -->
<div id="editExpenseModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm px-4">
  <div class="bg-white w-full max-w-lg rounded-lg shadow-2xl transform scale-100 transition-all">
    <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
      <h3 class="text-lg font-bold text-gray-700">Edit Pengeluaran</h3>
      <button id="editExpenseModalClose" class="text-gray-400 hover:text-gray-600 transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
    </div>
    <form id="editExpenseForm" class="px-6 py-6 space-y-5">
      
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Tanggal:</label>
        <div class="relative">
          <input id="editExpenseDate" type="date" class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-[#d9a4a7] focus:border-[#d9a4a7]" />
        </div>
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Jumlah:</label>
        <input id="editExpenseAmount" type="text" class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-[#d9a4a7] focus:border-[#d9a4a7]" placeholder="1.000.000,00" />
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Keterangan:</label>
        <textarea id="editExpenseNote" rows="3" class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-1 focus:ring-[#d9a4a7] focus:border-[#d9a4a7]" placeholder="Membeli stok..."></textarea>
      </div>
      <div class="flex justify-end gap-3 pt-4">
        <button type="button" id="editExpenseCancel" class="px-4 py-2 rounded-md text-sm font-medium bg-gray-200 text-gray-700 hover:bg-gray-300 transition">Kembali</button>
        <button type="submit" class="px-4 py-2 rounded-md text-sm font-medium btn-pink shadow-sm">Simpan</button>
      </div>
    </form>
  </div>
</div>

  <div id="expenseSuccess" class="fixed inset-0 z-60 hidden items-center justify-center bg-black/50 backdrop-blur-sm px-4">
    <div class="bg-white w-80 rounded-lg shadow-2xl p-8 text-center transform transition-all scale-100">
      
      <div class="mx-auto w-16 h-16 rounded-full border-2 border-gray-800 flex items-center justify-center mb-4">
        <svg class="w-8 h-8 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
      </div>

      <h3 class="text-base font-medium text-gray-800 mb-1">Pengeluaran</h3>
      <p class="text-base font-medium text-gray-800 mb-6">Berhasil dicatat</p>

      <button id="expenseSuccessOk" class="btn-pink px-8 py-2 rounded shadow-sm text-sm font-medium">Oke</button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>

<script>
  const supabaseUrl = 'https://uorxpavndirbgapqzugn.supabase.co/'; 
  const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVvcnhwYXZuZGlyYmdhcHF6dWduIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NjQwNDAxOTQsImV4cCI6MjA3OTYxNjE5NH0.ebEFOmTgUFwOefA9FvVAxmm9jcTDVLDi5OLx_3_wh8k'; 
  
  let supabaseClient;
  let isEditMode = false;
  let editId = null;
  
  let currentPage = 1;
  let itemsPerPage = 5;
  let totalItems = 0;
  
  let currentDeleteId = null;
  
  const addBtn = document.getElementById('addExpenseBtn');
  const modal = document.getElementById('expenseModal');
  const modalClose = document.getElementById('expenseModalClose');
  const modalCancel = document.getElementById('expenseCancel');
  const modalForm = document.getElementById('expenseForm');
  const successModal = document.getElementById('expenseSuccess');
  const successOk = document.getElementById('expenseSuccessOk');
  const expenseBody = document.getElementById('expenseBody');
  
  const editModal = document.getElementById('editExpenseModal');
  const editModalClose = document.getElementById('editExpenseModalClose');
  const editModalCancel = document.getElementById('editExpenseCancel');
  const editModalForm = document.getElementById('editExpenseForm');
  
  const deleteConfirmModal = document.getElementById('deleteConfirmModal');
  const deleteConfirmNo = document.getElementById('deleteConfirmNo');
  const deleteConfirmYes = document.getElementById('deleteConfirmYes');
  
  const entriesSelect = document.querySelector('select'); 
  const showingText = document.querySelector('.text-xs.text-stone-500');
  const paginationControls = document.querySelector('.flex.items-center.gap-1'); 
  
  
  function initializeSupabase() {
    if (typeof supabase === 'undefined') {
      console.error('Supabase library not loaded.');
      alert('Gagal memuat library Supabase.');
      return false;
    }
    supabaseClient = supabase.createClient(supabaseUrl, supabaseKey);
    console.log('Supabase client initialized for Expense.');
    return true;
  }
  
  
  function formatRupiah(angka) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);
  
    if (ribuan) {
      const separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
    return 'Rp.' + rupiah + ',00';
  }
  
  
  function toggleModal(el, show) {
    if (show) {
      el.classList.remove('hidden');
      el.classList.add('flex');
    } else {
      el.classList.add('hidden');
      el.classList.remove('flex');
    }
  }
  
  
  async function loadExpense() {
    if (!supabaseClient) return;
  
    try {
      
      const { count, error: countError } = await supabaseClient
        .from('tabel_pengeluaran')
        .select('*', { count: 'exact', head: true });
      
      if (countError) throw countError;
      totalItems = count;
      
      
      const offset = (currentPage - 1) * itemsPerPage;
      
      
      const { data, error } = await supabaseClient
        .from('tabel_pengeluaran')
        .select('*')
        .order('created_at', { ascending: false })
        .range(offset, offset + itemsPerPage - 1);
    
      if (error) throw error;
    
      expenseBody.innerHTML = '';
    
      if (data.length === 0) {
        for (let i = 0; i < itemsPerPage; i++) {
          const placeholderRow = document.createElement('tr');
          placeholderRow.className = 'h-12 border-b border-[#efe6e6]';
          placeholderRow.innerHTML = `
            <td class="border-r border-[#efe6e6]"></td>
            <td class="border-r border-[#efe6e6]"></td>
            <td class="border-r border-[#efe6e6]"></td>
            <td class="border-r border-[#efe6e6]"></td>
            <td></td>
          `;
          expenseBody.appendChild(placeholderRow);
        }
      } else {
        data.forEach((item, index) => {
          const displayDate = item.tanggal ? item.tanggal.split('-').reverse().join('/') : '-';
          const displayAmount = formatRupiah(item.jumlah.toString());
          const newRow = document.createElement('tr');
          newRow.className = 'hover:bg-[#f5f0f0]';
          newRow.innerHTML = `
            <td class="px-6 py-4 text-center font-medium text-stone-600 border-r border-[#efe6e6]">${offset + index + 1}</td>
            <td class="px-6 py-4 text-stone-600 border-r border-[#efe6e6]">${displayDate}</td>
            <td class="px-6 py-4 font-medium text-stone-700 border-r border-[#efe6e6]">${displayAmount}</td>
            <td class="px-6 py-4 text-stone-600 border-r border-[#efe6e6]">${item.keterangan || '-'}</td>
            <td class="px-6 py-4 text-center">
              <div class="flex justify-center gap-2">
                <button class="edit-expense-btn bg-yellow-400 hover:bg-yellow-500 text-white text-[10px] px-3 py-1 rounded shadow-sm font-bold tracking-wide" data-id="${item.pengeluaran_id}">Edit</button>
                <button class="delete-expense-btn bg-red-500 hover:bg-red-600 text-white text-[10px] px-3 py-1 rounded shadow-sm font-bold tracking-wide" data-id="${item.pengeluaran_id}">Hapus</button>
              </div>
            </td>
          `;
          expenseBody.appendChild(newRow);
        });
      }
      
      
      const start = offset + 1;
      const end = Math.min(offset + data.length, totalItems);
      showingText.textContent = `Showing ${start} to ${end} of ${totalItems} entries`;
      
      
      renderPagination();
    
    } catch (err) {
      console.error('Error loading expense:', err);
      alert('Gagal memuat data pengeluaran.');
    }
  }
  
  
  function renderPagination() {
    const totalPages = Math.ceil(totalItems / itemsPerPage);
    
    if (totalPages <= 1) return;
    
    paginationControls.innerHTML = '';
    
    const prevBtn = document.createElement('button');
    prevBtn.textContent = 'Previous';
    prevBtn.className = 'px-3 py-1 border rounded text-xs bg-gray-50 text-gray-600';
    if (currentPage === 1) prevBtn.disabled = true;
    prevBtn.addEventListener('click', () => {
      if (currentPage > 1) {
        currentPage--;
        loadExpense();
      }
    });
    paginationControls.appendChild(prevBtn);
    
    const addPageButton = (page) => {
      const pageBtn = document.createElement('button');
      pageBtn.textContent = page;
      pageBtn.className = 'px-3 py-1 border rounded text-xs';
      if (page === currentPage) {
        pageBtn.className += ' bg-dusty-pink text-white font-bold';
      } else {
        pageBtn.className += ' bg-white text-gray-600';
      }
      pageBtn.addEventListener('click', () => {
        currentPage = page;
        loadExpense();
      });
      paginationControls.appendChild(pageBtn);
    };
    
    const addEllipsis = () => {
      const ellipsis = document.createElement('span');
      ellipsis.textContent = '...';
      ellipsis.className = 'px-3 py-1 text-xs text-gray-600';
      paginationControls.appendChild(ellipsis);
    };
    
    if (totalPages <= 4) {
      for (let i = 1; i <= totalPages; i++) {
        addPageButton(i);
      }
    } else {
      if (currentPage <= 3) {
        addPageButton(1);
        addPageButton(2);
        addPageButton(3);
        addPageButton(4);
        addEllipsis();
        addPageButton(totalPages);
      } else if (currentPage >= totalPages - 2) {
        addPageButton(1);
        addEllipsis();
        addPageButton(totalPages - 3);
        addPageButton(totalPages - 2);
        addPageButton(totalPages - 1);
        addPageButton(totalPages);
      } else {
        addPageButton(1);
        addEllipsis();
        addPageButton(currentPage - 1);
        addPageButton(currentPage);
        addPageButton(currentPage + 1);
        addEllipsis();
        addPageButton(totalPages);
      }
    }
    
    const nextBtn = document.createElement('button');
    nextBtn.textContent = 'Next';
    nextBtn.className = 'px-3 py-1 border rounded text-xs bg-gray-50 text-gray-600';
    if (currentPage === totalPages) nextBtn.disabled = true;
    nextBtn.addEventListener('click', () => {
      if (currentPage < totalPages) {
        currentPage++;
        loadExpense();
      }
    });
    paginationControls.appendChild(nextBtn);
  }
  
  
  async function deleteExpense(id) {
    if (!supabaseClient) return;
  
    try {
      const { error } = await supabaseClient
        .from('tabel_pengeluaran')
        .delete()
        .eq('pengeluaran_id', id);
    
      if (error) throw error;
    
      
      const totalPages = Math.ceil((totalItems - 1) / itemsPerPage);
      if (currentPage > totalPages) currentPage = totalPages || 1;
      
      loadExpense();
    } catch (err) {
      console.error('Error deleting expense:', err);
      alert('Gagal menghapus data.');
    }
  }
  
  
  async function openEditModal(id) {
    if (!supabaseClient) return;
  
    try {
      const { data, error } = await supabaseClient
        .from('tabel_pengeluaran')
        .select('*')
        .eq('pengeluaran_id', id)
        .single();
    
      if (error) throw error;
    
      document.getElementById('editExpenseDate').value = data.tanggal || '';
      document.getElementById('editExpenseAmount').value = data.jumlah ? formatRupiah(data.jumlah.toString()) : '';
      document.getElementById('editExpenseNote').value = data.keterangan || '';
    
      isEditMode = true;
      editId = id;
    
      toggleModal(editModal, true);
    
    } catch (err) {
      console.error('Error opening edit modal:', err);
      alert('Gagal mengambil data untuk diedit.');
    }
  }
  
  
  function closeEditModal() {
    toggleModal(editModal, false);
    isEditMode = false;
    editId = null;
  }
  
  
  addBtn.addEventListener('click', () => {
    toggleModal(modal, true);
    
    document.getElementById('expenseDate').valueAsDate = new Date();
  });
  
  
  modalClose.addEventListener('click', () => toggleModal(modal, false));
  modalCancel.addEventListener('click', () => toggleModal(modal, false));
  successOk.addEventListener('click', () => toggleModal(successModal, false));
  
  editModalClose.addEventListener('click', closeEditModal);
  editModalCancel.addEventListener('click', closeEditModal);
  
  deleteConfirmNo.addEventListener('click', () => toggleModal(deleteConfirmModal, false));
  deleteConfirmYes.addEventListener('click', () => {
    if (currentDeleteId) {
      deleteExpense(currentDeleteId);
      currentDeleteId = null;
    }
    toggleModal(deleteConfirmModal, false);
  });
  
  entriesSelect.addEventListener('change', (e) => {
    itemsPerPage = parseInt(e.target.value);
    currentPage = 1; 
    loadExpense();
  });
  
  modalForm.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    if (!supabaseClient) {
      alert('Supabase belum diinisialisasi.');
      return;
    }
  
    const dateVal = document.getElementById('expenseDate').value;
    const amountVal = document.getElementById('expenseAmount').value.replace(/[^0-9]/g, '');
    const noteVal = document.getElementById('expenseNote').value;
  
    if (!dateVal || !amountVal) {
      alert('Tanggal dan Jumlah wajib diisi.');
      return;
    }
  
    try {
      const { error } = await supabaseClient.from('tabel_pengeluaran').insert([
        { tanggal: dateVal, jumlah: parseInt(amountVal), keterangan: noteVal }
      ]);
  
      if (error) throw error;
  
      toggleModal(modal, false);
      toggleModal(successModal, true);
      modalForm.reset();
      
      currentPage = 1;
      loadExpense();
    } catch (err) {
      console.error('Error saving expense:', err);
      alert('Gagal menyimpan data pengeluaran.');
    }
  });
  
  editModalForm.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    if (!supabaseClient || !isEditMode || !editId) {
      alert('Mode edit tidak aktif.');
      return;
    }
  
    const dateVal = document.getElementById('editExpenseDate').value;
    const amountRaw = document.getElementById('editExpenseAmount').value;
    const amountVal = amountRaw.replace(/[^0-9]/g, ''); 
    const noteVal = document.getElementById('editExpenseNote').value;
  
    if (!dateVal || !amountVal) {
      alert('Tanggal dan Jumlah wajib diisi.');
      return;
    }
  
    try {
      const { error } = await supabaseClient
        .from('tabel_pengeluaran')
        .update({ tanggal: dateVal, jumlah: parseInt(amountVal), keterangan: noteVal })
        .eq('pengeluaran_id', editId);
  
      if (error) throw error;
  
      closeEditModal();
      toggleModal(successModal, true); 
      loadExpense();
  
    } catch (err) {
      console.error('Error updating expense:', err);
      alert('Gagal mengupdate data.');
    }
  });
  
  expenseBody.addEventListener('click', (e) => {
    if (e.target.classList.contains('delete-expense-btn')) {
      currentDeleteId = e.target.dataset.id;
      toggleModal(deleteConfirmModal, true); 
    } else if (e.target.classList.contains('edit-expense-btn')) {
      const id = e.target.dataset.id;
      openEditModal(id);
    }
  });
  
  window.addEventListener('click', (e) => {
    if (e.target === modal) toggleModal(modal, false);
    if (e.target === successModal) toggleModal(successModal, false);
    if (e.target === editModal) toggleModal(editModal, false); // BARU
    if (e.target === deleteConfirmModal) toggleModal(deleteConfirmModal, false);
  });
  
  document.addEventListener('DOMContentLoaded', () => {
    if (initializeSupabase()) {
      loadExpense();
    }
  });
</script>

</body>
</html>