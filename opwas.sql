-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2020 at 02:36 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opwas`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(10, 'Pain Relief'),
(11, 'Skin Conditions'),
(12, 'Stomach, Bowels and Digestion'),
(13, 'Coughs, Colds, Flu and Sore Throats'),
(14, 'Allergies');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` int(11) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `customer_name` (`customer_name`),
  UNIQUE KEY `customer_email` (`customer_email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_password`, `join_date`) VALUES
(1, 'kk', 'admin@admin.com', 8893, '1234', '2020-09-28 21:11:07'),
(2, 'kejgon', 'kejgon@gmail.com', 12345678, 'fyiuoidf', '2020-09-28 20:40:22'),
(3, 'kjdkjsj', 'kfkjf@gmail.com', 12346, 'xcvbnm', '2020-09-28 20:41:24'),
(4, 'jemo', 'jemo@gmail.com', 123456678, '1234', '2020-09-29 10:46:27'),
(5, 'keno', 'keno@gmail.com', 1234545678, '123', '2020-09-29 11:08:26'),
(6, 'peter', 'peter@gmail.com', 12345678, '$2y$10$vO3awMvEzfIEhHj4Ww4gHOBNusooAh3Cx6xafCE.29AhkY64j2NRa', '2020-10-16 12:37:07'),
(7, 'john', 'john@gmail.com', 700123455, '$2y$10$RJ36wEJXXyZqjs4o2eQEGON.22VCsaFWhivsMxxY7nR./7Dps0QXm', '2020-10-16 12:43:22'),
(8, 'man', 'man@gmail.com', 700433186, '$2y$10$Q.OsyLE0EyPm0z8kcFtUeOhnSs5u.Y1e.N0wQQ2KIctPc/z4UZ.h.', '2020-10-16 12:52:07'),
(9, 'chris', 'chris@gmail.com', 98765498, '$2y$10$y3d5s7T13G5oFLWUEapXKOeSMnqUGEq/hEMT7bHH/vzRZPCRjwuRa', '2020-10-16 13:37:13'),
(10, 'alban', 'alban@gmail.com', 700433186, '$2y$10$6T4VTW3uYXVYz863EfS52e5ppSayRcPKLUiNzGODV7akS29v46W5S', '2020-10-19 09:39:36'),
(11, 'jordan', 'jordan@gmail.com', 987654321, '$2y$10$DGA5UXeDrXnhkUvUecNJ2eNAFXnFY9hb3EL7EhGGgZMvd7N8YRA3y', '2020-10-28 08:52:24'),
(12, 'jj', 'djhsjsd@gmail.com', 3456789, '$2y$10$/hOOUda3HnCfUizG9bBBqethHSKlBsp40CNMKw6UC2f5PpyZOAzFO', '2020-10-28 08:54:05'),
(13, 'we', 'haskkan@gmail.com', 5678, '$2y$10$t1K2DN8EgLLwopk0N0ldPuZ6SdgQqrhrPq0fV4ntS2xdhf.QLgDF2', '2020-10-28 08:57:29'),
(14, 'jo', 'kej99gon@gmail.com', 8888, '$2y$10$C79ISH4C2RR79c/z3.7KJuVNl1UsGjC3qlgnpQXeUFsyDc9XN0MXq', '2020-10-28 09:13:48'),
(15, 'nn', 'johnny@gmail.com', 700433186, '$2y$10$BV7hTPNWUWnejNqrDYGP9uA3xWxeb3r84s9OxcD1YludDzGf2FWga', '2020-10-29 01:34:58'),
(16, 'jones', 'jones@gmail.com', 700111186, '$2y$10$b1Lda11jODEVm2b9NyvmyeEIYgpzFvp6rMldDD.848x27jel./xZ2', '2020-10-29 11:14:39'),
(17, 'kkkkj', 'kkkkj@gmail.com', 788844866, '$2y$10$a3NqyZX5wGTW89dNqYe6zumOBInPYaXI1eGdO0L06/eKWPAh91bzG', '2020-10-29 11:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

DROP TABLE IF EXISTS `drugs`;
CREATE TABLE IF NOT EXISTS `drugs` (
  `drug_id` int(11) NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(255) NOT NULL,
  `drug_category_id` int(11) NOT NULL,
  `drug_price` float NOT NULL,
  `drug_quantity` int(11) NOT NULL,
  `drug_short_description` varchar(255) NOT NULL,
  `drug_description` longtext NOT NULL,
  `drug_image` varchar(255) NOT NULL,
  `howtouse` longtext NOT NULL,
  `precautions` longtext NOT NULL,
  PRIMARY KEY (`drug_id`),
  UNIQUE KEY `drug_name` (`drug_name`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `drug_name`, `drug_category_id`, `drug_price`, `drug_quantity`, `drug_short_description`, `drug_description`, `drug_image`, `howtouse`, `precautions`) VALUES
(131, 'Activated Charcoal Tablets 100', 13, 900, 11, 'Activated charcoal is a potent natural treatment used to trap toxins and chemicals in the body', 'Activated charcoal is a potent natural treatment used to trap toxins and chemicals in the body, allowing them to be flushed out so the body does not reabsorb them. It is made from a variety of sources, but when used for natural healing, it is important to select activated charcoal made from coconut shells or other natural sources.', 'rsz_wellvita_activated_charcoal_30_s_web_600x.jpg', 'Take this medication exactly as prescribed by your doctor. Do not take it in larger amounts or for longer than recommended. Take charcoal with a full glass (8 ounces) of water. Do not crush, break, or chew a charcoal tablet or capsule. Swallow the pill whole. Charcoal is usually taken after meals or at the first sign of stomach discomfort. Stop taking charcoal and call your doctor if your diarrhoea lasts longer than 2 days or you also have a fever.', 'Do not take charcoal with any other medicine. Take your dose of charcoal at least 2 hours before or 1 hour after a dose of any other medicine. Charcoal binds to other drugs and can make them less effective, which could become dangerous.'),
(133, 'Aerius Oral Solution 0.5mg/ml 150ml', 10, 10000, 5, 'Aerius oral solution is an antiallergy medicine that does not make you drowsy. It helps control your allergic reaction and its symptoms.', 'Aerius oral solution is an antiallergy medicine that does not make you drowsy. It helps control your allergic reaction and its symptoms. It relieves symptoms associated with allergic rhinitis (inflammation of the nasal passages caused by an allergy, for example, hay fever or allergy to dust mites). These symptoms include sneezing, runny or itchy nose, itchy palate, and itchy, red or watery eyes. Aerius oral solution is also used to relieve the symptoms associated with urticaria (a skin condition caused by an allergy). These symptoms include itching and hives.', 'rsz_aerius-05-mg-per-ml-syrup-150ml.jpg', 'The usual recommended dose is: Adults and children 12 years of age and older is 10 ml(5 mg) once daily. Children 6 to 11 years:5 ml (2.5 mg) once daily.For children 2 to 5 years 2.5 ml (1.25 mg) once daily. It may be taken with or without food. Children between 2 to 12 years of age should not take this medication for longer than 14 days unless recommended by a doctor.', 'Do not take this medication if you are allergic to desloratadine or any ingredients of the medication.'),
(134, 'Alben Tablet 1\\\'s', 11, 899, 5, 'Alben 200 mg Tablet is an antiparasitic drug used in the prevention and treatment of parasitic infections caused by tapeworms', 'Alben 200 mg Tablet is an antiparasitic drug used in the prevention and treatment of parasitic infections caused by tapeworms, pinworms and hookworms. Each tablet contains albendazole - 0.36 g (as an active ingredient), as well as excipients. Alben 200 mg Tablet is an antiparasitic medication. It works by keeping the worms from absorbing sugar (glucose), thereby depleting their energy level. This causes the worms to die and treats your infection.', 'rsz_esk0007-600x400.jpg', 'Take this medicine in the dose and duration as advised by your doctor. Swallow it as a whole. Do not chew, crush or break it. Alben 200 mg Tablet may be taken with or without food, but it is better to take it at a fixed time. Child (12 to 24 months): 200 mg as a single dose (Half of Albendazole 400 tablet or 5 ml Albendazole suspension). Adults & children (over two years): 400 mg (400 tablet or 10 ml Albendazole suspension) as a single dose in cases of Enterobius vermicularis, Trichuris trichiura, Ascaris lumbricoides, Ancylostoma duodenale and Necator americanus. In cases of strongyloidiasis or taeniasis, 400 mg (400 mg tablet or 10 ml suspension) as a single dose should be given for three consecutive days. Giardiasis: 400 mg (400 mg tablet or 10 ml suspension) once daily for five days. Albendazole in hydatid disease (Echinococcosis): In the treatment of echinococcosis, Albendazole is given by mouth with meals in a dose of 400 mg twice daily for 28 days for patients weighing over 60 kg. A dose of 15 mg/kg body weight daily in two divided doses (to a maximum total daily dose of 800 mg) is used for patients weighing less than 60 kg. For cystic echinococcosis the 28-days course may be repeated after 14 days without treatment to a total of three treatment cycles. For alveolar echinococcosis, cycles of 28 days of treatment followed by 14 days without treatment may need to continue for months or years. When three courses of therapy have been given in the pre or post surgical setting, optimal killing of cyst contents is achieved.', 'This is known to be teratogenic and embryo-toxic in some animals. Therefore it should not be administered during pregnancy or in women thought to be pregnant. It should only be used in the treatment of echinococcosis if there is constant medical supervision with regular monitoring of serumtransaminase concentrations and of leucocyte and platelet counts. Precautions: Elevations in hepatic enzyme levels and reversible reduction in total white cell count have occasionally been reported. These changes appear to be more common during treatment of E. multilocularis.'),
(136, 'Activated Charcoal Tablets 100\'s', 13, 290, 6, 'Activated charcoal is a potent natural treatment used to trap toxins and chemicals in the body', 'Activated charcoal is a potent natural treatment used to trap toxins and chemicals in the body, allowing them to be flushed out so the body does not reabsorb them. It is made from a variety of sources, but when used for natural healing, it is important to select activated charcoal made from coconut shells or other natural sources.', 'aa1c6e50-c573-44fb-a368-0f309a802b5a.JPG', 'Take this medication exactly as prescribed by your doctor. Do not take it in larger amounts or for longer than recommended. Take charcoal with a full glass (8 ounces) of water. Do not crush, break, or chew a charcoal tablet or capsule. Swallow the pill whole. Charcoal is usually taken after meals or at the first sign of stomach discomfort. Stop taking charcoal and call your doctor if your diarrhoea lasts longer than 2 days or you also have a fever.', 'Do not take charcoal with any other medicine. Take your dose of charcoal at least 2 hours before or 1 hour after a dose of any other medicine. Charcoal binds to other drugs and can make them less effective, which could become dangerous.'),
(137, 'Actifed Wet Cough And Cold Syrup 100ml', 13, 500, 3, 'Actifed wet cough and cold Syrup contains Guaiphenesin, Pseudoephedrine and Tripolidine.', 'Actifed wet cough and cold Syrup contains Guaiphenesin, Pseudoephedrine and Tripolidine.It works by thinning the mucus in the air passages causing narrowing of the blood vessels and reducing swelling in the nasal passages. Actifed wet cough and cold Syrup is used in the treatment of cough, congestion, commoncold, bronchitis, breathing illnesses, cold, allergies, high fever, sinus congestion and pressure, respiratory allergies, runny nose, itching, watery eyes, sneezing, itching of the nose or throat and nasal congestion.', 'rsz_actifed_wet-cough-cold-syrup_100ml_1.jpg', 'Take 10ml every four to six hours, up to four times a day. Do not take more than four doses in 24 hours. Consult your doctor if your cough lasts for more than seven days, gets worse, comes back, or is accompanied by a fever, rash, or persistent headache.', 'Actifed wet cough and cold should not be used while pregnant because it contains Pseudoephedrine which has blood vessel constricting effects that could restrict blood supply to the placenta. Consult your doctor before taking this medication.'),
(138, 'Almax Suspension 225ml', 10, 600, 5, 'Almax belongs to a group of medicines called antacids, which are compounds that act by neutralising excess stomach acid.', 'Almax belongs to a group of medicines called antacids, which are compounds that act by neutralising excess stomach acid. It is indicated in the relief and symptomatic treatment of heartburn and heartburn in adults and over 12 years.', '8dc05c5e-493f-471e-80ae-a12e93ad1805.JPG', 'Use in adults and over 12 years: The recommended dose is a dose of 7.5 ml (1 gram of almagato) , three times a day, preferably half an hour to one hour after meals. If discomfort occurs again, another dose may be taken before bedtime. Do not exceed 8 grams per day ( 8 doses of 7.5 ml). Use in elderly patients: No dose modification is necessary.', 'Pregnancy: Avoid chronic or excessive use of Almax during pregnancy due to the risk of abnormalities in the fetus/newborn. If you need a longer treatment, consult your doctor who will indicate the appropriate guideline. If you are pregnant or think you might be, consult your doctor or pharmacist before taking any medication. The consumption of medications during pregnancy can be dangerous for the embryo or fetus and should be monitored by your doctor. Lactation: The chronic or excessive use of Almax should be avoided. Although small amounts of aluminium and magnesium can be eliminated by breast milk in mothers treated with Almax, its concentration is not high enough to cause adverse effects in the infant.'),
(139, 'Benadryl Allergy Relief Capsules 24\'s', 14, 1200, 2, 'Benadryl is an antihistamine used to relieve symptoms of allergy, hay fever, and the common cold.', 'Benadryl is an antihistamine used to relieve symptoms of allergy, hay fever, and the common cold. These symptoms include rash, itching, watery eyes, itchy eyes/nose/throat, cough, runny nose, and sneezing. It is also used to prevent and treat nausea, vomiting and dizziness caused by motion sickness. Benadryl can also be used to help you relax and fall asleep.', 'd25f40c9-419e-4e3f-81ce-cb0aeed661d5.JPG', 'Take 25 to 50 mg, every 4 to 6 hours. Should be swallowed whole.\r\n', 'You should not consume alcohol while taking Benadryl. Drinking alcohol with Benadryl can increase the effects of alcohol and cause excess sleepiness that can impair your abilities. For instance, you may have trouble driving.'),
(140, 'Aerius 5mg Tablets 30\'s', 14, 1500, 3, 'Aerius tablets contain Desloratadine 5 mg which is used in the treatment of allergy symptoms.', 'Aerius tablets contain Desloratadine 5 mg which is used in the treatment of allergy symptoms. It is an antihistamine medication. It treats allergy symptoms such as such as itching, swelling, and rashes by blocking the effects of a chemical messenger (histamine) in the body.', '44bb372a-b6f3-498b-a7a4-d7792a755919.JPG', 'Take this medicine in the dose and duration as advised by your doctor. Swallow it as a whole. Do not chew, crush or break it. Aerius 5 mg Tablet may be taken with or without food, but it is better to take it at a fixed time.', 'Aerius 5 mg Tablet may cause excessive drowsiness and calmness with alcohol. Aerius may be unsafe to use during pregnancy. Aerius 5 mg Tablet should be used with caution in patients with kidney and liver disease. Dose adjustment may be needed. Please consult your doctor.'),
(141, 'Adol 125mg Suppositories 10\'s', 10, 500, 6, 'Adol 125 mg suppositories: Each suppository contains Paracetamol as the Active ingredient.', 'Adol 125 mg suppositories: Each suppository contains Paracetamol as the Active ingredient. Paracetamol Suppositories are used for pain relief and fever in children under the age of 6 years. Adol 125 mg is suitable for children who find it difficult to take paracetamol as tablets or syrup.', 'd0ca15f1-0626-4659-97ed-a227054dcc63.JPG', '1 to 3 years: One suppository 4 to 6 years: Two suppositories These doses may be repeated up to a maximum of 4 times in 24 hours. How to use Adol Suppositories: 1. Ensure the child\'s bowels are empty before administering the suppositories. 2. Wash your hands well with clean water and detergent. 3. Place your child on: o On either side with the knees bent toward the chest. o On back with legs raised as if to change a diaper. o On stomach with knees to chest or over your lap. 4. Hold the suppository between your thumb and index finger. 5. With your other hand, open the buttock cheeks until you can see the anal opening. 6. Gently insert the round end into the anal opening using the tip of your index finger. You will know if you have inserted it far enough if it does not come right back out. 7. Gently hold the buttock cheeks closed to keep your child from pushing it out.', 'Adol suppositories should not be used if the child is: Allergic to paracetamol or to the other main ingredient'),
(142, 'Andolex C Oral Spray 30ml', 10, 1000, 2, 'Andolex Throat Spray Provides targeted relief of pain and inflammation of a sore throat, mouth or gums', 'Andolex Throat Spray Provides targeted relief of pain and inflammation of a sore throat, mouth or gums when there is no infection Used to alleviate pain of the mouth and throat. It contains the ingredients chlorhexidine gluconate and benzydamine.', 'b456bfb0-3c4e-4b7b-b16c-ab6c6de1a356.JPG', 'Spray directly onto the inflamed area and swallow gently. Every 1.5 â€“ 3 hours as required, 5 to 10 sprays. How to use benzydamine spray: Hold the bottle upright. Lift the nozzle of the spray away from the container until it is horizontal. If it is the first time you have used the spray, point the nozzle away from you and press down on the green plunger on the top of the container until you see a fine mist. The spray is now ready to use. Aim the spray at the sore area of your mouth or throat and press down on the green plunger to release one spray. Repeat this step to give the correct number of sprays. When you have finished using the spray, push the nozzle of the spray back down against the container to store it safely until your next dose is due.', 'If you are having an operation or dental treatment, tell the person carrying out the treatment which medicines you are using. Never use more than the prescribed dose. If you suspect that someone has taken an overdose of this medicine, go to the accident and emergency department of your local hospital. Take the container with you, even if it is empty.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `mailFrom` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `msg_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  PRIMARY KEY (`msg_id`),
  UNIQUE KEY `mailFrom` (`mailFrom`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `full_name`, `subjects`, `mailFrom`, `messages`, `msg_date`) VALUES
(1, 'john doe', 'no prescription', 'johndoe@gmail.com', 'kindly need some help!!', '2020-10-06 19:33:50.464743'),
(2, 'john do', 'no prescription', 'johndo@gmail.com', 'ldsdd', '2020-10-06 19:33:50.464743');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL,
  `order_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=312 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`, `order_date`) VALUES
(302, 343.44, '499459845', 'COMPLETE', 'KSH', '2020-10-06 19:33:03.647762'),
(303, 343.44, '499459845', 'COMPLETE', 'KSH', '2020-10-06 19:33:03.647762');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
CREATE TABLE IF NOT EXISTS `reports` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `drug_price` float NOT NULL,
  `drug_name` varchar(255) NOT NULL,
  `drug_quantity` int(11) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `drug_id`, `order_id`, `drug_price`, `drug_name`, `drug_quantity`) VALUES
(13, 3, 297, 1.99, 'PANADOL EXTRA', 10),
(14, 2, 298, 9.99, 'Ultramol 500/50mg', 1),
(15, 2, 299, 9.99, 'Ultramol 500/50mg', 1),
(16, 3, 300, 1.99, 'PANADOL EXTRA', 1),
(17, 1, 301, 6.99, 'Benylin with Codeine \r\n', 2),
(18, 2, 302, 9.99, 'Ultramol 500/50mg', 1),
(19, 3, 303, 1.99, 'PANADOL EXTRA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_type`) VALUES
(1, 'kejgon', '1234', 'kej@gmail.com', 'admin'),
(8, 'keno', '$2y$10$5te4CYX/LzNtzyHYJSRaTOoTHESpLCLto48RkqNKxhzq1k0.YpdG.', 'ken@gmail.com', 'admin'),
(9, 'kamal', '$2y$10$1yOiqliuQIwjFzneKx8YHu/00nI3XjOc/rOg3uBu/oCpS4zujwsZG', 'kam@gmail.com', 'pharmacist'),
(10, 'admin', '$2y$10$s.SMoL3n6BuxBbtgC.9TqukHqoUPSBYDYZLr2L91Fz5wBMZmXQCzC', 'admin@admin.com', 'admin'),
(11, 'pharmacist', '$2y$10$vKFJ8ReUE8340G2ZcqsNs.kz351lo3mAaN32cq1ZmheD2jy2.PzmG', 'pharmacist@gmail.com', 'pharmacist');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
