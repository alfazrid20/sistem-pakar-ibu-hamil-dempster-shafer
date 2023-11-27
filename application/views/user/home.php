       				<div class="container">
					<div class="row justify-content-end fullscreen align-items-center" >
						<div class="col-lg-6 col-md-12 banner-left">
								<h1 class="text-white">
									Hai Bunda, <br>
									konsultasikan penyakit anda segera..						
								</h1>
								<p class="mx-auto text-white  mt-20 mb-40">
									Jagalah kesehatan bunda, karena pertumbuhan bayi tergantung pada kesehatan masa-masa hamil anda.
								</p>
								<?php 
								if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
								?>
								<a href="<?php echo site_url() ?>/welcome/diagnosa" class="text-uppercase header-btn">Diagnosa Sekarang <i class="fa fa-arrow-right"></i></span></a>
								<?php } else{ ?>
								<a href="<?php echo site_url() ?>/welcome/diagnosa" class="text-uppercase header-btn">Diagnosa Sekarang <i class="fa fa-arrow-right"></i></span></a>
								<?php } ?>
						</div>
						<div class="col-lg-6 col-md-12 no-padding banner-right">
							<img style="height: 587px; width: 800px; margin-bottom: 30px;" src="<?php echo base_url() ?>assets/templateuser/img/logo123.jpg" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			

			<!-- Start service Area -->
			<section class="service-area section-gap" id="feature" style="background-color: #F9F9FF;">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Informasi Penyakit</h1>
								<p>Lihat beberapa informasi seputar penyakit pada ibu hamil.</p>
							</div>
						</div>
					</div>						
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-6  col-md-6 mb-30">
								<div class="single-service" style="background-color: white; padding: 20px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/stethoscope.png" alt="">
									<h4><a href="#">Anemia</a></h4>	
									<span>Anemia kehamilan adalah kondisi tubuh dengan kadar hemoglobin dalam darah <11g% pada trimester 1 dan 3 atau kadar Hb <10,5 g% pada trimester 2 dimana kondisi yang terjadi ketika tubuh kekurangan sel darah merah, lebih rendah daripada batas normalnya, kondisi ini juga bisa terjadi jika sel darah merah tidak mengandung cukup hemoglobin yang bertugas menyalurkan oksigen ke seluruh tubuh, Kekurangan darah merah dapat menyebabkan cepat merasa lelah atau lemah karena organ dalam tubuh tidak menerima cukup oksigen dan nutrisi. Anda juga mungkin mengalami gejala lain, seperti sesak napas, pusing, atau sakit kepala.</span>							
								</div>
							</div>
							<div class="col-lg-6  col-md-6 mb-30">
								<div class="single-service" style="background-color: white; padding: 20px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/antibiotic.png" alt="">
									<h4><a href="#">Hiperemesis Gravidarum</a></h4>
									<span>Hiperemesis gravidarum adalah gangguan yang terjadi dengan gejala mual dan muntah ekstrem dan terus-menerus terjadi selama kehamilan, Kondisi ini termasuk jarang terjadi. Meski begitu, kondisi ini dapat menyebabkan dehidrasi, penurunan berat badan, dan ketidakseimbangan elektrolit.</span>								
								</div>
							</div>
							<div class="col-lg-6  col-md-6 mb-30">
								<div class="single-service" style="background-color: white; padding: 20px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/medical-app.png" alt="">
									<h4><a href="#">Keguguran</a></h4>		
									<span>Keguguran adalah berhentinya kehamilan secara spontan saat usia kehamilan belum mencapai 20 minggu. Sebagian besar kasus keguguran terjadi pada awal kehamilan, terkadang bahkan sebelum wanita mengetahui bila dirinya hamil, Perlu diketahui bahwa perdarahan ringan atau keluarnya bercak darah dari vagina saat hamil muda bukan selalu pertanda keguguran. Hal ini umum terjadi dalam waktu 6–12 hari setelah pembuahan, yaitu saat janin menempel di dinding rahim dan terjadi maksimal selama 3 hari. Perdarahan ini dinamakan perdarahan implantasi, perdarahan bisa menjadi tanda keguguran bila disertai nyeri hebat di perut bagian bawah dan disertai keluarnya jaringan atau gumpalan dari vagina. Bila mengalami kondisi tersebut, ibu hamil dianjurkan segera mendatangi pusat layanan kesehatan terdekat untuk mendapatkan penanganan secepatnya.</span>						
								</div>
							</div>
							<div class="col-lg-6 col-md-6 ">
								<div class="single-service" style="background-color: white; padding: 20px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/syringe.png" alt="">
									<h4><a href="#">Plasenta Previa</a></h4>	
									<span>Plasenta previa adalah kondisi ketika sebagian atau seluruh plasenta menutupi mulut rahim.Plasenta atau ari-ari akan terbentuk dan menempel pada dinding rahim saat seorang wanita menjadi hamil. Organ ini terhubung dengan bayi melalui tali pusar yang berfungsi untuk menyalurkan oksigen dan nutrisi. Selama masa kehamilan, rahim seorang wanita akan berkembang dan plasenta dengan kondisi normal akan melebar ke arah atas serta menjauhi leher rahim atau serviks. Apabila tetap berada di bagian bawah rahim atau di dekat serviks, plasenta dapat menutupi sebagian atau seluruh jalan lahir bayi. Kondisi inilah yang disebut plasenta previa.</span>							
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-30">
								<div class="single-service" style="background-color: white; padding: 20px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/embryo.png" alt="">
									<h4><a href="#">Hamil Kembar</a></h4>	
									<span>Ibu yang hamil lebih dari satu janin atau hamil kembar lebih berisiko mengalami komplikasi selama kehamilan. Beberapa komplikasi kehamilan kembar tersebut bisa berdampak pada kondisi ibu hamil dan janin. Bumil, mari kenali apa saja komplikasi saat hamil kembar yang perlu diwaspadai, Sebagian besar ibu yang hamil kembar dapat menjalani kehamilan sehat dan tidak mengalami gangguan sehingga dapat melahirkan bayi kembar dengan lancar. Namun, tidak sedikit pula ibu hamil kembar yang mengalami komplikasi saat kehamilan, Sebagian komplikasi tersebut ada yang bersifat ringan, ada pula yang berpotensi membahayakan nyawa ibu hamil dan janin kembarnya.</span>							
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-30">
								<div class="single-service" style="background-color: white; padding: 20px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/blood-transfusion.png" alt="">
									<h4><a href="#">Preeklampsia</a></h4>	
									<span>Preeklamsia adalah sebuah komplikasi pada kehamilan yang ditandai dengan tekanan darah tinggi (hipertensi) dan tanda-tanda kerusakan organ, misalnya kerusakan ginjal yang ditunjukkan oleh tingginya kadar protein pada urine (proteinuria). Preeklamsia juga sering dikenal dengan nama toksemia. Gejala preeklamsia biasanya muncul saat usia kehamilan memasuki minggu ke-20 atau lebih (paling umum usia kehamilan 24-26 minggu), sampai tak lama setelah bayi lahir. Preeklamsia yang tidak disadari oleh sang ibu hamil bisa berkembang menjadi eklamsia, kondisi medis serius yang mengancam keselamatan ibu hamil dan janinnya.</span>							
								</div>
							</div>		
							<div class="col-lg-6 col-md-6 mb-30">
								<div class="single-service" style="background-color: white; padding: 20px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/perfusion.png" alt="">
									<h4><a href="#">Kehamilan Dengan Resiko Tinggi</a></h4>						
									<span>Kehamilan risiko tinggi adalah suatu kondisi kehamilan yang bisa mengancam kesehatan dan keselamatan ibu dan janin. Kondisi ini bisa disebabkan karena komplikasi saat kehamilan, namun bisa juga disebabkan oleh suatu kondisi medis yang sudah ibu miliki sejak sebelum hamil. Ibu hamil yang mengalami kondisi ini harus rajin memeriksakan diri dan membutuhkan pengawasan dan perawatan ekstra dari dokter, Kehamilan risiko tinggi paling rentan dialami oleh ibu yang pernah memiliki masalah pada kehamilan sebelumnya, misalnya melahirkan secara prematur. Bukan berarti apabila Anda pernah melahirkan prematur dulu, kehamilan yang sekarang otomatis juga akan prematur. Hanya saja, risikonya mungkin dapat muncul dengan perwujudan yang berbeda, Usia Anda juga dapat memengaruhi seberapa besar kemungkinan Anda memiliki kehamilan berisiko tinggi. Jika Anda hamil di atas usia 35 tahun atau justru lebih muda, misalnya pada saat remaja, risiko Anda untuk mengalami masalah kesehatan pun meningkat.</span>
								</div>
							</div>		
							<div class="col-lg-6 col-md-6 mb-30">
								<div class="single-service" style="background-color: white; padding: 20px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/uterus.png" alt="">
									<h4><a href="#">Ketuban Pecah Dini</a></h4>	
									<span>Ketuban pecah dini adalah kondisi ketika kantung ketuban pecah sebelum persalinan dimulai. Kondisi ini bisa terjadi ketika perkembangan janin belum sempurna, yaitu sebelum minggu ke-37 masa kehamilan. Namun, kondisi ini juga dapat terjadi ketika perkembangan janin telah sempurna, Perlu diketahui bahwa makin awal pecah ketuban terjadi di masa kehamilan, maka makin serius kondisi tersebut. Oleh sebab itu, pecah ketuban perlu segera ditangani untuk menghindari terjadinya komplikasi pada ibu dan calon bayi.</span>							
								</div>
							</div>		
						</div>																	
					</div>
				</div>	
			</section>
			<!-- End service Area -->
			
			<!-- Start call-to-action Area -->
			
			<!-- End call-to-action Area -->
			<section id="tentang" class="call-to-action-area section-gap " style="background-image: ;" >
			<div id="testimonial" class="section md-padding-5">

				<!-- Background Image -->
				<div class="bg-img" style="background-image: url('<?php echo base_url() ?>assets/templateuser/./img/bg.jpg');">
					<div class="overlay"></div>
				</div>
				<!-- /Background Image -->

				<!-- Container -->
				<div class="container">
						<div class="col-lg-12">
							<h2 class="text-white text-center">Tentang Pakar</h2>				
						</div>
						<br>
					<!-- Row -->
					<div class="row">

					<!-- Testimonial slider -->
						<div id="testimonial-slider" class="owl-carousel owl-theme">
							<div class="row">
								<!-- testimonial -->
								<div class="col-md-6 ">
									<div class="testimonial">
										<div class="testimonial-meta" style="padding-top: 30px;">
											<img src="<?php echo base_url() ?>assets/templateuser/./img/doctor5.png" alt=""  style="width: 200px !important; height: 200px !important;">
											<h3 class="white-text" style="margin-left: 130px;">Gesti Ade Pratiwi, Amd.Keb</h3>
											<span style="margin-left: 130px; color: black;">Spesialis Kebidanan dan Kandungan</span>
										</div>
										<div class="col-lg-12 col-sm-12 footer-social" style="text-align: left; margin-left: 205px; padding-top: 30px;">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-dribbble"></i></a>
											<a href="#"><i class="fa fa-behance"></i></a>
										</div>
									</div>
								</div>
								<!-- /testimonial -->
								<div class="col-md-6">
									<span style="color: white;">Alamat : </span><br>
									<span style="color: black;">Jl. Dr. Sutomo No.85, Kubu Marapalam, Kec. Padang Tim., Kota Padang, Sumatera Barat</span><br>
									<span style="color: white;">Praktek : </span><br>
									<span style="color: black;">Klinik Mitra Sandona</span><br>
									
								</div>
							</div>


						</div>
					<!-- /Testimonial slider -->

					</div>
					<!-- /Row -->

				</div>
				<!-- /Container -->

			</div>
			</section>	
			
			

			<!-- <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest News from all categories</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div> -->		

			
