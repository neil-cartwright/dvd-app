-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 04:54 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvd-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leading_actor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supporting_actor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `title`, `year`, `director`, `leading_actor`, `supporting_actor`, `genres`, `created_at`, `updated_at`) VALUES
(111, 'Star Wars Episode IV', '1979', 'George Lucas', 'Harrison Ford', 'Carrie Fisher', 'American-TV-series Fantasy Science-fiction', '2019-03-08 16:40:46', '2019-03-08 16:40:46'),
(77, 'The Empire Strikes Back', '1981', 'George Lucas', 'Harrison Ford', 'Carrie Fisher', 'Adventure Fantasy Science-fiction', '2019-03-08 14:53:21', '2019-03-08 14:53:21'),
(7, 'Colombo: the complete series', '1970', 'Unknown', 'Peter Falk', 'William Shatner', 'American-TV-series Crime', '2019-03-05 21:28:30', '2019-03-05 21:28:30'),
(4, 'Return of the jedi', '1983', 'Richard Marquand', 'Harrison Ford', 'Carrie Fisher', 'Action Adventure Science-fiction', '2019-03-05 16:11:36', '2019-03-05 16:11:36'),
(6, 'Leon', '1994', 'Luc Besson', 'Jean Reno', 'Gary Oldman', 'Action Thriller', '2019-03-05 16:14:54', '2019-03-05 16:14:54'),
(8, 'The adventures of Tintin - the secret of the unicorn', '2012', 'Steven Spielberg', 'Jamie Bell', 'Daniel Craig', 'Adventure Childrens Family Superhero', '2019-03-06 07:59:09', '2019-03-06 07:59:09'),
(9, 'Indiana Jones and the temple of doom', '1984', 'Steven Spielberg', 'Harrison Ford', 'Kate Capshaw', 'Action Adventure Family', '2019-03-06 08:01:37', '2019-03-06 08:01:37'),
(10, 'Dunkirk', '2017', 'Christopher Nolan', 'Tom Hardy', 'Mark Rylance', 'Action Adventure War', '2019-03-06 08:03:06', '2019-03-06 08:03:06'),
(11, 'Jumanji - welcome to the jungle', '2017', 'Jake Kasdan', 'Dwayne Johnson', 'Karen Gillen', 'Action Adventure Comedy', '2019-03-06 08:04:35', '2019-03-06 08:04:35'),
(12, 'Mean Streets', '1973', 'Martin Scorcese', 'Robert DeNiro', 'Harvey Keitel', 'Gangster Thriller', '2019-03-06 09:06:29', '2019-03-06 09:06:29'),
(13, 'The dark night rises', '2012', 'Christopher Nolan', 'Christian Bale', 'Tom Hardy', 'Action Gangster Science-fiction', '2019-03-06 11:54:30', '2019-03-06 11:54:30'),
(14, 'Red dragon', '2002', 'Brett Ratner', 'Anthony Hopkins', 'Edward Norton', 'Horror Thriller', '2019-03-06 11:56:31', '2019-03-06 11:56:31'),
(15, 'All the presidents men', '1976', 'Alan J Pakula', 'Robert Redford', 'Dustin Hoffman', 'Drama Political Thriller Thriller', '2019-03-06 11:58:15', '2019-03-06 11:58:15'),
(16, 'State of Play (film)', '2009', 'Kevin McDonald', 'Russell Crowe', 'Rachel McAdams', 'Political Thriller Thriller', '2019-03-06 11:59:19', '2019-03-06 11:59:19'),
(17, 'The spy who loved me', '1977', 'Lewis Gilbert', 'Roger Moore', 'Barbara Bach', 'Action British Political Thriller Thriller', '2019-03-06 12:00:23', '2019-03-06 12:00:23'),
(18, 'Casino Royale', '2006', 'Chris Cornell', 'Daniel Craig', 'Eva Green', 'Action British James Bond Political-thriller', '2019-03-06 12:01:44', '2019-03-06 12:01:44'),
(19, 'Moonraker', '1979', 'Lewis Gilbert', 'Roger Moore', 'Richard Kiel', 'Action British James Bond', '2019-03-06 12:03:39', '2019-03-06 12:03:39'),
(20, 'Live and let die', '1973', 'George Martin', 'Roger Moore', 'Jane Seymour', 'Action British James Bond', '2019-03-06 12:04:39', '2019-03-06 12:04:39'),
(21, 'The green mile', '2000', 'Frank Darabont', 'Tom Hanks', 'David Morse', 'Drama Prison Supernatural', '2019-03-06 12:11:01', '2019-03-06 12:11:01'),
(22, 'Insomnia', '2002', 'Christopher Nolan', 'Al Pacino', 'Robin Williams', 'Crime Drama Suspense Thriller', '2019-03-06 12:11:57', '2019-03-06 12:11:57'),
(23, 'No country for old men', '2007', 'Joel Ethan Coen', 'Javier Bardem', 'Josh Brolin', 'Crime Horror Thriller', '2019-03-06 12:13:44', '2019-03-06 12:13:44'),
(24, '36', '2004', 'Olivier Marchal', 'Daniel Auteuil', 'Gerard Depardieu', 'Crime Foreign-language Thriller', '2019-03-06 12:23:34', '2019-03-06 12:23:34'),
(25, 'Hidden', '2006', 'Michael Haneke', 'Juliette Binoche', 'Daniel Auteuil', 'Crime Foreign-language Suspense Thriller', '2019-03-06 12:24:49', '2019-03-06 12:24:49'),
(26, 'The seventh seal', '1957', 'Ingmar Bergman', 'Max von Sydow', 'Gunar Bjornstand', 'Black and white Classic Drama Foreign-language', '2019-03-06 12:25:51', '2019-03-06 12:25:51'),
(27, 'The house of flying daggers', '2004', 'Zhang Yimou', 'Ziyi Zhang', 'Takeshi Kaneshiro', 'Drama Epic Fantasy Superhero', '2019-03-06 12:28:09', '2019-03-06 12:28:09'),
(28, 'Farewell my concubine', '1993', 'Chen Kaige', 'Leslie Cheung', 'Zhang Fengyi', 'Drama', '2019-03-06 12:29:26', '2019-03-06 12:29:26'),
(29, 'Fail safe', '2000', 'Stephen Frears', 'George Clooney', 'Richard Dreyfuss', 'Political-thriller Thriller War', '2019-03-06 12:30:22', '2019-03-06 12:30:22'),
(30, 'Crimson peak', '2015', 'Guillermo del toro', 'Mia Wasikowska', 'Tom Hiddleston', 'Fantasy Supernatural', '2019-03-06 12:31:18', '2019-03-06 12:31:18'),
(31, 'A quiet place', '2018', 'John Krasinski', 'Emily Blunt', 'John Krasinski', 'Horror Supernatural Thriller', '2019-03-06 12:32:06', '2019-03-06 12:32:06'),
(32, 'Mission impossible trilogy', '1996', 'JJ Abrams', 'Tom Cruise', 'Jon Voight', 'Action Political-thriller Thriller', '2019-03-06 12:55:58', '2019-03-06 12:55:58'),
(33, 'Maze runner - the scorch earth trials', '2015', 'Wes Ball', 'Dylan O\'brien', 'Kaya Scodelario', 'Action Science-fiction', '2019-03-06 12:57:13', '2019-03-06 12:57:13'),
(34, 'Changing lanes', '2002', 'Roger Michell', 'Samuel L Jackson', 'Ben Affleck', 'Action Thriller', '2019-03-06 12:58:24', '2019-03-06 12:58:24'),
(35, 'Conspiracy theory', '1998', 'Richard Donner', 'Mel Gibson', 'Julia Roberts', 'Action Political-thriller Thriller', '2019-03-06 12:59:34', '2019-03-06 12:59:34'),
(36, 'The revenant', '2018', 'Alejandro Inarritu', 'Leonardo DiCaprio', 'Tom Hardy', 'Action Drama Epic Historical-drama War', '2019-03-06 13:00:30', '2019-03-06 13:00:30'),
(37, 'Quantum of solace', '2008', 'Marc Forster', 'Daniel Craig', 'Olga Kurylenko', 'Action James Bond Political-thriller', '2019-03-06 13:02:03', '2019-03-06 13:02:03'),
(38, 'Witness', '1985', 'Peter Weir', 'Harrison Ford', 'Kelly McGillis', 'Crime Drama Thriller', '2019-03-06 13:03:13', '2019-03-06 13:03:13'),
(39, 'Constantine', '2005', 'Francis Lawrence', 'Keanu Reeves', 'Rachel Weisz', 'Fantasy Horror Supernatural', '2019-03-06 13:04:17', '2019-03-06 13:04:17'),
(40, 'Alien versus predator requiem', '2005', 'The brothers Strauss', 'Steven Pasquale', 'An alien', 'Action Horror Science-fiction', '2019-03-06 13:05:27', '2019-03-06 13:05:27'),
(41, 'Taxi Driver', '1976', 'Martin Scorcese', 'Robert DeNiro', 'Harvey Keitel', 'Drama Gangster', '2019-03-06 13:06:27', '2019-03-06 13:06:27'),
(42, 'Casino', '1995', 'Martin Scorcese', 'Robert DeNiro', 'Joe Pesci', 'Drama Gangster', '2019-03-06 13:07:14', '2019-03-06 13:07:14'),
(43, 'Cape Fear', '1991', 'Martin Scorcese', 'Robert DeNiro', 'Harvey Keitel', 'Horror Suspense Thriller', '2019-03-06 13:07:54', '2019-03-06 13:07:54'),
(44, 'Sleepers', '1996', 'Barry Levinson', 'Robert DeNiro', 'Kevin Bacon', 'Drama Thriller', '2019-03-06 13:08:40', '2019-03-06 13:08:40'),
(79, 'Silver Streak', '1976', 'Arthur Hiller', 'Gene Wilder', 'Richard Pryor', 'Adventure Comedy Romantic comedy', '2019-03-08 15:59:52', '2019-03-08 15:59:52'),
(47, 'Drive', '2011', 'Nicolas Winding Refn', 'Ryan Gosling', 'Carey Mulligan', 'Crime Drama', '2019-03-07 10:52:20', '2019-03-07 10:52:20'),
(48, 'Bullitt', '1968', 'Peter Yates', 'Steve McQueen', 'Jacqueline Blissett', 'Action Classic Crime Political-thriller Thriller', '2019-03-07 11:38:28', '2019-03-07 11:38:28'),
(49, 'Spotlight', '2015', 'Tom McCarthy', 'Rachel McAdams', 'Mark Ruffalo', 'Drama Political-thriller Thriller', '2019-03-07 11:39:38', '2019-03-07 11:39:38'),
(50, 'The parallax view', '1974', 'Alan J Pakula', 'Warren Beatty', 'Hume Cronyn', 'Political-thriller Suspense Thriller', '2019-03-07 11:40:41', '2019-03-07 11:40:41'),
(51, 'The American', '2010', 'Anton Corbijn', 'George Clooney', 'Violante Placido', 'Political-thriller Thriller', '2019-03-07 11:41:43', '2019-03-07 11:41:43'),
(52, 'Hannibal', '2001', 'Ridley Scott', 'Anthony Hopkins', 'Julianne Moore', 'Crime Horror Suspense Thriller', '2019-03-07 11:42:57', '2019-03-07 11:42:57'),
(53, 'Robin Hood', '2010', 'Ridley Scott', 'Russell Crowe', 'Cate Blanchett', 'Action Adventure Superhero', '2019-03-07 11:43:47', '2019-03-07 11:43:47'),
(54, 'The usual suspects', '1995', 'Bryan Singer', 'Kevin Spacey', 'Gabriel Byrne', 'Crime Gangster Suspense Thriller', '2019-03-07 11:44:48', '2019-03-07 11:44:48'),
(55, '21 Grams', '2003', 'Alejandro Inarritu', 'Sean Penn', 'Benicio Del Toro', 'Crime Thriller', '2019-03-07 11:46:08', '2019-03-07 11:46:08'),
(56, 'Ronin', '1998', 'John Frankenheimer', 'Robert DeNiro', 'Jean Reno', 'Crime Gangster Thriller', '2019-03-07 11:46:56', '2019-03-07 11:46:56'),
(57, 'Finding Nemo', '2003', 'Andrew Stanton', 'Albert Brooks', 'Ellen DeGeneres', 'Childrens Comedy Family Pixar', '2019-03-08 07:45:49', '2019-03-08 07:45:49'),
(58, 'Finding Dory', '2016', 'Andrew Stanton', 'Ellen DeGeneres', 'Albert Brooks', 'Childrens Comedy Disney Family Pixar', '2019-03-08 07:46:50', '2019-03-08 07:46:50'),
(59, 'The Greatest Showman', '2017', 'Michael Gracey', 'Hugh Jackman', 'Michelle Williams', 'Childrens Family Musical', '2019-03-08 07:48:42', '2019-03-08 07:48:42'),
(60, 'Jumanji (original)', '1995', 'Joe Johnston', 'Robin Williams', 'Kirsten Dunst', 'Adventure Childrens Family Fantasy Science-fiction', '2019-03-08 07:50:08', '2019-03-08 07:50:08'),
(61, 'Monsters Inc.', '2001', 'Pete Docter', 'Billy Crystal', 'John Goodman', 'Animation Disney Family Pixar', '2019-03-08 07:51:06', '2019-03-08 07:51:06'),
(62, 'Ice age trilogy', '2002', 'Chris Wedge', 'Denis Leary', 'John Leguizamo', 'Animation Childrens Family', '2019-03-08 07:52:12', '2019-03-08 07:52:12'),
(63, 'Megamind', '2010', 'Tom McGrath', 'Will Ferrell', 'Brad Pitt', 'Animation Comedy Crime Family', '2019-03-08 07:53:06', '2019-03-08 07:53:06'),
(64, 'The Lion, the Witch and the Wardrobe', '2005', 'Andrew Adamson', 'Tilda Swinton', 'Georgie Henley', 'Childrens Epic Family Fantasy', '2019-03-08 07:54:25', '2019-03-08 07:54:25'),
(65, 'Frozen', '2013', 'Chris  Buck', 'Kristen Bell', 'Idina Menzel', 'Animation Childrens Disney Family Fantasy', '2019-03-08 07:55:27', '2019-03-08 07:55:27'),
(66, 'Moana', '2016', 'Ron Clements', 'Auli\'i Cravaljo', 'Dwayne Johnson', 'Childrens Disney Family', '2019-03-08 07:56:16', '2019-03-08 07:56:16'),
(67, 'All the presidents men', '1976', 'Alan J Pakula', 'Robert Redford', 'Dustin Hoffman', 'Classic Drama Political-thriller Thriller', '2019-03-08 11:33:10', '2019-03-08 11:33:10'),
(68, 'The bridge on the river kwai', '1957', 'David Lean', 'Alec Guinness', 'William Holden', 'Classic Prison War', '2019-03-08 12:11:34', '2019-03-08 12:11:34'),
(69, 'Into the wild', '2007', 'Sean Penn', 'Emile Hirsch', 'Marcia Gay Harden', 'Adventure Drama', '2019-03-08 12:12:34', '2019-03-08 12:12:34'),
(70, 'Millers Crossing', '1990', 'Joel Coen', 'Gabriel Byrne', 'Marcia Gay Harden', 'Drama Gangster Thriller', '2019-03-08 12:13:45', '2019-03-08 12:13:45'),
(71, 'Europa', '1991', 'Lars von Trier', 'Jean Marc Barr', 'Barbara Sukowa', 'Foreign-language Political-thriller', '2019-03-08 12:15:14', '2019-03-08 12:15:14'),
(72, 'Enemy of the state', '1998', 'Tony Scott', 'Will Smith', 'Gene Hackman', 'Political-thriller Thriller', '2019-03-08 12:16:05', '2019-03-08 12:16:05'),
(73, 'Taken', '2008', 'Pierre Morell', 'Liam Neeson', 'Maggie Grace', 'Action', '2019-03-08 12:17:18', '2019-03-08 12:17:18'),
(74, 'The Thomas Crown Affair', '1999', 'John McTiernan', 'Pierce Brosnan', 'Rene Russo', 'Crime Drama Thriller', '2019-03-08 12:18:20', '2019-03-08 12:18:20'),
(75, 'The Terminator', '1984', 'James Cameron', 'Arnold Schwarzennegger', 'Linda Hamilton', 'Action Science-fiction', '2019-03-08 12:19:24', '2019-03-08 12:19:24'),
(76, 'Inception', '2010', 'Christopher Nolan', 'Leonardo DiCaprio', 'Tom Hardy', 'Science-fiction Thriller', '2019-03-08 12:20:14', '2019-03-08 12:20:14'),
(80, 'Interstellar', '2014', 'Christopher Nolan', 'Matthew McConaughey', 'Anne Hathaway', 'Adventure Epic Science-fiction', '2019-03-08 16:00:49', '2019-03-08 16:00:49'),
(81, 'The state within', '2006', 'Michael Offer', 'Jason Isaacs', 'Sharon Gless', 'British-TV-series Political-thriller Thriller', '2019-03-08 16:01:47', '2019-03-08 16:01:47'),
(82, 'Wolf', '1994', 'Mike Nichols', 'Jack Nicholson', 'Michelle Pfeiffer', 'Drama Horror Science-fiction Supernatural Thriller', '2019-03-08 16:02:46', '2019-03-08 16:02:46'),
(83, 'The Constant Gardener', '2005', 'Fernando Meirelles', 'Ralph Feinnes', 'Rachel Weisz', 'Historical-drama Political-thriller Thriller War', '2019-03-08 16:04:38', '2019-03-08 16:04:38'),
(84, 'The Shape of Water', '2017', 'Guillermo del toro', 'Sally Hawkins', 'Michael Shannon', 'Drama Fantasy', '2019-03-08 16:06:05', '2019-03-08 16:06:05'),
(85, 'The Baader Meinhof Complex', '2008', 'Uli Edel', 'Martina Gedeck', NULL, 'Drama Foreign-language Political-thriller', '2019-03-08 16:07:12', '2019-03-08 16:07:12'),
(86, 'The departed', '2006', 'Martin Scorcese', 'Leonardo DiCaprio', 'Matt Damon', 'Crime Drama Gangster', '2019-03-08 16:08:05', '2019-03-08 16:08:05'),
(87, 'Prometheus', '2012', 'Ridley Scott', 'Noomi Rapace', 'Michael Fassbender', 'Science-fiction', '2019-03-08 16:08:53', '2019-03-08 16:08:53'),
(88, 'Alien Quadrilogy', '1979', 'James Cameron', 'Sigourney Weaver', 'Michael Fassbender', 'Action Chiller Science-fiction Suspense', '2019-03-08 16:09:57', '2019-03-08 16:09:57'),
(89, 'The Mission', '1986', 'Roland Joffe', 'Robert DeNiro', 'Jeremy Irons', 'Action Adventure Drama Epic Historical-drama', '2019-03-08 16:10:47', '2019-03-08 16:10:47'),
(90, 'The Crying Game', '1992', 'Neil Jordan', 'Stephen Rea', 'Forest Whitaker', 'Drama Thriller', '2019-03-08 16:12:06', '2019-03-08 16:12:06'),
(91, 'The Chamber', '1996', 'James Foley', 'Chris O\'Donnell', 'Gene Hackman', 'Court-room-drama Crime Thriller', '2019-03-08 16:12:53', '2019-03-08 16:12:53'),
(92, 'The Manchurian Candidate', '2004', 'Jonathan Demme', 'Denzel Washington', 'Meryl Streep', 'Action Political-thriller Thriller', '2019-03-08 16:14:29', '2019-03-08 16:14:29'),
(93, 'Klute', '1971', 'Alan J Pakula', 'Jane Fonda', 'Donald Sutherland', 'Crime Drama Romance Thriller', '2019-03-08 16:15:32', '2019-03-08 16:15:32'),
(94, 'Superman', '1978', 'Richard Donner', 'Christopher Reeve', 'Gene Hackman', 'Action Adventure Family Fantasy Superhero', '2019-03-08 16:16:38', '2019-03-08 16:16:38'),
(95, 'Lie to me', '2009', 'Unknown', 'Tim Roth', NULL, 'American-TV-series', '2019-03-08 16:18:50', '2019-03-08 16:18:50'),
(96, 'House of Cards - series one', '2013', 'Unknown', 'Kevin Spacey', 'Robin Wright', 'American-TV-series Political-thriller', '2019-03-08 16:19:57', '2019-03-08 16:19:57'),
(97, 'House of Cards - series two', '2013', 'Unknown', 'Kevin Spacey', 'Robin Wright', 'American-TV-series Political-thriller', '2019-03-08 16:20:45', '2019-03-08 16:20:45'),
(98, 'Mad men - season one', '2007', 'Unknown', 'John Hamm', NULL, 'American-TV-series Drama', '2019-03-08 16:21:28', '2019-03-08 16:21:28'),
(99, 'Girls - season one', '2012', 'Lena Dunham', 'Allison Williams', 'Jemima Kirke', 'American-TV-series', '2019-03-08 16:22:15', '2019-03-08 16:22:15'),
(100, 'Hannibal - season one', '2013', 'Unknown', 'Mads Mikkelson', 'Hugh Dancy', 'American-TV-series Chiller Horror', '2019-03-08 16:23:07', '2019-03-08 16:23:07'),
(101, 'Blade Runner 2049', '2018', 'Ridley Scott', 'Ryan Gosling', 'Harrison Ford', 'Science-fiction', '2019-03-08 16:23:42', '2019-03-08 16:23:42'),
(102, 'Jurassic World', '2015', 'Colin Trevorrow', 'Chris Pratt', NULL, 'Adventure Horror Science-fiction Suspense', '2019-03-08 16:24:41', '2019-03-08 16:24:41'),
(103, 'Monty Python\'s flying circus', '1975', 'Terry Gilliam', 'John Cleese', 'Eric Idle', 'British British-TV-series', '2019-03-08 16:25:18', '2019-03-08 16:25:18'),
(104, 'The Huntsman Winters War', '2016', 'Cedric Troyan', 'Chris Hemsworth', 'Charlize Theron', 'Adventure Fantasy', '2019-03-08 16:26:20', '2019-03-08 16:26:20'),
(105, '3 Days of the Condor', '1975', 'Sydney Pollack', 'Robert Redford', 'Faye Dunaway', 'Political-thriller Thriller', '2019-03-08 16:27:14', '2019-03-08 16:27:14'),
(106, 'Star wars prequel trilogy', '1999', 'George Lucas', 'Ewan McGregor', 'Liam Neeson', 'Action Adventure Family Fantasy Science-fiction', '2019-03-08 16:28:15', '2019-03-08 16:28:15'),
(107, 'Alien versus Predator', '2004', 'Paul Anderson', 'Sanaa Lathan', NULL, 'Action Horror Science-fiction', '2019-03-08 16:29:13', '2019-03-08 16:29:13'),
(108, 'The Lives of others', '2006', 'Florian Henckel von Donnersmarck', 'Martina Gedeck', 'Ulrich Muhe', 'Foreign-language Political-thriller', '2019-03-08 16:30:21', '2019-03-08 16:30:21'),
(109, 'Minority Report', '2002', 'Steven Spielberg', 'Tom Cruise', 'Colin Farrell', 'Action Science-fiction', '2019-03-08 16:31:00', '2019-03-08 16:31:00'),
(110, 'Dracula', '1992', 'Francis Ford Coppola', 'Gary Oldman', 'Winona Ryder', 'Fantasy Horror Supernatural', '2019-03-08 16:31:55', '2019-03-08 16:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_03_04_210535_create_films_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
