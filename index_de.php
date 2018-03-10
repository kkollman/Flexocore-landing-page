
<?php
if(isset($_POST['submit'])){
    $to = "biuro@flexocore.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Wiadomość ze strony Flexocore";
    $message = "Wiadomość wysłana przez " . $name . ", numer telefonu: " . $last_name . " Treść wiadomości:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    $mailSent = "Vielen Dank für Ihre Nachricht. Wir werden versuchen, Sie so bald wie möglich zu erreichen.";
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Flexocore - der Kern von Druck und Verpackung</title><link rel="stylesheet" href="css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;subset=latin-ext" rel="stylesheet">
      <link rel="apple-touch-icon" sizes="57x57" href="media/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="media/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="media/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="media/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="media/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="media/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="media/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="media/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="media/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="media/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="media/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="media/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="media/favicon-16x16.png">
      <link rel="manifest" href="/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="media/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <meta name="description" content="Die Firma Flexocore wurde mit Leidenschaft für den Druck und die Schaffung der besten Lösungen für Kunden gegründet. Dank moderner Technologien und hochwertigen Materialien schaffen wir mehr als nur Projekte. ">
  </head>
  <body>
  <?php if($mailSent) : ?>
    <div class="flexo-thankyou"><?=$mailSent ?></div>
  <?php endif; ?>
  <section class="flexo__nav" id="top">
      <div class="flexo-modal__hamburger hamburger mobile">
          <div class="hamburger-icon">
              <div class="hamburger-icon__stripe" id="stripe-one"></div>
              <div class="hamburger-icon__stripe" id="stripe-two"></div>
              <div class="hamburger-icon__stripe" id="stripe-three"></div>
          </div>
      </div>
      <section class="flexo-topbar">
          <section class="flexo-modal mobile">
              <div class="container">
                  <div class="flexo-modal__menu">
                      <a href="#company"><div class="flexo-modal__menu-element">Firma</div></a>
                      <a href="#offer"><div class="flexo-modal__menu-element">Angebot</div></a>
                      <a href="#about"><div class="flexo-modal__menu-element">Über uns</div></a>
                      <a href="#contact"><div class="flexo-modal__menu-element">Kontakt</div></a>
                      <div class="flexo-separator"></div>
                      <div class="flexo-modal__menu-language-header flexo-modal__menu-element">
                          <img src="media/icons/globe.svg" class="language-header__icon" alt="Globe icon">
                          Język / Language
                      </div>
                      <a href="index.php"><div class="flexo-modal__menu-element">Polski</div></a>
                      <a href="index_eng.php"><div class="flexo-modal__menu-element">English</div></a>
                  </div>
              </div>
          </section>
          <div class="flexo-topbar__container">
              <nav class="flexo-topbar__menu">
                  <a href="#top">
                      <div class="flexo-topbar__menu-element --logo">
                          <svg width="124" height="16" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><path d="M74.11 15.908a7.945 7.945 0 1 1 6.985-11.816l-2.812 1.57a4.726 4.726 0 1 0-4.185 7.027h.296a5.902 5.902 0 0 0 2.744-.75c1.231-.69 2.579-1.92 3.527-4.628 1.083-3.17 2.843-5.102 4.59-6.154A8.363 8.363 0 0 1 89.471 0H90a7.95 7.95 0 1 1-7.034 11.834l2.806-1.57a4.732 4.732 0 1 0 4.634-7.033c-.068 0-.394-.037-.714-.037-.32 0-.615.037-.707.05a5.163 5.163 0 0 0-2.099.713c-1.083.652-2.301 1.846-3.194 4.418-1.15 3.379-3.132 5.373-5.009 6.394a9.065 9.065 0 0 1-4.308 1.151h-.283l.019-.012zM102.406 7.686h2.659c1.649 0 2.424-1.07 2.424-2.21 0-1.138-.794-2.233-2.424-2.233h-2.659V7.686zm5.428 7.79l-2.985-5.125h-2.461v5.126h-2.985V.462h5.255c3.693 0 5.896 1.993 5.896 5.021a4.375 4.375 0 0 1-2.83 4.308l3.433 5.686h-3.348.025zM123.286 12.683v2.788h-10.75V.455h10.62v2.788h-7.636v3.2h6.025v2.615h-6.025v3.625h7.766z" fill="#0F6AE6"/><path fill="#161412" d="M3.01 3.194v3.704h5.864V9.6H3.009v5.932H0V.375h10.498v2.819H3.01zM22.695 12.72v2.812H12.197V.375h3.01V12.72h7.488zM35.206 12.72v2.812h-10.85V.375h10.715v2.819h-7.705v3.224h6.086v2.64h-6.086v3.662h7.84zM43.495 10.295s-.849 1.397-1.107 1.797l-2.425 3.446H36.37l5.305-7.772L36.677.382h3.612l2.339 3.489c.221.344.849 1.47.867 1.47 0 0 .616-1.126.843-1.47L46.677.38h3.661l-5.021 7.385 5.305 7.772h-3.6l-2.425-3.446c-.29-.4-1.065-1.797-1.083-1.797h-.019z"/><path d="M57.23 12.801c2.795 0 4.74-2.012 4.74-4.923 0-2.91-1.945-4.923-4.74-4.923-2.793 0-4.72 1.994-4.72 4.923 0 2.93 1.952 4.923 4.72 4.923zm0-12.8a7.748 7.748 0 0 1 7.878 7.883 7.87 7.87 0 0 1-15.742 0A7.73 7.73 0 0 1 57.231.001z" fill="#161412"/></g></svg>
                      </div>
                  </a>
                  <div class="flexo-topbar__menu-element flexo-topbar__menu-list desktop">
                      <a href="#company"><div class="flexo-topbar__menu-list-element">Firma</div></a>
                      <a href="#offer"><div class="flexo-topbar__menu-list-element">Angebot</div></a>
                      <a href="#about"><div class="flexo-topbar__menu-list-element">Über uns</div></a>
                      <a href="#contact"><div class="flexo-topbar__menu-list-element">Kontakt</div></a>
                      <div class="flexo-topbar__menu-language-header flexo-topbar__menu-list-element" id="language-dropdown-button">
                          <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M15.9 15.39c-.26-.8-1.01-1.39-1.9-1.39h-1v-3a1 1 0 0 0-1-1H6V8h2a1 1 0 0 0 1-1V5h2a2 2 0 0 0 2-2v-.41a7.984 7.984 0 0 1 2.9 12.8zM9 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.22.21-1.79L7 13v1a2 2 0 0 0 2 2v1.93zM10 0C4.477 0 0 4.477 0 10A10 10 0 1 0 10 0z" fill="#666" fill-rule="nonzero"/></svg>
                          <div class="flexo-languages">
                              <a><div class="flexo-menu__language-list-element">DE</div></a>
                              <div class="flexo-topbar__menu-languages" id="language-dropdown">
                                  <a href="index_eng.php"><div class="flexo-menu-list-element">EN</div></a>
                                  <a href="index.php"><div class="flexo-menu-list-element">PL</div></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </nav>
              <div class="flexo-separator"></div>
          </div>
      </section>
  </section>
    <section class="flexo-landing">
      <div class="flexo-landing__background"></div>
      <div class="flexo-landing__header">
        <h1 class="header flexo__title">der Kern von Druck<br> und Verpackung</h1>
      </div>
    </section>
    <section class="flexo-about" id="company">
        <div class="container">
                <div class="flexo-about__header">
                    <h2 class="flexo-about__header--title">Firma</h2>
                    <p class="flexo-about__header--into">Die Firma Flexocore wurde mit Leidenschaft für den Druck und die Schaffung der besten Lösungen für Kunden gegründet, von einem Ingenieur mit langjähriger Erfahrung in Druckereien in Europa. Dank moderner Technologien und hochwertigen Materialien schaffen wir mehr als nur Projekte. Wir schaffen Ideen und übertragen sie auf fertige Produkte und Lösungen, die unsere Arbeit zur Kunst machen.
                    </p>
                    <div class="flexo-separator flexo-about__header-separator"></div>
                </div>
            <div class="flexo-about__company-offer" id="offer">
                <div class="flexo-about__company-offer-image flexo-about-1">
                </div>
                <div class="flexo-about__info">
                    <div class="flexo-about__company-offer-category">ANGEBOT</div>
                    <h2 class="flexo-about__company-offer--title">Entwerfen</h2>
                    <p class="flexo-about__company-offer--text">Wir schöpfen Logos und erstellen Grafiken für einzelne Verpackungen oder ganze Serien mit einheitlicher Optik und Ästhetik. Akzeptierte Designs werden von Anfang an für Druck und Verpackung vorbereitet, weshalb unsere Projekte einzelne Elemente aus technologischen Produktionsprozessen berücksichtigen. Mit anderen Worten: Wir denken an alles.
                    </p>
                </div>
                </div>
            <div class="flexo-about__company-offer" id="offer">
                <div class="flexo-about__company-offer-image flexo-about-2">
                </div>
                <div class="flexo-about__info">
                    <div class="flexo-about__company-offer-category">ANGEBOT</div>
                    <h2 class="flexo-about__company-offer--title">Reprographisches Studio</h2>
                    <p class="flexo-about__company-offer--text">Das Team von Operatoren, die spezialisierte Software verwenden, entwickelt Grafikdateien so, dass nach dem Drucken die Farben des Kundenmusters so genau wie möglich wiedergegeben werden. Durch Cross-Checks von Arbeiten und professionellen Probedrucken können Sie den Prozess vom Empfang von Datendateien bis zur Erstellung von Druckformularen vollständig kontrollieren.
                    </p>
                </div>
            </div>
            <div class="flexo-about__company-offer" id="offer">
                <div class="flexo-about__company-offer-image flexo-about-3">
                </div>
                <div class="flexo-about__info">
                    <div class="flexo-about__company-offer-category">ANGEBOT</div>
                    <h2 class="flexo-about__company-offer--title">Druckformen</h2>
                    <p class="flexo-about__company-offer--text">Eines der wichtigsten Elemente im Flexodruck sind Druckformen (flache und endlose). Wir widmen Druckmatrizen, die in der preisgekrönten Kodak Flexcel NX-Technologie hergestellt werden.
                        Die Erfahrung, die wir gewonnen haben, erlaubte uns, hervorragende Ergebnisse in der Druckqualität und der Genauigkeit der Projektabbildung sowohl für kurze Serien als auch für großvolumiges Drucken zu erzielen. Die Platten werden innerhalb von 24 Stunden nach Abnahme des Probedrucks geliefert.
                    </p>
                </div>
            </div>
            <div class="flexo-about__company-offer" id="offer">
                <div class="flexo-about__company-offer-image flexo-about-4">
                </div>
                <div class="flexo-about__info">
                    <div class="flexo-about__company-offer-category">ANGEBOT</div>
                    <h2 class="flexo-about__company-offer--title">Verpackungen</h2>
                    <p class="flexo-about__company-offer--text">Das Endprodukt. Die Krönung der Arbeit einer Vielzahl von Menschen und das Endergebnis vieler komplexer Prozesse. Wir bieten unseren Kunden weiche Verpackungen, die für den Inhalt von Folienlaminaten geeignet sind, in dem gewählten Format und Muster und mit den entsprechenden Zusätzen. Neben der Qualität der Verarbeitung und einem schönen Erscheinungsbild im Regal ist die Verpackung so konzipiert, dass sie die Funktionen einer Barriere erfüllt, sie lässt sich leicht öffnen und wieder schließen und ist außerdem beständig.
                        Wir helfen, die Technologie an das Produkt anzupassen und den Erstellungprozess der Verpackung in jeder Phase ihrer Schöpfung zu überwachen.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="flexo-numbers">
        <div id="about"></div>
        <div class="container flexo-numbers__container">
            <div class="flexo-numbers__item">
                <div class="circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 230">
                        <g transform="translate(110,116)">
                            <circle class="e-c-base" r="100"></circle>
                            <g transform="rotate(-90)">
                                <circle r="100" class="e-c-progress"></circle>
                                <g id="e-pointer">
                                    <circle cy="0" class="e-c-pointer" r="14" cx="100"></circle>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="flexo-numbers__number" data-number="2500" id="first-circle">
                    2500
                </div>
                <!--<span class="flexo-numbers__title">-->
                <!--projektów-->
                <!--</span>-->
                <div class="flexo-rolled-divider"></div>
                <p class="flexo-numbers__description">
                    So viele Projekte im Laufe des Jahres setzen wir um
                </p>
            </div>
            <div class="flexo-numbers__item">
                <div class="circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 230">
                        <g transform="translate(110,116)">
                            <circle class="e-c-base" r="100"></circle>
                            <g transform="rotate(-90)">
                                <circle r="100" class="e-c-progress"></circle>
                                <g id="e-pointer">
                                    <circle cy="0" class="e-c-pointer" r="14" cx="100"></circle>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="flexo-numbers__number" data-number="2000000" id="second-circle">
                    2000000
                </div>
                <!--<span class="flexo-numbers__title">-->
                 <!--opakowań-->
                <!--</span>-->
                <div class="flexo-rolled-divider"></div>
                <p class="flexo-numbers__description">
                    So viele Verpackungen gehen jeden Monat an unsere Kunden ab
                </p>
            </div>
            <div class="flexo-numbers__item">
                <div class="circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 230">
                        <g transform="translate(110,116)">
                            <circle class="e-c-base" r="100"></circle>
                            <g transform="rotate(-90)">
                                <circle r="100" class="e-c-progress"></circle>
                                <g id="e-pointer">
                                    <circle cy="0" class="e-c-pointer" r="14" cx="100"></circle>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="flexo-numbers__number" data-number="500" id="third-circle">
                    500
                </div>
                <!--<span class="flexo-numbers__title">-->
                <!--klientów-->
            <!--</span>-->
                <div class="flexo-rolled-divider"></div>
                <p class="flexo-numbers__description">
                    So viele Kunden vertrauen unseren Dienstleistungen
                </p>
            </div>
        </div>
    </section>
    <section class="flexo-people">
        <div class="container flexo-people__container">
                <div class="flexo-people__employees">
                    <div class="flexo-people__employees--employee-header">
                        <div class="flexo-people__employees--employee-img-container">
                            <img src="./media/images/rafal.png" alt="" class="flexo-people__employees--employee-img">
                        </div>
                        <div class="flexo-people__employees-employee-position-name-container">
                            <span class="flexo-people__employees-employee-position">core</span>
                            <h2 class="flexo-people__employees-employee-name">Rafał Korolkiewicz</h2>
                        </div>
                    </div>
                    <p class="flexo-people__employees-employee-info">Ich mag es, schnell und präzise zu handeln. Ich möchte auch wissen, wie Maschinen und Geräte funktionieren oder warum sie nicht funktionieren :). Bei der Arbeit plane ich Aufgaben und konzentriere mich auf das Ziel. Ich bin an konkreten Lösungen interessiert. Privat ist meine Leidenschaft das Langstreckenlauftraining, das ich seit Jahren kontinuierlich trainiere. Ich gebe niemals auf.</p>
                </div>
            <div class="flexo-people__employees">
                <div class="flexo-people__employees--employee-header">
                    <div class="flexo-people__employees--employee-img-container">
                        <img src="./media/images/pawel.png" alt="" class="flexo-people__employees--employee-img">
                    </div>
                    <div class="flexo-people__employees-employee-position-name-container">

                        <span class="flexo-people__employees-employee-position">flexo</span>
                        <h2 class="flexo-people__employees-employee-name">Paweł Różański</h2>
                    </div>
                </div>
                <p class="flexo-people__employees-employee-info">Ich mag es, Menschen und die Welt kennen zu lernen. Ich mag auch, Ideen aus Büchern und aus der voller interessanter Ereignisse Umgebung zu schöpfen. Das Büro ist für mich ein Raum kreativen Handelns. Arbeit ist eine großartige Ergänzung zum Leben. In meiner Freizeit konzentriere ich mich auf das funktionelle und Kerntraining. Ausdauer ist meine Stärke.</p>
            </div>
        </div>
    </section>
  <section id="contact">
      <h2 class="header flexo-contact__header">
          Kontaktieren Sie uns
      </h2>
      <div class="flexo-separator --short"></div>
      <p class="flexo-contact__story">
          Haben Sie welche Fragen zu unseren Dienstleistungen?<br>
          Rufen Sie an, schreiben Sie, besuchen Sie uns - wir geben Ihnen gerne Auskunft.
      </p>
      <div class="flexo-info">
          <section class="flexo-contact">
              <div class="container flexo-contact__wrapper">
                  <form name="flexo-contact" method="POST" action="index_de.php">
                      <input type="text" class="flexo-contact__input" placeholder="Name" name="name">
                      <input type="email" class="flexo-contact__input" placeholder="Email" name="email">
                      <input type="tel" class="flexo-contact__input" placeholder="Telefon" name="phone">
                      <textarea class="flexo-contact__textarea" name="message" id="flexo-contact" cols="30" rows="8" placeholder="Nachricht"></textarea>
                      <button class="flexo-contact__button" type="submit" name="submit">Nachricht senden <svg width="25" height="18" xmlns="http://www.w3.org/2000/svg"><path d="M16.835.27a.868.868 0 0 0-1.26 0 .926.926 0 0 0 0 1.278l6.388 6.542H.882c-.491 0-.882.4-.882.903 0 .504.39.917.882.917h21.081l-6.388 6.53a.942.942 0 0 0 0 1.29c.352.36.92.36 1.26 0l7.9-8.091a.903.903 0 0 0 0-1.277L16.836.27z" fill="#FFF" fill-rule="nonzero"/></svg>
                      </button>
                  </form>
              </div>
          </section>
          <section class="flexo-information">
              <div class="container">
                  <h2 class="flexo-information__title">Firmenanschrift</h2>
                  <div class="flexo-information__container">
                      <div class="flexo-information_details-container">
                          <div class="flexo-information__item">
                              <img class="flexo-icon" src="media/icons/contact_marker.svg" alt="Pointer icon">
                              <p>Flexocore Sp. z o.o. Sp. K.<br>ul. Piątkowska 201A<br> 61-693 Poznań
                              </p>
                          </div>
                          <div class="flexo-information__item"><p>NIP 781 19 23 156</p>
                          </div>
                          <div class="flexo-information__item">
                              <img class="flexo-icon" src="media/icons/contact_phone.svg" alt="Phone icon">
                              <p>+48 61 62 33 128</p>
                          </div>
                          <div class="flexo-information__item">
                              <img class="flexo-icon" src="media/icons/contact_mail.svg" alt="Mail icon">
                              <p>biuro@flexocore.com
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>
  </section>
    <section class="flexo-map">
        <div id="map"></div>
        <script>
          function initMap() {

            var styledMapType = new google.maps.StyledMapType([
              {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "saturation": 36
                  },
                  {
                    "color": "#333333"
                  },
                  {
                    "lightness": 40
                  }
                ]
              },
              {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "visibility": "on"
                  },
                  {
                    "color": "#ffffff"
                  },
                  {
                    "lightness": 16
                  }
                ]
              },
              {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "administrative",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "color": "#fefefe"
                  },
                  {
                    "lightness": 20
                  }
                ]
              },
              {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "color": "#fefefe"
                  },
                  {
                    "lightness": 17
                  },
                  {
                    "weight": 1.2
                  }
                ]
              },
              {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                  {
                    "lightness": 20
                  },
                  {
                    "color": "#ececec"
                  }
                ]
              },
              {
                "featureType": "landscape.man_made",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  },
                  {
                    "color": "#f0f0ef"
                  }
                ]
              },
              {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "visibility": "on"
                  },
                  {
                    "color": "#f0f0ef"
                  }
                ]
              },
              {
                "featureType": "landscape.man_made",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "visibility": "on"
                  },
                  {
                    "color": "#d4d4d4"
                  }
                ]
              },
              {
                "featureType": "landscape.natural",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  },
                  {
                    "color": "#ececec"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                  {
                    "lightness": 21
                  },
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "visibility": "on"
                  },
                  {
                    "color": "#d4d4d4"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#303030"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels.icon",
                "stylers": [
                  {
                    "saturation": "-100"
                  }
                ]
              },
              {
                "featureType": "poi.attraction",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "poi.business",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "poi.government",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "poi.medical",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#dedede"
                  },
                  {
                    "lightness": 21
                  }
                ]
              },
              {
                "featureType": "poi.place_of_worship",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "poi.school",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "poi.school",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "lightness": "-61"
                  },
                  {
                    "gamma": "0.00"
                  },
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "featureType": "poi.sports_complex",
                "elementType": "all",
                "stylers": [
                  {
                    "visibility": "on"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "lightness": 17
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "lightness": 29
                  },
                  {
                    "weight": 0.2
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "lightness": 18
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#ffffff"
                  },
                  {
                    "lightness": 16
                  }
                ]
              },
              {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#f2f2f2"
                  },
                  {
                    "lightness": 19
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#dadada"
                  },
                  {
                    "lightness": 17
                  }
                ]
              }
            ])

            var location = {
              lat: 52.440358,
              lng: 16.912089
            };
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 17,
              center: location,
              mapTypeControlOptions: {
                mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                  'styled_map']
              }
            });

            map.mapTypes.set('styled_map', styledMapType);
            map.setMapTypeId('styled_map');

            var marker = new google.maps.Marker({
              position: location,
              map: map
            })

            var marker = new google.maps.Marker({
              position: location ,
              map: map,
              icon:'media/icons/marker.svg'
            });
          }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQIcgc0OC4-LO2EKt76mNQQ5PWy2uueag&callback=initMap">
        </script>
    </section>
    <section class="flexo-footer">
        <div class="container">
            <img class="flexo-footer__logo" src="media/images/flexocore_logo.svg" alt="Flexocore logotype">
        </div>
    </section>
    <script src="js/countUp.js"></script>
    <script src="js/zenscroll-min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
