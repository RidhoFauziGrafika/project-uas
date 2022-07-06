
    <header class="flex flex-col items-center justify-center text-start md:text-center h-[568px] bg-gradient-to-bl from-[#005FED] to-[#4891FF] py-10 md:py-[100px] px-10 md:px-[72px] text-white">
        <div class="lg:w-2/3 mt-[68px]">
            <h1 class="text-3xl md:text-6xl pb-6 font-bold leading-normal">Selamat Datang di Website Fasilitas Kesehatan Depok</h1>
            <p class="writing text-lg">Fasilitas Kesehatan Depok merupakan layanan yang menyediakan tempat untuk mencari segala fasilitas kesehatan yang berada di Depok, kami menyediakan layanan yang sesuai dengan kebutuhan layanan kesehatan masyarakat.</p>
        </div>
    </header>
    <div class="about grid lg:grid-rows-1 lg:grid-cols-2 gap-6 bg-white py-10 md:py-[100px] px-10 md:px-[72px]">
        <div>
            <h1 class="text-3xl pb-6 font-bold">Tentang Kami</h1>
            <p class="writings pb-6">Kami adalah penyedia layanan yang bersedia memberikan layanan berupa informasi mengenai fasilitas kesehatan yang berada di Depok. Kami menyediakan layanan tersebut berharap dapat membantu masyarakat dalam menemukan fasilitas kesehatan yang tepat di kota Depok.</p>
            <p class="writings">Kami juga memberikan kebebasan kepada pengguna untuk bisa memberikan review dan komentar kepada layanan yang telah kami sediakan, kami berharap kepada pengunjung layanan kami agar dapat tertarik dan yakin kepada fasilitas kesehatan yang mereka pilih. </p>
        </div>
        <div>
            <h1 class="text-3xl pb-6 font-bold">Team Kami</h1>
            <div class="grid grid-rows-4 grid-cols-1 md:grid-rows-2 md:grid-cols-2 gap-6">
                <div class="group developer flex items-center rounded-md border-2 border-[#005FED] p-5 transition ease-in-out hover:bg-[#005FED] hover:text-white hover:scale-[1.1]">
                    <img class="object-cover w-14 h-14 rounded-full mr-[10px] transform bg-slate-200" src="<?= base_url('uploads/developer/profile2.png') ?>" alt="">
                    <div>
                        <h2 class="text-xl font-bold">Ridho Fauzi Grafika</h2>
                        <p class="text-[#005FED] group-hover:text-white">Back-end</p>
                    </div>
                </div>
                <div class="group developer flex items-center rounded-md border-2 border-[#005FED] p-5 transition ease-in-out hover:bg-[#005FED] hover:text-white hover:scale-[1.1]">
                    <img class="object-cover w-14 h-14 rounded-full mr-[10px]" src="<?= base_url('uploads/developer/profile3.jpeg') ?>" alt="">
                    <div>
                        <h2 class="text-xl font-bold">M. Amirul Mustafa</h2>
                        <p class="text-[#005FED] group-hover:text-white">Back-end</p>
                    </div>
                </div>
                <div class="group developer flex items-center rounded-md border-2 border-[#005FED] p-5 transition ease-in-out hover:bg-[#005FED] hover:text-white hover:scale-[1.1]">
                    <img class="object-cover w-14 h-14 rounded-full mr-[10px] object-[60%]" src="<?= base_url('uploads/developer/profile1.jpg') ?>" alt="">
                    <div>
                        <h2 class="text-xl font-bold">Irsal Fathi Farhat</h2>
                        <p class="text-[#005FED] group-hover:text-white">Front-end & UI Designer</p>
                    </div>
                </div>
                <div class="group developer flex items-center rounded-md border-2 border-[#005FED] p-5 transition ease-in-out hover:bg-[#005FED] hover:text-white hover:scale-[1.1]">
                    <img class="object-cover w-14 h-14 rounded-full mr-[10px]" src="<?= base_url('uploads/developer/profile4.jpg') ?>" alt="">
                    <div>
                        <h2 class="text-xl font-bold">Muhammad Fahriza</h2>
                        <p class="text-[#005FED] group-hover:text-white">Back-end</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-container flex flex-col items-center justify-center bg-gradient-to-bl from-[#005FED] to-[#4891FF] py-10 md:py-[100px] px-10 md:px-[72px] text-white">
        <h1 class="text-center text-6xl pb-6 font-bold leading-normal">Fasilitas Kesehatan</h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper pb-6">
                <?php foreach ($faskes as $fsk) { ?>
                <div class="swiper-slide flex flex-col text-[#23292B] rounded-md bg-white shadow-lg overflow-hidden cursor-pointer transition ease-in-out hover:scale-[0.955]" onclick="window.location='<?= base_url() ?><?= strtolower(str_replace(' ', '', $fsk['jenis'])) ?>/detail/<?= $fsk['id'] ?>'">
                    <?php 
                    $arrayFoto = array('foto1' => $fsk['foto1'], 'foto2' => $fsk['foto2'], 'foto3' => $fsk['foto3']);
                    foreach ($arrayFoto as $foto => $val) {
                        $filegambar = base_url('uploads/'.strtolower(str_replace(' ', '', $fsk['jenis'])).'/'.strtolower(str_replace(' ', '', $fsk['nama'])).'/'.$val);
                        $array = get_headers($filegambar);
                        $string = $array[0];
                        if(strpos($string, "200"))
                        {
                            echo '<img class="object-cover w-full h-[204px]" src="'.$filegambar.'" alt="">';
                            break;
                        } elseif (!strpos($string, "200") && $val == $fsk['foto3']) {
                            echo '<img class="object-cover w-full h-[204px]" src="'.base_url('uploads/No_Image_Available.jpg').'" alt="">';
                            break;
                        }
                        else {
                        }
                    }
                    ?>
                    <div class="flex flex-col justify-between h-[232px] p-3 w-full">
                        <div class="overflow-hidden">
                            <p class="text-xs font-bold"><?= $fsk['jenis'] ?></p>
                            <h3><?= $fsk['nama'] ?></h3>
                            <p class="text-xs text-[#9A9DA0] pb-3"><?= $fsk['alamat'] ?></p>
                            <p class="text-ellipsis text-xs pb-3"><?= $fsk['deskripsi'] ?></p>
                        </div>
                        <div class="w-full flex justify-between items-center">
                            <div class="flex items-center">
                                <i class='bx bxs-star text-md pr-1' style="color: #FFC400;"></i>
                                <p class="text-[#9A9DA0]"><?= $fsk['skor_rating'] ?></p>
                            </div>
                            <p class="text-[#9A9DA0]"><span class="text-[#005FED] font-bold"><?= $fsk['jumlah_dokter'] ?></span> Dokter <span class="text-[#005FED] font-bold"><?= $fsk['jumlah_pegawai'] ?></span> Pegawai</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div id="swiper-pagination-index" class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 24,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 3,
          },
          1024: {
            slidesPerView: 4,
          },
        },
      });
    </script>