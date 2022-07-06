
    <header class="flex flex-col items-center justify-center text-start md:text-center bg-gradient-to-bl from-[#005FED] to-[#4891FF] py-10 md:py-[100px] px-10 md:px-[72px] text-white">
        <div class="lg:w-2/3 mt-[68px]">
            <p class="text-lg pb-6"><a href="<?php echo base_url("/") ?>">Beranda</a> / <a href="<?php echo base_url(strtolower(str_replace(' ', '', $faskes->jenis)).'/index/') ?>"><?= $faskes->jenis ?></a> / <a class="font-bold" href="<?php echo base_url(strtolower(str_replace(' ', '', $faskes->jenis)).'/detail/'.$faskes->id) ?>"><?= $faskes->nama ?></a></p>
            <h1 class="text-3xl md:text-6xl pb-6 font-bold leading-normal"><?= $faskes->nama ?></h1>
            <p class="writing text-lg text lowercase"><span class="capitalize">Berikut</span> detail dari <?= $faskes->nama ?> yang berada di <?= $faskes->kecamatan ?> dengan detail lokasinya yang berlokasi di kabupaten depok.</p>
        </div>
    </header>
    <div class="detail bg-white py-10 md:py-[50px] px-10 md:px-[182px] border-b-2 border-b-[#D1D5DB] w-full">
        <div class="grid grid-rows-3 grid-cols-1 lg:grid-rows-2 lg:grid-cols-2 gap-6 pb-6">
        <?php 
            $arrayFoto = array('foto1' => $faskes->foto1, 'foto2' => $faskes->foto2, 'foto3' => $faskes->foto3);
            foreach ($arrayFoto as $foto => $val) { 
                $filegambar = base_url('uploads/'.strtolower(str_replace(' ', '', $faskes->jenis)).'/'.strtolower(str_replace(' ', '', $faskes->nama)).'/'.$val);
                $array = get_headers($filegambar);
                $string = $array[0];
                if(strpos($string, "200") && $val == $faskes->foto1)
                {
                    echo '<img class="w-full h-[300px] md:h-full object-cover row-span-1 md:row-span-2 rounded-md" src="'.$filegambar.'" alt="">';
                } elseif (strpos($string, "200") && $val == ($val == $faskes->foto2 || $val == $faskes->foto3))
                {
                    echo '<img class="w-full h-[300px] object-cover rounded-md" src="'.$filegambar.'" alt="">';
                } else {
                    echo '';
                }
            }
            ?>
        </div>
        <div class="grid grid-rows-1 grid-cols-2 pb-6">
            <p class="text-[#9A9DA0]"><span class="text-[#005FED] font-bold"><?= $faskes->jumlah_dokter ?></span> Dokter</p>
            <p class="text-end text-[#9A9DA0]"><span class="text-[#005FED] font-bold"><?= $faskes->jumlah_pegawai ?></span> Pegawai</p>
        </div>
        <h3 class="text-2xl pb-6 font-bold"><?= $faskes->nama ?></h3>
        <p class="pb-6"><?= $faskes->deskripsi ?></p>
        <h3 class="text-2xl pb-6 font-bold">Website</h3>
        <p class="pb-6 text-[#005FED]"><?= $faskes->website ?></p>
        <h3 class="text-2xl pb-6 font-bold">Lokasi</h3>
        <p class="pb-6 text-[#005FED]"><?= $faskes->alamat ?></p>
        <div class="map-container">
            <object class="w-full h-[250px] md:h-[500px] rounded-md"
                data="https://maps.google.com/maps?q=<?= $faskes->latlong ?>&hl=id&z=18&amp;output=embed" referrerpolicy="no-referrer-when-downgrade"></object>
            </div>
        </div>
    </div>
    <div class="ulasan bg-gradient-to-bl from-[#005FED] to-[#4891FF] py-10 md:py-[50px] px-10 md:px-[182px] text-white">
    <?php if ($this->session->userdata('username')) { ?>
        <h1 class="text-2xl pb-6 font-bold">Kirim Ulasan</h1>
        <?= form_open(base_url(strtolower(str_replace(' ', '', $faskes->jenis)).'/save')) ?>
            <div class="bg-white p-5 rounded-md text-[#23292B] mb-6 shadow-lg">
                <div class="flex items-center justify-between pb-6">
                    <h3 class="text-xl font-bold capitalize"><?= ucfirst($this->session->userdata('username')) ?></h3>
                    <div class="flex items-center">
                        <div class="pr-1">
                            <input class="sr-only peer" type="radio" id="star1" name="rating" value="1">
                            <label class="text-[#D1D5DB] peer-checked:text-[#FFC400] text-md" for="star1"><i class='bx bxs-star'></i></label>
                        </div>
                        <div class="pr-1">
                            <input class="sr-only peer" type="radio" id="star2" name="rating" value="2">
                            <label class="text-[#D1D5DB] peer-checked:text-[#FFC400] text-md" for="star2"><i class='bx bxs-star'></i></label>
                        </div>
                        <div class="pr-1">
                            <input class="sr-only peer" type="radio" id="star3" name="rating" value="3">
                            <label class="text-[#D1D5DB] peer-checked:text-[#FFC400] text-md" for="star3"><i class='bx bxs-star'></i></label>
                        </div>
                        <div class="pr-1">
                            <input class="sr-only peer" type="radio" id="star4" name="rating" value="4">
                            <label class="text-[#D1D5DB] peer-checked:text-[#FFC400] text-md" for="star4"><i class='bx bxs-star'></i></label>
                        </div>
                        <div class="pr-1">
                            <input class="sr-only peer" type="radio" id="star5" name="rating" value="5">
                            <label class="text-[#D1D5DB] peer-checked:text-[#FFC400] text-md" for="star5"><i class='bx bxs-star'></i></label>
                        </div>
                    </div>
                </div>
                <div class="bg-[#F3F4F6] p-3 mb-6 rounded-md w-full h-32 md:h-52 overflow-auto">
                    <div class="h-full overflow-hidden">
                        <textarea name="isi" id="isi" cols="30" placeholder="Masukkan ulasan" rows="10" class="bg-inherit outline-none w-full resize-none" maxlength="400" required></textarea>
                    </div>
                </div>
                <input id="username" name="username" type="text" class="hidden form-control" value="<?= $user->id ?>" required>
                <input id="faskes" name="faskes" type="number" class="hidden form-control" value="<?= $faskes->id ?>" required>
                <button type="submit" class="block w-full bg-[#005FED] rounded-md text-white py-[7px] px-[13px] transition ease-in-out hover:bg-[#0054D2] focus:bg-[#0049B7] focus:ring-4 active:ring-[rgba(0, 95, 237, 0.5)]">Kirim</button>
            </div>
        <?= form_close() ?>
        <?php } else { ?>
            <div class="bg-white p-5 rounded-md text-[#23292B] mb-6 shadow-lg">
                <div class="text-center">
                    <h3 class="text-xl font-bold capitalize">Silahkan Login untuk memberikan ulasan</h3>
                </div>
            </div>
        <?php } ?>
        <h1 class="text-2xl font-bold pb-6">Ulasan</h1>
        <div class="swiper mySwiper text-[#23292B]">
            <div class="swiper-wrapper pb-6">
                <?php if(!empty($komentar)) { foreach ($komentar as $kmt) { ?>
                    <div class="swiper-slide flex flex-col bg-white p-5 rounded-md shadow-lg">
                        <div class="flex w-full items-center justify-between pb-6">
                            <h3 class="text-xl font-bold capitalize"><?= $kmt['username'] ?></h3>
                            <p class="text-xs text-[#9A9DA0]"><?= $kmt['tanggal'] ?></p>
                        </div>
                        <div class="flex w-full items-center pb-6">
                            <i class='bx bxs-star text-md pr-1' style="color: #FFC400;"></i>
                            <p class="text-xs text-[#9A9DA0]"><?= $kmt['nilai_rating_id'] ?></p>
                        </div>
                        <div class="bg-[#F3F4F6] p-3 rounded-md w-full h-52">
                            <div class="h-full overflow-hidden">
                                <p><?= $kmt['isi'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php }} else {?>
                    <div class="w-full flex items-center justify-center p-6 bg-white rounded-md">
                        <h1 class="text-4xl font-bold w-full text-center bg-[#F3F4F6] text-[#9A9DA0] rounded-md p-6">Tidak ada Ulasan</h1>
                    </div>
                <?php } ?>
            </div>
            <div id="swiper-pagination-detail" class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 24,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicMainBullets: 4,
            renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2,
            },
        },
    });
    </script>