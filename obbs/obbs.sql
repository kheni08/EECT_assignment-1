-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2025 at 09:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(4055, 20, 'Vijaypur', 'Active', NULL, NULL),
(4056, 20, 'Beerpur', 'Active', NULL, NULL),
(4057, 20, 'Sheopur', 'Active', NULL, NULL),
(4058, 20, 'Badoda', 'Active', NULL, NULL),
(4059, 20, 'Karahal', 'Active', NULL, NULL),
(4060, 20, 'Ambah', 'Active', NULL, NULL),
(4061, 20, 'Porsa', 'Active', NULL, NULL),
(4062, 20, 'Morena', 'Active', NULL, NULL),
(4063, 20, 'Joura', 'Active', NULL, NULL),
(4064, 20, 'Kailaras', 'Active', NULL, NULL),
(4065, 20, 'Sabalgarh', 'Active', NULL, NULL),
(4066, 20, 'Ater', 'Active', NULL, NULL),
(4067, 20, 'Bhind', 'Active', NULL, NULL),
(4068, 20, 'Mehgaon', 'Active', NULL, NULL),
(4069, 20, 'Gormi', 'Active', NULL, NULL),
(4070, 20, 'Gohad', 'Active', NULL, NULL),
(4071, 20, 'Ron', 'Active', NULL, NULL),
(4072, 20, 'Mihona', 'Active', NULL, NULL),
(4073, 20, 'Lahar', 'Active', NULL, NULL),
(4074, 20, 'Gwalior (Gird)', 'Active', NULL, NULL),
(4075, 20, 'Dabra (Pichhore)', 'Active', NULL, NULL),
(4076, 20, 'Bhitarwar', 'Active', NULL, NULL),
(4077, 20, 'Chinour', 'Active', NULL, NULL),
(4078, 20, 'Seondha', 'Active', NULL, NULL),
(4079, 20, 'Indergarh', 'Active', NULL, NULL),
(4080, 20, 'Datia', 'Active', NULL, NULL),
(4081, 20, 'Bhander', 'Active', NULL, NULL),
(4082, 20, 'Pohri', 'Active', NULL, NULL),
(4083, 20, 'Shivpuri', 'Active', NULL, NULL),
(4084, 20, 'Narwar', 'Active', NULL, NULL),
(4085, 20, 'Karera', 'Active', NULL, NULL),
(4086, 20, 'Kolaras', 'Active', NULL, NULL),
(4087, 20, 'Badarwas', 'Active', NULL, NULL),
(4088, 20, 'Pichhore', 'Active', NULL, NULL),
(4089, 20, 'Khaniyadhana', 'Active', NULL, NULL),
(4090, 20, 'Niwari', 'Active', NULL, NULL),
(4091, 20, 'Orchha', 'Active', NULL, NULL),
(4092, 20, 'Prithvipur', 'Active', NULL, NULL),
(4093, 20, 'Jatara', 'Active', NULL, NULL),
(4094, 20, 'Mohangarh', 'Active', NULL, NULL),
(4095, 20, 'Palera', 'Active', NULL, NULL),
(4096, 20, 'Baldeogarh', 'Active', NULL, NULL),
(4097, 20, 'Khargapur', 'Active', NULL, NULL),
(4098, 20, 'Tikamgarh', 'Active', NULL, NULL),
(4099, 20, 'Gaurihar', 'Active', NULL, NULL),
(4100, 20, 'Laundi', 'Active', NULL, NULL),
(4101, 20, 'Chandla', 'Active', NULL, NULL),
(4102, 20, 'Nowgong', 'Active', NULL, NULL),
(4103, 20, 'Maharajpur', 'Active', NULL, NULL),
(4104, 20, 'Chhatarpur', 'Active', NULL, NULL),
(4105, 20, 'Rajnagar', 'Active', NULL, NULL),
(4106, 20, 'Bada Malhera', 'Active', NULL, NULL),
(4107, 20, 'Ghuwara', 'Active', NULL, NULL),
(4108, 20, 'Bijawar', 'Active', NULL, NULL),
(4109, 20, 'Buxwaha', 'Active', NULL, NULL),
(4110, 20, 'Ajaigarh', 'Active', NULL, NULL),
(4111, 20, 'Panna', 'Active', NULL, NULL),
(4112, 20, 'Devendranagar', 'Active', NULL, NULL),
(4113, 20, 'Gunnor', 'Active', NULL, NULL),
(4114, 20, 'Amanganj', 'Active', NULL, NULL),
(4115, 20, 'Pawai', 'Active', NULL, NULL),
(4116, 20, 'Shahnagar', 'Active', NULL, NULL),
(4117, 20, 'Raipura', 'Active', NULL, NULL),
(4118, 20, 'Bina', 'Active', NULL, NULL),
(4119, 20, 'Khurai', 'Active', NULL, NULL),
(4120, 20, 'Malthon', 'Active', NULL, NULL),
(4121, 20, 'Banda', 'Active', NULL, NULL),
(4122, 20, 'Shahgarh', 'Active', NULL, NULL),
(4123, 20, 'Rahatgarh', 'Active', NULL, NULL),
(4124, 20, 'Sagar', 'Active', NULL, NULL),
(4125, 20, 'Garhakota', 'Active', NULL, NULL),
(4126, 20, 'Rehli', 'Active', NULL, NULL),
(4127, 20, 'Kesli', 'Active', NULL, NULL),
(4128, 20, 'Deori', 'Active', NULL, NULL),
(4129, 20, 'Hatta', 'Active', NULL, NULL),
(4130, 20, 'Patera', 'Active', NULL, NULL),
(4131, 20, 'Batiyagarh', 'Active', NULL, NULL),
(4132, 20, 'Patharia', 'Active', NULL, NULL),
(4133, 20, 'Damoh', 'Active', NULL, NULL),
(4134, 20, 'Jabera', 'Active', NULL, NULL),
(4135, 20, 'Tendukheda', 'Active', NULL, NULL),
(4136, 20, 'Raghurajnagar', 'Active', NULL, NULL),
(4137, 20, 'Majhgawan', 'Active', NULL, NULL),
(4138, 20, 'Birsinghpur', 'Active', NULL, NULL),
(4139, 20, 'Nagod', 'Active', NULL, NULL),
(4140, 20, 'Unchahara', 'Active', NULL, NULL),
(4141, 20, 'Rampur Baghelan', 'Active', NULL, NULL),
(4142, 20, 'Kotar', 'Active', NULL, NULL),
(4143, 20, 'Amarpatan', 'Active', NULL, NULL),
(4144, 20, 'Ramnagar', 'Active', NULL, NULL),
(4145, 20, 'Maihar', 'Active', NULL, NULL),
(4146, 20, 'Teonthar', 'Active', NULL, NULL),
(4147, 20, 'Jawa', 'Active', NULL, NULL),
(4148, 20, 'Sirmour', 'Active', NULL, NULL),
(4149, 20, 'Mangawan', 'Active', NULL, NULL),
(4150, 20, 'Semaria', 'Active', NULL, NULL),
(4151, 20, 'Hanumana', 'Active', NULL, NULL),
(4152, 20, 'Mauganj', 'Active', NULL, NULL),
(4153, 20, 'Naigarhi', 'Active', NULL, NULL),
(4154, 20, 'Huzur', 'Active', NULL, NULL),
(4155, 20, 'Raipur - Karchuliyan', 'Active', NULL, NULL),
(4156, 20, 'Gurh', 'Active', NULL, NULL),
(4157, 20, 'Bandhogarh', 'Active', NULL, NULL),
(4158, 20, 'Chandia', 'Active', NULL, NULL),
(4159, 20, 'Manpur', 'Active', NULL, NULL),
(4160, 20, 'Pali', 'Active', NULL, NULL),
(4161, 20, 'Nowrozabad', 'Active', NULL, NULL),
(4162, 20, 'Jawad', 'Active', NULL, NULL),
(4163, 20, 'Singoli', 'Active', NULL, NULL),
(4164, 20, 'Neemuch', 'Active', NULL, NULL),
(4165, 20, 'Jiran', 'Active', NULL, NULL),
(4166, 20, 'Manasa', 'Active', NULL, NULL),
(4167, 20, 'Bhanpura', 'Active', NULL, NULL),
(4168, 20, 'Malhargarh', 'Active', NULL, NULL),
(4169, 20, 'Garoth', 'Active', NULL, NULL),
(4170, 20, 'Shamgarh', 'Active', NULL, NULL),
(4171, 20, 'Mandsaur', 'Active', NULL, NULL),
(4172, 20, 'Daloda', 'Active', NULL, NULL),
(4173, 20, 'Sitamau', 'Active', NULL, NULL),
(4174, 20, 'Suwasara', 'Active', NULL, NULL),
(4175, 20, 'Piploda', 'Active', NULL, NULL),
(4176, 20, 'Jaora', 'Active', NULL, NULL),
(4177, 20, 'Alot', 'Active', NULL, NULL),
(4178, 20, 'Tal', 'Active', NULL, NULL),
(4179, 20, 'Sailana', 'Active', NULL, NULL),
(4180, 20, 'Bajna', 'Active', NULL, NULL),
(4181, 20, 'Rawti', 'Active', NULL, NULL),
(4182, 20, 'Ratlam', 'Active', NULL, NULL),
(4183, 20, 'Khacharod', 'Active', NULL, NULL),
(4184, 20, 'Nagda', 'Active', NULL, NULL),
(4185, 20, 'Mahidpur', 'Active', NULL, NULL),
(4186, 20, 'Ghatiya', 'Active', NULL, NULL),
(4187, 20, 'Tarana', 'Active', NULL, NULL),
(4188, 20, 'Ujjain', 'Active', NULL, NULL),
(4189, 20, 'Badnagar', 'Active', NULL, NULL),
(4190, 20, 'Susner', 'Active', NULL, NULL),
(4191, 20, 'Nalkheda', 'Active', NULL, NULL),
(4192, 20, 'Badod', 'Active', NULL, NULL),
(4193, 20, 'Agar', 'Active', NULL, NULL),
(4194, 20, 'Shajapur', 'Active', NULL, NULL),
(4195, 20, 'Gulana', 'Active', NULL, NULL),
(4196, 20, 'Moman Badodiya', 'Active', NULL, NULL),
(4197, 20, 'Shujalpur', 'Active', NULL, NULL),
(4198, 20, 'Kalapipal', 'Active', NULL, NULL),
(4199, 20, 'Tonk Khurd', 'Active', NULL, NULL),
(4200, 20, 'Sonkatch', 'Active', NULL, NULL),
(4201, 20, 'Dewas', 'Active', NULL, NULL),
(4202, 20, 'Kannod', 'Active', NULL, NULL),
(4203, 20, 'Satwas', 'Active', NULL, NULL),
(4204, 20, 'Bagli', 'Active', NULL, NULL),
(4205, 20, 'Hatpiplya', 'Active', NULL, NULL),
(4206, 20, 'Khategaon', 'Active', NULL, NULL),
(4207, 20, 'Badnawar', 'Active', NULL, NULL),
(4208, 20, 'Sardarpur', 'Active', NULL, NULL),
(4209, 20, 'Dhar', 'Active', NULL, NULL),
(4210, 20, 'Gandhwani', 'Active', NULL, NULL),
(4211, 20, 'Kukshi', 'Active', NULL, NULL),
(4212, 20, 'Dahi', 'Active', NULL, NULL),
(4213, 20, 'Manawar', 'Active', NULL, NULL),
(4214, 20, 'Dharampuri', 'Active', NULL, NULL),
(4215, 20, 'Depalpur', 'Active', NULL, NULL),
(4216, 20, 'Hatod', 'Active', NULL, NULL),
(4217, 20, 'Sawer', 'Active', NULL, NULL),
(4218, 20, 'Indore', 'Active', NULL, NULL),
(4219, 20, 'Mhow', 'Active', NULL, NULL),
(4220, 20, 'Barwaha', 'Active', NULL, NULL),
(4221, 20, 'Maheshwar', 'Active', NULL, NULL),
(4222, 20, 'Kasrawad', 'Active', NULL, NULL),
(4223, 20, 'Segaon', 'Active', NULL, NULL),
(4224, 20, 'Bhikangaon', 'Active', NULL, NULL),
(4225, 20, 'Khargone', 'Active', NULL, NULL),
(4226, 20, 'Gogaon', 'Active', NULL, NULL),
(4227, 20, 'Bhagwanpura', 'Active', NULL, NULL),
(4228, 20, 'Jhiranya', 'Active', NULL, NULL),
(4229, 20, 'Barwani', 'Active', NULL, NULL),
(4230, 20, 'Pati', 'Active', NULL, NULL),
(4231, 20, 'Thikri', 'Active', NULL, NULL),
(4232, 20, 'Anjad', 'Active', NULL, NULL),
(4233, 20, 'Rajpur', 'Active', NULL, NULL),
(4234, 20, 'Pansemal', 'Active', NULL, NULL),
(4235, 20, 'Niwali', 'Active', NULL, NULL),
(4236, 20, 'Sendhwa', 'Active', NULL, NULL),
(4237, 20, 'Varla', 'Active', NULL, NULL),
(4238, 20, 'Jirapur', 'Active', NULL, NULL),
(4239, 20, 'Khilchipur', 'Active', NULL, NULL),
(4240, 20, 'Rajgarh', 'Active', NULL, NULL),
(4241, 20, 'Biaora', 'Active', NULL, NULL),
(4242, 20, 'Sarangpur', 'Active', NULL, NULL),
(4243, 20, 'Narsinghgarh', 'Active', NULL, NULL),
(4244, 20, 'Pachore', 'Active', NULL, NULL),
(4245, 20, 'Lateri', 'Active', NULL, NULL),
(4246, 20, 'Sironj', 'Active', NULL, NULL),
(4247, 20, 'Kurwai', 'Active', NULL, NULL),
(4248, 20, 'Basoda', 'Active', NULL, NULL),
(4249, 20, 'Tyonda', 'Active', NULL, NULL),
(4250, 20, 'Nateran', 'Active', NULL, NULL),
(4251, 20, 'Shamshabad', 'Active', NULL, NULL),
(4252, 20, 'Gyaraspur', 'Active', NULL, NULL),
(4253, 20, 'Gulabganj', 'Active', NULL, NULL),
(4254, 20, 'Vidisha', 'Active', NULL, NULL),
(4255, 20, 'Berasia', 'Active', NULL, NULL),
(4256, 20, 'Huzur', 'Active', NULL, NULL),
(4257, 20, 'Sehore', 'Active', NULL, NULL),
(4258, 20, 'Shyampur', 'Active', NULL, NULL),
(4259, 20, 'Ashta', 'Active', NULL, NULL),
(4260, 20, 'Jawar', 'Active', NULL, NULL),
(4261, 20, 'Ichhawar', 'Active', NULL, NULL),
(4262, 20, 'Nasrullaganj', 'Active', NULL, NULL),
(4263, 20, 'Budni', 'Active', NULL, NULL),
(4264, 20, 'Rehti', 'Active', NULL, NULL),
(4265, 20, 'Raisen', 'Active', NULL, NULL),
(4266, 20, 'Gairatganj', 'Active', NULL, NULL),
(4267, 20, 'Begamganj', 'Active', NULL, NULL),
(4268, 20, 'Goharganj', 'Active', NULL, NULL),
(4269, 20, 'Baraily', 'Active', NULL, NULL),
(4270, 20, 'Badi', 'Active', NULL, NULL),
(4271, 20, 'Silwani', 'Active', NULL, NULL),
(4272, 20, 'Udaipura', 'Active', NULL, NULL),
(4273, 20, 'Bhainsdehi', 'Active', NULL, NULL),
(4274, 20, 'Athner', 'Active', NULL, NULL),
(4275, 20, 'Betul', 'Active', NULL, NULL),
(4276, 20, 'Chicholi', 'Active', NULL, NULL),
(4277, 20, 'Ghoda Dongri', 'Active', NULL, NULL),
(4278, 20, 'Shahpur', 'Active', NULL, NULL),
(4279, 20, 'Multai', 'Active', NULL, NULL),
(4280, 20, 'Amla', 'Active', NULL, NULL),
(4281, 20, 'Khirkiya', 'Active', NULL, NULL),
(4282, 20, 'Sirali', 'Active', NULL, NULL),
(4283, 20, 'Harda', 'Active', NULL, NULL),
(4284, 20, 'Handiya', 'Active', NULL, NULL),
(4285, 20, 'Timarni', 'Active', NULL, NULL),
(4286, 20, 'Rehatgaon', 'Active', NULL, NULL),
(4287, 20, 'Seoni-Malwa', 'Active', NULL, NULL),
(4288, 20, 'Itarsi', 'Active', NULL, NULL),
(4289, 20, 'Hoshangabad', 'Active', NULL, NULL),
(4290, 20, 'Dolariya', 'Active', NULL, NULL),
(4291, 20, 'Babai', 'Active', NULL, NULL),
(4292, 20, 'Sohagpur', 'Active', NULL, NULL),
(4293, 20, 'Pipariya', 'Active', NULL, NULL),
(4294, 20, 'Bankhedi', 'Active', NULL, NULL),
(4295, 20, 'Murwara', 'Active', NULL, NULL),
(4296, 20, 'Rithi', 'Active', NULL, NULL),
(4297, 20, 'Barhi', 'Active', NULL, NULL),
(4298, 20, 'Badwara', 'Active', NULL, NULL),
(4299, 20, 'Vijayraghavgarh', 'Active', NULL, NULL),
(4300, 20, 'Bahoriband', 'Active', NULL, NULL),
(4301, 20, 'Dhimarkheda', 'Active', NULL, NULL),
(4302, 20, 'Sihora', 'Active', NULL, NULL),
(4303, 20, 'Majholi', 'Active', NULL, NULL),
(4304, 20, 'Patan', 'Active', NULL, NULL),
(4305, 20, 'Shahpura', 'Active', NULL, NULL),
(4306, 20, 'Jabalpur', 'Active', NULL, NULL),
(4307, 20, 'Panagar', 'Active', NULL, NULL),
(4308, 20, 'Kundam', 'Active', NULL, NULL),
(4309, 20, 'Gotegaon', 'Active', NULL, NULL),
(4310, 20, 'Gadarwara', 'Active', NULL, NULL),
(4311, 20, 'Narsimhapur', 'Active', NULL, NULL),
(4312, 20, 'Kareli', 'Active', NULL, NULL),
(4313, 20, 'Tendukheda', 'Active', NULL, NULL),
(4314, 20, 'Shahpura', 'Active', NULL, NULL),
(4315, 20, 'Dindori', 'Active', NULL, NULL),
(4316, 20, 'Niwas', 'Active', NULL, NULL),
(4317, 20, 'Narayanganj', 'Active', NULL, NULL),
(4318, 20, 'Mandla', 'Active', NULL, NULL),
(4319, 20, 'Ghughari', 'Active', NULL, NULL),
(4320, 20, 'Bichhiya', 'Active', NULL, NULL),
(4321, 20, 'Nainpur', 'Active', NULL, NULL),
(4322, 20, 'Tamia', 'Active', NULL, NULL),
(4323, 20, 'Amarwara', 'Active', NULL, NULL),
(4324, 20, 'Harrai', 'Active', NULL, NULL),
(4325, 20, 'Chaurai', 'Active', NULL, NULL),
(4326, 20, 'Jamai', 'Active', NULL, NULL),
(4327, 20, 'Parasia', 'Active', NULL, NULL),
(4328, 20, 'Umreth', 'Active', NULL, NULL),
(4329, 20, 'Chhindwara', 'Active', NULL, NULL),
(4330, 20, 'Mohkhed', 'Active', NULL, NULL),
(4331, 20, 'Sausar', 'Active', NULL, NULL),
(4332, 20, 'Bichhua', 'Active', NULL, NULL),
(4333, 20, 'Pandhurna', 'Active', NULL, NULL),
(4334, 20, 'Lakhnadon', 'Active', NULL, NULL),
(4335, 20, 'Chhapara', 'Active', NULL, NULL),
(4336, 20, 'Ghansaur', 'Active', NULL, NULL),
(4337, 20, 'Dhanora', 'Active', NULL, NULL),
(4338, 20, 'Keolari', 'Active', NULL, NULL),
(4339, 20, 'Seoni', 'Active', NULL, NULL),
(4340, 20, 'Barghat', 'Active', NULL, NULL),
(4341, 20, 'Kurai', 'Active', NULL, NULL),
(4342, 20, 'Katangi', 'Active', NULL, NULL),
(4343, 20, 'Tirodi', 'Active', NULL, NULL),
(4344, 20, 'Waraseoni', 'Active', NULL, NULL),
(4345, 20, 'Khairlanji', 'Active', NULL, NULL),
(4346, 20, 'Lalbarra', 'Active', NULL, NULL),
(4347, 20, 'Balaghat', 'Active', NULL, NULL),
(4348, 20, 'Kirnapur', 'Active', NULL, NULL),
(4349, 20, 'Baihar', 'Active', NULL, NULL),
(4350, 20, 'Paraswada', 'Active', NULL, NULL),
(4351, 20, 'Lanji', 'Active', NULL, NULL),
(4352, 20, 'Guna', 'Active', NULL, NULL),
(4353, 20, 'Bamori', 'Active', NULL, NULL),
(4354, 20, 'Raghogarh', 'Active', NULL, NULL),
(4355, 20, 'Maksoodangarh', 'Active', NULL, NULL),
(4356, 20, 'Kumbhraj', 'Active', NULL, NULL),
(4357, 20, 'Aron', 'Active', NULL, NULL),
(4358, 20, 'Chachaura', 'Active', NULL, NULL),
(4359, 20, 'Isagarh', 'Active', NULL, NULL),
(4360, 20, 'Chanderi', 'Active', NULL, NULL),
(4361, 20, 'Ashoknagar', 'Active', NULL, NULL),
(4362, 20, 'Shadhora', 'Active', NULL, NULL),
(4363, 20, 'Mungaoli', 'Active', NULL, NULL),
(4364, 20, 'Beohari', 'Active', NULL, NULL),
(4365, 20, 'Jaisinghnagar', 'Active', NULL, NULL),
(4366, 20, 'Sohagpur', 'Active', NULL, NULL),
(4367, 20, 'Jaitpur', 'Active', NULL, NULL),
(4368, 20, 'Kotma', 'Active', NULL, NULL),
(4369, 20, 'Anuppur', 'Active', NULL, NULL),
(4370, 20, 'Jaithari', 'Active', NULL, NULL),
(4371, 20, 'Pushparajgarh', 'Active', NULL, NULL),
(4372, 20, 'Rampur Naikin', 'Active', NULL, NULL),
(4373, 20, 'Churhat', 'Active', NULL, NULL),
(4374, 20, 'Gopadbanas', 'Active', NULL, NULL),
(4375, 20, 'Sihawal', 'Active', NULL, NULL),
(4376, 20, 'Majhauli', 'Active', NULL, NULL),
(4377, 20, 'Kusmi', 'Active', NULL, NULL),
(4378, 20, 'Chitrangi', 'Active', NULL, NULL),
(4379, 20, 'Deosar', 'Active', NULL, NULL),
(4380, 20, 'Singrauli', 'Active', NULL, NULL),
(4381, 20, 'Thandla', 'Active', NULL, NULL),
(4382, 20, 'Petlawad', 'Active', NULL, NULL),
(4383, 20, 'Meghnagar', 'Active', NULL, NULL),
(4384, 20, 'Jhabua', 'Active', NULL, NULL),
(4385, 20, 'Ranapur', 'Active', NULL, NULL),
(4386, 20, 'Bhavra', 'Active', NULL, NULL),
(4387, 20, 'Jobat', 'Active', NULL, NULL),
(4388, 20, 'Alirajpur', 'Active', NULL, NULL),
(4389, 20, 'Harsud', 'Active', NULL, NULL),
(4390, 20, 'Khalwa', 'Active', NULL, NULL),
(4391, 20, 'Khandwa', 'Active', NULL, NULL),
(4392, 20, 'Punasa', 'Active', NULL, NULL),
(4393, 20, 'Pandhana', 'Active', NULL, NULL),
(4394, 20, 'Burhanpur', 'Active', NULL, NULL),
(4395, 20, 'Khaknar', 'Active', NULL, NULL),
(4396, 20, 'Nepanagar', 'Active', NULL, NULL),
(4397, 12, 'Lakhpat', 'Active', NULL, NULL),
(4398, 12, 'Rapar', 'Active', NULL, NULL),
(4399, 12, 'Bhachau', 'Active', NULL, NULL),
(4400, 12, 'Anjar', 'Active', NULL, NULL),
(4401, 12, 'Bhuj', 'Active', NULL, NULL),
(4402, 12, 'Nakhatrana', 'Active', NULL, NULL),
(4403, 12, 'Abdasa', 'Active', NULL, NULL),
(4404, 12, 'Mandvi', 'Active', NULL, NULL),
(4405, 12, 'Mundra', 'Active', NULL, NULL),
(4406, 12, 'Gandhidham', 'Active', NULL, NULL),
(4407, 12, 'Vav', 'Active', NULL, NULL),
(4408, 12, 'Tharad', 'Active', NULL, NULL),
(4409, 12, 'Dhanera', 'Active', NULL, NULL),
(4410, 12, 'Dantiwada', 'Active', NULL, NULL),
(4411, 12, 'Amirgadh', 'Active', NULL, NULL),
(4412, 12, 'Danta', 'Active', NULL, NULL),
(4413, 12, 'Vadgam', 'Active', NULL, NULL),
(4414, 12, 'Palanpur', 'Active', NULL, NULL),
(4415, 12, 'Deesa', 'Active', NULL, NULL),
(4416, 12, 'Deodar', 'Active', NULL, NULL),
(4417, 12, 'Bhabhar', 'Active', NULL, NULL),
(4418, 12, 'Kankrej', 'Active', NULL, NULL),
(4419, 12, 'Santalpur', 'Active', NULL, NULL),
(4420, 12, 'Radhanpur', 'Active', NULL, NULL),
(4421, 12, 'Sidhpur', 'Active', NULL, NULL),
(4422, 12, 'Patan', 'Active', NULL, NULL),
(4423, 12, 'Harij', 'Active', NULL, NULL),
(4424, 12, 'Sami', 'Active', NULL, NULL),
(4425, 12, 'Chanasma', 'Active', NULL, NULL),
(4426, 12, 'Satlasana', 'Active', NULL, NULL),
(4427, 12, 'Kheralu', 'Active', NULL, NULL),
(4428, 12, 'Unjha', 'Active', NULL, NULL),
(4429, 12, 'Visnagar', 'Active', NULL, NULL),
(4430, 12, 'Vadnagar', 'Active', NULL, NULL),
(4431, 12, 'Vijapur', 'Active', NULL, NULL),
(4432, 12, 'Mahesana', 'Active', NULL, NULL),
(4433, 12, 'Becharaji', 'Active', NULL, NULL),
(4434, 12, 'Kadi', 'Active', NULL, NULL),
(4435, 12, 'Khedbrahma', 'Active', NULL, NULL),
(4436, 12, 'Vijaynagar', 'Active', NULL, NULL),
(4437, 12, 'Vadali', 'Active', NULL, NULL),
(4438, 12, 'Idar', 'Active', NULL, NULL),
(4439, 12, 'Bhiloda', 'Active', NULL, NULL),
(4440, 12, 'Meghraj', 'Active', NULL, NULL),
(4441, 12, 'Himatnagar', 'Active', NULL, NULL),
(4442, 12, 'Prantij', 'Active', NULL, NULL),
(4443, 12, 'Talod', 'Active', NULL, NULL),
(4444, 12, 'Modasa', 'Active', NULL, NULL),
(4445, 12, 'Dhansura', 'Active', NULL, NULL),
(4446, 12, 'Malpur', 'Active', NULL, NULL),
(4447, 12, 'Bayad', 'Active', NULL, NULL),
(4448, 12, 'Kalol', 'Active', NULL, NULL),
(4449, 12, 'Mansa', 'Active', NULL, NULL),
(4450, 12, 'Gandhinagar', 'Active', NULL, NULL),
(4451, 12, 'Dehgam', 'Active', NULL, NULL),
(4452, 12, 'Mandal', 'Active', NULL, NULL),
(4453, 12, 'Detroj-Rampura', 'Active', NULL, NULL),
(4454, 12, 'Viramgam', 'Active', NULL, NULL),
(4455, 12, 'Sanand', 'Active', NULL, NULL),
(4456, 12, 'Ahmadabad cities', 'Active', NULL, NULL),
(4457, 12, 'Daskroi', 'Active', NULL, NULL),
(4458, 12, 'Dholka', 'Active', NULL, NULL),
(4459, 12, 'Bavla', 'Active', NULL, NULL),
(4460, 12, 'Ranpur', 'Active', NULL, NULL),
(4461, 12, 'Barwala', 'Active', NULL, NULL),
(4462, 12, 'Dhandhuka', 'Active', NULL, NULL),
(4463, 12, 'Halvad', 'Active', NULL, NULL),
(4464, 12, 'Dhrangadhra', 'Active', NULL, NULL),
(4465, 12, 'Dasada', 'Active', NULL, NULL),
(4466, 12, 'Lakhtar', 'Active', NULL, NULL),
(4467, 12, 'Wadhwan', 'Active', NULL, NULL),
(4468, 12, 'Muli', 'Active', NULL, NULL),
(4469, 12, 'Chotila', 'Active', NULL, NULL),
(4470, 12, 'Sayla', 'Active', NULL, NULL),
(4471, 12, 'Chuda', 'Active', NULL, NULL),
(4472, 12, 'Limbdi', 'Active', NULL, NULL),
(4473, 12, 'Maliya', 'Active', NULL, NULL),
(4474, 12, 'Morvi', 'Active', NULL, NULL),
(4475, 12, 'Tankara', 'Active', NULL, NULL),
(4476, 12, 'Wankaner', 'Active', NULL, NULL),
(4477, 12, 'Paddhari', 'Active', NULL, NULL),
(4478, 12, 'Rajkot', 'Active', NULL, NULL),
(4479, 12, 'Lodhika', 'Active', NULL, NULL),
(4480, 12, 'Kotda Sangani', 'Active', NULL, NULL),
(4481, 12, 'Jasdan', 'Active', NULL, NULL),
(4482, 12, 'Gondal', 'Active', NULL, NULL),
(4483, 12, 'Jamkandorna', 'Active', NULL, NULL),
(4484, 12, 'Upleta', 'Active', NULL, NULL),
(4485, 12, 'Dhoraji', 'Active', NULL, NULL),
(4486, 12, 'Jetpur', 'Active', NULL, NULL),
(4487, 12, 'Okhamandal', 'Active', NULL, NULL),
(4488, 12, 'Khambhalia', 'Active', NULL, NULL),
(4489, 12, 'Jamnagar', 'Active', NULL, NULL),
(4490, 12, 'Jodiya', 'Active', NULL, NULL),
(4491, 12, 'Dhrol', 'Active', NULL, NULL),
(4492, 12, 'Kalavad', 'Active', NULL, NULL),
(4493, 12, 'Lalpur', 'Active', NULL, NULL),
(4494, 12, 'Kalyanpur', 'Active', NULL, NULL),
(4495, 12, 'Bhanvad', 'Active', NULL, NULL),
(4496, 12, 'Jamjodhpur', 'Active', NULL, NULL),
(4497, 12, 'Porbandar', 'Active', NULL, NULL),
(4498, 12, 'Ranavav', 'Active', NULL, NULL),
(4499, 12, 'Kutiyana', 'Active', NULL, NULL),
(4500, 12, 'Manavadar', 'Active', NULL, NULL),
(4501, 12, 'Vanthali', 'Active', NULL, NULL),
(4502, 12, 'Junagadh', 'Active', NULL, NULL),
(4503, 12, 'Bhesan', 'Active', NULL, NULL),
(4504, 12, 'Visavadar', 'Active', NULL, NULL),
(4505, 12, 'Mendarda', 'Active', NULL, NULL),
(4506, 12, 'Keshod', 'Active', NULL, NULL),
(4507, 12, 'Mangrol', 'Active', NULL, NULL),
(4508, 12, 'Malia', 'Active', NULL, NULL),
(4509, 12, 'Talala', 'Active', NULL, NULL),
(4510, 12, 'Patan-Veraval', 'Active', NULL, NULL),
(4511, 12, 'Sutrapada', 'Active', NULL, NULL),
(4512, 12, 'Kodinar', 'Active', NULL, NULL),
(4513, 12, 'Una', 'Active', NULL, NULL),
(4514, 12, 'Kunkavav Vadia', 'Active', NULL, NULL),
(4515, 12, 'Babra', 'Active', NULL, NULL),
(4516, 12, 'Lathi', 'Active', NULL, NULL),
(4517, 12, 'Lilia', 'Active', NULL, NULL),
(4518, 12, 'Amreli', 'Active', NULL, NULL),
(4519, 12, 'Bagasara', 'Active', NULL, NULL),
(4520, 12, 'Dhari', 'Active', NULL, NULL),
(4521, 12, 'Savar Kundla', 'Active', NULL, NULL),
(4522, 12, 'Khambha', 'Active', NULL, NULL),
(4523, 12, 'Jafrabad', 'Active', NULL, NULL),
(4524, 12, 'Rajula', 'Active', NULL, NULL),
(4525, 12, 'Botad', 'Active', NULL, NULL),
(4526, 12, 'Vallabhipur', 'Active', NULL, NULL),
(4527, 12, 'Gadhada', 'Active', NULL, NULL),
(4528, 12, 'Umrala', 'Active', NULL, NULL),
(4529, 12, 'Bhavnagar', 'Active', NULL, NULL),
(4530, 12, 'Ghogha', 'Active', NULL, NULL),
(4531, 12, 'Sihor', 'Active', NULL, NULL),
(4532, 12, 'Gariadhar', 'Active', NULL, NULL),
(4533, 12, 'Palitana', 'Active', NULL, NULL),
(4534, 12, 'Talaja', 'Active', NULL, NULL),
(4535, 12, 'Mahuva', 'Active', NULL, NULL),
(4536, 12, 'Tarapur', 'Active', NULL, NULL),
(4537, 12, 'Sojitra', 'Active', NULL, NULL),
(4538, 12, 'Umreth', 'Active', NULL, NULL),
(4539, 12, 'Anand', 'Active', NULL, NULL),
(4540, 12, 'Petlad', 'Active', NULL, NULL),
(4541, 12, 'Khambhat', 'Active', NULL, NULL),
(4542, 12, 'Borsad', 'Active', NULL, NULL),
(4543, 12, 'Anklav', 'Active', NULL, NULL),
(4544, 12, 'Kapadvanj', 'Active', NULL, NULL),
(4545, 12, 'Virpur', 'Active', NULL, NULL),
(4546, 12, 'Balasinor', 'Active', NULL, NULL),
(4547, 12, 'Kathlal', 'Active', NULL, NULL),
(4548, 12, 'Mehmedabad', 'Active', NULL, NULL),
(4549, 12, 'Kheda', 'Active', NULL, NULL),
(4550, 12, 'Matar', 'Active', NULL, NULL),
(4551, 12, 'Nadiad', 'Active', NULL, NULL),
(4552, 12, 'Mahudha', 'Active', NULL, NULL),
(4553, 12, 'Thasra', 'Active', NULL, NULL),
(4554, 12, 'Khanpur', 'Active', NULL, NULL),
(4555, 12, 'Kadana', 'Active', NULL, NULL),
(4556, 12, 'Santrampur', 'Active', NULL, NULL),
(4557, 12, 'Lunawada', 'Active', NULL, NULL),
(4558, 12, 'Shehera', 'Active', NULL, NULL),
(4559, 12, 'Morwa (Hadaf)', 'Active', NULL, NULL),
(4560, 12, 'Godhra', 'Active', NULL, NULL),
(4561, 12, 'Kalol', 'Active', NULL, NULL),
(4562, 12, 'Ghoghamba', 'Active', NULL, NULL),
(4563, 12, 'Halol', 'Active', NULL, NULL),
(4564, 12, 'Jambughoda', 'Active', NULL, NULL),
(4565, 12, 'Fatepura', 'Active', NULL, NULL),
(4566, 12, 'Jhalod', 'Active', NULL, NULL),
(4567, 12, 'Limkheda', 'Active', NULL, NULL),
(4568, 12, 'Dohad', 'Active', NULL, NULL),
(4569, 12, 'Garbada', 'Active', NULL, NULL),
(4570, 12, 'Devgadbaria', 'Active', NULL, NULL),
(4571, 12, 'Dhanpur', 'Active', NULL, NULL),
(4572, 12, 'Savli', 'Active', NULL, NULL),
(4573, 12, 'Vadodara', 'Active', NULL, NULL),
(4574, 12, 'Vaghodia', 'Active', NULL, NULL),
(4575, 12, 'Jetpur Pavi', 'Active', NULL, NULL),
(4576, 12, 'Chhota Udaipur', 'Active', NULL, NULL),
(4577, 12, 'Kavant', 'Active', NULL, NULL),
(4578, 12, 'Nasvadi', 'Active', NULL, NULL),
(4579, 12, 'Sankheda', 'Active', NULL, NULL),
(4580, 12, 'Dabhoi', 'Active', NULL, NULL),
(4581, 12, 'Padra', 'Active', NULL, NULL),
(4582, 12, 'Karjan', 'Active', NULL, NULL),
(4583, 12, 'Sinor', 'Active', NULL, NULL),
(4584, 12, 'Tilakwada', 'Active', NULL, NULL),
(4585, 12, 'Nandod', 'Active', NULL, NULL),
(4586, 12, 'Dediapada', 'Active', NULL, NULL),
(4587, 12, 'Sagbara', 'Active', NULL, NULL),
(4588, 12, 'Jambusar', 'Active', NULL, NULL),
(4589, 12, 'Amod', 'Active', NULL, NULL),
(4590, 12, 'Vagra', 'Active', NULL, NULL),
(4591, 12, 'Bharuch', 'Active', NULL, NULL),
(4592, 12, 'Jhagadia', 'Active', NULL, NULL),
(4593, 12, 'Anklesvar', 'Active', NULL, NULL),
(4594, 12, 'Hansot', 'Active', NULL, NULL),
(4595, 12, 'Valia', 'Active', NULL, NULL),
(4596, 12, 'The Dangs', 'Active', NULL, NULL),
(4597, 12, 'Navsari', 'Active', NULL, NULL),
(4598, 12, 'Jalalpore', 'Active', NULL, NULL),
(4599, 12, 'Gandevi', 'Active', NULL, NULL),
(4600, 12, 'Chikhli', 'Active', NULL, NULL),
(4601, 12, 'Bansda', 'Active', NULL, NULL),
(4602, 12, 'Valsad', 'Active', NULL, NULL),
(4603, 12, 'Dharampur', 'Active', NULL, NULL),
(4604, 12, 'Pardi', 'Active', NULL, NULL),
(4605, 12, 'Kaprada', 'Active', NULL, NULL),
(4606, 12, 'Umbergaon', 'Active', NULL, NULL),
(4607, 12, 'Olpad', 'Active', NULL, NULL),
(4608, 12, 'Mangrol', 'Active', NULL, NULL),
(4609, 12, 'Umarpada', 'Active', NULL, NULL),
(4610, 12, 'Mandvi', 'Active', NULL, NULL),
(4611, 12, 'Kamrej', 'Active', NULL, NULL),
(4612, 12, 'Surat cities', 'Active', NULL, NULL),
(4613, 12, 'Chorasi', 'Active', NULL, NULL),
(4614, 12, 'Palsana', 'Active', NULL, NULL),
(4615, 12, 'Bardoli', 'Active', NULL, NULL),
(4616, 12, 'Mahuva', 'Active', NULL, NULL),
(4617, 12, 'Nizar', 'Active', NULL, NULL),
(4618, 12, 'Uchchhal', 'Active', NULL, NULL),
(4619, 12, 'Songadh', 'Active', NULL, NULL),
(4620, 12, 'Vyara', 'Active', NULL, NULL),
(4621, 12, 'Valod', 'Active', NULL, NULL),
(6284, 11, 'Pernem', 'Active', NULL, NULL),
(6285, 11, 'Bardez', 'Active', NULL, NULL),
(6286, 11, 'Tiswadi', 'Active', NULL, NULL),
(6287, 11, 'Bicholim', 'Active', NULL, NULL),
(6288, 11, 'Satari', 'Active', NULL, NULL),
(6289, 11, 'Ponda', 'Active', NULL, NULL),
(6290, 11, 'Mormugao', 'Active', NULL, NULL),
(6291, 11, 'Salcete', 'Active', NULL, NULL),
(6292, 11, 'Quepem', 'Active', NULL, NULL),
(6293, 11, 'Sanguem', 'Active', NULL, NULL),
(6294, 11, 'Canacona', 'Active', NULL, NULL),
(6295, 19, 'Amini', 'Active', NULL, NULL),
(6296, 19, 'Bitra', 'Active', NULL, NULL),
(6297, 19, 'Chetlat', 'Active', NULL, NULL),
(6298, 19, 'Kiltan', 'Active', NULL, NULL),
(6299, 19, 'Kadmat', 'Active', NULL, NULL),
(6300, 19, 'Kavaratti', 'Active', NULL, NULL),
(6301, 19, 'Agatti', 'Active', NULL, NULL),
(6302, 19, 'Andrott', 'Active', NULL, NULL),
(6303, 19, 'Kalpeni', 'Active', NULL, NULL),
(6304, 19, 'Minicoy', 'Active', NULL, NULL),
(6305, 18, 'Kasaragod', 'Active', NULL, NULL),
(6306, 18, 'Hosdurg', 'Active', NULL, NULL),
(6307, 18, 'Taliparamba', 'Active', NULL, NULL),
(6308, 18, 'Kannur', 'Active', NULL, NULL),
(6309, 18, 'Thalassery', 'Active', NULL, NULL),
(6310, 18, 'Mananthavady', 'Active', NULL, NULL),
(6311, 18, 'Sulthanbathery', 'Active', NULL, NULL),
(6312, 18, 'Vythiri', 'Active', NULL, NULL),
(6313, 18, 'Vadakara', 'Active', NULL, NULL),
(6314, 18, 'Quilandy', 'Active', NULL, NULL),
(6315, 18, 'Kozhikode', 'Active', NULL, NULL),
(6316, 18, 'Ernad', 'Active', NULL, NULL),
(6317, 18, 'Nilambur', 'Active', NULL, NULL),
(6318, 18, 'Perinthalmanna', 'Active', NULL, NULL),
(6319, 18, 'Tirur', 'Active', NULL, NULL),
(6320, 18, 'Tirurangadi', 'Active', NULL, NULL),
(6321, 18, 'Ponnani', 'Active', NULL, NULL),
(6322, 18, 'Ottappalam', 'Active', NULL, NULL),
(6323, 18, 'Mannarkad', 'Active', NULL, NULL),
(6324, 18, 'Palakkad', 'Active', NULL, NULL),
(6325, 18, 'Chittur', 'Active', NULL, NULL),
(6326, 18, 'Alathur', 'Active', NULL, NULL),
(6327, 18, 'Talappilly', 'Active', NULL, NULL),
(6328, 18, 'Chavakkad', 'Active', NULL, NULL),
(6329, 18, 'Thrissur', 'Active', NULL, NULL),
(6330, 18, 'Kodungallur', 'Active', NULL, NULL),
(6331, 18, 'Mukundapuram', 'Active', NULL, NULL),
(6332, 18, 'Kunnathunad', 'Active', NULL, NULL),
(6333, 18, 'Aluva', 'Active', NULL, NULL),
(6334, 18, 'Paravur', 'Active', NULL, NULL),
(6335, 18, 'Kochi', 'Active', NULL, NULL),
(6336, 18, 'Kanayannur', 'Active', NULL, NULL),
(6337, 18, 'Muvattupuzha', 'Active', NULL, NULL),
(6338, 18, 'Kothamangalam', 'Active', NULL, NULL),
(6339, 18, 'Devikulam', 'Active', NULL, NULL),
(6340, 18, 'Udumbanchola', 'Active', NULL, NULL),
(6341, 18, 'Thodupuzha', 'Active', NULL, NULL),
(6342, 18, 'Peerumade', 'Active', NULL, NULL),
(6343, 18, 'Meenachil', 'Active', NULL, NULL),
(6344, 18, 'Vaikom', 'Active', NULL, NULL),
(6345, 18, 'Kottayam', 'Active', NULL, NULL),
(6346, 18, 'Changanassery', 'Active', NULL, NULL),
(6347, 18, 'Kanjirappally', 'Active', NULL, NULL),
(6348, 18, 'Cherthala', 'Active', NULL, NULL),
(6349, 18, 'Ambalappuzha', 'Active', NULL, NULL),
(6350, 18, 'Kuttanad', 'Active', NULL, NULL),
(6351, 18, 'Karthikappally', 'Active', NULL, NULL),
(6352, 18, 'Chengannur', 'Active', NULL, NULL),
(6353, 18, 'Mavelikkara', 'Active', NULL, NULL),
(6354, 18, 'Thiruvalla', 'Active', NULL, NULL),
(6355, 18, 'Mallappally', 'Active', NULL, NULL),
(6356, 18, 'Ranni', 'Active', NULL, NULL),
(6357, 18, 'Kozhenchery', 'Active', NULL, NULL),
(6358, 18, 'Adoor', 'Active', NULL, NULL),
(6359, 18, 'Karunagappally', 'Active', NULL, NULL),
(6360, 18, 'Kunnathur', 'Active', NULL, NULL),
(6361, 18, 'Pathanapuram', 'Active', NULL, NULL),
(6362, 18, 'Kottarakkara', 'Active', NULL, NULL),
(6363, 18, 'Kollam', 'Active', NULL, NULL),
(6364, 18, 'Chirayinkeezhu', 'Active', NULL, NULL),
(6365, 18, 'Nedumangad', 'Active', NULL, NULL),
(6366, 18, 'Thiruvananthapuram', 'Active', NULL, NULL),
(6367, 18, 'Neyyattinkara', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_title`, `status`, `created_at`, `updated_at`) VALUES
(0, 'Rajkot', 'Active', NULL, NULL),
(11, 'Bhavnagar', 'Active', NULL, NULL),
(12, 'Surat', 'Active', NULL, NULL),
(18, 'Vadodara', 'Active', NULL, NULL),
(19, 'Bhavnagar', 'Active', NULL, NULL),
(20, 'Gandhinagar', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 5689784589, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-01-30 11:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `ID` int(10) NOT NULL,
  `BookingID` int(10) DEFAULT NULL,
  `ServiceID` int(10) DEFAULT NULL,
  `UserID` int(5) DEFAULT NULL,
  `BookingFrom` date DEFAULT NULL,
  `BookingTo` date DEFAULT NULL,
  `EventType` varchar(200) DEFAULT NULL,
  `Numberofguest` int(10) DEFAULT NULL,
  `stateId` int(11) DEFAULT NULL,
  `cityName` varchar(255) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`ID`, `BookingID`, `ServiceID`, `UserID`, `BookingFrom`, `BookingTo`, `EventType`, `Numberofguest`, `stateId`, `cityName`, `Message`, `BookingDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 422701608, 1, 3, '2024-02-17', '2024-02-19', 'Wedding', 200, 28, 'Raikot', 'rytriyu\r\nuytuyi\r\n\r\njoyuutuyfh', '2024-02-16 06:58:08', 'Approved', 'Approved', '2024-03-02 05:06:50'),
(2, 697339619, 2, 4, '2024-02-20', '2024-02-22', 'Anniversary', 200, 13, 'Rohtak', 'NA', '2024-02-19 15:24:38', 'Your booking is cancelled', 'Cancelled', '2024-03-02 05:06:57'),
(3, 347642822, 4, 5, '2024-02-27', '2024-02-28', 'Pre Engagement', 25, 31, 'Coimbatore North', 'NA', '2024-02-19 17:51:30', 'Approved', 'Approved', '2024-03-02 05:07:07'),
(4, 144316724, 1, 5, '2024-03-14', '2024-03-16', 'Pre Engagement', 20, 10, 'Karol Bagh', 'NA', '2024-03-02 04:42:09', 'xdfcghjkljnbhv', 'Cancelled', '2025-03-03 07:06:04'),
(5, 855622493, 1, 6, '2025-02-27', '2025-03-06', 'Birthday Party', 90, 18, 'Kannur', 'dfghjkljhgvcxv', '2025-03-03 06:47:38', 'swdf', 'Approved', '2025-03-03 14:09:32'),
(6, 253180993, 1, 6, '2025-03-12', '2025-03-27', 'Birthday Party', 34, 11, NULL, 'qwsdefrg', '2025-03-03 14:07:42', 'zsdfgbn', 'Approved', '2025-03-05 05:56:30'),
(7, 983327538, 13, 6, '2025-03-20', '2025-03-20', 'dj', 90, 19, NULL, 'sdfg', '2025-03-03 16:30:48', 'dfghjk', 'Approved', '2025-03-05 05:57:12'),
(8, 709839303, 1, 6, '2025-03-05', '2025-03-20', 'wedding', 90, 0, NULL, 'FGHJ', '2025-03-04 11:22:16', 'vbnm,', 'Cancelled', '2025-03-05 05:58:17'),
(9, 230934653, 15, 9, '2025-02-24', '2025-03-21', 'wedding', 90, 18, NULL, 'cvbnmjhgfdsdfgh', '2025-03-05 06:07:08', 'ghjk', 'Approved', '2025-03-06 05:45:04'),
(10, 588225594, NULL, 6, '2025-02-28', '2025-03-14', 'Wedding', 80, 12, NULL, 'rfghnjm,.', '2025-03-05 07:45:32', NULL, NULL, NULL),
(11, 464699088, 13, 6, '2025-03-06', '2025-03-12', 'Wedding', 34, 18, NULL, 'nbvcxz', '2025-03-05 07:47:12', NULL, NULL, NULL),
(12, 615182580, NULL, 6, '2025-03-17', '2025-03-27', 'seminar', 80, 20, NULL, 'ghjklkjhgf', '2025-03-06 05:41:52', 'dfghjk', 'Approved', '2025-03-08 08:07:28'),
(13, 643960055, 18, 6, '2025-03-17', '2025-03-27', 'seminar', 80, 20, NULL, 'dfghnjmk', '2025-03-06 05:42:50', NULL, NULL, NULL),
(14, 834986727, 18, 6, '2025-03-03', '2025-03-26', 'art & cul', 70, 12, NULL, 'lkjhgfvc', '2025-03-06 10:45:07', NULL, NULL, NULL),
(15, 199987925, 18, 12, '2025-03-12', '2025-03-20', 'seminar', 100, 20, NULL, 'cvbnm', '2025-03-08 03:09:10', 'dfghj', 'Approved', '2025-03-08 08:05:57'),
(16, 381291192, 18, 13, '2025-03-12', '2025-03-21', 'music', 90, 12, NULL, 'dfghj', '2025-03-08 07:57:22', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `Name`, `Email`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(1, 'Kiran', 'kran@gmail.com', 'cost of volvo place pritampura to dwarka', '2024-02-01 07:26:24', 1),
(2, 'Sarita Pandey', 'sar@gmail.com', 'huiyuihhjjkhkjvhknv iyi tuyvuoiup', '2024-02-01 07:26:24', 1),
(3, 'Test', 'test@gmail.com', 'Want to know price of forest cake', '2024-02-01 07:26:24', 1),
(4, 'Anuj', 'ak330@gmail.com', 'This is for testing.', '2024-02-01 07:26:24', 1),
(5, 'Meenu Kumari', 'meenu@gmail.com', 'gugjhjhgjhgjwerte', '2024-02-01 07:26:24', 1),
(6, 'Anuj', 'ak@gmail.com', 'Testing', '2024-02-01 07:26:24', 1),
(7, 'Anuj', 'akj@gmail.com', 'This is for testing.', '2024-02-01 07:26:24', 1),
(8, 'vishruti', 'vishruti80@gmail.com', 'gfhjkljhgv', '2025-03-03 06:47:56', 1),
(9, 'vishruti', 'abc@gmail.com', 'mnbvcxcvbnm,', '2025-03-03 11:11:31', 1),
(10, 'vishruti', 'abc@gmail.com', 'xcfvbnm,.', '2025-03-05 06:02:37', NULL),
(11, 'fagun', 'vaghanifagun@gmail.com', 'dfghjkl', '2025-03-06 10:47:05', NULL),
(12, 'krupa', 'krupa12@gmail.com', 'fghjk,l.', '2025-03-08 03:11:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbleventtype`
--

CREATE TABLE `tbleventtype` (
  `ID` int(10) NOT NULL,
  `EventType` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbleventtype`
--

INSERT INTO `tbleventtype` (`ID`, `EventType`, `CreationDate`) VALUES
(18, 'Wedding', '2024-01-30 07:01:39'),
(25, 'music', '2025-03-03 06:56:41'),
(31, 'birthday party', '2025-03-05 12:21:43'),
(32, 'seminar', '2025-03-05 12:21:58'),
(33, 'art & cul', '2025-03-05 12:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(100) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', '.', '<br>', NULL, NULL, '2025-03-03 11:58:18'),
(2, 'contactus', 'Contact Us', 'G-30,sumeru park ,Mota Vrachha', 'EventMangement@gmail.com', 1234567899, '2025-03-03 14:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblservice`
--

CREATE TABLE `tblservice` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `SerDes` varchar(250) NOT NULL,
  `ServicePrice` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblservice`
--

INSERT INTO `tblservice` (`ID`, `ServiceName`, `SerDes`, `ServicePrice`, `CreationDate`) VALUES
(1, 'Wedding DJ', '(we install the DJ equipment before your ceremony or after your wedding breakfast)', '800', '2024-02-10 07:17:43'),
(2, 'Party DJ', '(we install the DJ equipment 1 hour before your selected event start time)', '700', '2024-02-10 07:17:43'),
(4, 'Photo Booth Hire', '(early equipment setup included)', '500', '2024-02-10 07:17:43'),
(9, 'music', 'dfghjkl', '900', '2025-03-03 06:52:21'),
(13, 'wedding', 'xcvb ', '1234r', '2025-03-03 16:29:28'),
(15, 'music', 'asdfg', '12', '2025-03-03 16:57:15'),
(18, 'birthday party', 'dfghjkl', '1200', '2025-03-05 12:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(1, 'Anvi', 9879878979, 'anvi@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-02-15 09:15:51'),
(2, 'hkjhkj', 4579878687, 'rewrewre@yutuy', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-15 09:16:44'),
(3, 'Reetu Singh', 5465465464, 'reetu@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-02-15 12:07:55'),
(4, 'John Doe', 1234569879, 'John@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-02-19 15:17:04'),
(5, 'Anuj Singh', 1236985211, 'akj@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-02-19 17:50:28'),
(6, 'vaghani vishruti', 5630929812, 'vishruti80@gmail.com', '38f629170ac3ab74b9d6d2cc411c2f3c', '2025-03-03 06:45:42'),
(8, 'vaghani vishruti', 7698074015, 'vaghanifagun@gmail.com', '202cb962ac59075b964b07152d234b70', '2025-03-04 12:29:49'),
(9, 'sonali', 987654321, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2025-03-05 06:04:42'),
(10, 'sonali', 7860980453, 'abc@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2025-03-05 06:31:31'),
(11, 'krupa dhameliya', 1234556777, 'krupa@gmail.com', 'b216c0e0692e43aae256132cbad85a00', '2025-03-05 06:39:27'),
(12, 'krupa', 3456789876, 'krupa12@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '2025-03-08 03:07:52'),
(13, 'vishruti', 2345678765, 'vishruti12@gmail.com', '7ac52e3f2729d1b3f6d2b7e8f6467226', '2025-03-08 07:56:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ServiceID` (`ServiceID`),
  ADD KEY `EventType` (`EventType`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbleventtype`
--
ALTER TABLE `tbleventtype`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EventType` (`EventType`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservice`
--
ALTER TABLE `tblservice`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6600;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbleventtype`
--
ALTER TABLE `tbleventtype`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservice`
--
ALTER TABLE `tblservice`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD CONSTRAINT `serivdi` FOREIGN KEY (`ServiceID`) REFERENCES `tblservice` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
