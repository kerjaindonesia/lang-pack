<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'repository', language 'id', version '3.9'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Pemilih berkas yang dapat diakses';
$string['activaterep'] = 'Repositori aktif';
$string['activerepository'] = 'Pengaya repositori yang tersedia';
$string['activitybackup'] = 'Backup aktivitas';
$string['add'] = 'Tambah';
$string['addfile'] = 'Tambah...';
$string['addfiletext'] = 'Tambahkan file';
$string['addplugin'] = 'Tambahkan repositori pengaya';
$string['aliaseschange'] = 'Terdapat {$a} tautan ke berkas ini. Jika Anda melanjutkan, maka lokasi yang saat ini tertaut ke berkas akan diperbarui secara otomatis untuk menggunakan salinan berkas.';
$string['allowexternallinks'] = 'Izinkan tautan eksternal';
$string['areacategoryintro'] = 'Pengenalan kategori';
$string['areacourseintro'] = 'Pengenalan pelajaran';
$string['areacourseoverviewfiles'] = 'Gambar mata pelajaran';
$string['areamainfile'] = 'File utama';
$string['arearoot'] = 'Sistem';
$string['areauserbackup'] = 'Backup pengguna';
$string['areauserdraft'] = 'Draf';
$string['areauserpersonal'] = 'File Pribadi';
$string['areauserprofile'] = 'Profil';
$string['attachedfiles'] = 'File terlampir';
$string['attachment'] = 'Lampiran';
$string['author'] = 'Penulis';
$string['automatedbackup'] = 'Backup otomatis';
$string['back'] = 'Kembali';
$string['backtodraftfiles'] = 'Kembali ke pengelola berkas draf';
$string['cachecleared'] = 'Berkas tembolok dihapus';
$string['cacheexpire'] = 'Tembolok kedaluwarsa';
$string['cannotaccessparentwin'] = 'Saat menggunakan HTTPS, repositori tidak disegarkan secara otomatis. Sebagai gantinya, Anda harus kembali ke pemilih berkas dan memilih repositori lagi.';
$string['cannotdelete'] = 'Tidak dapat menghapus file ini.';
$string['cannotdownload'] = 'Tidak dapat mengunduh file ini.';
$string['cannotdownloaddir'] = 'Tidak dapat mengunduh folder ini';
$string['cannotinitplugin'] = 'Gagal memanggil plugin_init';
$string['cannotunzipcontentunreadable'] = 'Tidak dapat meng-unzip file karena isinya tidak dapat dibaca.';
$string['cannotunzipquotaexceeded'] = 'Tidak dapat mengurai berkas zip ini karena ukuran maksimum yang diizinkan di area draf ini akan terlampaui.';
$string['choosealink'] = 'Pilih tautan...';
$string['chooselicense'] = 'Pilih lisensi';
$string['chooselicense_help'] = 'Ikuti tautan berikut untuk informasi lebih lanjut tentang opsi lisensi yang tersedia:';
$string['cleancache'] = 'Bersihkan berkas tembolok saya';
$string['close'] = 'Tutup';
$string['commonrepositorysettings'] = 'Setelan repositori umum';
$string['configallowexternallinks'] = 'Opsi ini memungkinkan semua pengguna untuk memilih apakah media eksternal disalin ke Moodle atau tidak. Jika ini tidak aktif maka media selalu disalin ke Moodle (ini biasanya yang terbaik untuk keseluruhan integritas dan keamanan data). Jika ini aktif maka pengguna dapat memilih setiap kali mereka menambahkan media ke teks.';
$string['configcacheexpire'] = 'Jumlah waktu daftar berkas disimpan di tembolok secara lokal (dalam detik) saat menjelajahi repositori eksternal.';
$string['configgetfiletimeout'] = 'Waktu habis dalam hitungan detik untuk mengunduh berkas eksternal ke dalam Moodle.';
$string['configsaved'] = 'Konfigurasi telah tersimpan!';
$string['configsyncfiletimeout'] = 'Waktu habis dalam hitungan detik untuk menyinkronkan ukuran berkas eksternal.';
$string['configsyncimagetimeout'] = 'Waktu habis dalam hitungan detik untuk mengunduh berkas gambar dari repositori eksternal selama sinkronisasi.';
$string['confirmdelete'] = 'Apakah Anda yakin ingin menghapus repositori {$a}? Jika Anda memilih "Lanjutkan dan unduh", referensi file ke konten eksternal akan diunduh ke Moodle. Ini bisa memakan waktu lama untuk diproses.';
$string['confirmdeletefile'] = 'Anda yakin ingin menghapus file ini?';
$string['confirmdeletefilewithhref'] = 'Anda yakin ingin menghapus berkas ini? Terdapat {$a} tautan ke berkas ini. Jika Anda melanjutkan, maka lokasi yang saat ini tertaut ke berkas akan diperbarui secara otomatis untuk menggunakan salinan berkas.';
$string['confirmdeletefolder'] = 'Anda yakin ingin menghapus folder ini? Semua berkas dan subfolder akan dihapus.';
$string['confirmdeleteselectedfile'] = 'Apakah Anda yakin akan menghapus file {$a} ?';
$string['confirmremove'] = 'Anda yakin ingin menghapus pengaya repositori ini, opsinya, dan <strong> semua modelnya </strong> - {$a}? Jika Anda memilih "Lanjutkan dan unduh", referensi berkas ke konten eksternal akan diunduh ke Moodle. Ini bisa memakan waktu lama untuk diproses.';
$string['confirmrenamefile'] = 'Apakah Anda yakin untuk mengganti nama/memindahkan file ini?';
$string['confirmrenamefolder'] = 'Apakah Anda yakin ingin memindahkan/mengganti nama folder ini? Setiap lokasi yang saat ini tertaut ke berkas dalam folder ini akan diperbarui secara otomatis untuk menggunakan salinan berkas.';
$string['continueuninstall'] = 'Lanjutkan';
$string['continueuninstallanddownload'] = 'Lanjutkan dan unduh';
$string['copying'] = 'Menyalin';
$string['coursebackup'] = 'Backup kelas';
$string['create'] = 'Buat';
$string['createfolder'] = 'Buat Folder';
$string['createfolderfail'] = 'Gagal membuat folder ini';
$string['createfoldersuccess'] = 'Berhasil membuat folder';
$string['createinstance'] = 'Buat model repositori';
$string['createrepository'] = 'Buat model repositori';
$string['createxxinstance'] = 'Buat model "{$a}"';
$string['date'] = 'Tanggal';
$string['datecreated'] = 'Dibuat';
$string['deleted'] = 'Repositori dihapus';
$string['deleterepository'] = 'Hapus repositori ini';
$string['detailview'] = 'Lihat Detail';
$string['dimensions'] = 'Ukuran';
$string['disabled'] = 'Tidak Aktif';
$string['displayasdetails'] = 'Tampilkan sebagai detail file';
$string['displayasicons'] = 'Tampilkan sebagai berkas ikon';
$string['displayastree'] = 'Tampilkan sebagai pohon berkas';
$string['displaydetails'] = 'Tampilkan folder dengan berkas rinci';
$string['displayicons'] = 'Tampilkan folder dengan berkas ikon';
$string['displaytree'] = 'Tampikan folder sebagai pohon berkas';
$string['download'] = 'Unduh';
$string['downloadallfiles'] = 'Unduh semua file';
$string['downloadfolder'] = 'Unduh Semua';
$string['downloadsucc'] = 'File telah terunduh dengan sukses';
$string['draftareanofiles'] = 'Tidak dapat mengunduh karena tidak ada file yang dilampirkan';
$string['editrepositoryinstance'] = 'Edit model repositori';
$string['emptylist'] = 'Daftar kosong';
$string['emptytype'] = 'Tidak dapat membuat jenis repositori: nama jenis kosong';
$string['enablecourseinstances'] = 'Izinkan pengguna untuk menambahkan model repositori ke dalam kursus';
$string['enableuserinstances'] = 'Izinkan pengguna untuk menambahkan model repositori ke dalam konteks pengguna';
$string['enter'] = 'Masuk';
$string['entername'] = 'Mohon masukkan nama folder';
$string['enternewname'] = 'Mohon masukkan nama file baru';
$string['error'] = 'Terjadi kesalahan yang tidak diketahui!';
$string['errordoublereference'] = 'Tidak dapat menimpa berkas dengan tautan karena tautan ke berkas ini sudah ada.';
$string['errornotyourfile'] = 'Anda hanya dapat memilih file yang Anda tambahkan.';
$string['errorpostmaxsize'] = 'Berkas yang Anda coba unggah terlalu besar untuk diproses oleh server.';
$string['erroruniquename'] = 'Nama model repositori harus unik';
$string['errorwhilecommunicatingwith'] = 'Kesalahan saat berkomunikasi dengan repositori \'{$a}\'.';
$string['errorwhiledownload'] = 'Terjadi kesalahan saat mengunduh berkas: {$a}';
$string['existingrepository'] = 'Repositori ini sudah ada';
$string['federatedsearch'] = 'Pencarian gabungan';
$string['fileexists'] = 'Nama berkas sudah digunakan, silakan gunakan nama lain';
$string['fileexistsdialog_editor'] = 'Berkas dengan nama itu telah dilampirkan ke teks yang sedang Anda edit.';
$string['fileexistsdialog_filemanager'] = 'Berkas dengan nama itu telah dilampirkan';
$string['fileexistsdialogheader'] = 'File telah ada';
$string['filename'] = 'Nama file';
$string['filenotnull'] = 'Anda harus memilih file yang akan diupload';
$string['filepicker'] = 'Pilih File';
$string['filesaved'] = 'Berkas telah disimpan';
$string['filesizenull'] = 'Ukuran berkas tidak dapat ditentukan';
$string['folderexists'] = 'Nama folder telah digunakan, silakan pilih nama lain';
$string['foldernotfound'] = 'Folder tidak dapat ditemukan';
$string['folderrecurse'] = 'Folder tidak dapat dipindahkan ke subfolder sendiri';
$string['getfile'] = 'Pilih file ini';
$string['getfiletimeout'] = 'Dapatkan batas waktu berkas';
$string['help'] = 'Bantuan';
$string['iconview'] = 'Lihat sebagai ikon';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'Model';
$string['instancedeleted'] = 'Model dihapus';
$string['instances'] = 'Model repositori';
$string['instancesforcourses'] = '{$a} Model umum di seluruh kursus';
$string['instancesforsite'] = '{$a} Model umum di seluruh situs';
$string['instancesforusers'] = '{$a} Model pribadi pengguna';
$string['invalidfiletype'] = '{$ a} jenis file tidak dapat diterima.';
$string['invalidjson'] = 'String JSON tidak valid';
$string['invalidparams'] = 'Parameter tidak valid';
$string['invalidplugin'] = 'Plugin {$a} repositori tidak valid';
$string['invalidrepositoryid'] = 'ID repositori salah';
$string['isactive'] = 'Aktif?';
$string['keyword'] = 'Kata kunci';
$string['lastmodified'] = 'Terakhir dimodifikasi';
$string['license'] = 'Lisensi';
$string['linkexternal'] = 'Tautan eksternal';
$string['listview'] = 'Tampilan daftar';
$string['loading'] = 'Memuat...';
$string['login'] = 'Masuk ke akun Anda';
$string['logintoaccount'] = 'Masuk ke akun {$a} Anda';
$string['logout'] = 'Keluar';
$string['lostsource'] = 'Kesalahan. Sumber tidak ada. {$a}';
$string['makefilecontrolledlink'] = 'Buat tautan yang dikontrol akses ke berkas';
$string['makefileinternal'] = 'Buat salinan berkas';
$string['manage'] = 'Kelola repositori';
$string['manageinstances'] = 'Kelola model';
$string['manageurl'] = 'Kelola';
$string['manageuserrepository'] = 'Kelola repositori individu';
$string['missingsourcekey'] = 'Kunci sumber tidak ada. Kunci ini juga harus disediakan untuk mengambil berkas.';
$string['moving'] = 'Bergerak';
$string['name'] = 'Nama';
$string['newfolder'] = 'Folder baru';
$string['newfoldername'] = 'Nama folder baru';
$string['noenter'] = 'Tidak ada yang masuk';
$string['nofilesattached'] = 'Tidak ada file yang dilampirkan';
$string['nofilesavailable'] = 'Tidak ada file tersedia';
$string['nofilesselected'] = 'Tidak ada file yang dipilih';
$string['nolicenses'] = 'Tidak ada lisensi yang tersedia';
$string['nomorefiles'] = 'Tidak ada lagi lampiran yang diizinkan';
$string['nopathselected'] = 'Belum ada pemilihan jalur tujuan (klik dua kali simpul pohon untuk memilih)';
$string['nopermissiontoaccess'] = 'Tidak ada izin untuk mengakses repositori ini.';
$string['norepositoriesavailable'] = 'Maaf, tidak ada repositori Anda saat ini yang dapat mengembalikan berkas dalam format yang diperlukan.';
$string['norepositoriesexternalavailable'] = 'Maaf, tidak ada repositori Anda saat ini yang dapat mengembalikan berkas eksternal.';
$string['noresult'] = 'Tidak ada hasil pencarian';
$string['notyourinstances'] = 'Anda tidak dapat melihat / mengedit model repositori pengguna lain';
$string['off'] = 'Diaktifkan tetapi disembunyikan';
$string['on'] = 'Aktif dan lihat';
$string['openpicker'] = 'Pilih sebuah file...';
$string['operation'] = 'Operasi';
$string['original'] = 'Asli';
$string['originalextensionchange'] = 'Ekstensi berkas asli telah dimodifikasi sebagai bagian dari perubahan nama berkas. Mengubah ekstensi dari ".{$a->originalextension}" menjadi ".{$a->newextension}" dapat mengakibatkan berkas tidak dapat dibuka.';
$string['originalextensionremove'] = 'Ekstensi berkas asli telah dihapus sebagai bagian dari perubahan nama berkas. Menghapus ekstensi ".{$a}" kemungkinan akan menghasilkan berkas yang tidak dapat dibuka.';
$string['overwrite'] = 'Timpa';
$string['overwriteall'] = 'Timpa semua';
$string['path'] = 'Jalur';
$string['plugin'] = 'Pengaya repositori';
$string['pluginerror'] = 'Kesalahan dalam pengaya repositori.';
$string['pluginname'] = 'Nama pengaya repositori';
$string['pluginnamehelp'] = 'Jika Anda membiarkannya kosong, nama default akan digunakan.';
$string['popup'] = 'Klik tombol "Masuk" untuk masuk';
$string['popupblockeddownload'] = 'Jendela unduhan diblokir, izinkan jendela sembulan, dan coba lagi.';
$string['preview'] = 'Pratinjau';
$string['privacy:metadata:repository'] = 'Komponen Repositori menyimpan jenis repositori di dalam subsistem inti.';
$string['privacy:metadata:repository_instances'] = 'Komponen pengaya Repositori menyimpan data model repositori pengguna dalam subsistem inti.';
$string['privacy:metadata:repository_instances:name'] = 'Nama tersuai dari model repositori.';
$string['privacy:metadata:repository_instances:password'] = 'Kata sandi opsional yang dikonfigurasi untuk model repositori.';
$string['privacy:metadata:repository_instances:timecreated'] = 'Tanggal/waktu pembuatan model repositori.';
$string['privacy:metadata:repository_instances:timemodified'] = 'Tanggal/waktu modifikasi model repositori.';
$string['privacy:metadata:repository_instances:typeid'] = 'Tipe ID dari model repositori.';
$string['privacy:metadata:repository_instances:userid'] = 'ID pengguna yang memiliki model repositori.';
$string['privacy:metadata:repository_instances:username'] = 'Nama pengguna opsional yang dikonfigurasi untuk model repositori.';
$string['privatefilesof'] = '{$a} file Privat';
$string['readonlyinstance'] = 'Anda tidak dapat mengedit/menghapus model hanya-baca';
$string['referencesexist'] = 'Terdapat {$a} tautan ke berkas ini';
$string['referenceslist'] = 'Tautan';
$string['refresh'] = 'Menyegarkan';
$string['refreshnonjsfilepicker'] = 'Harap tutup jendela ini dan segarkan pemilih file non-javascript';
$string['removed'] = 'Repositori dihapus';
$string['renameall'] = 'Ganti nama semua';
$string['renameto'] = 'Ganti nama menjadi "{$a}"';
$string['repositories'] = 'Repositori';
$string['repository'] = 'Repositori';
$string['repositorycourse'] = 'Repositori kelas';
$string['repositoryerror'] = 'Repositori jarak jauh mengembalikan kesalahan: {$a}';
$string['repositoryicon'] = 'Ikon repositori';
$string['save'] = 'Simpan';
$string['saveas'] = 'Simpan sebagai';
$string['saved'] = 'Tersimpan';
$string['saving'] = 'Menyimpan';
$string['search'] = 'Cari';
$string['searching'] = 'Cari di';
$string['searchrepo'] = 'Pencarian repositori';
$string['sectionbackup'] = 'Pencadangan bagian';
$string['select'] = 'Pilih';
$string['setmainfile'] = 'Pilih file utama';
$string['setmainfile_help'] = 'Jika ada beberapa berkas dalam folder, berkas utama adalah berkas yang muncul di halaman tampilan. Berkas lain seperti gambar atau video mungkin disematkan di dalamnya. Di manajer berkas, berkas utama ditunjukkan dengan judul yang dicetak tebal.';
$string['settings'] = 'Pengaturan';
$string['setupdefaultplugins'] = 'Menyiapkan pengaya repositori bawaan';
$string['siteinstances'] = 'Model repositori situs';
$string['size'] = 'Ukuran';
$string['sourcekeymismatch'] = 'URL sumber tidak cocok dengan kunci sumber.';
$string['submit'] = 'Kirim';
$string['sync'] = 'Sinkron';
$string['syncfiletimeout'] = 'Sinkron file waktu habis';
$string['syncimagetimeout'] = 'Sinkronkan batas waktu gambar';
$string['thumbview'] = 'Lihat sebagai ikon';
$string['title'] = 'Pilih file...';
$string['type'] = 'Tipe';
$string['typenotvisible'] = 'Tipe tidak terlihat';
$string['undisclosedreference'] = '(Dirahasiakan)';
$string['undisclosedsource'] = '(Dirahasiakan)';
$string['unknownoriginal'] = 'Tidak diketahui';
$string['unknownsource'] = 'Sumber tidak diketahui';
$string['unzipped'] = 'Ekstrak berhasil';
$string['upload'] = 'Unggah file ini';
$string['uploading'] = 'Mengunggah...';
$string['uploadsucc'] = 'Berkas telah berhasil diunggah';
$string['uselatestfile'] = 'Pilih file terbaru';
$string['usenonjsfilemanager'] = 'Buka File Manager di Window baru';
$string['usenonjsfilepicker'] = 'Buka pemilih berkas di jendela baru';
$string['usercontextrepositorydisabled'] = 'Anda tidak dapat mengedit repositori ini dalam konteks pengguna';
$string['wrongcontext'] = 'Anda tidak dapat mengakses konteks ini';
$string['xhtmlerror'] = 'Anda mungkin menggunakan tajuk ketat XHTML. Komponen YUI tertentu tidak berfungsi dalam mode ini; tolong matikan.';
$string['ziped'] = 'Mengkompres folder berhasil';
