-- Database: `demo` and php web application user
CREATE DATABASE assignment02;
GRANT USAGE ON *.* TO 'root';
GRANT ALL PRIVILEGES ON assignment02.* TO 'root' ;
FLUSH PRIVILEGES;

USE assignment02;
--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` ( `firstname`,`lastname`,`email`,`phonenumber`, `username`, `password`) VALUES
('Roland','Berger','rberger@yahoo.ca','613-000-1234', 'RBerger', 'Rb123456'),
('Victoria','Beckham','vbeckham@gmail.com','888-888-8888', 'VBecham','Vb123456'),
('Jesse','Julien','julienj@gmail.com','776-124-5688', 'Jjesse','J1988j123'),
('Larry','Schenider','Schelarry@ymail.com','909-101-6789', 'SchLarry','Slarry56789!');
