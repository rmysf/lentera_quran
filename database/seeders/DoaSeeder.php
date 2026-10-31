<?php

namespace Database\Seeders;

use App\Models\Doa;
use App\Models\DoaCategory;
use Illuminate\Database\Seeder;

class DoaSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'nama' => 'Doa Shalat & Sesudah Shalat',
                'slug' => 'doa-shalat',
                'urutan' => 1,
                'doas' => [
                    [
                        'judul' => 'Doa Shalat Tahajud',
                        'slug' => 'doa-shalat-tahajud',
                        'teks_arab' => 'اللَّهُمَّ رَبَّنَا لَكَ الْحَمْدُ أَنْتَ قَيِّمُ السَّمَاوَاتِ وَالْأَرْضِ وَمَنْ فِيهِنَّ، وَلَكَ الْحَمْدُ أَنْتَ نُورُ السَّمَاوَاتِ وَالْأَرْضِ وَمَنْ فِيهِنَّ، وَلَكَ الْحَمْدُ أَنْتَ مَلِكُ السَّمَاوَاتِ وَالْأَرْضِ وَمَنْ فِيهِنَّ، وَلَكَ الْحَمْدُ أَنْتَ الْحَقُّ، وَوَعْدُكَ الْحَقُّ، وَلِقَاؤُكَ حَقٌّ، وَقَوْلُكَ حَقٌّ، وَالْجَنَّةُ حَقٌّ، وَالنَّارُ حَقٌّ، وَالنَّبِيُّونَ حَقٌّ، وَمُحَمَّدٌ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ حَقٌّ، وَالسَّاعَةُ حَقٌّ، اللَّهُمَّ لَكَ أَسْلَمْتُ، وَبِكَ آمَنْتُ، وَعَلَيْكَ تَوَكَّلْتُ، وَإِلَيْكَ أَنَبْتُ، وَبِكَ خَاصَمْتُ، وَإِلَيْكَ حَاكَمْتُ، فَاغْفِرْ لِي مَا قَدَّمْتُ وَمَا أَخَّرْتُ، وَمَا أَسْرَرْتُ وَمَا أَعْلَنْتُ، وَمَا أَنْتَ أَعْلَمُ بِهِ مِنِّي، أَنْتَ الْمُقَدِّمُ وَأَنْتَ الْمُؤَخِّرُ، لَا إِلَٰهَ إِلَّا أَنْتَ',
                        'teks_latin' => 'Allāhumma rabbanā lakal-ḥamdu anta qayyimus-samāwāti wal-arḍi wa man fīhinn, wa lakal-ḥamdu anta nūrus-samāwāti wal-arḍi wa man fīhinn, wa lakal-ḥamdu anta malikus-samāwāti wal-arḍi wa man fīhinn, wa lakal-ḥamdu antal-ḥaqq, wa wa‘dukal-ḥaqq, wa liqā’uka ḥaqq, wa qauluka ḥaqq, wal-jannatu ḥaqq, wan-nāru ḥaqq, wan-nabiyyūna ḥaqq, wa Muḥammadun ṣallallāhu ‘alaihi wa sallama ḥaqq, was-sā‘atu ḥaqq. Allāhumma laka aslamtu, wa bika āmantu, wa ‘alaika tawakkaltu, wa ilaika anabtu, wa bika khāṣamtu, wa ilaika ḥākamtu, fagfir lī mā qaddamtu wa mā akhkhartu, wa mā asrartu wa mā a‘lantu, wa mā anta a‘lamu bihī minnī, antal-muqaddimu wa antal-mu’akhkhiru lā ilāha illā anta.',
                        'terjemahan' => 'Ya Allah, Tuhan kami, bagi-Mu segala puji, Engkau penegak langit, bumi, dan apa yang ada di dalamnya. Bagi-Mu segala puji, Engkau cahaya langit, bumi, dan apa yang ada di dalamnya. Bagi-Mu segala puji, Engkau penguasa langit, bumi, dan apa yang ada di dalamnya. Bagi-Mu segala puji, Engkaulah Yang Mahabenar, janji-Mu benar, pertemuan dengan-Mu benar, firman-Mu benar, surga itu benar, neraka itu benar, para nabi itu benar, Nabi Muhammad SAW itu benar, dan hari kiamat itu benar. Ya Allah, hanya kepada-Mu aku berserah diri, dengan-Mu aku beriman, kepada-Mu aku bertawakal, kepada-Mu aku kembali, karena-Mu aku berdebat (membela kebenaran), dan kepada-Mu aku berhukum. Maka ampunilah dosaku yang telah lalu dan yang akan datang, yang aku sembunyikan dan yang aku tampakkan, serta dosa yang Engkau lebih mengetahuinya dariku. Engkaulah Yang Maha Mendahulukan dan Yang Maha Mengakhirkan, tiada Tuhan yang berhak disembah selain Engkau.',
                        'sumber' => 'HR. Bukhari no. 1120 & Muslim no. 769',
                    ],
                    [
                        'judul' => 'Doa Shalat Tarawih (Doa Kamilin)',
                        'slug' => 'doa-shalat-tarawih-kamilin',
                        'teks_arab' => 'اللَّهُمَّ اجْعَلْنَا بِالْإِيمَانِ كَامِلِينَ، وَلِلْفَرَائِضِ مُؤَدِّينَ، وَلِلصَّلَاةِ حَافِظِينَ، وَلِلزَّكَاةِ فَاعِلِينَ، وَلِمَا عِنْدَكَ طَالِبِينَ، وَلِعَفْوِكَ رَاجِينَ، وَبِالْهُدَىٰ مُتَمَسِّكِينَ، وَعَنِ اللَّغْوِ مُعْرِضِينَ، وَفِي الدُّنْيَا زَاهِدِينَ، وَفِي الْآخِرَةِ رَاغِبِينَ، وَبِالْقَضَاءِ رَاضِينَ، وَلِلنَّعْمَاءِ شَاكِرِينَ، وَعَلَى الْبَلَاءِ صَابِرِينَ، وَتَحْتَ لِوَاءِ مُحَمَّدٍ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ يَوْمَ الْقِيَامَةِ سَائِرِينَ، وَعَلَى الْحَوْضِ وَارِدِينَ، وَإِلَى الْجَنَّةِ دَاخِلِينَ، وَمِنَ النَّارِ نَاجِينَ',
                        'teks_latin' => 'Allāhummaj‘alnā bil-īmāni kāmilīn, wa lil-farā’iḍi mu’addīn, wa liṣ-ṣalāti ḥāfiẓīn, wa liz-zakāti fā‘ilīn, wa limā ‘indaka ṭālibīn, wa li‘afwika rājīn, wa bil-hudā mutamassikīn, wa ‘anil-lagwi mu‘riḍīn, wa fid-dunyā zāhidīn, wa fil-ākhirati rāgibīn, wa bil-qaḍā’i rāḍīn, wa lin-na‘mā’i syākirīn, wa ‘alal-balā’i ṣābirīn, wa taḥta liwā’i Muḥammadin ṣallallāhu ‘alaihi wa sallama yaumal-qiyāmati sā’irīn, wa ‘alal-ḥauḍi wāridīn, wa ilal-jannati dākhilīn, wa minan-nāri nājīn.',
                        'terjemahan' => 'Ya Allah, jadikanlah kami orang-orang yang sempurna imannya, yang menunaikan kewajiban-kewajiban, yang memelihara shalat, yang mengeluarkan zakat, yang mencari apa yang ada di sisi-Mu, yang mengharapkan ampunan-Mu, yang berpegang teguh pada petunjuk, yang berpaling dari perbuatan sia-sia, yang zuhud di dunia, yang mencintai akhirat, yang ridha terhadap ketetapan-Mu, yang mensyukuri nikmat, yang sabar atas cobaan, yang berjalan di bawah panji Nabi Muhammad SAW pada hari kiamat, yang mendatangi telaga (Kautsar), yang masuk ke dalam surga, dan yang selamat dari api neraka.',
                        'sumber' => 'Kitab Majmu’ Syarif & Tradisi Pesantren Nusantara',
                    ],
                    [
                        'judul' => 'Doa Shalat Dhuha',
                        'slug' => 'doa-shalat-dhuha',
                        'teks_arab' => 'اللَّهُمَّ إِنَّ الضُّحَاءَ ضُحَاؤُكَ، وَالْبَهَاءَ بَهَاؤُكَ، وَالْجَمَالَ جَمَالُكَ، وَالْقُوَّةَ قُوَّتُكَ، وَالْقُدْرَةَ قُدْرَتُكَ، وَالْعِصْمَةَ عِصْمَتُكَ. اللَّهُمَّ إِنْ كَانَ رِزْقِي فِي السَّمَاءِ فَأَنْزِلْهُ، وَإِنْ كَانَ فِي الْأَرْضِ فَأَخْرِجْهُ، وَإِنْ كَانَ مُعَسَّرًا فَيَسِّرْهُ، وَإِنْ كَانَ حَرَامًا فَطَهِّرْهُ، وَإِنْ كَانَ بَعِيدًا فَقَرِّبْهُ، بِحَقِّ ضُحَائِكَ وَبَهَائِكَ وَجَمَالِكَ وَقُوَّتِكَ وَقُدْرَتِكَ، آتِنِي مَا آتَيْتَ عِبَادَكَ الصَّالِحِينَ',
                        'teks_latin' => 'Allāhumma innaḍ-ḍuḥā’a ḍuḥā’uka, wal-bahā’a bahā’uka, wal-jamāla jamāluka, wal-quwwata quwwatuka, wal-qudrata qudratuka, wal-‘iṣmata ‘iṣmatuka. Allāhumma in kāna rizqī fis-samā’i fa anzilhu, wa in kāna fil-arḍi fa akhrijhu, wa in kāna mu‘assaran fa yassirhu, wa in kāna ḥarāman fa ṭahhirhu, wa in kāna ba‘īdan fa qarribhu, biḥaqqi ḍuḥā’ika wa bahā’ika wa jamālika wa quwwatika wa qudratika, ātinī mā ātaita ‘ibādakaṣ-ṣāliḥīn.',
                        'terjemahan' => 'Ya Allah, sesungguhnya waktu dhuha adalah waktu dhuha-Mu, keagungan adalah keagungan-Mu, keindahan adalah keindahan-Mu, kekuatan adalah kekuatan-Mu, kekuasaan adalah kekuasaan-Mu, dan penjagaan adalah penjagaan-Mu. Ya Allah, apabila rezekiku berada di atas langit maka turunkanlah, apabila berada di dalam bumi maka keluarkanlah, apabila sukar maka mudahkanlah, apabila haram maka sucikanlah, apabila jauh maka dekatkanlah, dengan kebenaran dhuha-Mu, keagungan-Mu, keindahan-Mu, kekuatan-Mu, dan kekuasaan-Mu, berikanlah kepadaku apa yang Engkau berikan kepada hamba-hamba-Mu yang shalih.',
                        'sumber' => 'Syarah Minhajul Qawim & I’anatuth Thalibin',
                    ],
                    [
                        'judul' => 'Doa Shalat Istikharah',
                        'slug' => 'doa-shalat-istikharah',
                        'teks_arab' => 'اللَّهُمَّ إِنِّي أَسْتَخِيرُكَ بِعِلْمِكَ، وَأَسْتَقْدِرُكَ بِقُدْرَتِكَ، وَأَسْأَلُكَ مِنْ فَضْلِكَ الْعَظِيمِ، فَإِنَّكَ تَقْدِرُ وَلَا أَقْدِرُ، وَتَعْلَمُ وَلَا أَعْلَمُ، وَأَنْتَ عَلَّامُ الْغُيُوبِ. اللَّهُمَّ إِنْ كُنْتَ تَعْلَمُ أَنَّ هَٰذَا الْأَمْرَ خَيْرٌ لِي فِي دِينِي وَمَعَاشِي وَعَاقِبَةِ أَمْرِي فَاقْدُرْهُ لِي وَيَسِّرْهُ لِي ثُمَّ بَارِكْ لِي فِيهِ، وَإِنْ كُنْتَ تَعْلَمُ أَنَّ هَٰذَا الْأَمْرَ شَرٌّ لِي فِي دِينِي وَمَعَاشِي وَعَاقِبَةِ أَمْرِي فَاصْرِفْهُ عَنِّي وَاصْرِفْنِي عَنْهُ، وَاقْدُرْ لِيَ الْخَيْرَ حَيْثُ كَانَ ثُمَّ أَرْضِنِي بِهِ',
                        'teks_latin' => 'Allāhumma innī astakhīruka bi‘ilmika, wa astaqdiruka biqudratika, wa as’aluka min faḍlikal-‘aẓīm, fa innaka taqdiru wa lā aqdiru, wa ta‘lamu wa lā a‘lamu, wa anta ‘allāmul-guyūb. Allāhumma in kunta ta‘lamu anna hāżal-amra khairul lī fī dīnī wa ma‘āsyī wa ‘āqibati amrī faqdurhu lī wa yassirhu lī ṡumma bārik lī fīh, wa in kunta ta‘lamu anna hāżal-amra syarrul lī fī dīnī wa ma‘āsyī wa ‘āqibati amrī faṣrifhu ‘annī waṣrifnī ‘anhu, waqdur liyal-khaira ḥaiṡu kāna ṡumma arḍinī bih.',
                        'terjemahan' => 'Ya Allah, sesungguhnya aku memohon pilihan kepada-Mu dengan ilmu-Mu, memohon ketetapan dengan kekuasaan-Mu, dan memohon dari karunia-Mu yang agung. Sesungguhnya Engkau Mahakuasa sedang aku tidak kuasa, Engkau Maha Mengetahui sedang aku tidak mengetahui, dan Engkaulah Yang Maha Mengetahui perkara yang gaib. Ya Allah, jika Engkau mengetahui bahwa urusan ini baik bagiku pada agamaku, kehidupanku, dan akhir urusanku, maka takdirkanlah dan mudahkanlah ia bagiku kemudian berkahilah aku di dalamnya. Dan jika Engkau mengetahui bahwa urusan ini buruk bagiku pada agamaku, kehidupanku, dan akhir urusanku, maka palingkanlah ia dariku dan palingkanlah aku darinya, serta takdirkanlah kebaikan bagiku di mana saja berada kemudian jadikanlah aku ridha dengannya.',
                        'sumber' => 'HR. Bukhari no. 1162',
                    ],
                    [
                        'judul' => 'Doa Shalat Witir',
                        'slug' => 'doa-shalat-witir',
                        'teks_arab' => 'سُبْحَانَ الْمَلِكِ الْقُدُّوسِ ۝ اللَّهُمَّ إِنِّي أَعُوذُ بِرِضَاكَ مِنْ سَخَطِكَ، وَبِمُعَافَاتِكَ مِنْ عُقُوبَتِكَ، وَأَعُوذُ بِكَ مِنْكَ، لَا أُحْصِي ثَنَاءً عَلَيْكَ أَنْتَ كَمَا أَثْنَيْتَ عَلَىٰ نَفْسِكَ',
                        'teks_latin' => 'Subḥānal-malikil-quddūs. Allāhumma innī a‘ūżu biriḍāka min sakhaṭika, wa bimu‘āfātika min ‘uqūbatika, wa a‘ūżu bika minka, lā uḥṣī ṡanā’an ‘alaika anta kamā aṡnaita ‘alā nafsik.',
                        'terjemahan' => 'Mahasuci Raja Yang Mahakudus. Ya Allah, sesungguhnya aku berlindung dengan keridhaan-Mu dari kemurkaan-Mu, dengan ampunan-Mu dari hukuman-Mu, dan aku berlindung kepada-Mu dari siksa-Mu. Aku tidak mampu menghitung pujian atas-Mu sebagaimana Engkau memuji diri-Mu sendiri.',
                        'sumber' => 'HR. Abu Dawud no. 1427 & Tirmidzi no. 3566',
                    ],
                    [
                        'judul' => 'Doa Qunut Shalat Subuh',
                        'slug' => 'doa-qunut-shalat-subuh',
                        'teks_arab' => 'اللَّهُمَّ اهْدِنِي فِيمَنْ هَدَيْتَ، وَعَافِنِي فِيمَنْ عَافَيْتَ، وَتَوَلَّنِي فِيمَنْ تَوَلَّيْتَ، وَبَارِكْ لِي فِيمَا أَعْطَيْتَ، وَقِنِي شَرَّ مَا قَضَيْتَ، فَإِنَّكَ تَقْضِي وَلَا يُقْضَىٰ عَلَيْكَ، وَإِنَّهُ لَا يَذِلُّ مَنْ وَالَيْتَ، وَلَا يَعِزُّ مَنْ عَادَيْتَ، تَبَارَكْتَ رَبَّنَا وَتَعَالَيْتَ، فَلَكَ الْحَمْدُ عَلَىٰ مَا قَضَيْتَ، أَسْتَغْفِرُكَ وَأَتُوبُ إِلَيْكَ',
                        'teks_latin' => 'Allāhummahdinī fīman hadait, wa ‘āfinī fīman ‘āfait, wa tawallanī fīman tawallait, wa bārik lī fīmā a‘ṭait, wa qinī syarra mā qaḍait, fa innaka taqḍī wa lā yuqḍā ‘alaik, wa innahū lā yażillu man wālait, wa lā ya‘izzu man ‘ādait, tabārakta rabbanā wa ta‘ālait, falakal-ḥamdu ‘alā mā qaḍait, astagfiruka wa atūbu ilaik.',
                        'terjemahan' => 'Ya Allah, berilah aku petunjuk bersama orang-orang yang telah Engkau beri petunjuk, berilah aku keselamatan bersama orang-orang yang telah Engkau beri keselamatan, peliharalah aku bersama orang-orang yang telah Engkau pelihara, berkahilah aku pada apa yang telah Engkau berikan, dan lindungilah aku dari keburukan apa yang telah Engkau tetapkan. Sesungguhnya Engkaulah yang menetapkan dan tidak ada yang menetapkan atas-Mu. Sesungguhnya tidak akan hina orang yang Engkau lindungi, dan tidak akan mulia orang yang Engkau musuhi. Mahasuci Engkau wahai Tuhan kami dan Mahatinggi Engkau. Bagi-Mu segala puji atas apa yang telah Engkau tetapkan. Aku memohon ampun dan bertaubat kepada-Mu.',
                        'sumber' => 'HR. Abu Dawud no. 1425 & An-Nasa’i no. 1745',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Perjalanan & Safar',
                'slug' => 'doa-perjalanan',
                'urutan' => 2,
                'doas' => [
                    [
                        'judul' => 'Doa Keluar Rumah',
                        'slug' => 'doa-keluar-rumah',
                        'teks_arab' => 'بِسْمِ اللَّهِ، تَوَكَّلْتُ عَلَى اللَّهِ، لَا حَوْلَ وَلَا قُوَّةَ إِلَّا بِاللَّهِ',
                        'teks_latin' => 'Bismillāhi, tawakkaltu ‘alallāhi, lā ḥaula wa lā quwwata illā billāh.',
                        'terjemahan' => 'Dengan nama Allah, aku bertawakal kepada Allah. Tiada daya dan kekuatan kecuali dengan pertolongan Allah.',
                        'sumber' => 'HR. Abu Dawud no. 5095 & Tirmidzi no. 3426',
                    ],
                    [
                        'judul' => 'Doa Naik Kendaraan Darat & Udara',
                        'slug' => 'doa-naik-kendaraan',
                        'teks_arab' => 'سُبْحَانَ الَّذِي سَخَّرَ لَنَا هَٰذَا وَمَا كُنَّا لَهُ مُقْرِنِينَ وَإِنَّا إِلَىٰ رَبِّنَا لَمُنْقَلِبُونَ',
                        'teks_latin' => 'Subḥānallażī sakhkhara lanā hāżā wa mā kunnā lahū muqrinīna wa innā ilā rabbinā lamunqalibūn.',
                        'terjemahan' => 'Mahasuci Tuhan yang telah menundukkan semua ini bagi kami padahal kami sebelumnya tidak mampu menguasainya, dan sesungguhnya kami akan kembali kepada Tuhan kami.',
                        'sumber' => 'QS. Az-Zukhruf: 13-14',
                    ],
                    [
                        'judul' => 'Doa Safar (Bepergian Jauh)',
                        'slug' => 'doa-safar-bepergian-jauh',
                        'teks_arab' => 'اللَّهُمَّ إِنَّا نَسْأَلُكَ فِي سَفَرِنَا هَٰذَا الْبِرَّ وَالتَّقْوَىٰ، وَمِنَ الْعَمَلِ مَا تَرْضَىٰ، اللَّهُمَّ هَوِّنْ عَلَيْنَا سَفَرَنَا هَٰذَا وَاطْوِ عَنَّا بُعْدَهُ، اللَّهُمَّ أَنْتَ الصَّاحِبُ فِي السَّفَرِ، وَالْخَلِيفَةُ فِي الْأَهْلِ، اللَّهُمَّ إِنِّي أَعُوذُ بِكَ مِنْ وَعْثَاءِ السَّفَرِ، وَكَآبَةِ الْمَنْظَرِ، وَسُوءِ الْمُنْقَلَبِ فِي الْمَالِ وَالْأَهْلِ',
                        'teks_latin' => 'Allāhumma innā nas’aluka fī safarinā hāżal-birra wat-taqwā, wa minal-‘amali mā tarḍā, Allāhumma hawwin ‘alainā safaranā hāżā waṭwi ‘annā bu‘dah, Allāhumma antaṣ-ṣāḥibu fis-safar, wal-khalīfatu fil-ahl, Allāhumma innī a‘ūżu bika min wa‘ṡā’is-safar, wa ka’ābatil-manẓar, wa sū’il-munqalabi fil-māli wal-ahl.',
                        'terjemahan' => 'Ya Allah, sesungguhnya kami memohon kepada-Mu dalam perjalanan kami ini kebaikan dan ketakwaan, serta amal yang Engkau ridhai. Ya Allah, mudahkanlah perjalanan kami ini dan dekatkanlah jaraknya bagi kami. Ya Allah, Engkaulah teman dalam perjalanan dan pelindung bagi keluarga yang ditinggalkan. Ya Allah, aku berlindung kepada-Mu dari beratnya perjalanan, pemandangan yang menyedihkan, dan buruknya tempat kembali pada harta dan keluarga.',
                        'sumber' => 'HR. Muslim no. 1342',
                    ],
                    [
                        'judul' => 'Doa Naik Kapal / Kendaraan Laut',
                        'slug' => 'doa-naik-kapal-laut',
                        'teks_arab' => 'بِسْمِ اللَّهِ مَجْرَاهَا وَمُرْسَاهَا ۚ إِنَّ رَبِّي لَغَفُورٌ رَحِيمٌ',
                        'teks_latin' => 'Bismillāhi majrāhā wa mursāhā, inna rabbī lagafūrur raḥīm.',
                        'terjemahan' => 'Dengan (menyebut) nama Allah pada waktu berlayar dan berlabuhnya. Sesungguhnya Tuhanku benar-benar Maha Pengampun lagi Maha Penyayang.',
                        'sumber' => 'QS. Hud: 41',
                    ],
                    [
                        'judul' => 'Doa Ketika Singgah / Sampai di Tempat Tujuan',
                        'slug' => 'doa-sampai-tempat-tujuan',
                        'teks_arab' => 'أَعُوذُ بِكَلِمَاتِ اللَّهِ التَّامَّاتِ مِنْ شَرِّ مَا خَلَقَ',
                        'teks_latin' => 'A‘ūżu bikalimātillāhit-tāmmāti min syarri mā khalaq.',
                        'terjemahan' => 'Aku berlindung dengan kalimat-kalimat Allah yang sempurna dari kejahatan makhluk yang Dia ciptakan.',
                        'sumber' => 'HR. Muslim no. 2708',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Menuntut Ilmu & Belajar',
                'slug' => 'doa-ilmu',
                'urutan' => 3,
                'doas' => [
                    [
                        'judul' => 'Doa Memohon Tambahan Ilmu & Pemahaman',
                        'slug' => 'doa-memohon-tambahan-ilmu',
                        'teks_arab' => 'رَبِّ زِدْنِي عِلْمًا، وَارْزُقْنِي فَهْمًا، وَاجْعَلْنِي مِنَ الصَّالِحِينَ',
                        'teks_latin' => 'Rabbi zidnī ‘ilman, warzuqnī fahman, waj‘alnī minaṣ-ṣāliḥīn.',
                        'terjemahan' => 'Ya Tuhanku, tambahkanlah ilmu kepadaku, karuniakanlah pemahaman kepadaku, dan jadikanlah aku termasuk golongan orang-orang yang shalih.',
                        'sumber' => 'QS. Thaha: 114',
                    ],
                    [
                        'judul' => 'Doa Memohon Ilmu yang Bermanfaat, Rezeki Thayyib & Amal Diterima',
                        'slug' => 'doa-ilmu-bermanfaat',
                        'teks_arab' => 'اللَّهُمَّ إِنِّي أَسْأَلُكَ عِلْمًا نَافِعًا، وَرِزْقًا طَيِّبًا، وَعَمَلًا مُتَقَبَّلًا',
                        'teks_latin' => 'Allāhumma innī as’aluka ‘ilman nāfi‘an, wa rizqan ṭayyiban, wa ‘amalan mutaqabbalā.',
                        'terjemahan' => 'Ya Allah, sesungguhnya aku memohon kepada-Mu ilmu yang bermanfaat, rezeki yang baik (halal), dan amal ibadah yang diterima.',
                        'sumber' => 'HR. Ibnu Majah no. 925',
                    ],
                    [
                        'judul' => 'Doa Kelapangan Dada & Kemudahan Lisan (Doa Nabi Musa)',
                        'slug' => 'doa-kelapangan-dada-nabi-musa',
                        'teks_arab' => 'رَبِّ اشْرَحْ لِي صَدْرِي ۝ وَيَسِّرْ لِي أَمْرِي ۝ وَاحْلُلْ عُقْدَةً مِنْ لِسَانِي ۝ يَفْقَهُوا قَوْلِي',
                        'teks_latin' => 'Rabbisyraḥ lī ṣadrī, wa yassir lī amrī, waḥlul ‘uqdatam mil lisānī, yafqahū qaulī.',
                        'terjemahan' => 'Ya Tuhanku, lapangkanlah dadaku, dan mudahkanlah untukku urusanku, dan lepaskanlah kekakuan dari lidahku, agar mereka mengerti perkataanku.',
                        'sumber' => 'QS. Thaha: 25-28',
                    ],
                    [
                        'judul' => 'Doa Berlindung dari Ilmu yang Tidak Bermanfaat',
                        'slug' => 'doa-berlindung-ilmu-tidak-bermanfaat',
                        'teks_arab' => 'اللَّهُمَّ إِنِّي أَعُوذُ بِكَ مِنْ عِلْمٍ لَا يَنْفَعُ، وَمِنْ قَلْبٍ لَا يَخْشَعُ، وَمِنْ نَفْسٍ لَا تَشْبَعُ، وَمِنْ دَعْوَةٍ لَا يُسْتَجَابُ لَهَا',
                        'teks_latin' => 'Allāhumma innī a‘ūżu bika min ‘ilmin lā yanfa‘, wa min qalbin lā yakhsya‘, wa min nafsin lā tasyba‘, wa min da‘watin lā yustajābu lahā.',
                        'terjemahan' => 'Ya Allah, sesungguhnya aku berlindung kepada-Mu dari ilmu yang tidak bermanfaat, dari hati yang tidak khusyuk, dari jiwa yang tidak pernah puas, dan dari doa yang tidak dikabulkan.',
                        'sumber' => 'HR. Muslim no. 2722',
                    ],
                    [
                        'judul' => 'Doa Sesudah Belajar / Majelis Ilmu',
                        'slug' => 'doa-sesudah-belajar',
                        'teks_arab' => 'اللَّهُمَّ أَرِنَا الْحَقَّ حَقًّا وَارْزُقْنَا اتِّبَاعَهُ، وَأَرِنَا الْبَاطِلَ بَاطِلًا وَارْزُقْنَا اجْتِنَابَهُ',
                        'teks_latin' => 'Allāhumma arinal-ḥaqqa ḥaqqaw warzuqnattibā‘ah, wa arinal-bāṭila bāṭilaw warzuqnajtinābah.',
                        'terjemahan' => 'Ya Allah, tampakkanlah kepada kami kebenaran itu sebagai kebenaran dan karuniakanlah kepada kami kemampuan untuk mengikutinya, serta tampakkanlah kepada kami kebatilan itu sebagai kebatilan dan karuniakanlah kepada kami kemampuan untuk menjauhinya.',
                        'sumber' => 'Tafsir Ibnu Katsir',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Harian & Aktivitas',
                'slug' => 'doa-harian',
                'urutan' => 4,
                'doas' => [
                    [
                        'judul' => 'Doa Sebelum Tidur',
                        'slug' => 'doa-sebelum-tidur',
                        'teks_arab' => 'بِاسْمِكَ اللَّهُمَّ أَمُوتُ وَأَحْيَا',
                        'teks_latin' => 'Bismikallāhumma amūtu wa aḥyā.',
                        'terjemahan' => 'Dengan menyebut nama-Mu ya Allah, aku mati (tidur) dan aku hidup.',
                        'sumber' => 'HR. Bukhari no. 6324',
                    ],
                    [
                        'judul' => 'Doa Bangun Tidur',
                        'slug' => 'doa-bangun-tidur',
                        'teks_arab' => 'الْحَمْدُ لِلَّهِ الَّذِي أَحْيَانَا بَعْدَ مَا أَمَاتَنَا وَإِلَيْهِ النُّشُورُ',
                        'teks_latin' => 'Al-ḥamdu lillāhillażī aḥyānā ba‘da mā amātanā wa ilaihin-nusyūr.',
                        'terjemahan' => 'Segala puji bagi Allah yang telah menghidupkan kami kembali setelah mematikan (menidurkan) kami, dan hanya kepada-Nya tempat kebangkitan.',
                        'sumber' => 'HR. Bukhari no. 6312',
                    ],
                    [
                        'judul' => 'Doa Sesudah Makan & Minum',
                        'slug' => 'doa-sesudah-makan',
                        'teks_arab' => 'الْحَمْدُ لِلَّهِ الَّذِي أَطْعَمَنَا وَسَقَانَا وَجَعَلَنَا مُسْلِمِينَ',
                        'teks_latin' => 'Al-ḥamdu lillāhillażī aṭ‘amanā wa saqānā wa ja‘alanā muslimīn.',
                        'terjemahan' => 'Segala puji bagi Allah yang telah memberi kami makan dan minum serta menjadikan kami termasuk golongan kaum muslimin.',
                        'sumber' => 'HR. Abu Dawud no. 3850 & Tirmidzi no. 3457',
                    ],
                    [
                        'judul' => 'Doa Masuk Masjid',
                        'slug' => 'doa-masuk-masjid',
                        'teks_arab' => 'اللَّهُمَّ افْتَحْ لِي أَبْوَابَ رَحْمَتِكَ',
                        'teks_latin' => 'Allāhummaftaḥ lī abwāba raḥmatik.',
                        'terjemahan' => 'Ya Allah, bukakanlah untukku pintu-pintu rahmat-Mu.',
                        'sumber' => 'HR. Muslim no. 713',
                    ],
                    [
                        'judul' => 'Doa Keluar Masjid',
                        'slug' => 'doa-keluar-masjid',
                        'teks_arab' => 'اللَّهُمَّ إِنِّي أَسْأَلُكَ مِنْ فَضْلِكَ',
                        'teks_latin' => 'Allāhumma innī as’aluka min faḍlik.',
                        'terjemahan' => 'Ya Allah, sesungguhnya aku memohon kepada-Mu sebagian dari karunia-Mu.',
                        'sumber' => 'HR. Muslim no. 713',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Keluarga & Orang Tua',
                'slug' => 'doa-keluarga',
                'urutan' => 5,
                'doas' => [
                    [
                        'judul' => 'Doa untuk Kedua Orang Tua',
                        'slug' => 'doa-untuk-kedua-orang-tua',
                        'teks_arab' => 'رَبِّ اغْفِرْ لِي وَلِوَالِدَيَّ وَارْحَمْهُمَا كَمَا رَبَّيَانِي صَغِيرًا',
                        'teks_latin' => 'Rabbigfir lī wa liwālidayya warḥamhumā kamā rabbayānī ṣagīrā.',
                        'terjemahan' => 'Ya Tuhanku, ampunilah dosaku dan dosa kedua orang tuaku, serta sayangilah mereka sebagaimana mereka menyayangiku di waktu kecil.',
                        'sumber' => 'QS. Al-Isra’: 24 &QS. Nuh: 28',
                    ],
                    [
                        'judul' => 'Doa Memohon Pasangan & Keturunan Penyejuk Mata',
                        'slug' => 'doa-keluarga-sakinah-keturunan-shalih',
                        'teks_arab' => 'رَبَّنَا هَبْ لَنَا مِنْ أَزْوَاجِنَا وَذُرِّيَّاتِنَا قُرَّةَ أَعْيُنٍ وَاجْعَلْنَا لِلْمُتَّقِينَ إِمَامًا',
                        'teks_latin' => 'Rabbanā hab lanā min azwājinā wa żurriyyātinā qurrata a‘yuniw waj‘alnā lil-muttaqīna imāmā.',
                        'terjemahan' => 'Ya Tuhan kami, anugerahkanlah kepada kami pasangan kami dan keturunan kami sebagai penyenang hati (kami), dan jadikanlah kami pemimpin bagi orang-orang yang bertakwa.',
                        'sumber' => 'QS. Al-Furqan: 74',
                    ],
                    [
                        'judul' => 'Doa Nabi Ibrahim agar Anak Cucu Mendirikan Shalat',
                        'slug' => 'doa-anak-cucu-mendirikan-shalat',
                        'teks_arab' => 'رَبِّ اجْعَلْنِي مُقِيمَ الصَّلَاةِ وَمِنْ ذُرِّيَّتِي ۚ رَبَّنَا وَتَقَبَّلْ دُعَاءِ',
                        'teks_latin' => 'Rabbij‘alnī muqīmaṣ-ṣalāti wa min żurriyyatī, rabbanā wa taqabbal du‘ā’.',
                        'terjemahan' => 'Ya Tuhanku, jadikanlah aku dan anak cucuku orang yang tetap melaksanakan shalat, ya Tuhan kami, perkenankanlah doaku.',
                        'sumber' => 'QS. Ibrahim: 40',
                    ],
                    [
                        'judul' => 'Doa Perlindungan untuk Anak dan Keturunan',
                        'slug' => 'doa-perlindungan-anak',
                        'teks_arab' => 'أُعِيذُكُمَا بِكَلِمَاتِ اللَّهِ التَّامَّةِ مِنْ كُلِّ شَيْطَانٍ وَهَامَّةٍ وَمِنْ كُلِّ عَيْنٍ لَامَّةٍ',
                        'teks_latin' => 'U‘īżukumā bikalimātillāhit-tāmmati min kulli syaiṭāniw wa hāmmah, wa min kulli ‘ainil lāmmah.',
                        'terjemahan' => 'Aku memohon perlindungan untuk kalian berdua dengan kalimat-kalimat Allah yang sempurna dari setiap gangguan setan, binatang berbisa, dan dari setiap pandangan mata yang jahat (’ain).',
                        'sumber' => 'HR. Bukhari no. 3371',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Perlindungan & Keteguhan Iman',
                'slug' => 'doa-perlindungan',
                'urutan' => 6,
                'doas' => [
                    [
                        'judul' => 'Doa Keselamatan Dunia Akhirat (Sapu Jagad)',
                        'slug' => 'doa-sapu-jagad',
                        'teks_arab' => 'رَبَّنَا آتِنَا فِي الدُّنْيَا حَسَنَةً وَفِي الْآخِرَةِ حَسَنَةً وَقِنَا عَذَابَ النَّارِ',
                        'teks_latin' => 'Rabbanā ātinā fid-dunyā ḥasanataw wa fil-ākhirati ḥasanataw wa qinā ‘ażāban-nār.',
                        'terjemahan' => 'Ya Tuhan kami, berilah kami kebaikan di dunia dan kebaikan di akhirat, dan lindungilah kami dari azab neraka.',
                        'sumber' => 'QS. Al-Baqarah: 201 & HR. Bukhari Muslim',
                    ],
                    [
                        'judul' => 'Sayyidul Istighfar (Penghulu Istighfar)',
                        'slug' => 'sayyidul-istighfar',
                        'teks_arab' => 'اللَّهُمَّ أَنْتَ رَبِّي لَا إِلَٰهَ إِلَّا أَنْتَ، خَلَقْتَنِي وَأَنَا عَبْدُكَ، وَأَنَا عَلَىٰ عَهْدِكَ وَوَعْدِكَ مَا اسْتَطَعْتُ، أَعُوذُ بِكَ مِنْ شَرِّ مَا صَنَعْتُ، أَبُوءُ لَكَ بِنِعْمَتِكَ عَلَيَّ، وَأَبُوءُ لَكَ بِذَنْبِي فَاغْفِرْ لِي، فَإِنَّهُ لَا يَغْفِرُ الذُّنُوبَ إِلَّا أَنْتَ',
                        'teks_latin' => 'Allāhumma anta rabbī lā ilāha illā anta, khalaqtanī wa anā ‘abduka, wa anā ‘alā ‘ahdika wa wa‘dika mastaṭa‘tu, a‘ūżu bika min syarri mā ṣana‘tu, abū’u laka bini‘matika ‘alayya, wa abū’u laka biżanbī fagfir lī, fa innahū lā yagfiruż-żunūba illā anta.',
                        'terjemahan' => 'Ya Allah, Engkau adalah Rabb-ku, tidak ada Tuhan yang berhak disembah selain Engkau. Engkau yang menciptakan aku dan aku adalah hamba-Mu. Aku menetapi perjanjian dan janji-Mu sesuai kemampuanku. Aku berlindung kepada-Mu dari keburukan perbuatanku, aku mengakui nikmat-Mu kepadaku dan aku mengakui dosaku kepada-Mu, maka ampunilah aku. Sebab tidak ada yang dapat mengampuni dosa selain Engkau.',
                        'sumber' => 'HR. Bukhari no. 6306',
                    ],
                    [
                        'judul' => 'Doa Keteguhan Iman (Ya Muqallibal Qulub)',
                        'slug' => 'doa-keteguhan-iman-ya-muqallibal-qulub',
                        'teks_arab' => 'يَا مُقَلِّبَ الْقُلُوبِ ثَبِّتْ قَلْبِي عَلَىٰ دِينِكَ',
                        'teks_latin' => 'Yā muqallibal-qulūbi ṡabbit qalbī ‘alā dīnik.',
                        'terjemahan' => 'Wahai Dzat yang membolak-balikkan hati, teguhkanlah hatiku di atas agama-Mu.',
                        'sumber' => 'HR. Tirmidzi no. 3522',
                    ],
                    [
                        'judul' => 'Doa agar Hati Tidak Condong kepada Kesesatan',
                        'slug' => 'doa-hati-tidak-condong-kesesatan',
                        'teks_arab' => 'رَبَّنَا لَا تُزِغْ قُلُوبَنَا بَعْدَ إِذْ هَدَيْتَنَا وَهَبْ لَنَا مِنْ لَدُنْكَ رَحْمَةً ۚ إِنَّكَ أَنْتَ الْوَهَّابُ',
                        'teks_latin' => 'Rabbanā lā tuzig qulūbanā ba‘da iż hadaitanā wa hab lanā mil ladunka raḥmah, innaka antal-wahhāb.',
                        'terjemahan' => 'Ya Tuhan kami, janganlah Engkau condongkan hati kami kepada kesesatan setelah Engkau berikan petunjuk kepada kami, dan karuniakanlah kepada kami rahmat dari sisi-Mu. Sesungguhnya Engkau Maha Pemberi.',
                        'sumber' => 'QS. Ali ‘Imran: 8',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Kesehatan & Kesembuhan',
                'slug' => 'doa-kesehatan',
                'urutan' => 7,
                'doas' => [
                    [
                        'judul' => 'Doa Memohon Kesehatan Badan, Pendengaran & Penglihatan',
                        'slug' => 'doa-kesehatan-badan-pendengaran-penglihatan',
                        'teks_arab' => 'اللَّهُمَّ عَافِنِي فِي بَدَنِي، اللَّهُمَّ عَافِنِي فِي سَمْعِي، اللَّهُمَّ عَافِنِي فِي بَصَرِي، لَا إِلَٰهَ إِلَّا أَنْتَ',
                        'teks_latin' => 'Allāhumma ‘āfinī fī badanī, Allāhumma ‘āfinī fī sam‘ī, Allāhumma ‘āfinī fī baṣarī, lā ilāha illā anta.',
                        'terjemahan' => 'Ya Allah, sehatkanlah badanku. Ya Allah, sehatkanlah pendengaranku. Ya Allah, sehatkanlah penglihatanku. Tiada Tuhan yang berhak disembah selain Engkau.',
                        'sumber' => 'HR. Abu Dawud no. 5090',
                    ],
                    [
                        'judul' => 'Doa Menjenguk & Memohon Kesembuhan Orang Sakit',
                        'slug' => 'doa-kesembuhan-orang-sakit',
                        'teks_arab' => 'اللَّهُمَّ رَبَّ النَّاسِ أَذْهِبِ الْبَأْسَ، اشْفِ أَنْتَ الشَّافِي، لَا شِفَاءَ إِلَّا شِفَاؤُكَ، شِفَاءً لَا يُغَادِرُ سَقَمًا',
                        'teks_latin' => 'Allāhumma rabban-nāsi ażhibil-ba’sa, isyfi antasy-syāfī, lā syifā’a illā syifā’uka, syifā’an lā yugādiru saqamā.',
                        'terjemahan' => 'Ya Allah, Tuhan seluruh manusia, hilangkanlah penyakit ini, sembuhkanlah karena Engkaulah Yang Maha Menyembuhkan. Tiada kesembuhan selain kesembuhan dari-Mu, kesembuhan yang tidak meninggalkan rasa sakit sedikit pun.',
                        'sumber' => 'HR. Bukhari no. 5675 & Muslim no. 2191',
                    ],
                    [
                        'judul' => 'Doa Berlindung dari Penyakit Berbahaya',
                        'slug' => 'doa-berlindung-penyakit-berbahaya',
                        'teks_arab' => 'اللَّهُمَّ إِنِّي أَعُوذُ بِكَ مِنَ الْبَرَصِ، وَالْجُنُونِ، وَالْجُذَامِ، وَمِنْ سَيِّئِ الْأَسْقَامِ',
                        'teks_latin' => 'Allāhumma innī a‘ūżu bika minal-baraṣi, wal-junūni, wal-jużāmi, wa min sayyi’il-asqām.',
                        'terjemahan' => 'Ya Allah, sesungguhnya aku berlindung kepada-Mu dari penyakit belang, gila, kusta, dan dari segala penyakit yang buruk/berbahaya.',
                        'sumber' => 'HR. Abu Dawud no. 1554',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Rezeki & Keberkahan Usaha',
                'slug' => 'doa-rezeki',
                'urutan' => 8,
                'doas' => [
                    [
                        'judul' => 'Doa Memohon Kecukupan Rezeki yang Halal',
                        'slug' => 'doa-kecukupan-rezeki-halal',
                        'teks_arab' => 'اللَّهُمَّ اكْفِنِي بِحَلَالِكَ عَنْ حَرَامِكَ، وَأَغْنِنِي بِفَضْلِكَ عَمَّنْ سِوَاكَ',
                        'teks_latin' => 'Allāhummakfinī biḥalālika ‘an ḥarāmika, wa agninī bifaḍlika ‘amman siwāk.',
                        'terjemahan' => 'Ya Allah, cukupkanlah aku dengan rezeki-Mu yang halal sehingga aku terhindar dari yang haram, dan kayakanlah aku dengan karunia-Mu sehingga aku tidak bergantung kepada selain-Mu.',
                        'sumber' => 'HR. Tirmidzi no. 3563',
                    ],
                    [
                        'judul' => 'Doa Terbebas dari Kesedihan, Kelemahan & Lilitan Hutang',
                        'slug' => 'doa-terbebas-hutang-dan-kesedihan',
                        'teks_arab' => 'اللَّهُمَّ إِنِّي أَعُوذُ بِكَ مِنَ الْهَمِّ وَالْحَزَنِ، وَالْعَجْزِ وَالْكَسَلِ، وَالْبُخْلِ وَالْجُبْنِ، وَضَلَعِ الدَّيْنِ وَغَلَبَةِ الرِّجَالِ',
                        'teks_latin' => 'Allāhumma innī a‘ūżu bika minal-hammi wal-ḥazan, wal-‘ajzi wal-kasal, wal-bukhli wal-jubn, wa ḍala‘id-daini wa galabatir-rijāl.',
                        'terjemahan' => 'Ya Allah, sesungguhnya aku berlindung kepada-Mu dari keluh kesah dan kesedihan, dari kelemahan dan kemalasan, dari sifat kikir dan pengecut, serta dari lilitan hutang dan penindasan orang-orang.',
                        'sumber' => 'HR. Bukhari no. 6369',
                    ],
                    [
                        'judul' => 'Doa Memohon Ampunan dan Rahmat Terbaik',
                        'slug' => 'doa-ampunan-dan-rahmat-terbaik',
                        'teks_arab' => 'رَبِّ اغْفِرْ وَارْحَمْ وَأَنْتَ خَيْرُ الرَّاحِمِينَ',
                        'teks_latin' => 'Rabbigfir warḥam wa anta khairur-rāḥimīn.',
                        'terjemahan' => 'Ya Tuhanku, berilah ampunan dan berilah rahmat, dan Engkau adalah Pemberi rahmat yang paling baik.',
                        'sumber' => 'QS. Al-Mu’minun: 118',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Dzikir Pagi & Petang',
                'slug' => 'doa-pagi-petang',
                'urutan' => 9,
                'doas' => [
                    [
                        'judul' => 'Doa Memasuki Waktu Pagi (Ashbahna wa Ashbahal Mulku Lillah)',
                        'slug' => 'doa-memasuki-waktu-pagi',
                        'teks_arab' => 'أَصْبَحْنَا وَأَصْبَحَ الْمُلْكُ لِلَّهِ وَالْحَمْدُ لِلَّهِ، لَا إِلَٰهَ إِلَّا اللَّهُ وَحْدَهُ لَا شَرِيكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ',
                        'teks_latin' => 'Aṣbaḥnā wa aṣbaḥal-mulku lillāhi wal-ḥamdu lillāh, lā ilāha illallāhu waḥdahū lā syarīka lah, lahul-mulku wa lahul-ḥamdu wa huwa ‘alā kulli syai’in qadīr.',
                        'terjemahan' => 'Kami telah memasuki waktu pagi dan kerajaan hanya milik Allah, segala puji bagi Allah. Tidak ada Tuhan selain Allah Yang Maha Esa, tiada sekutu bagi-Nya. Bagi-Nya kerajaan dan bagi-Nya pujian. Dia Mahakuasa atas segala sesuatu.',
                        'sumber' => 'HR. Muslim no. 2723',
                    ],
                    [
                        'judul' => 'Doa Memasuki Waktu Sore / Petang',
                        'slug' => 'doa-memasuki-waktu-petang',
                        'teks_arab' => 'أَمْسَيْنَا وَأَمْسَى الْمُلْكُ لِلَّهِ وَالْحَمْدُ لِلَّهِ، لَا إِلَٰهَ إِلَّا اللَّهُ وَحْدَهُ لَا شَرِيكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَىٰ كُلِّ شَيْءٍ قَدِيرٌ',
                        'teks_latin' => 'Amsainā wa amsal-mulku lillāhi wal-ḥamdu lillāh, lā ilāha illallāhu waḥdahū lā syarīka lah, lahul-mulku wa lahul-ḥamdu wa huwa ‘alā kulli syai’in qadīr.',
                        'terjemahan' => 'Kami telah memasuki waktu petang dan kerajaan hanya milik Allah, segala puji bagi Allah. Tidak ada Tuhan selain Allah Yang Maha Esa, tiada sekutu bagi-Nya. Bagi-Nya kerajaan dan bagi-Nya pujian. Dia Mahakuasa atas segala sesuatu.',
                        'sumber' => 'HR. Muslim no. 2723',
                    ],
                    [
                        'judul' => 'Doa Perlindungan Pagi & Petang (Bismillahilladzi La Yadhurru)',
                        'slug' => 'doa-bismillahilladzi-la-yadhurru',
                        'teks_arab' => 'بِسْمِ اللَّهِ الَّذِي لَا يَضُرُّ مَعَ اسْمِهِ شَيْءٌ فِي الْأَرْضِ وَلَا فِي السَّمَاءِ وَهُوَ السَّمِيعُ الْعَلِيمُ',
                        'teks_latin' => 'Bismillāhillażī lā yaḍurru ma‘asmihī syai’un fil-arḍi wa lā fis-samā’i wa huwas-samī‘ul-‘alīm.',
                        'terjemahan' => 'Dengan menyebut nama Allah yang bersama nama-Nya sesuatu apa pun di bumi dan di langit tidak akan membahayakan, dan Dialah Yang Maha Mendengar lagi Maha Mengetahui.',
                        'sumber' => 'HR. Abu Dawud no. 5088 & Tirmidzi no. 3388',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Ramadhan & Ibadah Puasa',
                'slug' => 'doa-ramadhan-puasa',
                'urutan' => 10,
                'doas' => [
                    [
                        'judul' => 'Doa Berbuka Puasa',
                        'slug' => 'doa-berbuka-puasa',
                        'teks_arab' => 'ذَهَبَ الظَّمَأُ وَابْتَلَّتِ الْعُرُوقُ وَثَبَتَ الْأَجْرُ إِنْ شَاءَ اللَّهُ',
                        'teks_latin' => 'Żahabaẓ-ẓama’u wabtallatil-‘urūqu wa ṡabatal-ajru in syā’allāh.',
                        'terjemahan' => 'Telah hilang rasa haus, telah basah urat-urat tenggorokan, dan telah tetap pahala insya Allah.',
                        'sumber' => 'HR. Abu Dawud no. 2357',
                    ],
                    [
                        'judul' => 'Doa Malam Lailatul Qadar',
                        'slug' => 'doa-malam-lailatul-qadar',
                        'teks_arab' => 'اللَّهُمَّ إِنَّكَ عَفُوٌّ تُحِبُّ الْعَفْوَ فَاعْفُ عَنِّي',
                        'teks_latin' => 'Allāhumma innaka ‘afuwwun tuḥibbul-‘afwa fa‘fu ‘annī.',
                        'terjemahan' => 'Ya Allah, sesungguhnya Engkau Maha Pemaaf dan menyukai pemaafan, maka maafkanlah kesalahanku.',
                        'sumber' => 'HR. Tirmidzi no. 3513 & Ibnu Majah no. 3850',
                    ],
                    [
                        'judul' => 'Doa Melihat Hilal Awal Bulan',
                        'slug' => 'doa-melihat-hilal',
                        'teks_arab' => 'اللَّهُمَّ أَهِلَّهُ عَلَيْنَا بِالْيُمْنِ وَالْإِيمَانِ، وَالسَّلَامَةِ وَالْإِسْلَامِ، رَبِّي وَرَبُّكَ اللَّهُ',
                        'teks_latin' => 'Allāhumma ahillahū ‘alainā bil-yumni wal-īmān, was-salāmati wal-islām, rabbī wa rabbukallāh.',
                        'terjemahan' => 'Ya Allah, tampakkanlah bulan itu kepada kami dengan membawa keberkahan dan keimanan, keselamatan dan Islam. Tuhanku dan Tuhanmu (wahai bulan) adalah Allah.',
                        'sumber' => 'HR. Tirmidzi no. 3451',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Taubat & Mohon Ampunan',
                'slug' => 'doa-taubat-ampunan',
                'urutan' => 11,
                'doas' => [
                    [
                        'judul' => 'Doa Taubat Nabi Adam AS',
                        'slug' => 'doa-taubat-nabi-adam',
                        'teks_arab' => 'رَبَّنَا ظَلَمْنَا أَنْفُسَنَا وَإِنْ لَمْ تَغْفِرْ لَنَا وَتَرْحَمْنَا لَنَكُونَنَّ مِنَ الْخَاسِرِينَ',
                        'teks_latin' => 'Rabbanā ẓalamnā anfusana wa il lam tagfir lanā wa tarḥamnā lanakūnanna minal-khāsirīn.',
                        'terjemahan' => 'Ya Tuhan kami, kami telah menzalimi diri kami sendiri. Jika Engkau tidak mengampuni kami dan memberi rahmat kepada kami, niscaya kami termasuk orang-orang yang rugi.',
                        'sumber' => 'QS. Al-A’raf: 23',
                    ],
                    [
                        'judul' => 'Doa Nabi Yunus AS dalam Kesempitan',
                        'slug' => 'doa-nabi-yunus',
                        'teks_arab' => 'لَا إِلَٰهَ إِلَّا أَنْتَ سُبْحَانَكَ إِنِّي كُنْتُ مِنَ الظَّالِمِينَ',
                        'teks_latin' => 'Lā ilāha illā anta subḥānaka innī kuntu minaẓ-ẓālimīn.',
                        'terjemahan' => 'Tidak ada Tuhan selain Engkau, Mahasuci Engkau. Sesungguhnya aku termasuk orang-orang yang zalim.',
                        'sumber' => 'QS. Al-Anbiya’: 87',
                    ],
                    [
                        'judul' => 'Doa Memohon Ampunan & Kasih Sayang Allah',
                        'slug' => 'doa-memohon-ampunan-kasih-sayang',
                        'teks_arab' => 'اللَّهُمَّ إِنِّي ظَلَمْتُ نَفْسِي ظُلْمًا كَثِيرًا، وَلَا يَغْفِرُ الذُّنُوبَ إِلَّا أَنْتَ، فَاغْفِرْ لِي مَغْفِرَةً مِنْ عِنْدِكَ وَارْحَمْنِي، إِنَّكَ أَنْتَ الْغَفُورُ الرَّحِيمُ',
                        'teks_latin' => 'Allāhumma innī ẓalamtu nafsī ẓulman kaṡīran, wa lā yagfiruż-żunūba illā anta, fagfir lī magfiratam min ‘indika warḥamnī, innaka antal-gafūrur-raḥīm.',
                        'terjemahan' => 'Ya Allah, sesungguhnya aku telah banyak menzalimi diriku sendiri, dan tidak ada yang dapat mengampuni dosa-dosa selain Engkau. Maka ampunilah aku dengan ampunan dari sisi-Mu dan rahmatilah aku. Sesungguhnya Engkaulah Yang Maha Pengampun lagi Maha Penyayang.',
                        'sumber' => 'HR. Bukhari no. 834 & Muslim no. 2705',
                    ],
                ],
            ],
            [
                'nama' => 'Doa Haji, Umrah & Tanah Suci',
                'slug' => 'doa-haji-umrah',
                'urutan' => 12,
                'doas' => [
                    [
                        'judul' => 'Bacaan Talbiyah Haji & Umrah',
                        'slug' => 'bacaan-talbiyah',
                        'teks_arab' => 'لَبَّيْكَ اللَّهُمَّ لَبَّيْكَ، لَبَّيْكَ لَا شَرِيكَ لَكَ لَبَّيْكَ، إِنَّ الْحَمْدَ وَالنِّعْمَةَ لَكَ وَالْمُلْكَ، لَا شَرِيكَ لَكَ',
                        'teks_latin' => 'Labbaikallāhumma labbaik, labbaika lā syarīka laka labbaik, innal-ḥamda wan-ni‘mata laka wal-mulk, lā syarīka lak.',
                        'terjemahan' => 'Aku penuhi panggilan-Mu ya Allah, aku penuhi panggilan-Mu. Aku penuhi panggilan-Mu, tiada sekutu bagi-Mu, aku penuhi panggilan-Mu. Sesungguhnya segala puji, nikmat, dan kerajaan hanyalah milik-Mu, tiada sekutu bagi-Mu.',
                        'sumber' => 'HR. Bukhari no. 1549 & Muslim no. 1184',
                    ],
                    [
                        'judul' => 'Doa Melihat Ka’bah',
                        'slug' => 'doa-melihat-kabah',
                        'teks_arab' => 'اللَّهُمَّ زِدْ هَٰذَا الْبَيْتَ تَشْرِيفًا وَتَعْظِيمًا وَتَكْرِيمًا وَمَهَابَةً، وَزِدْ مَنْ شَرَّفَهُ وَكَرَّمَهُ مِمَّنْ حَجَّهُ أَوِ اعْتَمَرَهُ تَشْرِيفًا وَتَكْرِيمًا وَتَعْظِيمًا وَبِرًّا',
                        'teks_latin' => 'Allāhumma zid hāżal-baita tasyrīfaw wa ta‘ẓīmaw wa takrīmaw wa mahābah, wa zid man syarrafahū wa karramahū mimman ḥajjahū awi‘tamarahū tasyrīfaw wa takrīmaw wa ta‘ẓīmaw wa birrā.',
                        'terjemahan' => 'Ya Allah, tambahkanlah kemuliaan, keagungan, kehormatan, dan kewibawaan pada Baitullah ini. Dan tambahkanlah pula kepada orang-orang yang memuliakan dan menghormatinya dari kalangan yang berhaji atau berumrah kemuliaan, kehormatan, keagungan, dan kebaikan.',
                        'sumber' => 'Kitab Al-Adzkar Imam An-Nawawi',
                    ],
                    [
                        'judul' => 'Doa di Antara Rukun Yamani dan Hajar Aswad',
                        'slug' => 'doa-rukun-yamani-hajar-aswad',
                        'teks_arab' => 'رَبَّنَا آتِنَا فِي الدُّنْيَا حَسَنَةً وَفِي الْآخِرَةِ حَسَنَةً وَقِنَا عَذَابَ النَّارِ',
                        'teks_latin' => 'Rabbanā ātinā fid-dunyā ḥasanataw wa fil-ākhirati ḥasanataw wa qinā ‘ażāban-nār.',
                        'terjemahan' => 'Ya Tuhan kami, berilah kami kebaikan di dunia dan kebaikan di akhirat, serta lindungilah kami dari siksa neraka.',
                        'sumber' => 'HR. Abu Dawud no. 1892',
                    ],
                ],
            ],
        ];

        foreach ($categories as $categoryData) {
            $doas = $categoryData['doas'];
            unset($categoryData['doas']);

            $category = DoaCategory::query()->updateOrCreate(
                ['slug' => $categoryData['slug']],
                $categoryData
            );

            foreach ($doas as $doaData) {
                Doa::query()->updateOrCreate(
                    ['slug' => $doaData['slug']],
                    [
                        ...$doaData,
                        'doa_category_id' => $category->id,
                        'is_published' => true,
                    ]
                );
            }
        }
    }
}
