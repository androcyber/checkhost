<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- SEO -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-Host</title>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/custom.css">
</head>
<body>
    <!-- BACKGROUND -->
    <div class="background"></div>

    <!-- HEADER -->
    <header>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col text-center header-title"><b><a href="#">Check-Host</a></b></div>
            </div>
        </div>
    </header>

    <!-- DOMAIN -->
    <div class="container box">
        <div class="row mt-4">
            <div class="col-1 col-lg-2"></div>
            <div class="col-10 col-lg-8">
                <input id="target" name="domain" placeholder="Domain or IP Address" autocomplete="on" class="form-control" required>
            </div>
            <div class="col-1 col-lg-2"></div>
        </div>
        <div class="row mt-3 mb-4">
            <div class="col-1 col-lg-2"></div>
            <div class="col-10 col-lg-8">
                <div class="btn-group d-flex flex-wrap" role="group" aria-label="Custom">
                    <button type="submit" class="btn button-cc" id="info-btn" onclick="">Info</button>
                    <button type="button" class="btn button-cc" id="ping-btn" onclick="">Ping</button>
                    <button type="button" class="btn button-cc" id="http-btn" onclick="">HTTP</button>
                    <button type="button" class="btn button-cc" id="tcp-btn" onclick="">TCP</button>
                    <div class="btn-group">
                        <button type="button" class="btn button-cc" id="dns-btn" onclick=""> DNS</button>
                        <button type="button" class="btn button-cc dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" id="dns-btn" aria-expanded="false">
                            <span class="visually-hidden">Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" title="Host address (dotted quad)" onclick="" href="javascript:void(0)">A</a></li>
                            <li><a class="dropdown-item" title="IP v6 address (address spec with colons)" onclick="" href="javascript:void(0)">AAAA</a></li>
                            <li><a class="dropdown-item" title="Canonical name for an alias (domain name)" onclick="" href="javascript:void(0)">CNAME</a></li>
                            <li><a class="dropdown-item" title="Mail exchanger (preference value, domain name)" onclick="" href="javascript:void(0)">MX</a></li>
                            <li><a class="dropdown-item" title="Authoritative nameserver (domain name)" onclick="" href="javascript:void(0)">NS</a></li>
                            <li><a class="dropdown-item" title="Domain name pointer (domain name)" onclick="" href="javascript:void(0)">PTR</a></li>
                            <li><a class="dropdown-item" title="Start of Authority" onclick="" href="javascript:void(0)">SOA</a></li>
                            <li><a class="dropdown-item" title="Service record (Can hide customized port or IP)" onclick="" href="javascript:void(0)">SRV</a></li>
                            <li><a class="dropdown-item" title="Descriptive text (one or more strings)" onclick="" href="javascript:void(0)">TXT</a></li>
                            <li><a class="dropdown-item" title="Reverse DNS Lookup" onclick="" href="javascript:void(0)">rDNS</a></li>
                            <li><a class="dropdown-item" title="Certification Authority Authorization" onclick="" href="javascript:void(0)">CAA</a></li>
                            <li><a class="dropdown-item" title="Naming Address Pointer" onclick="" href="javascript:void(0)">NAPTR</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-1 col-lg-2"></div>
        </div>
    </div>

    <!-- LIST -->
    <div class="container mt-3 mb-3 box">
        <div class="row mt-3 mb-3">
            <div class="col-1 col-lg-2"></div>
            <div class="col-10 col-lg-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody class="text-white">
                            <tr>
                                <td class="sort">IP address</td>
                                <td>xxx</td>
                            </tr>
                            <tr>
                                <td class="sort">Reverse</td>
                                <td>xxx</td>
                            </tr>
                            <tr>
                                <td class="sort">ISP</td>
                                <td><a id="checkccasn" target="_blank" href="https://ipinfo.io/"><span id="asn">XXX</span></a> <span id="isp">xxx</span></td>
                            </tr>
                            <tr>
                                <td class="sort">Organization</td>
                                <td>xxx</td>
                            </tr>
                            <tr>
                                <td class="sort">Country</td>
                                <td><img id="flag" height="12" width="18" src="src/img/turkey.png"> <span id="country">xxx</span></td>
                            </tr>
                            <tr>
                                <td class="sort">City</td>
                                <td>xxx</td>
                            </tr>
                            <tr>
                                <td class="sort">Region</td>
                                <td>xxx</td>
                            </tr>
                            <tr>
                                <td class="sort">Time zone</td>
                                <td>Europe/Istanbul</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-1 col-lg-2"></div>
        </div>
    </div>

    <!-- MAPS -->
    <div class="container mt-3 mb-2 box">
        <div class="row mt-3 mb-3">
            <div class="col-1 col-lg-2"></div>
            <div class="col-10 col-lg-8"><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d752.3285519966431!2d28.90429267599322!3d41.04025740511846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb4016f78b27%3A0xaaafcfce2781a112!2sDaire%201%2C%20Yenido%C4%9Fan%2C%20Avrupa%20Yakas%C4%B1%2C%20Yahya%20Kemal%20Cd.%2050-52%2C%2034410%20Bayrampa%C5%9Fa%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1689051496351!5m2!1str!2str" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="col-1 col-lg-2"></div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="p-5 text-white">
        <p class="text-center text-xl-end powered-by">Powered by <span><a href="https://hostibu.com" target="_blank">Hostibu</a></span></p>
    </footer>

    <!-- SCRIPTS -->
    <script src="src/js/bootstrap.bundle.min.js"></script>
</body>
</html>