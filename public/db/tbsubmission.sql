CREATE TABLE `tbsubmission` (
  `submission_id` int(11) NOT NULL,
  `hacker_id` int(11) NOT NULL,
  `challenge_id` int(11) DEFAULT NULL,
  `score` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`submission_id`)
)
