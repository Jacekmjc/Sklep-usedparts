
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `kod_produktu` varchar(25) NOT NULL,
  `rodzaj` varchar(25) NOT NULL,
  `kategoria` varchar(25) NOT NULL,
  `zdj` varchar(100) NOT NULL DEFAULT 'no_image.jpg',
  `nazwa_produktu` varchar(100) NOT NULL,
  `cena` int(5) NOT NULL,
  `ilosc` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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


