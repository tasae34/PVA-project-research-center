-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2014 at 03:57 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projekat_nrt612`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `idkom` int(11) NOT NULL AUTO_INCREMENT,
  `idvest` int(11) NOT NULL,
  `naslov` varchar(50) NOT NULL,
  `tekst` mediumtext NOT NULL,
  `autor` varchar(50) NOT NULL,
  `datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idkom`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`idkom`, `idvest`, `naslov`, `tekst`, `autor`, `datum`) VALUES
(3, 1, 'vest1', 'komentar vesti1', 'gost1', '2014-08-23 22:26:51'),
(4, 3, 'ako i treba', 'ovo ce biti revolucionarna i dobra stvar', 'gost2', '2014-08-24 00:38:58'),
(5, 3, 'komentar', 'opet neki glupi komentar', 'gost1', '2014-08-24 00:50:42'),
(7, 2, 'unosim komentar', 'ali stvarno', 'gost1', '2014-08-24 17:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `stranice`
--

CREATE TABLE IF NOT EXISTS `stranice` (
  `ime` varchar(50) NOT NULL,
  `html` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stranice`
--

INSERT INTO `stranice` (`ime`, `html`) VALUES
('partneri', '<html>\r\n<head>\r\n   <meta charset="UTF-8">\r\n   <title>Partneri</title>\r\n   <style>\r\n       h3{\r\n           color:red;\r\n       }\r\n       p{\r\n           color:blue;\r\n       }\r\n       img{\r\n           width: 200px;\r\n           height: 200px;\r\n       }\r\n   </style>\r\n</head>\r\n<body>\r\n<h2>Partneri projekta: </h2><hr>\r\n<h3>Nikola Tasic</h3>\r\n<img src="images/partnernikolatasic.jpg" alt="Nikola Tasic"/>\r\n<p>Mladi programer, filantrop, hedonista, hodajuci Bog, kreator projekta...</p><hr>\r\n\r\n<h3>Visoka skola elektrotehnike i racunarstva strukovnih studija u Beogradu</h3>\r\n<img src="images/partnerviser.jpg" alt="VISER"/>\r\n<p>Skola za obrazovanje mladih programera, dizajnera i ostalih strucnjaka u IT sektoru</p><hr>\r\n\r\n<h3>Grad Beograd</h3>\r\n<img src="images/partnerbgd.jpg" alt="GRB BEOGRADA"/>\r\n<p>Srpska metropola</p><hr>\r\n</body>\r\n</html>'),
('pozadinaprojekta', '<html>\r\n<head>\r\n    <meta charset="UTF-8">\r\n    <title>Pozadina projekta</title>\r\n</head>\r\n<body>\r\n<h3>Pozadina projekta:</h3>\r\n<p>Prava pozadina ovog projekta ne sme nikada biti otkrivena\r\n    jer nas finansiraju Vatikan, Iluminati, Masoni i jos neka tajna drustva koja su toliko tajna da nemaju ni ime...</p>\r\n<img src="images/iluminati.jpg" alt="ILUMINATI"/>\r\n    <h2>POSMATRAMO VAS!</h2>\r\n</body>\r\n</html>'),
('ostvarenja', '<html>\r\n<head>\r\n    <meta charset="UTF-8">\r\n    <title>Ostvarenja</title>\r\n</head>\r\n<body>\r\n    <h3>Ostvarenja: </h3>\r\n<p>Nase najvece ostvarenje je to sto smo imali vise teroristickih\r\n    akcija sirom sveta a niko i dalje ne zna da postojimo zato sto sve svalimo na druge.</p>\r\n<h4>Izdvajamo neke nase akcije:</h4>\r\n<ul>\r\n    <li>Ma’a lot Massacre Terrorist Attacks, Izrael 15.5.1973.</li>\r\n    <li>TWA Flight 841 Terrorist attacks, 8.9.1974.</li>\r\n    <li>Manhattan Attacks, Njujork 3.8.1997.</li>\r\n    <li>Chechnya Border Attacks, 24.3.2001.</li>\r\n    <li>World Trade Centre (WTC) Bombing of 1993, Njujork 26.2.1993.</li>\r\n    <li>The Wall Street Bombing, Njujork 16.9.1920.</li>\r\n    <li> 9/11 attack (WTC), Njujork 11.9.2001.</li>\r\n</ul>\r\n<h5>I mnogi drugi...</h5>\r\n</body>\r\n</html>'),
('planovizabuducnost', '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce iaculis quam massa, id lobortis velit fringilla sed. Aliquam faucibus blandit erat in euismod. In in dui mattis, lacinia ex sed, tempor mi. Aliquam erat volutpat. Vivamus a est nisl. Duis pretium magna libero, et sagittis purus aliquet ut. Nullam ac ante et risus suscipit lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed diam nunc, feugiat ut aliquam eu, aliquet nec mauris. Cras ornare mauris at varius molestie. Vivamus finibus rhoncus accumsan. Proin non convallis ligula. Aenean massa metus, euismod at dictum nec, dapibus suscipit dui.\r\n\r\nProin hendrerit pharetra orci in eleifend. Phasellus molestie metus consequat tempus sagittis. Donec quis laoreet est. Quisque eget fermentum turpis, et rhoncus est. Ut ullamcorper sapien lorem, nec ultrices felis congue vel. Vestibulum suscipit velit nec auctor laoreet. Pellentesque et leo vel nunc ornare tincidunt. Proin molestie molestie ante vitae tempor. Proin eget turpis et massa consequat rhoncus at quis enim.\r\n\r\nAliquam vulputate ligula eu mi rutrum, id tristique dui feugiat. Aliquam erat volutpat. Donec et blandit felis. Nunc commodo, eros vel dictum hendrerit, nisi libero tristique ante, in dictum nisl lorem non nunc. Praesent vitae viverra mi. Aenean ultricies non ante et pellentesque. Vestibulum vitae vulputate ligula. Cras tortor sapien, consectetur vitae tellus eget, consequat hendrerit orci. Mauris nec sodales turpis. Phasellus porttitor in tortor sed maximus. Vestibulum viverra interdum scelerisque. Morbi lacinia luctus suscipit.\r\n\r\nCurabitur sollicitudin faucibus nisi eu pulvinar. Maecenas vitae mauris malesuada, placerat dui ut, scelerisque nunc. Nam tempus suscipit lorem, et tempus justo rutrum vel. Quisque sed vestibulum urna, ut lobortis nisi. Suspendisse in risus a sem rutrum imperdiet. Morbi nulla ante, molestie et tellus sit amet, laoreet bibendum sapien. Vestibulum neque nisi, tempus nec nibh at, tincidunt placerat mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor sagittis maximus. Duis venenatis est quam, non ullamcorper urna pellentesque lobortis. Donec elementum mauris sit amet nisi vestibulum, vitae sollicitudin dui elementum. Sed blandit et nisi ac gravida.\r\n\r\nSuspendisse potenti. Cras at convallis nibh. Donec et mi turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus fermentum ante quis cursus rhoncus. Nam pulvinar iaculis imperdiet. Maecenas purus felis, pharetra sed leo vitae, porttitor rhoncus tortor. Proin pellentesque enim eget sapien eleifend, eu scelerisque odio congue. Proin mollis tortor quam, nec egestas justo viverra ac. Vestibulum varius leo nulla, a tincidunt augue consequat vitae. Cras nec euismod purus. Suspendisse vel nibh efficitur, suscipit lectus vel, mollis nibh.\r\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tip` enum('gost','istrazivac','admin') NOT NULL,
  `ime_i_prezime` varchar(50) DEFAULT NULL,
  `datum_rodjenja` date DEFAULT NULL,
  `z_i_o` mediumtext,
  `reference` mediumtext,
  `slika` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `tip`, `ime_i_prezime`, `datum_rodjenja`, `z_i_o`, `reference`, `slika`) VALUES
(1, 'admin1', 'admin1pass', 'admin', NULL, NULL, NULL, NULL, NULL),
(2, 'admin2', 'admin2pass', 'admin', NULL, NULL, NULL, NULL, NULL),
(3, 'gost1', 'gost1pass', 'gost', NULL, NULL, NULL, NULL, NULL),
(4, 'gost2', 'gost2pass', 'gost', NULL, NULL, NULL, NULL, NULL),
(5, 'istrazivac1', 'istrazivac1pass', 'istrazivac', 'Kristofer Kolumbo', '1451-01-01', 'Italijanski moreplovac', '"Kako sam otkrio Amerike"', 'zaposleni/kolumbo.jpg'),
(6, 'istrazivac2', 'istrazivac2pass', 'istrazivac', 'Abel Tasman', '1601-01-01', 'Holandski istrazivac', '"Australija - zemlja daleka"', 'zaposleni/tasman.jpg'),
(7, 'istrazivac3', 'istrazivac3pass', 'istrazivac', 'Fernando Magelan', '1480-04-01', 'Portugalski istrazivac', '"Zemlja je lopta"', 'zaposleni/magelan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE IF NOT EXISTS `vesti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(50) NOT NULL,
  `sadrzaj` mediumtext NOT NULL,
  `autor` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `sadrzaj`, `autor`) VALUES
(1, 'Ekološka taksa - novi udar na polovnjake?', 'Nedavno su auto placevima počela da stižu obaveštenja da moraju da plate ekološku taksu na sva vozila uvezena tokom 2013. godine. Mnogi su bili šokirani kada su saznali da moraju da plate taksu na automobile koje su prodali pre više od godinu dana, a taj trošak uopšte nisu uračunali u cenu.\r\nKoliko treba da plate?\r\nEkološka taksa se plaća 12.000 dinara po toni. Dakle, ako auto ima 1.300 kg, državi ide 15.600 dinara ili oko 150 evra. Na primer, Ford Focus 1.6 TDCi iz 2009. godine teži 1.400 kg (16.800 din), a Opel Insignia 2.0 CDTI iz iste godine 1.500 kg (18.000 din).\r\nAuto placevi do sada ovaj trošak nisu uračunavali u krajnju cenu – sada su prinuđeni da počnu.\r\nKako se naplaćuje ekološka taksa?\r\nPlaćanje za 2013. godinu vrši se u 2014. godini na osnovu izveštaja koje uvoznik ili njegova knjigovodstvena agencija podnosi Agenciji za zaštitu životne sredine do 31. marta 2014. godine.\r\nZvanično objašnjenje koje smo dobili od Gordane Petković iz Ministarstva еnеrgеtikе, razvoja i zaštitе životnе srеdinе (tj. Odеljеnja za harmonizaciju propisa u oblasti еnеrgеtikе i životnе srеdinе) glasi: „Obaveza plaćanja naknade za vozila stavljena na tržište Republike Srbije primenjuje se od 1. januara 2013. godine. Plaćanje naknade se vrši na osnovu godišnjeg izveštaja koji se podnosi Agenciji za zaštitu životne sredine do 31. marta tekuće godine za prethodnu godinu“.\r\nZašto ovakav način plaćanja?\r\nOvo pitanje smo postavili nadležnima ali na odgovor čekamo već duže vreme. Čim ga dobijemo podelićemo ga sa vama.\r\nZašto se ekološka taksa ne naplaćuje odmah, kao npr. porez (PDV) pri samom uvozu?\r\nOvo pitanje smo takođe postavili nadležnima i takođe čekamo odgovor. Ukoliko ova taksa već mora da se plaća, bilo bi najlogičnije da se plaća prilikom samog uvoza automobila, kako auto placevi novac za tu namenu ne bi morali da čuvaju u „slamarici“ od januara jedne godine do marta sledeće godine.\r\nKako je sve počelo?\r\nUredba kojom se uvodi ekološka taksa na vozila iz uvoza usvojena je 17. novembra 2011. godine. Međutim, krajem decembra iste godine doneta je odluka da se primena te uredbe odloži na godinu dana, za početak 2013. godine.\r\nDa li ekološku taksu plaćaju privatna lica?\r\nNe, fizička lica nisu u obavezi da plaćaju ekološku taksu što auto placeve koji posluju legalno stavlja u neravnopravan položaj u odnosu na preprodavce koji se prodajom polovnih vozila bave bez prijavljene firme.\r\nZašto se ekološka taksa ne bi naplaćivala od poslednjeg vlasnika?\r\nNa primer, neko kupi automobil star pet godina, vozi ga još pet godina pa ga proda. Sledeći vlasnik ga vozi još pet godina, proda ga, sledeći ga koristi isto pet godina.\r\nNeka je to npr. VW Passat iz 2009. godine. Taj auto će možda biti na ulicama još dvadesetak godina, osim ako ne bude ozbiljno havarisan. Vozač koji ga je prvi kupio nakon što je stigao u Srbiju bio je u obavezi da plati ekološku taksu. Od tada je isti vozač možda kupio još 5-6 vozila i na sva je platio istu taksu.\r\nMeđutim, poslednji vlasnik će to vozilo prodati nekom auto otpadu, uzeti 100-200 evra, a od ekološkog zbrinjavanja na kraju neće biti ništa. \r\nStoga, zar nije logičnije da tu taksu plati onaj ko želi da se reši havarisanog automobila ili automobila koji više nije u voznom stanju?\r\nGde ide novac od naplate ekološke takse?\r\nOvo je još jedno pitanje na koje smo potražili (ali još nismo dobili) odgovor od nadležnih.\r\nNa koja vozila se plaća ekološka taksa?\r\nJedan od vlasnika auto placa sa kojim smo razgovarali postavio je vrlo zanimljivo pitanje: Zašto je plaćanje ekološke takse propisano samo za kategorije:\r\n    a. M1 - putničko vozilo koje osim sedišta vozača ima još najviše osam sedišta\r\n    b. N1 – teretno vozilo čija najveća dozvoljena masa nije veća od 3,5t\r\n    c. Motorno vozilo sa tri točka, osim motornih tricikala (kategorija L5 – teški tricikl)\r\nDa li to znači da vozila preko tri i po tone ili autobusi nisu ekološki nepodobni ili je pomenuta uredba imala za cilj nešto drugo, pa je nespretno nazvana „ekološka“?\r\nGde reciklirati „krš“?\r\nObičan čovek nema praktično nikakvu mogućnost da sazna gde može da preda svoj stari automobil na ekološku reciklažu. U državnim institucijama nemaju odgovor, već nas upućuju od šaltera do šaltera...\r\nUkoliko nama ne verujete, pokušajte sami da saznate gde možete da odložite staro vozilo, akumultor, gume, ulje... Naravno, postoje firme koje se bave otkupom navedenog, ali ostaje pitanje da li te firme zbrinjavaju taj otpad na ekološki način? Da li imaju dozvolu za zbrinjavanje otpada na ekološki način?\r\nDeluje kao da na ovom polju ima puno nelogičnosti i neuređenosti, što dovodi u pitanje pravo države da uopšte naplaćuje ekološku taksu dok ne uredi postupak zbrinjavanja otpadnih vozila.\r\nOtkup „krševa“\r\nNa inernetu možete da nađete veliki broj firmi koje se bave otkupom starih automobila i to po relativno primamljivim cenama. Međutim, ako te firme plaćaju da od vas kupe neupotrebljivo vozilo, zašto biste onda vi plaćali državi za zbrinjavanje istog tog vozila? Kako to konkretno država učestvuje u njegovom zbrinjavanju? Ni na ovo pitanje za sada nismo dobili odgovor.\r\nNigde nismo našli spisak ovlašćenih centara za reciklažu. Pre nekoliko godina postojao je jedan u Beogradu, ali je zatvoren. Internet sajt tog centra i dalje postoji – na telefone se niko ne javlja.\r\nOvo prilikom apelujemo na nadležne službe (to jest na njihove „pres kliping“ službe), ministarstva, agencije i druge državne institucije koje se bave zaštitom životne sredine da nas kontaktiraju ako imaju odgovore na postavljena pitanja u ovom tekstu.\r\nNiko od građana ne zna gde može da preda staro ulje, stare akumulatore, stare gume... Nigde ne postoji obaveštenje za građane ili institucije. Mi smo pokušali da pitamo ali smo naišli na birokratski zid ćutanja i nepoznavanja materije.\r\nAko vi znate nešto o ovome rado ćemo pročitati vaše komentare.', 'admin1'),
(2, 'Ne baš uspela aukcija službenih automobila', 'Iako je tokom proteklih nedelju i po dana nekoliko hiljada zainteresovanih posetilo parking preko puta popularnog „buvljaka“ na Novom Beogradu, kupaca je bilo malo. Od 263 ponuđena vozila prodato je samo 54, a ukupan prihod iznosi 11.505.648 dinara (ili oko 100.000 evra).\r\nSva neprodata vozila biće poklonjena ugroženima od poplava, po utvrđenoj listi prioriteta.\r\nNajveću pažnju medija i javnosti pre same aukcije privlačili su luksuzniji automobili, kao što su:\r\n - Chrysler 300C 5.7  (2004. god.) - 870.000 dinara\r\n - Škoda Superb 2.5 TDI (2007. god.) - 1.051.000 dinara\r\n - Kia Sportage 2.0 CRD (2007. god.) - 946.000 dinara\r\n - Škoda Superb 2.8 V6 (2007. god.) -  1.200.000 dinara\r\n - Škoda Superb 2.0 TID (2011. god.) - 1.790.000 dinara\r\n - Renault Latitude 2.0 dCi 170 KS (2011. god.) - 2.320.000 dinara\r\n - Honda Accord 2.4 (2007. god.) - 881.000 dinara\r\n - Mercedes E200 CDI (2006. god.) - 1.690.000 dinara\r\n - Škoda Octavia Scout (2011. god.) - 1.740.000 dinara\r\nMeđutim, nijedno od gore navedenih vozila nije prodato a šta će biti sa njima nije saopšteno.\r\nCena registracije za Chrysler 300C 5.7 je preko hiljadu i po evra, a ni potrošnja goriva „nije zanemarljiva“. Stoga se postavlja pitanje kome pokloniti ovakvo vozilo i zašto? Istovremeno, JKP „Beograd-Put“, u čijem je vlasništvu bio do sada, grca u dugovima.\r\nNajvišu cenu postigla je Škoda Superb 2.5 TDI (JKP “Pogrebne usluge”) - početna cena bila je 1.271.000 dinara, a prodata je za 1.320.000 dinara.', 'istrazivac2'),
(3, 'Osniva se Udruženje uvoznika polovnih automobila', 'Uvoznici kažu da shvataju nameru države da uvede red u ovu oblast, što pozdravljaju i oni sami, ali sa druge strane tvrdi to nije moguće uraditi preko noći donošenjem uredbi koje unose veliku pometnju na tržište, zastoje u prodaji, neplanirane finansijske troškove i na kraju štete krajnjim kupcima.\r\nDa podsetimo, samo ove godine uvedeno je niz odredbi koje su uzdrmale tržište i zbunile kako prodavce tako i kupce. Počelo je primenom AMSS kataloga za procenu vrednosti vozila, nastavilo uvođenjem propisa za kontrolu automobila prilikom uvoza koju rade Agencija za bezbednost saobraćaja, Auto moto savez Srbije i nekoliko fakulteta u zemlji, da bi ovih dana započela naplata ekološke takse od 12.000 dinara po toni automobila. Sve ovo u značajnoj meri otežalo je poslovanje prodavcima ali dovelo u nezavidan položaj i kupce jer će krajnje posledice, kroz povećanje cene vozila usled ovih mera, osetiti oni.\r\nIako niko ne poriče da je potrebno urediti tržište polovnih automobila, država sa druge strane nema razumevanje za inicijative koje potiču od uvoznika, kako onih koje se tiču poboljšanja već donetih mera, tako i onih koje još uvek ne postoje ali je njihovo donošenje u interesu svih (i od kojih bi država mogla dodatno da prihoduje) poput prenosivih tablica.\r\nImajući sve ovo u vidu, uvoznici polovnih automobila odlučili su da formiraju svoje Udruženje koje bi trebalo da bude sagovornik i partner državi prilikom donošenja propisa jer, kako tvrde, samo na taj način ova oblast može biti uređena a krajnji kupci zadovoljni.', 'istrazivac1'),
(11, 'Umro je Drug Tito', 'Danas nas je napustio najveci sin svih nasih naroda i narodnosti!', 'admin1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
