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
 * Strings for component 'enrol_mnet', language 'id', version '3.9'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Beberapa contoh plugin pendaftaran MNet sudah ada untuk host ini. Hanya satu contoh per host dan / atau satu contoh untuk \'Semua host\' diperbolehkan.';
$string['instancename'] = 'Nama metode pendaftaran';
$string['instancename_help'] = 'Anda secara opsional dapat mengganti nama instance metode pendaftaran MNet ini. Jika Anda mengosongkan bidang ini, nama instance default akan digunakan, yang berisi nama host jarak jauh dan peran yang ditetapkan untuk penggunanya.';
$string['mnet:config'] = 'Konfigurasikan model pendaftaran MNet';
$string['mnet_enrol_description'] = 'Publikasikan layanan ini untuk memungkinkan administrator di {$a} mendaftarkan siswanya ke kursus yang telah Anda buat di peladen Anda. <br/> <ul><li> <em> Ketergantungan </em>: Anda juga harus <strong> berlangganan </strong> ke layanan SSO (Identity Provider) di {$a}. </li> <li> <em> Ketergantungan </em>: Anda juga harus <strong> mempublikasikan </strong> layanan SSO (Penyedia Layanan) ke {$a}. </li> </ul> <br/> Berlangganan ke layanan ini untuk dapat mendaftarkan siswa Anda ke kursus di {$a}. <br/> <ul><li> <em> Ketergantungan </em>: Anda juga harus <strong> mempublikasikan </strong> layanan SSO (Penyedia Identitas) ke {$a}. </li> <li> <em> Ketergantungan </em>: Anda juga harus <strong> berlangganan </strong> ke layanan SSO (Penyedia Layanan) di {$a}. </li> </ul> <br/>';
$string['mnet_enrol_name'] = 'Layanan pendaftaran jarak jauh';
$string['pluginname'] = 'Pendaftaran jarak jauh MNET';
$string['pluginname_desc'] = 'Izinkan host MNet jarak jauh untuk mendaftarkan pengguna mereka ke kursus kami.';
$string['privacy:metadata'] = 'Pengaya pendaftaran jarak jauh MNet tidak menyimpan data pribadi apa pun.';
$string['remotesubscriber'] = 'Host jarak jauh';
$string['remotesubscriber_help'] = 'Pilih \'Semua host\' untuk membuka kursus ini untuk semua rekan MNet yang kami tawarkan layanan pendaftaran jarak jauh. Atau pilih satu host untuk membuat kursus ini hanya tersedia untuk pengguna mereka.';
$string['remotesubscribersall'] = 'Semua host';
$string['roleforremoteusers'] = 'Peran untuk penggunanya';
$string['roleforremoteusers_help'] = 'Peran apa yang akan didapat oleh pengguna jarak jauh dari host yang dipilih.';
