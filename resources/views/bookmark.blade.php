@extends('layout.main')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="bg-blur"></div>

    <!-- Card Layout Wrapper -->
    <div class="card-layout-wrapper">
        <div class="card-layout-container">

            @php
                $cards = [
                    [
                        'title' => 'Tanaman yang Bermanfaat Sebagai Pestisida Alami dari Serangan Hama di Kebun',
                        'text' =>
                            'Liputan6.com, Jakarta - Berkebun dapat memberikan relaksasi dan juga menjaga kesehatan mental lewat aktivitas merawat makhluk hidup. Berkebun bahkan bisa menghasilkan makanan bergizi bagi Anda dan keluarga jika yang ditanam adalah...',
                        'img' => asset('/assets/img/img-bookmark-1.png'),
                        'link' =>
                            'https://www.liputan6.com/lifestyle/read/5418665/tanaman-yang-bermanfaat-sebagai-pestisida-alami-dari-serangan-hama-di-kebun',
                    ],
                    [
                        'title' => 'Serba-serbi Pestisida Ramah Lingkungan',
                        'text' =>
                            'Liputan6.com, Jakarta - Secara umum, pestisida dikenal sebagai bahan yang bermanfaat dalam keberlangsungan tanaman di bidang pertanian dan perkebunan. Fungsi utamanya meminimalisir kehadiran Organisme Pengganggu Tumbuhan (OPT) yang dapat menurunkan...',
                        'img' => asset('/assets/img/img-bookmark-2.png'),
                        'link' =>
                            'https://www.liputan6.com/lifestyle/read/4700519/serba-serbi-pestisida-ramah-lingkungan',
                    ],
                    [
                        'title' => 'Resisten Hama, Kementan: Petani Harus Gunakan Pestisida Sesuai Dosis Anjuran',
                        'text' =>
                            'Liputan6.com, Jakarta Banyak petani menggunakan sarana produksi pembasmi hama yang berlebihan. Ya, penggunaan pestisida kimia di tingkat petani itu, justri membuat hama menjadi resistensi. Maka untuk membantu petani dalam aplikasi pestisida dengan baik, Kementerian Pertanian (Kementan) menyarankan...',
                        'img' => asset('/assets/img/img-bookmark-3.png'),
                        'link' =>
                            'https://www.liputan6.com/bisnis/read/4075799/resisten-hama-kementan-petani-harus-gunakan-pestisida-sesuai-dosis-anjuran',
                    ],
                    [
                        'title' => 'Awas, Sepertiga Lahan Pertanian Global Berisiko Kena Polusi Pestisida',
                        'text' =>
                            'KOMPAS.com - Sebuah studi yang diterbitkan di Nature Geoscience mengungkap bahwa sepertiga lahan pertanian global berisiko tinggi terkena polusi pestisida dan sisa bahan kimia lainnya. Penggunaan pestisida sendiri telah melonjak secara global karena produksi pertanian telah...',
                        'img' => asset('/assets/img/img-bookmark-4.png'),
                        'link' =>
                            'https://www.kompas.com/sains/read/2021/04/06/080200623/awas-sepertiga-lahan-pertanian-global-berisiko-kena-polusi-pestisida',
                    ],
                    [
                        'title' => 'Upaya Menciptakan Pertanian Berkelanjutan Melalui Teknologi Reduktan Pestisida',
                        'text' =>
                            'JAKARTA, KOMPAS.com - Pemerintah terus mendorong pertanian berkelanjutan di Indonesia. Hal ini lantaran pemerintah mencanangkan target menuju swasembada pangan pada 2027 mendatang, untuk mencapai produksi beras 10 juta ton.  Untuk itu, perusahaan pertanian yang berbasis di Jawa Timur, Pandawa Agri, memperkenalkan...',
                        'img' => asset('/assets/img/img-bookmark-5.png'),
                        'link' =>
                            'https://money.kompas.com/read/2024/10/10/110606426/upaya-menciptakan-pertanian-berkelanjutan-melalui-teknologi-reduktan-pestisida',
                    ],
                    [
                        'title' => 'Pestisida adalah Pembasmi Hama, Kenali Kegunaan dan Jenisnya',
                        'text' =>
                            'Liputan6.com, Jakarta Pestisida adalah salah satu pengendali hama andalan petani. Hama seperti gulma, serangga, siput atau pengerat, bisa merugikan pertanian. Pestisida adalah zat yang membantu petani membasmi dan mencegah hama. Pestisida bukanlah penemuan baru. Ia mulai digunakan secara...',
                        'img' => asset('/assets/img/img-bookmark-6.png'),
                        'link' =>
                            'https://www.liputan6.com/hot/read/5283552/pestisida-adalah-pembasmi-hama-kenali-kegunaan-dan-jenisnya',
                    ],
                    [
                        'title' => 'Cara Membuat Pestisida dari Bahan Dapur, Ampuh Basmi Hama Tanaman',
                        'text' =>
                            'JAKARTA, KOMPAS.com - Pestisida merupakan salah satu "senjata" ampuh untuk mengusir hama tanaman. Namun, pestisida tidak harus dibeli di toko tanaman. Anda dapat membuat sendiri pestisida di rumah. Ada beberapa bahan dapur yang dapat digunakan untuk membuat pestisida, di antaranya...',
                        'img' => asset('/assets/img/img-bookmark-7.png'),
                        'link' =>
                            'https://www.kompas.com/homey/read/2024/08/30/210000776/cara-membuat-pestisida-dari-bahan-dapur-ampuh-basmi-hama-tanaman',
                    ],
                    [
                        'title' => 'Pentingnya Penggunaan Pestisida Secara Bijak di Sektor Pertanian',
                        'text' =>
                            'Liputan6.com, Jakarta Pandawa Agri Indonesia (PAI), perusahaan berbasis life-science, menggelar forum edukasi keberlanjutan (sustainability education forum) di Wilmar Kalimantan Tengah dengan topik Educate to Innovate: Edukasi Keberlanjutan dan...',
                        'img' => asset('/assets/img/img-bookmark-8.png'),
                        'link' =>
                            'https://www.liputan6.com/bisnis/read/5704544/pentingnya-penggunaan-pestisida-secara-bijak-di-sektor-pertanian',
                    ],
                    [
                        'title' => 'Ilmuwan Ciptakan Tanaman Pendeteksi Pestisida Berbahaya',
                        'text' =>
                            'KOMPAS.com - Tanaman terus saja mengejutkan kita melalui berbagai manfaatnya. Dari sumber pangan hingga obat-obatan, kegunaan tanaman dalam menjaga kehidupan di Bumi telah menjadi fakta yang tak terbantahkan. Belum lama ini, ilmuwan berhasil menjadikan tanaman untuk...',
                        'img' => asset('/assets/img/img-bookmark-9.png'),
                        'link' =>
                            'https://www.kompas.com/sains/read/2023/10/30/183000923/ilmuwan-ciptakan-tanaman-pendeteksi-pestisida-berbahaya',
                    ],
                ];
            @endphp

            <!-- Render Card -->
            @foreach ($cards as $card)
                <div class="card-item">
                    <img src="{{ asset($card['img']) }}" class="card-item-img" alt="Image">
                    <div class="card-item-body">
                        <h5 class="card-item-title text-justify"><strong>{{ $card['title'] }}</strong></h5>
                        <p class="card-item-text text-justify">{{ $card['text'] }}</p>
                        <a href="{{ $card['link'] }}" class="btn btn-primary" target="_blank">Baca Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
