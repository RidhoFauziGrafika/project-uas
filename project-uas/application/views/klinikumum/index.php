
    <header class="flex flex-col items-center justify-center text-start md:text-center h-[568px] bg-gradient-to-bl from-[#005FED] to-[#4891FF] py-10 md:py-[100px] px-10 md:px-[72px] text-white">
        <div class="lg:w-2/3 mt-[68px]">
            <h1 class="text-3xl md:text-6xl pb-6 font-bold leading-normal">Klinik Umum</h1>
            <p class="writing text-lg">Kami menyediakan banyak sekali daftar klinik umum yang berada di depok dengan berbagai macam review dan komentar dari berbagai macam pengunjung layanan kami.</p>
        </div>
    </header>
    <div class="swiper-container bg-white py-10 md:py-[100px] px-10 md:px-[72px] border-b-2 border-b-[#D1D5DB]">
        <div class="grid sm:grid-rows-1 sm:grid-cols-2 md:grid-rows-3 md:grid-cols-3 lg:grid-rows-2 lg:grid-cols-4 gap-6">
            <?php foreach ($faskes as $fsk) { ?>
            <div class="swiper-slide flex flex-col text-[#23292B] rounded-md bg-white shadow-lg overflow-hidden cursor-pointer transition ease-in-out hover:scale-[0.955]" onclick="window.location='<?= base_url() ?>index.php/<?= str_replace(' ', '', $fsk['jenis']) ?>/detail/<?= $fsk['id'] ?>'">
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
    </div>