        <!-- Menubar Başlat Aveiro -->
        <header class="main_menu single_page_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">

                                    <?php 
                                    error_reporting(0);
                                    /*-----------------------[ AYARLAR ]------------------------------*/
                                     $server_settings['ip'] = "SERVER_IP_ADRESI";
                                    $server_settings['port'] = "SERVER_PORTU";
                                     $server_settings['max_slots'] = 32;
                                    /*----------------------------------------------------------------*/
                                    $content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
                                    if($content)
                                    {
                                        $gta5_players = file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/players.json");
	                                    $content = json_decode($gta5_players, true);
	                                    $pl_count = count($content);
                                        $SRV_STATUS1 = "<font style='color: green;'>Çevrimiçi</font> <font style='color: white;'> </br> Oyuncular:</font> <font style='color: red;'>";
                                        $SRV_STATUS2 = "$pl_count";
                                        $SRV_STATUS3 = "/"; 
                                        $SRV_STATUS4 = "$server_settings[max_slots]";
                                        $SRV_STATUS5 = "</font>";
                                        $SRV_STATUS6 = $SRV_STATUS1 . $SRV_STATUS2 . $SRV_STATUS3 . $SRV_STATUS4 . $SRV_STATUS5;
									}
                                    else
                                    {
                                        $SRV_STATUS6 = "<font style='color: red;'>Çevrimdışı</font>";
									}
                                    echo "<div style=' margin-left: 0px; margin-top: 40px;  position: static; '>";
                                    echo"<font style='color: white;'>Sunucu Durumu: </font> $SRV_STATUS6 </div>";
                                    ?>

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Anasayfa</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/panel">Panel</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            GTA RP
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="el-kitabi.php"> El Kitabı</a>
                                            <a class="dropdown-item" href="kurallar.php">Kurallar</a>
                                            <a class="dropdown-item" href="kurallar.php">Cezalar</a>
                                            <a class="dropdown-item" href="galeri.php">Galeri</a>
                                            <a class="dropdown-item" href="sunucu-durumu.php">Sunucu Durumu</a>
                                        </div>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Sayfalar
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="iletisim.php">İletişim</a>
                                            <a class="dropdown-item" href="bagis.php">Bağış</a>
                                            <a class="dropdown-item" href="https://www.fivemturk.com" target="_blank">Forum</a>
                                            <a class="dropdown-item" href="/panel">Whitelist Başvuru</a>
                                            <a class="dropdown-item" href="/panel">Destek</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="#yakinda" class="btn_1 d-none d-sm-block">Şimdi Yükle</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Menubar Bitir Aveiro -->