-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 07:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiking`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `productID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sentBy` int(11) NOT NULL,
  `recievedBy` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createdAt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(255) NOT NULL,
  `groupName` varchar(255) NOT NULL,
  `groupDesc` varchar(255) NOT NULL,
  `groupPhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `groupName`, `groupDesc`, `groupPhoto`) VALUES
(19, 'Sinai Trail', 'Sinai is one of the most chosen routes to do hiking in Egypt by the adventurers. This hiking course is Egyptâ€™s first long-distance hiking trail trip. The Sinai Trail is a 550 km long with 42-day sea to-summit trekking path, starting and concluding by th', 'soso.jpg'),
(20, 'ST. Catherine', 'This trek is situated toward the southeast of St Catherineâ€™s village in the high mountain locale of the Sinai Peninsula. Clear from the peak of Mount Sinai, Mt. Saint Catherine region is Egyptâ€™s tallest mountain and got its name from the tormented Chr', 'Mt.-Catherine.jpg'),
(25, 'Sahara Desert', 'The worldâ€™s biggest desert â€“ nothing else resembles it on the planet Earth. The greater part of this desert area is forbidden for the voyagers, yet there are some western regions accessible for desert hiking in Egypt. Some Egyptian tour operators can ', 'Sahara.jpg'),
(26, 'Jebel Serbal', 'Numerous individuals consider Jebel Serbal as the best mountain in the Sinai region â€“ it is likewise one of the hardest to trek on. Although the fact is that itâ€™s not as high as a couple of different mountains in the area, the encompassing region is l', 'Jebel-Serbal.jpg'),
(27, 'Giza Trail', 'When numerous individuals everywhere around the world consider Egypt, the first thing that definitely comes to mind is about the Pyramids with a polite caravan of camels roaming around. It is a romantic dream of several tourists in Egypt to attempt such a', 'Giza-Trail.jpg'),
(28, 'White Desert', 'An excursion to the White Desert â€“ El Sahara El Beida â€“ is an extraordinary affair.  Trekking trip in Egyptâ€™s the White Desert offers the chance to observe what resemble as snow routes among sand dunes. Also, here the long periods of extreme weather', 'White-desert1.jpg'),
(29, 'Red Sea Mountain Trail', 'The 170km-long, Red Sea mountain trail is the first long distance hiking trail in Egypt and the sister project of the award-winning Sinai Trail. Here you will get a chance to visit the less known rugged mountains capes outside the beach side resort town o', 'Cover-for-Red-Sea-Mountain-Trail-News.jpg'),
(30, 'Mount Moses Trail', 'Mount Moses is a less demanding hike than Mount Catherine, the tallest peak in Egypt. Still, itâ€™s not an easy one. Mount Moses, which is also known as Jebel Al Tur or Mount Sinai, is 2,285 metres and is considered a holy site by different religions', 'mount_moses.jpg'),
(31, 'The Colored Canyon, Nuweiba ', 'Keeping you at a hike of about 800 metres long, the Coloured Canyon is located in the Sinai Peninsula, where the nearest town is Nuweiba. Easily reachable via a 4WD, the canyon offers different shades and hues of colours', 'sinai_coloured_canyon_-_panoramio_6.jpg'),
(32, 'Wadi Degla Protectorate, Cairo', 'A hike that whisks you away from the overcrowded city of Cairo, the Wadi Degla Protectorate is a place where you can escape city life without crossing its borders. Located in the Maadi district, the Wadi Degla Protectorate extends about 30 kilometres in l', 'wadi_degla_mohammed_said_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `joined`
--

CREATE TABLE `joined` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `group_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productDesc` varchar(255) NOT NULL,
  `productPrice` int(255) NOT NULL,
  `productPhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productDesc`, `productPrice`, `productPhoto`) VALUES
(2, 'Hiking Shorts', 'Waterproof hiking shorts', 200, 'shorts.jpg'),
(6, 'Hiking T-Shirt', 'A waterproof hiking tshirt', 300, 'shirt.jpg'),
(7, 'Hiking Boots', 'Urberg Helag Boots', 900, 'boots.jpg'),
(8, 'Hiking Backpack', 'Mountain Adventurer backpack', 1200, 'backpack.jpg'),
(10, 'Hiking Bottle', 'MH100 1l-black', 150, 'bottle.jpg'),
(11, 'Hiking Leggings', 'High Quality Leggings for women', 300, 'leggings.jpeg'),
(13, 'Hiking Waist Pack', 'Bp Vision Waist Packs', 500, 'waistpack.jpg'),
(15, 'Hiking Scarf', 'Wrap Scarf', 100, 'scarf2.jpg'),
(16, 'Hiking Umbrella ', 'Euroschirm Swing Handsfree umbrella', 150, 'umbrella.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `placephoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `name`, `email`, `place`, `placephoto`) VALUES
(7, 'koko1', 'koko@email.com', 'sharm el shekih', ''),
(8, 'koko1', 'koko@email.com', 'sharm el shekih', ''),
(9, 'koko1', 'koko@email.com', 'sharm el shekih', ''),
(10, 'koko1', 'koko@email.com', 'aloo', ''),
(11, 'malek', 'malek@email.com', 'aloo', ''),
(12, 'malek', 'malek@email.com', 'aloo', ''),
(13, 'malek', 'malek@email.com', 'aloo', ''),
(14, 'malek', 'malek@email.com', 'alooooooooooooooooooooooooooopp', ''),
(15, 'malek', 'malek@email.com', 'alooooooooooooooooooooooooooopp', ''),
(16, 'malek', 'malek@email.com', 'alooooooooolakFKAJLWDFAHDFIUQHWF', ''),
(17, 'malek', 'malekfouda@email.com', 'alooooo', ''),
(18, 'malek', 'malek@email.com', 'kokokokook', ''),
(19, 'malek', 'malek@email.com', '', '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg'),
(20, 'malek', 'malek@email.com', 'alokaka', '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg'),
(21, 'karmellax', 'kokoi@email.com', 'sharm gamed', '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `claim` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `claim`, `phone`, `photo`) VALUES
(57, 'malek', '123456', 'malek@email.com', 0, '01226076000', '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg'),
(58, 'malekfouda', '123456', 'malekfouda@email.com', 1, '01234567788', '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg'),
(61, 'Amir1', '132456', 'amir@amir.com', 1, '01095313119', '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg'),
(64, 'karam1222', '12334566', 'karam@d7k.com', 1, '55465484516', '68f07c27-dc7d-4120-a4fa-1f38170e6c4f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productConstraint` (`productID`),
  ADD KEY `userConstraint` (`userID`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recieved` (`recievedBy`),
  ADD KEY `send` (`sentBy`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joined`
--
ALTER TABLE `joined`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupJoin` (`user_id`),
  ADD KEY `groupJoin2` (`group_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `joined`
--
ALTER TABLE `joined`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `productConstraint` FOREIGN KEY (`productID`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userConstraint` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `recieved` FOREIGN KEY (`recievedBy`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `send` FOREIGN KEY (`sentBy`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `joined`
--
ALTER TABLE `joined`
  ADD CONSTRAINT `groupJoin` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `groupJoin2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
