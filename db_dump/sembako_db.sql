-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2020 pada 06.57
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sembako_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buyerdetails`
--

CREATE TABLE `buyerdetails` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint(20) NOT NULL,
  `buyerdetail_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` bigint(20) NOT NULL,
  `name` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` text NOT NULL,
  `amount_of_stock` int(11) NOT NULL,
  `on_sale` tinyint(1) NOT NULL,
  `date_of_sell` datetime NOT NULL,
  `image_url` text NOT NULL,
  `itemtype_id` int(11) NOT NULL,
  `seller_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `itemtypes`
--

CREATE TABLE `itemtypes` (
  `id` int(11) NOT NULL,
  `information` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sellerdetails`
--

CREATE TABLE `sellerdetails` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) NOT NULL,
  `sellerdetail_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactiondetails`
--

CREATE TABLE `transactiondetails` (
  `id` bigint(20) NOT NULL,
  `code` int(11) NOT NULL,
  `payment_amount` bigint(20) NOT NULL,
  `total_item` int(11) NOT NULL,
  `buyer_note` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactionitems`
--

CREATE TABLE `transactionitems` (
  `id` bigint(20) NOT NULL,
  `item_id` bigint(20) NOT NULL,
  `amount_items` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `transaction_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) NOT NULL,
  `buyer_id` bigint(20) NOT NULL,
  `seller_id` bigint(20) NOT NULL,
  `transactiondetail_id` bigint(20) NOT NULL,
  `transactionstatus_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactionstatus`
--

CREATE TABLE `transactionstatus` (
  `id` bigint(20) NOT NULL,
  `tswait_id` bigint(20) NOT NULL,
  `tspaid_id` bigint(20) NOT NULL,
  `tsprocess_id` bigint(20) NOT NULL,
  `tssend_id` bigint(20) NOT NULL,
  `tsreceive_id` bigint(20) NOT NULL,
  `tscomplete_id` bigint(20) NOT NULL,
  `tscancel_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tscancels`
--

CREATE TABLE `tscancels` (
  `id` bigint(20) NOT NULL,
  `date_status` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tscompletes`
--

CREATE TABLE `tscompletes` (
  `id` bigint(20) NOT NULL,
  `date_status` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tspaids`
--

CREATE TABLE `tspaids` (
  `id` bigint(20) NOT NULL,
  `date_status` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsprocesses`
--

CREATE TABLE `tsprocesses` (
  `id` bigint(20) NOT NULL,
  `date_status` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsreceives`
--

CREATE TABLE `tsreceives` (
  `id` bigint(20) NOT NULL,
  `date_status` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tssends`
--

CREATE TABLE `tssends` (
  `id` bigint(20) NOT NULL,
  `date_status` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tswaits`
--

CREATE TABLE `tswaits` (
  `id` bigint(20) NOT NULL,
  `date_status` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buyerdetails`
--
ALTER TABLE `buyerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `buyerdetail_id` (`buyerdetail_id`);

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itemtype_id` (`itemtype_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indeks untuk tabel `itemtypes`
--
ALTER TABLE `itemtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sellerdetails`
--
ALTER TABLE `sellerdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indeks untuk tabel `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sellerdetail_id` (`sellerdetail_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `transactiondetails`
--
ALTER TABLE `transactiondetails`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactionitems`
--
ALTER TABLE `transactionitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `transactiondetail_id` (`transactiondetail_id`),
  ADD KEY `transactionstatus_id` (`transactionstatus_id`);

--
-- Indeks untuk tabel `transactionstatus`
--
ALTER TABLE `transactionstatus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tswait_id` (`tswait_id`),
  ADD KEY `tspaid_id` (`tspaid_id`),
  ADD KEY `tsprocess_id` (`tsprocess_id`),
  ADD KEY `tssend_id` (`tssend_id`),
  ADD KEY `tsreceive_id` (`tsreceive_id`),
  ADD KEY `tscomplete_id` (`tscomplete_id`),
  ADD KEY `tscancel_id` (`tscancel_id`);

--
-- Indeks untuk tabel `tscancels`
--
ALTER TABLE `tscancels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tscompletes`
--
ALTER TABLE `tscompletes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tspaids`
--
ALTER TABLE `tspaids`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tsprocesses`
--
ALTER TABLE `tsprocesses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tsreceives`
--
ALTER TABLE `tsreceives`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tssends`
--
ALTER TABLE `tssends`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tswaits`
--
ALTER TABLE `tswaits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buyerdetails`
--
ALTER TABLE `buyerdetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `itemtypes`
--
ALTER TABLE `itemtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sellerdetails`
--
ALTER TABLE `sellerdetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transactiondetails`
--
ALTER TABLE `transactiondetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transactionitems`
--
ALTER TABLE `transactionitems`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transactionstatus`
--
ALTER TABLE `transactionstatus`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tscancels`
--
ALTER TABLE `tscancels`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tscompletes`
--
ALTER TABLE `tscompletes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tspaids`
--
ALTER TABLE `tspaids`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tsprocesses`
--
ALTER TABLE `tsprocesses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tsreceives`
--
ALTER TABLE `tsreceives`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tssends`
--
ALTER TABLE `tssends`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tswaits`
--
ALTER TABLE `tswaits`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buyers`
--
ALTER TABLE `buyers`
  ADD CONSTRAINT `buyers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `buyers_ibfk_2` FOREIGN KEY (`buyerdetail_id`) REFERENCES `buyerdetails` (`id`);

--
-- Ketidakleluasaan untuk tabel `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`itemtype_id`) REFERENCES `itemtypes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `sellers` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `sellers_ibfk_1` FOREIGN KEY (`sellerdetail_id`) REFERENCES `sellerdetails` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sellers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactionitems`
--
ALTER TABLE `transactionitems`
  ADD CONSTRAINT `transactionitems_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactionitems_ibfk_2` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `sellers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`transactiondetail_id`) REFERENCES `transactiondetails` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_4` FOREIGN KEY (`transactionstatus_id`) REFERENCES `transactionstatus` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactionstatus`
--
ALTER TABLE `transactionstatus`
  ADD CONSTRAINT `transactionstatus_ibfk_1` FOREIGN KEY (`tswait_id`) REFERENCES `tswaits` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactionstatus_ibfk_2` FOREIGN KEY (`tspaid_id`) REFERENCES `tspaids` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactionstatus_ibfk_3` FOREIGN KEY (`tsprocess_id`) REFERENCES `tsprocesses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactionstatus_ibfk_4` FOREIGN KEY (`tssend_id`) REFERENCES `tssends` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactionstatus_ibfk_5` FOREIGN KEY (`tsreceive_id`) REFERENCES `tsreceives` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactionstatus_ibfk_6` FOREIGN KEY (`tscomplete_id`) REFERENCES `tscompletes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transactionstatus_ibfk_7` FOREIGN KEY (`tscancel_id`) REFERENCES `tscancels` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
