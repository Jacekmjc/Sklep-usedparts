INSERT INTO `products` (`id`, `kod_produktu`, `rodzaj`, `kategoria`, `zdj`, `nazwa_produktu`, `cena`, `ilosc`) VALUES
(1, 'lp1', 'Nowe czesci', 'Laptopy', 'laptop1.jpg', 'Laptop MSI', 1500, 99),
(2, 'lp2', 'Nowe czesci', 'Laptopy', 'laptop2.jpg', 'Laptop gamingowy', 500, 99),
(3, 'lp3', 'Nowe czesci', 'Laptopy', 'laptop3.jpg', 'Laptop HP', 3500, 99),
(4, 'pr1', 'Nowe czesci', 'Procesory', 'amd.jpg', 'AMD', 4350, 99),
(5, 'pr2', 'Nowe czesci', 'Procesory', 'intel1.jpg', 'Intel1', 2350, 99),
(6, 'pr3', 'Nowe czesci', 'Procesory', 'intel2.jpg', 'Intel2', 1350, 99),
(7, 'kg1', 'Nowe czesci', 'Karty graficzne', 'gtx1.jpg', 'gtx1', 3400, 99),
(8, 'kg2', 'Nowe czesci', 'Karty graficzne', 'gtx2.jpg', 'gtx2', 2400, 99),
(9, 'kg3', 'Nowe czesci', 'Karty graficzne', 'gtx3.jpg', 'gtx3', 1400, 99),
(10, 'lp1', 'Uzywane czesci', 'Laptopy', 'laptop1.jpg', 'Laptop MSI', 3500, 99),
(11, 'lp2', 'Uzywane czesci', 'Laptopy', 'laptop2.jpg', 'Laptop gamingowy', 500, 99),
(12, 'lp3', 'Uzywane czesci', 'Laptopy', 'laptop3.jpg', 'Laptop HP', 4500, 99),
(13, 'pr1', 'Uzywane czesci', 'Procesory', 'amd.jpg', 'AMD', 5350, 99),
(14, 'pr2', 'Uzywane czesci', 'Procesory', 'intel1.jpg', 'Intel1', 1350, 99),
(15, 'pr3', 'Uzywane czesci', 'Procesory', 'intel2.jpg', 'Intel2', 2350, 99),
(16, 'kg1', 'Uzywane czesci', 'Karty graficzne', 'gtx1.png', 'gtx1', 3350, 99),
(17, 'kg2', 'Uzywane czesci', 'Karty graficzne', 'gtx2.jpg', 'gtx2', 4500, 99),
(18, 'kg3', 'Uzywane czesci', 'Karty graficzne', 'gtx3.jpg', 'gtx3', 5300, 99),
(19, 'lp1', 'Czesci do naprawy', 'Laptopy', 'laptop1.jpg', 'Laptop MSI', 2500, 99),
(20, 'lp2', 'Czesci do naprawy', 'Laptopy', 'laptop2.jpg', 'Laptop gamingowy', 500, 99),
(21, 'lp3', 'Czesci do naprawy', 'Laptopy', 'laptop3.jpg', 'Laptop HP', 1500, 99),
(22, 'pr1', 'Czesci do naprawy', 'Procesory', 'amd.jpg', 'AMD', 3350, 99),
(23, 'pr2', 'Czesci do naprawy', 'Procesory', 'intel1.jpg', 'INtel1', 2350, 99),
(24, 'pr3', 'Czesci do naprawy', 'Procesory', 'intel2.jpg', 'Intel2', 1350, 99),
(25, 'kg1', 'Czesci do naprawy', 'Karty graficzne', 'gtx1.jpg', 'gtx1', 5450, 99),
(26, 'kg2', 'Czesci do naprawy', 'Karty graficzne', 'gtx2.jpg', 'gtx2', 3250, 99),
(27, 'kg3', 'Czesci do naprawy', 'Karty graficzne', 'gtx3.jpg', 'gtx3', 6300, 99);

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `lname` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(55) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `password`) VALUES
(1, 'Pawel', 'Pawel2', 509623406, 'tymbark898asdwp.pl', '123pasdel'),
(2, 'Pawel', 'Pawel2', 509125406, 'admin@usedparts.com', 'admin123'),
(3, 'Pawel‚', 'Powasdodski', 123123123, 'tymbark898s1@wp.pl', '123pasddsa'),
(4, 'Pawel‚', 'Powikrasdowski', 123123123, 'tymbark898s1@wp.pl', '1312312313'),
(5, 'Pawel‚', 'Paski', 1312312312, 'tymbark89s1@wp.pl', '3123123123'),
(6, 'Pawel‚', 'Powikrodas', 123123123, 'tymbark8s81@wp.pl', '132123123123'),
(7, 'Pawel‚', 'Powikgasi', 123123132, 'tymbark89381@wp.pl', '123123123123'),
(8, 'Pawel‚', 'Poasdowski', 123123132, 'tymbark89381@wp.pl', '123123123123');
COMMIT;

