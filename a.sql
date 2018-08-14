

CREATE TABLE `chattogramHotelRent` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chkin` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `chkout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noAdults` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noChild` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `coxbazarHotelRent` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chkin` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `chkout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noAdults` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noChild` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `sylhetHotelRent` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chkin` varchar(23) COLLATE utf8_unicode_ci NOT NULL,
  `chkout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noAdults` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noChild` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

