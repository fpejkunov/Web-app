-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 04:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `naslov` varchar(1000) NOT NULL,
  `sazetak` varchar(1000) NOT NULL,
  `tekst` text NOT NULL,
  `kategorija` varchar(1000) NOT NULL,
  `slika` varchar(1000) NOT NULL,
  `obavijest` int(2) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`naslov`, `sazetak`, `tekst`, `kategorija`, `slika`, `obavijest`, `id`) VALUES
('Angela merkel', 'Angela merkel', 'Angela merkel', 'europa', 'Andja.jpg', 1, 7),
('Angela merkel', 'Angela merkel', 'Angela merkel', 'europa', 'Andja.jpg', 0, 8),
('Led ledeni', 'Led ledeni', 'Led ledeni', 'teknautas', 'LedLedeni.jpeg', 0, 9),
('Led ledeni', 'Led ledeni', 'Led ledeni', 'teknautas', 'LedLedeni.jpeg', 0, 10),
('Led ledeni', 'Led ledeni', 'Led ledeni', 'teknautas', 'LedLedeni.jpeg', 0, 11),
('Led ledeni', 'Led ledeni', 'Led ledeni', 'teknautas', 'LedLedeni.jpeg', 0, 12),
('Angela Merkel digla buru', 've veća energetska ovisnost Njemačke od Rusije tijekom njenog mandata danas se tumači kao pogreška.', 'Njemački predsjednik Frank-Walter Steinmeier uručio je u ponedjeljak bivšoj kancelarki Angeli Merkel Veliki križ za zasluge, najviše državno odličje u Njemačkoj, dok istodobno, uz pozitivne ocjene, nasljeđe njene politike sve više nailazi na kritike i osporavanja.\r\n\r\nTako je komentator DW-a Albrecht von Lucke ocijenio da vrijeme koje je Merkel provela na kancelarskoj dužnosti predstavlja \"16 izgubljenih godina\". Po njegovu mišljenju \"potpuno je preuranjeno\" dati takvo odličje bivšoj kancelarki jer, kako se ističe, još uvijek nije jasno što sve spada u zasluge, a što su neuspjesi.\r\n\r\nDrugi joj pripisuju zasluge jer je, po njihovoj ocjeni, tijekom razdoblja ogromnih preokreta uspješno branila interese Njemačke i Europske unije.\r\n\r\n\"Uspjela je održati Europsku uniju na okupu i ojačati je u burnim vremenima“, kazao je za DW politolog s minhenskog sveučilišta Lucas Schramm, koji navodi da su nedavno i šefovi europskih država i vlada konstatirali kako na samitima Europskog vijeća nedostaje autoritet Angele Merkel.', 'europa', 'Andja.jpg', 0, 13),
('Angela Merkel digla buru', 've veća energetska ovisnost Njemačke od Rusije tijekom njenog mandata danas se tumači kao pogreška.', 'Njemački predsjednik Frank-Walter Steinmeier uručio je u ponedjeljak bivšoj kancelarki Angeli Merkel Veliki križ za zasluge, najviše državno odličje u Njemačkoj, dok istodobno, uz pozitivne ocjene, nasljeđe njene politike sve više nailazi na kritike i osporavanja.\r\n\r\nTako je komentator DW-a Albrecht von Lucke ocijenio da vrijeme koje je Merkel provela na kancelarskoj dužnosti predstavlja \"16 izgubljenih godina\". Po njegovu mišljenju \"potpuno je preuranjeno\" dati takvo odličje bivšoj kancelarki jer, kako se ističe, još uvijek nije jasno što sve spada u zasluge, a što su neuspjesi.\r\n\r\nDrugi joj pripisuju zasluge jer je, po njihovoj ocjeni, tijekom razdoblja ogromnih preokreta uspješno branila interese Njemačke i Europske unije.\r\n\r\n\"Uspjela je održati Europsku uniju na okupu i ojačati je u burnim vremenima“, kazao je za DW politolog s minhenskog sveučilišta Lucas Schramm, koji navodi da su nedavno i šefovi europskih država i vlada konstatirali kako na samitima Europskog vijeća nedostaje autoritet Angele Merkel.', 'europa', 'Andja.jpg', 0, 14),
('Angela Merkel digla buru', 've veća energetska ovisnost Njemačke od Rusije tijekom njenog mandata danas se tumači kao pogreška.', 'Njemački predsjednik Frank-Walter Steinmeier uručio je u ponedjeljak bivšoj kancelarki Angeli Merkel Veliki križ za zasluge, najviše državno odličje u Njemačkoj, dok istodobno, uz pozitivne ocjene, nasljeđe njene politike sve više nailazi na kritike i osporavanja.\r\n\r\nTako je komentator DW-a Albrecht von Lucke ocijenio da vrijeme koje je Merkel provela na kancelarskoj dužnosti predstavlja \"16 izgubljenih godina\". Po njegovu mišljenju \"potpuno je preuranjeno\" dati takvo odličje bivšoj kancelarki jer, kako se ističe, još uvijek nije jasno što sve spada u zasluge, a što su neuspjesi.\r\n\r\nDrugi joj pripisuju zasluge jer je, po njihovoj ocjeni, tijekom razdoblja ogromnih preokreta uspješno branila interese Njemačke i Europske unije.\r\n\r\n\"Uspjela je održati Europsku uniju na okupu i ojačati je u burnim vremenima“, kazao je za DW politolog s minhenskog sveučilišta Lucas Schramm, koji navodi da su nedavno i šefovi europskih država i vlada konstatirali kako na samitima Europskog vijeća nedostaje autoritet Angele Merkel.', 'europa', 'Andja.jpg', 0, 15),
('Angela Merkel digla buru', 've veća energetska ovisnost Njemačke od Rusije tijekom njenog mandata danas se tumači kao pogreška.', 'Njemački predsjednik Frank-Walter Steinmeier uručio je u ponedjeljak bivšoj kancelarki Angeli Merkel Veliki križ za zasluge, najviše državno odličje u Njemačkoj, dok istodobno, uz pozitivne ocjene, nasljeđe njene politike sve više nailazi na kritike i osporavanja.\r\n\r\nTako je komentator DW-a Albrecht von Lucke ocijenio da vrijeme koje je Merkel provela na kancelarskoj dužnosti predstavlja \"16 izgubljenih godina\". Po njegovu mišljenju \"potpuno je preuranjeno\" dati takvo odličje bivšoj kancelarki jer, kako se ističe, još uvijek nije jasno što sve spada u zasluge, a što su neuspjesi.\r\n\r\nDrugi joj pripisuju zasluge jer je, po njihovoj ocjeni, tijekom razdoblja ogromnih preokreta uspješno branila interese Njemačke i Europske unije.\r\n\r\n\"Uspjela je održati Europsku uniju na okupu i ojačati je u burnim vremenima“, kazao je za DW politolog s minhenskog sveučilišta Lucas Schramm, koji navodi da su nedavno i šefovi europskih država i vlada konstatirali kako na samitima Europskog vijeća nedostaje autoritet Angele Merkel.', 'europa', 'Andja.jpg', 0, 16),
('Angela Merkel digla buru', 've veća energetska ovisnost Njemačke od Rusije tijekom njenog mandata danas se tumači kao pogreška.', 'Njemački predsjednik Frank-Walter Steinmeier uručio je u ponedjeljak bivšoj kancelarki Angeli Merkel Veliki križ za zasluge, najviše državno odličje u Njemačkoj, dok istodobno, uz pozitivne ocjene, nasljeđe njene politike sve više nailazi na kritike i osporavanja.\r\n\r\nTako je komentator DW-a Albrecht von Lucke ocijenio da vrijeme koje je Merkel provela na kancelarskoj dužnosti predstavlja \"16 izgubljenih godina\". Po njegovu mišljenju \"potpuno je preuranjeno\" dati takvo odličje bivšoj kancelarki jer, kako se ističe, još uvijek nije jasno što sve spada u zasluge, a što su neuspjesi.\r\n\r\nDrugi joj pripisuju zasluge jer je, po njihovoj ocjeni, tijekom razdoblja ogromnih preokreta uspješno branila interese Njemačke i Europske unije.\r\n\r\n\"Uspjela je održati Europsku uniju na okupu i ojačati je u burnim vremenima“, kazao je za DW politolog s minhenskog sveučilišta Lucas Schramm, koji navodi da su nedavno i šefovi europskih država i vlada konstatirali kako na samitima Europskog vijeća nedostaje autoritet Angele Merkel.', 'europa', 'Andja.jpg', 0, 17),
('Odledite led', 'Umjesto višesatnog čekanja odledite svoj zamrzivač u samo 15 minuta', 'Stvarnja prevelikih količina leda na stijenkama zamrzivača može uzrokovati velike probleme\r\nČesto vam se događa da vam se stvaraju slojevi leda u zamrzivaču? Pitate li se zašto se to uvijek događa? Vrlo je jednostavno! Vlaga iz hrane pohranjene u jedinici pretvara se u led kada hladan zrak upije tu vlagu. Dakle, sasvim je normalno da se negdje stvori led. Ovo će vašu hranu zatrpati slojem leda! Rješenje? Uklonite le i spriječite njegovu pojavu! Pokazat ćemo vam kako!\r\n\r\nUšteda energije: Kada biste trebali odmrznuti zamrzivač?\r\n\r\nAko vidite da se led stvara u vašem zamrzivaču, to može uzrokovati velike probleme! Ne samo da to smanjuje raspoloživi prostor za spremanje hrane, nego je najgore što na kraju imamo vrlo visok račun za energiju! Pitate se koja je to veza? Budući da je vaša jedinica puna leda, mora više raditi kako bi održala niske temperature i ravnomjerno ih rasporedila. Situacija koja dovodi do veće potrošnje energije i kraćeg vijeka vašeg zamrzivača!\r\n\r\nJoš nije gotovo, jeste li znali da je ovaj led sve samo ne higijenski? Da, može uzrokovati neugodne mirise! Ako osjetite neugodan miris, trebali biste se pobrinuti za zamrzivač. Bez obzira na to imate li vitrinu, škrinju ili kombinirani zamrzivač i hladnjak, stručnjaci kažu da se s time treba pozabaviti dva puta godišnje!', 'teknautas', 'LedLedeni.jpeg', 0, 18),
('Odledite led', 'Umjesto višesatnog čekanja odledite svoj zamrzivač u samo 15 minuta', 'Stvarnja prevelikih količina leda na stijenkama zamrzivača može uzrokovati velike probleme\r\nČesto vam se događa da vam se stvaraju slojevi leda u zamrzivaču? Pitate li se zašto se to uvijek događa? Vrlo je jednostavno! Vlaga iz hrane pohranjene u jedinici pretvara se u led kada hladan zrak upije tu vlagu. Dakle, sasvim je normalno da se negdje stvori led. Ovo će vašu hranu zatrpati slojem leda! Rješenje? Uklonite le i spriječite njegovu pojavu! Pokazat ćemo vam kako!\r\n\r\nUšteda energije: Kada biste trebali odmrznuti zamrzivač?\r\n\r\nAko vidite da se led stvara u vašem zamrzivaču, to može uzrokovati velike probleme! Ne samo da to smanjuje raspoloživi prostor za spremanje hrane, nego je najgore što na kraju imamo vrlo visok račun za energiju! Pitate se koja je to veza? Budući da je vaša jedinica puna leda, mora više raditi kako bi održala niske temperature i ravnomjerno ih rasporedila. Situacija koja dovodi do veće potrošnje energije i kraćeg vijeka vašeg zamrzivača!\r\n\r\nJoš nije gotovo, jeste li znali da je ovaj led sve samo ne higijenski? Da, može uzrokovati neugodne mirise! Ako osjetite neugodan miris, trebali biste se pobrinuti za zamrzivač. Bez obzira na to imate li vitrinu, škrinju ili kombinirani zamrzivač i hladnjak, stručnjaci kažu da se s time treba pozabaviti dva puta godišnje!', 'teknautas', 'LedLedeni.jpeg', 0, 19),
('Odledite led', 'Umjesto višesatnog čekanja odledite svoj zamrzivač u samo 15 minuta', 'Stvarnja prevelikih količina leda na stijenkama zamrzivača može uzrokovati velike probleme\r\nČesto vam se događa da vam se stvaraju slojevi leda u zamrzivaču? Pitate li se zašto se to uvijek događa? Vrlo je jednostavno! Vlaga iz hrane pohranjene u jedinici pretvara se u led kada hladan zrak upije tu vlagu. Dakle, sasvim je normalno da se negdje stvori led. Ovo će vašu hranu zatrpati slojem leda! Rješenje? Uklonite le i spriječite njegovu pojavu! Pokazat ćemo vam kako!\r\n\r\nUšteda energije: Kada biste trebali odmrznuti zamrzivač?\r\n\r\nAko vidite da se led stvara u vašem zamrzivaču, to može uzrokovati velike probleme! Ne samo da to smanjuje raspoloživi prostor za spremanje hrane, nego je najgore što na kraju imamo vrlo visok račun za energiju! Pitate se koja je to veza? Budući da je vaša jedinica puna leda, mora više raditi kako bi održala niske temperature i ravnomjerno ih rasporedila. Situacija koja dovodi do veće potrošnje energije i kraćeg vijeka vašeg zamrzivača!\r\n\r\nJoš nije gotovo, jeste li znali da je ovaj led sve samo ne higijenski? Da, može uzrokovati neugodne mirise! Ako osjetite neugodan miris, trebali biste se pobrinuti za zamrzivač. Bez obzira na to imate li vitrinu, škrinju ili kombinirani zamrzivač i hladnjak, stručnjaci kažu da se s time treba pozabaviti dva puta godišnje!', 'teknautas', 'LedLedeni.jpeg', 0, 20),
('Odledite led', 'Umjesto višesatnog čekanja odledite svoj zamrzivač u samo 15 minuta', 'Stvarnja prevelikih količina leda na stijenkama zamrzivača može uzrokovati velike probleme\r\nČesto vam se događa da vam se stvaraju slojevi leda u zamrzivaču? Pitate li se zašto se to uvijek događa? Vrlo je jednostavno! Vlaga iz hrane pohranjene u jedinici pretvara se u led kada hladan zrak upije tu vlagu. Dakle, sasvim je normalno da se negdje stvori led. Ovo će vašu hranu zatrpati slojem leda! Rješenje? Uklonite le i spriječite njegovu pojavu! Pokazat ćemo vam kako!\r\n\r\nUšteda energije: Kada biste trebali odmrznuti zamrzivač?\r\n\r\nAko vidite da se led stvara u vašem zamrzivaču, to može uzrokovati velike probleme! Ne samo da to smanjuje raspoloživi prostor za spremanje hrane, nego je najgore što na kraju imamo vrlo visok račun za energiju! Pitate se koja je to veza? Budući da je vaša jedinica puna leda, mora više raditi kako bi održala niske temperature i ravnomjerno ih rasporedila. Situacija koja dovodi do veće potrošnje energije i kraćeg vijeka vašeg zamrzivača!\r\n\r\nJoš nije gotovo, jeste li znali da je ovaj led sve samo ne higijenski? Da, može uzrokovati neugodne mirise! Ako osjetite neugodan miris, trebali biste se pobrinuti za zamrzivač. Bez obzira na to imate li vitrinu, škrinju ili kombinirani zamrzivač i hladnjak, stručnjaci kažu da se s time treba pozabaviti dva puta godišnje!', 'teknautas', 'LedLedeni.jpeg', 0, 21),
('Odledite led', 'Umjesto višesatnog čekanja odledite svoj zamrzivač u samo 15 minuta', 'Stvarnja prevelikih količina leda na stijenkama zamrzivača može uzrokovati velike probleme\r\nČesto vam se događa da vam se stvaraju slojevi leda u zamrzivaču? Pitate li se zašto se to uvijek događa? Vrlo je jednostavno! Vlaga iz hrane pohranjene u jedinici pretvara se u led kada hladan zrak upije tu vlagu. Dakle, sasvim je normalno da se negdje stvori led. Ovo će vašu hranu zatrpati slojem leda! Rješenje? Uklonite le i spriječite njegovu pojavu! Pokazat ćemo vam kako!\r\n\r\nUšteda energije: Kada biste trebali odmrznuti zamrzivač?\r\n\r\nAko vidite da se led stvara u vašem zamrzivaču, to može uzrokovati velike probleme! Ne samo da to smanjuje raspoloživi prostor za spremanje hrane, nego je najgore što na kraju imamo vrlo visok račun za energiju! Pitate se koja je to veza? Budući da je vaša jedinica puna leda, mora više raditi kako bi održala niske temperature i ravnomjerno ih rasporedila. Situacija koja dovodi do veće potrošnje energije i kraćeg vijeka vašeg zamrzivača!\r\n\r\nJoš nije gotovo, jeste li znali da je ovaj led sve samo ne higijenski? Da, može uzrokovati neugodne mirise! Ako osjetite neugodan miris, trebali biste se pobrinuti za zamrzivač. Bez obzira na to imate li vitrinu, škrinju ili kombinirani zamrzivač i hladnjak, stručnjaci kažu da se s time treba pozabaviti dva puta godišnje!', 'teknautas', 'LedLedeni.jpeg', 0, 22);

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(50) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `lozinka` varchar(1000) NOT NULL,
  `razina` int(10) NOT NULL,
  `korisnik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `lozinka`, `razina`, `korisnik`) VALUES
(2, 'admin', 'admin', '$2y$10$GKt90UPN4INnlYF4tx3o6OcxTDhxzzn9R3pN3f1saIpchqh5RoxVy', 1, 'admin'),
(3, 'Filip', 'Filip', '$2y$10$HSUvrIS651ZcURq3Gc1Ka.4jTN6EONrM/Z4mqdi36.DNasf.kcnRa', 0, 'Filip');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
