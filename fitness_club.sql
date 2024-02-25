-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 06:02 AM
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
-- Database: `fitness_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(1, 'two.jpg'),
(2, 'three.jpg'),
(3, 'two.jpg'),
(4, 'three.jpg'),
(5, 'two.jpg'),
(6, 'three.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`) VALUES
(1, 'Cardio', 'Cardiovascular exercise, commonly referred to as \"cardio,\" encompasses activities that elevate the heart rate and increase blood circulation throughout the body. This form of exercise is crucial for maintaining overall health and well-being. Engaging in regular cardiovascular activities, such as running, swimming, cycling, or brisk walking, can improve cardiovascular endurance, strengthen the heart muscle, and enhance lung capacity. Additionally, cardio workouts promote weight loss by burning calories and reducing body fat, which can lower the risk of obesity-related conditions like heart disease, diabetes, and high blood pressure. Beyond physical health benefits, cardio exercises have a positive impact on mental health, as they release endorphins, the body\'s natural mood elevators, which can alleviate stress, anxiety, and depression. Moreover, incorporating cardio into your routine can boost energy levels, improve sleep quality, and enhance cognitive function. Whether it\'s a vigorous ', 'one.jpg'),
(2, 'Power Lifting', 'Powerlifting is a sport that epitomizes sheer strength, determination, and precision. At its core, powerlifting revolves around three main lifts: the squat, bench press, and deadlift. Athletes in this discipline focus on lifting the maximum weight possible in each of these movements, often in competitions where they are judged based on technique and the amount of weight successfully lifted. What sets powerlifting apart is its emphasis on raw strength, with competitors eschewing the use of supportive equipment like lifting suits or straps commonly seen in other strength sports. This demands not only physical prowess but also mental fortitude, as lifters must push their bodies to the absolute limit while maintaining perfect form. The training regimen for powerlifting is intense and rigorous, involving a combination of heavy lifting, accessory exercises, and meticulous attention to nutrition and recovery. Success in powerlifting is not solely measured by the weight lifted but also by the ', 'two.jpg'),
(3, 'Strength Training', 'Strength training is a cornerstone of physical fitness, emphasizing the development of muscular strength, endurance, and power. It involves performing exercises that target specific muscle groups, using resistance such as weights, resistance bands, or bodyweight. The benefits of strength training extend beyond just building muscle mass; it also improves bone density, enhances joint health, and boosts metabolism, aiding in weight management and overall physical performance. Additionally, strength training can enhance functional abilities, making everyday tasks easier and reducing the risk of injury. Whether you\'re a professional athlete looking to improve performance, an individual seeking to enhance overall health and fitness, or someone aiming to maintain independence and vitality as they age, incorporating strength training into your routine is crucial. With proper technique, progression, and consistency, strength training can be adapted to suit individuals of all ages and fitness le', 'three.jpg'),
(4, 'Weight Loss', 'Weight loss is a multifaceted journey that involves adopting a healthier lifestyle to achieve and maintain a lower body weight. This process typically revolves around a combination of balanced nutrition, regular physical activity, and behavioral changes. Caloric intake plays a pivotal role, as creating a calorie deficit—where the calories burned exceed those consumed—promotes weight loss. A well-rounded diet, rich in fruits, vegetables, lean proteins, and whole grains, is crucial for providing essential nutrients while keeping calorie intake in check. Regular exercise not only aids in burning calories but also improves overall fitness and helps preserve lean muscle mass. Additionally, adopting mindful eating habits, such as paying attention to portion sizes and avoiding emotional eating, contributes to long-term success. It\'s important to approach weight loss as a gradual and sustainable process, focusing on overall well-being rather than quick fixes. Consultation with healthcare profe', 'four.jpg'),
(5, 'Weight Gain', 'Weight gain is a complex and multifaceted aspect of human health, influenced by various factors such as genetics, lifestyle, and environmental elements. It occurs when an individual\'s calorie intake exceeds their energy expenditure, leading to an accumulation of excess fat. While some may deliberately pursue weight gain for muscle building or athletic purposes, others may experience it unintentionally due to factors like hormonal imbalances, medications, or medical conditions. Unhealthy dietary habits, characterized by the consumption of high-calorie, low-nutrient foods, can contribute significantly to weight gain. Sedentary lifestyles, marked by insufficient physical activity, further exacerbate the imbalance between calorie intake and expenditure. Additionally, emotional factors such as stress, depression, or emotional eating can also play a role in weight gain. Managing weight gain requires a holistic approach that includes a balanced diet, regular exercise, and addressing underlyin', 'five.jpg'),
(6, 'Stretching', 'Stretching is an essential component of any fitness routine, offering a plethora of benefits for both the body and mind. Primarily, it increases flexibility by lengthening muscles and tendons, allowing for a greater range of motion in joints. This improved flexibility not only enhances athletic performance but also reduces the risk of injury during physical activity. Additionally, stretching promotes better circulation by increasing blood flow to the muscles, which can help alleviate muscle soreness and improve recovery time after workouts. Beyond the physical advantages, stretching also provides mental relaxation and stress relief. The deliberate focus on breathing and movement during stretching can help calm the mind, reduce tension, and promote a sense of overall well-being. Whether as part of a warm-up routine before exercise or as a standalone practice, incorporating stretching into daily life can lead to improved physical health, increased relaxation, and a greater sense of vital', 'six.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
