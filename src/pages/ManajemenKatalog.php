<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Manajemen Katalog - Lily Florist</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* Custom font mimics */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500;600&display=swap');
    
    body { font-family: 'Inter', sans-serif; }
    .font-serif { font-family: 'Playfair Display', serif; }
    
    .soft-card { 
        background-color: #fcf9f8; 
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .table-header-pink { background-color: #cf9c9f; color: #543233; }

    .btn-pink {
      background-color: #cf9c9f;
      color: #543233;
      transition: background-color 0.2s;
    }
    .btn-pink:hover { background-color: #c28b8e; }
  </style>
</head>
<body class="antialiased min-h-screen font-sans text-stone-700 bg-white">

  <div class="flex">
    <aside class="w-64 bg-[#d9a4a7] text-[#6b4042] flex-shrink-0 min-h-screen">
      <div class="px-6 py-8">
        <div class="flex items-center justify-between">
          <div class="text-2xl font-serif font-semibold">Lily Florist</div>
          <button class="p-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
          </button>
        </div>

        <nav class="mt-8">
          <a class="flex items-center gap-3 px-3 py-2 rounded-md hover:bg-[#efdcdd]" href="DashboardAdmin.php">
            <svg class="w-5 h-5 text-[#8a595b]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/></svg>
            <span class="text-xs">Dashboard</span>
          </a>

          <div class="mt-6 text-sm">
            <div class="text-xs uppercase tracking-wide mb-2">Katalog</div>
            <a class="flex items-center gap-3 bg-[#eecfd0] px-3 py-2 rounded-md text-sm shadow-inner" href="#">
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

    <div class="flex-1 min-h-screen flex flex-col">
      <header class="h-16 bg-[#fcf9f8] border-b border-[#e7e5e4] flex items-center px-8">
        <div class="text-base font-medium text-[#a8a29e]">Selamat Datang, Administrator</div>
      </header>

      <main class="p-8 bg-white">
        <div class="max-w-5xl">
          <h1 class="text-2xl font-bold text-[#44403c] mb-6">Manajemen Katalog</h1>

          <section class="soft-card p-6 min-h-[400px]">
            <h2 class="text-lg font-bold text-[#44403c] mb-4">Data Katalog</h2>
            
            <div class="flex items-center justify-between mb-4">
              <div class="w-64">
                <div class="relative">
                  <select id="catalogSelect" class="w-full appearance-none pl-3 pr-8 py-2 border border-[#78716c] rounded bg-white text-sm text-stone-700 focus:outline-none shadow-sm">
                    <option value="">Pilih Data</option>
                    <option value="buket">Buket Bunga</option>
                    <option value="papan">Bunga Papan</option>
                    <option value="standing">Standing Flower</option>
                    <option value="dekorasi">Dekorasi Bunga</option>
                    <option value="box">Bunga Box</option>
                    <option value="meja">Bunga Meja</option>
                    <option value="mobil">Bunga Mobil</option>
                    <option value="duka">Karangan Duka</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2">
                    <svg class="w-4 h-4 text-stone-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                  </div>
                </div>
              </div>

              <button id="addBtn" class="bg-[#d9a4a7] hover:bg-[#cd9295] text-[#7b4f4f] px-4 py-2 rounded text-sm font-semibold flex items-center gap-2 shadow-sm transition-colors">
                <span>+</span> Tambah Data
              </button>
            </div>

            <div class="overflow-x-auto border border-[#e5d5d5] rounded-t-md">
              <table class="w-full text-sm text-left" id="catalogTable">
                <thead class="table-header-pink uppercase text-xs font-bold tracking-wider">
                  <tr>
                    <th class="px-6 py-4 w-12 text-center border-r border-[#c29598]">No</th>
                    <th class="px-6 py-4 w-32 border-r border-[#c29598]">Gambar</th>
                    <th class="px-6 py-4 w-32 border-r border-[#c29598]">Kode Paket</th>
                    <th class="px-6 py-4 w-24 border-r border-[#c29598]">Stok</th>
                    <th class="px-6 py-4 border-r border-[#c29598]">Deskripsi</th>
                    <th class="px-6 py-4 w-24 text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody id="catalogBody" class="bg-[#fcfaf9] divide-y divide-[#efe6e6]">
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>

  <div id="addModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4">
    <div class="bg-white max-w-3xl w-full rounded-xl shadow-lg overflow-hidden">
      <div class="p-6">
        <div class="flex items-start justify-between">
          <h3 class="text-lg font-semibold text-stone-800">Tambah Katalog</h3>
          <button id="addModalClose" class="text-stone-500 hover:text-stone-800">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
          </button>
        </div>

        <form id="addForm" class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
          <div class="md:col-span-2 space-y-3">
            <label class="text-sm text-stone-700">Kode Paket</label>
            <input id="addKode" class="w-full border border-gray-300 rounded px-3 py-2 text-sm" required>

            <label class="text-sm text-stone-700">Deskripsi produk</label>
            <textarea id="addDesc" rows="6" class="w-full border border-gray-300 rounded px-3 py-2 text-sm"></textarea>
            
            <label for="kategori" class="block font-semibold mb-1">Kategori Katalog:</label>
            <select id="kategori" name="kategori" class="border rounded px-3 py-2 w-full mb-6" required>
              <option value="" disabled selected>Pilih Data</option>
              <option value="buket">Buket Bunga</option>
              <option value="papan">Bunga Papan</option>
              <option value="standing">Standing Flower</option>
              <option value="dekorasi">Dekorasi Bunga</option>
              <option value="box">Bunga Box</option>
              <option value="meja">Bunga Meja</option>
              <option value="mobil">Bunga Mobil</option>
              <option value="duka">Karangan Duka</option>
            </select>
          </div>


          <div class="space-y-3">
            <label class="text-sm text-stone-700">Gambar header</label>
            <input id="addImgInput" type="file" accept="image/*" class="text-sm w-full" />
            <div id="addImgPreview" class="w-full h-28 bg-gray-100 rounded flex items-center justify-center text-xs text-gray-400 overflow-hidden">Preview</div>

            <label class="text-sm text-stone-700">Stok</label>
            <select id="addStok" class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
              <option>Tersedia</option>
              <option>Tidak Tersedia</option>
            </select>

            <div class="flex gap-2 justify-end pt-2">
              <button type="button" id="addCancel" class="px-3 py-1.5 rounded text-sm bg-white border border-gray-300 text-stone-700">Kembali</button>
              <button type="submit" class="px-3 py-1.5 rounded text-sm bg-[#d9a4a7] text-[#7b4f4f]">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

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


<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>

<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>

<script>
  const supabaseUrl = 'https://uorxpavndirbgapqzugn.supabase.co/'; 
  const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVvcnhwYXZuZGlyYmdhcHF6dWduIiwicm9sZSI6ImFub24iLCJpYXQiOjE3NjQwNDAxOTQsImV4cCI6MjA3OTYxNjE5NH0.ebEFOmTgUFwOefA9FvVAxmm9jcTDVLDi5OLx_3_wh8k'; // Ganti dengan kunci anon Anda
  let supabaseClient;

  function initializeSupabase() {
    if (typeof supabase === 'undefined') {
      console.error('Supabase library not loaded.');
      alert('Gagal memuat library Supabase.');
      return false;
    }
    supabaseClient = supabase.createClient(supabaseUrl, supabaseKey);
    return true;
  }

  // Elemen DOM
  const catalogBody = document.getElementById('catalogBody');
  const catalogTable = document.getElementById('catalogTable'); 
  const addBtn = document.getElementById('addBtn');
  const addModal = document.getElementById('addModal');
  const addModalClose = document.getElementById('addModalClose');
  const addCancel = document.getElementById('addCancel');
  const addForm = document.getElementById('addForm');
  const addImgInput = document.getElementById('addImgInput');
  const addImgPreview = document.getElementById('addImgPreview');
  const catalogSelect = document.getElementById('catalogSelect'); 

  const deleteConfirmModal = document.getElementById('deleteConfirmModal');
  const deleteConfirmNo = document.getElementById('deleteConfirmNo');
  const deleteConfirmYes = document.getElementById('deleteConfirmYes');
  let currentDeleteId = null;
  let currentDeleteImgUrl = null;

  let isEditMode = false;
  let editId = null;
  let currentFilter = ''; 

  function toggleModal(show) {
    if (show) {
      addModal.classList.remove('hidden');
      addModal.classList.add('flex');
    } else {
      addModal.classList.add('hidden');
      addModal.classList.remove('flex');
      addForm.reset();
      addImgPreview.innerHTML = 'Preview';
      isEditMode = false;
      editId = null;
    }
  }

  function toggleDeleteModal(show) {
    if (show) {
      deleteConfirmModal.classList.remove('hidden');
      deleteConfirmModal.classList.add('flex');
    } else {
      deleteConfirmModal.classList.add('hidden');
      deleteConfirmModal.classList.remove('flex');
      currentDeleteId = null;
      currentDeleteImgUrl = null;
    }
  }

  function formatRupiah(angka) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
      let separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
    return 'Rp.' + rupiah + ',00';
  }

  async function loadCatalog(filterKategori = '') {
    if (!supabaseClient) return;
    try {
      if (!filterKategori) {
        catalogBody.innerHTML = '';
        catalogTable.style.display = 'none'; 
        addBtn.style.display = 'none'; // Sembunyikan tombol tambah data
        return;
      }

      catalogTable.style.display = 'table'; 
      addBtn.style.display = 'flex'; // Tampilkan tombol tambah data

      let query = supabaseClient
        .from('tabel_katalog')
        .select('*')
        .order('created_at', { ascending: false });

      if (filterKategori) {
        query = query.eq('kategori', filterKategori);
      }

      const { data, error } = await query;
      if (error) {
        if (error.code === 'PGRST116') { 
          alert('Akses ditolak. Periksa kunci API atau policy RLS di Supabase.');
        } else {
          alert('Gagal memuat data: ' + error.message);
        }
        throw error;
      }

      catalogBody.innerHTML = '';

      if (data.length === 0) {
        catalogBody.innerHTML = `
          <tr class="h-24">
            <td colspan="6">Tidak ada data untuk kategori ini.</td>
          </tr>`;
        return;
      }

      data.forEach((item, index) => {
        const imgHtml = item.gambar_url
          ? `<div class="w-16 h-10 mx-auto bg-gray-200 overflow-hidden"><img src="${item.gambar_url}" class="w-full h-full object-cover"></div>`
          : 'No Img';

        const tr = document.createElement('tr');
        tr.className = "hover:bg-[#f5f0f0]";
        tr.innerHTML = `
          <td class="px-6 py-4 text-center font-medium text-stone-600 border-r border-[#efe6e6]">${index + 1}</td>
          <td class="px-6 py-4 border-r border-[#efe6e6]">${imgHtml}</td>
          <td class="px-6 py-4 text-stone-600 border-r border-[#efe6e6]">${item.kode_paket}</td>
          <td class="px-6 py-4 text-stone-600 border-r border-[#efe6e6]">${item.stok}</td>
          <td class="px-6 py-4 text-stone-600 border-r border-[#efe6e6]">${item.deskripsi || '-'}</td>
          <td class="px-6 py-4 text-center">
            <div class="flex justify-center gap-2">
              <button class="edit-btn bg-yellow-400 hover:bg-yellow-500 text-white text-[10px] px-3 py-1 rounded shadow-sm font-bold tracking-wide" data-id="${item.kode_paket}">Edit</button>
              <button class="delete-btn bg-red-500 hover:bg-red-600 text-white text-[10px] px-3 py-1 rounded shadow-sm font-bold tracking-wide" data-id="${item.kode_paket}" data-img="${item.gambar_url}">Hapus</button>
            </div>
          </td>
        `;
        catalogBody.appendChild(tr);
      });
    } catch (err) {
      console.error('Error loading catalog:', err);
    }
  }

  async function deleteCatalog(id, imgUrl) {
    if (!supabaseClient) return;
    try {
      if (imgUrl) {
        const filename = imgUrl.split('/').pop();
        if (filename) {
          await supabaseClient.storage.from('catalog-images').remove([filename]);
        }
      }
      const { error } = await supabaseClient.from('tabel_katalog').delete().eq('kode_paket', id);
      if (error) {
        if (error.code === 'PGRST116') {
          alert('Akses ditolak. Periksa kunci API atau policy RLS di Supabase.');
        } else {
          alert('Gagal menghapus data: ' + error.message);
        }
        throw error;
      }
      loadCatalog(currentFilter);
    } catch (err) {
      console.error('Error deleting catalog:', err);
    }
  }

  async function openEditModal(id) {
    if (!supabaseClient) return;
    try {
      const { data, error } = await supabaseClient
        .from('tabel_katalog')
        .select('*')
        .eq('kode_paket', id)
        .single();
      if (error) {
        if (error.code === 'PGRST116') {
          alert('Akses ditolak. Periksa kunci API atau policy RLS di Supabase.');
        } else {
          alert('Gagal mengambil data untuk diedit: ' + error.message);
        }
        throw error;
      }

      document.getElementById('addKode').value = data.kode_paket;
      document.getElementById('addDesc').value = data.deskripsi || '';
      document.getElementById('addStok').value = data.stok || '';
      document.getElementById('kategori').value = data.kategori || '';
      if (data.gambar_url) {
        addImgPreview.innerHTML = `<img src="${data.gambar_url}" class="w-full h-full object-cover" />`;
      } else {
        addImgPreview.innerHTML = 'Preview';
      }

      isEditMode = true;
      editId = id;
      toggleModal(true);
    } catch (err) {
      console.error('Failed to load data for editing:', err);
    }
  }

  addBtn.addEventListener('click', () => {
    toggleModal(true);
    isEditMode = false;
    editId = null;
    addForm.reset();
    addImgPreview.innerHTML = 'Preview';
  });

  addModalClose.addEventListener('click', () => toggleModal(false));
  addCancel.addEventListener('click', () => toggleModal(false));

  catalogSelect.addEventListener('change', (e) => {
    currentFilter = e.target.value;
    loadCatalog(currentFilter);
  });

  addImgInput.addEventListener('change', (e) => {
    const file = e.target.files && e.target.files[0];
    if (!file) return;
    const url = URL.createObjectURL(file);
    addImgPreview.innerHTML = `<img src="${url}" class="w-full h-full object-cover">`;
  });

  catalogBody.addEventListener('click', async (e) => {
    if (e.target.classList.contains('edit-btn')) {
      const id = e.target.dataset.id;
      await openEditModal(id);
    }
    else if (e.target.classList.contains('delete-btn')) {
      currentDeleteId = e.target.dataset.id;
      currentDeleteImgUrl = e.target.dataset.img;
      toggleDeleteModal(true); 
    }
  });

  deleteConfirmNo.addEventListener('click', () => toggleDeleteModal(false));
  deleteConfirmYes.addEventListener('click', () => {
    if (currentDeleteId) {
      deleteCatalog(currentDeleteId, currentDeleteImgUrl);
      currentDeleteId = null;
      currentDeleteImgUrl = null;
    }
    toggleDeleteModal(false);
  });

  addForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    if (!supabaseClient) {
      alert('Supabase belum diinisialisasi.');
      return;
    }

    const kode = document.getElementById('addKode').value.trim();
    const desc = document.getElementById('addDesc').value.trim();
    const stok = document.getElementById('addStok').value.trim();
    const kategori = document.getElementById('kategori').value.trim();
    const file = addImgInput.files[0];

    if (!kode) {
      alert('Kode Paket harus diisi.');
      return;
    }

    try {
      let gambarUrl = null;
      if (file) {
        const fileName = `${Date.now()}_${file.name}`;
        const { error: uploadError } = await supabaseClient.storage.from('catalog-images').upload(fileName, file);
        if (uploadError) {
          if (uploadError.message.includes('401')) {
            alert('Akses storage ditolak. Periksa policy storage di Supabase.');
          } else {
            alert('Gagal upload gambar: ' + uploadError.message);
          }
          throw uploadError;
        }
        gambarUrl = `${supabaseUrl}/storage/v1/object/public/catalog-images/${fileName}`;
      }

      if (isEditMode && editId) {
        const updateData = {
          deskripsi: desc,
          stok: stok,
          kategori: kategori,
        };
        if (gambarUrl !== null) updateData.gambar_url = gambarUrl;

        const { error } = await supabaseClient.from('tabel_katalog').update(updateData).eq('kode_paket', editId);
        if (error) {
          if (error.code === 'PGRST116') {
            alert('Akses ditolak. Periksa kunci API atau policy RLS di Supabase.');
          } else {
            alert('Gagal update data: ' + error.message);
          }
          throw error;
        }

        alert('Data berhasil diperbarui.');
      } else {
        const { error } = await supabaseClient.from('tabel_katalog').insert([
          {
            kode_paket: kode,
            deskripsi: desc,
            stok: stok,
            kategori: kategori,
            gambar_url: gambarUrl
          }
        ]);
        if (error) {
          if (error.code === 'PGRST116') {
            alert('Akses ditolak. Periksa kunci API atau policy RLS di Supabase.');
          } else {
            alert('Gagal tambah data: ' + error.message);
          }
          throw error;
        }

        alert('Data berhasil ditambahkan.');
      }

      toggleModal(false);
      addForm.reset();
      addImgPreview.innerHTML = 'Preview';
      isEditMode = false;
      editId = null;
      loadCatalog(currentFilter);

    } catch (err) {
      console.error('Error saving catalog:', err);
    }
  });

  document.addEventListener('DOMContentLoaded', () => {
    if (initializeSupabase()) {
      loadCatalog();
    }
  });
</script>

</body>
</html>