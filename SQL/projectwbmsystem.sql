

CREATE TABLE `accounts` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idcard` text NOT NULL,
  `contactnumber` text NOT NULL,
  `address` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=1000037 DEFAULT CHARSET=utf8mb4;


INSERT INTO accounts VALUES
("1000012","ANDRES ","Porass","PORRAS ","admin@gmail.com","123456","images/admin@gmail.com/4497cfeeeb1702bbbb290cf7ecedfe92.jpg","09187224851","Zone 1  Bulan Sorsogon","","1"),
("1000014","LOUIE","G.","GRANTOS","loui@gmail.com","123","images/loui@gmail.com/male-user-profile-picture.png","09187224851","Zone 1 Purok 2","","1"),
("1000016","NINEO","H."," CAECZAR","neo@gmail.com","12345678","images/neo@gmail.com/male-user-profile-picture.png","09187224851","Zone 1 Purok 2","","1"),
("1000018","JHANET","G."," FUNTILAR","jhanet@gmail.com","12345","images/jhanet@gmail.com/male-user-profile-picture.png","09187224851","Zone 1 Purok 2","","1"),
("1000019","ASAULA"," G."," RAMIR","asaula@gmail.com","12345678","images/asaula@gmail.com/male-user-profile-picture.png","09187224851","Zone 1 Purok 2","","1"),
("1000020","ESTOPA ","B. ","FELIPE","filipe@gmail.com","123456","images/filipe@gmail.com/male-user-profile-picture.png","09187224851","Zone 1 Purok 2","","1"),
("1000021"," ENTERIA JR. FRIVALDO","H.","VICENTE","vicent@gmail.com","1357","images/vicent@gmail.com/male-user-profile-picture.png","09187224851","Zone 1 Purok 2","","1"),
("1000023","Arman","G.","Grona","arman@gmail.com","12345","images/arman@gmail.com/male-user-profile-picture.png","09187224851","Zone 1 Purok 2","","1"),
("1000034","Andrian","Lactao","Elemento","andrianelemento41@gmail.com","80456600","images/andrianelemento41@gmail.com/.trashed-1633409431-pexels-eunhyuk-ahn-2894230 - Copy.jpg","09109366801","Zone 1 purok 2","","1"),
("1000035","Leonisa","Lactao","Orias","leonis8@gmail.com","12345678","images/leonis8@gmail.com/.trashed-1633409431-pexels-eunhyuk-ahn-2894230 - Copy.jpg","91093668012","Purok 2","","1"),
("1000036","admin","admin","admin","admin2@gmail.com","12345678","images/admin2@gmail.com/icons8-user-50.png","91093668011","Barangay Zone 1 bulan Sorsogon","","1");




CREATE TABLE `officials` (
  `officialid` int(11) NOT NULL AUTO_INCREMENT,
  `position` enum('Punong Barangay','Barangay Kagawad','Barangay Secretary','Barangay Treasurer','SK Chairman','SK Kagawad') NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `birthdate` text NOT NULL,
  `civilstatus` text NOT NULL,
  `address` text NOT NULL,
  `idcard` text NOT NULL,
  `contact` text NOT NULL,
  `termyears` int(11) NOT NULL,
  `yearstarted` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`officialid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;


INSERT INTO officials VALUES
("10","Barangay Secretary","Goneo","Geronio","Riego","Male","2023-01-11","Married","Barangay Zone 1","../images/Riego Geronio Goneo/joven.jpg","09109366801","3","2023","0"),
("11","Barangay Treasurer","Grona","Gerona","Arman","Male","2023-02-11","Single","Barangay Zone 1","../images/Arman Gerona Grona/arman.jpg","09109366802","3","2020","0"),
("20","Punong Barangay","Elemento","E.","Andrian","Male","2023-02-04","Married","Barangay Zone 1","../images/Andrian E. Elemento/icons8-user-50.png","09109366801","3","2020","0");




CREATE TABLE `reports` (
  `reportid` int(11) NOT NULL AUTO_INCREMENT,
  `incident` text NOT NULL,
  `incidentplace` text NOT NULL,
  `complainant` text NOT NULL,
  `complainee` text NOT NULL,
  `witness1` text NOT NULL,
  `witness2` text NOT NULL,
  `narrative` text NOT NULL,
  `dateandtime` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`reportid`)
) ENGINE=InnoDB AUTO_INCREMENT=90000021 DEFAULT CHARSET=utf8mb4;


INSERT INTO reports VALUES
("90000000","asdg","Bulan","hghgh","bhbh","2","Tony Gonzaga","dfghjkgtd","2023-01-20T11:03","0"),
("90000001","Buabg","Bulan","Boy Topak","Boy lado","Girl topakin","Tony Gonzaga","buangg ","2023-01-21T11:24","0");




CREATE TABLE `residents` (
  `residentid` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` text NOT NULL,
  `middlename` text NOT NULL,
  `firstname` text NOT NULL,
  `gender` text NOT NULL,
  `birthdate` text NOT NULL,
  `civilstatus` text NOT NULL,
  `address` text NOT NULL,
  `idcard` text NOT NULL,
  `contact` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`residentid`)
) ENGINE=InnoDB AUTO_INCREMENT=202200020 DEFAULT CHARSET=utf8mb4;


INSERT INTO residents VALUES
("202200013","PORRAS  ","G.","ANDRES","Male","2023-01-19","Married","Zone 1 Purok 2","../images/PORRAS   G. ANDRES/male-user-profile-picture.png","09109366801","1"),
("202200014","Gollena","Mando","Mike Stephen","Gender","2023-02-01","single","Purok 2","../images/Gollena Mando Mike Stephen/.trashed-1633409431-pexels-eunhyuk-ahn-2894230 - Copy.jpg","0912345678","0");




CREATE TABLE `tbl_brgyinfo` (
  `brgyid` int(11) NOT NULL AUTO_INCREMENT,
  `province` enum('sorsogon') NOT NULL,
  `municipality` enum('bulan') NOT NULL,
  `brg_name` varchar(255) NOT NULL,
  `contactnum` int(11) NOT NULL,
  `brgy_contactname` varchar(255) NOT NULL,
  `brgy_logo` varchar(255) NOT NULL,
  PRIMARY KEY (`brgyid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;


INSERT INTO tbl_brgyinfo VALUES
("2","sorsogon","bulan","Barangay Zone 1 ","2147483647","Kagawad",""),
("3","sorsogon","bulan","Barangay Zone 1 ","2147483647","Kapitan",""),
("4","sorsogon","bulan","Zone","91099933","bb",""),
("5","sorsogon","bulan","Barangay Zone 1","2147483647","kagawad","image.png");




CREATE TABLE `trash` (
  `trash_id` int(11) NOT NULL AUTO_INCREMENT,
  `officialid` int(11) NOT NULL,
  `position` enum('Punong Barangay','Barangay Kagawad','Barangay Secretary','Barangay Treasurer','SK Chairman','SK Kagawad') NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `birthdate` date NOT NULL,
  `civilstatus` enum('single','married','divorced','cohabiting') NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` int(20) NOT NULL,
  `termyears` int(11) NOT NULL,
  `yearstarted` year(4) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`trash_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




